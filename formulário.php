<?php

if(isset($_POST ['submit']))
{
    print_r('Nome: ' . $_POST ['nome']);
    print_r(<br>):
    print_r('Sobrenome: ' . $_POST ['sobrenome']);
    print_r(<br>):
    print_r('Email: ' .$_POST ['email']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];

    $result = mysqli_query($conexao, "INSERT_INTO usuarios(nome,sobrenome,email) VALUES ($nome,$sobrenome,$email)");

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="formulário.css" media="">
    <title>CPA</title>
</head>

<body>
    <header class="header">
        <img src="download-removebg-preview.png" alt="">


    </header>
    <br><br>
    <div class="campo">
        <h1 id="Titulo">Comissão Própria de Avaliação</h1>
        <br>
    </div>
    </div>
    </div>

    <form action="formulário.php" method="POST">
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome"><strong>Nome</strong></label>
                <input type="text" , name="nome" , id="nome" required>
            </div>
            <div class="campo">
                <label for="sobrenome"><strong>Sobrenome</strong></label>
                <input type="text" , name="sobrenome" , id="sobrenome" required>
            </div>
        </fieldset>
        <br>
        <div>
            <label for="email"><strong>Email</strong></label>
            <input type="email" , name="email" , id="email" required>
        </div>
        <br>
        <br>
        <div class="campo">
            <label><strong>O que você deseja?</strong></label>
            <label>
                <input type="radio" name="devweb" , value="frontend checked">Informar problema
            </label>
            <label>
                <input type="radio" name="devweb" , value="backend">Sugestão
            </label>
            <label>
                <input type="radio" name="devweb" , value="fullstack">Avaliar a atuação da CPA
            </label>
        </div>
        <br>
        <br>
        <div id="check">
            <label for="Escolha"><strong>Em qual área você acha que esse problema se enquadra?</strong></label>
            <br>
            <select id="Escolha">
                <option selected disabled value="">Selecione...</option>
                <option>Admnistrativo</option>
                <option>Docente</option>
                <option>Segurança</option>
                <option>Acadêmico</option>
                <option>Avaliação</option>
                <option>Infraestrutura</option>
            </select>
        </div>
        <br><br>
        <fieldset class="grupo">
            <div class="campo">
                <label><strong>Informe o Bloco:</strong></label><br><br>
                <label></label>
                <input type="radio" name="devweb" , value="BlocoA">Bloco A
                <labeL>
                </label>
                <input type="radio" name="devweb" , value="BlocoB">Bloco B
                </label>
                <label>
                    <input type="radio" name="devweb" , value="BlocoC">Bloco C
                </label>
                <label>
                    <input type="radio" name="devweb" value="BlocoG">Bloco G
                </label>
                <select id="Informe o Bloco">
                    <option>Especifique</option>
                </select>
            </div>
            <div class=campo>
                <br>
                <label><strong>Digite Aqui!</strong></label>
                <textarea row="6" style="width: 26em" id="digite" name="digite aqui"></textarea>
            </div>
        </fieldset>
        <div class="campo">

            <button class="botão" type="submit">Enviar</button>
        </div>
    </form>
    <footer class="rodape">
        <p><strong>Está com dúvidas? Procure pela CPA na instituição.</strong></p>
        </footer>
        <br><br><br>
        <footer class="rodape2">
            <header class="header">
                <img src="download__1_-removebg-preview.png" alt="">
        
        
            </header>
        </footer>
</body>

</html>