<?php include 'app/views/partials/head.php'; ?>
<?php include 'app/views/partials/sidebar.php'; ?>
<div id="right-panel" class="right-panel">
    <div class="clearfix">
        <?php include 'app/views/partials/header.php'; ?>
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
            
                <div class="row">
                    <div class="col-lg-8 offset-md-2">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="title"><i class="fa fa-users"></i> Cadastro de Clientes</h2>
                                    </div>
                                </div>

                                    <form role="form" id="cliente">

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="nome">Cliente: </label>
                                                <input type="text" class="form-control" name="nome">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="cnpj">CNPJ: </label>
                                                <input type="text" class="form-control" name="cnpj">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="sirius">Código SIRIUS: </label>
                                                <input type="text" class="form-control" name="sirius">
                                            </div>
                                        </div>

                                        <div class="row pt20">
                                            <div class="col-md-4">
                                                <label for="nome-responsavel">Nome Responsável: </label>
                                                <input type="text" class="form-control" name="nome-responsavel">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="site">Site: </label>
                                                <input type="text" class="form-control" name="site">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="email">Email: </label>
                                                <input type="email" class="form-control" name="email">
                                            </div>
                                        </div>

                                        <div class="row pt30">
                                            <div class="col-md-4 offset-md-4">
                                                <button type="submit" id="botao-cadastrar" class="btn btn-primary full-width">
                                                    Cadastrar
                                                </button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
<?php include 'app/views/partials/footer.php'; ?>
<script src="public/assets/js/clientes.js"></script>