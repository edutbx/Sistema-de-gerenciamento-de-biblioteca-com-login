<?php

class estoque
{
    private $codigolivro, $nomelivro, $autorlivro, $editoralivro, $generolivro;

    public function GetCodigo()
    {
        return $this->codigolivro;
    }
    public function SetCodigo($codigo)
    {
        $this->codigolivro = $codigo;
    }

    public function GetNome()
    {
        return $this->nomelivro;
    }
    public function SetNome($nome)
    {
        $this->nomelivro = $nome;
    }

    public function GetAutor()
    {
        return $this->autorlivro;
    }
    public function SetAutor($autor)
    {
        $this->autorlivro = $autor;
    }

    public function GetEditora()
    {
        return $this->editoralivro;
    }
    public function SetEditora($editora)
    {
        $this->editoralivro = $editora;
    }

    public function GetGenero()
    {
        return $this->generolivro;
    }
    public function SetGenero($genero)
    {
        $this->generolivro = $genero;
    }
}
