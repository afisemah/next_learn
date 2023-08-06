<div class="container">
				<div class="row" id="content-wrapper">
					<div class="col-xs-12">

						<div class="page-header page-header-with-buttons">
							<h1 class="pull-left">
								<i class="fa fa-user"></i> <span>éléve</span>
							</h1>


						</div>



						
							<div class="row box box-transparent">
								<div class="col-xs-4 col-sm-2" style="visibility: hidden;">
									<div class="box-quick-link blue-background">
										<a href="#">
											<div class="header">
												<div class="fa fa-comments"></div>
											</div>
											<div class="content">
												Observations
											</div>
										</a>
									</div>
								</div>
								<div class="col-xs-4 col-sm-2">
									<div class="box-quick-link green-background">
										<a href="student">
											<div class="header">
												<img width="50" height="50" src="resources/assets/images/images-inc/liststudent.png">
											</div>
											<div class="content">
												Liste Élèves
											</div>
										</a>
									</div>
								</div>
								<div class="col-xs-4 col-sm-2">
									<div class="box-quick-link orange-background">
										<a href="ajoutstudent">
											<div class="header">
												<img width="50" height="50" src="resources/assets/images/images-inc/adduser.png">
											</div>
											<div class="content">
												Ajout Élèves
											</div>
										</a>
									</div>
								</div>
								<div class="col-xs-4 col-sm-2">
									<div class="box-quick-link purple-background">
										<a href="ImportStudent">
											<div class="header">
												<img width="50" height="50" src="resources/assets/images/images-inc/importfile.png">
											</div>
											<div class="content">
												Import Fichier
											</div>
										</a>
									</div>
								</div>

								<div class="col-xs-4 col-sm-2">
									<div class="box-quick-link bg-test7">
										<a href="studentbloque">
											<div class="header">
												<img width="50" height="50" src="resources/assets/images/images-inc/liststudent.png">
											</div>
											<div class="content">
												Liste élèves bloqués
											</div>
										</a>
									</div>
								</div>

								<!--                 <div class='col-xs-4 col-sm-2'> -->
								<!--                   <div class='box-quick-link muted-background'> -->
								<!--                     <a href='UrgentprofileStudent'> -->
								<!--                       <div class='header'> -->
								<!--                        <img width="50" height="50" src="resources/assets/images/images-inc/interdit.png">   -->
								<!--                       </div> -->
								<!--                       <div class='content'>Elimination</div> -->
								<!--                     </a> -->
								<!--                   </div> -->
								<!--                 </div> -->

							</div>
						


<div class="row">
 <div class="col-xs-4 col-sm-5">
						<hr class="hr-drouble">
						</div>
						<div class="col-xs-4 col-sm-1" onclick="videoaide()">
						<img class="fa fa-times" width="80" height="80" style="margin-top: -21%; margin-left: 14%" src="resources/assets/images/help.png">
						
						</div>
						<div class="col-xs-4 col-sm-5">
						<hr class="hr-drouble">
						</div>
						</div>
                             
            
            
            <div class="row" id="videooo" style="visibility: hidden;display: none "> 
 <input value="1" id="test" hidden="">
        <br>
<iframe width="100%" height="500" src="https://www.youtube.com/embed/h5ivqJHoyq4">
</iframe>

