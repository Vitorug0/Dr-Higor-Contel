window.flagAp = false; //flag para se os números de infos já apareceram
window.duracaoAnimacao = 3000; //duração da animação dos números de infos

//verifica se um elemento está na tela
const isOnScreen = (el) => {
    let rect = el.getBoundingClientRect() 
    return rect.top > 0 && rect.bottom < window.innerHeight;
}

//anima os números da section infos
const animaNumeros = (el, min, max, dur, flagK) => {
    if(flagAp){
        return;
    }
    
    const intervalFunction = (nr) => {
        if(flagK){
            el.innerHTML = `+${nr}k`;
        } else {
            el.innerHTML = `+${nr}`;
        }
    }

    for(i = min; i <= max; i++){
        setTimeout(intervalFunction, i * dur/max, i);
    
        if(i >= max){
            clearInterval(intervalFunction);
        }
    }
};

const investNumber = document.getElementById('investNumber');
const nps = document.getElementById('nps');
const nProjetos = document.getElementById('nProjetos');
const infos = document.getElementById('infos');

const anima = () => {
    animaNumeros(investNumber, 1, 170, window.duracaoAnimacao, true);
    animaNumeros(nps, 1, 98, window.duracaoAnimacao, false);
    animaNumeros(nProjetos, 1, 50, window.duracaoAnimacao, false);

    window.flagAp = true;
}

//ativa a animação quando aparece na tela
const scrollAnimation = () => {
    if(isOnScreen(infos)){
        anima();
    }
}

//adiciona evento ao scroll
window.addEventListener('scroll', scrollAnimation)
