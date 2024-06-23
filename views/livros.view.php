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
    <form action="" class="modal-box">
      <div class="input">
        <label>Titulo</label>
        <input type="text" placeholder="Titulo do livro">
      </div>
      <div class="input">
        <label>Autor</label>
        <input type="text" placeholder="Nome do autor">
      </div>
      <div class="input">
        <label>Ano de publicação</label>
        <input type="text" placeholder="Ano-Mes-Dia">
      </div>
      <div class="input">
        <label>Gênero</label>
        <input type="text" placeholder="Gênero do livro">
      </div>
      <button>Adicionar</button>
    </form>
  </div>
</body>

<script src="../assets/js/livros.js"></script>
<script src="../assets/js/modal.js"></script>

</html>