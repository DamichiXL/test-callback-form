// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    jQuery("button#send-callback").on("click", (e)=>{
        e.preventDefault();
        let data = jQuery("#callback-form").serialize();
        jQuery.ajax({
            type: "POST",
            url: "/api/callback",
            data: data,
            success: function(data) {
                // show success message
                jQuery("#callback-form").parent().hide();
                jQuery("#success").show();
            },
            error: function (data){
                // clear errors
                jQuery("#callback-form .invalid-feedback").remove();
                jQuery("#callback-form input").removeClass("is-invalid");

                // show new errors
                for (const property in data.responseJSON.errors) {
                    jQuery("#callback-form #" + property).addClass("is-invalid");
                    let message = document.createElement("div");
                    message.classList.add("invalid-feedback");
                    message.innerText = data.responseJSON.errors[property];
                    jQuery("#callback-form #" + property).parent().append(message);
                }
            }
        });
    });

})()
