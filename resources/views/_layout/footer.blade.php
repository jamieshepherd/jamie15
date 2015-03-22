
    <footer>
        <ul class="sitemap">
            <li><i class="fa fa-copyright"></i> 2015</li>
            <li><a href="/">Home</a></li>
            <li><a href="/about">Resume</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="/tutorials">Tutorials</a></li>
            <li><a href="/contact">Contact</a></li>
            @if(Auth::check())<li><a href="/admin"><i class="fa fa-lock"></i> Admin</a></li>@endif
        </ul>
    </footer>
</body>
</html>
