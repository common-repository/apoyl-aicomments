<?php
/*
 * @link        
 * @since      1.0.0
 * @package    APOYL_AICOMMENTS
 * @subpackage APOYL_AICOMMENTS/includes
 * @author     凹凸曼 <jar-c@163.com>
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
class Apoyl_Aicomments_i18n {


	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'apoyl-aicomments',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
?>