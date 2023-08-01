<?php
function custom_setup(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','custom_setup');

//ビジュアルエディターのフォントサイズ変更機能の文字サイズ指定
add_filter( 'tiny_mce_before_init', function ($settings) {
    //フォントサイズの指定
  $settings['fontsize_formats'] =
      '10px 12px 14px 16px 18px 20px 24px 28px 30px 32px 36px 42px 48px';
  //$settings['fontsize_formats'] = '0.8em 1.6em 2em 3em';
  //$settings['fontsize_formats'] = '80% 160% 200% 300%';
  return $settings;
} );

//Wordpressビジュアルエディターに文字サイズの変更機能を追加
add_filter('mce_buttons', function ($buttons){
    //フォントサイズ変更機能を追加
  array_push($buttons, 'fontsizeselect');
  return $buttons;
});


?>

