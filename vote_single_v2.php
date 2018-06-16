<?php
  session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <style>
    @font-face{
      font-family:"roboto"; src:url("RobotoCondensed-Light.ttf")}
      p{font-family:roboto;}
      h1{font-family:roboto;}
      h2{font-family:roboto;}
      center{font-family:roboto;}
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="contact form example">

  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <!-- Style The Contact Form How Ever You Prefer -->
  <link rel="stylesheet" href="allCss/formcss/Formstyle.css">
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
  <link rel="stylesheet" href="allCss/css/style.css">
  <link rel="stylesheet" href="allCss/Gcss/Glowstyle.css">

  <title>Online Voting</title>
</head>

<body>
  
  <h2 class="content-head is-center">Voting</h2>
  <aside>
    <center>Kategorie 1 - Einzelbilder &#9474 category 1 - individual photos</center>
    <center>Gib deine Stimmen ab!  &#9474 Cast your votes!</center>
  </aside>

  <div style="display:none;" id="thankyou_message">
    <h2><em>Thanks</em> for contacting us! We will get back to you soon!</h2>
  </div>




<!-- START HERE -->

  <?php
  	$ids = array('ID1010.jpg','ID1020.jpg','ID1080.JPG','ID1090.jpg','ID1140.jpg','ID1190.jpg','ID1200.jpg','ID1250.jpg','ID1280.jpg','ID1310.jpg','ID1340.jpg','ID1400.jpg','ID1410.JPG','ID1500.jpg','ID1540.JPG','ID1550.jpg','ID1580.jpg','ID1590.jpeg','ID1600.jpg','ID1630.jpg'); 
  ?>
   
  <form class="form-inline" id="gform" method="POST" class="pure-form pure-form-stacked" data-email="example@email.net" action="vote_single_process.php">

  <div id="formdata">

    <div id="imageGallary">



      <div class="container-fluid text-center box">

<?php for($i = 0 ; $i < 4; $i++): ?>

        <hr width="75%" />
        <div class="row justify-content-center box">

	<?php for($j = 0 ; $j < 5; $j++): ?>        	

          <div class="col-md-2 m-2 img-thumbnail grow box">
            <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/eine/<?php echo $ids[($i*5)+$j];?>" class="img-responsive p-1 rounded" style="overflow:hidden;max-height:200px;max-width:200px;">
          </div>

    <?php endfor; ?>


        </div>

        <div class="row justify-content-center box">
			<!-- form start -->
		    <!--checkboxes-->
	<?php for($j = 0 ; $j < 5; $j++): ?> 

		    <div class="col-md-2 m-2 img-thumbnail grow2 box">
		    	<fieldset class="pure-group">
		    		<legend><?php echo $ids[($i*5)+$j];?></legend>
		     		<input id="checkboxes--javascript" type="checkbox" name="checkboxes<?php echo $ids[($i*5)+$j];?>" value="<?php echo $ids[($i*5)+$j];?>"  /> <label for="checkboxes--javascript"></label>
		    	</fieldset>
		    </div>

	<?php endfor; ?>

		    

		</div>

<?php endfor;?>

      </div>
    </div>


    


	

    <div><button onclick="return SubmitClick();" id="btn2Submit" class="button-success pure-button button-xlarge">
    <i class="fa fa-paper-plane"></i>&nbsp;Send vote for this category</button></div>

<!--     <button id="btn2Submit" class="button-success pure-button button-xlarge">
      <i class="fa fa-paper-plane"></i>&nbsp;press</button> -->

  </div>


  </form>



    

  <!-- Customise the Thankyou Message People See when they submit the form: -->

  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <!-- Submit the Form to Google Using "AJAX" -->
<!-- <script data-cfasync="false" type="text/javascript" src="form-submission-handler.js"></script> -->
  <!-- <script data-cfasync="false" type="text/javascript"
  src="/form-submission-handler.js"></script> -->
<!-- END -->
<script type="text/javascript">

function SubmitClick(){
	var numberOf = $('#gform').find('input[type=checkbox]:checked').length;
    if( numberOf !=3 ) {
        alert("Please select exactly 3 images");
        return false;
    } else {
        alert("Images sent successfully");
        var press = "Send";
        return true;
           //handlerSubmit(this);
    }
    return false;
}

</script>
	
	

</body>
</html>


