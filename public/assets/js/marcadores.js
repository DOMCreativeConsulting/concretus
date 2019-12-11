$("#marcador").submit(()=>{
    event.preventDefault()
    let dados = $("#marcador").serialize()
    let nome = $("#marcador-nome").val()
    $.post('cadastrar-marcadores', dados)
    .done(()=>{
        $(".lista-marcadores").append(`<li>${nome}<a onclick="atualize();" href="javascript:void(0);"><span class="delete-marker"><i class="fa fa-trash"></i></span></a></li>`)
        exibirSucesso()
    })
})

function deletar(obj)
{
    let r = confirm("Você tem certeza de que deseja excluir permanentemente este marcador?")
    if(!r){
        return
    }
    let id = obj.id
    let dados = {id: id}
    $.post('deletar-marcador', dados)
    .done(()=>{
        $(`#marcador-${id}`).fadeOut(300)
    })
}

function atualize()
{
    alert("Atualize a página para excluir itens recém adicionados!")
}

function exibirSucesso()
{
    $("#sucesso").fadeToggle(300)
    $("#erro").hide()

        window.setTimeout(() => {
            $("#sucesso").fadeToggle(300)

    }, 1500)
}

function addMarker()
{
    alert("adicionando marcador")
}