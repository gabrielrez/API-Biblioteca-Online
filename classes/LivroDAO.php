<?php

require 'Livro.php';
require '../config/Database.php';

class LivroDAO
{
  public function adcionarLivro(Livro $livro)
  {
    $conn = Database::getConn();
    $stmt = $conn->prepare('INSERT INTO livro (titulo, autor, ano_publicacao, genero) VALUES (?, ?, ?, ?)');
    $stmt->bindValue(1, $livro->getTitulo());
    $stmt->bindValue(2, $livro->getAutor());
    $stmt->bindValue(3, $livro->getAnoPublicacao());
    $stmt->bindValue(4, $livro->getGenero());
    $stmt->execute();
  }

  public function listarLivros()
  {
    $conn = Database::getConn();
    $stmt = $conn->prepare('SELECT * FROM livro');
    $stmt->execute();
    $res = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    return $res;
  }

  public function atualizarLivro(Livro $livro)
  {
    $conn = Database::getConn();
    $stmt = $conn->prepare('UPDATE livro SET titulo = ?, autor = ?, ano_Publicacao = ?, genero = ? WHERE id = ?');
    $stmt->bindValue(1, $livro->getTitulo());
    $stmt->bindValue(2, $livro->getAutor());
    $stmt->bindValue(3, $livro->getAnoPublicacao());
    $stmt->bindValue(4, $livro->getGenero());
    $stmt->bindValue(5, $livro->getId());
    $stmt->execute();
  }

  public function removerLivro($id)
  {
    $conn = Database::getConn();
    $stmt = $conn->prepare('DELETE FROM livro WHERE id = ?');
    $stmt->bindValue(1, $id);
    $stmt->execute();
  }
}
