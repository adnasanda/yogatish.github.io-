<section class="page-wrap-home" style="padding-bottom:0px;">
    

	<div class="row no-gutters" style="padding:-30px;">


        <div class="col-md-6 no-gutters"> 
            <div class="leftside u-text text-align-justify" style="margin: auto; padding: 63px; text-align: justify;">       
            <div style="text-align:center;"><h2><?php the_title();?></h2></div>
            <br>
           
				
				
				<?php if(have_posts()): while(have_posts()): the_post();?>


							<?php the_content();?>

						  <p> Autor teksta: <?php 
								$fname = get_the_author_meta('first_name');
								$lname = get_the_author_meta('last_name');
								echo $fname .' ' . $lname;
							?>
						</p>
				
				<?php endwhile; else: endif;?>

				
				
				
				
            <br><br><br>
            </div>

        </div>

        <div class="col-md-6 no-gutters">

            <div class="rightside d-flex justify-content-center align-items-center">
  
				
			 <?php if(has_post_thumbnail()):?>
					<img src="<?php the_post_thumbnail_url();?>" class="responsive">
					
    		<?php endif;?>
	

       	   </div>

		</div>
		
		
</section>