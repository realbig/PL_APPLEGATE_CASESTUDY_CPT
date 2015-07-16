<?php
/**
 * Provides helper functions.
 *
 * @since      0.1.0
 *
 * @package    AGCASESTUDY
 * @subpackage AGCASESTUDY/core
 */

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Returns the main plugin object
 *
 * @since 0.1.0
 *
 * @return AGCASESTUDY
 */
function AGCASESTUDY() {
	return AGCASESTUDY::getInstance();
}