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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="title"><i class="fa fa-users"></i> Administração de Clientes</h2>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">

                                        <table id="tabelaClientes">
                                            <thead>
                                                <tr>
                                                    <th>#Id</th>
                                                    <th>Nome</th>
                                                    <th>Cnpj</th>
                                                    <th>Código Sirius</th>
                                                    <th>Responsável</th>
                                                    <th>Site</th>
                                                    <th>Email</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($clientes as $cliente): ?>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <tr style="font-size:13px;">
                                                            <td id="id-<?=$cliente->id; ?>"><?=$cliente->id; ?></td>
                                                            <td id="nome-<?=$cliente->id; ?>"><?=$cliente->nome; ?></td>
                                                            <td id="cnpj-<?=$cliente->id; ?>"><?=$cliente->cnpj; ?></td>
                                                            <td id="sirius-<?=$cliente->id; ?>"><?=$cliente->sirius; ?></td>
                                                            <td id="responsavel-<?=$cliente->id; ?>"><?=$cliente->responsavel; ?></td>
                                                            <td id="site-<?=$cliente->id; ?>"><?=$cliente->site; ?></td>
                                                            <td id="email-<?=$cliente->id; ?>"><?=$cliente->email; ?></td>
                                                            <td><a id="<?=$cliente->id; ?>" onclick="editarCliente(this);" href="javascript:void(0)"><i style="color:green;font-size:24px;" class="fa fa-edit"></i></a></td>
                                                        </tr>
                                                    </div>
                                                </div>

                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>

                                        <div class="escondido popup " id="ver-mais">
                                            <div class="row popup-content col-md-6 offset-md-4">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h2 class="title"><i class="fa fa-edit"></i> Editar dados de Cliente</h2>
                                                        </div>
                                                    </div>
                                                    <div class="row">
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
                                                        <div class="col-md-4"><button type="submit" class="btn btn-primary">Salvar</button></div>
                                                        <div class="col-md-4"><button type="submit" class="btn btn-danger">Deletar</button></div>
                                                        <div class="col-md-4 close"><button type="submit" class="btn btn-warning">Cancelar</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

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
<script src="public/assets/js/administracaoClientes.js"></script>