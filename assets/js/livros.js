async function fetchLivros(){
  try{
    const response = await fetch('http://localhost:8080/livros');
    const livros = await response.json();
    const lista = document.querySelector('.book-list');

    livros.forEach(livro =>{
      const item = document.createElement('li');
      item.classList.add("list-item");
      item.innerHTML = `
      <div class="book-title">${livro.titulo}</div>
      <div><strong>Autor:</strong> ${livro.autor}</div>
      <div><strong>Ano de Publicação:</strong> ${livro.ano_publicacao}</div>
      <div><strong>Gênero:</strong> ${livro.genero}</div>
    `;
    lista.appendChild(item);
    });
  }catch (error) {
    console.error('Erro ao buscar os livros:', error);
  }
}

fetchLivros();