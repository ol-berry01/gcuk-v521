<style>
    .section-general {
        background:#fff;
    }
    .section-general .general-content {
        padding:5rem 10rem;
        overflow:hidden;
    }
    .section-general .general-content .general-block {
        width:100%;
        padding:1rem 0;
        float:left;
    }
    .general-block ol li {
        margin-bottom:35px;
    }
</style>
<div class="section-general">
    <div class="container">
        <div class="row">
            <div class="general-content">
                <?php if( have_rows('general_content') ): ?>
                    <?php while( have_rows('general_content') ): the_row(); ?>
                        
                        <div class="general-block wow fadeIn">
                            <?php the_sub_field( 'general_block' ); ?>
                        </div>
                        
                    
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>