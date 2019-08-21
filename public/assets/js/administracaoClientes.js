function editarCliente(cliente){

    $("#ver-mais").show();
    $("#editar-id").val($(`#id-${cliente.id}`).html());
    $("#editar-nome").val($(`#nome-${cliente.id}`).html());
    $("#editar-cnpj").val($(`#cnpj-${cliente.id}`).html());
    $("#editar-sirius").val($(`#sirius-${cliente.id}`).html());
    $("#editar-responsavel").val($(`#responsavel-${cliente.id}`).html());
    $("#editar-site").val($(`#site-${cliente.id}`).html());
    $("#editar-email").val($(`#email-${cliente.id}`).html());
}

$(".close").click(function() {

    $("#ver-mais").hide();

});

$("#editar-cliente").submit(function(){

    event.preventDefault();

    var dados = $("#editar-cliente").serialize();

    $.post('atualiza-cliente', dados, response => {

        cliente = JSON.parse(response);

    }).done(function(){

        $(`#nome-${cliente.id}`).html(cliente.nome);
        $(`#cnpj-${cliente.id}`).html(cliente.cnpj);
        $(`#sirius-${cliente.id}`).html(cliente.sirius);
        $(`#responsavel-${cliente.id}`).html(cliente.responsavel);
        $(`#site-${cliente.id}`).html(cliente.site);
        $(`#email-${cliente.id}`).html(cliente.email);

    }).fail(function(){

        alert("Ocorreu um erro! Tente novamente mais tarde.")

    });

});

$(document).ready( function () {

    $('#tabelaClientes').DataTable({
        "language":{
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ Resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        }
    });

} );