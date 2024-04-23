<?php
include 'conexao.php';

class livrosdao
{
    public function cadastrar(Estoque $edu)
    {
        $sql = "Insert into estoquelivros (nomelivro, autorlivro, editoralivro, generolivro) values(?,?,?,?)";

        $bc = new Conexao();
        $con = $bc->GetConexao();

        $matheus = $con->prepare($sql);
        $matheus->bindValue(1, $edu->GetNome());
        $matheus->bindValue(2, $edu->GetAutor());
        $matheus->bindValue(3, $edu->GetEditora());
        $matheus->bindValue(4, $edu->GetGenero());

        $resultado = $matheus->execute();

        if ($resultado) {
            echo "livro cadastrado com sucesso<br><br>";
            echo '<a href="livroprincipal.php" id="voltar">Voltar</a>';
        } else {
            echo "erro ao cadastrar o livro<br><br>";
            echo '<a href="livroprincipal.php" id="voltar">Voltar</a>';
        }
    }


    public function consultar()
    {
        $sql = "select * from estoquelivros";

        $bc = new Conexao();
        $con = $bc->GetConexao();

        $matheus = $con->prepare($sql);
        $resultado = $matheus->execute();

        if ($matheus->rowCount()>0) {
            $resultado = $matheus->fetchALL(\PDO::FETCH_ASSOC);
            return $resultado;
        }
    }

    public function atualizar(Estoque $edu)
    {
        $sql = "update estoquelivros set nomelivro=?, autorlivro=?, editoralivro=?, generolivro=? where codigolivro=?";

        $bc = new Conexao();
        $con = $bc->GetConexao();

        $matheus = $con->prepare($sql);
        $matheus->bindValue(1, $edu->GetNome());
        $matheus->bindValue(2, $edu->GetAutor());
        $matheus->bindValue(3, $edu->GetEditora());
        $matheus->bindValue(4, $edu->GetGenero());
        $matheus->bindValue(5, $edu->GetCodigo());

        $resultado = $matheus->execute();

        if ($resultado) {
            echo "livro atualizado com sucesso<br><br>";
            echo '<a href="livroprincipal.php" id="voltar">Voltar</a>';
        } else {
            echo "erro ao atualizar o livro<br><br>";
        }
    }

    public function apagar(Estoque $edu)
    {
        $sql = "delete from estoquelivros where codigolivro=?";

        $bc = new Conexao();
        $con = $bc->GetConexao();

        $matheus = $con->prepare($sql);

        $matheus->bindValue(1, $edu->GetCodigo());

        $resultado = $matheus->execute();

        if ($resultado) {
            echo "livro apagado com sucesso<br><br>";
            echo '<a href="livroprincipal.php" id="voltar">Voltar</a>';
        } else {
            echo "erro ao apagar o livro<br><br>";
            echo '<a href="livroprincipal.php" id="voltar">Voltar</a>';
        }
    }
}
