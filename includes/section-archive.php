<?php if(have_posts()): while(have_posts()): the_post();?>



<div class="card mb-3">
 <div class="card-body d-flex justify-content-center align-items-center">
	 
	
		<div class="row no-gutters" >


						<div class="col-md-4 no-gutters"> 
							
				
						
						<div class="container3">
					
							<?php if(has_post_thumbnail()):?>
							<img src="<?php the_post_thumbnail_url('blog-small');?>" class="img-fluid mb-3 img-thumbnail mr-4">
							<?php endif;?>
					
						</div>
							
						</div>
			
			
			
			
						<div class="col-md-8 no-gutters">

							<div class="blog-content">
							<h5><?php the_title();?></h5>
							<?php the_excerpt();?>
							<a href="<?php the_permalink();?>" class="btn btn-success">Pročitaj više</a>
							
							</div>

        				</div>
					</div>
			</div>

		</div>

        <?php endwhile; else: endif;?>