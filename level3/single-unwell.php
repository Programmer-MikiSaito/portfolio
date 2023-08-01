<?php get_header();?>

<main>

<div class="treatment_mv s_mv">
<div class="treatment_mv-inner s_mv-inner">
  <img class="treatment_mv-inner--img s_mv-inner--img" src="<?php echo get_template_directory_uri();?>/img/treatment/treatment_mv.jpg" alt="">
  <div class="treatment_mv_container s_mv_container">

  <h2 class="treatment_titles s_titles">
      <div class="treatment-title s-title">
      <?php $page_id = get_page_by_path('treatment');
    //スラッグ名の取得
    $slug = get_post( $page_id );
    echo $slug -> post_name;
    ?>
    
      
    <p><?php
  $page_id = get_page_by_path('treatment');  //固定ページのスラッグ名を入れます
  $page = get_post( $page_id );
    echo $page -> post_title;    //タイトルを取得したい時はこちら
    
?></p>
      </div>
    </h2>

  </div>
</div>
</div>
<?php
$Treatment = get_field('treatment');
?>
<section class="unwell_treatment">
  <p class="page-skip"><a href="<?php
echo home_url( '/' );
?>">home</a>＞<a href="<?php
echo get_page_link(36);
?>"><?php
$page_id = get_page_by_path('treatment');  //固定ページのスラッグ名を入れます
$page = get_post( $page_id );
  echo $page -> post_title;    //タイトルを取得したい時はこちら
  
?></a>＞<a href="<?php echo get_permalink( false ); ?>"><?php the_title(); ?></a></p>
    <div class="sub_treatment-inner">

<?php if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
    if(has_post_thumbnail()):
    $id=get_post_thumbnail_id();
    $img_src=wp_get_attachment_image_src($id,'full')[0];
    endif; ?>
    
<div class="sub_treatment-img">
<?php echo html_entity_decode(get_field('img'));?>
</div>

<h2><span><?php the_title(); ?></span></h2>

<div class="sub_treatment-text">
<?php echo html_entity_decode(get_field('text'));?>
</div>

<div class="section_btn sub_treatment-btn">
      <a class="subject-btn btn" href="<?php
echo get_page_link(36);
?>">診療科目一覧へ</a>
    </div>

<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>

</div>

</section>

</main>

<?php get_footer();?>