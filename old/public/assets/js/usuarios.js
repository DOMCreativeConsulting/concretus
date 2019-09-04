$("#sucesso").hide();
$("#erro").hide();

$("#usuario").submit(function(){

    event.preventDefault();

    var dados = $("#usuario").serialize();

    $.post("cadastrar-usuario", dados, response => {
        cliente = JSON.parse(response);
    })

    .done(() => {
        $("#sucesso").fadeToggle(300);
        window.setTimeout(() => {
            $("#sucesso").fadeToggle(300);
        }, 1500);
      })
      .fail(() => $("#erro").show(200));
  
});