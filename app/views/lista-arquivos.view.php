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
                                        <h2 class="title"><i class="fa fa-file"></i> Lista de Arquivos</h2>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">

                                        <table id="tabelaArquivos" class="display compact">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nome</th>
                                                    <th>Status</th>
                                                    <th>Exibir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                            <?php 
                                            $nArquivos = 0;
                                            foreach($arquivos as $arquivo): 
                                            $nArquivos++;
                                            ?>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <tr style="font-size:13px;" id="arquivo-<?=$arquivo->id; ?>">
                                                            <td><?=$nArquivos; ?></td>
                                                            <td id="nome-<?=$arquivo; ?>"><?=$arquivo; ?></td>
                                                            <td><b>Não</b> Lida</td>
                                                            <td>
                                                                <a href="public/files/<?=$arquivo;?>">
                                                                    <button class="btn btn-primary" type="button">
                                                                        <i class="fa fa-file"></i>
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </div>
                                                </div>

                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>

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
<script src="public/assets/js/arquivos.js"></script>