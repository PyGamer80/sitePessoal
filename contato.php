<?php

    if(isset($_POST['submit']))
    {
        //print_r("NOME: " . $_POST['nome']);
        //print_r("<br>");
        //print_r("SOBRENOME: " . $_POST['sobrenome']);
        //print_r("<br>");
        //print_r("DATA DE NASCIMENTO: " . $_POST['datanasc']);
        //print_r("<br>");
        //print_r("EMAIL: " . $_POST['email']);

        include_once("config.php");

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $nasc = $_POST['nasc'];
        $email = $_POST['email'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, sobrenome, nasc, email) 
        VALUES('$nome', '$sobrenome', '$nasc', '$email')");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styleform.css">
    <script src="https://kit.fontawesome.com/032db8cb18.js" crossorigin="anonymous"></script>
    <title>Contato</title>
</head>
<body>
    <main>
        <!--Nav com nome e icones links-->
        <header>
            <nav>
                
                <h1 class="nome">.lume{</h1>
                
                <div class="links">
                <ul>
                    <li class="linksup"><a href="http://localhost/sitePessoal/index.php">Home</a></li>

                    <li class="linksup"><a href="http://localhost/sitePessoal/sobre.php">Sobre</a></li>

                    <li class="linksup"><a href="http://localhost/sitePessoal/contato.php">Contato</a></li>
                    
                </ul>
                </div>
           </nav> 
        </header>
        <!--Sessões com imagens e textos -->
        <div class="quadro">   
            <form action="contato.php" method="POST">
               

                <div class="quadro2">

                    <div class="titulo">
                        Contate-nos
                    </div>
                    <div class="nome1 campo">
                        <label class="label" for="nome">Nome</label><br>
                        <input  type="text" name="nome" id="nome" required ><br>
                    </div>
                    <div class="sobrenome campo">
                        <label class="label" for="sobrenome">Sobre nome</label><br>
                        <input  type="text" name="sobrenome" id="sobrenome" required ><br>
                    </div>
                    <div class="datanasc campo">
                        <label class="label" for="nasc">Data nascimento</label><br>
                        <input  type="date" name="nasc" id="nasc" required ><br>
                    </div>
                    <div class="email campo">
                        <label class="label" for="email">E-mail</label><br>
                        <input  type="email" name="email" id="email" required ><br>
                    </div>
                    <div class="buttom">
                        <label class="lebel1"  for="submit">Enviar</label><br>
                        <input type="submit"  name="submit" id="submit" class="buttom"  ><br>
                    </div>
                </div>
                
            </form>
        </div>

        <footer>
            <nav>
                
                <h1 class="nome">.lume{</h1>
                
                <div class="icons">
                <ul>
                    <a href="https://github.com/PyGamer80">
                    <li class="linksub"><i class="fa-brands fa-github"></i></li> </a>

                    <a href="https://www.instagram.com/coding.me_/">
                    <li class="linksub"><i class="fa-brands fa-instagram"></i></li></a>

                    <a href="https://www.linkedin.com/in/luciano-mesquita-1bba83243/">
                    <li class="linksub"><i class="fa-brands fa-linkedin"></i></li></a>
                    
                </ul>
                </div>
           </nav> 
        </footer>
       
    </main>
</body>
</html>
