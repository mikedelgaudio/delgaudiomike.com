<?php

$PageTitle="Home | Mike DelGaudio";
$metaOgTitle= "'Home | Mike DelGaudio'";
$metaKeywords= ",index";
$pageStyle="'css/indexStyle.css'";

function customFooterScripts(){?>
	<script type="text/javascript" src="js/indexBackgroundChanger.js"></script>
<?php }

include_once('header.php');
?>
	
<div class="backgroundIndex">
	<div class="w3-animate-zoom">
		<div id="container">
  			<p><a href="/">DelGaudio</a></p>
		</div>
		<p id="indexText">computer science student &amp;&amp; personal portfolio</p>
	</div>	
</div>

<?php include_once("footer.php");?>

