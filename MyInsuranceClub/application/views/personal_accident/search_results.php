<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Compare Insurance Policies and Plans in India |
	MyInsuranceClub.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Description"
	content="Compare and get free quotes for the best life insurance, health insurance, travel insurance, car and auto insurance plans, policies and schemes in India offered by different insurance companies only at MyInsuranceClub.com" />
<meta name="Keywords"
	content="compare insurance, best life insurance, best health insurance, cheap car insurance, auto insurance quote, cheap travel insurance, affordable insurance, best insurance policy, insurance companies in India" />

<!-- Bootstrap CSS -->
<link
	href="<?php echo base_url();?>/assets/css/bootstrap/bootstrap.min.css"
	rel="stylesheet">

<!-- Bootstrap third-party plugins css -->
<link
	href="<?php echo base_url();?>/assets/css/bootstrap/bootstrap-switch.min.css"
	media="screen" rel="stylesheet" />
<!-- Font Awesome -->
<link href="<?php echo base_url();?>/assets/css/font-awesome.min.css"
	rel="stylesheet">

<!-- Plugins -->

<!-- style -->
<link href="<?php echo base_url();?>/assets/css/theme-style.min.css"
	rel="stylesheet">

<!-- custom override -->
<link href="<?php echo base_url();?>/assets/css/custom-style.css"
	rel="stylesheet">
<link href="<?php echo base_url();?>/assets/css/clingify.css"
	rel="stylesheet">
<link href="<?php echo base_url();?>/assets/css/jquery.bxslider.css"
	rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo base_url();?>/assets/css/slick.css" />
<link rel="stylesheet"
	href="<?php echo base_url();?>/assets/css/slicknav.css">

<link rel="stylesheet"
	href="<?php echo base_url();?>/assets/css/custom.css">

<link href="<?php echo base_url();?>/assets/css/angular.rangeSlider.css"
	rel="stylesheet">

<style type="text/css" id="page-css">
/* Styles specific to this particular page */
.scroll-pane {
	width: 100%;
	height: 200px;
	overflow: auto;
}
</style>

<!-- HTML5 shiv & respond.js for IE6-8 support of HTML5 elements & media queries -->
<!--[if lt IE 9]>
    <script src="plugins/html5shiv/dist/html5shiv.js"></script>
    <![endif]-->

<!-- Le fav and touch icons - @todo: fill with your icons or remove -->
<link rel="shortcut icon"
	href="<?php echo base_url();?>/assets/img/icons/favicon.png">
<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300'
	rel='stylesheet' type='text/css'>

<!--Retina.js plugin - @see: http://retinajs.com/-->
<script
	src="<?php echo base_url();?>/assets/plugins/js/retina-1.1.0.min.js"></script>
</head>

<!-- ======== @Region: body ======== -->
<body class="page page-index">

