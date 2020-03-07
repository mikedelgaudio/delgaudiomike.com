<?php

$PageTitle="Mike DelGaudio | Computer Science Student";
$metaOgTitle= "'Mike DelGaudio | Computer Science Student'";
$metaKeywords= ",index,home,homepage,home page,index page,root";
$pageStyle="'css/indexStyle.css'";

function customPageHeader(){?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php }

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
		<div class="text-center">
			<p id="indexText">computer science student &amp;&amp; personal portfolio</p>
			<a type="button" href="https://github.com/mikedelgaudio/resume/blob/master/michael_delgaudio_resume_fall_2020.pdf" target="_blank" rel="nofollow noreferrer" class="btn btn-outline-warning">Resume</a>
		</div>
	</div>	
</div>

<?php include_once("footer.php");?>

