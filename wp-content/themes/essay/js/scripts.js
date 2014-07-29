(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';



		var post = $('.post');

        if (!post.hasClass('has-post-thumbnail')) {
            $('.single .post p:first').each(function() {

                $(this).html(function (i, html)
                {
                    return html.replace(/^[^a-zA-Z]*([a-zA-Z])/g, '<h1 class="first-big">$1</h1>');
                });
            });
        }

	});
	
})(jQuery, this);
