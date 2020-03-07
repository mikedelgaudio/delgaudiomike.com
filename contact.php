<?php
$PageTitle="Contact Me | Mike DelGaudio";
$metaTitle= "'Contact Me'";
$metaOgTitle= "'Contact Me | Mike DelGaudio'";
$metaDescr= "'have any questions for me?'";
$metaOgDescr= "'have any questions for me?'";
$metaKeywords= ",resume";

function customPageHeader(){?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php }

include_once('header.php');
?>

<!--HEADER-->
<div class="w3-main w3-content">
	<div class="w3-animate-zoom">
        
		<div class="w3-black">
			<div class="spacer20"></div>
				<div id="container">
  					<p><a href="/">DelGaudio</a></p>
					<p class="pageTitle">&gt;&gt;&gt; contact me<span class="blinking-cursor">_</span></p>
				</div>
			<div class="spacer20"></div>
        </div>

        <div id="contactMeModal" class="w3-modal">
            <div class="w3-modal-content">
              <div class="w3-container w3sContainerBackground">
                <h5>If you would like to ask any questions or need referrals, please <a class="contactLink" href="mailto:delgaudiomike@gmail.com" rel="noreferrer nofollow">contact me</a>. Additionally, leave me some <a class="contactLink" href="mailto:delgaudiomike@gmail.com" rel="noreferrer nofollow">feedback</a>!</h5>
                <div class = "text-center">
                  <a type="button" href="https://github.com/mikedelgaudio/resume/blob/master/michael_delgaudio_resume_fall_2020.pdf" target="_blank" rel="nofollow noreferrer" class="btn btn-lg btn-outline-warning">Resume</a>
                </div>
                <div class="spacer20"></div>
              </div>
                <div class="w3-container w3sContainerTitle">
                      <div class="spacer20"></div>
                        <div class="centerIcons">
                          <p class="contactIcons socialIcons"><a href="mailto:delgaudiomike@gmail.com" rel="noreferrer nofollow"><button class="w3-button w3-black w3-round-large highlighter" title="E-Mail Me"><img src="images/emailIcon.png" alt="email me"></button></a></p>
                  
                          <p class="contactIcons socialIcons"><a href="https://www.linkedin.com/in/michael-delgaudio/" rel="noreferrer nofollow" target="_blank"><button class="w3-button w3-black w3-round-large highlighter" title="LinkedIn"><img src="images/linkedIN.png" alt="LinkedIn"></button></a></p>
                      
                          <p class="contactIcons socialIcons"><a href="https://www.youtube.com/channel/UCbOZil6oma5l5HO-LZbOEUQ?sub_confirmation=1/" rel="noreferrer nofollow" target="_blank"><button class="w3-button w3-black w3-round-large highlighter" title="YouTube"><img src="images/youtube.png" alt="YouTube"></button></a></p>
                  
                          <p class="contactIcons socialIcons"><a href="https://github.com/mikedelgaudio" rel="noreferrer nofollow" target="_blank"><button class="w3-button w3-black w3-round-large highlighter" title="Github"><img src="images/gitHub.png" alt="GitHub"></button></a></p>
                        </div>
                </div>
            </div>
          </div>
    </div>
</div>

<?php include_once("footer.php");?>
