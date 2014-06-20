

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Compare Insurance Policies and Plans in India | MyInsuranceClub.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Description" content="Compare and get free quotes for the best life insurance, health insurance, travel insurance, car and auto insurance plans, policies and schemes in India offered by different insurance companies only at MyInsuranceClub.com" />
<meta name="Keywords" content="compare insurance, best life insurance, best health insurance, cheap car insurance, auto insurance quote, cheap travel insurance, affordable insurance, best insurance policy, insurance companies in India" />

<!-- Bootstrap CSS -->
<link href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap third-party plugins css -->
<link href="<?php echo base_url();?>assets/css/bootstrap/bootstrap-switch.min.css" media="screen" rel="stylesheet" />
<!-- Font Awesome -->
<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">

<!-- Plugins -->

<!-- style -->
<link href="<?php echo base_url();?>assets/css/theme-style.min.css" rel="stylesheet">

<!-- custom override -->
<link href="<?php echo base_url();?>assets/css/custom-style.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/clingify.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/jquery.bxslider.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/slick.css"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/slicknav.css">

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">

<link type="text/css" href="<?php echo base_url();?>assets/css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

		<style type="text/css" id="page-css">
			/* Styles specific to this particular page */
			.scroll-pane
			{
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
<link rel="shortcut icon" href="assets/img/icons/favicon.png">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

<!--Retina.js plugin - @see: http://retinajs.com/-->
<script src="<?php echo base_url();?>assets/plugins/js/retina-1.1.0.min.js"></script>
</head>

<!-- ======== @Region: body ======== -->
<body class="page page-index">

<?php $this->load->view('partial_view/header_view');?>  
	
	<!-- Header Ends -->
<span id="o_touch"></span>

<div id="highlighted" style=" background:#f9f9f9; padding-bottom:50px; margin-bottom:0px;" >
  <div class="container">
    <!-- form name="" action="#" id="" enctype="multipart/form-data"  -->
    <?php echo validation_errors();?>
	<?php echo form_open('health_insurance/basicMediclaim/health_policy',array('name'=>'health_form'));?>
  <div class="col-md-12 center mar-20"><h1>Compare & Buy Health Insurance Plans</h1>
  <p>Choose from 56 plans from 18 companies</p>
  </div>
  
 <div class="col-md-12 center" style=" position:relative;"><h3>I want a <span id="clickk"><span class="dotted rs" id="rs"> <?php if(isset($this->session->userdata['user_input']['coverage_amount'])){
 																																	echo $this->session->userdata['user_input']['coverage_amount'];}else{?>3 Lakhs<?php }?></span>
 
 <div data-bind="" style="display: none;" class="choice" id="c_ch">
               <div class="choice-leftcol" data-bind="">
                    <ul class="years active" id="c_amt" data-bind="jScrollPane">
                            <?php 
                            		foreach($cvg_amt as $k=>$v){?>
                            <li><a href="javascript:void(0);"><?php  {echo $v;} ?></a></li>
                            <?php } ?>
                    </ul>
                    <div class="stepwrap years-stepwrap">
                        <span class="step show">
                            <em>1</em>
                            <span class="label-mid">Select Coverage Amount</span>
                        </span>
                    </div>
                </div>
             <!-- test policy term start  
            </div></span> cover for <span id="clickk_p"><span class="dotted rs" id="yr"> 2 years</span>
            
            <div data-bind="" style="display: none;" class="choice" id="c_yr">
               <div class="choice-leftcol" data-bind="">
                    <ul class="years active" id="c_term" data-bind="jScrollPane">
                            <li><a href="javascript:void(0);">1 year</a></li>
                            <li><a href="javascript:void(0);">2 years</a></li>
                            <li><a href="javascript:void(0);">3 years</a></li>
                    </ul>
                    <div class="stepwrap years-stepwrap">
                        <span class="step show">
                            <em>2</em>
                            <span class="label-mid">Policy Term</span>
            
            
            </span></div></div></div></span> for 
            
             test policy term end -->
           
            </div> cover for <span id="clickk_f"><span class="dotted c_for" id="c_for">
            
            <?php if(isset($this->session->userdata['user_input']['plan_type_name'])){ echo $this->session->userdata['user_input']['plan_type_name'];}else{?>myself<?php }?></span>
 
 <div data-bind="" style="display: none;" class="choice f" id="c_ch_f">
               <div class="choice-leftcol" data-bind="">
                    <ul class="years active" id="c_for_f" data-bind="jScrollPane">
                           <?php foreach($family_composition as $k=>$v){?> 
                           <li data-compo-id="<?php echo $k; ?>"><a href="javascript:void(0);"><?php echo $v; ?></a></li>
                           <?php } ?>
                    </ul>
                    <div class="stepwrap years-stepwrap">
                        <span class="step show">
                            <em>3</em>
                            <span class="label-mid">Select Members</span>
                        </span>
                    </div>
                </div>
                
            </div></span>.</h3></div>
 <div class="col-md-12 center no-margin"><h3>I am <span id="clickk_g"><span class="dotted ge" id="ge"><?php if(isset($this->session->userdata['user_input']['cust_gender'])){ echo $this->session->userdata['user_input']['cust_gender'];}else{?>male<?php }?></span>
 
 <div data-bind="" style="display: none;" class="choice g" id="c_ch_g">
               <div class="choice-leftcol" data-bind="">
                    <ul class="years active" id="c_for_g" data-bind="jScrollPane">
                            <li><a href="javascript:void(0);">male</a></li>
                            <li><a href="javascript:void(0);">female</a></li>
                            
                    </ul>
                    <div class="stepwrap years-stepwrap">
                        <span class="step show">
                            <em>4</em>
                            <span class="label-mid">Gender</span>
                        </span>
                    </div>
                </div>
                
            </div></span> &amp; I stay in <span id="clickk_l"><span class="dotted loc" id="loc"><?php if(isset($this->session->userdata['user_input']['cust_city_name'])){ echo $this->session->userdata['user_input']['cust_city_name'];}else{?>Mumbai<?php }?></span>
 
 <div data-bind="" style="display: none;" class="choice l" id="c_ch_l">
               <div class="choice-leftcol" data-bind="">
                    <ul class="years active scroll-pane" id="c_for_l" data-bind="jScrollPane">
					<?php foreach ($city as $c_name){?>
                    <li data-city-id="<?php echo $c_name['city_id'];?>"><a href="javascript:void(0);"><?php echo $c_name['mic_city_name']; ?></a></li> 
                    <?php }?>
                    </ul>
                    
                    <div class="stepwrap years-stepwrap">
                        <span class="step show">
                            <em>5</em>
                            <span class="label-mid">Location</span>
                        </span>
                    </div>
                </div>
                
            </div></span>.</h3>
  </div>
  
  <div class="col-md-12 mar-20 left80 ">
  <p>About Policy holder:</p>
  </div>
   <div class="col-md-12 center left80">
   <div class="form-group col-md-3" style="padding-left:5px;">
                    <label class="sr-only" for="signup-first-name">Full Name</label>
                    <input type="text" class="form-control" id="cust_name" name="cust_name" value="<?php if(isset($this->session->userdata['user_input']['full_name']))
                    																					{
                    																						echo $this->session->userdata['user_input']['full_name'];
                    																					}else 
                    																					{			 
                    																						echo set_value('cust_name');
                    																					}?>" placeholder="Full name">
                    																					
                    <input type="hidden" id="cust_gender" name="cust_gender" value="<?php if(isset($this->session->userdata['user_input']['cust_gender']))
                    																					{
                    																						echo $this->session->userdata['user_input']['cust_gender'];
                    																					}else 
                    																					{?>		 
                    																						male
                    																					<?php }?>">
                    <input type="hidden" id="policy_term" name="policy_term" value="">
                     <input type="hidden" id="cust_city" name="cust_city" value="<?php if(isset($this->session->userdata['user_input']['cust_city']))
                    																					{
                    																						echo $this->session->userdata['user_input']['cust_city'];
                    																					}else 
                    																					{?>		 
                    																						599
                    																					<?php }?>">
                     <input type="hidden" id="cust_city_name" name="cust_city_name" value="">
                     <input type="hidden" id="coverage_amount" name="coverage_amount" value="<?php if(isset($this->session->userdata['user_input']['coverage_amount']))
                     																				{
 																										echo $this->session->userdata['user_input']['coverage_amount'];
                     																				}else
																										{?>
																											3 Lakhs
																									<?php }?>">
                     <input type="hidden" id="plan_type" name="plan_type" value="<?php if(isset($this->session->userdata['user_input']['plan_type']))
                    																					{
                    																						echo $this->session->userdata['user_input']['plan_type'];
                    																					}else 
                    																					{?>		 
                    																						1A
                    																				<?php }?>">
                     <input type="hidden" id="plan_type_name" name="plan_type_name" value="">
                     <input type="hidden" id="product_name" name="product_name" value="Health Insurance">
                     <input type="hidden" id="product_type" name="product_type" value="Mediclaim">

                  </div>
                     <div class="form-group col-md-2">
                    <label class="sr-only" for="signup-first-name">Date Of Birth</label>
                    <input type="text" data-provide="datepicker" class="form-control" id="cust_dob" name="cust_dob" value="<?php if(isset($this->session->userdata['user_input']['cust_birthdate']))
                    																											{
                    																												echo $this->session->userdata['user_input']['cust_birthdate'];
                    																											}else 
                    																											{			 
                    																												echo set_value('cust_dob');
                    																											}?>" placeholder="Date Of Birth">
                  </div>
                     <div class="form-group col-md-2">
                    <label class="sr-only" for="signup-first-name">Mobile</label>
                    <input type="text" class="form-control" id="cust_mobile" name="cust_mobile" value="<?php if(isset($this->session->userdata['user_input']['cust_mobile']))
                    																						{
                    																							echo $this->session->userdata['user_input']['cust_mobile'];
                    																						}else 
                    																						{			 
                    																							echo set_value('cust_mobile');
                    																						}?>" placeholder="Mobile">
                  </div>
                  
                  
                   <div class="form-group col-md-2">
                    <label class="sr-only" for="signup-first-name">Email</label>
                    <input type="text" class="form-control" id="cust_email" name="cust_email" value="<?php if(isset($this->session->userdata['user_input']['cust_email']))
                    																						{
                    																							echo $this->session->userdata['user_input']['cust_email'];
                    																						}else 
                    																						{			 
                    																							echo set_value('cust_email');
                    																						}?>" placeholder="Email">
                  </div>
                 
                 
                  
   </div>
   
   
   
 
   
   
     <div class="col-md-12  left80 pad_l0 " style="padding-left:15px; display:none;" id="adlt_spc">
  
  <div class="col-md-3  ">
  <div style="padding-left:0px;" class="col-md-12"><p>Adult 2 (Spouse):</p></div>
                     <div class="form-group col-md-6">
                    <label for="signup-first-name" class="sr-only">Date Of Birth</label>
                    <input type="text" class="form-control" id="spouce_dob" name="spouce_dob" placeholder="Date Of Birth">
                  </div>
                  
                  
                  
                   <div class="form-group col-md-6">
                   <label class="sr-only" for="signup-first-name">Gender</label>
<select class="form-control" name="spouce_gender" id="spouce_gender">
<option value="Male">Male</option>
<option value="Male">Female</option>

</select>                </div>
   </div>
   </div>
   
   
   
   
   
    <div class="col-md-12  left80 pad_l0 " style="padding-left:15px;">
  
  <div class="col-md-3  " id="one_c" style="display:none;">
  <div style="padding-left:0px;" class="col-md-12"><p>Child 1:</p></div>
                     <div class="form-group col-md-6">
                    <label for="signup-first-name" class="sr-only">Date Of Birth</label>
                    <input type="text" placeholder="Date Of Birth" name="child1_dob" id="spouce_dob" class="form-control">
                  </div>
                  
                  
                  
                   <div class="form-group col-md-6">
                    <label for="signup-first-name" class="sr-only">Gender</label>
<select id="spouce_gender" name="child1_gender" class="form-control">
<option value="Male">Male</option>
<option value="Male">Female</option>

</select>                  </div>
   </div>
   <div class="col-md-3  " id="two_c" style="display:none;">
  <div style="padding-left:0px;" class="col-md-12"><p>Child 2:</p></div>
                     <div class="form-group col-md-6">
                    <label for="signup-first-name" class="sr-only">Date Of Birth</label>
                    <input type="text" placeholder="Date Of Birth" name="child2_dob" id="spouce_dob" class="form-control">
                  </div>
                  
                  
                  
                   <div class="form-group col-md-6">
                    <label for="signup-first-name" class="sr-only">Gender</label>
<select id="spouce_gender" name="child2_gender" class="form-control">
<option value="Male">Male</option>
<option value="Male">Female</option>

</select>                  </div>
   </div>
   <div class="col-md-3  " id="three_c" style="display:none;">
  <div style="padding-left:0px;" class="col-md-12"><p>Child 3:</p></div>
                     <div class="form-group col-md-6">
                    <label for="signup-first-name" class="sr-only">Date Of Birth</label>
                    <input type="text" placeholder="Date Of Birth" name="child3_dob" id="spouce_dob" class="form-control">
                  </div>
                  
                  
                  
                   <div class="form-group col-md-6">
                    <label for="signup-first-name" class="sr-only">Gender</label>
<select id="spouce_gender" name="child3_gender" class="form-control">
<option value="Male">Male</option>
<option value="Male">Female</option>

</select>                  </div>
   </div>
   <div class="col-md-3  " id="four_c" style="display:none;">
  <div style="padding-left:0px;" class="col-md-12"><p>Child 4:</p></div>
                     <div class="form-group col-md-6">
                    <label for="signup-first-name" class="sr-only">Date Of Birth</label>
                    <input type="text" placeholder="Date Of Birth" name="child4_dob" id="spouce_dob" class="form-control">
                  </div>
                  
                  
                  
                   <div class="form-group col-md-6">
                    <label for="signup-first-name" class="sr-only">Gender</label>
<select id="spouce_gender" name="child4_gender" class="form-control">
<option value="Male">Male</option>
<option value="Male">Female</option>

</select>                  </div>
   </div>
   
   
   
   
   
   
   
   
   
   
   
   </div>
   
   
    <div class="col-md-12  left80">
   
    <div class="checkbox">
                    <label>
                      <input type="checkbox" name="MIC_terms" value="1">
                     I authorize MyInsuranceClub & its partners to Call/SMS for my application & agree to the <a href="" class="link">Terms of Use</a>.
                    </label>
                  </div>
                  
                   <div class="form-group col-md-3"> 
                  
                  <input type="submit"  name='submit' class="btn btn-primary my" value="Show My Options >"/>
                  
                  </div>
                  </div>
                 
                  <div class="col-md-9  cen"  style="margin-top:20px;">
                  <div style="" class="pos">
                  <div class="col-md-3" >
                <p ><img src="<?php echo base_url(); ?>assets/images/star.png" border="0" class="mar-r8">Cashless claims  </p>

                  </div>
                  
                  <div class="col-md-3">
                <p><img src="<?php echo base_url(); ?>assets/images/star.png" border="0" class="mar-r8">Lifetime renewal</p>

                  </div>
                  
                  <div class="col-md-3">
                <p><img src="<?php echo base_url(); ?>assets/images/star.png" border="0" class="mar-r8">Tax benefits</p>

                  </div>
                  
                    
                  <div class="col-md-3">
                <p><img src="<?php echo base_url(); ?>assets/images/star.png" border="0" class="mar-r8">Free health checkups</p>

                  </div>
                  </div>
                  </div>
  
  
<?php echo form_close(); ?>

</div>
</div>

<div class="b-top"></div>
<section id="feature-pannels" style="opacity: 1; bottom: 0px;" class="moving">
  <div class="container ">
    <ul class="pannels">
      <li class="col-md-4">
        <div class="info">
          <h1 class="primary">Fast</h1>
          <div class="text orange-hover">In just a few seconds, we will display premiums from different insurance companies. <br>
            <a href="javascript:void(0)" title="">Quick comparison </a> </div>
        </div>
      </li>
      <li class="col-md-4">
        <div class="info">
          <h1 class="primary">Un-biased</h1>
          <div class="text orange-hover">We display premiums from all insurance companies partnered with us. No one is left out! <br>
            <a href="javascript:void(0)" title="">Fair comparison</a> </div>
        </div>
      </li>
      <li class="col-md-4">
        <div class="info">
          <h1 class="primary">Saves Money</h1>
          <div class="text orange-hover">By comparing plans with us you can save a large amount of money every year. <br>
            <a href="javascript:void(0)" title="">Money saver</a> </div>
        </div>
      </li>
    </ul>
  </div>
</section>
<div class="b-top"></div>
<section class="nav-tabs-simple"> 
  <!-- Nav tabs -->
  <div class="container "> 
    
    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane fade in active" id="htmlcss">
        <article class="row">
          <div class="col-md-5 col-sm-5 fadeInLeft visible" > <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/why1.jpg" alt="starbuck"> </div>
          <div class="col-md-7 col-sm-6 text-left fadeInRight visible" >
            <h6>Benefits of Comparing Health Insurance with us?</h6>
            <p>Health expenses are increasing considerably each day and so are the health risks. With a wide array of health insurance policies, the task of choosing the best health insurance policy for your needs can be quite tough and confusing.
At MyInsuranceClub we provide you with comparative health insurance quotes to select the best health insurance policy in a quick and simplified manner. You can also compare features of different health insurance policies to check the <span class="highlight">best health insurance policy</span> for your requirements. 

.</p>
            <ul class="sub-list">
            
           <li><i class="icon icon-documents-bookmarks-16"></i>With our <span class="highlight">instant online calculator</span>, you can compare health  insurance premiums easily</li>
	 <li><i class="icon icon-documents-bookmarks-16"></i>With the plan features, you do get the <span class="highlight">Best Health Insurance Comparison</span></li>
	 <li><i class="icon icon-documents-bookmarks-16"></i>Yes, we are <span class="highlight">Completely Un-biased</span> in our comparison</li>
	 <li><i class="icon icon-documents-bookmarks-16"></i>MyInsuranceClub does this for you at no cost - <span class="highlight">It's Free!</span> </li>   
     
            
            </ul>
          </div>
        </article>
      </div>
    </div>
    <article class="node-2 node node-page view-mode-full clearfix">
      <div class="col-md-12">
        <ul class="bxslider">
          <li>
            <div class="field field-name-body field-type-text-with-summary field-label-hidden">
              <div class="field-items">
                <div class="field-item even">
                  <p><strong><img src="<?php echo base_url(); ?>assets/images/left_t.png" border="0" class="top_i"> Thank you once again for your free and very valuable information on 
                    insurance. Best wishes to your team and keep up the good work!</strong></p>
                  <p class="col-md-10 aln_right">- Pravin Bhandare, Bangalore</p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="field field-name-body field-type-text-with-summary field-label-hidden">
              <div class="field-items">
                <div class="field-item even">
                  <p><strong><img src="<?php echo base_url(); ?>assets/images/left_t.png" border="0" class="top_i">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat!</strong></p>
                  <p class="col-md-10 aln_right">- Anita Viswas, Mumbai</p>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </article>
  </div>
</section>



<div class="container">
<div class="noscript accordion closed">
<h5>What is Health Insurance?</h5>
<div>Health Insurance, also known as Mediclaim in India,  is a form of insurance which covers the expenses incurred on medical treatment and hospitalisation. It covers the policyholder against any financial constraints arising from medical emergencies. In case of sudden hospitalisation, illness or accident, health insurance takes care of the expenses on medicines, oxygen, ambulance, blood, hospital room, various medical tests and almost all other costs involved. By paying a small premium every year, you can ensure that any big medical expenses, if incurred, will not burn a hole in your pocket. The plan can be taken for an individual or for your family as a Family Floater Health Insurance Plan.
</div>
</div>
<div class="loading"></div>
<div class="noscript accordion closed">
<h5>Major Benefits in a Health Insurance Policy</h5>


    <div class="" style="min-height:300px; float:left; width:100%;">
    <span class="" style="min-height:200px; float:left; width:100%; margin-top:40px;">
    
     <div  class="col-md-4 "><h3>Cashless facility</h3>
    <p>Each health insurance company ties up with a large number of hospitals to provide cashless health insurance facility. If you are admitted to any of the network hospitals, you would not have to pay the expenses from your pocket. In case the hospital is not part of the network, you will have to pay the hospital and the insurance company will reimburse the costs to you later. </p>
    </div>
     <div  class="col-md-4"><h3>Pre-hospitalisation expenses</h3>
    <p>In case you have incurred treatment costs for the ailment for which you later get admitted to a hospital, the insurance company will bear those costs also. Usually the payout is for costs incurred between 30 to 60 days before hospitalisation.</p>
    </div>
    <div  class="col-md-4 "><h3>Hospitalisation Expenses </h3>
    <p>Costs incurred if a policyholder is admitted to the hospital for more than 24 hours are covered by the health insurance plan. </p>
    </div>
        </span>
    
    
     <span class="" style="min-height:130px; float:left; width:100%;">
    <div  class="col-md-4 "><h3>Post-hospitalisation expenses </h3>
    <p>Even after you are discharged from the hospital, you will incur costs during the recovery period. Most mediclaim policies will cover the expenses incurred 60 to 90 days after hospitalisation. </p>
    </div>
     <div  class="col-md-4"><h3>Day Care Procedure Expenses</h3>
    <p>Due to advancement in technology some of the treatments no more require a 24 hours of hospitalisation. Your health insurance policy will cover the costs incurred for these treatments also. </p>
    </div>
     <div  class="col-md-4"><h3>Ambulance Charges</h3>
    <p>In most cases the ambulance charges are taken up by the policy and the policy holder usually doesn't have to bear the burden of the same.</p>
    </div>
</span>


   <span class="" style="min-height:200px; float:left; width:100%;">
   
     <div  class="col-md-4"><h3>Cover for Pre-existing Diseases</h3>
    <p>Health insurance policies have a facility of covering pre-existing diseases after 3 or 4 years of continuously renewing the policy, i.e. if someone has diabetes, then after completion of 3 or 4 years of continuous renewal with the same insurer (depending on the plan offered and his age), any hospitalisation due to diabetes will also be covered..</p>
    </div>
    
     <div  class="col-md-4"><h3>Tax Benefits</h3>
    <p>The premiums paid for a Health Insurance Policy are exempted for Under Section 80D of the Income Tax Act. Income tax benefit is provided to the customer for the premium amount till a maximum of Rs. 15,000 for regular and Rs. 20,000 for senior citizen respectively.</p>
    </div>
     <div  class="col-md-4 "><h3>No-Claim Bonus</h3>
    <p>If there has been no claim in the previous year, a benefit is passed on to the policyholder, either by reducing the premium or by increasing the sum assured by a certain percentage of the existing premium. </p>
    </div>
</span>

<span class="" style="min-height:100px; float:left; width:100%;">
   
      <div  class="col-md-4 "><h3>Organ Donor Expenses</h3>
    <p>The medical expenses incurred in harvesting the organ for a transplant is paid by the policy. </p>
    </div>
     <div  class="col-md-4"><h3>Health check up</h3>
    <p>Some health insurance policies have a facility of free health check-up for the well being of the individual if there is no claim made for certain number of years.</p>
    </div>
</span>


     </div>
 
 
 
 
 
</div>
<div class="loading"></div>
</div>









<div class="container   margin-bottom-large">
  <div  class="col-md-6 mar-25">
    <div class="top_ins"></div>
    <h3 class="header_art">Insurance Articles</h3>
  
  
  
    <div class="art_cnt widget ">
      <h4 class="sub_h">How to secure your future with pension</h4>
      <div class="textwidget">
        <p><img style="border: 0px none;" alt="" src="<?php echo base_url(); ?>assets/images/art1.jpg" >At any moment, an unhappy customer can share their opinion with the masses through...How to speak with an Indian Accent.
        </p> 
      </div>
      <div class="comnt"> <span class="text-left l">1,348 views</span> <span class="text-right r">0 comments</span> </div>
    </div>
    
    
    <div class="art_cnt widget ">
      <h4 class="sub_h">How to secure your future with pension</h4>
      <div class="textwidget">
        <p><img style="border: 0px none;" alt="" src="<?php echo base_url(); ?>assets/images/art1.jpg" >At any moment, an unhappy customer can share their opinion with the masses through...How to speak with an Indian Accent.
        </p> 
      </div>
      <div class="comnt"> <span class="text-left l">1,348 views</span> <span class="text-right r">0 comments</span> </div>
    </div>
    
    
    <div class="art_cnt widget ">
      <h4 class="sub_h">How to secure your future with pension</h4>
      <div class="textwidget">
        <p><img style="border: 0px none;" alt="" src="<?php echo base_url(); ?>assets/images/art1.jpg" >At any moment, an unhappy customer can share their opinion with the masses through...How to speak with an Indian Accent.
        </p> 
      </div>
      <div class="comnt"> <span class="text-left l">1,348 views</span> <span class="text-right r">0 comments</span> </div>
    </div>
    <div class="col-md-12 text-rightp"><a href="javascript:void(0)">More Articles <span class="ic">+</span></a></div>
    
    
  </div>
  
  
  
  
  <div  class="col-md-6 mar-25">
    <div class="top_ins"></div>
    <h3 class="header_art">Insurance News</h3>
    
    <div class="art_cnt widget ">
      <h4 class="sub_h">How to secure your future with pension</h4>
      <div class="textwidget">
        <p><img style="border: 0px none;" alt="" src="<?php echo base_url(); ?>assets/images/news1.jpg" >At any moment, an unhappy customer can share their opinion with the masses through...How to speak with an Indian Accent.
        </p> 
      </div>
      <div class="comnt"> <span class="text-left l">1,348 views</span> <span class="text-right r">0 comments</span> </div>
    </div>
    
    
     <div class="art_cnt widget ">
      <h4 class="sub_h">Which is the best child plan?</h4>
      <div class="textwidget">
        <p><img style="border: 0px none;" alt="" src="<?php echo base_url(); ?>assets/images/news2.jpg" >At any moment, an unhappy customer can share their opinion with the masses through...How to speak with an Indian Accent.
        </p> 
      </div>
      <div class="comnt"> <span class="text-left l">1,348 views</span> <span class="text-right r">0 comments</span> </div>
    </div>
    
    
     <div class="art_cnt widget ">
      <h4 class="sub_h">Benefits of investing early</h4>
      <div class="textwidget">
        <p><img style="border: 0px none;" alt="" src="<?php echo base_url(); ?>assets/images/news3.jpg" >At any moment, an unhappy customer can share their opinion with the masses through...How to speak with an Indian Accent.
        </p> 
      </div>
      <div class="comnt"> <span class="text-left l">1,348 views</span> <span class="text-right r">0 comments</span> </div>
    </div>
        <div class="col-md-12 text-rightp"><a href="javascript:void(0)">More Guides <span class="ic">+</span></a></div>

   
  </div>
  
  
</div>

<?php echo $this->load->view('partial_view/footer_view');?>

<!-- ======== @Region: #navigation ======== --> 

<!--Scripts --> 

<!--Legacy jQuery support for quicksand plugin--> 

<!-- Bootstrap JS --> 

<!--Bootstrap third-party plugins--> 

<!--JS plugins--> 
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script> 


<!--Legacy jQuery support for quicksand plugin--> 
<script src="<?php echo base_url();?>assets/js/jquery-migrate-1.2.1.min.js"></script> 

<!-- Bootstrap JS --> 
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 

<!--Bootstrap third-party plugins--> 
<script src="<?php echo base_url();?>assets/js/bootstrap-hover-dropdown.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/bootstrap-switch.min.js"></script> 

<!--JS plugins--> 
<script src="<?php echo base_url();?>assets/js/jquery.clingify.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.jpanelmenu.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/jRespond.js"></script> 


<!--Custom scripts mainly used to trigger libraries --> 
<script src="<?php echo base_url();?>assets/js/script.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.bxslider.min.js" type="text/javascript"></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.carouFredSel.js'></script>
  <script src="<?php echo base_url();?>assets/js/jquery.ui.accordion.min.js"></script>

<script src="<?php echo base_url();?>assets/js/jquery.slicknav.js"></script>

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.cluetip.css" type="text/css" />

 <script src="<?php echo base_url();?>assets/js/jquery.cluetip.js"></script>
  <!-- <script src="../lib/jquery.cluetip.compat.js"></script> -->
  <script src="<?php echo base_url();?>assets/js/demo.js"></script>  
  
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.mousewheel.js"></script>
		<!-- the jScrollPane script -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.jscrollpane.min.js"></script>
 <script src="<?php echo base_url();?>assets/js/scrolltopcontrol.js"></script>
		
  <script src="<?php echo base_url();?>assets/js/custom.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#menu').slicknav();
});

(function($) {
	$(document).ready(function() {
		$('.accordion').accordion({
			collapsible: true,
			heightStyle : 'content'
			
		});
		$('.accordion.closed').accordion( "option", "active", false );
	});
})(jQuery);
</script>

<script type="text/javascript">
         $(document).ready(function () {           
             $('.bxslider').bxSlider({
                 mode: 'fade',
                 slideMargin: 3,
                 auto:true
             });   
			 
				          
         });
    </script>
 
</body>
</html>