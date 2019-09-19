$("#sucesso").hide();
$("#erro").hide();

$("#botao-usuario").click(() => {

    let dados = $("#usuario").serialize();

    $.post("cadastrar-usuario", dados, response => {
        cliente = JSON.parse(response);
    })

    .done(() => {
        alert("Cadastrado com sucesso!");
      })
      .fail(() => $("#erro").show(200));
  
});