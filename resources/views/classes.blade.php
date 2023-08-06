<section id="content">
			<div class="container">
				<div class="row" id="content-wrapper">
					<div class="col-xs-12">

						<div class="page-header page-header-with-buttons">
							<h1 class="pull-left">
								<i class="fa fa-user"></i> <span>Classes</span>
							</h1>

						</div>



						<div class="row box box-transparent">

							<div class=" col-xs-4 col-sm-2">
								<div class="box-quick-link bg-test3">
									<a href="Moduleped">
										<div class="header">
											<img width="50" height="50" src="resources/assets/images/aa/mod.png">
										</div>
										<div class="content">
											Modules pédagogiques
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-4 col-sm-2">
								<div class="box-quick-link green-background">
									<a href="specialite">
										<div class="header">
											<img width="50" height="50" src="resources/assets/images/images-inc/cat.png">
										</div>
										<div class="content">
											Liste types d´enseignements
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-4 col-sm-2">
								<div class="box-quick-link orange-background">
									<a href="niveau">
										<div class="header">
											<img width="50" height="50" src="resources/assets/images/images-inc/ik.jpg">
										</div>
										<div class="content">
											Liste Niveaux
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-3 col-sm-2">
								<div class="box-quick-link purple-background">
									<a href="class">
										<div class="header">
											<img width="50" height="50" src="resources/assets/images/images-inc/classroom.png">
										</div>
										<div class="content">
											Liste des Classes
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-3 col-sm-2">
								<div class="box-quick-link blue-background">
									<a href="matiere">
										<div class="header">
											<img width="50" height="50" src="resources/assets/images/images-inc/mat.jpg">
										</div>
										<div class="content">
											Liste Matières
										</div>
									</a>
								</div>
							</div>
							<div class=" col-xs-3 col-sm-2">
								<div class="box-quick-link bg-test3">
									<a href="passage">
										<div class="header">
											<img width="50" height="50" src="resources/assets/images/images-inc/classroom.png">
										</div>
										<div class="content">
											Passage de classes
										</div>
									</a>
								</div>
							</div>

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
<iframe width="100%" height="500" src="https://www.youtube.com/embed/sMODoEO4aKA">
</iframe>

