<?php get_header();?>

<main>

  <div class="mv">
    <div class="mv-inner">
      <h2 class="mv_title">
        <img src="<?php echo get_template_directory_uri();?>/img/top/mv_text_pc.svg" alt="">
      </h2> 

      <div class="mv_img u-desktop ">
        <ul class=" slider">
          <li class="mv_img-slider"><img src="<?php echo get_template_directory_uri();?>/img/top/top_mv_1.jpg" alt=""></li>
          <li class="mv_img-slider"><img src="<?php echo get_template_directory_uri();?>/img/top/top_mv_2.jpg" alt=""></li>
          <li class="mv_img-slider"><img src="<?php echo get_template_directory_uri();?>/img/top/top_mv_3.jpg" alt=""></li>
        </ul>
      </div>

      <div class="sp_img u-mobile">
        <ul class=" slider">
          <li class="slider-img"><img src="<?php echo get_template_directory_uri();?>/img/top/top_mv_1_sp.jpg" alt=""></li>
          <li class="slider-img"><img src="<?php echo get_template_directory_uri();?>/img/top/top_mv_2_sp.jpg" alt=""></li>
          <li class="slider-mg"><img src="<?php echo get_template_directory_uri();?>/img/top/top_mv_3_sp.jpg" alt=""></li>
        </ul>
      </div>


  </div>
  </div>

  <section class="news">

    <div class="news_inner inner">
      
    <h2 class="section_title">
      <img src="<?php echo get_template_directory_uri();?>/img/common/title_icon.png" alt="">
      <div class="title">
      <?php
  $page_id = get_page_by_path('news');  //固定ページのスラッグ名を入れます
  $page = get_post( $page_id );
    echo $page -> post_title;    //タイトルを取得したい時はこちら
    
?>
<?php $page_id = get_page_by_path('news');
    //スラッグ名の取得
    $slug = $page->post_name;
    ?>
    <p><?php echo $slug; ?></p>
      </div>
    </h2>

    <ul class="news_conteiner">
    <!-- <a href=""> -->
    <?php
$args = array(
  'post_type' => 'post', 
  'posts_per_page' => 3
);
$the_query = new WP_Query( $args ); ?>
<?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


      <li><a href="<?php the_permalink(); ?>" class="news_items">
        <div class="news_item">
        <time class="date" datetime="">
        <?php the_time('Y/n/j'); ?>
        </time>
        <?php
	$cat = get_the_category();
	$catname = $cat[0]->cat_name;
	$cat_id = $cat[0]->cat_ID;
	$link = get_category_link($cat_id);
	$cat_color = 'category_'.$cat_id;
	$back_color = get_field('color',$cat_color);
  $txt_color = get_field('textcolor',$cat_color);

?>
        <span class="category" style="color:<?php echo $back_color; ?>"
        <?php echo $link; ?> style="border-color:<?php echo $back_color; ?>;"style="txt-color:<?php echo $back_color; ?>;"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; }?>
        </span>
        </div>
        <h3 class="news_item-title" >
        <?php the_title(); ?>
        </h3>
      </a></li>

      <li class="border"></li>

      <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php esc_html_e( ‘記事がありません’ ); ?></p>
  <?php endif; ?>

    </ul>

    <div class="section_btn">
      <a class="top-btn btn" href="<?php
echo get_page_link(85);
?>">もっと見る</a>
    </div>
  </div>
  </section>

  <section class="about">

<div class="about_inner inner">

  <div class="about_items">
  
    <h2 class="section_title">
      <img src="<?php echo get_template_directory_uri();?>/img/common/title_icon.png" alt="">
      <div class="title">
      <?php
  $page_id = get_page_by_path('about');  //固定ページのスラッグ名を入れます
  $page = get_post( $page_id );
    echo $page -> post_title;    //タイトルを取得したい時はこちら
    
?>
<?php $page_id = get_page_by_path('about');
    //スラッグ名の取得
    $slug = $page->post_name;
    ?>
    <p><?php echo $slug; ?></p>
      </div>
    </h2>
    
  <div class="about_item-text">
    <h3 class="about_item-title">
    <?php echo html_entity_decode(get_field('title',29));?>
    </h3>

    <?php echo html_entity_decode(get_field('text',29));?>
    </div>

    <div class="section_btn">
      <a class="top-btn btn" href="<?php
