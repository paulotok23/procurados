<?php
include_once 'conexao.php';
if(isset($_POST['save']))
{	 
	 $nome = $_POST['nome'];
	 $usuario = $_POST['usuario'];
	 $senha = $_POST['senha'];
	 $email = $_POST['email'];
	 $sql = "INSERT INTO `usuario` (`nome`, `user`, `senha`, `email`) VALUES ('$nome', '$usuario', MD5('$senha'), '$email')";
	 if (mysqli_query($conn, $sql)) {
	 		echo "";
	 	 } else {
	 		echo "Error: " . $sql . "" . mysqli_error($conn);
	 	 }
	 	 mysqli_close($conn);
	 }
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>&#9733&#9733&#9733Wanted&#9733&#9733&#9733</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="index.php">&#9733&#9733&#9733Wanted&#9733&#9733&#9733</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Login</a>
                </li>
                
            </ul>

        </div>
    </div>
</nav>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login feito com sucesso!</div>
                    <div class="card-body">
                      <a href="index.php">
                      		<button type="submit" class="btn btn-primary">
                      	    	Voltar
                      		</button>
                      </a>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>







</body>
</html>