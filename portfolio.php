<?php
$PageTitle="Portfolio | Mike DelGaudio";
$metaTitle= "'Portfolio'";
$metaOgTitle= "'Portfolio | Mike DelGaudio'";
$metaDescr= "'personal portfolio of my previous work'";
$metaOgDescr= "'personal portfolio of my previous work'";

function customPageHeader(){?>
   <!--photoGrid-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	<link rel="stylesheet" href="css/gallery-grid.css">
	<!--lightbox-->
	<link rel="stylesheet" href="css/baguetteBox.min.css">
	<script src="js/baguetteBox.min.js" async></script>
<?php }


include_once('header.php');
?>

<!--HEADER-->
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
				<div class="col-sm-6 col-md-4">
                	<a class="lightbox" href="images/portfolioImages/walter.jpg">
                    <img src="images/portfolioImages/walter.jpg" alt="walterWhitePcJPG">
                </a>
            	</div>
				<div class="col-sm-6 col-md-4">
                	<a class="lightbox" href="images/portfolioImages/beatles.jpg">
                    <img src="images/portfolioImages/beatles.jpg" alt="beatlesJPG">
                </a>
            	</div>
				<div class="col-sm-6 col-md-4">
                	<a class="lightbox" href="images/portfolioImages/earth.jpg">
                    <img src="images/portfolioImages/earth.jpg" alt="earthJPG">
                </a>
            	</div>
				<div class="col-sm-6 col-md-4">
                	<a class="lightbox" href="images/portfolioImages/maple.jpg">
                    <img src="images/portfolioImages/maple.jpg" alt="mapleJPG">
                	</a>
            	</div>  
				<div class="col-sm-6 col-md-4">
                	<a class="lightbox" href="images/portfolioImages/mDLogo.jpg">
                    <img src="images/portfolioImages/mDLogo.jpg" alt="mDLogoJPG">
                </a>
            	</div>
            	<div class="col-sm-6 col-md-4">
                	<a class="lightbox" href="images/portfolioImages/mikeElectric.jpg">
                    <img src="images/portfolioImages/mikeElectric.jpg" alt="mikeElectricJPG">
                	</a>
            	</div>
            	<div class="col-sm-6 col-md-4">
                	<a class="lightbox" href="images/portfolioImages/mikeMountain.jpg">
                    <img src="images/portfolioImages/mikeMountain.jpg" alt="mikeMountainJPG">
                </a>
            	</div>
            	<div class="col-sm-6 col-md-4">
                	<a class="lightbox" href="images/portfolioImages/mikeTree.jpg">
                    <img src="images/portfolioImages/mikeTree.jpg" alt="mikeTreeJPG">
                </a>
            	</div>
            	<div class="col-sm-6 col-md-4">
                	<a class="lightbox" href="images/portfolioImages/mikeEth.jpg">
                    <img src="images/portfolioImages/mikeEth.jpg" alt="mikeEthJPG">
                </a>
           		</div>
            	<div class="col-sm-6 col-md-4">
                	<a class="lightbox" href="images/portfolioImages/heartFade.jpg">
                    <img src="images/portfolioImages/heartFade.jpg" alt="heartFadeJPG">
                </a>
            	</div>
            	<div class="col-sm-6 col-md-4">
                	<a class="lightbox" href="images/portfolioImages/christmas.jpg">
                    <img src="images/portfolioImages/christmas.jpg" alt="christmasJPG">
                </a>
            	</div>
            	<div class="col-sm-6 col-md-4">
                	<a class="lightbox" href="images/portfolioImages/gloverPaint.jpg">
                    <img src="images/portfolioImages/gloverPaint.jpg" alt="gloverPaintJPG">
                </a>
            	</div>
			<!--BOTTOMROW-->
				<div class="col-sm-6 col-md-4">
                	<a class="lightbox" href="images/portfolioImages/daftPunk.jpg">
                    <img src="images/portfolioImages/daftPunk.jpg" alt="daftPunkJPG">
                </a>
            	</div>
				<div class="col-sm-6 col-md-4">
                	<a class="lightbox" href="images/portfolioImages/mikeBanner.jpg">
                    <img src="images/portfolioImages/mikeBanner.jpg" alt="mikeBannerJPG">
                </a>
            	</div>
				<div class="col-sm-6 col-md-4">
                	<a class="lightbox" href="images/portfolioImages/beowulf.jpg">
                    <img src="images/portfolioImages/beowulf.jpg" alt="beowulfJPG">
                </a>
            	</div>
        	</div><!--rowEnd-->

    	</div>

	</div>

</div>
		
</div> <!--endOfPage-->

<?php 
function customFooterScripts(){?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
	<script>baguetteBox.run('.tz-gallery');</script>
<?php }
include_once("footer.php");?>