<?php $this->load->view('partial_view/header_view');?>

	<span id="o_touch"></span>

	<div id="highlighted"
		style="background: #fff; padding-bottom: 50px; margin-bottom: 0px;">

		<div class="container">
			<div class="row" style="margin-top: 40px;">
				<!--Blog Roll Content-->
				<div class="col-md-9 col-md-push-3 blog-roll blog-list"
					style="padding-left: 0px;">
					<!-- Blog post -->
					<div class="media row" style="border: none; padding-bottom: 0px;">
						<div class="col-md-11 media-body">
               	<?php 			
               	$min_annual_premium='';
               	$max_annual_premium='';
               	if(count($customer_details) > 0)
               	{
               		$anuual_premium = array_map(function($details) 
               		{
						return $details['annual_premium'];
					}, $customer_details);
					$min_annual_premium=min($anuual_premium);
					$max_annual_premium=max($anuual_premium);
               	}
               	elseif(count($customer_details) == 0)
               	{
               		$min_annual_premium='0';
               		$max_annual_premium='0';
               	}
               	?>
               	
                <h6 class="fh3" style="border: none;">
								We’ve got <span class="highlight"><?php echo count($customer_details);?></span>
								plan that meets your search - <span class="highlight">Rs. <?php echo number_format($min_annual_premium); ?></span>
								to <span class="highlight">Rs. <?php echo number_format($max_annual_premium); ?></span> <?php echo nbs(25);?><span><a
									href="javascript:void(0);" id="comparePolicy">Compare Selected
										Policies</a></span>
							</h6>



						</div>




					</div>

					<div class="col-md-12" style="padding: 0px;">
					<?php echo form_open('health_insurance/personal_accident/compare_policies',array('id'=>'compare'));?>
						<div
							style="height: auto; padding: 10px 0px 30px 0px; background: #ededec;">
							<div class="col-md-5">Insurer</div>

							<div class="col-md-7">Annual Premium</div>

						</div>


						<div  id="cmp_tbl">
						<?php echo $this->util->getUserSearchFiltersHtml($customer_details, $type = "personalAccident");?>
                		
						</div>
				<?php echo form_close();?>
				</div>
				</div>
				
				<!--Sidebar-->
				<div class="col-md-3 col-md-pull-9 sidebar sidebar-left">
					<div class="inner" style="margin-bottom: 50px;">


						<div class="block">
							<h6 class="fh3 c">
								<a href="<?php echo site_url('health_insurance/personal_accident');?>">&lt;
									Modify your search</a>
							</h6>
						</div>



						<div class="block1">
							<h6 class="fh3 l"> <?php echo count($customer_details);?> of <?php echo count($customer_details);?> plans</h6>

							<h6 class="fh3">Premium</h6>



							<div class="filterContent ">


								<?php echo form_open('health_insurance/personal_accident/get_personal_accident_results',array('id'=>'search'));?>
								<div class="" ng-controller="DemoController"
									style="margin-top: 30px;">
									<div range-slider min="demo2.range.min" max="demo2.range.max"
										model-min="demo2.minPrice" model-max="demo2.maxPrice"
										filter="currency" filter-options="&#8377;" step="100"></div>

								</div>
								<div class="price rangeSlider">
	          
							
			
			<p class="displayStaticRange clearFix"
										style="padding-bottom: 0px; margin-bottom: 0px;">
										<span class="fLeft"><span data-pr="6437" class="INR">&#8377;</span><?php echo number_format($min_annual_premium); ?></span>
										<span class="fRight"><span data-pr="42306" class="INR">&#8377;</span><?php echo number_format($max_annual_premium); ?></span>
									</p>

									<input type="hidden" class="search_filter" name="min_price" id="min_price" value=""/>
									<input type="hidden" class="search_filter" name="max_price" value=""/>


								</div>

								<p class="addOnFilter" style="margin: 0px; padding: 0px;">
								
								
								<h6 class="fh3 l"
									style="margin: 0px; padding: 0px; height: 9px;">&nbsp;</h6>
								</p>
								<?php $discard_duplicate = array();
                   						foreach($customer_details as $k=>$v)
                   						{
                   							if(!in_array($v['sum_assured'], $discard_duplicate))
                   							{
                   								$sum_ass [] = $v['sum_assured'];
                   							}
                   							$discard_duplicate [] = $v['sum_assured'];
                   						}				
                   						sort($sum_ass);
                   				?>
								<h6 class="fh3">Sum assured</h6>
								<p class="addOnFilter">
									<label for="1_1_refundable"> 
										<?php foreach ($sum_ass as $s)
										{
											?>
										<input type="checkbox" class="search_filter" id="sum_assured" name="sum_assured[]" value="<?php echo $s;?>"> <?php echo number_format($s,0);?>
										<br/><?php }?>
									</label>
								</p>
								
								
