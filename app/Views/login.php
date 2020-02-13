<!doctype html>
<html>

<head>
    <title>
        <?=$title?>
    </title>

    <link rel="shortcut icon" type="image/png" href="<?=base_url();?>/favicon.ico" />
    <script src="<?=base_url();?>/js/jquery.min.js"></script>
    <link rel="stylesheet" href="<?=base_url();?>/css/materialize.min.css">
    <script src="<?=base_url();?>/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body style="background: rgb(2,0,36);background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);">
    <div class="container">
        <div class="row">
            <div class=" col s6 offset-s3" style="background: white; margin-top: 10%;">

                <div>
                    <form method="post" id="login_form" action="<?=base_url();?>/home/post_login">
                        <br>
                        <h5 align="center">Acessar o sistema</h5>
                    
                        <div class="row">
                            <div class="input-field col s6 offset-s3">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="login" required name="login" type="text" class="validate">
                                <label for="login">Usuário</label>
                                <span class="helper-text" data-error="Preencha este campo!"></span>

                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6 offset-s3">
                                <i class="material-icons prefix">lock</i>
                                <input id="senha" required name="senha" type="password" class="validate">
                                <label for="senha">Senha</label>
                                <span class="helper-text" data-error="Preencha este campo!"></span>

                            </div>
                        </div>
                        <div class="row center">
                            <span id="valida_login" class="helper-text"></span>

                            <button class="btn waves-effect waves-light" type="submit" name="action">Acessar
                                <i class="material-icons right">send</i>
                            </button>

                            <div class="col s12">
                                <p>Novo usuário? <a id="registrar" href="#">Cadastre-se</a>.</p>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="<?=base_url();?>/js/home/login.js" type="text/javascript"></script>
          
</body>

</html>