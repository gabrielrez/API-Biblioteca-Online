<?php

class Livro
{
  private $id;
  private $titulo;
  private $autor;
  private $ano_publicacao;
  private $genero;

  public function __construct($titulo, $autor, $ano_publicacao, $genero)
  {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->ano_publicacao = $ano_publicacao;
    $this->genero = $genero;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getTitulo()
  {
    return $this->titulo;
  }

  public function setTitulo($titulo)
  {
    $this->titulo = $titulo;
  }

  public function getAutor()
  {
    return $this->autor;
  }

  public function setAutor($autor)
  {
    $this->autor = $autor;
  }

  public function getAnoPublicacao()
  {
    return $this->ano_publicacao;
  }

  public function setAnoPublicacao($ano_publicacao)
  {
    $this->ano_publicacao = $ano_publicacao;
  }

  public function getGenero()
  {
    return $this->genero;
  }

  public function setGenero($genero)
  {
    $this->genero = $genero;
  }
}
