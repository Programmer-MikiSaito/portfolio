<?php get_header();?>

<main>

<div class="about_mv s_mv">
<div class="about_mv-inner s_mv-inner">
  <img class="about_mv-inner--img s_mv-inner--img" src="<?php echo get_template_directory_uri();?>/img/about/about_mv.jpg" alt="">
  <div class="about_mv_container s_mv_container">

  <h2 class="about_titles s_titles">
      <div class="about-title s-title">
      <?php $page_id = get_page_by_path('about');
    //スラッグ名の取得
    $slug = get_post( $page_id );
    echo $slug -> post_name;
    ?>
    
      
    <p><?php
  $page_id = get_page_by_path('about');  //固定ページのスラッグ名を入れます
  $page = get_post( $page_id );
    echo $page -> post_title;    //タイトルを取得したい時はこちら
    
?></p>
      </div>
    </h2>

  </div>
</div>
</div>

<section class="about_director">
  <p class="page-skip"><a href="<?php
echo home_url( '/' );
?>">home</a>＞<a href="<?php
echo get_page_link(29);
?>">クリニックのご紹介</a></p>

<div class="about_director-inner inner">
  <h2 class="about_director-title">院長紹介</h2>

  <div class="about_director-containner">
    <div class="director_container-img">
      <img src="<?php echo get_template_directory_uri();?>/img/about/about_head-doctor.jpg" alt="">
    </div>
    <div class="director_container-text">
      <?php echo html_entity_decode(get_field('maintext',29));?>
      <div class="text_name">
      <p>渡邉脳神経外科クリニック院長</p>
      <img src="<?php echo get_template_directory_uri();?>/img/about/about_head-doctor_sign.png" alt="">
      </div>
    </div>
  </div>
</div>

</section>

<section class="about_hospital">

  <div class="about_hospital-inner inner">

  <h2 class="about_hospital-title">院内紹介</h2>

  <div class="hospital_container-text">
  <?php echo html_entity_decode(get_field('subtext',29));?>
  </div>

  <div class="hospital_container-img">
  <?php echo html_entity_decode(get_field('img',29));?>
  </div>

  </div>

</section>

</main>

<?php get_footer();?>