$("#botao-cadastrar").click(function(){

    event.preventDefault();

    var dados = $("#cliente").serialize();
    console.log(dados);
    $.post("cadastrar-cliente", dados, response => {
        cliente = JSON.parse(response);
    })

    .done(() => {
        alert("Cadastrado com suecesso!");
      })
      .fail(() => alert("Ocorreu um erro! Tente novamente mais tarde!"));
  
});