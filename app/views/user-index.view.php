<?php include 'app/views/partials/head.php'; ?>
<style>
.small-device .right-panel {
    margin-left: 0px !important;
}
.right-panel {
    background: #f1f2f7;
    margin-left: 0px !important;
    margin-top: 55px;
}
</style>
<div id="user-index" class="right-panel">
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
                                        <h2 class="title"><i class="fa fa-file"></i> Lista de Arquivos <br /><small style="font-size:15px;">Caixa de Entrada / <a href="user-arquivados">Arquivados</a></small></h2>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">

                                        <table id="tabelaArquivos" class="display compact">
                                        <label for="selecionar-marcador">Filtrar por marcador</label>
                                        <select name="" class="form-control col-md-2" id="selecionar-marcador">
                                            <?php foreach($marcadores as $marcador): ?>
                                                <option value="<?=$marcador->id;?>"><?=$marcador->nome;?></option>
                                            <?php endforeach; ?>
                                        </select>
                                            <thead>
                                                <tr>
                                                    <th>#Id</th>
                                                    <th>Nome</th>
                                                    <th>Status</th>
                                                    <th>Marcador</th>
                                                    <th>Exibir</th>
                                                    <th>Arquivar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                                <?php foreach($arquivos as $arquivo): ?>
                                                    <?php if($arquivo->status == 'entrada' && $arquivo->sirius == $_SESSION['sirius']): ?>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <tr style="font-size:13px;" class="<?=$arquivo->marcadorId;?>" id="arquivo-<?=$arquivo->id; ?>">
                                                                    <td><b><?=$arquivo->id;?></b></td>
                                                                    <td><b><?=$arquivo->nome; ?></b></td>
                                                                    <td id="leitura-<?=$arquivo->id;?>"><?=$arquivo->lido ? '<b>Lido</b>' : '<b>Não lido</b>'; ?></td>
                                                                    <td>
                                                                        <div id="marker-<?=$arquivo->id;?>" style="display:none;" class="marker-dropdown">
                                                                            <ul style="margin:0px !important;">
                                                                                    <li><b>Marcadores</b></li>
                                                                                    <hr style="margin:0px !important;">
                                                                                <?php foreach($marcadores as $marcador): ?>
                                                                                    <a onclick="trocarMarcador(this);" id="<?=$arquivo->id;?>/<?=$marcador->nome;?>" href="#"><li><?=$marcador->nome;?></li></a>
                                                                                    <hr style="margin:0px !important;">
                                                                                <?php endforeach; ?>
                                                                                    <a class="marker-close" href="#"><li><b>CANCELAR</b></li></a>
                                                                            </ul>
                                                                        </div>
                                                                        <span class="marker-value-<?=$arquivo->id;?>"><i class="fa fa-tag"></i> <?=$arquivo->marcador;?></span>
                                                                        <a style="color:green;font-size:26px;" id="<?=$arquivo->id;?>" onclick="marker(this);" href="#">
                                                                        <i class="fa fa-angle-down"></i></a>
                                                                    </td>
                                                                    
                                                                    <td>
                                                                        <a target="_blank" id="<?=$arquivo->id;?>" onclick="marcarLido(this);" href="public/files/<?=$_SESSION['cnpj'];?>/<?=$_SESSION['sirius'];?>/<?=$arquivo->nome;?>">
                                                                            <img src="public/assets/img/abrir.png" width="30px">
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <a id="<?=$arquivo->id;?>" onclick="arquivar(this);" href="#">
                                                                            <img src="public/assets/img/arquivar.png" width="30px">
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </div>
                                                        </div>

                                                    <?php endif; ?>
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