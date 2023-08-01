<aside class="sidebar">

<div class="sidebar_category">
     <h2 class="sidebar_category-title">
     カテゴリー
     </h2>

<?php echo '<ul class="sidebar_category-list">';
wp_list_categories('title_li=');
echo '</ul>'; ?>
          

     <h2 class="sidebar_category-title sidebar_category-title2">
     月別アーカイブ
     </h2>
     <ul class="sidebar_category-archive">
     <?php
     $string = wp_get_archives(array(
                    'show_post_count' => 1,
                    // 'type' =>  'yearly',
                    'echo' => 0
               ));
     echo preg_replace('/<\/a>&nbsp;(\([0-9]*\))/', ' <span class="count">$1</span></a>', $string);
?>

     </ul>
</div>

</aside>