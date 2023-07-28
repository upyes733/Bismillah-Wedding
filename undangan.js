const musik = new Audio(); musik.src = "musik.mp3";
musik.loop = true;
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
off.addEventListener('click',  () => {
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

//  

    let countDate = new Date('Aug 9 2023 07:00:00').getTime();

    newYear = () => {
        let now = new Date().getTime();
        let  gap = countDate - now;
    
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
    
    setInterval(function(){
       newYear();
    },1000);
    

