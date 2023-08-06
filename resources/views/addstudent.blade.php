<section id="content">
			<div class="container">
				<div class="row" id="content-wrapper">
					<div class="col-xs-12">

						<div class="page-header page-header-with-buttons">
							<h1 class="pull-left">
								<i class="fa fa-user"></i> <span> éléve
								</span>
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
												ImportFichier
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

						
						<div class="row">

							<div class="col-sm-12">
								<div class="box bordered-box blue-border">
									<div class="box-header blue-background">
										<div class="title">
											Vérifier si tuteur est déjà abonné
										</div>

									</div>
									<div class="box-content">
										<form modelattribute="PhoneModel" accept-charset="UTF-8" class="form" style="margin-bottom: 0;" method="POST" action="findGuardian">

											<div class="row">


												<div class="col-sm-3">
													<div class="form-group">
														<label>Code téléphonique</label>
														
														
															<select class="select2 form-control select2-hidden-accessible" name="gcountryCode" tabindex="-1" aria-hidden="true">
 
	<option value="+976">Mongolia (+976)</option>
	<option value="+1664">Montserrat (+1664)</option>
	<option value="+212">Morocco (+212)</option>
	<option value="+258">Mozambique (+258)</option>
	<option value="+95">Myanmar (+95)</option>
	<option value="+264">Namibia (+264)</option>
	<option value="+674">Nauru (+674)</option>
	<option value="+977">Nepal (+977)</option>
	<option value="+31">Netherlands (+31)</option>

	<option value="+248">Seychelles (+248)</option>
	<option value="+232">Sierra Leone (+232)</option>
	<option value="+65">Singapore (+65)</option>
	<option value="+421">Slovak Republic (+421)</option>
	<option value="+386">Slovenia (+386)</option>
	<option value="+677">Solomon Islands (+677)</option>
	<option value="+252">Somalia (+252)</option>
	<option value="+27">South Africa (+27)</option>
	<option value="+34">Spain (+34)</option>
	<option value="+94">Sri Lanka (+94)</option>
	<option value="+290">St. Helena (+290)</option>
	<option value="+1869">St. Kitts (+1869)</option>
	<option value="+1758">St. Lucia (+1758)</option>
	<option value="+249">Sudan (+249)</option>
	<option value="+597">Suriname (+597)</option>
	<option value="+268">Swaziland (+268)</option>
	<option value="+46">Sweden (+46)</option>
	<option value="+41">Switzerland (+41)</option>
	<option value="+963">Syria (+963)</option>
	<option value="+886">Taiwan (+886)</option>
	<option value="+7">Tajikstan (+7)</option>
	<option value="+66">Thailand (+66)</option>
	<option value="+228">Togo (+228)</option>
	<option value="+676">Tonga (+676)</option>
	<option value="+1868">Trinidad &amp; Tobago (+1868)</option>
	<option value="+216" selected="selected">Tunisia (+216)</option>
	<option value="+90">Turkey (+90)</option>
	<option value="+7">Turkmenistan (+7)</option>
	<option value="+993">Turkmenistan (+993)</option>
	<option value="+1649">Turks &amp; Caicos Islands (+1649)</option>
	<option value="+688">Tuvalu (+688)</option>
	<option value="+221">Senegal (+221) </option>

