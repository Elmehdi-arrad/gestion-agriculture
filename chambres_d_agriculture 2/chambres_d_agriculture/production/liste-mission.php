<?php
include 'config.php';
require('fpdf/fpdf.php');

if(isset($_GET['action']) && $_GET['action']=='delete')

{
  $stm = $db->prepare('delete from repartation where id_reparation=?');
    $stm->execute([$_GET['id']]);
}

if(isset($_GET['action']) && $_GET['action']=='ordremission')

{
  $pdf = new FPDF();
  $pdf->AddPage();
  $pdf->SetFont('Arial', '', 10);

  $pdf->Cell(18, 10, '', 0);
  
  $pdf->SetFont('Arial', '', 9);
  $pdf->Cell(150, 20, '', 0);
//  $pdf->Cell(100, 8, 'Date: '.date('d-m-Y').'', 0);
  $pdf->Ln(20);
  $pdf->SetFont('Arial', 'B', 11);
  $pdf->Cell(70, 8, '', 0);
  $pdf->Cell(100, 8, 'Ordre Mission N:................/CAGMS/: '.date('Y').'', 0);
  $pdf->Ln(20);
  $stm = $db->prepare('select * from cahier_bord where id_cahier=?');
      $stm->execute([$_GET['id']]);
      
  foreach ($stm->fetchAll() as $row)
  {
    
    $stm = $db->prepare('select * from employe WHERE id_employe="'.$row['id_employe'].'"');
                $stm->execute();
                //-_________________________________employe________________
    foreach ($stm->fetchAll() as $row1)
  {
    $pdf->Ln(13);
    $pdf->Cell(20, 20, '', 0);
    $pdf->Cell(15, 8,'Nom et prenom  : '.$row1['Nom']." ".$row1['Prenom'], 0);
      $pdf->Ln(13);
      $pdf->Cell(20, 20, '', 0);
    $pdf->Cell(15, 8,'Fonction  : ' .$row1[' Fonction'], 0);
      $pdf->Ln(13);
      $pdf->Cell(20, 20, '', 0);
  

    $pdf->Cell(15, 8,'Se rendre a  : ' .$row1['residence'], 0);
      $pdf->Ln(13);
      $pdf->Cell(20, 20, '', 0);
        }
                //_________________________________voiture_________________________

         $stm = $db->prepare('select * from voiture WHERE id_voiture="'. $row['id_voiture'].'"');
                $stm->execute();
                foreach($stm->fetchAll() as $row2)
                {
    $pdf->Cell(15, 8,'Moyen de locomotion  : ' .$row2['Marque'], 0);
      $pdf->Ln(13);
      $pdf->Cell(20, 20, '', 0);
}


    $pdf->Cell(15, 8,'Motif de deplacement  : ' .$row['motif'], 0);
      $pdf->Ln(13);
      $pdf->Cell(20, 20, '', 0);
    $pdf->Cell(20, 8, 'Jour et heure de depart  : '.$row['date_depart'], 0);
      $pdf->Ln(13);
      $pdf->Cell(20, 20, '', 0);
    $pdf->Cell(30, 8,'Jour et heure de retour  : ' .$row['date_retour'], 0);
      $pdf->Ln(13);
      $pdf->Cell(20, 20, '', 0);
  
     
  $pdf ->Ln();
  $pdf->Cell(122, 10, '', 0);
  //$pdf->Image('../images/spotnic.png',10,10,30);
  $pdf->Cell(150, 7, "Marrakech, le : ".date('d-m-Y'), 0);
  $pdf ->Ln();

  
    $pdf->SetFont('Arial', 'B', 11);
  $pdf->Cell(70, 8, '', 0);
  $pdf->Cell(100, 8, "L'interesse" , 0);
  $pdf->Ln(20); 
  }






  $pdf->Output();
  exit();

}
//___________________________all______________________________

