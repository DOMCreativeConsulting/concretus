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
                    <input id="editar-id" type="hidden" name="id">
                    <div class="col-md-4"><input id="editar-nome" type="text" class="form-control" name="nome" placeholder="Nome"></div>
                    <div class="col-md-4"><input id="editar-cnpj" type="text" class="form-control" name="cnpj" placeholder="Cnpj"></div>
                    <div class="col-md-4"><input id="editar-sirius" type="text" class="form-control" name="sirius" placeholder="Código sirius"></div>
                    <div class="col-md-4"><input id="editar-responsavel" type="text" class="form-control" name="responsavel" placeholder="Responsavel"></div>
                    <div class="col-md-4"><input id="editar-site" type="text" class="form-control" name="site" placeholder="Site"></div>
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