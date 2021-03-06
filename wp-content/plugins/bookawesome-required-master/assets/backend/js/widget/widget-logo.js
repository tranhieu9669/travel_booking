jQuery(document).ready(function($) {
	"use strict";

	var BOOKAWESOME_WIDGET_LOGO = {
		logo : null,

		init : function(){
			// Init event click open media choose logo.
			this.handleChooseLogo();
		},

		handleChooseLogo: function(){
			var self = this;
			$('body').on('click',".lookawesome-logo-image, .lookawesome-logo-buttons button", function(e)
			{
				var self2 = $(this);
				e.preventDefault();
		        //If the uploader object has already been created, reopen the dialog
		        if (self.logo) {
		            self.logo.open();
		            return;
		        }

		        //Extend the wp.media object
		        self.logo = wp.media.frames.file_frame = wp.media({
		            title: 'Choose Image', 
		            button: {
		                text: 'Choose Image'
		            },
		            multiple: false
		        });
		        //When a file is selected, grab the URL and set it as the text field's value
		        self.logo.on('select', function(event) {
		            var selection = self.logo.state().get('selection');

		            selection.map( function( attachment ) {
						attachment = attachment.toJSON();
						var wrap = self2.closest('.lookawesome-logo-wrap'),
							nameImage = wrap.find('#lookawesome-images-name').val();
						wrap.find('.lookawesome-logo-image').html('\
							<img src="' + attachment.url + '" />\n\
		                    <input type="hidden" name="' + nameImage + '" value="' + attachment.id + '" >\n\
						');
						wrap.find('.lookawesome-logo-buttons button').text('Edit image');

					});
		        });

		        self.logo.open();
			});
		}
	}

	BOOKAWESOME_WIDGET_LOGO.init();

	// $("body").on('click', '.delete', function(){
	// 	var id_image = $(this).attr("data-id");
 //                $(".image-"+id_image).remove();
    
	// });

});