<div class="escondido popup " id="ver-mais">
    <div class="row popup-content col-md-6 offset-md-4">
        <div class="col-md-12">
            <form id="editar-usuario" method="post" autocomplete="off">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title"><i class="fa fa-edit"></i> Editar dados de Usuário</h2>
                    </div>
                </div>
                <div class="row">
                    <input id="editar-id" type="hidden" name="id">
                    <div class="col-md-4"><input id="editar-nome" type="text" class="form-control" name="nome" placeholder="Nome"></div>
                    <div class="col-md-4"><input id="editar-user" type="text" class="form-control" name="usuario" placeholder="Usuário" autocomplete="off"></div>
                    <div class="col-md-4"><input id="editar-senha" type="password" class="form-control" name="senha" placeholder="Senha"></div>
                    <div class="col-md-4"><input id="editar-cliente" type="text" class="form-control" name="cliente" placeholder="Cliente"></div>
                    <div class="col-md-4"><select name="hierarquia" class="form-control" id="editar-hierarquia"><option value="admin">Administrador</option><option value="user">Usuário</option></select></div>
                    <div class="col-md-4"><input id="editar-email" type="text" class="form-control" name="email" placeholder="Email"></div>
                </div>
            </div>
            <div class="col-md-12">
                <div style="text-align:center" class="row pt30">
                    <div class="col-md-4 pt10"><button type="subtmit" class="btn btn-primary">Salvar</button></div>
                    <div class="col-md-4 pt10"><button type="button" id="botao-deletar" onclick="deletar(this);" class="btn btn-danger">Deletar</button></div>
                    <div class="col-md-4 pt10 close"><button type="button" class="btn btn-secondary">Cancelar</button></div>
                </div>
            </form>
        </div>
    </div>
</div>