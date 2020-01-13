<style>
    .parallax-window {
        background-color: #333333;
        background: transparent 50% 100% no-repeat fixed;
        background-size: cover;
        max-width: 100%;
        min-height: 750px;
        padding: 5em;
        border-top: 0.17em solid #a28f56;
        border-bottom: 0.17em solid #a28f56;
        box-shadow: 0 5px 7px rgba(51,51,51,0.7), 0 -3px 5px rgba(51,51,51,0.3);
    }
    .parallax-window p {
        color:#fff;
    }
</style>

<section style="background:#333;">
    <?php
        $parallaxImage = get_sub_field( 'parallax_image' );
    ?>
    <div id="para-break" class="parallax-window wow fadeInUp" data-type="background" data-speed="<?php  the_field( 'parallax_speed' ); ?>" style="background-image:url('<?php echo $parallaxImage['url']; ?>')">
        <div style="background-color:rgba(0,0,0,0.4)"></div>
        <div style="color: rgb(255, 255, 255);height: 100%;margin: 50px 0px;padding: 2.5% 1%;visibility: visible;animation-delay: 750ms;animation-name: fadeInLeft;opacity:1;width:50%;float:right;">
            <?php the_sub_field( 'parallax_content' ); ?>
        </div>
    </div>
</section>