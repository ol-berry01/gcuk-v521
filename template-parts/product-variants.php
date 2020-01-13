<div class="product-variants">
    <div class="container">
        <div class="row">
            
            <h3 class="section-title">Model Variants</h3>
            <?php
                $overviewSide   = get_field( 'overview_sideProfile' );
                $overviewImg    = $overviewSide['url'];
            
                $title_v1       = get_field( 'productIntro_v1Title' );
                $content_v1     = get_field( 'productIntro_v1Content' );
                $title_v2       = get_field( 'productIntro_v2Title' );
                $content_v2     = get_field( 'productIntro_v2Content' );
            
                $div_o          = '<div class="col-sm-%d product-variation" %s>';
                $div_c          = '</div>';
            
                $img            = '<img src="%s">';
                $content        = '<h4>%s</h4><p>%s</p>';
                $style_center   = 'style="text-align:center;"';
                $style_border   = 'style="border-left:1px solid #c6c6c6;"';
                echo (
                    ($title_v2) ? 
                    sprintf($div_o, 4, $style_center) . sprintf($img, $overviewImg) . $div_c . sprintf($div_o, 4, '') . sprintf($content, $title_v1, $content_v1) . $div_c . sprintf($div_o, 4, $style_border) . sprintf($content, $title_v2, $content_v2) . $div_c : 
                    sprintf($div_o, 6, $style_center) . sprintf($img, $overviewImg) . $div_c . sprintf($div_o, 6, $style_border) . sprintf($div_o, 6, '') . sprintf($content, $title_v1, $content_v1) . $div_c
                );
            ?>
        </div>
    </div>
</div>