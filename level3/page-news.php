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



<section class= "news-body">
<p class="page-skip news_page-skip"><a href="<?php
echo home_url( '/' );
?>">home</a>＞<a href="<?php
echo get_page_link(85);
?>">お知らせ</a></p>

<ul class="news-conteiner_inner inner">
    <!-- <li><a href=""> -->
    <?php
    $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
$args = array(
  'post_type' => 'post',
'posts_per_page' => 5,
'paged' => $paged

);
$my_query = new WP_Query($args);
 
    if( $my_query -> have_posts() ) :
        while($my_query -> have_posts()) : $my_query -> the_post();; ?>
    <?php if(has_post_thumbnail()):
    $id=get_post_thumbnail_id();
    $img_src=wp_get_attachment_image_src($id,'full')[0];
    else:
    $img_src=get_template_directory_uri()."/img/news/news_eyecatch.jpg";
    endif; ?>

      <li class="news_conteiner-items" ><a href="<?php the_permalink(); ?>" >
        <div class="news_conteiner-item--body">
      <div class="news_conteiner-item">

        <?php
	$cat = get_the_category();
	$catname = $cat[0]->cat_name;
	$cat_id = $cat[0]->cat_ID;
	$link = get_category_link($cat_id);
	$cat_color = 'category_'.$cat_id;
	$back_color = get_field('color',$cat_color);
  $txt_color = get_field('textcolor',$cat_color);

?>
        <span class="category news_category" style="color:<?php echo $back_color; ?>"
        <?php echo $link; ?> style="border-color:<?php echo $back_color; ?>;"style="txt-color:<?php echo $back_color; ?>;">
        <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; }?>

        </span>
        </div>
        <h3 class="news_conteiner--item-title" >
        <?php the_title(); ?>
        </h3>
        <time class="date news_date" datetime="">
        <?php the_time('Y/n/j'); ?>
        </time>
        </div>
      <!-- </a> -->
      <figure class="news_conteiner-item--img">
<?php the_post_thumbnail(); ?>
</figure>
  </a>
      </li>


      <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php esc_html_e( ‘記事がありません’ ); ?></p>
  <?php endif; ?>

  <div class="pagination news_pagination">

   <div class="pnavi">
       <?php //ページリスト表示処理
       global $wp_rewrite;
       $paginate_base = get_pagenum_link();
       if(strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()){
           $paginate_format = '';
           $paginate_base = add_query_arg('paged','%#%');
       }else{
           $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
           user_trailingslashit('page/%#%/','paged');
           $paginate_base .= '%_%';
       }
       echo paginate_links(array(
           'base' => $paginate_base,
           'format' => $paginate_format,
           'total' => $my_query->max_num_pages,
           'mid_size' => 1,
           'current' => ($paged ? $paged : 1),
           'prev_text' => '<',
           'next_text' => '>',
       ));
       ?>
   </div>
</div>

    </ul>


<?php get_sidebar();?>
</section>



</main>


<?php get_footer();?>