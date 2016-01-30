jQuery(document).ready(function($)
{
    /****************  SIGNIN FORM    **************/
    /***********************************************/
    
    $('#signin-form').bootstrapValidator().on('success.form.bv', function(e) 
    {
        e.preventDefault(); 
        var form = $('#signin-form').ajaxSubmit(
        { 
            /* options */ 
            url: blitzdocument_ajax_script.ajaxurl,
            data: ({action : 'do_signin_user_ajax'}), 
            success: function(response) 
            {  
                $('.success').empty();
                if(response.success) 
                {
                    $('#success').append(response.data.message);
                }
                else 
                {
                    swal({   
                        title: "Opps!",   
                        text: response.data.message,   
                        type: "warning",   
                        showCancelButton: false, 
                        showConfirmButton: true ,
                    });
                }
            }  
        });
        return false;
    }); 

    /****************  SIGNUP FORM    **************/
    /***********************************************/
    $('#signup-form').bootstrapValidator().on('success.form.bv', function(e) 
    {
        e.preventDefault(); 
        var form = $('#signup-form').ajaxSubmit(
        { /* options */ 
            url: blitzdocument_ajax_script.ajaxurl,
            data: (
            {
                action : 'do_signup_user_ajax', 
            }),  
            success: function(response){  
                $('.success').empty();
                if(response.success) {
                    $('#success').html(response.data.message);
                }
                else {
                    swal({   
                        title: "Opps!",   
                        text: response.data.message,   
                        type: "warning",   
                        showCancelButton: false, 
                        showConfirmButton: true ,
                    });
                }
            }  
        });
        // return false to prevent standard browser submit and page navigation
        return false;
    }); 
    /****************  FORGOT PASSWORD FORM    **************/
    /********************************************************/
    $('#forgot-password-form').bootstrapValidator().on('success.form.bv', function(e) 
    {
        e.preventDefault(); 
        var form = $('#forgot-password-form').ajaxSubmit(
        { /* options */ 
            url: shadowtemplate_ajax_script.ajaxurl,
            data: (
            {
                action : 'do_forgot_password_ajax', 
            }),  
            success: function(response){  
                $('.success').empty();
                if(response.success) {
                    $('#success').html(response.data.message);
                }
                else {
                    swal({   
                        title: "Opps!",   
                        text: response.data.message,   
                        type: "warning",   
                        showCancelButton: false, 
                        showConfirmButton: true ,
                    });
                }
            }  
        });
        // return false to prevent standard browser submit and page navigation
        return false;
    }); 
}); 