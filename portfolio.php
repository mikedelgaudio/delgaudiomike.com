<?php
$PageTitle="Portfolio | Mike DelGaudio";
$metaTitle= "'Portfolio'";
$metaOgTitle= "'Portfolio | Mike DelGaudio'";
$metaDescr= "'personal portfolio of my previous work'";
$metaOgDescr= "'personal portfolio of my previous work'";
$lightBoxBool = true;

function customPageHeader(){?>
   <!--photoGrid-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	<link rel="stylesheet" href="css/gallery-grid.css">
	<!--lightbox-->
	<link rel="stylesheet" href="css/baguetteBox.min.css">
	<script src="https://polyfill.io/v2/polyfill.min.js?features=IntersectionObserver"></script>
	<script type="text/javascript" src="js/yall.min.js" defer></script>
<?php }


include_once('header.php');
?>

<!--HEADER-->
<a href="#" id="scroll" style="display: none;"><span></span></a>
<div class="w3-main w3-content removePadding">
	<div class="w3-animate-zoom">
		<div class="w3-black">
			<div class="spacer20"></div>
				<div id="container">
  					<p><a href="/">DelGaudio</a></p>
					<p class="pageTitle">&gt;&gt;&gt; portfolio<span class="blinking-cursor">_</span></p>
				</div>
			<div class="spacer20"></div>
		</div>
	
	<div class="spacer20"></div>
	<a href="https://www.youtube.com/watch?v=h8_68OONY-w&t=4s" target="_blank" rel="noreferrer nofollow"> <button class="accordion">Run Python in XCode 10 Tutorial</button>
	</a>

	<div class="spacer20"></div>
	<a href="https://www.youtube.com/watch?v=zIIYN_PyUAM" target="_blank" rel="noreferrer nofollow"> <button class="accordion">Run C++ in macOS Visual Studio Code Tutorial</button>
	</a>

	<div class="spacer20"></div>
	<a href="/internship-summer-2019"> <button class="accordion">Front-End Development Portfolio - Summer Internship 2019 <span class="new">New</span></button>
	</a>
	<div class="spacer20"></div>
					
<!--BOOTSTRAP GALLERY-->	
<h6 class="heading">Photoshop/Creative Work</h6>
	<div class="container gallery-container">
    
    	<div class="tz-gallery">
		
        	<div class="row">

				<?php 
					$imgFilePath = "portfolioImages/walter.jpg";
					$imgAltText = "Walter White PC 2016";
					include("gallery-template.php");
				?>

				<?php 
					$imgFilePath = "portfolioImages/beatles.jpg";
					$imgAltText = "Beatles JPG";
					include("gallery-template.php");
				?>

				<?php 
					$imgFilePath = "portfolioImages/earth.jpg";
					$imgAltText = "Earth JPG";
					include("gallery-template.php");
				?>

				<?php $lazyLoadBool = true; //everything after this has class lazy on the imgs?> 

				<?php 
					$imgFilePath = "portfolioImages/maple.jpg";
					$imgAltText = "Maple JPG";
					include("gallery-template.php");
				?>

				<?php 
					$imgFilePath = "portfolioImages/mDLogo.jpg";
					$imgAltText = "MD Logo JPG";
					include("gallery-template.php");
				?>

				<?php 
					$imgFilePath = "portfolioImages/mikeElectric.jpg";
					$imgAltText = "Mike Electric JPG";
					include("gallery-template.php");
				?>

				<?php 
					$imgFilePath = "portfolioImages/mikeMountain.jpg";
					$imgAltText = "Mike Mountain JPG";
					include("gallery-template.php");
				?>

				<?php 
					$imgFilePath = "portfolioImages/mikeTree.jpg";
					$imgAltText = "Mike Tree JPG";
					include("gallery-template.php");
				?>

				<?php 
					$imgFilePath = "portfolioImages/mikeEth.jpg";
					$imgAltText = "Mike Enthusiast JPG";
					include("gallery-template.php");
				?>

				<?php 
					$imgFilePath = "portfolioImages/heartFade.jpg";
					$imgAltText = "Heart Fading JPG";
					include("gallery-template.php");
				?>

				<?php 
					$imgFilePath = "portfolioImages/christmas.jpg";
					$imgAltText = "Merry Christmas JPG";
					include("gallery-template.php");
				?>

				<?php 
					$imgFilePath = "portfolioImages/gloverPaint.jpg";
					$imgAltText = "Donald Glover Watercolor JPG";
					include("gallery-template.php");
				?>

				<?php 
					$imgFilePath = "portfolioImages/daftPunk.jpg";
					$imgAltText = "Daft Punk JPG";
					include("gallery-template.php");
				?>

				<?php 
					$imgFilePath = "portfolioImages/mikeBanner.jpg";
					$imgAltText = "Mike Banner JPG";
					include("gallery-template.php");
				?>

				<?php 
					$imgFilePath = "portfolioImages/beowulf.jpg";
					$imgAltText = "Beowulf Epitaph JPG";
					include("gallery-template.php");
				?>
				
        	</div><!--rowEnd-->

    	</div>

	</div>

</div>
		
</div> <!--endOfPage-->

<?php 
function customFooterScripts(){?>
	<script src="js/baguetteBox.min.js" async></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/backToTop.js"></script>
<?php }
include_once("footer.php");?>