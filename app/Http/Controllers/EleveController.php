<?php
namespace App\Http\Controllers;

use PDF; // Importez la facade Snappy
use App\Models\Classe;
use App\Models\Eleve;
use App\Models\Parents;
use App\Models\SchoolConfiguration;
use App\Models\AnneeScolaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Dompdf\Dompdf; // Import the Dompdf class
use Dompdf\Options;

class EleveController extends Controller
{
    public function index()
    {
        $eleves = Eleve::all();
        $parents = Parents::all();
        $classes = Classe::all(); // Récupérez toutes les classes pour le formulaire de sélection.

        return view('eleves.index', compact('eleves', 'classes', 'parents'));
    }

    public function create()
    {
        // Afficher le formulaire de création d'un nouvel élève
        return view('eleves.create');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'nom_arabe' => 'required|string|max:255',
            'prenom_arabe' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'lieu_naissance' => 'required|string|max:255',
            'sexe' => 'required|in:garcon,fille',
            'adresse' => 'required|string|max:255',
            'pays' => 'required|string|max:255',
            'classe_id' => 'required|exists:classes,id', // Vérifier que l'id de la classe existe dans la table 'classes'
            'parent_id' => 'required|exists:parents,id', // Make sure the parent_id exists in the parents table
            'bloquee' => 'nullable|boolean',
        ]);

        // Si la validation échoue, rediriger avec les erreurs
        if ($validator->fails()) {
            return redirect()->route('eleves.create')
                ->withErrors($validator)
                ->withInput();
        }

        // Créer un nouvel élève et enregistrer dans la base de données
        Eleve::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'nom_arabe' => $request->input('nom_arabe'),
            'prenom_arabe' => $request->input('prenom_arabe'),
            'date_naissance' => $request->input('date_naissance'),
            'lieu_naissance' => $request->input('lieu_naissance'),
            'sexe' => $request->input('sexe'),
            'adresse' => $request->input('adresse'),
            'pays' => $request->input('pays'),
            'classe_id' => $request->input('classe_id'),
            'parent_id' => $request->input('parent_id'),
            'bloquee' => $request->input('bloquee', false), // Set the 'bloquee' field with the input value or default to false if not provided.

        ]);

        // Rediriger vers la liste des élèves avec un message de succès
        return redirect()->route('eleves.index')->with('success', 'Nouvel élève ajouté avec succès !');
    }

    public function show(Eleve $eleve)
    {
        // Afficher les détails d'un élève spécifique
        return view('eleves.show', compact('eleve'));
    }

    public function edit(Eleve $eleve)
    {
        $classes = Classe::all(); // Fetch all classes to use in the select dropdown
        $parents = Parents::all();
        return view('eleves.edit', compact('eleve', 'classes', 'parents'));
    }

    public function update(Request $request, Eleve $eleve)
    {
        // Valider les données du formulaire
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'nom_arabe' => 'required|string|max:255',
            'prenom_arabe' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'lieu_naissance' => 'required|string|max:255',
            'sexe' => 'required|in:garcon,fille',
            'adresse' => 'required|string|max:255',
            'pays' => 'required|string|max:255',
            'classe_id' => 'required|exists:classes,id', // Vérifier que l'id de la classe existe dans la table 'classes'
            'parent_id' => 'nullable|exists:parents,id', // Vérifier que l'id du parent existe dans la table 'parents' (si applicable)
            'bloquee' => 'nullable|boolean',
        ]);

        // Si la validation échoue, rediriger avec les erreurs
        if ($validator->fails()) {
            return redirect()->route('eleves.edit', ['eleve' => $eleve->id])
                ->withErrors($validator)
                ->withInput();
        }

        // Mettre à jour les informations de l'élève dans la base de données
        $eleve->update([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'nom_arabe' => $request->input('nom_arabe'),
            'prenom_arabe' => $request->input('prenom_arabe'),
            'date_naissance' => $request->input('date_naissance'),
            'lieu_naissance' => $request->input('lieu_naissance'),
            'sexe' => $request->input('sexe'),
            'adresse' => $request->input('adresse'),
            'pays' => $request->input('pays'),
            'classe_id' => $request->input('classe_id'),
            'parent_id' => $request->input('parent_id'), // Mettre à jour le parent_id (si applicable)
            'bloquee' => $request->input('bloquee', false), // Set the 'bloquee' field with the input value or default to false if not provided.

        ]);

        // Rediriger vers la liste des élèves avec un message de succès
        return redirect()->route('eleves.index')->with('success', 'Informations de l\'élève mises à jour avec succès !');
    }

    public function destroy(Eleve $eleve)
    {
        // Supprimer l'élève de la base de données
        $eleve->delete();

        // Rediriger vers la liste des élèves avec un message de succès
        return redirect()->route('eleves.index')->with('success', 'Élève supprimé avec succès !');
    }
    public function fichefr(Eleve $eleve)
    {
        // Get the current date
        $currentDate = date('Y-m-d');

        // Fetch the academic year from the database based on the current date
        $academicYear = AnneeScolaire::where('date_debut', '<=', $currentDate)
            ->where('date_fin', '>=', $currentDate)
            ->first();

        // Récupérer les informations de l'école depuis la base de données (ou utilisez les données préalablement chargées)
        $schoolConfiguration = SchoolConfiguration::first(); // Assurez-vous d'importer le modèle "SchoolConfiguration" en haut du fichier
        //dd($schoolConfiguration);
        $html = '<html>';
        $html .= '<head>';
        $html .= '<title>Attestation de présence</title>'; // Ajouter le titre du PDF ici
        $html .= '<style>';
        $html .= 'p { font-size: 21px; }'; // Définir la taille de police pour les paragraphes (ici, 18px)
        $html .= 'h1 { font-size: 24px; }'; // Définir la taille de police pour les titres h1 (ici, 24px)
        $html .= '</style>';
        $html .= '</head>';
        $html .= '<body>';
        // Générer le contenu HTML pour le PDF en utilisant les informations de l'élève et de l'école
        $html .= '<h3>République Tunisienne</h3>';
        $html .= '<h3>Ministère de l\'éducation</h3>';
        $html .= '<h3>Direction régionale de l\'éducation</h3>';
        $html .= '<h3>' . addslashes($schoolConfiguration->nom_complet_fr) . '</h3>';
        // Informations du footer
        $html .= '<div style="position: absolute; top: 20px; right: 30px; text-align: right; width: 100%;">';
        //$html .= '<img src="' . $schoolConfiguration->logo . '" style="max-width: 100px; max-height: 100px;">';

        $html .= '<img class="card-img card-img-left" src="' . asset('logos/' . $schoolConfiguration->logo) . '" style="max-width: 100px; max-height: 100px;">';
        $html .= '<p style="font-size: 15px;"> ' . $academicYear->titre . '</p>';

        $html .= '</div><br>'; // Add a line break



        // Fetch the class name using the relationship
        $classeNom = $eleve->classe ? $eleve->classe->nom : 'Non défini';
        // Determine the gender-specific suffix
        $genderSuffix = $eleve->sexe === 'fille' ? 'e' : '';

        $html .= '<div style="text-align: center;">';
        $html .= '<h1>Attestation de présence</h1>';
        $html .= '</div>';
        $html .= '<br><br><p>Je soussigne le directeur de l\'' . addslashes($schoolConfiguration->nom_complet_fr) . ' atteste que l\'élève :</p>';
        $html .= '<p>Nom: ' . $eleve->nom . '</p>';
        $html .= '<p>Prénom: ' . $eleve->prenom . '</p>';
        $html .= '<p>Né le : ' . $eleve->date_naissance . '</p>';
        if ($academicYear) {
            $html .= '<p>Classe: ' . $classeNom . '</p>';
            $html .= '<p>est inscrit' . $genderSuffix . ' au sein de l\'établissement pendant l\'année scolaire: ' . $academicYear->titre . '</p>';
        } else {
            $html .= '<p>est actuellement non inscrit' . $genderSuffix . ' pour l\'année scolaire</p>';
        }

        $html .= '<br><p style="position: absolute; right: 70px;">' . $schoolConfiguration->gouvernorat . ', Le ' . $currentDate . '</p>';
        $html .= '<br><p style="position: absolute; right: 95px;">Directeur</p>';


        // Initialiser Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optionnel) Vous pouvez personnaliser les options de Dompdf si nécessaire
        // $dompdf->setPaper('A4', 'portrait');


        // Informations du footer
        $footerHtml = '<div style="position: absolute; bottom: 0px; text-align: center; width: 100%;">';
        $footerHtml .= '<hr>';
        $footerHtml .= '<p>' . $schoolConfiguration->adresse_complet . '';
        $footerHtml .= ',' . $schoolConfiguration->gouvernorat . '';
        $footerHtml .= ', ' . $schoolConfiguration->email . '';
        $footerHtml .= ', ' . $schoolConfiguration->telephone . '</p>';
        $footerHtml .= '</div>';
        $footerHtml .= '</body>';
        $footerHtml .= '</html';

        // Initialiser Dompdf avec les options
        $options = new Options();
        $options->setIsRemoteEnabled(true); // Permet de charger des images et des styles à partir de liens distants
        $dompdf = new Dompdf($options);

        $dompdf->loadHtml($html . $footerHtml);

        // Rendre le contenu HTML en PDF
        $dompdf->render();
        // Générer un nom de fichier unique pour le PDF
        $fileName = 'fiche_eleve_' . $eleve->id . '.pdf';

        // Enregistrer le PDF dans le répertoire de stockage de votre choix (par exemple, dans le dossier public)
        $dompdf->stream($fileName, ['Attachment' => false]);

        // Vous pouvez également enregistrer le PDF sur le disque si vous le souhaitez :
        // $dompdf->save(storage_path('pdf/' . $fileName));

        // Terminer le script
        exit();
    }
    public function fichear(Eleve $eleve)
    {
        // Code pour récupérer les informations de l'élève et de l'école...

    $html = '<html>';
    // Le reste de votre contenu HTML...
    $html .= '</html>';

    // Utilisez la facade PDF pour générer le PDF
    $html = '<p>This is some HTML content for the PDF.</p>';

    // Import the facade directly in the method where you want to use it.
    $pdf = \PDF::loadHTML($html);

    // Générer un nom de fichier unique pour le PDF
    $fileName = 'fiche_eleve_' . $eleve->id . '.pdf';

    // Enregistrer le PDF dans le répertoire de stockage de votre choix (par exemple, dans le dossier public)
    return $pdf->download($fileName);

    // Vous pouvez également enregistrer le PDF sur le disque si vous le souhaitez :
    // return $pdf->save(storage_path('pdf/' . $fileName));
    }

    public function fichieerer(Eleve $eleve)
    {
        // Créer une instance de Dompdf
        $dompdf = new Dompdf();

        // Configuration des options, y compris la police par défaut
        $options = new Options();
        $options->set('defaultFont', 'Arial Unicode MS'); // Spécifier la police prenant en charge l'arabe
        $dompdf->setOptions($options);

        // Get the current date
        $currentDate = date('Y-m-d');

        // Fetch the academic year from the database based on the current date
        $academicYear = AnneeScolaire::where('date_debut', '<=', $currentDate)
            ->where('date_fin', '>=', $currentDate)
            ->first();

        // Récupérer les informations de l'école depuis la base de données (ou utilisez les données préalablement chargées)
        $schoolConfiguration = SchoolConfiguration::first(); // Assurez-vous d'importer le modèle "SchoolConfiguration" en haut du fichier
        //dd($schoolConfiguration);
        $html = '<html>';
        $html .= '<head>';
        $html .= '<title>شهادة حضور</title>'; // Ajouter le titre du PDF ici
        $html .= '<meta charset="UTF-8">';
        $html .= '<style>';
        $html .= 'p { font-size: 21px; }'; // Définir la taille de police pour les paragraphes (ici, 18px)
        $html .= 'h1 { font-size: 24px; }'; // Définir la taille de police pour les titres h1 (ici, 24px)
        $html .= '</style>';
        $html .= '</head>';
        $html .= '<body>';
        // Générer le contenu HTML pour le PDF en utilisant les informations de l'élève et de l'école
        $html .= ' <h3>الجمهورية التونسية</h3>';
        $html .= '<h3>وزارة التربية</h3>';
        $html .= '<h3>Direction régionale de l\'éducation</h3>';
        $html .= '<h3>' . addslashes($schoolConfiguration->nom_complet_fr) . '</h3>';
        // Informations du footer
        $html .= '<div style="position: absolute; top: 20px; right: 30px; text-align: right; width: 100%;">';
        //$html .= '<img src="' . $schoolConfiguration->logo . '" style="max-width: 100px; max-height: 100px;">';

        $html .= '<img class="card-img card-img-left" src="' . asset('logos/' . $schoolConfiguration->logo) . '" style="max-width: 100px; max-height: 100px;">';
        $html .= '<p style="font-size: 15px;"> ' . $academicYear->titre . '</p>';

        $html .= '</div><br>'; // Add a line break



        // Fetch the class name using the relationship
        $classeNom = $eleve->classe ? $eleve->classe->nom : 'Non défini';
        // Determine the gender-specific suffix
        $genderSuffix = $eleve->sexe === 'fille' ? 'e' : '';

        $html .= '<div style="text-align: center;">';
        $html .= '<h1>Attestation de présence</h1>';
        $html .= '</div>';
        $html .= '<br><br><p>Je soussigne le directeur de l\'' . addslashes($schoolConfiguration->nom_complet_fr) . ' atteste que l\'élève :</p>';
        $html .= '<p>Nom: ' . $eleve->nom . '</p>';
        $html .= '<p>Prénom: ' . $eleve->prenom . '</p>';
        $html .= '<p>Né le : ' . $eleve->date_naissance . '</p>';
        if ($academicYear) {
            $html .= '<p>Classe: ' . $classeNom . '</p>';
            $html .= '<p>est inscrit' . $genderSuffix . ' au sein de l\'établissement pendant l\'année scolaire: ' . $academicYear->titre . '</p>';
        } else {
            $html .= '<p>est actuellement non inscrit' . $genderSuffix . ' pour l\'année scolaire</p>';
        }

        $html .= '<br><p style="position: absolute; right: 70px;">' . $schoolConfiguration->gouvernorat . ', Le ' . $currentDate . '</p>';
        $html .= '<br><p style="position: absolute; right: 95px;">Directeur</p>';



        // (Optionnel) Vous pouvez personnaliser les options de Dompdf si nécessaire
        // $dompdf->setPaper('A4', 'portrait');


        // Informations du footer
        $footerHtml = '<div style="position: absolute; bottom: 0px; text-align: center; width: 100%;">';
        $footerHtml .= '<hr>';
        $footerHtml .= '<p>' . $schoolConfiguration->adresse_complet . '';
        $footerHtml .= ',' . $schoolConfiguration->gouvernorat . '';
        $footerHtml .= ', ' . $schoolConfiguration->email . '';
        $footerHtml .= ', ' . $schoolConfiguration->telephone . '</p>';
        $footerHtml .= '</div>';
        $footerHtml .= '</body>';
        $footerHtml .= '</html';

        // Initialiser Dompdf avec les options
        $options = new Options();
        $options->setIsRemoteEnabled(true); // Permet de charger des images et des styles à partir de liens distants

        $options->set('defaultFont', 'Arial Unicode MS'); // Spécifiez la police prenant en charge l'arabe
        $options->set('isRemoteEnabled', true); // Activer le chargement d'images à partir de liens distants (le cas échéant)
        // Initialiser Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        $dompdf = new Dompdf($options);

        $dompdf->loadHtml($html . $footerHtml);

        // Rendre le contenu HTML en PDF
        $dompdf->render();
        // Générer un nom de fichier unique pour le PDF
        $fileName = 'fiche_eleve_' . $eleve->id . '.pdf';

        // Enregistrer le PDF dans le répertoire de stockage de votre choix (par exemple, dans le dossier public)
        $dompdf->stream($fileName, ['Attachment' => false]);

        // Vous pouvez également enregistrer le PDF sur le disque si vous le souhaitez :
        // $dompdf->save(storage_path('pdf/' . $fileName));

        // Terminer le script
        exit();
    }
}
