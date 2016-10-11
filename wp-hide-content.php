<?php
/*
Plugin Name: wp-hide-content
Plugin URI: https://github.com/Tpierluigi/wp-hideContent
Description: Plugin wordpress per escludere la visualizzazione delle categorie e dei post ai ruoli non autorizzati
Version: 1.0
Author: Pierluigi Tonegato
Author URI:https://github.com/Tpierluigi
*/

require_once "admin.php";
class hide_cat{
    static function filtro($categories){
        foreach ( $categories as $id=>$cat ){
            //if ($cat->cat_ID %2 == 0 ){
                $categories[$id]['cat_name'] = "dispari!!";
            //}
        }
        echo_log("boooh");
        return $categories;
    }
    static function prova($ris){
        return $ris . "<h1>ciao</h1>";
    }
}
add_filter('get_categories',array('hide_cat','filtro'));
add_filter('wp_list_categories',array('hide_cat','prova'));
/* Echo variable
 * Description: Uses <pre> and print_r to display a variable in formated fashion
 */
function echo_log( $what )
{
    echo '<pre>'.print_r( $what, true ).'</pre>';
}