<?php /*?>								
								
								
								
								<p class="addOnFilter" style="margin: 0px; padding: 0px;">
								
								
								<h6 class="fh3 l"
									style="margin: 0px; padding: 0px; height: 9px;">&nbsp;</h6>
								</p>

								<h6 class="fh3">Illness's Covered</h6>
								<p class="addOnFilter">

									<label for="1_1_refundable"> <input type="checkbox"
										class="search_filter" name="maternity"
										value="1">Cancer
									</label>
								</p>


								<p class="addOnFilter" style="margin: 0px; padding: 0px;">
								
								
								<h6 class="fh3 l"
									style="margin: 0px; padding: 0px; height: 9px;">&nbsp;</h6>
								</p>

								<h6 class="fh3">Pre-existing diseases</h6>
								<p class="addOnFilter">

									<label for="1_1_refundable"> <input type="checkbox"
										class="search_filter"
										name="precover[]" value="2"> Covered after 2 years
									</label> <label for="1_1_refundable"> <input type="checkbox"
										class="search_filter"
										name="precover[]" value="3"> Covered after 3 years
									</label> <label for="1_1_refundable"> <input type="checkbox"
										class="search_filter"
										name="precover[]" value="4"> Covered after 4 years
									</label> <label for="1_1_refundable"> <input type="checkbox"
										class="search_filter"
										name="precover[]" value="5"> Covered after 5 years
									</label>
								</p>

								<p class="addOnFilter" style="margin: 0px; padding: 0px;">
								
								
								<h6 class="fh3 l"
									style="margin: 0px; padding: 0px; height: 9px;">&nbsp;</h6>
								</p>

								<h6 class="fh3">Co-payment</h6>
								<p class="addOnFilter">

									<label for="1_1_refundable"> <input type="checkbox"
										class="search_filter" name="no_copay"
										value="1"> Plans with no co-payment
									</label> <label for="1_1_refundable"> <input type="checkbox"
										class="search_filter" name="copay_10"
										value="1"> Plans with 10% co-payment
									</label> <label for="1_1_refundable"> <input type="checkbox"
										class="search_filter" name="copay_20"
										value="1"> Plans with 20% co-payment
									</label> <label for="1_1_refundable"> <input type="checkbox"
										class="search_filter" name="copay_30"
										value="1"> Plans with 30% co-payment
									</label>
								</p>

								<p class="addOnFilter" style="margin: 0px; padding: 0px;">
								
								
								<h6 class="fh3 l"
									style="margin: 0px; padding: 0px; height: 9px;">&nbsp;</h6>
								</p>

								<h6 class="fh3">Mode of purchase</h6>
								<p class="addOnFilter">

									<label for="1_1_refundable" style="width: 100%;"> <input
										type="checkbox" class="search_filter"
										name="online" value="1"> Online
									</label> <label for="1_1_refundable"> <input type="checkbox"
										class="search_filter" name="offline"
										value="1"> Offline
									</label>

								</p>
								<p class="addOnFilter" style="margin: 0px; padding: 0px;">
								
								
								<h6 class="fh3 l"
									style="margin: 0px; padding: 0px; height: 9px;">&nbsp;</h6>
								</p>

								<h6 class="fh3">Claims ratio of company</h6>


								<div class="" ng-controller="DemoController34"
									style="margin-top: 30px;">
									<div range-slider min="0" max="100" model-min="demo1.min"
										model-max="demo1.max"></div>

								</div>
								<div class="price rangeSlider">



									<p class="displayStaticRange clearFix"
										style="padding-bottom: 0px; margin-bottom: 0px;">
										<span class="fLeft">30<span data-pr="42306" class="INR">%</span></span>
										<span class="fRight">99<span data-pr="42306" class="INR">%</span></span>
									</p>

									<!-- input type="hidden" name="price" value="6437-32293"> -->


								</div>


								<p class="addOnFilter" style="margin: 0px; padding: 0px;">
								
								
								<h6 class="fh3 l"
									style="margin: 0px; padding: 0px; height: 9px;">&nbsp;</h6>
								</p>
								<h6 class="fh3">Company type</h6>
								<p class="addOnFilter">

									<label for="1_1_refundable" style="width: 100%;"> <input type="checkbox" class="search_filter" name="sector[]" value="2"> Private Sector Companies</label> 
									<label for="1_1_refundable"> <input type="checkbox" class="search_filter" name="sector[]" value="1"> Public Sector Companies</label>
									<label for="1_1_refundable"> <input type="checkbox" class="search_filter" name="sector[]" value="3"> Health Insurance Companies </label>

								</p>
 */ ?>
								<p class="addOnFilter" style="margin: 0px; padding: 0px;">
								
								
								<h6 class="fh3 l"
									style="margin: 0px; padding: 0px; height: 9px;">&nbsp;</h6>
								</p>

								<h6 class="fh3">Company</h6>
								<p class="addOnFilter">

                   		<?php 	
                   				$newVal = array();
                   				foreach($customer_details as $k=>$v)
                   				{
                   					if(!in_array($v['company_id'], $newVal))
                   					{
                   						$aNew [] = $v;
                   					}
                   					$newVal [] = $v['company_id'];
                   				}
                   				
                   				foreach ($aNew as $company)
                   				{	?>
										<input type="checkbox" class="search_filter"
											name="company_name[]"
											value="<?php echo $company['company_id'];?>" /> 
										<?php echo $company['company_shortname'];?><br/>
						<?php 	}?>

				</p>
								<br />
							</div>

						</div>
					</div>
				</div>
			</div>
