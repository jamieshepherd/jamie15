function toggleNav() {
    var nav = document.getElementById('nav');
    if(nav.className != 'visible') {
        nav.style.opacity = '1.0';
        nav.className = "visible"
    } else {
        nav.style.opacity = '0.0';
        nav.className = ""
    }
}
