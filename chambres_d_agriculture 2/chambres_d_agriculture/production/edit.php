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
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->

					
					</div>

					

						<div class="page-header">
							<h1>
								Ajout Employe
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
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



<label class="col-sm-3 control-label no-padding-right" for="form-field-1" > État civil </label>
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

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Chambre d’Agriculture de Marrakech Safi</span>
							
						</span>

						&nbsp; &nbsp;
					
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/jquery.sparkline.index.min.js"></script>
		<script src="assets/js/jquery.flot.min.js"></script>
		<script src="assets/js/jquery.flot.pie.min.js"></script>
		<script src="assets/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: ace.vars['old_ie'] ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});
			
			
			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
			  //but sometimes it brings up errors with normal resize event handlers
			  $.resize.throttleWindow = false;
			
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
			
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
			
			
				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();
			
					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});
			
			})
		</script>
	</body>
</html>
