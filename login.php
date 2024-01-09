<?php
    include('./conexao.php');

    if(isset($_POST['nome']) || isset($_POST['senha'])){
     
      if(strlen($_POST['nome']) == 0){
         
        
        echo "<br><br>rPreencha seu nome";
        //<script> alert "Preencha seu email"; </script>
       // <script> alert " echo "Preencha seu email"; " </script>
         
      } else if(strlen($_POST['senha']) == 0){
        
         
        echo "<br><br>preencha sua senha";
        
      } else {

          $usuario = $mysqli -> real_escape_string($_POST['nome']);
          $senha = $mysqli -> real_escape_string($_POST['senha']);

          $sql_code = "SELECT * FROM funcionario WHERE nome = '$usuario' AND senha = '$senha'";
          $sql_query = $mysqli ->query($sql_code) or die("falha na execusao do codigo sql".$mysqli->error);

          $quantidade = $sql_query->num_rows;
          if($quantidade == 1){
              $usuario = $sql_query->fetch_assoc();
              
              if(!isset($_SESSION)){
                session_start();
              }
              $_SESSION['id'] = $usuario['id'];
              $_SESSION['nome'] = $usuario['nome'];

              header("Location: painel.php");
          }else{
              echo"<br><br>falha ao logar! nome ou senha incorretos";

          }
      }

    }
?>




<!doctype html>
<html lang="en" data-bs-theme="dark" class="h-100">
 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
   
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/js/all.js">
   <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">


     
     <link href="javaScript.js" rel="stylesheet">
  <link href="#" rel="icon">
   <script defer src="javaScript.js"> </script>

   <title>login</title>
   

   
 </head>



 <body class="d-flex align-items-center py-4 bg-gradient-dark h-100">

 
    <main class="w-100 m-auto form-container">
        <form class="wow fadeInUp" action="" method="post">
            <h1 class="h3 mb-3 fw-normal">Entrar no Sistema</h1>
            <div class="form-floating">
                <input type="text" placeholder="digite o seu nome" class="form-control" name="nome" id="nome"/>
                
            </div>
            <br/>
            <div class="form-floating">
                <input type="password" placeholder="digite a sua senha" class="form-control" name="senha" id="senha"/>
                
            </div>
            <div class="form-check text-star my-3">
                <input type="checkbox" class="form-check-input" id="flexCheckDefault">
                <label class="form-check-label" id="flexCheckDefault">Aceitar me</label>
            </div>
            <button class="btn btn-primary w-100 py-2 ">Entrar</button>
            <p class="text-body-secondary mt-5 mb-3">Direitos reservados 2024</p>
        </form>    
    </main>


 <!-- Optional JavaScript -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </body>
</html>