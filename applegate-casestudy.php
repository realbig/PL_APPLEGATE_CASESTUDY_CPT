<?php
/**
 * Plugin Name: Applegate Case Study
 * Description: Creates the "Case Study" custom post type.
 * Author: Joel Worsham
 * Author URI: http://realbigmarketing.com
 * Version: 0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

// Define plugin constants
define( 'AGCASESTUDY_VERSION', '0.1.0' );
define( 'AGCASESTUDY_DIR', plugin_dir_path( __FILE__ ) );
define( 'AGCASESTUDY_URL', plugins_url( '', __FILE__ ) );

/**
 * Class AGCASESTUDY
 *
 * Initiates the plugin.
 *
 * @since   0.1.0
 *
 * @package AGCASESTUDY
 */
class AGCASESTUDY {

	public $case_study;

	private function __clone() { }

	private function __wakeup() { }

	/**
	 * Returns the *Singleton* instance of this class.
	 *
	 * @since     0.1.0
	 *
	 * @staticvar Singleton $instance The *Singleton* instances of this class.
	 *
	 * @return AGCASESTUDY The *Singleton* instance.
	 */
	public static function getInstance() {

		static $instance = null;

		if ( null === $instance ) {
			$instance = new static();
		}

		return $instance;
	}

	/**
	 * Initializes the plugin.
	 *
	 * @since 0.1.0
	 */
	protected function __construct() {

		$this->add_base_actions();
		$this->require_necessities();
	}

	/**
	 * Requires necessary base files.
	 *
	 * @since 0.1.0
	 */
	public function require_necessities() {

		require_once __DIR__ . '/core/class-agcasestudy-casestudy-cpt.php';
		$this->case_study = new AGCASESTUDY_CASESTUDY_CPT();
	}

	/**
	 * Adds global, base functionality actions.
	 *
	 * @since 0.1.0
	 */
	private function add_base_actions() {

		add_action( 'init', array( $this, '_register_assets' ) );
		add_action( 'admin_enqueue_scripts', array( $this, '_enqueue_assets' ) );
	}

	/**
	 * Registers the plugin's assets.
	 *
	 * @since 0.1.0
	 */
	function _register_assets() {
	}

	function _enqueue_assets() {
	}
}

require_once __DIR__ . '/core/agcasestudy-functions.php';
AGCASESTUDY();