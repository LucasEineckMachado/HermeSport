// Dados das unidades
const detalhesUnidades = {
    central: {
        titulo: "Unidade Central",
        descricao: "A Unidade Central de Paranaguá está localizada no coração da cidade.",
        mapa: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.099680062455!2d-48.50461962488358!3d-25.51633518368338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dbfd165bbc8c81%3A0xa1e4a1e4a1e4a1e4!2sCentro%20Hist%C3%B3rico%2C%20Paranagu%C3%A1%20-%20PR!5e0!3m2!1sen!2sbr!4v1699700000000!5m2!1sen!2sbr"
    },
    leste: {
        titulo: "Unidade Leste",
        descricao: "A Unidade Leste oferece equipamentos para esportes aquáticos e de aventura.",
        mapa: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.564783481195!2d-48.48145082488335!3d-25.5167898836833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dbfd17ae9f6d61%3A0xbb8f0bb8f0bb8f0b!2sLitoral%20Leste%2C%20Paranagu%C3%A1%20-%20PR!5e0!3m2!1sen!2sbr!4v1699700000001!5m2!1sen!2sbr"
    },
    sul: {
        titulo: "Unidade Sul",
        descricao: "A Unidade Sul foca em esportes de equipe, oferecendo equipamentos para futebol e basquete.",
        mapa: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3688.4545221542076!2d-48.50830052488419!3d-25.527482483682915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dbfd142e739c8d%3A0xcc8fcc8fcc8fcc8f!2sSul%20de%20Paranagu%C3%A1%2C%20Paranagu%C3%A1%20-%20PR!5e0!3m2!1sen!2sbr!4v1699700000002!5m2!1sen!2sbr"
    }
};

// Selecionar elementos
const modal = document.getElementById("modal-detalhes");
const modalTitulo = document.getElementById("modal-titulo");
const modalDescricao = document.getElementById("modal-descricao");
const modalMapa = document.getElementById("modal-mapa");
const closeBtn = document.querySelector(".close-btn");
const btnDetalhes = document.querySelectorAll(".btn-detalhes");

// Função para abrir o modal com os detalhes e mapa
btnDetalhes.forEach((btn) => {
    btn.addEventListener("click", () => {
        const unidadeId = btn.getAttribute("data-id");
        const detalhes = detalhesUnidades[unidadeId];

        // Atualizar o conteúdo do modal
        modalTitulo.textContent = detalhes.titulo;
        modalDescricao.textContent = detalhes.descricao;
        modalMapa.src = detalhes.mapa;

        // Exibir o modal
        modal.style.display = "flex";
    });
});

// Fechar o modal
closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
});

// Fechar o modal ao clicar fora dele
window.addEventListener("click", (event) => {
    if (event.target === modal) {
        modal.style.display = "none";
    }
});
