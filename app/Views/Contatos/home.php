<!doctype html>
<html>
	<head>
		<title>Welcome to CodeIgniter</title>

    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

           
	</head>
	<body>
  <div id="modal" class="modal" >
    <div class="modal-content">
    <div class="row">
    <form class="container">
      <div class="row">
        <div class="input-field col s6 offset-s3">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Usuário</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 offset-s3">
          <i class="material-icons prefix">lock</i>
          <input id="icon_telephone" type="password" class="validate">
          <label for="icon_telephone">Senha</label>
        </div>
      </div>
      <div class="row center">
      <a class="btn-floating pulse"><i class="material-icons">add</i></a>

        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
          <i class="material-icons right">send</i>
        </button>
        
      </div>

     

      
    </form>
  </div>
     
</div>
<script>
 $(document).ready(function(){
    $('#modal').modal();
    $('#modal').modal('open'); 
 });
</script>
	</body>
</html>
