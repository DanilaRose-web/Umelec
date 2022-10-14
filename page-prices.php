<?php
/**
 * Template Name: Цены
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

   <!-- <h1 class="section-title"><?php the_field( 'service-title' ); ?></h1> -->
   <?php get_template_part( 'template-parts/content/content-page' ); ?>

   <section class="section-price">
      <div class="container-fluid">
         <h2 class="section-price-title">Цены на услуги</h2>
         
      </div>
   </section>

   <section class="form-req">
      <div class="container-fluid">
         <h2 class="form-req-title">Остались вопросы?</h2>
         <h3 class="form-req-subtitle">Укажите номер телефона и мы перезвоним Вам через минуту</h3>

         <div class="form-title">Мы всегда на связи!</div>
         <?php echo do_shortcode( '[contact-form-7 id="214" title="Без названия"]' ) ?> 
      </div>
   </section>

<? get_footer(); ?>