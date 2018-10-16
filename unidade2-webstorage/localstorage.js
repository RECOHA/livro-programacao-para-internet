// Armazenar a informação no localStorage.
localStorage.setItem("disciplina", "Programação Web");

// Recuperar
var exemplo = localStorage.getItem("disciplina");

// Alerta para mostrar o conteúdo armazenado no localStorage.
alert(exemplo);

// Exclui o dado do localStorage.
localStorage.removeItem("disciplina");