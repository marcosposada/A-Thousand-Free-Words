function checkFields() {
    var message = 'Error: form fields aren\'t filled or incorrect: ';
    var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email.value)) {
        message = message + 'Email';
        if (document.getElementById('comment').value == 'Comment') {
            message = message + ', Comment';
        }
        alert(message + '.');
        return false;
    }
    
    
}

jQuery.noConflict();
(function($) {
    $(function() {

        $('.sharethis').click(function(){
            $(this).next('.sharelist').slideToggle('fast');
        });

        var focus = $('.focus');
        focus.focusin(function(){
            $(this).css({
                'color': '#000',
                'border-color': '#000'
            });
        });
        focus.focusout(function(){
            $(this).removeAttr('style');
        });


        $('.single .post_content p:first').each(function() {
            $(this).html(function (i, html)
            {
                return html.replace(/^[^a-zA-Z]*([a-zA-Z])/g, '<h1 class="first-big">$1</h1>');
            });
        });
    });
})(jQuery);
