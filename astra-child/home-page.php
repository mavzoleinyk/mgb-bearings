<?php
/**
* Template Name: custom home page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); 

$slider = get_field('slider');
?>
</div>
</div>

<?php if($slider): ?>
<section class="main pt-0 pb-0">
		<div class="main__arrow main__arrow_prev flex">
			<svg width="21" height="38" viewBox="0 0 21 38" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" clip-rule="evenodd" d="M3.10209 19.001L20.2635 36.1624C20.6856 36.5845 20.6856 37.2614 20.2635 37.6834C19.8414 38.1055 19.1645 38.1055 18.7425 37.6834L0.816551 19.7575C0.394483 19.3355 0.394483 18.6586 0.816551 18.2365L18.7425 0.318542C18.9495 0.111492 19.2282 0 19.499 0C19.7698 0 20.0485 0.103527 20.2555 0.318542C20.6776 0.740608 20.6776 1.41751 20.2555 1.83958L3.10209 19.001Z" fill="white"/>
			</svg>
		</div>
		<div class="main__arrow main__arrow_next flex">
			<svg width="21" height="38" viewBox="0 0 21 38" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M17.8979 19.001L0.736496 36.1624C0.314428 36.5845 0.314428 37.2614 0.736496 37.6834C1.15856 38.1055 1.83546 38.1055 2.25753 37.6834L20.1834 19.7575C20.6055 19.3355 20.6055 18.6586 20.1834 18.2365L2.25753 0.318542C2.05048 0.111492 1.77176 0 1.501 0C1.23024 0 0.951511 0.103527 0.744459 0.318542C0.322392 0.740608 0.322392 1.41751 0.744459 1.83958L17.8979 19.001Z" fill="white"/>
			</svg>
		</div>
		<div class="main__slider">
			<div class="swiper-wrapper">
			<?php if( have_rows('slider') ): ?>
    <?php $i=0; while( have_rows('slider') ): the_row(); 
           $i++;
        // Get sub field values.
        $title = get_sub_field('title');
        $desc = get_sub_field('desc');
		$button_text = get_sub_field('button_text');
		$button_url= get_sub_field('button_url');
		$img = get_sub_field('img');
		$bg_color ='#2D2F8C';
		if($i ==1){
			$bg_color ='#2D2F8C';

		} elseif($i==2){
			$bg_color ='#0a1650';

		} else{
			$bg_color ='#eceff4';

		}

        ?>
				<div class="swiper-slide main__slide main__slide_<?php echo $i; ?>" style="background-image: url(<?php echo $img; ?>); background-color: <?php echo $bg_color; ?>;">
					<div class="container">
						<div class="main__info">
							<h1 class="main__title">
								<?php echo $title; ?>
							</h1>
							<div class="main__description">
								<?php echo $desc; ?>
							</div>
							<div class="main__btn flex">
								<a href="<?php echo $button_url; ?>" class="btn"><?php echo $button_text; ?></a>
							</div>
						</div>
					</div>
				</div>
				
				<?php endwhile; endif;  ?>
			</div>
		</div>
	</section>
  <?php endif; ?>

    <?php $section_0 =get_field('section_0'); ?>
	<?php if($section_0): ?>
	<section class="consult pt-0">
		<div class="container">
			<div class="consult__block">
				<div class="consult__title">
					<?php echo $section_0['title']; ?>
				</div>
				<div class="loading_consult_cf7">
					<?php echo do_shortcode($section_0['shortcode']); ?>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
     <?php $section_1 =get_field('section_1'); ?>
	<section class="catalog">
		<div class="container">
			<div class="section__content flex">
				<div class="section__title-block">
					<h2 class="section__title">
						<?php echo $section_1['title']; ?>
					</h2>
					<div class="section__title-signature">
					<?php echo $section_1['desc']; ?>
					</div>
				</div>
				<div class="section__link">
					<a href="<?php echo $section_1['link_url']; ?>" class="flex">
						<span><?php echo $section_1['text_link']; ?></span>
						<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M11.793 17.293L13.207 18.707L19.914 12L13.207 5.29303L11.793 6.70703L16.086 11H6.5V13H16.086L11.793 17.293Z" fill="#D52123"/>
						</svg>
					</a>
				</div>
				<div class="catalog__slider slider">
					<div class="swiper-wrapper">
						<?php while ( have_rows( 'section_1' ) ) : the_row();
								while ( have_rows( 'items' ) ) : the_row(); 

								$title = get_sub_field('title');
								$desc = get_sub_field('desc');
								$img = get_sub_field('img');
								
								?>

							<div class="swiper-slide catalog__item">
							<div class="catalog__img flex">
								<img src="<?php echo $img; ?>" alt="">
							</div>
							<div class="catalog__title">
								<?php echo $title; ?>
							</div>
							<div class="catalog__description">
								<?php echo $desc; ?>
							</div>
						</div>
									
							<?php	endwhile;
							endwhile;
							?>
						
						
					</div>
				</div>
				<div class="scrollbar catalog__scrollbar"></div>
			</div>	
		</div>
	</section>
	<?php $section_2 =get_field('section_2'); ?>

	<section class="manufacturers">
		<div class="container">
			<div class="section__content flex">
				<div class="section__title-block">
					<h2 class="section__title">
					<?php echo $section_2['title']; ?>
					</h2>
					<div class="section__title-signature">
					<?php echo $section_2['desc']; ?>
					</div>
				</div>
				<div class="section__link">
					<a href="<?php echo $section_2['link_url']; ?>" class="flex">
						<span><?php echo $section_2['text_link']; ?></span>
						<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M11.793 17.293L13.207 18.707L19.914 12L13.207 5.29303L11.793 6.70703L16.086 11H6.5V13H16.086L11.793 17.293Z" fill="#D52123"/>
						</svg>
					</a>
				</div>
				<div class="manufacturers__slider slider">
					<div class="swiper-wrapper">
					<?php while ( have_rows( 'section_2' ) ) : the_row();
								while ( have_rows( 'items' ) ) : the_row(); 

								
								$img = get_sub_field('img');
								
								?>
								<div class="swiper-slide manufacturer flex">
							<img src="<?php echo $img; ?>" alt="">
						</div>

								<?php endwhile; endwhile; ?>
						
						
					</div>
				</div>
				<div class="scrollbar manufacturers__scrollbar"></div>
			</div>	
		</div>
	</section>

	<?php $section_3 = get_field('section_3'); ?>

	<section class="about">
		<div class="container">
			<div class="about__content flex">
			<?php while ( have_rows( 'section_3' ) ) : the_row();
			    $i=0;
								while ( have_rows( 'items' ) ) : the_row(); 
								$i++;

								
								$img = get_sub_field('img');
								$title = get_sub_field('title');
								$desc = get_sub_field('desc');
								$button_title = get_sub_field('button_title');
								$button_url = get_sub_field('button_url');
								

								
								?>
								<div class="about__item about__item_<?php echo $i; ?>" style="background-image:url(<?php echo $img; ?>);">
					<h2 class="section__title"><?php echo $title; ?></h2>
					<p class="about__description">
						<?php echo $desc; ?>  
					</p>
					<div class="about__btn flex">
						<a href="<?php echo $button_url; ?>" class="btn"><?php echo $button_title; ?></a>
					</div>
				</div>

								<?php endwhile; endwhile; ?>
				
				
			</div>
		</div>
	</section>

	<?php $section_4 = get_field('section_4'); ?>

	<section class="advantages">
		<div class="container">
			<h2 class="section__title"><?php echo $section_4['title'];?></h2>
			<div class="advantages__items flex">
			<?php while ( have_rows( 'section_4' ) ) : the_row();
			    $i=0;
								while ( have_rows( 'items' ) ) : the_row(); 
								$i++;

								
								$img = get_sub_field('img');
								$title = get_sub_field('title');
								$desc = get_sub_field('desc');
							
								

								
								?>
				<div class="advantage flex">
					<div class="advantage__icon flex">
						<img src="<?php echo $img; ?>" alt="">
					</div>
					<div class="advantage__info">
						<div class="advantage__title">
							<?php echo $title; ?>
						</div>
						<p class="advantage__description">
							<?php echo $desc; ?>
						</p>
					</div>
				</div>
				<?php endwhile; endwhile; ?>
				
			</div>
		</div>
	</section>
	<?php $section_5 = get_field('section_5'); ?>
	<section class="work pt-big">
		<div class="container">
			<h2 class="section__title section__title_align-center section__title_white">
				<?php echo $section_5['title']; ?>
			</h2>
			<div class="work__items flex">
			<?php while ( have_rows( 'section_5' ) ) : the_row();
			    $i=0;
								while ( have_rows( 'items' ) ) : the_row(); 
								$i++;

								
								$title = get_sub_field('title');
								$number = get_sub_field('number');
							
								

								
								?>
								<div class="work__item">
					<div class="work__number">
						<?php echo $number; ?>
					</div>
					<div class="work__description">
						<?php echo $title; ?>
					</div>
				</div>

								<?php endwhile; endwhile; ?>
				
				
			</div>
		</div>
	</section>

	<?php $section_6 = get_field('section_6'); ?>

	<section class="conditions pt-big">
		<div class="container">
			<div class="conditions__block" style="background-image:url(<?php echo $section_6['img_bg']; ?>); ">
				<div class="conditions__top">
					<h2 class="section__title">
						<?php //$section_6['s6-title']; ?>
						Условия
					</h2>
					<div class="section__title-signature">
					<?php //$section_6['desc']; ?>
					Мы делаем всё, чтобы вам было комфортно сотрудничать с нами
					</div>
				</div>
				<div class="conditions__items flex">
				<?php while ( have_rows( 'section_6' ) ) : the_row();
			    			$i=0;
								while ( have_rows( 'items' ) ) : the_row(); 
								$i++;

								
								$title = get_sub_field('title');
								$desc= get_sub_field('desc');
								$img = get_sub_field('img');
							
								

								
							?>
								<div class="condition flex">
						<div class="condition__icon flex">
							<img src="<?php echo $img; ?>" alt="">
						</div>
						<div class="condition__info">
							<div class="condition__title">
								<?php echo $title; ?>
							</div>
							<p class="condition__description">
								<?php echo $desc; ?>
							</p>
						</div>
					</div>


						<?php endwhile; endwhile; ?>
					
					
				</div>
				<div class="conditions__signature">
				<?php echo $section_6['small_text']; ?>
				</div>
			</div>
		</div>
	</section>

	<?php $section_7 = get_field('section_7'); ?>

	<section class="testimonials">
		<div class="container">
			<h2 class="section__title">
				<?php echo $section_7['title']; ?>
			</h2>
			<div class="testimonials__slider">
				<div class="swiper-wrapper">
				<?php while ( have_rows( 'section_7' ) ) : the_row();
			    $i=0;
								while ( have_rows( 'items' ) ) : the_row(); 
								$i++;

								
								$title = get_sub_field('title');
								$desc= get_sub_field('desc');
								
							
								

								
								?>
								<div class="swiper-slide testimonial">
						<div class="testimonial__rating flex">
							<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.10755 0.872559L9.81555 6.12925H15.3428L10.8712 9.37806L12.5792 14.6347L8.10755 11.3859L3.63594 14.6347L5.34395 9.37806L0.87234 6.12925H6.39955L8.10755 0.872559Z" fill="#E60000"/>
							</svg>
							<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.10755 0.872559L9.81555 6.12925H15.3428L10.8712 9.37806L12.5792 14.6347L8.10755 11.3859L3.63594 14.6347L5.34395 9.37806L0.87234 6.12925H6.39955L8.10755 0.872559Z" fill="#E60000"/>
							</svg>
							<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.10755 0.872559L9.81555 6.12925H15.3428L10.8712 9.37806L12.5792 14.6347L8.10755 11.3859L3.63594 14.6347L5.34395 9.37806L0.87234 6.12925H6.39955L8.10755 0.872559Z" fill="#E60000"/>
							</svg>
							<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.10755 0.872559L9.81555 6.12925H15.3428L10.8712 9.37806L12.5792 14.6347L8.10755 11.3859L3.63594 14.6347L5.34395 9.37806L0.87234 6.12925H6.39955L8.10755 0.872559Z" fill="#E60000"/>
							</svg>
							<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.10755 0.872559L9.81555 6.12925H15.3428L10.8712 9.37806L12.5792 14.6347L8.10755 11.3859L3.63594 14.6347L5.34395 9.37806L0.87234 6.12925H6.39955L8.10755 0.872559Z" fill="#E60000"/>
							</svg>
						</div>
						<div class="testimonial__name">
							<?php echo $title; ?>
						</div>
						<p class="testimonial__text">
							<?php echo $desc; ?>
						</p>
					</div>

								<?php endwhile; endwhile; ?>
					
				
				</div>
			</div>
			<div class="scrollbar testimonials__scrollbar"></div>
		</div>
	</section>

	<?php $section_8 = get_field('section_8'); ?>

	<section class="categories">
		<div class="container">
			<div class="section__content flex">
				<div class="section__title-block">
					<h2 class="section__title">
						<?php echo $section_8['title']; ?>
					</h2>
				</div>
				<div class="section__link">
					<a href="<?php echo $section_8['url'];?>" class="flex">
						<span><?php echo $section_8['text_link'];?></span>
						<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M11.793 17.293L13.207 18.707L19.914 12L13.207 5.29303L11.793 6.70703L16.086 11H6.5V13H16.086L11.793 17.293Z" fill="#D52123"/>
						</svg>
					</a>
				</div>
				<div class="slider categories__slider">
					<?php
					$catargs = [
						'taxonomy' => 'product_cat',
                     
					  'number' =>isset($section_8['number_cats'])?intval($section_8['number_cats']):4,
					  'orderby'    => 'count',
					  'order'      => 'desc',
					  'hide_empty' => false,

					];
					 $pcats = get_terms($catargs); ?>
					<div class="swiper-wrapper">
						<?php foreach($pcats as $pcat):
						   $title = $pcat->name;
						   $cthumbnail_id = get_woocommerce_term_meta( $pcat->term_id, 'thumbnail_id', true );
                           $img = wp_get_attachment_url( $cthumbnail_id );
						   $link = get_term_link($pcat);
						   $pcount = $pcat->count;
							 ?>
							 <div class="swiper-slide category">
								 <a href="<?php echo $link; ?>">
								<div class="category__img flex">
									<img src="<?php echo $img; ?>" alt="">
								</div>
								<div class="category__title">
									<?php echo $title; ?>
								</div>
								<div class="category__quantity">
									<?php echo $pcount; ?> ТОВАРА
								</div>
						       </a>
						   </div>

							<?php endforeach; ?>
						
						
					</div>
				</div>
				<div class="scrollbar categories__scrollbar"></div>
			</div>	
		</div>
	</section>

	<?php $section_9 = get_field('section_9'); ?>

	<section class="connect pb-big">
		<div class="container">
			<div class="connect__block flex" style="background-image:url(<?php echo $section_9['img_bg'];?>);">
				<div class="connect__title">
					<h2 class="section__title section__title_white">
						<?php echo $section_9['title']; ?>
					</h2>
					<div class="connect__signature">
						<?php echo $section_9['desc']; ?>
					</div>
				</div>
				<div class="connect__form">
					<?php echo do_shortcode($section_9['cf7_shortcode']); ?>
				</div>
			</div>
		</div>
	</section>

	<?php $section_10 = get_field('section_10'); ?>
	<section class="description">
		<div class="container">
			<h2 class="section__title">
				<?php echo $section_10['title']; ?>
			</h2>
			<div class="description__text">
				<?php echo do_shortcode($section_10['text']); ?>
			</div>
			<div class="description__more">
				<a href="<?php echo $section_10['url']; ?>"><?php echo $section_10['linktext']; ?></a>
			</div>
		</div>
	</section>

	<section class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17460.16937734697!2d30.256195713486196!3d59.892628955879196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469631f40b6b0453%3A0x805aeb3f5b923d9e!2zT2Jvcm9ubmF5YSBVbGl0c2EsIDEwLCDQmtC-0LvQv9C40L3QviwgU2Fua3QtUGV0ZXJidXJnLCBSdXNzaWEsIDE5ODA5OQ!5e0!3m2!1sen!2sua!4v1638999213437!5m2!1sen!2sua" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</section>
<div><div>


<?php get_footer(); ?>
