/*
 *  Document   : formsWizard.js

 */
var FormsWizard=function(){return{init:function(){var e={focusFirstInput:!0,disableUIStyles:!0,inDuration:0,outDuration:0},a=$("#clickable-wizard");a.formwizard(e),$(".clickable-steps a").on("click",function(){var e=$(this).data("gotostep");a.formwizard("show",e)}),$("#progress-wizard").formwizard(e);var r=$("#progress-bar-wizard");r.css("width","33%").attr("aria-valuenow","33"),$("#progress-wizard").bind("step_shown",function(e,a){"progress-first"===a.currentStep?r.css("width","33%").attr("aria-valuenow","33").removeClass("progress-bar-info progress-bar-success").addClass("progress-bar-danger"):"progress-second"===a.currentStep?r.css("width","66%").attr("aria-valuenow","66").removeClass("progress-bar-danger progress-bar-success").addClass("progress-bar-info"):"progress-third"===a.currentStep&&r.css("width","100%").attr("aria-valuenow","100").removeClass("progress-bar-danger progress-bar-info").addClass("progress-bar-success")}),$("#validation-wizard").formwizard({disableUIStyles:!0,validationEnabled:!0,validationOptions:{errorClass:"help-block animation-slideDown",errorElement:"span",errorPlacement:function(e,a){a.parents(".form-group > div").append(e)},highlight:function(e){$(e).closest(".form-group").removeClass("has-success has-error").addClass("has-error"),$(e).closest(".help-block").remove()},success:function(e){e.closest(".form-group").removeClass("has-success has-error"),e.closest(".help-block").remove()},rules:{"example-validation-username":{required:!0,minlength:2},"example-validation-password":{required:!0,minlength:5},"example-validation-confirm-password":{required:!0,equalTo:"#example-validation-password"},"example-validation-email":{required:!0,email:!0},"example-validation-terms":{required:!0}},messages:{"example-validation-username":{required:"Please enter a username",minlength:"Your username must consist of at least 2 characters"},"example-validation-password":{required:"Please provide a password",minlength:"Your password must be at least 5 characters long"},"example-validation-confirm-password":{required:"Please provide a password",minlength:"Your password must be at least 5 characters long",equalTo:"Please enter the same password as above"},"example-validation-email":"Please enter a valid email address","example-validation-terms":"Please accept the terms to continue"}},inDuration:0,outDuration:0})}}}();