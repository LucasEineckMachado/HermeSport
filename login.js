
const container = document.getElementById('container');
const botaoCadastrar = document.getElementById('register');
const botaoEntrar = document.getElementById('login');

botaoCadastrar.addEventListener('click', () => {
    container.classList.add("active");
});

botaoEntrar.addEventListener('click', () => {
    container.classList.remove("active");
});
