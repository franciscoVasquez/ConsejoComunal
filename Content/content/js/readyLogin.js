/*
 *  Document   : readyLogin.js

 */
var ReadyLogin=function(){return{init:function(){$("#form-login").validate({errorClass:"help-block animation-slideUp",errorElement:"div",errorPlacement:function(e,r){r.parents(".form-group > div").append(e)},highlight:function(e){$(e).closest(".form-group").removeClass("has-success has-error").addClass("has-error"),$(e).closest(".help-block").remove()},success:function(e){e.closest(".form-group").removeClass("has-success has-error"),e.closest(".help-block").remove()},rules:{"login-email":{required:!0,email:!0},"login-password":{required:!0,minlength:5}},messages:{"login-email":"Please enter your account's email","login-password":{required:"Please provide your password",minlength:"Your password must be at least 5 characters long"}}})}}}();