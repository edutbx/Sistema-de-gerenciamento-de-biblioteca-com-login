<?php
session_start();
if((!isset($_SESSION['usuario']))==true && (!isset($ss_SESSION['senha']))== true){
    header('location:index.php');
}
$macaquinhos=$_SESSION['usuario'];




include 'livrosdao.php';

$livrosdao = new livrosdao();
$abner = $livrosdao->consultar();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Livros</title>

</head>

<body>
<div class='cabecalho'>
    <p><h1>Biblioteca 🕮🕮🕮🕮</h1></p>
    </div>
    <div class='maior'>
    <div class='div1'>
        <p><h3>Cadastre ou atualize o seu livro já!📚📚📚</h3></p>
    <form action="livroscontroller.php" method="post">
        <label for="codigolivro">Código</label><br>
        <input type="text" name="codigolivro"><br>
        <label for="nomelivro">Nome</label><br>
        <input type="text" name="nomelivro"><br>
        <label for="autorlivro">Autor</label><br>
        <input type="text" name="autorlivro"><br>
        <label for="editoralivro">Editora</label><br>
        <input type="text" name="editoralivro"><br>
        <label for="generolivro">Gênero</label><br>
        <input type="text" name="generolivro"><br>
        
        <p><input type='submit' name='acao' value='cadastrar'></p>
        <p><input type='submit' name='acao' value='apagar'></p>
        <p><input type='submit' name='acao' value='atualizar'></p>
    </form>

    <form action="deslogar.php" method="post">
        <input type="submit" value="deslogar">
    </form>

    </div>

    <div class="tabela">
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Autor</th>
            <th>Editora</th>
            <th>Gênero</th>
        </tr>
        
        <?php
        foreach ($abner as $linha) :
        ?>
            <tr>
                <td><?php echo $linha['codigolivro'] ?></td>
                <td><?php echo $linha['nomelivro'] ?></td>
                <td><?php echo $linha['autorlivro'] ?></td>
                <td><?php echo $linha['editoralivro'] ?></td>
                <td><?php echo $linha['generolivro'] ?></td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>
    </div>
    </div>  
</body>

</html>