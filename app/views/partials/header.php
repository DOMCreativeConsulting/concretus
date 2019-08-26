<!-- Header-->
<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" href="./"><img src="public/assets/img/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="public/images/logo.png" alt="Logo"></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right">
        <div class="row">
            <div class="col-md-11 center-header">
                <div class="col-md-4 offset-md-8 user-text">
                    <span class="nome"><?=$_SESSION['nome'];?></span><br>
                    <span class="funcao"><?=$_SESSION['hierarquia'] == 'admin' ? 'administrador' : 'usuário';?></span>
                </div>
            </div>
            <div class="col-md-1 user-area dropdown">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" style="float:right;" width="50px" src="public/assets/img/user.png" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="#"><i class="fa fa- user"></i>Perfil</a>

                    <a class="nav-link" href="#"><i class="fa fa -cog"></i>Configurações</a>

                    <a class="nav-link" href="logout"><i class="fa fa-power -off"></i>Sair</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- /#header -->