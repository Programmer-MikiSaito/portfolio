<!DOCTYPE html>
<html lang="ja" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex">
  <!-- meta情報 -->
  <title>渡邉脳神経外科</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="渡邉脳神経外科.TOP" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://ms0208.xsrv.jp/level3/" />
  <meta property="og:image" content="https://ms0208.xsrv.jp/level3/ogp.png" />
  <meta property="og:site_name" content="渡邉脳神経外科" />
  <meta property="og:description" content="脳神経外科" />
  <!-- ファビコン -->
  <link rel="shortcut icon" href="#" type="image/x-icon" />
  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/scss/style.css">
 <!-- Font -->
 <script>
  (function(d) {
    var config = {
      kitId: 'dxw3wfr',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
  <!-- JavaScript -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
  <script defer src="<?php echo get_template_directory_uri();?>/js/script.js"></script>
  <!-- slider -->
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
<!-- php -->
<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>

</head>
<body>
<!-- heade -->
<header>
  <div class="header-inner">
  <h1 class="header-img">
    <a href="<?php
echo home_url( '/' );
?>"><img src="<?php echo get_template_directory_uri();?>/img/common/header_logo.png" alt=""></a>
  </h1>

  <button class="header__hamburger u-mobile hamburger js-hamburger">
    <span></span>
    <span></span>
    <span></span>
  </button>

  <nav class="header_nav u-desktop js-drawer">
    <ul class="header_nav-list">
      <li class="list"><a href="<?php
echo get_page_link(29);
?>">クリニックについて</a></li>
      <li class="dot"></li>
      <li class="list"><a href="<?php
echo get_page_link(85);
?>">お知らせ</a></li>
      <li class="dot"></li>
      <li class="list"><a href="<?php
echo get_page_link(36);
?>">診療案内</a></li>
      <li class="dot"></li>
      <li class="list"><a href="<?php
echo get_page_link(61);
?>">お問い合わせ</a></li>
    </ul>
  </nav>
</div>
</header>