echo get_page_link(29);
?>">もっと見る</a>
    </div>

  </div>

  <div class="about_img section_img">
    <img src="<?php echo get_template_directory_uri();?>/img/top/top_about_2.jpg" alt="">
    <img src="<?php echo get_template_directory_uri();?>/img/top/top_about_1.jpg" alt="">
  </div>

</div>

</section>

<section class="treatment">

<div class="treatment_inner inner">

  <div class="treatment_img section_img">
    <img src="<?php echo get_template_directory_uri();?>/img/top/top_treatment_2.jpg" alt="">
    <img src="<?php echo get_template_directory_uri();?>/img/top/top_treatment_1.jpg" alt="">
  </div>

  <div class="treatment_items">

    <h2 class="section_title">
      <img src="<?php echo get_template_directory_uri();?>/img/common/title_icon.png" alt="">
      <div class="title">
      <?php
  $page_id = get_page_by_path('treatment');  //固定ページのスラッグ名を入れます
  $page = get_post( $page_id );
    echo $page -> post_title;    //タイトルを取得したい時はこちら
    
?>
<?php $page_id = get_page_by_path('treatment');
    //スラッグ名の取得
    $slug = $page->post_name;
    ?>
    <p><?php echo $slug; ?></p>
      </div>
    </h2>

  <div class="treatment_item-text">
    <h3 class="treatment_item-title">
    <?php echo html_entity_decode(get_field('title',36));?>
    </h3>

    <?php echo html_entity_decode(get_field('text',36));?>
  </div>

    <div class="section_btn u-desktop">
      <a class="top-btn btn" href="<?php
echo get_page_link(36);
?>">クリニックのご紹介</a>
    </div>
    <div class="section_btn u-mobile">
      <a class="top-btn btn" href="<?php
echo get_page_link(36);
?>">もっと見る</a>
    </div>

  </div>

</div>

</section>

<section class="contact">

<div class="contact-inner">
  <img class="contact-inner_img" src="<?php echo get_template_directory_uri();?>/img/top/top_contact.jpg" alt="">
  <div class="contact_container">

  <h2 class="section_title">
      <img src="<?php echo get_template_directory_uri();?>/img/common/title_icon.png" alt="">
      <div class="title">
      <?php
  $page_id = get_page_by_path('contact');  //固定ページのスラッグ名を入れます
  $page = get_post( $page_id );
    echo $page -> post_title;    //タイトルを取得したい時はこちら
    
?>
<?php $page_id = get_page_by_path('contact');
    //スラッグ名の取得
    $slug = $page->post_name;
    ?>
    <p><?php echo $slug; ?></p>
      </div>
    </h2>

  <div class="contact_text">
  <?php echo html_entity_decode(get_field('text',61));?>
</div>

<div class="section_btn contact_btn">
  <a class="top-btn btn contact-btn" href="<?php
echo get_page_link(61);
?>">お問い合わせ</a>
</div>
</div>

</div>

</section>

<section class="access">

<div class="access_inner inner">

<h2 class="section_title">
      <img src="<?php echo get_template_directory_uri();?>/img/common/title_icon.png" alt="">
      <div class="title">
      <?php
  $page_id = get_page_by_path('access');  //固定ページのスラッグ名を入れます
  $page = get_post( $page_id );
    echo $page -> post_title;    //タイトルを取得したい時はこちら
    
?>
<?php $page_id = get_page_by_path('access');
    //スラッグ名の取得
    $slug = $page->post_name;
    ?>
    <p><?php echo $slug; ?></p>
      </div>
    </h2>

  <div class="map-container">
    <?php echo html_entity_decode(get_field('maintext',67));?>
  </div>

  <div class="access_item-text u-desktop">
    <?php echo html_entity_decode(get_field('text',67));?>
  </div>
  <div class="access_item-text u-mobile">
  <?php echo html_entity_decode(get_field('subtitle',67));?>
  <?php echo html_entity_decode(get_field('subtext',67));?>
  </div>

  <div class="access_item-time">
  <?php echo html_entity_decode(get_field('img',67));?>
  </div>

</div>
</section>
  
</main>


  <!-- slider -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <?php get_footer();?>
