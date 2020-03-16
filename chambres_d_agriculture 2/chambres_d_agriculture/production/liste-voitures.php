<?php
include 'config.php';
require('fpdf/fpdf.php');
if(isset($_GET['action']) && $_GET['action']=='delete')

{
  $stm = $db->prepare('delete from voiture where id_voiture=?');
    $stm->execute([$_GET['id']]);
}

if(isset($_GET['iid']) ){
  $pdf = new FPDF();
  $pdf->AddPage();
  $pdf->SetFont('Arial', '', 10);

  $pdf->Cell(18, 10, '', 0);
  
  $pdf->SetFont('Arial', '', 9);
  $pdf->Cell(150, 20, '', 0);
  $pdf->Cell(100, 8, 'Date: '.date('d-m-Y').'', 0);
  $pdf->Ln(20);
  $pdf->SetFont('Arial', 'B', 11);
  $pdf->Cell(70, 8, '', 0);
  $pdf->Cell(100, 8, 'Fiche technique de la voiture', 0);
  $pdf->Ln(20);
  $stm = $db->prepare('select * from voiture where id_voiture=?');
      $stm->execute([$_GET['iid']]);
      

  foreach ($stm->fetchAll() as $row)
  {
    

  
    
  
   
    $pdf->Ln(13);
    $pdf->Cell(20, 20, '', 0);
    $pdf->Cell(15, 8,'Marque  : '.$row['Marque'], 0);
      $pdf->Ln(13);
      $pdf->Cell(20, 20, '', 0);
    $pdf->Cell(15, 8,'Date su circulation  : ' .$row['date_circulation'], 0);
      $pdf->Ln(13);
      $pdf->Cell(20, 20, '', 0);
    $pdf->Cell(15, 8,'Numero de chassis  : ' .$row['N_chassis'], 0);
      $pdf->Ln(13);
      $pdf->Cell(20, 20, '', 0);
    $pdf->Cell(15, 8,'Etat du voiture  : ' .$row['Etat'], 0);
      $pdf->Ln(13);
      $pdf->Cell(20, 20, '', 0);
    $pdf->Cell(15, 8,'Kilometre actuel  : ' .$row['KM_actuel'], 0);
      $pdf->Ln(13);
      $pdf->Cell(20, 20, '', 0);
    $pdf->Cell(20, 8, 'Date d assurance  : '.$row['Date_assurance'], 0);
      $pdf->Ln(13);
      $pdf->Cell(20, 20, '', 0);
    $pdf->Cell(30, 8,'Date Vignette  : ' .$row['Date_vignette'], 0);
      $pdf->Ln(13);
      $pdf->Cell(20, 20, '', 0);
    $pdf->Cell(15, 8,'Date Visite  : ' .$row['Date_visite'], 0);
      $pdf->Ln(13);
      $pdf->Cell(20, 20, '', 0);
    $pdf->Cell(15, 8, 'Etat Visite  : '.$row['Etat_visite'], 0);
      $pdf->Ln(13);
      $pdf->Cell(20, 20, '', 0);
    $pdf->Cell(15, 8,'Date du Dernier Vidange  : ' .$row['Date_derniervidange'], 0);
      $pdf->Ln(13);
      $pdf->Cell(20, 20, '', 0);
    $pdf->Cell(15, 8,'Kilometre par Vidange  : ' .$row['km_pr_vidange'], 0);
      $pdf->Ln(13);
      $pdf->Cell(20, 20, '', 0);
    $pdf->Cell(15, 8, 'Matricule  : '.$row['Matricule'], 0);
      $pdf->Ln(13);
     

    
  }






  $pdf->Output();
  exit();

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
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">




            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Liste des Voitures<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                      
                 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th class="center"><Small>Marque</Small></th>
                         <th class="center"><Small>Matricule</Small></th>
                          <th class="center"><Small>Date Circulation</Small></th>
                          <th class="center"><Small>Numéro Chassis</Small></th>
                          <th class="center"><Small>Etat</Small></th>
                          <th class="center"><Small>Kilométre Actuel</Small></th>
                          <th class="center"><Small>Date Assurance</Small></th>
                          <th class="center"><Small>Date Vignette</Small></th>
                          <th class="center"><Small>Date Visite</Small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                          <th class="center"><Small>Etat Visite</Small></th>
                          <th class="center"><Small>Date Dernier Vidange&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</Small></th>
                          <th class="center"><Small>Kilométre par Vidange</Small></th> 
                           <th class="center"><Small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Option&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</Small></th> 
                        </tr>
                          </thead>
                          <tbody>
                       <?php
                $stm = $db->prepare('select * from voiture');
                $stm->execute();
                foreach($stm->fetchAll() as $row)
                {
              ?>
                     
                              <tr>
                          <td class="center"><Small><?php echo $row['Marque']; ?></Small></td>
                          <td class="center"><Small><?php echo $row['Matricule']; ?></Small></td>
                          <td class="center"><Small><?php echo $row['date_circulation']; ?></Small></td>
                          <td class="center"><Small><?php echo $row['N_chassis']; ?></Small></td>
                          <td class="center"><Small><?php echo $row['Etat']; ?></Small></td>
                          <td class="center"><Small><?php echo $row['KM_actuel']; ?></Small></td>
                          <td class="center"><Small><?php echo $row['Date_assurance']; ?></Small></td>
                          <td class="center"><Small><?php echo $row['Date_vignette']; ?></Small></td>
                          <td class="center"><Small><?php echo $row['Date_visite']; ?></Small></td>
                          <td class="center"><Small><?php echo $row['Etat_visite']; ?></Small></td>
                          <td class="center"><Small><?php echo $row['Date_derniervidange']; ?></Small></td>
                          <td class="center">
                  

                    <a class="btn btn-default btn-sm " href="modifier_voiture.php?id=<?php echo $row['id_voiture']; ?>">
                     <i class="fa fa-refresh glyphicon-edit" title="Modifier" style="color:black;"></i> 
                  </a>

                <a class="btn btn-default btn-sm" href="?action=delete&id=<?php echo $row['id_voiture']; ?>">
                     <i class="glyphicon glyphicon-trash" title="Supprimer" style="color:black;"></i> 
                  </a>

                  <a class="btn btn-default btn-sm" href="liste-voitures.php?iid=<?php echo $row['id_voiture']; ?>" >
                     <i class="glyphicon glyphicon-print " title="Imprimer" style="color:black;"></i> 
                  </a>

                
                  </a>
                </td>




                  

                  

                  

                
                  
                


                        
                          
                        </tr>

                     <?php } ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>




        </div>            
                  </div>

                </div>
                <!-- end of weather widget -->
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          
          <div class="clearfix"></div>
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
