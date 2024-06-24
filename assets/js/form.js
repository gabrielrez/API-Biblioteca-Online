const form = document.getElementById("book-form");

async function handleForm(event){
  event.preventDefault();
  const titulo = document.getElementById("titulo").value;
  const autor = document.getElementById("autor").value;
  const ano_publicacao = document.getElementById("ano_publicacao").value;
  const genero = document.getElementById("genero").value;

  const livroData = {
    titulo: titulo,
    autor: autor,
    ano_publicacao: ano_publicacao,
    genero: genero
  };

  console.log(livroData);

  try {
    await fetch('http://localhost:8080/livros/add', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(livroData)
    });
  } catch (error) {
    console.error("Erro:", error);
    alert("Erro ao adicionar livro.");
  }
}

form.addEventListener("submit", handleForm);