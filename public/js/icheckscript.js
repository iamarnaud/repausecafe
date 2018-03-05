
/* $(document).ready(function(){
$.validate({
    lang: 'fr',
    form : '#font-inscription',
    modules : 'security',
  }); */
  
 /*  $('.input-1, #input-3').iCheck('check'); */

 $(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_flat-red',
    radioClass: 'iradio_flat-red'
  });
});