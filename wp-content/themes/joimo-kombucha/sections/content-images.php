<?php $left_col = get_field('left_column');
$right_col = get_field('right_column'); ?>

<div class="the-farm">
	<div class="container-fluid">
        <?php if( get_field('section_title_content') ): ?> 
    		<h2><?php the_field('section_title_content'); ?></h2>
        <?php endif; ?>   

		<div class="flex-row">

            <?php if( $left_col['image'] ): ?> 
    			<div class="col-left">
                    <div class="farm-img">
                    	<img src="<?= $left_col['image']['url'] ?>" alt=''>
                    </div>
    			</div>
            <?php endif; ?>

			<div class="col-right">
                <?php if( $right_col['text_above_image'] ): ?> 
                    <p><?= $right_col['text_above_image'] ?></p>
                <?php endif; ?>
      
                <div class="former-family">
                    <?php if( $right_col['title'] ): ?> 
                      <h2><?= $right_col['title']  ?></h2>
                    <?php endif; ?>

                    <?php if( $right_col['image'] ): ?> 
                      <div class="farm-img">
                        <img src="<?= $right_col['image']['url'] ?>" alt=''>
                      </div>
                    <?php endif; ?>
                </div>
			</div>

			<div class="col-left right-flex">
                <?php if( $left_col['text_below_image']): ?> 
                    <div class="right-side-content">
                      <p><?= $left_col['text_below_image'] ?></p>
                    </div>
                <?php endif; ?>


                <?php if( $left_col['title_below'] ): ?> 
                    <h2><?= $left_col['title_below'] ?></h2>
                <?php endif; ?>

			</div>

		</div>
    
	</div>
</div>
<!-- Product Page FARM Section : End -->
