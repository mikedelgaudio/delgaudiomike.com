<?php
$PageTitle="Summer Internship 2019 | Mike DelGaudio";
$metaTitle= "'Summer Internship 2019'";
$metaOgTitle= "'Summer Internship 2019 | Mike DelGaudio'";
$metaDescr= "'portfolio of my front-end development during my summer 2019 internship'";
$metaOgDescr= "'portfolio of my front-end development during my summer 2019 internship'";
$lightBoxBool = true;

function customPageHeader(){?>
    <!--photoGrid-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
					<p class="pageTitle">&gt;&gt;&gt; summer internship 2019<span class="blinking-cursor">_</span></p>
				</div>
			<div class="spacer20"></div>
		</div>

        <div class="w3-container w3sContainerBackground">
            <h5>During the summer of 2019, I was a web developer intern for the United States Southern District Court of New York - Probation Office. I was assigned to redesign and develop two websites completely. Below are some screenshots of my final work.<br><br>I worked alongside the Division of Information Technology and utilized PHP, Bootstrap 4, jQuery, JavaScript, and mySQL extensively to ensure successful development across all devices and browsers. If you would like more information or request a resume, please <a class="contactLink" href="mailto:delgaudiomike@gmail.com" rel="noreferrer nofollow">contact me</a>.</h5>
        </div>
        
        <div class="w3-container w3sContainerBackground">
            <hr>
            <ul class="allSkills">
                <li class="skills yellow text-shadow-black">Passed penetration testing by the Judiciary Systems Security Test Team in Washington D.C.</li>
                <li class="skills yellow text-shadow-black">Implemented Google Translate API for non-English users</li>
                <li class="skills yellow text-shadow-black">Ensured proper operation of webpages on all devices and modern browsers, including Internet Explorer 11</li>
                <li class="skills yellow text-shadow-black">Utilized PHP and a mySQL database to generate contact information for each probation officer/address</li>
                <li class="skills yellow text-shadow-black">Implemented popular user interface features such as: Back to Top, Click to Email, Rotating Image Carousels, and CSS hover animations</li>
            </ul>
        </div>

        <div class="container gallery-container">
    
            <div class="tz-gallery">
            <h5 class="heading">United States Southern District Court of New York - Probation Office: Official Public Website Redesign</h5>
                <div class="row">

                    <?php 
                        $imgFilePath = "internshipSummer19/publicWebsite/pub_index.jpg";
                        $imgAltText = "public SDNY index page";
                        include("gallery-template.php");
                    ?>

                    <?php 
                        $imgFilePath = "internshipSummer19/publicWebsite/pub_tabletIndex.jpg";
                        $imgAltText = "public SDNY tablet index page";
                        include("gallery-template.php");
                    ?>

                    <?php 
                        $imgFilePath = "internshipSummer19/publicWebsite/pub_humanResource.jpg";
                        $imgAltText = "public SDNY human resource page";
                        include("gallery-template.php");
                    ?>

                    <?php $lazyLoadBool = true; //everything after this has class lazy on the imgs?> 


                    <?php 
                        $imgFilePath = "internshipSummer19/publicWebsite/pub_indexBottom.jpg";
                        $imgAltText = "public SDNY index bottom page";
                        include("gallery-template.php");
                    ?>

                    <?php 
                        $imgFilePath = "internshipSummer19/publicWebsite/pub_contact.jpg";
                        $imgAltText = "public SDNY contact page";
                        include("gallery-template.php");
                    ?>  

                    <?php 
                        $imgFilePath = "internshipSummer19/publicWebsite/pub_mobileIndex.jpg";
                        $imgAltText = "public SDNY mobile index page";
                        include("gallery-template.php");
                    ?>  

                    <?php 
                        $imgFilePath = "internshipSummer19/publicWebsite/pub_mobileIndexBottom.jpg";
                        $imgAltText = "public SDNY mobile index bottom";
                        include("gallery-template.php");
                    ?>  

                </div>

                <hr>
                <h5 class="heading">United States Southern District Court of New York - Probation Office: Directory Redesign</h5>
                <div class="row">

                    <?php 
                        $imgFilePath = "internshipSummer19/internalWebsite/int_index.jpg";
                        $imgAltText = "internal SDNY index page";
                        include("gallery-template.php");
                    ?>  

                    <?php 
                        $imgFilePath = "internshipSummer19/internalWebsite/int_bottomIndex.jpg";
                        $imgAltText = "internal SDNY index bottom page";
                        include("gallery-template.php");
                    ?> 

                    <?php 
                        $imgFilePath = "internshipSummer19/internalWebsite/int_courtsOpen.jpg";
                        $imgAltText = "internal SDNY courts open dropdown page";
                        include("gallery-template.php");
                    ?> 

                    <?php 
                        $imgFilePath = "internshipSummer19/internalWebsite/int_courts.jpg";
                        $imgAltText = "internal SDNY courts page";
                        include("gallery-template.php");
                    ?> 

                    <?php 
                        $imgFilePath = "internshipSummer19/internalWebsite/int_mobileSearch.jpg";
                        $imgAltText = "internal SDNY mobile search page";
                        include("gallery-template.php");
                    ?> 

                    <?php 
                        $imgFilePath = "internshipSummer19/internalWebsite/int_mobileDropdown.jpg";
                        $imgAltText = "internal SDNY mobile hamburger menu";
                        include("gallery-template.php");
                    ?> 
                
                </div>

            </div>
        </div>
        <!-- /.container gallery -->
    </div>
</div>

<?php 
function customFooterScripts(){?>
    <script src="js/baguetteBox.min.js" async></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/backToTop.js"></script>
<?php }
include_once("footer.php");?>