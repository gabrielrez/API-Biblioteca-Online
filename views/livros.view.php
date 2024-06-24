<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista Livros</title>
  <link rel="stylesheet" href="../assets/styles/livros.css">
</head>

<body>
  <header>
    <h1>Lista de Livros</h1>
    <button class="add-btn">Adicionar</button>
  </header>
  <ul id="book-list" class="book-list">
  </ul>

  <div class="modal">
    <form id="book-form" method="post" class="modal-box">
      <div class="input">
        <label>Titulo</label>
        <input id="titulo" type="text" placeholder="Titulo do livro" required>
      </div>
      <div class="input">
        <label>Autor</label>
        <input id="autor" type="text" placeholder="Nome do autor" required>
      </div>
      <div class="input">
        <label>Ano de publicação</label>
        <input id="ano_publicacao" type="text" placeholder="Ano-Mes-Dia" required>
      </div>
      <div class="input">
        <label>Gênero</label>
        <input id="genero" type="text" placeholder="Gênero do livro" required>
      </div>
      <button type="submit">Adicionar</button>
    </form>
  </div>

</body>

<script src="../assets/js/livros.js"></script>
<script src="../assets/js/modal.js"></script>
<script src="../assets/js/form.js"></script>

</html>