</select>
														
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<label>Numéro de téléphone</label> <input class="form-control" onkeydown="return checkPhoneKey(event.key)" maxlength="8" minlength="8" required="required" id="full-name" name="gusercode" type="tel">



													</div>

												</div>


												<div class="col-sm-3">
													<br>
													<button class="btn btn-primary" type="submit">
														<i class="fa fa-floppy-o"></i>
														Rechercher
													</button>

												</div>




											</div>


										</form>

									</div>

								</div>
							</div>
						</div>
					</div>


					<hr class="hr-drouble">
					<br> <br> <br>
					
					<br>


					<!--           fallllllse  -->













					
						<div class="col-sm-12">
							<div class="alert alert-info alert-dismissable">


								<center>
									<i class="fa fa-info-circle"></i><strong> C´est un nouveau tuteur. Veuillez Créer les comptes Educanet.
									</strong>
								</center>

							</div>
						</div>

						<div class="row">

							<div class="col-sm-12">

								<div class="box bordered-box orange-border">
									<div class="box-header orange-background">
										<div class="title">
											Ajout Élèves
										</div>

									</div>
									<div class="box-content">

										<div class="box">
											<div class="box-content box-padding">
												<div class="fuelux">
													<div class="wizard no-steps-container" data-initialize="wizard" id="myWizard">

														<!--                           <div class='actions'> -->
														<!--                             <button class='btn btn-xs btn-prev'> -->
														<!--                               <i class='fa fa-arrow-left'></i> -->
														<!--                               Prec -->
														<!--                             </button> -->

														<!--                             <button class='btn btn-xs btn-success btn-next'  type="submit" data-last='Terminé'> -->
														<!--                               Suivant -->
														<!--                               <i class='fa fa-arrow-right'></i> -->
														<!--                             </button> -->
														<!--                           </div> -->
														<!--                           <hr class='hr-normal'> -->

														<h2 class="pull-left">

															<span style="text-decoration: underline; color: blue;">
																Informations Elève 
															</span>

														</h2>
														<form id="myForm3" action="AddStudentComplete" accept-charset="UTF-8" modelattribute="StudentProfileInfoModel" class="form" style="margin-bottom: 0;" method="post">
															<div class="step-content">



																<div>

																	<div class="col-sm-4">

																		<div class="form-group">
																			<label class="control-label " for="inputText">
																				nom <font size="3" color="red">*</font>
																			</label>
																			<div class="controls">
																				<input class="form-control" required="required" name="slastName" id="pr1" placeholder="" type="text">
																			</div>
																			<div class="controls"></div>

																			<br> <label class="control-label" for="inputText"> Date de naissance <font size="3" color="red">*</font></label>
																			<div class="controls">
																				<div class="datepicker-input input-group" id="datepicker">
																					<input class="form-control" id="date1" required="required" name="sbirthDate" data-format="YYYY-MM-DD" placeholder="" type="text"> <span class="input-group-addon"> <span class="fa fa-calendar"></span>
																					</span>
																				</div>
																			</div>
																			<br> <label class="control-label" for="inputText"> Adresse<font size="3" color="red">*</font>
																			</label>
																			<div class="controls">

																				<input class="form-control" name="sadressname" id="sadressname1" placeholder="" type="text">
																			</div>

																		</div>
																		<h2 class="pull-left">

																			<span style="text-decoration: underline; color: blue;">
																				Informations Parents 
																			</span>

																		</h2>
																	</div>

																	<div class="col-sm-4">
																		<div class="form-group">


																			<label class="control-label" for="inputText">
																				Prénom  <font size="3" color="red">*</font>
																			</label>
																			
																			<div class="controls">
																				<input class="form-control" required="required" name="sfirstName" id="name1" placeholder="" type="text">
																			</div>
																			
																			


																			<br> <label class="control-label" for="inputText"> Lieu de naissance <font size="3" color="red">*</font>
																			</label>
																			<div class="controls">
																				<input class="form-control" required="required" name="sbirthPlace" id="l1" placeholder="" type="text">
																			</div>
																			<br> <label class="control-label" for="inputText"> Pays <font size="3" color="red">*</font></label>
																			<div class="controls">
																				<input class="form-control" required="required" name="scountryCode" id="p1" placeholder="" type="text">
																			</div>



																		</div>

																	</div>
																	<div class="col-sm-4">
																		<div class="form-group">



																			
																			
																				<label class="control-label " for="inputText">
																					Nom et prénom en arabe <font size="3" color="red">*</font>
																				</label>
																				<div class="controls">
																					<input class="form-control" required="required" name="arabeName" onkeydown="return checkArabicKey(event.key)" id="arabeName" placeholder="" type="text">
																				</div>
																			

																			<br> <label class="control-label" for="inputText"> Sexe
																				<font size="3" color="red">*</font></label>
																			<div class="controls">
																				<select class="select2 form-control" required="required" name="sgender" id="gr1">

																					<option value="masculin">
																						Garçon
																					</option>
																					<option value="féminin">
																						Fille
																					</option>


																				</select>



																			</div>

																			<br> <label class="control-label" for="inputText"> Classe: <font size="3" color="red">*</font></label>
																			<div class="controls">

																				<select name="batchId" required="required" id="batch1" class="select2 form-control select2-hidden-accessible">
																					<option>
																						Veuillez choisir une classe
																					</option>
																					

																						<option value="6979">7B1
																					

																						</option><option value="7597">7B2
																					

																						</option><option value="7598">7B3
																					

																						</option><option value="7599">7B4
																					

																						</option><option value="6980">8B1
																					

																						</option><option value="6981">8B2
																					

																						</option><option value="6982">8B3
																					

																						</option><option value="6983">8B4
																					

																						</option><option value="6984">8B5
																					

																						</option><option value="6985">9B1
																					

																						</option><option value="6986">9B2
																					

																						</option><option value="6987">9B3
																					

																						</option><option value="6988">9B4
																					

																						</option><option value="6989">1S1
																					

																						</option><option value="7602">1S2
																					

																						</option><option value="6990">2SC
																					

																						</option><option value="6991">3 Maths
																					

																						</option><option value="7751">3ème SC
																					

																						</option><option value="6992">4 TECH
																					
																				</option></select>



																			</div>

																			<br>
																			<div style="visibility: hidden;">
																				<label class="control-label " for="inputText">
																					<font size="3" color="red">*</font>
																				</label>
																				<div class="controls">
																					<input class="form-control" placeholder="" type="text">
																				</div>
																			</div>
																			<br>
																			<div style="visibility: hidden;">
																				<label class="control-label " for="inputText">
																					<font size="3" color="red">*</font>
																				</label>
																				<div class="controls">
																					<input class="form-control" placeholder="" type="text">
																				</div>
																			</div>
																		</div>

																	</div>



																	<br> <br>





																	<div class="col-sm-4 col-sm-offset-50">



																		<div class="form-group">

																			<label class="control-label " for="inputText">
																				Nom du tuteur <font size="3" color="red">*</font>
																			</label>
																			<div class="controls">
																				<input class="form-control" required="required" onkeydown="return checkFrenchKey(event.key)" name="glastName" id="glastName1" placeholder="" type="text">
																			</div>





																			<br> <label class="control-label " for="inputText"> Relation
																			</label>
																			<div class="controls">
																				<input class="form-control" name="realtionship" id="realtionship1" placeholder="" type="text">
																			</div>









																			<br> <label class="control-label " for="inputText"> �Email du tuteur</label>
																			<div class="controls">
																				<input class="form-control" id="gemailAdress1" placeholder="" name="gemailAdress" type="email">
																			</div>
																		</div>

																	</div>





																	<div class="col-sm-4">
																		<div class="form-group">


																			<label class="control-label " for="inputText">
																				Prénom du tuteur <font size="3" color="red">*</font>
																			</label>
																			<div class="controls">
																				<input class="form-control" onkeydown="return checkFrenchKey(event.key)" required="required" name="gfirstName" id="gfirstName1" placeholder="" type="text">
																			</div>
																			<input style="display: none; visibility: hidden;" class="form-control" name="gcountryCode" id="gcountryCode" value="+216" placeholder="" type="text"> <input style="display: none; visibility: hidden;" class="form-control" name="gusercode" id="gusercode1" value="50234000" placeholder="" type="text"> <br> <label class="control-label" for="inputText"> Date de naissance
																			</label>
																			<div class="controls">
																				<div class="datepicker-input input-group" id="datepicker">
																					<input class="form-control" id="gbirthdate" name="gbirthDate" data-format="YYYY-MM-DD" placeholder="" type="text"> <span class="input-group-addon"> <span class="fa fa-calendar"></span>
																					</span>
																				</div>
																			</div>




																			<br> <label class="control-label" for="inputText"> Sexe du tuteur
																			</label>
																			<div class="controls">
																				<select class="select2 form-control" name="ggender" id="ggender">

																					<option value="masculin">
																						Garçon
																					</option>
																					<option value="féminin">
																						Fille
																					</option>


																				</select>



																			</div>





																		</div>

																	</div>

																	<div class="col-sm-4">



																		<div class="form-group">

																			<label class="control-label " for="inputText">
																				Nom de la famille du tuteur
																			</label>
																			<div class="controls">
																				<input class="form-control" name="gmiddleName" id="gmiddleName" placeholder="" type="text">
																			</div>
																			<br> <label class="control-label " for="inputText"> Lieu de naissance du tuteur
																			</label>
																			<div class="controls">
																				<input class="form-control" name="gbirthPlace" id="gbirthPlace" placeholder="" type="text">
																			</div>
																		</div>
																		<br> <br> <br> <br>
																	</div>
																	<div class="col-sm-8 col-sm-offset-10">

																		<button class="btn btn-primary" type="submit">
																			<i class="fa fa-floppy-o"></i>
																			Valider
																		</button>
																	</div>
																</div>

															</div>


														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					
					<br>

					<p style="display: none;" id="alertOk">
						Le nouveau élève a été ajouté avec succés
					</p>
					<p style="display: none;" id="alertError">
						Attention! Une erreur est apparue lors de l´ajout
					</p>
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
		</section>