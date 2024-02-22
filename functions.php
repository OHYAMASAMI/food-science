<?php
/** 
*テーマの機能を追加する
@return void
*/
function my_theme_support()
{
    //titleのタグを出力する
add_theme_support('title-tag');



//アイキャッチ画像を有効化する
add_theme_support('post_thumbnails');
}
add_action('after_setup_theme' , 'my_theme_support');

function my_document_title_separator($separator){
$separator = '|';
return $separator;
}
add_filter('document_title_separator', 'my_document_title_separator');