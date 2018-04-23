<?php

namespace BookAwesome\PostType\MetaBox\HotelMetaBox;

use BookAwesome\PostType\MetaBox\AbstractMetaBox;

class TestMetaBox extends AbstractMetaBox
{
	protected $actionField = 'action_nam_metabox';

	public function register(){
		add_meta_box( 
			'thong-tin', 
			'Thông tin ứng dụng', 
			array($this, 'output'), 
			$this->objPostType->postTypeName() 
		);
	}

	public function output( $post ){
		/**
		 * Created name action metabox.
		 * Name by post type name.
		 */
		$this->nonceField();

		$link_download = get_post_meta( $post->ID, '_link_download', true );

		?>
			<label for="link_download">Link Download: </label>
			<input type="text" id="link_download" name="link_download" value="<?php echo esc_attr( $link_download ) ?>" />
		<?php
	}

	public function save($post_id){
		/**
		 * Form validate action
		 */
		if( !$this->vefifyForm() ) {
			return false;
		}

		update_post_meta( $post_id, '_link_download', sanitize_text_field($_POST['link_download']) );
	}
}