if(isset($_GET['action']) && $_GET['action']=='allaffiche'){
  $pdf = new FPDF();
  $pdf->AddPage();
  $pdf->SetFont('Arial', '', 10);

  $pdf->Cell(18, 10, '', 0);
  //$pdf->Image('../images/spotnic.png',10,10,30);
  $pdf->SetFont('Arial', '', 9);
  $pdf->Cell(150, 20, '', 0);
  $pdf->Cell(100, 8, 'Date: '.date('d-m-Y').'', 0);
  $pdf->Ln(20);
  $pdf->SetFont('Arial', 'B', 11);
  $pdf->Cell(70, 8, '', 0);
  $pdf->Cell(100, 8, 'Cahier de bord', 0);
  $pdf->Ln(23);
  //$pdf->Cell(10, 8, '', 0);
  //$pdf->SetTextColor(0,0,204);
  //$pdf->Cell(10, 8, 'LISTE ETUDIANTS :  ', 0);
  //$pdf->SetTextColor(0,0,0);
  //$pdf->Ln();
  $pdf->SetTextColor(0,0,204);
  $pdf ->SetFont('Times','',12);
  //$pdf ->Cell(35,10,'Liste Des Employer :',0,0,'C');
  $pdf ->Ln();
  $pdf->SetTextColor(0,0,0);
  $pdf->SetFont('Arial', 'B', 8);

  $pdf ->Cell(20,8,'Nom Employe',1,0,'C');
  $pdf ->Cell(20,8,'Fonction',1,0,'C');
  $pdf ->Cell(15,8,'motif',1,0,'C');
  $pdf ->Cell(20,8,'date_depart',1,0,'C');
  $pdf ->Cell(20,8,'date_retour',1,0,'C');
  $pdf ->Cell(30,8,'compteur_depart',1,0,'C');
  $pdf ->Cell(30,8,'compteur_arrive',1,0,'C');
  $pdf ->Cell(20,8,'km_parcouru',1,0,'C');
  $pdf ->Cell(20,8,'destination',1,0,'C');
  $pdf ->Ln();


  //CONSULTA


    $stm = $db->prepare('select * from cahier_bord ');
      $stm->execute();
      

  foreach ($stm->fetchAll() as $row)
  {
  $stm = $db->prepare('select * from employe WHERE id_employe="'.$row['id_employe'].'"');
                $stm->execute();
                //-_________________________________employe________________
    foreach ($stm->fetchAll() as $row1){
  $pdf ->Cell(20,8,$row1['Nom']." ".$row1['Prenom'],1,0,'L');
  $pdf ->Cell(20,8,$row1['Fonction'],1,0,'L');
  }
  $pdf ->Cell(15,8,$row['motif'],1,0,'L');
  $pdf ->Cell(20,8,$row['date_depart'],1,0,'L');
  $pdf ->Cell(20,8,$row['date_retour'],1,0,'L');
  $pdf ->Cell(30,8,$row['compteur_depart'],1,0,'L');
  $pdf ->Cell(30,8,$row['compteur_arrive'],1,0,'L');
  $pdf ->Cell(20,8,$row['km_parcouru'],1,0,'L');
  $pdf ->Cell(20,8,$row['destination'],1,0,'L');

  $pdf ->Ln();
  }
$pdf->Cell(350,10,'Page '.$pdf->PageNo(),0,0,'C');  

  $pdf->Output();
  exit();
}




