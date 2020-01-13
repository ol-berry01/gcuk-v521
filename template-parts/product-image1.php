<?php
    // var
    $productHero1 = get_field( 'vehicle_hero1' );
    if($productHero1) : 
?>
<div id="slider-section" class="slider-section">
    <img class="brochure" src="<?php echo $productHero1['url']; ?>" alt="<?php echo $productHero1['alt'] ?>">
</div><!-- slider-section -->
<?php 
    endif;
?>