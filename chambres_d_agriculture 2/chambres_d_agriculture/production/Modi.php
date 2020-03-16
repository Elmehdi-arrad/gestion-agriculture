<?php
include 'config.php';

if(isset($_POST['submit'])){

	$stm = $db->prepare('UPDATE employe SET cin=?, Nom=? ,Prenom=?,Fonction=?,code_bud=?,date_effet=?,regime_affi=?,
	 adhesion=?, annee_de_naissance=?, etat_civil=?, nbr_enfant=?, situation_conj=?, residence=?, grade=?, 
		sit_ancienne=?, sit_nouvelle=?, num_affi=?, num_imma=?, recrute_compter=? WHERE id_employe=?');


$stm->execute(
	[$_POST['cin'],
	$_POST['Nom'],
	$_POST['Prenom'],
	$_POST['Fonction'],
	$_POST['code_bud'],
	$_POST['date_effet'],
	$_POST['regime_affi'],
	$_POST['adhesion'],
	$_POST['annee_de_naissance'],
	$_POST['etat_civil'],
	$_POST['nbr_enfant'],
    $_POST['situation_conj'],
    $_POST['residence'],
    $_POST['grade'],
    $_POST['sit_ancienne'],
    $_POST['sit_nouvelle'],

    $_POST['num_affi'],
    $_POST['num_imma'],
    $_POST['recrute_compter'],
     $_GET['id_employe']]);

header("LOCATION: employe.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title> Chambre d’Agriculture de Marrakech Safi</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md" >
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
      <center> <br> <img src="images/user.jpg" width="50px" height="50px" ><a href="index.php"></center> 
     
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
           
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Chambre d’Agriculture de &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marrakech Safi</h3>


                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Voitures <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="liste-voitures.php">Listes des Voitures</a></li>
                      <li><a href="ajouter-voiture.php">Ajouter une Voiture</a></li>
                      
                    </ul>
                  </li>
                 
                  <li><a><i class="fa fa-desktop"></i> Réparation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="vidange.php">Vidange</a></li>
                      <li><a href="ajouter-vidange.php">Ajouter un Vidange</a></li>
                      <li><a href="liste-reparation.php">Liste des Réparation</a></li>
                      <li><a href="ajouter-reparation.php">Ajouter une Réparation</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Missions <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="mission-cours.php">Mission en cours</a></li>
                      <li><a href="liste-mission.php">Listes de Mission</a></li>
                      <li><a href="ajouter-mission-employe.php">Ajouter une Mission pour un  employer</a></li>
                      <li><a href="ajouter-mission-personne.php">Ajouter une Mission pour une autre personne</a></li>
                    </ul>
                  </li> 


 <li><a><i class="fa fa-table"></i> Employe <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="ajouter_employe.php">Ajouter employer</a></li>
                      <li><a href="liste_employe.php">Liste des employes</a></li>
                      <li><a href="etat.php">Etat D'émenagement</a></li>
                    </ul>
                  </li> 

                </ul>
                 <ul class="nav side-menu">
        <li><a><i class="fa fa-home"></i> Vignette <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     <li><a href="ajouter_vignette_carburant.php">Ajouter Vignette carburant</a></li>
                      <li><a href="ajouter_vignette_auto.php">Ajouter Vignette autoroute</a></li>
                       <li><a href="ajouter_vignette_rep.php">Ajouter Vignette réparation</a></li>
                      <li><a href="vignette_car.php">Vignette carburant</a></li>
                      <li><a href="vignette_autoroute.php">Vignette autoroute VTT</a></li>
                      <li><a href="vignette_reparation.php">Vignette réparation</a></li>
                    </ul>
                  </li>

                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Gestion Vignette <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="st_vg_carburant.php">Vignette carburant</a></li>
                      <li><a href="st_vg_auto.php">Vignette autoroute</a></li>
                        <li><a href="st_vg_réparation.php">Vignette réparation</a></li>
                      
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small"> </div>
      
           
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user.jpg" alt="">ADMIN
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

               
              </ul>
            </nav>
          </div>
        </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small"> </div>
      
           
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user.jpg" alt="">ADMIN
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

               
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

          <div class="x_content">


                    <form class="form-horizontal" role="form" action="" method="post">
                    	<?php	/*					
[$_POST['cin'],
	$_POST['Nom'],
	$_POST['Prenom'],
	$_POST['Fonction'],
	$_POST['code_bud'],
	$_POST['date_effet'],
	$_POST['regime_affi'],
	$_POST['adhesion'],
	$_POST['annee_de_naissance'],
	$_POST['etat_civil'],
	$_POST['nbr_enfant'],
    $_POST['situation_conj'],
    $_POST['residence'],
    $_POST['grade'],
    $_POST['sit_ancienne'],
    $_POST['sit_nouvelle'],

    $_POST['num_affi'],
    $_POST['num_imma'],
    $_POST['recrute_compter']]*/

?>

<?php 

$stm = $db->prepare('select cin, Nom, Prenom , Fonction , code_bud, date_effet , regime_affi , adhesion , annee_de_naissance , 
	etat_civil ,nbr_enfant , situation_conj , residence , grade , sit_ancienne, sit_nouvelle
			, num_affi,num_imma, recrute_compter    from employe WHERE id_employe="'.$_GET['id_employe'].'"');
 $stm->execute();
 foreach($stm->fetchAll() as $row)
						    { ?>




								<form class="form-horizontal" role="form" action="" method="post">
								
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> CIN </label>

										<div class="col-sm-9">
<input type="text" id="form-field-1" placeholder="Veuillez saisir CIN" class="col-xs-10 col-sm-5" value="<?php echo $row['cin'];?>" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nom </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Veuillez saisir le prenom d'employe" class="col-xs-10 col-sm-5"
											 value="<?php echo $row['Nom'];?>" name="Nom" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Prénom </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Veuillez saisir le prenom d'employe" class="col-xs-10 col-sm-5"
											 value="<?php echo $row['Prenom'];?>" name="Prenom" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Fonction </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Fonction" class="col-xs-10 col-sm-5" 
											value="<?php echo $row['Fonction'];?>" name="Fonction" />
										</div>
									</div>
								



	
										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Code Budgétaire </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Code budgétiare" class="col-xs-10 col-sm-5"
											value="<?php echo $row['code_bud'];?>" name="code_bud"/>
										</div>
									</div>
								<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date d'effet </label>

										<div class="col-sm-9">
											<input type="date" id="form-field-1" placeholder="Date d'effet" class="col-xs-10 col-sm-5"
											value="<?php echo $row['date_effet'];?>" namr="date_effet" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Régime d'affiliation </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Régime d'affiliation" class="col-xs-10 col-sm-5" 
											value="<?php echo $row['regime_affi'];?>" nam="regime_affi" />
										</div>
									</div>

	
								
<label class="col-sm-3 control-label no-padding-right" for="form-field-1" > Adhésion à un mutuelle </label>
									<div class="col-sm-9">
									<select name="adhesion">
										<option value="" ><?php echo $row['adhesion']; ?></option>
                                   <option value="Oui" >Oui</option>
                                   <option value="Non">Non </option>
                                   </select></div>

<br><br>
						<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Date de naissance </label>

										<div class="col-sm-9">
											<input type="date" id="form-field-1" placeholder="Régime d'affiliation" class="col-xs-10 col-sm-5" 
											value="<?php echo $row['annee_de_naissance'];?>" name="annee_de_naissance" />
										</div>
									</div>



<label class="col-sm-3 control-label no-padding-right" for="form-field-1" > Etat civil </label>
									<div class="col-sm-9">
									<select name="etat_civil">
										<option value="" ><?php echo $row['etat_civil']; ?></option>
                                   <option value="Marie" >Marie</option>
                                   <option value="Non-Marie">Non-Marie </option>
                                   </select></div>
<br><br>
	<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Nombre des Enfants </label>

					<div class="col-sm-9">
					<input type="text" id="form-field-1" placeholder="Nombre des Enfants" class="col-xs-10 col-sm-5" 
					value="<?php echo $row['nbr_enfant'];?>" name="nbr_enfant" />
					</div>
					</div>




					<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Situation de conjoint </label>

					<div class="col-sm-9">
					<input type="text" id="form-field-1" placeholder="Situation de conjoint" class="col-xs-10 col-sm-5" 
					value="<?php echo $row['situation_conj'];?>" name="situation_conj" />
					</div>
					</div>
					<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Résidence </label>

					<div class="col-sm-9">
					<input type="text" id="form-field-1" placeholder="Résidence" class="col-xs-10 col-sm-5"
					value="<?php echo $row['residence'];?>" name="residence" />
					</div>
					</div>
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1" > Sitution Coprs </label>
									<div class="col-sm-9">
									<select name="grade">
								<option value="" ><?php echo $row['grade']; ?></option>

                                   <option value="1" >Ingénieur</option>
                                   <option value="2">Administrateur </option>
                                    <option value="3">Téchnicien </option>
                                     <option value="1" >Rédacteur</option>
                                   <option value="2">Adjoint technique </option>
                                    <option value="3">adjoint administrative </option>
                                   </select></div>
<br><br>

					<label class="col-sm-3 control-label no-padding-right" for="form-field-1" > Grade </label>
									<div class="col-sm-9">
									<select name="sit_ancienne">
							<option value="" ><?php echo $row['sit_ancienne']; ?></option>

                                   <option value="1" >1 ere grade</option>
                                   <option value="2">2eme grade </option>
                                    <option value="3">3eme grade </option>
                                     <option value="4">4eme grade </option>
                                   </select></div>
<br><br>


<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Situation nouvelle</label>

					<div class="col-sm-9">
					<input type="text" id="form-field-1" placeholder="Situation ancienne" class="col-xs-10 col-sm-5"
					value="<?php echo $row['sit_nouvelle'];?>" name="sit_nouvelle" />
					</div>
					</div>
  

<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">N° d'affiliation</label>

					<div class="col-sm-9">
					<input type="text" id="form-field-1" placeholder="Situation ancienne" class="col-xs-10 col-sm-5"
					value="<?php echo $row['num_affi'];?>" name="num_affi" />
					</div>
					</div>


<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">N° Immatriculation</label>

					<div class="col-sm-9">
					<input type="text" id="form-field-1" placeholder="Situation ancienne" class="col-xs-10 col-sm-5"
					value="<?php echo $row['num_imma'];?>" name="num_imma" />
					</div>
					</div>





<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Recrutée à compter du :</label>

					<div class="col-sm-9">
					<input type="text" id="form-field-1" placeholder="Situation ancienne" class="col-xs-10 col-sm-5"
					value="<?php echo $row['recrute_compter'];?>" name="recrute_compter" />
					</div>
					</div>




		<?php	}?>

	   <br>
								   <br>
									
									 <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">  </label>

										<div class="col-sm-9">
											<button class="btn btn-info" type="submit" name="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>
										</div>
									</div>
									
</form>
														
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div>
		</form>
                  </div>
        </div>
       

         

         
                    
                  </div>

                </div>
                <!-- end of weather widget -->
             
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          
        
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
