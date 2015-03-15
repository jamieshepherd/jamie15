function toggleNav() {
    var nav = document.getElementById('nav');
    var wrapper = document.getElementById('wrapper');

    if(nav.className != 'visible') {
        nav.style.left = '0';
        nav.className = 'visible';
        wrapper.className = 'faded';
        foo();
    } else {
        nav.style.left = '-200px';
        nav.className = '';
        wrapper.className = '';
        foo();
    }
}

var foo = window.onscroll = function (){
    var navbtn = document.getElementsByTagName('nav')[0],
        nav    = document.getElementById('nav'),
             t = document.getElementsByTagName('section')[0].getBoundingClientRect().top; // top of main div

    if(t <= 50 && nav.className  == ''){
        console.log('t:'+t);
        navbtn.className = 'pinned';
    } else {
        console.log('t:'+t);
        navbtn.className = '';
    }
}