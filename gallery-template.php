<div class="col-sm-6 col-md-4">

<?php if(!isset($devMode)){ ?>
    <a class="lightbox" href="images/<?= isset($imgFilePath) ? $imgFilePath : "noImageFound.jpg"?>">
<?php } ?>

        <img src="images/<?= isset($imgFilePath) ? $imgFilePath : "noImageFound.jpg"?>"
        alt="<?=isset($imgAltText) ? $imgAltText : "No Image Found"?>">

<?php if(!isset($devMode)){ ?>
    </a>
<?php } ?>

</div>