</div>


						<div id="bloccc" style="visibility: visible">
							<div class="row">
								<div class="col-sm-12">
									<div class="box">
										<div class="box-header red-background">
											<div class="title">
												<div class="fa fa-pencil-square-o"></div>
												Ajout Classe
												 
											</div>
											<div class="actions">
												<a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
												</a>
											</div>
										</div>
										<div class="box-content">
											<form modelattribute="classModel" accept-charset="UTF-8" class="form" style="margin-bottom: 0;" method="POST" action="createclass">

												<div class="form-group">
													<label for="inputSelect">Niveau</label> <br> <select name="niveauid" id="idNe" data-placeholder="veuillez choisi un niveau" class="select2 form-control select2-hidden-accessible" required="required" tabindex="-1" aria-hidden="true">
														
															<option value="1197">Septième année </option>
														
															<option value="1198">Huitième année </option>
														
															<option value="1199">Neuvième année </option>
														
															<option value="1447">Première année secondaire </option>
														
															<option value="1448">Deuxième année secondaire</option>
														
															<option value="1572">Troisiéme année secondaire</option>
														
															<option value="1977">Quatrième année secondaire</option>
														

													</select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" style="width: 1076px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-idNe-container"><span class="select2-selection__rendered" id="select2-idNe-container" title="Septième année ">Septième année </span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
												<div class="form-group">
													<label for="inputSelect">Type d´enseignement</label> <br> <select name="spacialityid" id="idspec" data-placeholder="veuillez choisi une specialité" class="select2 form-control select2-hidden-accessible" required="required" tabindex="-1" aria-hidden="true">
														
															<option value="392">enseignement de base </option>
														
															<option value="455">enseignement secondaire </option>
														

													</select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" style="width: 1076px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-idspec-container"><span class="select2-selection__rendered" id="select2-idspec-container" title="enseignement de base ">enseignement de base </span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
												<div class="form-group">
													<label for="inputText">Nom de la classe</label> <input required="required" class="form-control" id="inputText" name="nom" placeholder="Text field" type="text">
												</div>

												<div class="form-group">
													<label for="inputTextArea">Description</label>
													<textarea class="form-control" id="inputTextArea" placeholder="Textarea" rows="3" name="description"></textarea>
												</div>

												<div style="margin-bottom: 0;">
													<div>
														<button type="submit" class="btn btn-primary btn-lg">
															<i class="fa fa-floppy-o"></i>
															Enregister
														</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<div class="box bordered-box orange-border" style="margin-bottom: 0;">
										<div class="box-header red-background">
											<div class="title">
												Liste des Classes
											</div>
											<div class="actions">
												<a class="btn box-remove btn-xs btn-link" href="#"><i class="fa fa-times"></i> </a> <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
												</a>
											</div>
										</div>
										<div class="se-pre-con"></div>
										<div class="box-content box-no-padding">
											<div class="responsive-table">
												<div class="scrollable-area">
													<div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="table_length"><label>Afficher <select name="table_length" aria-controls="table" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> données</label></div></div><div class="col-sm-6"><div id="table_filter" class="dataTables_filter"><label>Recherche:<input type="search" class="form-control input-sm" placeholder="Recherche..." aria-controls="table"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="table" class="data-table-column-filter table table-bordered table-striped dataTable" style="margin-bottom: 0px; width: 1095px;" role="grid" aria-describedby="table_info">
														<thead>
															<tr role="row"><th hidden="" class="sorting_asc" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 0px;">ID</th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Nom de la classe: activate to sort column ascending" style="width: 138px;">Nom de la classe</th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Niveau: activate to sort column ascending" style="width: 185px;">Niveau</th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 96px;">Description</th><th hidden="" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="niveauid: activate to sort column ascending" style="width: 0px;">niveauid</th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 521px;">Action</th></tr>
														</thead>
														<tbody>
															
																
															
																
															
																
															
																
															
																
															
																
															
																
															
																
															
																
															
																
															
																
															
																
															
																
															
																
															
																
															
																
															
																
															
																
															
																
															
														<tr role="row" class="odd">
																	<td hidden="" class="sorting_1">6979</td>
																	<td>7B1</td>
																	<td>Septième année </td>
																	<td hidden="">1197</td>
																	<td></td>
																	<td>
																		<center>


																			<a> <input type="button" onclick="edit(this)" value="Modifier" class="btn btn-success  " data-toggle="modal" data-target="#myModal">
																			</a>
																			

																				<input type="button" value="Supprimer" data-toggle="modal" data-target="#basicExampleModal" class="btn btn-danger " onclick="delet(this)">
																			

																			<input type="button" value="Educonnect" data-toggle="modal" data-target="#synchroneExampleModal" class="btn btn-info " onclick="synchrone(this)">

																			<input type="button" value="affecter enseignant carnet" class="btn btn-danger " onclick="affect(this)">

																		</center>
																	</td>

																</tr><tr role="row" class="even">
																	<td hidden="" class="sorting_1">6980</td>
																	<td>8B1</td>
																	<td>Huitième année </td>
																	<td hidden="">1198</td>
																	<td></td>
																	<td>
																		<center>


																			<a> <input type="button" onclick="edit(this)" value="Modifier" class="btn btn-success  " data-toggle="modal" data-target="#myModal">
																			</a>
																			

																				<input type="button" value="Supprimer" data-toggle="modal" data-target="#basicExampleModal" class="btn btn-danger " onclick="delet(this)">
																			

																			<input type="button" value="Educonnect" data-toggle="modal" data-target="#synchroneExampleModal" class="btn btn-info " onclick="synchrone(this)">

																			<input type="button" value="affecter enseignant carnet" class="btn btn-danger " onclick="affect(this)">

																		</center>
																	</td>

																</tr><tr role="row" class="odd">
																	<td hidden="" class="sorting_1">6981</td>
																	<td>8B2</td>
																	<td>Huitième année </td>
																	<td hidden="">1198</td>
																	<td></td>
																	<td>
																		<center>


																			<a> <input type="button" onclick="edit(this)" value="Modifier" class="btn btn-success  " data-toggle="modal" data-target="#myModal">
																			</a>
																			

																				<input type="button" value="Supprimer" data-toggle="modal" data-target="#basicExampleModal" class="btn btn-danger " onclick="delet(this)">
																			

																			<input type="button" value="Educonnect" data-toggle="modal" data-target="#synchroneExampleModal" class="btn btn-info " onclick="synchrone(this)">

																			<input type="button" value="affecter enseignant carnet" class="btn btn-danger " onclick="affect(this)">

																		</center>
																	</td>

																</tr><tr role="row" class="even">
																	<td hidden="" class="sorting_1">6982</td>
																	<td>8B3</td>
																	<td>Huitième année </td>
																	<td hidden="">1198</td>
																	<td></td>
																	<td>
																		<center>


																			<a> <input type="button" onclick="edit(this)" value="Modifier" class="btn btn-success  " data-toggle="modal" data-target="#myModal">
																			</a>
																			

																				<input type="button" value="Supprimer" data-toggle="modal" data-target="#basicExampleModal" class="btn btn-danger " onclick="delet(this)">
																			

																			<input type="button" value="Educonnect" data-toggle="modal" data-target="#synchroneExampleModal" class="btn btn-info " onclick="synchrone(this)">

																			<input type="button" value="affecter enseignant carnet" class="btn btn-danger " onclick="affect(this)">

																		</center>
																	</td>

																</tr><tr role="row" class="odd">
																	<td hidden="" class="sorting_1">6983</td>
																	<td>8B4</td>
																	<td>Huitième année </td>
																	<td hidden="">1198</td>
																	<td></td>
																	<td>
																		<center>


																			<a> <input type="button" onclick="edit(this)" value="Modifier" class="btn btn-success  " data-toggle="modal" data-target="#myModal">
																			</a>
																			

																				<input type="button" value="Supprimer" data-toggle="modal" data-target="#basicExampleModal" class="btn btn-danger " onclick="delet(this)">
																			

																			<input type="button" value="Educonnect" data-toggle="modal" data-target="#synchroneExampleModal" class="btn btn-info " onclick="synchrone(this)">

																			<input type="button" value="affecter enseignant carnet" class="btn btn-danger " onclick="affect(this)">

																		</center>
																	</td>

																</tr><tr role="row" class="even">
																	<td hidden="" class="sorting_1">6984</td>
																	<td>8B5</td>
																	<td>Huitième année </td>
																	<td hidden="">1198</td>
																	<td></td>
																	<td>
																		<center>


																			<a> <input type="button" onclick="edit(this)" value="Modifier" class="btn btn-success  " data-toggle="modal" data-target="#myModal">
																			</a>
																			

																				<input type="button" value="Supprimer" data-toggle="modal" data-target="#basicExampleModal" class="btn btn-danger " onclick="delet(this)">
																			

																			<input type="button" value="Educonnect" data-toggle="modal" data-target="#synchroneExampleModal" class="btn btn-info " onclick="synchrone(this)">

																			<input type="button" value="affecter enseignant carnet" class="btn btn-danger " onclick="affect(this)">

																		</center>
																	</td>

																</tr><tr role="row" class="odd">
																	<td hidden="" class="sorting_1">6985</td>
																	<td>9B1</td>
																	<td>Neuvième année </td>
																	<td hidden="">1199</td>
																	<td></td>
																	<td>
																		<center>


																			<a> <input type="button" onclick="edit(this)" value="Modifier" class="btn btn-success  " data-toggle="modal" data-target="#myModal">
																			</a>
																			

																				<input type="button" value="Supprimer" data-toggle="modal" data-target="#basicExampleModal" class="btn btn-danger " onclick="delet(this)">
																			

																			<input type="button" value="Educonnect" data-toggle="modal" data-target="#synchroneExampleModal" class="btn btn-info " onclick="synchrone(this)">

																			<input type="button" value="affecter enseignant carnet" class="btn btn-danger " onclick="affect(this)">

																		</center>
																	</td>

																</tr><tr role="row" class="even">
																	<td hidden="" class="sorting_1">6986</td>
																	<td>9B2</td>
																	<td>Neuvième année </td>
																	<td hidden="">1199</td>
																	<td></td>
																	<td>
																		<center>


																			<a> <input type="button" onclick="edit(this)" value="Modifier" class="btn btn-success  " data-toggle="modal" data-target="#myModal">
																			</a>
																			

																				<input type="button" value="Supprimer" data-toggle="modal" data-target="#basicExampleModal" class="btn btn-danger " onclick="delet(this)">
																			

																			<input type="button" value="Educonnect" data-toggle="modal" data-target="#synchroneExampleModal" class="btn btn-info " onclick="synchrone(this)">

																			<input type="button" value="affecter enseignant carnet" class="btn btn-danger " onclick="affect(this)">

																		</center>
																	</td>

																</tr><tr role="row" class="odd">
																	<td hidden="" class="sorting_1">6987</td>
																	<td>9B3</td>
																	<td>Neuvième année </td>
																	<td hidden="">1199</td>
																	<td></td>
																	<td>
																		<center>


																			<a> <input type="button" onclick="edit(this)" value="Modifier" class="btn btn-success  " data-toggle="modal" data-target="#myModal">
																			</a>
																			

																				<input type="button" value="Supprimer" data-toggle="modal" data-target="#basicExampleModal" class="btn btn-danger " onclick="delet(this)">
																			

																			<input type="button" value="Educonnect" data-toggle="modal" data-target="#synchroneExampleModal" class="btn btn-info " onclick="synchrone(this)">

																			<input type="button" value="affecter enseignant carnet" class="btn btn-danger " onclick="affect(this)">

																		</center>
																	</td>

																</tr><tr role="row" class="even">
																	<td hidden="" class="sorting_1">6988</td>
																	<td>9B4</td>
																	<td>Neuvième année </td>
																	<td hidden="">1199</td>
																	<td></td>
																	<td>
																		<center>


																			<a> <input type="button" onclick="edit(this)" value="Modifier" class="btn btn-success  " data-toggle="modal" data-target="#myModal">
																			</a>
																			

																				<input type="button" value="Supprimer" data-toggle="modal" data-target="#basicExampleModal" class="btn btn-danger " onclick="delet(this)">
																			

																			<input type="button" value="Educonnect" data-toggle="modal" data-target="#synchroneExampleModal" class="btn btn-info " onclick="synchrone(this)">

																			<input type="button" value="affecter enseignant carnet" class="btn btn-danger " onclick="affect(this)">

																		</center>
																	</td>

																</tr></tbody>
														<tfoot>
															<tr><th rowspan="1" colspan="1"><input class="form-control input-sm" style="display:block;width: 100%;font-weight:normal;" type="text" placeholder="Search Nom de la classe"></th><th rowspan="1" colspan="1"><input class="form-control input-sm" style="display:block;width: 100%;font-weight:normal;" type="text" placeholder="Search Niveau"></th><th rowspan="1" colspan="1"><input class="form-control input-sm" style="display:block;width: 100%;font-weight:normal;" type="text" placeholder="Search Description"></th><th colspan="3" rowspan="1"><input class="form-control input-sm" style="display:block;width: 100%;font-weight:normal;" type="text" placeholder="Search Action"></th></tr>
														</tfoot>
													</table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="table_info" role="status" aria-live="polite">Afficher 1 à 10 parmi 19 données</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="table_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="table_previous"><a href="#" aria-controls="table" data-dt-idx="0" tabindex="0">Précedent</a></li><li class="paginate_button active"><a href="#" aria-controls="table" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="table" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button next" id="table_next"><a href="#" aria-controls="table" data-dt-idx="3" tabindex="0">Suivant</a></li></ul></div></div></div></div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="modal fade" id="affectModal">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h4>Affectation enseignant carnet</h4>
									</div>
									<!--  -->
									<div class="modal-body">
										<form method="post" action="renisMDP">
											<input type="hidden" id="idbaatch" name="idbaatch">

											<div class="form-group">
												<label>Liste des enseignants : </label>


												<table class="table table-bordered table-hover table-striped" style="margin-bottom: 0;">
													<thead>
														<tr>
															<th style="display: none;">nom prénom</th>
															<th>nom prénom</th>
														</tr>
													</thead>
													<tbody id="listAdmin">

													</tbody>
												</table>
											</div>

											<button class="btn btn-danger btn-sm" data-dismiss="modal" aria-hidden="true">Fermer</button>
											<input type="button" value="affecter enseignant carne" class="btn btn-danger " onclick="verif()">
										</form>
									</div>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
						<!-- /.modal -->

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
		</div></div></section>