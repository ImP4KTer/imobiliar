<?php
/*
Plugin Name: Imobiliar
Version: 0.1
*/

define( 'CSR_IMOB_PATH', dirname( __FILE__ ) );
/**
 * Plugin helpers files
 */
require_once( CSR_IMOB_PATH . '/helpers/csr-constants.php' );
require_once( CSR_IMOB_PATH . '/helpers/admin/csr-main.php' );

/**
 * Plugin activation hooks
 */
add_action( 'init', 'csr_imob_init' );