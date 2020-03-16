<?php
include 'config.php';


if(isset($_POST['Submit'])){
  
$stm = $db->prepare('INSERT INTO `employe`(`Nom`, `Prenom`, `Fonction`, `cin`,
                                         `code_bud`,`date_effet`, `regime_affi`, `adhesion`,
                                          `annee_de_naissance`, `etat_civil`, `nbr_enfant`,
                                             `situation_conj`, `residence`, `grade`,
                                                 `sit_ancienne`, `sit_nouvelle`, `recrute_compter`,
                                                      `num_affi`, `num_imma`)
                      VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');

$stm->execute(
  [$_POST['Nom'],$_POST['Prenom'],$_POST['Fonction'],$_POST['cin'],$_POST['code_bud'],$_POST['date_effet']
  ,$_POST['regime_affi'],$_POST['adhesion'],$_POST['annee_de_naissance'],$_POST['etat_civil'],$_POST['nbr_enfant']
  ,$_POST['situation_conj'],$_POST['residence'],$_POST['grade'],$_POST['sit_ancienne'],$_POST['sit_nouvelle']
  ,$_POST['recrute_compter'],$_POST['num_affi'],$_POST['num_imma']]);    











    header("LOCATION: Liste_employe.php");
   
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
          
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

          <div class="x_content">


                   <form class="form-horizontal form-label-left "  method="post">

                      <span class="section">Veuillez remplir les informations d'un employer</span>

                      <br><br>
                      <div class="item form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >CIN : <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                    <input type="text" placeholder="" class="form-control" name="cin">
                  </div>
                      </div>
                      <div class="item form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nom : <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                    <input type="text" placeholder="" class="form-control" name="Nom">
                  </div>
                      </div>
                      <div class="item form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Prénom : <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                    <input type="text" placeholder="" class="form-control" name="Prenom">
                  </div>
                      </div>
                      <div class="item form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Fonction:  <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                    <input type="text" placeholder="" class="form-control" name="Fonction">
                  </div>
                      </div>

                 <div class="item form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Code Budgétaire :  <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                    <input type="text" placeholder="" class="form-control" name="code_bud">
                  </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Date d'effectation : <span class="required">*</span>
                        </label>
                       <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                    <input type="date" placeholder="" class="form-control" name="date_effet">
                  </div>
                      </div>
                      <div class="item form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Régime d'affiliation : <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                    <input type="text" placeholder="" class="form-control" name="regime_affi">
                  </div>
                      </div>      

                    
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Adhésion à un mutuelle : <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                         <select class="form-control" name="adhesion">
                            <option value="Oui" >Oui</option>
                                   <option value="No">Non </option>

                         </select>
                        </div>
                                  </div>

  


                     
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Date de naissance : <span class="required">*</span>
                        </label>
                       <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                    <input type="date" placeholder="" class="form-control" name="annee_de_naissance">
                  </div>
                      </div>

                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >État civil : <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                         <select class="form-control" name="etat_civil">
                           <option value="Marie" >Marie</option>
                                   <option value="Non-Marie">Non-Marie </option>

                         </select>
                        </div>
                                  </div>
                      

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nombre des Enfants : <span class="required">*</span>
                        </label>
                       <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                    <input type="text" placeholder="" class="form-control" name="nbr_enfant">
                  </div>
                      </div>
                 
         


  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Situation de conjoint : <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                    <input type="text" placeholder="" class="form-control" name="situation_conj">
                  </div>
                     </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Résidence : <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                    <input type="text" placeholder="" class="form-control" name="residence">
                  </div>
                      </div>


                     

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Sitution Coprs : <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                        <select class="form-control" name="grade">
                                   <option value="Ingénieur" >Ingénieur</option>
                                   <option value="Administrateur">Administrateur </option>
                                    <option value="Téchnicien">Technicien </option>
                                     <option value="Rédacteur" >Rédacteur</option>
                                   <option value="Adjoint technique">Adjoint technique </option>
                                    <option value="adjoint administrative">adjoint administrative </option>

                         </select>
                        </div>
                                  </div>

                                  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Grade : <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                         <select class="form-control" name="sit_ancienne">
                                   <option value="1 ere grade" >1 ere grade</option>
                                   <option value="2eme grade">2eme grade </option>
                                    <option value="3eme grade">3eme grade </option>
                                     <option value="4eme grade">4eme grade </option>

                         </select>
                        </div>
                                  </div>

                                   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Situation nouvelle : <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                    <input type="text" placeholder="" class="form-control" name="sit_nouvelle">
                  </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >N° d'affiliation : <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                    <input type="text" placeholder="" class="form-control" name="num_affi">
                  </div>
                      </div>


                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >N° Immatriculation : <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                    <input type="text" placeholder="" class="form-control" name="num_imma">
                  </div>
                      </div>

                        
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Recrutée à compter du : <span class="required">*</span>
                        </label>
                       <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                    <input type="date" placeholder="" class="form-control" name="recrute_compter">
                  </div>
                      </div>


                      <br><br><br><br>

                      <div class="form-group">
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group" style="left:265px">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button  type="submit" class="btn btn-success" name="Submit">Submit</button>
                        </div>
                      </div>

                         
                         <br><br><br><br>
                        
                    </form>
                  </div>

        </div>
       

         

         
                    
                  </div>

                </div>
                <!-- end of weather widget -->
             
        <!-- /page content -->

        <!-- footer content -->
        
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
