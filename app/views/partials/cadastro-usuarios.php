<form role="form" id="usuario">

    <div id="cadastro-usuario">

        <div class="row">
            <div class="col-md-4">
                <input id="clienteId" type="hidden" name="clienteId">
                <label for="nome">Nome: </label>
                <input type="text" placeholder="Nome completo do usuário" class="form-control" id="novoUsuario-nome" name="nome" required>
            </div>
            <div class="col-md-4">
                <label for="email">Email: </label>
                <input type="email" placeholder="exemplo@email.com" class="form-control" name="email" required>
            </div>
            <div class="col-md-4">
                <label for="hierarquia">Hierarquia: </label>
                <select class="form-control" name="hierarquia">
                    <option value="user">Usuário</option>
                    <option value="admin">Administrador</option>
                </select>
            </div>
        </div>

        <div class="row pt20">
            <div class="col-md-4">
                <label for="usuario">Usuário: </label>
                <input type="text" placeholder="Nome de usuário. Ex: PauloDF_91" class="form-control" id="novoUsuario-usuario" name="usuario" required>
            </div>
            <div class="col-md-4">
                <label for="senha">Senha: </label>
                <input placeholder="********" type="password" class="form-control" id="novoUsuario-senha" name="senha" required>
            </div>
            <div class="col-md-4">
                <label for="repetir_senha">Repita a senha: </label>
                <input placeholder="********" type="password" class="form-control" id="novoUsuario-repetir_senha" required>
            </div>
        </div>

        <div class="row pt30">
            <div class="col-md-4 offset-md-4">
                <button type="button" id="botao-cadastrar-usuario" class="btn btn-primary full-width">
                    Cadastrar
                </button>
            </div>
        </div>

        <div class="row pt30" id="erro">
            <div class="col-md-12">
                <p style="color:red;text-align:center;">Ocorreu um erro! Tente novamente mais tarde.</p>
            </div>
        </div>

    </div>

</form>