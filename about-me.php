<?php
$PageTitle="About Me | Mike DelGaudio";
$metaTitle= "'About Me'";
$metaOgTitle= "'About Me | Mike DelGaudio'";
$metaKeywords= ",aboutme";
$metaDescr= "'a little bit about me'";
$metaOgDescr= "'a little bit about me'";

function customPageHeader(){?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php }

include_once('header.php');
?>


<!--PAGE_CONTENT-->
<div class="w3-main w3-content">
	<div class="w3-animate-zoom">
		<div class="w3-black">
			<div class="spacer20"></div>
				<div id="container">
  					<p><a href="/">DelGaudio</a></p>
					<p class="pageTitle">&gt;&gt;&gt; about me<span class="blinking-cursor">_</span></p>
				</div>
			<div class="spacer20"></div>
        </div>
        <div class="w3-modal">
            <div class="w3-modal-content">
              <div class="w3-container w3sContainerBackground">
                    <h5>
                      <ul class="breakdown">
                          <li>Michael DelGaudio</li>
                          <li>Hoboken, NJ</li>
                          <li>Bachelor of Computer Science</li>
                          <li><a class="contactLink" href="https://www.stevens.edu/" target="_blank" rel="nofollow noreferrer">Stevens Institute of Technology</a></li>
                          <li><i>Expected Grad:</i> May 2023</li>
                          <a type="button" href="https://github.com/mikedelgaudio/resume/blob/master/michael_delgaudio_resume_fall_2020.pdf" target="_blank" rel="nofollow noreferrer" class="btn btn-outline-warning">Resume</a>
                      </ul>
                  </h5>
              </div>
              
              <button class="accordion">Who Am I</button>
                  <div class="panel">
                        <h6>Welcome! My name is Mike DelGaudio. I’m a Co-Op Computer Science Student at<a class="contactLine" href="https://www.stevens.edu/" target="_blank" rel="nofollow noreferrer"> Stevens Institute of Technology </a>in Hoboken, NJ. Primarily, I focus on front-end development and dev-ops. Occasionally, I do like to utilize Java and come up with some neat applications in my free time.</h6>
                  </div>
              <div class="breakInAbout">&nbsp;</div>
              <button class="accordion">Skills/Technologies Used</button>
                  <div class="panel">
                      <ul class="allSkills">
                          <li class="skills">HTML, CSS, Bootstrap, Angular</li>
                          <li class="skills">PHP, JavaScript, TypeScript, Java, Python</li>
                          <li class="skills">Selenium, Cucumber.io</li>
                          <li class="skills">AWS EC2/Lightsail, CloudFlare, GCP Cloud SQL</li>
                          <li class="skills">Git/GitHub operations</li>
                          <li class="skills">Adobe Photoshop CC</li>
                          <li class="skills">Chauvet ShowXpress</li>
                          <li class="skills">MS Office: Word, Excel, Powerpoint</li>
                          <li class="skills">Microsoft Windows &amp; Server 2012/2016</li>
                          <li class="skills">Apple iOS &amp; macOS</li>
                          <li class="skills">Apple Final Cut Pro</li>
                          <li class="skills">Synology DiskStation Manager (DSM)</li>
                          <li class="skills">Oracle VM VirtualBox, vmWare Fusion</li>
                          <div class="breakInAbout">&nbsp;</div>
                      </ul>
                  </div>
            </div>
      </div>

    </div> 

</div>

<?php 
function customFooterScripts(){?>
	<script src="js/aboutMeScript.js"></script>
<?php }
include_once("footer.php");?>