<nav onClick="toggleNav()">
    <i class="fa fa-bars"></i><span><strong>JAMIE.SH</strong>EPHERD</span>
</nav>
<ul id="nav">
    <li><a href="/">Home</a></li>
    <li><a href="/resume">Résumé / CV</a></li>
    <li><a href="/blog">Blog</a></li>
    <li><a href="/projects">Projects</a></li>
    <li><a href="/tutorials">Tutorials</a></li>
    <li><a href="/contact">Contact</a></li>
</ul>
<menu id="theme">
    @if(session('theme') == 'light')
        <a href="/settings?theme=dark"><i class="fa fa-moon-o"></i></a>
    @else
        <a href="/settings?theme=light"/><i class="fa fa-sun-o"></i></a>
    @endif
</menu>
