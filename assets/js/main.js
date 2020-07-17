nextDate = new Date("August 19, 2020 00:00:00").getTime();
    let countdown = setInterval(() => {
        let now = new Date().getTime();
        let distance = nextDate - now;
        
        let days = Math.floor(distance / (1000*60*60*24));
        let hours = Math.floor((distance % (1000*60*60*24)) / (1000*60*60));
        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.querySelector('#days').innerHTML = days;
        document.querySelector('#hours').innerHTML = hours;
        document.querySelector('#minutes').innerHTML = minutes;
        document.querySelector('#seconds').innerHTML = seconds;
    }, 1000);



// SUBMIT SUCCESS FUNCTIONALITY
const successBar = document.querySelector('#email-success');
const showSuccessBar = () => {
    successBar.style.display = 'flex';
    const hideSuccessBar = () => {
        successBar.style.display = 'none';
    }
    setTimeout(hideSuccessBar, 2000);
};


const failureBar = document.querySelector('#email-failure');
const showFailureBar = () => {
    failureBar.style.display = 'flex';
    const hideFailureBar = () => {
        failureBar.style.display = 'none';
    }
    setTimeout(hideFailureBar, 2000);
};



const firstScreens = document.querySelector('#first-screens');
const secondScreens = document.querySelector('#second-screens');
const rightBtn = document.querySelector('#right-btn');
const leftBtn = document.querySelector('#left-btn');
const rightIcon = document.querySelector('#right-icon');
const leftIcon = document.querySelector('#left-icon');

rightBtn.addEventListener('click', showSecond);
leftBtn.addEventListener('click', showFirst);

function showSecond(e) {
    firstScreens.style.display = 'none';
    secondScreens.style.display = 'grid';
    rightIcon.classList.toggle('pressed');
    leftIcon.classList.toggle('pressed');
}

function showFirst(e) {
    secondScreens.style.display = 'none';
    firstScreens.style.display = 'grid';
    rightIcon.classList.toggle('pressed');
    leftIcon.classList.toggle('pressed');
}

setTimeout(function() {
    $('.loader_bg').fadeToggle();
},1500)