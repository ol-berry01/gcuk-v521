<div class="row" style="padding:3em 0;">
    <?php 
    $header = get_field_object('spec_header');
    if( have_rows('specs_table') ):
        while( have_rows('specs_table') ):
            the_row(); 
            $title 		= get_sub_field('spec_title');
            $spec_id 	= get_sub_field('spec_id');
        ?>
        <div class="panel-group gc-shadow" id="specsAccordion">
            <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#specsAccordion" data-target="#<?php echo $spec_id; ?>">
                    <div class="row">

                        <div class="col-xs-4">
                            <?php echo '<h4 class="panel-title">' . $title . '</h4>'; ?>
                        </div>
                        <?php if($header['value'] === 'both'): ?>
                            <div class="col-xs-4"><h4 class="panel-title" style="text-align:center">Electric</h4></div>
                            <div class="col-xs-4"><h4 class="panel-title" style="text-align:center">Petrol</h4></div>
                        <?php endif; ?>
                        <?php if($header['value'] === 'electric' ): ?>
                            <div class="col-xs-8"><h4 class="panel-title" style="text-align:center">Electric</h4></div>
                        <?php endif; ?>
                        <?php if($header['value'] === 'petrol' ): ?>
                            <div class="col-xs-8"><h4 class="panel-title" style="text-align:center">Petrol</h4></div>
                        <?php endif; ?>
                    </div>
                    
                </div>
                <div id="<?php echo $spec_id; ?>" class="panel-collapse collapse" style="height: 0px;">
                    <div class="panel-body">
                    <?php

                        if( have_rows('spec_range') ):
                        
                            while( have_rows('spec_range') ):

                                the_row();

                                $specs_spec 		= get_sub_field('spec_spec');
                                $specs_value1 		= get_sub_field('spec_value1');
                                $specs_value2 		= get_sub_field('spec_value2');

                                $row_open 			= '<div class="row spec-row">';
                                $row_close			= '</div>';
                                $p_div_close		= '</p></div>';
                                
                                $col_xs_4_o			= '<div class="col-xs-4 spec-twin"><p>';
                                $col_xs_8_o			= '<div class="col-xs-8 spec-single"><p>';
                                $specs_spec_output	= '<div class="col-xs-4 spec-item"><p>' . $specs_spec . $p_div_close;
                                
                                $spec_one_value		= $col_xs_8_o . $specs_value1 . $p_div_close;
                                $spec_two_value		= $col_xs_4_o . $specs_value1 . $p_div_close . $col_xs_4_o . $specs_value2 . $p_div_close;

                                $spec_output 		= ($specs_value2 === $specs_value1) ? $spec_one_value : $spec_two_value;

                                echo $row_open . $specs_spec_output . $spec_output . $row_close; 
                                    
                            endwhile;
                            
                        endif;
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Feature -->
        <?php 
                endwhile;
            endif;
            wp_reset_postdata();
        ?>
    </div>