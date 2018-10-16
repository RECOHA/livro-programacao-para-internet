// Armazenar a informação na sessão.
sessionStorage.setItem("disciplina", "Programação Web");

// Recuperar a informação da sessionStorage.
var exemplo = sessionStorage.getItem("disciplina");

// Alerta para mostrar o conteúdo armazenado na sessionStorage.
alert(exemplo);

// Exclui o dado do sessionStorage.
sessionStorage.removeItem("disciplina");