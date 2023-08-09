const musik = new Audio(); musik.src = "musik.mp3";
musik.loop = true;
musik.play();
let on = document.querySelector('.volume-on');
let off = document.querySelector('.volume-off');


on.addEventListener('click', () => {
    if (musik.play) {
        musik.pause();
    }
    else {
        musik.pause();
    }
})
off.addEventListener('click', () => {
    if (musik.pause) {
        musik.play();
    }
    else {
        musik.play();
    }
})

mute = () => {
    on.classList.toggle('toggle');
    off.classList.toggle('toggle');
}

// countdown

let countDate = new Date('Aug 19 2023 07:00:00').getTime();

newYear = () => {
    let now = new Date().getTime();
    let gap = countDate - now;

    let detik = 1000;
    let menit = detik * 60;
    let jam = menit * 60;
    let hari = jam * 24;

    let h = Math.floor(gap / (hari));
    let j = Math.floor((gap % (hari)) / (jam));
    let m = Math.floor((gap % (jam)) / (menit));
    let d = Math.floor((gap % (menit)) / (detik));

    document.getElementById('days').innerHTML = h;
    document.getElementById('hours').innerHTML = j;
    document.getElementById('minutes').innerHTML = m;
    document.getElementById('seconds').innerHTML = d;

}

setInterval(function () {
    newYear();
}, 1000);


// dark mode
const light = document.querySelector('.light');
light.addEventListener('click', function nyala(){
    light.classList.toggle('dark');
    const shape = document.querySelector('.shape');
    shape.classList.toggle('dark');

    const wadah = document.body;
    wadah.classList.toggle('dark');

    const shadowFigure = document.querySelectorAll('figure');
    for( i = 0; i < shadowFigure.length; i++){

        shadowFigure[i].classList.toggle('dark');
    }
   

    const text = document.querySelector('.h1-2');
    text.classList.toggle('dark');

    const time = document.querySelectorAll('.time-selection');
    for(i = 0; i < time.length; i++){
        time[i].classList.toggle('dark');
    }

    const border1 = wadah.querySelectorAll('.box-border');
    for(i = 0; i < border1.length; i++){
        border1[i].classList.toggle('dark');
    }

    const shadowBox = document.querySelector('.title');
    shadowBox.classList.toggle('dark');

    const shadowBottom = document.querySelector('.bungkus-2');
    shadowBottom.classList.toggle('dark');

    const icon = document.querySelectorAll('nav main a');
    for(i = 0; i < icon.length; i++){
        icon[i].classList.toggle('dark');
    }
    const h4 = document.querySelector('.enam .konten h4');
    h4.classList.toggle('dark');
    const h2 = document.querySelector('.enam .konten h2');
    h2.classList.toggle('dark');

});


