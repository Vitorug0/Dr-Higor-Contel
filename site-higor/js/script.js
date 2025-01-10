const buttonAction = (e) => {
    cardTop = e.target.parentNode.parentNode;
    cardBottom = e.target.parentNode.parentNode.lastElementChild;

    console.log(cardBottom);

    cardBottom.classList.add('pops-up');
    cardBottom.addEventListener('mouseleave', () => {
        cardBottom.classList.remove('pops-up');
    })
}

const buttons = document.getElementsByClassName('portfolioButton');
const buttonsArr = [...buttons];

const inicializaButtons = () => {
    buttonsArr.forEach(button => {
        button.addEventListener('click', buttonAction);
    });
}

window.addEventListener('load', inicializaButtons);


const hamburguer = document.getElementsByClassName('hamburguer')[0];
const menuMobile = document.getElementsByClassName('container-menu-mobile')[0];

const alternaMenu = () => {
    hamburguer.classList.toggle('open')
    menuMobile.classList.toggle('open')
}

hamburguer.addEventListener('click', alternaMenu)

const btnCardServ = document.getElementsByClassName('btnCarrosselServ');
const backCardServ = document.getElementsByClassName('back-card-serv');

const changeCardToBack = (e) => {
    // Certifica-se de aplicar a ação ao elemento correto, evitando problemas de perda de evento
    const card = e.target.parentNode;
    card.classList.toggle('not-displayed');
    setTimeout(() => {
        card.nextElementSibling.classList.toggle('not-displayed');
    }, 10); // Pequeno atraso para garantir a transição
};

const changeCardToFront = (e) => {
    const cardBack = e.target.parentNode;
    cardBack.classList.toggle('not-displayed');
    setTimeout(() => {
        cardBack.parentNode.firstElementChild.classList.toggle('not-displayed');
    }, 10); // Pequeno atraso para garantir a transição
};

// Adiciona os eventos
for (let i = 0; i < btnCardServ.length; i++) {
    btnCardServ[i].addEventListener('click', changeCardToBack);
}

for (let i = 0; i < backCardServ.length; i++) {
    backCardServ[i].addEventListener('click', changeCardToFront);
}


const btnVerMais = document.getElementsByClassName('btnVerMais');

const btnDepoimento = document.getElementsByClassName('btnDepoimento')

const bottomCardScreen = document.getElementsByClassName('bottomCardScreen')

const cardPortfolioHandle = (e) => {
    const card = e.target.closest('.card-mobile-portfolio');

    if(card.classList.contains('first')){
        card.classList.replace('first', 'second');
        return;
    }

    if(card.classList.contains('second')){
        card.classList.replace('second', 'third');
        return;
    }
    
    if(card.classList.contains('third')){
        card.classList.replace('third', 'first');
    }
}

const elementsPortfolioNeedEvent = [...btnVerMais, ...btnDepoimento, ...bottomCardScreen]

for(const element of elementsPortfolioNeedEvent){
    element.addEventListener('click', cardPortfolioHandle)
}

const arrows = document.getElementsByClassName('arrow');
const carrosselContent = document.getElementsByClassName('carrossel-content')[0];

let marginLeftController = 1;

const marginLeftLimit = carrosselContent.childElementCount;

carrosselContent.style.width = `${marginLeftLimit}00%`

arrows[0].addEventListener('click', (e) => {

    if(marginLeftController > 1){
        marginLeftController--;

        if(marginLeftController == 1){
            carrosselContent.style.marginLeft = `0px`
        } else {
            carrosselContent.style.marginLeft = `-${marginLeftController}00%`
        }
    }
})

arrows[1].addEventListener('click', (e) => {
    if(marginLeftController < marginLeftLimit){
        marginLeftController++;
        carrosselContent.style.marginLeft = `-${marginLeftController - 1}00%`
    }
})

