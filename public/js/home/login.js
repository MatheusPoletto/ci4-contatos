$(document).ready(function() {
  var request;

  $("#login_form").submit(function(event) {
     event.preventDefault();

     if (request) {
         request.abort();
     }
     var $form = $(this);
     var $inputs = $form.find("input, select, button, textarea");
     var serializedData = $form.serialize();
     $inputs.prop("disabled", true);
     request = $.ajax({
         url: $form.attr('action'),
         type: "post",
         data: serializedData
     });
      request.done(function (response, textStatus, jqXHR){
        var jResponse = $.parseJSON(response);
        console.log(jResponse); 

        $validacao = $("#valida_login");
        $validacao.html("");
        if(jResponse.errors.login !== undefined){
          $validacao.html($validacao.html() + "<br>" + jResponse.errors.login);
        }


        if(jResponse.errors.senha !== undefined){
          $validacao.html($validacao.html() + "<br>" + jResponse.errors.senha);
        }
          
        if($validacao.html() != ""){
          $validacao.html($validacao.html().replace('<br>', ''));
          $validacao.css("color", "red");
          $validacao.html($validacao.html() + "<br>");
        }




     });
     request.fail(function (jqXHR, textStatus, errorThrown){
         console.error(
             "The following error occurred: "+
             textStatus, errorThrown
         );
     });
     request.always(function () {
         $inputs.prop("disabled", false);
     });
  });

});
