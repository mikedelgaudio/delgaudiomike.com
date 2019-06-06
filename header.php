<!DOCTYPE html>
<html>
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119776312-1"></script>
    <script>
	    window.dataLayer = window.dataLayer || [];
	    function gtag(){dataLayer.push(arguments);}
	    gtag('js', new Date());

	    gtag('config', 'UA-119776312-1');
    </script>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta property="og:site_name" content="Mike DelGaudio">
    <meta property="og:url" content="https://delgaudiomike.com/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://delgaudiomike.com/images/ogImage.jpg">
    <meta name="author" content="Michael DelGaudio">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 
    <title><?= isset($PageTitle) ? $PageTitle : "Mike DelGaudio"?></title>

    <meta name="title" content= <?= isset($metaTitle) ? $metaTitle : "'Mike DelGaudio'"?> >
    <meta property="og:title" content= <?= isset($metaOgTitle) ? $metaOgTitle : "'Mike DelGaudio'"?> >
    <meta property="og:description" content= <?= isset($metaOgDescr) ? $metaOgDescr : "'computer science student | personal portfolio'"?> >
    <meta name="description" content= <?= isset($metaDescr) ? $metaDescr : "'computer science student | personal portfolio'"?> >
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

  <!-- Links (sit on top) -->
    <div class="w3-top">
        <div class="w3-row w3-padding w3-black">
            <div class="w3-col s3">
            <a href="/" class="w3-button w3-block w3-black">HOME</a>
        </div>
    <div class="w3-col s3">
      <a href="/aboutMe" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s3">
      <a href="/portfolio" class="w3-button w3-block w3-black">WORK</a>
    </div>
    <div class="w3-col s3">
      <a href="/contact" class="w3-button w3-block w3-black">CONTACT</a>
    </div>
  </div>
</div>
