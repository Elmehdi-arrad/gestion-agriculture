<?php
include 'config.php';
require('fpdf/fpdf.php');

if(isset($_POST['Submit'])){
  

  

  $pdf = new FPDF();
  $pdf->AddPage();

  $pdf->SetFont('Arial', 'B', 18);
  $pdf->Ln(3);
  $pdf ->Cell(195,7,"ETAT D'ENGAGEMENT",1,0,'C');
  $pdf->Ln(10);
  //[$_REQUEST['Nom'],$_REQUEST['Prenom']]
    $stm1=$db->prepare(' select id_employe from employe where Nom=? and Prenom=?');
  $stm1->execute([$_REQUEST['Nom'],$_REQUEST['Prenom']]);
  $row1 = $stm1->fetch();
  
  $stm = $db->prepare('SELECT annee_de_naissance,Nom,Prenom,code_bud,etat_civil,grade,date_effet,nbr_enfant,
    sit_ancienne,regime_affi,situation_conj,sit_nouvelle,adhesion,residence,recrute_compter
   from employe WHERE id_employe="'.$row1['id_employe'].'" ');
   
     $stm->execute();
      

  foreach ($stm->fetchAll() as $row)
  {


  
$pdf->SetFont('Arial', 'B', 11);
  $pdf ->Cell(65,7,"Exercice 2018",1,0,'');
  $pdf ->Cell(65,7,"Annee de Naissance : ".$row['annee_de_naissance'],1,0,'');
  $pdf ->Cell(65,7,"Nom Prenom : " .$row['Nom']." ".$row['Prenom'],1,0,'');
  $pdf ->Ln();
  $pdf ->Cell(65,7,"Code Budgetaire : ".$row['code_bud'],1,0,'');
  $pdf ->Cell(65,7,"Etat civile : ".$row['etat_civil'],1,0,'');
  $pdf ->Cell(65,7,"Grade : ".$row['grade'],1,0,'');
  $pdf ->Ln();
  $pdf ->Cell(65,7,"Date d affet : ".$row['date_effet'],1,0,'');
  $pdf ->Cell(65,7,"Enfants (Nbre de range) : ".$row['nbr_enfant'],1,0,'');
  $pdf ->Cell(65,7,"Sit.ancienne : ".$row['sit_ancienne'],1,0,'');
  $pdf ->Ln();
  $pdf ->Cell(65,7,"Regime d affiliation : ".$row['regime_affi'],1,0,'');
  $pdf ->Cell(65,7,"Situation de conjoint : ".$row['situation_conj'],1,0,'');
  $pdf ->Cell(65,7,"Sit.nouvelle : ".$row['sit_nouvelle'],1,0,'');
  $pdf ->Ln();
  $pdf ->Cell(65,7,"Adhesion a un mutuelle  : ".$row['adhesion'],1,0,'');
  $pdf ->Cell(65,7,"Residence : ".$row['residence'],1,0,'');
  $pdf ->Cell(65,7,"Recrute a compter du : ".$row['recrute_compter'],1,0,'');
  $pdf ->Ln(13);
  $pdf ->Cell(145,7,"Decompte compare des emouments",1,0,'C');
  $pdf ->Cell(50,7,"Calcul de l 'IGR ",1,0,'C');
  $pdf ->Ln();
  $pdf ->Cell(65,7,"Nature des emoluments annuels",1,0,'');
  $pdf ->Cell(80,7,"Montant annuel",1,0,'C');
  $pdf ->Cell(50,7,"Salaire Brut : 3 727,45",'R',0,'');
  $pdf ->Ln();
  $pdf ->Cell(65,7,"",1,0,'');
  $pdf ->Cell(27,7,"Ancien",1,0,'C');
  $pdf ->Cell(27,7,"Nouveau",1,0,'C');
  $pdf ->Cell(26,7,"Differnce",1,0,'C');
  $pdf ->Cell(50,7,"Brut imposaple : 3 727,45",'R',0,'');
  $pdf ->Ln();
  $pdf ->Cell(65,7,"Traitement de base ou global",'L,R',0,'');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(27,7,"16 870,32",'R',0,'C');
  $pdf ->Cell(26,7,"",'R',0,'C');
  $pdf ->Cell(50,7,"FP 20 % : 745,49",'R',0,'');
  $pdf ->Ln();

$pdf ->Cell(65,7,"Indemnite de residence",'L,R',0,'');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(27,7,"1 687,03",'R',0,'C');
  $pdf ->Cell(26,7,"",'R',0,'C');
  $pdf ->Cell(50,7,"RCAR/RS : 223,65",'R',0,'');
  $pdf ->Ln();

$pdf ->Cell(65,7,"Indemnite de hierarchie adm",'L,R',0,'');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(27,7,"22 512,00",'R',0,'C');
  $pdf ->Cell(26,7,"",'R',0,'C');
  $pdf ->Cell(50,7,"RCAR/RC : 0.00",'R',0,'');
  $pdf ->Ln();

$pdf ->Cell(65,7,"Indemnite sujetion",'L,R',0,'');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(27,7,"3 660,00",'R',0,'C');
  $pdf ->Cell(26,7,"",'R',0,'C');
  $pdf ->Cell(50,7,"CNOPC AMO : 93,00",'R',0,'');
  $pdf ->Ln();

$pdf ->Cell(65,7,"",'L,R',0,'');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(26,7,"",'R',0,'C');
  $pdf ->Cell(50,7,"S.M.... : 25,31",'R',0,'');
  $pdf ->Ln();

$pdf ->Cell(65,7,"",'L,R',0,'');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(26,7,"",'R',0,'C');
  $pdf ->Cell(50,7,"CAAS : 21,50",'R',0,'');
  $pdf ->Ln();

$pdf ->Cell(65,7,"",'L,R',0,'');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(26,7,"",'R',0,'C');
  $pdf ->Cell(50,7,"Net imposable : 2 618,32",'R',0,'');

  $pdf ->Ln();
  $pdf ->Cell(65,7,"",'L,R',0,'');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(26,7,"",'R',0,'C');
  $pdf ->Cell(50,7,"10 % : 261,83",'R',0,'');

  $pdf ->Ln();
  $pdf ->Cell(65,7,"",'L,R',0,'');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(26,7,"",'R',0,'C');
  $pdf ->Cell(50,7,"A deduire : 250,00",'R',0,'');

  $pdf ->Ln();
  $pdf ->Cell(65,7,"",'L,R',0,'');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(26,7,"",'R',0,'C');
  $pdf ->Cell(50,7,"A deduire : 90,00",'R',0,'');
  $pdf ->Ln();

  $pdf ->Cell(65,7,"Totale Emolument",1,0,'');
  $pdf ->Cell(27,7,"",1,0,'C');
  $pdf ->Cell(27,7,"44 729,35",1,0,'C');
  $pdf ->Cell(26,7,"",1,0,'C');
  $pdf ->Cell(50,7,"IGR : 0.00",1,0,'');
  $pdf ->Ln(13);





   $pdf ->Cell(122,7,"Decompte Mensuel",1,0,'C');
  $pdf ->Cell(26,7,"",1,0,'C');
  $pdf ->Cell(47,7,"",1,0,'C');

  $pdf ->Ln();

  $pdf ->Cell(65,7,"Remuneration brut ",'L,R',0,'');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(30,7,"3 727,45",'R',0,'C');
  $pdf ->Cell(26,7,"",'R',0,'C');
  $pdf ->Cell(47,7,"",'R',0,'');
  $pdf ->Ln();
  $pdf ->Cell(65,7,"A reduire RCAR/RG ",'L,R',0,'');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(30,7,"223,65",'R',0,'C');
  $pdf ->Cell(26,7,"",'R',0,'C');
  $pdf ->Cell(47,7,"",'R',0,'');
  $pdf ->Ln();
  $pdf ->Cell(65,7,"          RCAR/RC",'L,R',0,'');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(30,7,"0,00",'R',0,'C');
  $pdf ->Cell(26,7,"",'R',0,'C');
  $pdf ->Cell(47,7,"",'R',0,'');
  $pdf ->Ln();
  $pdf ->Cell(65,7,"          IGR",'L,R',0,'');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(30,7,"0,00",'R',0,'C');
  $pdf ->Cell(26,7,"",'R',0,'C');
  $pdf ->Cell(47,7,"",'R',0,'');
  $pdf ->Ln();

  $pdf ->Cell(65,7,"          CNOPC AMO",'L,R',0,'');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(30,7,"93,19",'R',0,'C');
  $pdf ->Cell(26,7,"",'R',0,'C');
  $pdf ->Cell(47,7,"",'R',0,'');
  $pdf ->Ln();
  $pdf ->Cell(65,7,"          S M",'L,R',0,'');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(30,7,"25,31",'R',0,'C');
  $pdf ->Cell(26,7,"",'R',0,'C');
  $pdf ->Cell(47,7,"",'R',0,'');
  $pdf ->Ln();

   $pdf ->Cell(65,7,"          CAAD",'L,R',0,'');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(30,7,"25,31",'R',0,'C');
  $pdf ->Cell(26,7,"",'R',0,'C');
  $pdf ->Cell(47,7,"",'R',0,'');
  $pdf ->Ln();

  $pdf ->Cell(65,7,"Indemnite charge de famille",'L,R',0,'');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(30,7,"400,00",'R',0,'C');
  $pdf ->Cell(26,7,"",'R',0,'C');
  $pdf ->Cell(47,7,"",'R',0,'');
  $pdf ->Ln();

  $pdf ->Cell(65,7,"Indemnite de fonction",'L,R',0,'');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(30,7,"0,00",'R',0,'C');
  $pdf ->Cell(26,7,"",'R',0,'C');
  $pdf ->Cell(47,7,"",'R',0,'');
  $pdf ->Ln();

  $pdf ->Cell(65,7,"Indemnite pour l'utilisation ",'L,R',0,'');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(30,7,"0,00",'R',0,'C');
  $pdf ->Cell(26,7,"",'R',0,'C');
  $pdf ->Cell(47,7,"",'R',0,'');
  $pdf ->Ln();

  $pdf ->Cell(65,7,"Voiture de personnelle ",'L,R',0,'');
  $pdf ->Cell(27,7,"",'R',0,'C');
  $pdf ->Cell(30,7,"0,00",'R',0,'C');
  $pdf ->Cell(26,7,"",'R',0,'C');
  $pdf ->Cell(47,7,"",'R',0,'');
  $pdf ->Ln();

  $pdf ->Cell(65,7,"Net a Ordonnance ",1,0,'');
  $pdf ->Cell(27,7,"",1,0,'C');
  $pdf ->Cell(30,7,"3 763,80 DH",1,0,'C');
  $pdf ->Cell(26,7,"",1,0,'C');
  $pdf ->Cell(47,7,"",1,0,'');

  
  $pdf ->Ln();
  $pdf ->Ln();
 
  



  $pdf->Cell(122, 10, '', 0);
  //$pdf->Image('../images/spotnic.png',10,10,30);
  
  
  $pdf->Cell(150, 7, "Marrakech le : ".date('d-m-Y'), 0);
  
  
  $pdf ->Ln();








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
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
         
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          

           <div class="x_content">


                   <form class="form-horizontal form-label-left"  method="post">

                      <span class="section">Etat D'Engagement:</span>

                     
                     
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nom : <span class="required">*</span>
                        </label>
                       <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                    <input type="text" placeholder="" class="form-control" name="Nom" >
                  </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Prenom :<span class="required">*</span>
                        </label>
                       <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                    <input type="text" placeholder="" class="form-control" name="Prenom">
                  </div>
                      </div>
                      

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
