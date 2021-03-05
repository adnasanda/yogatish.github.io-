<?php

/*
Template Name: Kontakt
*/

?>





<?php get_header();?>
<section class="page-wrap-home" style="padding-bottom:0px;">

		<div class="jumbotron-hatha">

				<?php if(has_post_thumbnail()):?>
					<img src="<?php the_post_thumbnail_url();?>" class="responsive">
				<?php endif;?>
   


		</div>


							
				
						<div class="leftside d-flex justify-content-center align-items-center" style="margin: auto; padding: 36px;">
						<div class="container2">
						<h3>Postavite pitanje :)</h3>	<br>	
						  
							
							<form action="mailto:sandakoljatic@gmail.com" method="post" enctype="text/plain">
							<label for="fname">Ime</label>
							<input type="text" id="fname" name="firstname" placeholder="Vaše ime..">

							<label for="lname">Email</label>
							<input type="text" id="lname" name="email" placeholder="Vaš email..">

							<label for="subject">Naslov</label>
							<textarea id="subject" name="subject" placeholder="Napiši nešto.." style="height:200px"></textarea>

							<input type="submit" value="Submit">
						  </form>

							
							
							
						</div>
			
			
			
			
						
</div>
</section>






<?php get_footer();?>

