<?php
/**
 * 親テーマ Twenty Fourteen のセットアップに追加する処理を定義します。
 */
function oki2a24_twentyfourteen_child_setup() {
        register_default_headers( array(
                'P1010303' => array(
                        'url' => '%2$s/images/headers/P1010303.jpg',
                        'thumbnail_url' => '%2$s/images/headers/P1010303-thumbnail.jpg',
                        'description' => 'P1010303'
                ),
                'P1010308' => array(
                        'url' => '%2$s/images/headers/P1010308.jpg',
                        'thumbnail_url' => '%2$s/images/headers/P1010308-thumbnail.jpg',
                        'description' => 'P1010308'
                ),
                'P8233212' => array(
                        'url' => '%2$s/images/headers/P8233212.jpg',
                        'thumbnail_url' => '%2$s/images/headers/P8233212-thumbnail.jpg',
                        'description' => 'P8233212'
                ),
                'PC272786' => array(
                        'url' => '%2$s/images/headers/PC272786.jpg',
                        'thumbnail_url' => '%2$s/images/headers/PC272786-thumbnail.jpg',
                        'description' => 'PC272786'
                ),
                'PC292698' => array(
                        'url' => '%2$s/images/headers/PC292698.jpg',
                        'thumbnail_url' => '%2$s/images/headers/PC292698-thumbnail.jpg',
                        'description' => 'PC292698'
                ),
                'PC292705' => array(
                        'url' => '%2$s/images/headers/PC292705.jpg',
                        'thumbnail_url' => '%2$s/images/headers/PC292705-thumbnail.jpg',
                        'description' => 'PC292705'
                ),
                'PC292709' => array(
                        'url' => '%2$s/images/headers/PC292709.jpg',
                        'thumbnail_url' => '%2$s/images/headers/PC292709-thumbnail.jpg',
                        'description' => 'PC292709'
                ),
                'PC312989' => array(
                        'url' => '%2$s/images/headers/PC312989.jpg',
                        'thumbnail_url' => '%2$s/images/headers/PC312989-thumbnail.jpg',
                        'description' => 'PC312989'
                ),
                'PC313024' => array(
                        'url' => '%2$s/images/headers/PC313024.jpg',
                        'thumbnail_url' => '%2$s/images/headers/PC313024-thumbnail.jpg',
                        'description' => 'PC313024'
                )
        ) );            
}                       
/**
 * 親テーマ Twenty Fourteen のセットアップに処理を追加します。
 */
add_action( 'after_setup_theme', 'oki2a24_twentyfourteen_child_setup' );

/**
 * more タグで URL 末端に付く #more-xxxx を削除します。
 */
function remove_more_link_scroll( $link ) {
        $link = preg_replace( '|#more-[0-9]+|', '', $link );
        return $link;
}
/**
 * コンテンツの more リンククリック時に処理を追加します。
 */
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

