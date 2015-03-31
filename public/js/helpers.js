// Toggle nav open or close
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

// Check for the ESC key, if it's pressed, close the nav
window.addEventListener("keyup", function(e){
    if(e.keyCode == 27) {
        var nav = document.getElementById('nav');
        if(nav.className == 'visible') {
            toggleNav();
        }
    }
}, false);

// Reset any strange behaviour that might exist
window.onload = function() {
    toggleNav();
    toggleNav();
}

// Generate a URL slug when we create an article
function generateSlug() {
    var current = document.getElementById('title').value;
    current = current.toLowerCase()
        .replace(/[^\w ]+/g,'')
        .replace(/ +/g,'-');
    document.getElementById('slug').value = current;
}