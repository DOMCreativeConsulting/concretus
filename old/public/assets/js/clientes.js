$("#sucesso").hide();
$("#erro").hide();

$("#cliente").submit(function(){

    event.preventDefault();

    var dados = $("#cliente").serialize();

    $.post("cadastrar-cliente", dados, response => {
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

$("#cnpj").on("keyup", function(e)
{
    $(this).val(
        $(this).val()
        .replace(/\D/g, '')
        .replace(/^(\d{2})(\d{3})?(\d{3})?(\d{4})?(\d{2})?/, "$1 $2 $3/$4-$5"));
});