</div>

						<a href="DemoExportStudent">
							<figure class="centerImg">
								<img width="100" height="100" src="resources/assets/images/images-inc/excel-icon.png">
								<figcaption>
									<b>Example du fichier XLS</b>
								</figcaption>
							</figure>
						</a>

						<div class="row">

							<div class="col-sm-12">
								<div class="box bordered-box blue-border">
									<div class="box-header green-background">
										<div class="title">
											Import liste des élèves avec fichier
										</div>

									</div>

									<div class="box-content">
										<div class="row">
											<form id="springFileVO" name="fileUploader" acceptcharset="UTF-8" action="importstd" method="post" enctype="multipart/form-data">

												<div class="col-sm-5">
													<div class="form-group">
														<label>Classes</label>
														<select id="batchId" name="batchId" tabindex="-1" aria-hidden="true" class="select2 form-control select2-hidden-accessible" required="required">
															<option value="0" selected="selected">
																Choisissez une classe
															</option>
															
																<option value="6979">Septième année :&nbsp;7B1 </option>
															
																<option value="7597">Septième année :&nbsp;7B2 </option>
															
																<option value="7598">Septième année :&nbsp;7B3 </option>
															
																<option value="7599">Septième année :&nbsp;7B4 </option>
															
																<option value="6980">Huitième année :&nbsp;8B1 </option>
															
																<option value="6981">Huitième année :&nbsp;8B2 </option>
															
																<option value="6982">Huitième année :&nbsp;8B3 </option>
															
																<option value="6983">Huitième année :&nbsp;8B4 </option>
															
																<option value="6984">Huitième année :&nbsp;8B5 </option>
															
																<option value="6985">Neuvième année :&nbsp;9B1 </option>
															
																<option value="6986">Neuvième année :&nbsp;9B2 </option>
															
																<option value="6987">Neuvième année :&nbsp;9B3 </option>
															
																<option value="6988">Neuvième année :&nbsp;9B4 </option>
															
																<option value="6989">Première année secondaire :&nbsp;1S1 </option>
															
																<option value="7602">Première année secondaire :&nbsp;1S2 </option>
															
																<option value="6990">Deuxième année secondaire:&nbsp;2SC </option>
															
																<option value="6991">Troisiéme année secondaire:&nbsp;3 Maths </option>
															
																<option value="7751">Troisiéme année secondaire:&nbsp;3ème SC </option>
															
																<option value="6992">Quatrième année secondaire:&nbsp;4 TECH </option>
															
														</select>

													</div>

													<div class="row">

														<div class="form-group">
															<p>
																<strong>Selectionner le fichier excel (.xls) </strong>
															</p>
															<div>


																<div class="file-input file-input-new theme-fa">
<div class="kv-upload-progress hide"><div class="progress">
    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
        0%
     </div>
</div></div>
<div class="input-group file-caption-main">
   <div tabindex="500" class="form-control file-caption  kv-fileinput-caption">
   <div class="file-caption-name"></div>
</div>

   <div class="input-group-btn">
       <button type="button" tabindex="500" title="Annuler le fichier séléctionné" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="fa fa-trash"></i>  <span class="hidden-xs">Supprimer</span></button>
       <button type="button" tabindex="500" title="Interrompre le téléchargement en cours" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="fa fa-ban"></i>  <span class="hidden-xs">Annuler</span></button>
         <div tabindex="500" class="btn btn-primary btn-file"><i class="fa fa-folder-open"></i>  <span class="hidden-xs">Sélectionner …</span><input id="fileData" name="fileData" data-show-preview="false" data-file-input="true" type="file" required="required" value=""></div>
   </div>
</div></div><div id="kvFileinputModal" class="file-zoom-dialog modal fade" tabindex="-1" aria-labelledby="kvFileinputModalLabel"><div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <div class="kv-zoom-actions pull-right"><button type="button" class="btn btn-default btn-header-toggle btn-toggleheader" title="En-tête" data-toggle="button" aria-pressed="false" autocomplete="off"><i class="fa fa-arrows-v"></i></button><button type="button" class="btn btn-default btn-fullscreen" title="Plein écran" data-toggle="button" aria-pressed="false" autocomplete="off"><i class="fa fa-arrows-alt"></i></button><button type="button" class="btn btn-default btn-borderless" title="Mode sans bordures" data-toggle="button" aria-pressed="false" autocomplete="off"><i class="fa fa-external-link"></i></button><button type="button" class="btn btn-default btn-close" title="Fermer les détails" data-dismiss="modal" aria-hidden="true"><i class="fa fa-remove"></i></button></div>
      <h3 class="modal-title">Prévisualisation Détaillée <small><span class="kv-zoom-title"></span></small></h3>
    </div>
    <div class="modal-body">
      <div class="floating-buttons"></div>
      <div class="kv-zoom-body file-zoom-content"></div>
<button type="button" class="btn btn-navigate btn-prev" title="Voir le fichier pécedent"><i class="fa fa-caret-left fa-lg"></i></button> <button type="button" class="btn btn-navigate btn-next" title="Voir le fichier suivant"><i class="fa fa-caret-right fa-lg"></i></button>
    </div>
  </div>
</div>
</div>
															</div>
														</div>


													</div>



												</div>
												<br>
												<br>
												<br>
												<br>
												<br>
												<br>
												<br>
												<br>
												<div style="margin-bottom: 0;">
													<div>
														<button type="submit" class="btn btn-primary btn-lg">
															<i class="fa fa-floppy-o"></i>
															Importer
														</button>
													</div>
												</div>

											</form>
										</div>

									</div>
								</div>


							</div>
							<footer id="footer">
								<div class="footer-wrapper">
									<div class="row">
										<div class="col-sm-6 text">
											Copyright © Educanet-2019
										</div>

									</div>
								</div>
							</footer>
						</div>
		</div></div></div>