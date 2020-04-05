<!DOCTYPE html>
<html lang="en">
  <head>
  <script data-ad-client="ca-pub-5110102783992901" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<?php //toggle to true to turn off google
      $devMode = false; ?>

<?php if(isset($devMode) && $devMode == false){ ?>
 <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119776312-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
  
        gtag('config', 'UA-119776312-1');
      </script>
<?php } ?>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta property="og:site_name" content="Mike DelGaudio">
    <meta property="og:url" content="https://delgaudiomike.com/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://delgaudiomike.com/images/ogImage.jpg">
    <meta name="author" content="Mike DelGaudio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title><?= isset($PageTitle) ? $PageTitle : "Mike DelGaudio"?></title>

    <meta name="title" content= <?= isset($metaTitle) ? $metaTitle : "'Mike DelGaudio | Computer Science Student'"?> >
    <meta property="og:title" content= <?= isset($metaOgTitle) ? $metaOgTitle : "'Mike DelGaudio | Computer Science Student'"?> >
    <meta property="og:description" content= <?= isset($metaOgDescr) ? $metaOgDescr : "'Mike DelGaudio, a computer science student from Stevens Institute of Technology and passionate about full stack development.'"?> >
    <meta name="description" content= <?= isset($metaDescr) ? $metaDescr : "'Mike DelGaudio, a computer science student from Stevens Institute of Technology and passionate about full stack development.'"?> >
    <meta name="keywords" content= "michaeldelgaudio,delgaudio,mikedelgaudio,delgaudiomike,portfolio,computerscience,personalportfolio,student<?= isset($metaKeywords) ? $metaKeywords : ""?>" >
   
    <!--favicon-->
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico"/>

    <?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?>
    <!--StyleSheets-->
    <link rel="stylesheet" type="text/css" href=<?= isset($pageStyle) ? $pageStyle : "css/otherPagesStyle.css"?> />
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
  </head>
  <body>

  <!--[if lt IE 10]>
	<div style="background-color:black; z-index:9999; position:fixed; top:50%; left:50%; transform:translate(-50%,-50%);"><p style="font-size:35px; color: red;">You are using an outdated browser that may not work with this website. Please update to a modern browser.</p></div>
<![endif]-->


 
      <div class="w3-top">
        <div class="w3-row w3-padding w3-black">
          <div class="w3-col s3">
            <a href="/" class="w3-button w3-block w3-black">HOME</a>
          </div>
          <div class="w3-col s3">
            <a href="/about-me" class="w3-button w3-block w3-black">ABOUT</a>
          </div>
          <div class="w3-col s3">
            <a href="/portfolio" class="w3-button w3-block w3-black">WORK</a>
          </div>
          <div class="w3-col s3">
            <a href="/contact" class="w3-button w3-block w3-black">CONTACT</a>
          </div>
        </div>
      </div>
 
  <main>
