<div class="col-sm-4">

<?php if(isset($lightBoxBool) && $lightBoxBool == true){ ?>
    <a class="lightbox" href="images/<?= isset($imgFilePath) ? $imgFilePath : "noImageFound.jpg"?>">
<?php } ?>

        <img class="<?=isset($lazyLoadBool) && $lazyLoadBool == true ? "lazy" : ""?>" <?=isset($lazyLoadBool) && $lazyLoadBool == true ? "data-" : ""?>src="images/<?= isset($imgFilePath) ? $imgFilePath : "noImageFound.jpg"?>" <?=isset($lazyLoadBool) && $lazyLoadBool == true ? "src = 'images/noImageFound.jpg'" : ""?>
        alt="<?=isset($imgAltText) ? $imgAltText : "No Image Found"?>">

<?php if(isset($lightBoxBool) && $lightBoxBool == true){ ?>
    </a>
<?php } ?>

</div>