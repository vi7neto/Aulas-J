<?php
/* //Para salvar os dados utilizamos esse código entre php, 
//porém postado aqui ele aparecerá na página do formulário, se 
//estivesse criado um arquivo "sistema.php" apareceria lá nessa 
//página. Mas este código ainda não salva dentro do phpMyAdmin.
//O "print_r" imprime, escreve a informação numa página específica.
//Vamos deixá-lo como comentário:

<?php
if(isset($_POST['submit']))
{
    print_r('Nome:'.$_POST['nome']);
    print_r('<br>');
    print_r('Email:'.$_POST['email']);
    print_r('<br>');
    print_r('Telefone:'.$_POST['telefone']);
    print_r('<br>');
    print_r('Sexo:'.$_POST['genero']);
    print_r('<br>');
    print_r('Data de nascimento:'.$_POST['data_nascimento']);
    print_r('<br>');
    print_r('Cidade:'.$_POST['cidade']);
    print_r('<br>');
    print_r('Estado:'.$_POST['estado']);
    print_r('<br>');
    print_r('Endereço:'.$_POST['endereco']);
} 
?>
*/

//JÁ ESTE MODELO DE CÓDIGOS ABAIXO ENTRE php É O QUE ENVIA E SALVA
//AS INFORMAÇÕES NO BANCO DE DADOS NO phpMyAdmin quando preenchemos
//os dados do formulário na página aberta no localhost/dashboard/
//O include_once('config.php') faz a conexão com o banco de dados,
//trazendo tudo o que está relacionado ao banco.
/* if(isset($_POST['submit']))
{
    include_once('config.php');

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $telefone=$_POST['telefone'];
    $sexo=$_POST['genero'];
    $data_nasc=$_POST['data_nascimento'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    $endereco=$_POST['endereco'];

    $result=mysqli_query($conexao,"INSERT INTO usuarios(nome,senha,email,
    telefone,sexo,data_nasc,cidade,estado,endereco)
    VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc',
    '$cidade','$estado','$endereco')");

    header('Location:formulario.php');
} */
//header é o cabeçalho, aonde inserimos e preenchemos as informações,
//neste caso preenchemos na página do formulário.php.

if(isset($_POST['submit']))
{
    include_once('config.php');

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $telefone=$_POST['telefone'];
    $sexo=$_POST['genero'];
    $data_nasc=$_POST['data_nascimento'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    $endereco=$_POST['endereco'];

    $result=mysqli_query($conexao,"INSERT INTO usuarios(nome,senha,email,
    telefone,sexo,data_nasc,cidade,estado,endereco)
    VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc',
    '$cidade','$estado','$endereco')");

    header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>JLF - Explicadora </title>

</head>

<body>
    <nav>
        <div id="navbar-container">
            <h1 class="logo">JLF Explicadora</h1>
        </div>
    </nav>

    <div class="box">
        <!-- Muito importante! Na linha abaixo já especificamos o método POST
        no formulário -->
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b class="logo2">Formulário de Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
                <br><br>
                <!-- A linha abaixo de código está fazendo uma interligação do
                formulario.php com a página home.php que irá posteriormente
                para a página de login. -->
                <button id="submit"><a href="home.php"style=
                "text-decoration:none;color:white;">Voltar</a></button>
            </fieldset>
        </form>
    </div>
</body>
</html>

