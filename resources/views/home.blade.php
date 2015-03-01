<html>
    <head>
        <title>Jamie 2015</title>
        <link media="all" type="text/css" rel="stylesheet" href="
            @if(session('theme') == 'light')
                {{ elixir("css/light.css") }}
            @else
                {{ elixir("css/dark.css") }}
            @endif
        ">
        <link media="all" type="text/css" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <script src="/js/helpers.js"></script>
        <script src="//use.typekit.net/zun7twj.js"></script>
        <script>try{Typekit.load();}catch(e){}</script>
    </head>
    <body>
        <nav onClick="toggleNav()">
            <i class="fa fa-bars"></i><span><strong>JAMIE.SH</strong>EPHERD</span>
        </nav>
        <ul id="nav">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
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
        <header>
            <h1>Hi.</h1>
            <p>I'm Jamie, a designer and developer from Plymouth, UK.</p>
            <a href="/projects" class="box">View my work</a>
        </header>
        <section>
            <div class="feature">
                <i class="fa fa-tint large"></i>
                <h2>Design</h2>
                <p>I develop user friendly, yet aesthetically pleasing solutions to design problems, and build them with <a href="">HTML5</a> &amp; <a href="">CSS3</a>. I design responsive layouts with a heavy focus on user experience (UX).</p>
            </div>
            <div class="feature">
                <i class="fa fa-code large"></i>
                <h2>Development</h2>
                <p>I utilise server-side languages such as <a href="">PHP</a> and popular frameworks such as <a href="">Laravel</a> to develop enterprise level products for small and large scale projects.</p>
            </div>
            <div class="feature">
                <i class="fa fa-comments-o large"></i>
                <h2>Get in touch</h2>
                <p>You can contact me by sending an email to <a href="">hello@jamie.sh</a> or using the <a href="">contact form</a>. You can also follow me on <a href=""><i class="fa fa-twitter"></i> Twitter</a>, <a href=""><i class="fa fa-github"></i> Github</a> and <a href=""><i class="fa fa-linkedin-square"></i> LinkedIn</a>.</p>
            </div>
        </section>
        <footer>
            <p>Copyright &copy; <strong>Jamie Shepherd</strong> 2015</p>
            <ul class="sitemap">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/projects">Projects</a></li>
                <li><a href="/tutorials">Tutorials</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </footer>
    </body>
</html>
