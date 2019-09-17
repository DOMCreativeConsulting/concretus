<div class="escondido popup " id="ver-mais">
    <div class="row popup-content col-md-6 offset-md-4">
        <div class="col-md-12">

            <form id="editar-cliente" method="post">

                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title"><i class="fa fa-edit"></i> Editar dados de Cliente</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 offset-md-4" style="padding-bottom:30px;">
                        <button type="button" class="btn btn-primary" id="botao-dados" disabled>Dados</button>
                        <button type="button" class="btn btn-primary" id="botao-usuarios">Usuários</button>
                    </div>
                </div>

                <div class="dados">
                    <div class="row">
                        <input id="editar-id" type="hidden" name="id">
                        <div class="col-md-4">
                            <label for="nome">Nome:</label>
                            <input id="editar-nome" type="text" class="form-control" name="nome" placeholder="Nome">
                        </div>
                        <div class="col-md-4">
                            <label for="cnpf">CNPJ:</label>
                            <input id="editar-cnpj" type="text" class="form-control" name="cnpj" placeholder="Cnpj">
                        </div>
                        <div class="col-md-4">
                            <label for="sirius">Sirius:</label>
                            <input id="editar-sirius" type="text" class="form-control" name="sirius" placeholder="Código sirius">
                        </div>
                    </div>

                    <div class="row" style="padding-top:20px;">
                        <div class="col-md-4">
                            <label for="responsavel">Responsável:</label>
                            <input id="editar-responsavel" type="text" class="form-control" name="responsavel" placeholder="Responsavel">
                        </div>
                        <div class="col-md-4">
                            <label for="site">Site:</label>
                            <input id="editar-site" type="text" class="form-control" name="site" placeholder="Site">
                        </div>
                        <div class="col-md-4">
                            <label for="email">Email:</label>
                            <input id="editar-email" type="text" class="form-control" name="email" placeholder="Email">
                        </div>
                    </div>
                </div>

                <div class="row usuarios">
                    <div class="col-md-10 offset-md-1">
                        <table id="tabela-usuarios" class="table">
                            <thead>
                                <th>Nome</th>
                                <th>Usuário</th>
                                <th>Senha</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td id="nome"></td>
                                    <td id="usuario"></td>
                                    <td id="senha"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row pt30 dados" style="text-align:center">
                    <div class="col-md-4 pt10">
                        <button type="button" class="btn btn-primary">Salvar</button>
                    </div>
                    <div class="col-md-4 pt10">
                        <button type="button" id="botao-deletar" onclick="deletar(this);" class="btn btn-danger">Deletar</button>
                    </div>
                    <div class="col-md-4 pt10 close">
                        <button type="button" class="btn btn-secondary">Cancelar</button>
                    </div>
                </div>

                <div class="row pt30 usuarios" style="text-align:center">
                    <div class="col-md-4 pt10">
                        <button type="button" class="btn btn-primary">Novo</button>
                    </div>
                    <div class="col-md-4 pt10 close">
                        <button type="button" class="btn btn-secondary">Cancelar</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>