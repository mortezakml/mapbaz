$(document).ready(function(){
    
    $('#messagePjax').on('pjax:send', function(){
        loader('#form-message', 'show');
    });
    $('#messagePjax').on('pjax:complete', function(){
        loader('#form-message', 'hide');
    });
    
    $('#product-form-pjax').on('pjax:send', function(){
        loader('#product-form', 'show');
    });
    $('#product-form-pjax').on('pjax:complete', function(){
        loader('#product-form', 'hide');
    });
});