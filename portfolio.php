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
				<div class="col-sm-6 col-md-4">
                	<!--<a class="lightbox" href="images/portfolioImages/walter.jpg">-->
                    <img src="images/portfolioImages/walter.jpg" alt="walterWhitePcJPG">
                	<!--</a>-->
            	</div>
				<div class="col-sm-6 col-md-4">
                	<!--<a class="lightbox" href="images/portfolioImages/beatles.jpg">-->
                    <img src="images/portfolioImages/beatles.jpg" alt="beatlesJPG">
                	<!--</a>-->
            	</div>
				<div class="col-sm-6 col-md-4">
                	<!--<a class="lightbox" href="images/portfolioImages/earth.jpg">-->
                    <img src="images/portfolioImages/earth.jpg" alt="earthJPG">
                	<!--</a>-->
            	</div>
				<div class="col-sm-6 col-md-4">
                	<!--<a class="lightbox" href="images/portfolioImages/maple.jpg">-->
                    <img class="lazy" data-src="images/portfolioImages/maple.jpg" alt="mapleJPG">
                	<!--</a>-->
            	</div>  
				<div class="col-sm-6 col-md-4">
                	<!--<a class="lightbox" href="images/portfolioImages/mDLogo.jpg">-->
                    <img class="lazy" data-src="images/portfolioImages/mDLogo.jpg" alt="mDLogoJPG">
                	<!--</a>-->
            	</div>
            	<div class="col-sm-6 col-md-4">
                	<!--<a class="lightbox" href="images/portfolioImages/mikeElectric.jpg">-->
                    <img class="lazy" data-src="images/portfolioImages/mikeElectric.jpg" alt="mikeElectricJPG">
                	<!--</a>-->
            	</div>
            	<div class="col-sm-6 col-md-4">
                	<!--<a class="lightbox" href="images/portfolioImages/mikeMountain.jpg">-->
                    <img class="lazy" data-src="images/portfolioImages/mikeMountain.jpg" alt="mikeMountainJPG">
                	<!--</a>-->
            	</div>
            	<div class="col-sm-6 col-md-4">
                	<!--<a class="lightbox" href="images/portfolioImages/mikeTree.jpg">-->
                    <img class="lazy" data-src="images/portfolioImages/mikeTree.jpg" alt="mikeTreeJPG">
                	<!--</a>-->
            	</div>
            	<div class="col-sm-6 col-md-4">
                	<!--<a class="lightbox" href="images/portfolioImages/mikeEth.jpg">-->
                    <img class="lazy" data-src="images/portfolioImages/mikeEth.jpg" alt="mikeEthJPG">
                	<!--</a>-->
           		</div>
            	<div class="col-sm-6 col-md-4">
                	<!--<a class="lightbox" href="images/portfolioImages/heartFade.jpg">-->
                    <img class="lazy" data-src="images/portfolioImages/heartFade.jpg" alt="heartFadeJPG">
                	<!--</a>-->
            	</div>
            	<div class="col-sm-6 col-md-4">
                	<!--<a class="lightbox" href="images/portfolioImages/christmas.jpg">-->
                    <img class="lazy" data-src="images/portfolioImages/christmas.jpg" alt="christmasJPG">
                	<!--</a>-->
            	</div>
            	<div class="col-sm-6 col-md-4">
                	<!--<a class="lightbox" href="images/portfolioImages/gloverPaint.jpg">-->
                    <img class="lazy" data-src="images/portfolioImages/gloverPaint.jpg" alt="gloverPaintJPG">
                	<!--</a>-->
            	</div>
				<div class="col-sm-6 col-md-4">
                	<!--<a class="lightbox" href="images/portfolioImages/daftPunk.jpg">-->
                    <img class="lazy" data-src="images/portfolioImages/daftPunk.jpg" alt="daftPunkJPG">
                	<!--</a>-->
            	</div>
				<div class="col-sm-6 col-md-4">
                	<!--<a class="lightbox" href="images/portfolioImages/mikeBanner.jpg">-->
                    <img class="lazy" data-src="images/portfolioImages/mikeBanner.jpg" alt="mikeBannerJPG">
            		<!--</a>-->
            	</div>
				<div class="col-sm-6 col-md-4">
                	<!--<a class="lightbox" href="images/portfolioImages/beowulf.jpg">-->
                    <img class="lazy" data-src="images/portfolioImages/beowulf.jpg" alt="beowulfJPG">
                	<!--</a>-->
            	</div>
				
        	</div><!--rowEnd-->

    	</div>

	</div>

</div>
		
</div> <!--endOfPage-->
<!--
<div id="monitor">
  <div id="isIntersecting">
    <span class="placeholder">0</span>
    images loaded
    </div>
</div>-->


<?php 
function customFooterScripts(){?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
	<script>baguetteBox.run('.tz-gallery');</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/backToTop.js"></script>
<?php }
include_once("footer.php");?>