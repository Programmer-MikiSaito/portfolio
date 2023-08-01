<?php get_header();?>

<main>

<div class="contact_mv s_mv">
<div class="contact_mv-inner s_mv-inner">
  <img class="contact_mv-inner--img s_mv-inner--img" src="<?php echo get_template_directory_uri();?>/img/contact/contact_mv.jpg" alt="">
  <div class="contact_mv_container s_mv_container">

  <h2 class="contact_titles s_titles">
      <div class="contact-title s-title">
      <?php $page_id = get_page_by_path('contact');
    //スラッグ名の取得
    $slug = get_post( $page_id );
    echo $slug -> post_name;
    ?>
    
      
    <p><?php
  $page_id = get_page_by_path('contact');  //固定ページのスラッグ名を入れます
  $page = get_post( $page_id );
    echo $page -> post_title;    //タイトルを取得したい時はこちら
    
?></p>
      </div>
    </h2>

  </div>
</div>
</div>

<section class= "contact_form">

<p class="page-skip news_page-skip"><a href="<?php
echo home_url( '/' );
?>">home</a>＞<a href="<?php
echo get_page_link(180);
?>">お問い合わせ完了</a></p>

<div class="contact_form-inner inner">

<h2 class="section_title contact_form-titles--end">
      <img src="<?php echo get_template_directory_uri();?>/img/common/title_icon.png" alt="">
      <div class="title contact_form-title">送信完了
    <p>この度はお問い合わせいただき、有難うございました。<br>
3営業日以内にご返信させていただきますので、しばらくお待ちくださいませ。</p>
      </div>
    </h2>

</div>

<div class="contact_form-btn--middle">
      <a class="subject-btn btn" href="<?php
echo home_url( '/' );
?>">ホームに戻る</a></div>

</section>

</main>

<?php get_footer();?>