<?php
    // var
    $productHero2 = get_field( 'vehicle_hero2' );
    if($productHero2) : 
?>
<div id="slider-section" class="slider-section">
    <img class="brochure" src="<?php  echo $productHero2['url']; ?>" alt="<?php echo $productHero2['alt'] ?>">
</div><!-- slider-section -->
<?php 
    endif;
?>