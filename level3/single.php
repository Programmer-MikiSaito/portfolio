<?php get_header();?>

<main>

<div class="news_mv s_mv">
<div class="news_mv-inner s_mv-inner">
  <img class="news_mv-inner--img s_mv-inner--img" src="<?php echo get_template_directory_uri();?>/img/news/news_mv.jpg" alt="">
  <div class="news_mv_container s_mv_container">

  <h2 class="news_titles s_titles">
      <div class="news-title s-title">
      <?php $page_id = get_page_by_path('news');
    //スラッグ名の取得
    $slug = get_post( $page_id );
    echo $slug -> post_name;
    ?>
    
      
    <p><?php
  $page_id = get_page_by_path('news');  //固定ページのスラッグ名を入れます
  $page = get_post( $page_id );
    echo $page -> post_title;    //タイトルを取得したい時はこちら
    
?></p>
      </div>
    </h2>

  </div>
</div>
</div>

<?php
$Treatment = get_field('news');
?>
<section class="unwell_treatment news-body">
  <p class="page-skip"><a href="<?php
echo home_url( '/' );
?>">home</a>＞<a href="<?php
echo get_page_link(85);
?>"><?php
$page_id = get_page_by_path('news');  //固定ページのスラッグ名を入れます
$page = get_post( $page_id );
  echo $page -> post_title;    //タイトルを取得したい時はこちら
  
?></a>＞<a href="<?php echo get_permalink( false ); ?>"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; }?></a></p>
    <div class="news-conteiner_inner news-post_inner">

<?php if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
    if(has_post_thumbnail()):
    $id=get_post_thumbnail_id();
    $img_src=wp_get_attachment_image_src($id,'full')[0];
    endif; ?>
    
<div class="news_post-img">
<?php the_post_thumbnail(); ?>
</div>

<div class="news_conteiner-item news_conteiner-item--post">

        <?php
	$cat = get_the_category();
	$catname = $cat[0]->cat_name;
	$cat_id = $cat[0]->cat_ID;
	$link = get_category_link($cat_id);
	$cat_color = 'category_'.$cat_id;
	$back_color = get_field('color',$cat_color);
  $txt_color = get_field('textcolor',$cat_color);

?>
        <span class="category news_post-category" style="color:<?php echo $back_color; ?>"
        <?php echo $link; ?> style="border-color:<?php echo $back_color; ?>;"style="txt-color:<?php echo $back_color; ?>;">
        <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; }?>

        </span>
        <time class="date news_date" datetime="">
        <?php the_time('Y/n/j'); ?>
        </time>
        </div>

<div class="news_post-title"><span class="line"></span><h2 class="post-title"><?php the_title(); ?></h2></div>

<div class="news_post-text">
<?php echo html_entity_decode(get_field('text'));?>
</div>

<div class="news_post-btn">
<?php
    $prevpost = get_adjacent_post(true, '', true);
    $nextpost = get_adjacent_post(true, '', false);
?>
<div class="news_post-btn--btn">
  <div class="news_post-btn--before u-desktop">
  <p class="news_post-btn--b"><?php previous_post_link('%link', '<　　前の記事'); ?></p>
</div>
<div class="news_post-btn--before u-mobile-flex">
  <p class="news_post-btn--b"><?php previous_post_link('%link', '<　前の記事'); ?></p>
</div>
  <div class="news_post-btn--after u-desktop">
<p class="news_post-btn--a"><?php next_post_link('%link', '後の記事　　>'); ?></p></div>
    </div>
    <div class="news_post-btn--after u-mobile-flex">
<p class="news_post-btn--a"><?php next_post_link('%link', '後の記事　>'); ?></p></div>
    </div>
    <div class="news_post-btn--middle">
      <a class="subject-btn btn" href="<?php
echo get_page_link(85);
?>">お知らせ一覧へ</a></div>
</div>

<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>


<?php get_sidebar();?>
</section>
</main>
<?php get_footer();?>