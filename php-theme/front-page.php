<?php get_header(); ?>
<main>
  
  <div class="bread-crumbs"></div>

  <div class="block-1">
    <div class="cover">
      <?php $image1 = get_field('homa_image_for_block_1'); ?>
      <img src="<?php echo esc_url( $image1['url'] ); ?>" alt="<?php echo esc_attr( $image1['alt'] ); ?>" />
    </div>
    <div class="content">
      <div class="title"><?php echo esc_html( get_field('title_for_block_1') ); ?></div>

      <?php echo wp_kses_post ( get_field('description_1_for_block_1') ); ?>
      

      <?php
      $file = get_field('download_file_for_block1');
      if( $file ): ?>
          <a class="download" href="<?php echo $file['url']; ?>">
            <span>Скачать презентацию</span>
            <svg class="icon"><use xlink:href="#ico-download"/></svg>
          </a>
      <?php endif; ?>

      <?php echo wp_kses_post ( get_field('home_description_2_for_block_1') ); ?>

    </div>
  </div>


  <div class="block-2">
    <div class="title"><?php echo esc_html( get_field('title_for_block_2') ); ?></div>

    <div class="carousel">

      <div class="inner">

        <?php 
          $carusel_image1 = get_field('image_1_for_carousel_block_2'); 
          $carusel_image2 = get_field('image_2_for_carousel_block_2'); 
          $carusel_image3 = get_field('image_3_for_carousel_block_2'); 
          $carusel_image4 = get_field('image_4_for_carousel_block_2'); 
          $carusel_image5 = get_field('image_5_for_carousel_block_2'); 
        ?>

        <?php if( $carusel_image1 ): ?>
          <div class="item">
            <img 
              src="<?php echo esc_url( $carusel_image1['url'] ); ?>" 
              alt="<?php echo esc_attr( $carusel_image1['alt'] ); ?>" 
            />
          </div>
        <?php endif; ?>

        <?php if( $carusel_image2 ): ?>
          <div class="item">
            <img 
              src="<?php echo esc_url( $carusel_image2['url'] ); ?>" 
              alt="<?php echo esc_attr( $carusel_image2['alt'] ); ?>" 
            />
          </div>
        <?php endif; ?>

        <?php if( $carusel_image3 ): ?>
          <div class="item">
            <img 
              src="<?php echo esc_url( $carusel_image3['url'] ); ?>" 
              alt="<?php echo esc_attr( $carusel_image3['alt'] ); ?>" 
            />
          </div>
        <?php endif; ?>

        <?php if( $carusel_image4 ): ?>
          <div class="item">
            <img 
              src="<?php echo esc_url( $carusel_image4['url'] ); ?>" 
              alt="<?php echo esc_attr( $carusel_image4['alt'] ); ?>" 
            />
          </div>
        <?php endif; ?>

        <?php if( $carusel_image5 ): ?>
          <div class="item">
            <img 
              src="<?php echo esc_url( $carusel_image5['url'] ); ?>" 
              alt="<?php echo esc_attr( $carusel_image5['alt'] ); ?>" 
            />
          </div>
        <?php endif; ?>
      </div>

      <div class="navigator">
        <button class="prev"><svg class="icon"><use xlink:href="#ico-arrow"/></svg></button>
        <div class="points"></div>
        <button class="next"><svg class="icon"><use xlink:href="#ico-arrow"/></svg></button>
      </div>

    </div>

    <div>
      <?php echo wp_kses_post ( get_field('description_for_block_2') ); ?>
    </div>
      
  </div>


  <div class="block-3">
    <div class="achievements">
      <div class="key">Общая площадь торгового центра</div>
      <div class="value">25 816 м²</div>

      <div class="key">Площадь, сдаваемая в аренду</div>
      <div class="value">16 675 м²</div>

      <div class="key">Парковка (машиномест)</div>
      <div class="value">500</div>

      <div class="key">Посещаемость (в неделю)</div>
      <div class="value"><?php echo esc_html( get_field('attendance_for_block_3') ); ?> чел</div>
    </div>

    <?php $image2 = get_field('image_1_for_block_3'); ?>
    <img class="p1" src="<?php echo esc_url( $image2['url'] ); ?>" alt="<?php echo esc_attr( $image2['alt'] ); ?>" />

    <?php $image3 = get_field('image_2_for_block_3'); ?>
    <img class="p2"  src="<?php echo esc_url( $image3['url'] ); ?>" alt="<?php echo esc_attr( $image3['alt'] ); ?>" />

    <?php $image4 = get_field('image_3_for_block_3'); ?>
    <img  class="p3" src="<?php echo esc_url( $image4['url'] ); ?>" alt="<?php echo esc_attr( $image4['alt'] ); ?>" />

    <?php $image5 = get_field('image_4_for_block_3'); ?>
    <img class="p4"  src="<?php echo esc_url( $image5['url'] ); ?>" alt="<?php echo esc_attr( $image5['alt'] ); ?>" />

    <?php $image6 = get_field('image_5_for_block_3'); ?>
    <img class="p5"  src="<?php echo esc_url( $image6['url'] ); ?>" alt="<?php echo esc_attr( $image6['alt'] ); ?>" />


  </div>
</main>
<?php get_footer(); ?>