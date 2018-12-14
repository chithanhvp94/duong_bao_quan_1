<?php if (!defined('FW')) die('Forbidden');

class FW_Shortcode_Column extends FW_Shortcode
{
	private $restricted_types = array( 'column' );


	public function _init()
	{
		add_action(
			'fw_option_type_builder:page-builder:register_items',
			array($this, '_action_register_builder_item_types')
		);

		add_filter( 'fw_ext:shortcodes:collect_shortcodes_data', array(
			$this, '_filter_add_column_data'
		) );
	}


	public function _filter_add_column_data( $structure ) {
		$data['column'] = $this->get_item_data();
		return array_merge( $structure, $data );
	}

	private function get_shortcode_options() {
		$shortcode_instance = fw()->extensions->get( 'shortcodes' )->get_shortcode( 'column' );

		return $shortcode_instance->get_options();
	}

	private function get_shortcode_config() {
		$shortcode_instance = fw_ext( 'shortcodes' )->get_shortcode( 'column' );

		return $shortcode_instance->get_config( 'page_builder' );
	}

	
	public function get_item_data() {
		$data = array(
			'restrictedTypes' => $this->restricted_types,
		);

		$options = $this->get_shortcode_options();
		if ( $options ) {
			fw()->backend->enqueue_options_static( $options );
			$data['options'] = $this->transform_options( $options );
		}

		$config = $this->get_shortcode_config();
		if ( isset( $config['popup_size'] ) ) {
			$data['popup_size'] = $config['popup_size'];
		}

		if (isset($config['popup_header_elements'])) {
			$data['header_elements'] = $config['popup_header_elements'];
		}

		$data['item_widths'] = fw_ext_builder_get_item_widths_for_js('column');

		$data['l10n'] = array(
			'edit' => __( 'Edit', 'fw' ),
			'duplicate' => __( 'Duplicate', 'fw' ),
			'remove' => __( 'Remove', 'fw' ),
			'collapse' => __( 'Collapse', 'fw' ),
			'title' => __( 'Column', 'fw' ),
		);

		$data['tag'] = 'column';
		if ($options) {
			$data['default_values'] = fw_get_options_values_from_input(
				$options, array()
			);
		}

		return $data;
	}


	private function transform_options( $options ) {
		$transformed_options = array();
		foreach ( $options as $id => $option ) {
			if ( is_int( $id ) ) {
				
				$transformed_options[] = $option;
			} else {
				$transformed_options[] = array( $id => $option );
			}
		}

		return $transformed_options;
	}

	public function _action_register_builder_item_types() {
		if (fw_ext('page-builder')) {
			require $this->get_declared_path('/includes/page-builder-column-item/class-page-builder-column-item.php');

			
		}
	}
}
