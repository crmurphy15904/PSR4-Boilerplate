<?php

namespace Company\Test_Plugin\Frontend;

class Display {

  /**
	 * Full path and filename of plugin.
	 *
	 * @var string $plugin Full path and filename of plugin.
	 */
  private $plugin;
  
  /**
   * __construct
   *
   * @param  mixed $plugin
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
    // Register shortcodes here
  }
  
}