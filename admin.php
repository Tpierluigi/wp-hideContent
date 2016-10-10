<?php
/*
la funzione per generare la pagina in pannello d'amministrazione
*/
function wphc_update_options_form(){
?>
	<div class="wrap"> 
    	<div class="icon32" id="icon-options-general"><br /></div>
    	<h1>Pagina delle opzioni del plugin</h1>
    </div>
<?php
}

function wphc_add_option_page()
{
    add_options_page('hide categories options', 'hide categories options', 'administrator', 'hide-categories-options', 'wphc_update_options_form');
}
 
add_action('admin_menu', 'wphc_add_option_page');
?>