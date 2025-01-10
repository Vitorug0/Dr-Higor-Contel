const carousel = document.querySelector('.carousel');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

let currentIndex = 0;
let itemsPerSlide = getItemsPerSlide();
const totalItems = carousel.children.length;

// Atualiza o número de itens por slide ao redimensionar a janela
window.addEventListener('resize', () => {
    itemsPerSlide = getItemsPerSlide();
    currentIndex = Math.min(currentIndex, totalItems - itemsPerSlide); // Ajusta o índice se necessário
    updateCarousel();
});

// Botão anterior
prevBtn.addEventListener('click', () => {
    currentIndex -= itemsPerSlide;
    if (currentIndex < 0) {
        currentIndex = totalItems - (totalItems % itemsPerSlide || itemsPerSlide);
    }
    updateCarousel();
});

// Botão próximo
nextBtn.addEventListener('click', () => {
    currentIndex += itemsPerSlide;
    if (currentIndex > totalItems - itemsPerSlide) {
        currentIndex = 0; // Volta para o início
    }
    updateCarousel();
});

// Função para calcular e aplicar a transição
function updateCarousel() {
    const offset = -currentIndex * (100 / itemsPerSlide);
    carousel.style.transform = `translateX(${offset}%)`;
}

// Determina o número de itens por slide com base no tamanho da tela
function getItemsPerSlide() {
    if (window.innerWidth <= 768) {
        return 1; // Tela pequena: 1 item por slide
    } else if (window.innerWidth <= 1238) {
        return 2; // Tela média: 2 itens por slide
    }
    return 3; // Tela grande: 3 itens por slide
}