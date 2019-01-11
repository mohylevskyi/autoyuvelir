<?php 
/**
	Template Name: car
*/
?>

<?php get_header();?>
<section class="nav">
		<div class="container">
			<div class="row">
				<div class="col-lg-1">
				</div>
				<div class="col-lg-2">
					<a href="#1">О нас</a>
				</div>
				<div class="col-lg-2">
					<a href="#2">Отзывы</a>
				</div>
				<div class="col-lg-2">
					<a href="#services">Услуги</a>
				</div>
				<div class="col-lg-2">
					<a href="#footer">Контакты</a>
				</div>
				<div class="col-lg-2">
					<a href="car">Авто в наличии</a>
				</div>
				<div class="col-lg-1">	
				</div>
			</div>
		</div>
	</section>
	<section class="page">
		<div class="container">	
	<?php
		$args = array(
       			'post_type' => 'car', // тип постов - записи
   				);
		$query = new WP_Query($args);
		?>
		
		<?php if ( $query->have_posts() ) : ?>
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php $fields = get_fields( get_the_ID() ); ?>
			<div class="row">
				<div class="col-lg-4 page-img">
					<a href="#<?php echo get_the_ID(); ?>" class="open_modal"><img src="<?php echo $fields['image']['url'] ?>" alt=""></a>
					</div>
					<div class="col-lg-8 page-descr">
						<div class="name">
							<a href="#<?php echo get_the_ID(); ?>" class="open_modal"><h2 class="page-model"><?php echo $fields['title']?></h2></a>
							<h2 class="page-price"><?php echo $fields['price']?></h2>
						</div>
						<div class="first-block">
							<ul>
								<li class="s1"><?php echo $fields['probeg']?></li>	
								<li class="s2"><?php echo $fields['zap']?></li>
								<li class="s3"><?php echo $fields['obem']?></li>
							</ul>
						</div>
						<div class="first-block">
							<ul>
								<li class="s4"><?php echo $fields['korobka']?></li>	
								<li class="s5"><?php echo $fields['privod']?></li>
								<li class="s6"><?php echo $fields['god']?></li>
							</ul>
						</div>
					</div>
			</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		
		
	
	<?php if ( $query->have_posts() ) : ?>
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php $fields = get_fields( get_the_ID() ); ?>
			<div id="<?php echo get_the_ID(); ?>" class="modal_div"><!-- get_the_ID() - id поста для модалки --> 
	   			<span class="modal_close">X</span> <!-- Кнoпкa зaкрыть --> 
				<div class="modal-price">
						<div class="page-model"><?php echo $fields['title']?></div>
						<div class="page-price"><?php echo $fields['price']?></div>
				</div>
	  			<div class="modal-img">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?php echo $fields['image']['url'] ?>" alt="">
							</div>
							<div class="carousel-item">
								<img src="<?php echo $fields['image']['url'] ?>" alt="">
							</div>
							<div class="carousel-item">
								<img src="<?php echo $fields['image']['url'] ?>" alt="">
							</div>
							<div class="carousel-item">
								<img src="<?php echo $fields['image']['url'] ?>" alt="">
							</div>
							<div class="carousel-item">
								<img src="<?php echo $fields['image']['url'] ?>" alt="">
							</div>
						</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
					</div>
					<div class="modal-descrip">
					
					<div class="modal-info">
						<div class="first-block">
							<ul>
								<li class="s1"><?php echo $fields['probeg']?></li>	
								<li class="s2"><?php echo $fields['zap']?></li>
								
							</ul>
						</div>
						<div class="first-block">
							<ul>
								<li class="s3"><?php echo $fields['obem']?></li>
								<li class="s4"><?php echo $fields['korobka']?></li>	
							</ul>
						</div>
						<div class="first-block">
							<ul>
								
								<li class="s5"><?php echo $fields['privod']?></li>
								<li class="s6"><?php echo $fields['god']?></li>
							</ul>
						</div>
					</div>
				</div>
				</div>
				<div class="modal-opisan">
					<p><?php echo $fields['description']?></p>	
				</div>
				
			</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
<?php endif; ?>
<div id="overlay"></div>

</div>
</section>	
	
	







<?php get_footer();?>