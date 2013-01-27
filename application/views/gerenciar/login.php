<?php
$no_visible_elements = true;

include('header.php');

require '../librarys/classes/Conexao.php';
?>


<?php 

$logar = new librarys_classes_Logar;
$status = $logar->logar();

pint_r($status);

?>
<div class="row-fluid">
    <div class="span12 center login-header">
        <h2>Acesso ao Sistema</h2>
    </div><!--/span-->
</div><!--/row-->

<div class="row-fluid">
    <div class="well span5 center login-box">
        <div class="alert alert-info">
            Por favor, faça o login com seu usuário e senha.
        </div>
        <form class="form-horizontal" action="" method="post">
            <fieldset>
                <div class="input-prepend" title="Usuário" data-rel="tooltip">
                    <span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text" value="" />
                </div>
                <div class="clearfix"></div>

                <div class="input-prepend" title="Senha" data-rel="tooltip">
                    <span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" value="" />
                </div>
                <div class="clearfix"></div>

                <div class="input-prepend">
                    <label class="remember" for="remember"><input type="checkbox" id="remember" />Lembrar senha</label>
                </div>
                <div class="clearfix"></div>

                <div class="input-prepend">
                    <label class="visitante" for="nivel">Visitante
                        <input type="radio" id="nivel" name="nivel" value="visitante" checked="checked" />
                    </label>
                </div>
                <div class="clearfix"></div>

                <div class="input-prepend">
                    <label class="admin" for="nivel">Administrador
                        <input type="radio" id="nivel" name="nivel" value="admin" /></label>
                </div>

                <div class="clearfix"></div>

                <p class="center span5">
                    <input type="submit" name="logar" class="btn btn-primary">Logar no sistema</input>
                </p>
            </fieldset>
        </form>
    </div><!--/span-->
</div><!--/row-->
<?php include('footer.php'); ?>