if(isset($_GET['iid']) ){
  $pdf = new FPDF();
  $pdf->AddPage();
  $pdf->SetFont('Arial', '', 10);

  $pdf->Cell(18, 10, '', 0);
  //$pdf->Image('../images/spotnic.png',10,10,30);
  $pdf->SetFont('Arial', '', 9);
  $pdf->Cell(150, 20, '', 0);
  $pdf->Cell(100, 8, 'Date: '.date('d-m-Y').'', 0);
  $pdf->Ln(20);
  $pdf->SetFont('Arial', 'B', 11);
  $pdf->Cell(70, 8, '', 0);
  $pdf->Cell(100, 8, 'Cahier de bord', 0);
  $pdf->Ln(23);
  //$pdf->Cell(10, 8, '', 0);
  //$pdf->SetTextColor(0,0,204);
  //$pdf->Cell(10, 8, 'LISTE ETUDIANTS :  ', 0);
  //$pdf->SetTextColor(0,0,0);
  //$pdf->Ln();
  $pdf->SetTextColor(0,0,204);
  $pdf ->SetFont('Times','',12);
  //$pdf ->Cell(35,10,'Liste Des Employer :',0,0,'C');
  $pdf ->Ln();
  $pdf->SetTextColor(0,0,0);
  $pdf->SetFont('Arial', 'B', 8);

  $pdf ->Cell(20,8,'Nom Employe',1,0,'C');
  $pdf ->Cell(20,8,'Fonction',1,0,'C');
  $pdf ->Cell(15,8,'motif',1,0,'C');
  $pdf ->Cell(20,8,'date_depart',1,0,'C');
  $pdf ->Cell(20,8,'date_retour',1,0,'C');
  $pdf ->Cell(30,8,'compteur_depart',1,0,'C');
  $pdf ->Cell(30,8,'compteur_arrive',1,0,'C');
  $pdf ->Cell(20,8,'km_parcouru',1,0,'C');
  $pdf ->Cell(20,8,'destination',1,0,'C');
  $pdf ->Ln();

  
  

$stm = $db->prepare('select * from cahier_bord WHERE id_cahier=?');
                $stm->execute([$_GET['iid']]);

foreach ($stm->fetchAll() as $row)
  {
  $stm = $db->prepare('select * from employe WHERE id_employe="'.$row['id_employe'].'"');
                $stm->execute();
                //-_________________________________employe________________
    foreach ($stm->fetchAll() as $row1){
  $pdf ->Cell(20,8,$row1['Nom']." ".$row1['Prenom'],1,0,'L');
  $pdf ->Cell(20,8,$row1['Fonction'],1,0,'L');
  }
  $pdf ->Cell(15,8,$row['motif'],1,0,'L');
  $pdf ->Cell(20,8,$row['date_depart'],1,0,'L');
  $pdf ->Cell(20,8,$row['date_retour'],1,0,'L');
  $pdf ->Cell(30,8,$row['compteur_depart'],1,0,'L');
  $pdf ->Cell(30,8,$row['compteur_arrive'],1,0,'L');
  $pdf ->Cell(20,8,$row['km_parcouru'],1,0,'L');
  $pdf ->Cell(20,8,$row['destination'],1,0,'L');

  $pdf ->Ln();
  }
$pdf->Cell(350,10,'Page '.$pdf->PageNo(),0,0,'C');  

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
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
           
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
         

         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Liste des Mission en cours<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                        <a class="btn btn-default btn-"   href="?action=allaffiche">Afficher tout les missions
                     <i class="glyphicon glyphicon-print" title="print" style="color:black;"></i> 
                  </a>
                 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th class="center"><Small>Nom Prénom</Small></th>
                         <th class="center"><Small>Motif </Small></th>
                          <th class="center"><Small>date du départ</Small></th>
                      
                          <th class="center"><Small>date du retour</Small></th>
                          <th class="center"><Small>Compteur du départ</Small></th>
                          <th class="center"><Small>Destination</Small></th>
                          
                          <th class="center"><Small>Prix autoroute</Small></th>
                          <th class="center"><Small>Prix du carburant</Small></th>
                          <th class="center"><Small>Voiture</Small></th>
                          <th class="center"><Small>N Matricule</Small></th>

                          
                            <th class="center"><Small>Ordre mission</Small></th>
                             <th class="center"><Small>Cahier de Bord</Small></th>

 <th class="center"><Small>&nbsp;&nbsp;Supprimer&nbsp;&nbsp;&nbsp;&nbsp;</Small></th>


                        </tr>
                          </thead>
                          <tbody>
                       <?php
                       //$row['id_voiture']
                $stm = $db->prepare('select * from cahier_bord where etat_misdion=1');
                $stm->execute();
                foreach($stm->fetchAll() as $row)
                {
              ?>
              <?php
                       //$row['id_voiture']
                $stm = $db->prepare('select * from employe WHERE id_employe="'. $row['id_employe'].'"');
                $stm->execute();
                foreach($stm->fetchAll() as $row1)
                {
              ?>
                     
                              <tr>
                          <td class="center"><Small><?php echo $row1['Nom']." ".$row1['Prenom']; ?></Small></td>
                          <?php } ?>
                          <td class="center"><Small><?php echo $row['motif']; ?></Small></td>
                          <td class="center"><Small><?php echo $row['date_depart']; ?></Small></td>
                          <td class="center"><Small><?php echo $row['date_retour']; ?></Small></td>
                          <td class="center"><Small><?php echo $row['compteur_depart']; ?></Small></td>
                         <td class="center"><Small><?php echo $row['destination']; ?></Small></td>
                          <td class="center"><Small><?php echo $row['prix_auto']; ?></Small></td>
                          <td class="center"><Small><?php echo $row['prix_carb']; ?></Small></td>


                           <?php
                       //$row['id_voiture']
                $stm = $db->prepare('select * from voiture WHERE id_voiture="'. $row['id_voiture'].'"');
                $stm->execute();
                foreach($stm->fetchAll() as $row2)
                {
              ?>
               <td class="center"><Small><?php echo $row2['Marque'];?></Small></td>
               <td class="center"><Small><?php echo $row2['Matricule'];?></Small></td>
                          <?php } ?>

<td class="center">
     <a class="btn btn-default btn-sm" href="?action=ordremission&id=<?php echo $row['id_cahier']; ?>" >
                     <i class="glyphicon glyphicon-print " title="Imprimer" style="color:black;"></i> 
                  </a>
</td>

                  </a>
                </td>

<td class="center">
    <a class="btn btn-default btn-sm" href="liste-mission.php?iid=<?php echo $row['id_cahier']; ?>" >
                     <i class="glyphicon glyphicon-download " title="Imprimer" style="color:black;"></i> 
                  </a>
</td>


                          <td class="center">
                  

                    

                <a class="btn btn-default btn-sm" href="?action=delete&id=<?php echo $row['id_cahier']; ?>">
                     <i class="glyphicon glyphicon-trash" title="Supprimer Mission" style="color:black;"></i> 
                  </a>
          
                          
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
