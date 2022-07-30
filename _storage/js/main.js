$(document).ready(function(){

    debug   = $('label[for="debug"]');
    env     = $('form[name="unity"]');
    action  = 'http://localhost/Unity/_source/scripts/mail.php';

    // function resp (datas) {
    //   debug.empty().html('<pre>'+datas+'</pre>');
    // }
    // function unityloading (datas) {
    //   debug.empty().html('<img src="_storage/images/loading.gif" width="20">');
    // }
    // function unityerror (datas) {
    //   debug.empty().html('<pre>Mensagem não enviada!</pre>');
    // }
    // function unitysuccess (datas) {
    //   debug.empty().html('<pre>Mensagem enviada!</pre>');
    // }
    // function unitycomplete (datas) {
    //   setTimeout(function() {
    //     window.location.href = '$redirect';
    //   }, 31000);
    // }


    env.submit(function () {
      $.post(action, $(this).serialize(),function(resp){
        alert(resp);
      });

      return false;

    });

});
