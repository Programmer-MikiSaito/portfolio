<?php get_header();?>

<main id="scroll">

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

<section class="treatment">

<p class="page-skip"><a href="<?php
echo home_url( '/' );
?>">home</a>＞<a href="<?php
echo get_page_link(36);
?>"><?php
$page_id = get_page_by_path('treatment');  //固定ページのスラッグ名を入れます
$page = get_post( $page_id );
  echo $page -> post_title;    //タイトルを取得したい時はこちら
  
?></a></p>

<div class="treatment-inner treatment-inner">

  <div class="treatment-btn">
    <div class="section_btn">
      <a class="subject-btn btn" href="#scroll-1"><?php
$post_type = get_post_type();
echo get_post_type_object('pain')->label;
?></a>
    </div>

    <div class="section_btn">
      <a class="subject-btn btn" href="#scroll-2"><?php
$post_type = get_post_type();
echo get_post_type_object('unwell')->label;
?></a>
    </div>

    <div class="section_btn">
      <a class="subject-btn btn" href="#scroll-3"><?php
$post_type = get_post_type();
echo get_post_type_object('checkkup')->label;
?></a>
    </div>
  </div>
</div>

</section>
<?php
	//投稿タイプを取得
	$this_post_type = $post -> post_type;
	//ラベルを取得
	$this_post_type_label = get_post_type_object($this_post_type) -> label;
	//スラッグを取得
	$this_post_type_slug = get_post_type_object($this_post_type) -> name;
?>
<section class="treatment_pain" id="scroll-1">

  <div class="treatment_pain treatment-inner">

  <h2 class="treatment_title">
      <img src="<?php echo get_template_directory_uri();?>/img/common/title_icon.png" alt="">
      <div class="title">
      <?php
$post_type = get_post_type();
echo get_post_type_object('pain')->label;
?>

    <p><?php
$post_type = get_post_type(); //投稿タイプ名(スラッグ)の取得
$post_type_object = get_post_type_object('pain'); //投稿タイプの情報を取得
echo nl2br($post_type_object->description,true);?></p>
      </div>
    </h2>
    
    <div class="pain_items treatment-items">
      <ul class="pain_item treatment-item">
        <li><a href="<?php echo get_permalink( 129 , false ); ?>"><?php echo html_entity_decode(get_field('img',129));?>
        <h3><?php echo get_the_title( 129 ); ?></h3></a></li>

        <li><a href="<?php echo get_permalink( 137 , false ); ?>"><?php echo html_entity_decode(get_field('img',137));?>
        <h3><?php echo get_the_title( 137 ); ?></h3></a></li>

        <li><a href="<?php echo get_permalink( 138 , false ); ?>"><?php echo html_entity_decode(get_field('img',138));?>
        <h3><?php echo get_the_title( 138 ); ?></h3></a></li>
      </ul>

  </div>
  </div>
</section>

  <section class="treatment_unwell" id="scroll-2">

  <div class="treatment_unwell treatment-inner">

<h2 class="treatment_title">
    <img src="<?php echo get_template_directory_uri();?>/img/common/title_icon.png" alt="">
    <div class="title">
    <?php
$post_type = get_post_type();
echo get_post_type_object('unwell')->label;
?>

  <p><?php
$post_type = get_post_type(); //投稿タイプ名(スラッグ)の取得
$post_type_object = get_post_type_object('unwell'); //投稿タイプの情報を取得
echo nl2br($post_type_object->description,true);?></p>
    </div>
  </h2>
  
  <div class="unwell_items treatment-items">
      <ul class="unwell_item treatment-item">
        <li><a href="<?php echo get_permalink( 144 , false ); ?>"><?php echo html_entity_decode(get_field('img',144));?>
        <h3><?php echo get_the_title( 144 ); ?></h3></a></li>

        <li><a href="<?php echo get_permalink( 145 , false ); ?>"><?php echo html_entity_decode(get_field('img',145));?>
        <h3><?php echo get_the_title( 145 ); ?></h3></a></li>

        <li><a href="<?php echo get_permalink( 147 , false ); ?>"><?php echo html_entity_decode(get_field('img',147));?>
        <h3><?php echo get_the_title( 147 ); ?></h3></a></li>
      </ul>

  </div>
  </div>
  </section>

  <section class="treatment_checkkup" id="scroll-3">

  <div class="treatment_checkkup treatment-inner">

  <h2 class="treatment_title">
      <img src="<?php echo get_template_directory_uri();?>/img/common/title_icon.png" alt="">
      <div class="title">
      <?php
$post_type = get_post_type();
echo get_post_type_object('checkkup')->label;
?>

    <p><?php
$post_type = get_post_type(); //投稿タイプ名(スラッグ)の取得
$post_type_object = get_post_type_object('checkkup'); //投稿タイプの情報を取得
echo nl2br($post_type_object->description,true);?></p>
      </div>
    </h2>
    
    <div class="checkkup_items treatment-items">
      <ul class="checkkup_item treatment-item">
        <li><a href="<?php echo get_permalink( 148 , false ); ?>"><?php echo html_entity_decode(get_field('img',148));?>
        <h3><?php echo get_the_title( 148 ); ?></h3></a></li>

        <li><a href="<?php echo get_permalink( 149 , false ); ?>"><?php echo html_entity_decode(get_field('img',149));?>
        <h3><?php echo get_the_title( 149 ); ?></h3></a></li>

      </ul>

  </div>
  </div>
</section>

</main>

<?php get_footer();?>