<?php echo form_close();?>

</div>
	</div>

<?php echo $this->load->view('partial_view/footer_view');?>


	<!-- ======== @Region: #navigation ======== -->

	<!--Scripts -->

	<!--Legacy jQuery support for quicksand plugin-->

	<!-- Bootstrap JS -->

	<!--Bootstrap third-party plugins-->

	<!--JS plugins-->
	<script
		src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

	<script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>


	<!--Legacy jQuery support for quicksand plugin-->
	<script
		src="<?php echo base_url();?>/assets/js/jquery-migrate-1.2.1.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>

	<!--Bootstrap third-party plugins-->
	<script
		src="<?php echo base_url();?>/assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/bootstrap-switch.min.js"></script>

	<!--JS plugins-->
	<script src="<?php echo base_url();?>/assets/js/jquery.clingify.min.js"></script>
	<script
		src="<?php echo base_url();?>/assets/js/jquery.jpanelmenu.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/jRespond.js"></script>


	<!--Custom scripts mainly used to trigger libraries -->
	<script src="<?php echo base_url();?>/assets/js/script.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/jquery.bxslider.min.js"
		type="text/javascript"></script>
	<script type='text/javascript' src='<?php echo base_url();?>/assets/js/jquery.carouFredSel.js'></script>
	<script
		src="<?php echo base_url();?>/assets/js/jquery.ui.accordion.min.js"></script>

	<script src="<?php echo base_url();?>/assets/js/jquery.slicknav.js"></script>


	<script src="<?php echo base_url();?>/assets/js/jquery.cluetip.js"></script>
	<!-- <script src="../lib/jquery.cluetip.compat.js"></script> -->
	<script src="<?php echo base_url();?>/assets/js/demo.js"></script>

	<script type="text/javascript"
		src="<?php echo base_url();?>/assets/js/jquery.mousewheel.js"></script>
	<!-- the jScrollPane script -->
	<script type="text/javascript"
		src="<?php echo base_url();?>/assets/js/jquery.jscrollpane.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/scrolltopcontrol.js"></script>
	<script src="<?php echo base_url();?>/assets/js/angular.min.js"></script>
	<!-- and out directive code -->
	<script src="<?php echo base_url();?>/assets/js/angular.rangeSlider.js"></script>

	<script src="<?php echo base_url();?>/assets/js/custom.js"></script>
	<script>
		// basic angular app setup
		var app = angular.module('myApp', ['ui-rangeSlider']);

		app.controller('DemoController',
        	function DemoController($scope) {

        		// just some values for the sliders
        		$scope.demo2 = {
					range: {
						min:<?php echo $min_annual_premium;?>,
						max: <?php echo $max_annual_premium;?>
					},
					minPrice: <?php echo $min_annual_premium;?>,
					maxPrice: <?php echo $max_annual_premium;?>

					
				};

        	}
				
        );


		app.controller('DemoController34',
        	function DemoController34($scope) {

        		// just some values for the sliders
        		$scope.demo1 = {
    min:0,
    max: 100
};

        	}
			
        );
	</script>
	<script type="text/javascript">
$(document).ready(function(){
	$('#menu').slicknav();
	
	$(document).delegate('.down_cnt','click',function() {
			//$('.accordion_a').slideToggle();
		//	$('.down_cnt').closest('.accordion_a').slideToggle();
		//$('.accordion_a').slideToggle();
$(this).parent().parent().parent().find('.accordion_a').slideToggle();
		
	});	
	
});

(function($) {
	$(document).ready(function() {

		$('#comparePolicy').on('click',function(){
			if(!($('.refundable:checked').length>1))
			{
				alert('Please Select At Least 2 Plans To Compare.');
				return false;
			}
			else
			{
				$('#compare').submit();
			}
		});

		$('.accordion').accordion({
			collapsible: true,
			heightStyle : 'content'
			
		});
		$('.accordion.closed').accordion("option", "active", false );
	});

	$('.search_filter').on('click',function(){
		data = $('#search').serialize();

		 $.ajax({
			type:"post", 
			url:"<?php echo base_url().'health_insurance/personal_accident/get_personal_accident_results'?>",
			data:data,
			 success:function(data)
			{ $('#cmp_tbl').html(data);
			}
			});
	});
})(jQuery);
</script>




</body>
</html>