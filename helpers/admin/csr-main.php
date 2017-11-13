<?php
/**
 * The core of the plugin
 */
function csr_imob_init(){
	csr_imob_add_admin_page();
}

/**
 * Add admin page for plugin
 */
function csr_imob_add_admin_page(){
	add_menu_page('imobiliare','Imobiliare','manage_options','Imobiliare','csr_imob_main_page');
}

function csr_imob_main_page(){
	echo 'Hello world';
}