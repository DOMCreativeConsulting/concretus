$("#arquivados").hide();

$(document).ready(() => {

    $('#tabelaArquivos').DataTable({
        "order": [[0, "desc"]],
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

    $('#tabelaArquivados').DataTable({
        "order": [[0, "desc"]],
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

});

function marcarLido(arquivo){

    var arquivos = {id: arquivo.id};

    $.post('marcar-lido', arquivos, response => {

        dados = JSON.parse(response);

        id = dados.id;

        $(`#leitura-${id}`).html('Lido');

    });

}

function arquivar(arquivo){

    var r = window.confirm("Você realmente deseja arquivar este documento?");

    if(r == true){

        var arquivos = {id: arquivo.id};

        $.post('arquivar', arquivos, response => {
    
            dados = JSON.parse(response);
    
            $(`#arquivo-${dados.id}`).hide(300);
    
        });
    
    }
    
}

function desarquivar(arquivo){

    var arquivos = {id: arquivo.id};

    $.post('desarquivar', arquivos, response => {

        dados = JSON.parse(response);

        $(`#arquivo-${dados.id}`).hide(300);

    });

}

$('#mostrar-entrada').click(() => {

    $('#arquivados').hide();
    $('#entrada').fadeIn(300);

});

$('#mostrar-arquivados').click(() => {

    $('#arquivados').fadeIn(300);
    $('#entrada').hide();

});