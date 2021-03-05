<?php get_header();?>
<section class="page-wrap-home" style="padding-bottom:0px;">

<div class="jumbotron-hatha">


    <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url();?>" class="responsive">
    <?php endif;?>
   


</div>


<div class="card mb-3"  style="border: 0px;">
 
	<div class="card-body d-flex justify-content-center align-items-center">
	
		<div class="container3">
		
            <div style="padding: 45px; margin: auto; text-align: justify; background:#FEF9E6;">  
				
				 <div class="responsive" style="font-size:7vw; text-align:center;">
					<h3><?php the_title();?> </h3>
				 </div>
				<br>
				

				<div class="row no-gutters" >

						<div class="col-md-1 no-gutters"> 
						</div>
						
					    <div class="col-md-10 no-gutters" style="background-image: url(https://yogatish.com/wp-content/uploads/2021/03/hb2.png);"> 
							<?php get_template_part( 'includes/section','content');?>
							<br><br><br>
						</div>
					
						<div class="col-md-1 no-gutters"> 
						</div>
					
   				</div>
		 	</div>
    	</div>
	</div>
</div>

</section>


<?php get_footer();?>