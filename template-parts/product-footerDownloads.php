
    <?php 
        // vars
        $downloadBrochure  = get_field( 'download_brochure' );
    ?>
    <div class="row tabrow" style="padding:3em 0;">
        <?php if($downloadBrochure){ ?>
            <div class="col-sm-4">
                <a href="<?php echo $downloadBrochure; ?>" role="button" download>
                    <button class="btn btn-block btn-details gc-shadow">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php echo the_title(); ?> Brochure
                    </button>
                </a>
            </div>
        <?php }; ?>
        <?php if( have_rows('download_docs') ): ?>
            <?php 
                while( have_rows('download_docs') ): the_row(); 
                $downloadLabel     = get_sub_field( 'download_label' );
                $downloadFile      = get_sub_field( 'download_file' );
            ?>
                <div class="col-xs-4">
                    <a href="<?php echo $downloadFile; ?>" role="button" download>
                        <button class="btn btn-block btn-details gc-shadow">
                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php echo $downloadLabel; ?>
                        </button>
                    </a>
                </div>   
            <?php endwhile; ?>
        <?php endif; ?>
    </div>