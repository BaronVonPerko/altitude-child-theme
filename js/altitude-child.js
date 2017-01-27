jQuery(document).ready(function($) {

    /* Contact Form Submission */
    $('#altitudeChildContactForm').on('submit', function(e) {
        e.preventDefault();

        var form = $(this);

        var name    = form.find('#name').val(),
            email   = form.find('#email').val(),
            message = form.find('#message').val(),
            ajaxUrl = form.data('url');

        if(name === '' || email === '' || message === '') {
            return; // TODO print error
        }

        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: {
                name: name,
                email: email,
                message: message,
                action: 'altitude_child_save_contact_form'
            },
            error: function(res) {
                console.log(res);
            },
            success: function(res) {
                console.log(res);
            }
        })        
    });

});