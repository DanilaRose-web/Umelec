<?php
/**
 * Template Name: Вакансии
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

   <section class="vacantion">
      <div class="container-fluid">
         <form action="" method="POST" class="vacantion-form">
            <div class="vacantion-form-title"></div>
            <?php echo do_shortcode( '[contact-form-7 id="213" title="Форма - стать мастером"]' ) ?> 
            <!-- <div class="row">
               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 form-col">
                  <div class="vacantion-block">
                     <div class="form-item">
                        <label class="label" for="#name">Введите ФИО</label>
                        <input type="text" id="name" name="user_name" class="input w100" placeholder="Фамилия Имя Отчество">
                     </div>
                     <div class="form-item">
                        <label class="label" for="#specialty">Укажите специальность</label>
                        <input type="text" id="specialty" name="specialty" placeholder="Специальность" class="input w100">
                     </div>
                  </div>
               </div>

               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 form-col">
                  <div class="vacantion-block">
                     <div class="form-item">
                        <label class="label" for="#phone">Введите номер телефона</label>
                        <input type="text" id="phone" name="phone" class="input w100 input-phone" placeholder="7 962 564 54 53">
                     </div>
                     <div class="form-item">
                        <label class="label" for="#citizenship">Ваше гражданство</label>
                        <input type="text" id="citizenship" name="citizenship" placeholder="РФ" class="input w100">
                     </div>
                  </div>
               </div>
            </div>

            <button type="submit" class="submit mb w100">Стать мастером</button>

            <div class="form-item flex">
               <input type="checkbox" name="checkbox" id="checkbox">
               <label for="checkbox" class="label mb-0 ml">Я согласен с политикой конфиденциальности</label>
            </div> -->
         </form>

         
      </div>
   </section>

<? get_footer(); ?>