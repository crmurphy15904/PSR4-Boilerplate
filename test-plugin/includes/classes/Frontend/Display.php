<?php

namespace Company\Test_Plugin\Frontend;

class Display {

  /**
	 * Full path and filename of plugin.
	 *
	 * @var string $version Full path and filename of plugin.
	 */
  private $plugin;
  
  /**
   * __construct
   *
   * @return void
   */
  public function __construct($plugin) {
    $this->plugin = $plugin;
  }
  
  /**
   * Init
   *
   * @return void
   */
  public function init() {
    add_shortcode('lemon_aiders', array($this, 'display_lemon_aiders'));
  }
  
  /**
   * Display Lemon Aiders message
   *
   * @return string
   */
  public function display_lemon_aiders() {
    return 'Hello, Lemon-Aiders';
  }
  
}
