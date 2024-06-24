<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';
require '../classes/LivroDAO.php';

$app = AppFactory::create();
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$app->get('/livros', function (Request $request, Response $response, array $args) {
  $livroDAO = new LivroDAO;
  $livros = $livroDAO->listarLivros();
  $response->getBody()->write(json_encode($livros));
  return $response;
});

$app->post('/livros/add', function (Request $request, Response $response, array $args) {
  $data = $request->getParsedBody();
  $livroDAO = new LivroDAO;
  $livro = new Livro($data['titulo'], $data['autor'], $data['ano_publicacao'], $data['genero']);
  $livroDAO->adicionarLivro($livro);
});

$app->put('/livros/atualizar/{id}', function (Request $request, Response $response, array $args) {
  $data = $request->getParsedBody();
  $livroDAO = new LivroDAO;
  $livro = new Livro($data['titulo'], $data['autor'], $data['ano_publicacao'], $data['genero']);
  $livro->setId($args['id']);
  $livroDAO->atualizarLivro($livro);
});

$app->delete('/livros/remover/{id}', function (Request $request, Response $response, array $args) {
  $livroDAO = new LivroDAO;
  $livroDAO->removerLivro($args['id']);
});

$app->run();
