@extends('_layout.base')
@section('body')
        <header style="background-image: url('/images/background-macbook.jpg')">
            <h1>Projects</h1>
            <p>Here are some of the things I've been working on.</p>
            <a href="http://github.com/jamieshepherd" class="box"><i class="fa fa-github"></i> View my Github</a>
        </header>
        <section>
            <div class="project">
                <img class="preview" src="/images/tygr.jpg" />
                <div class="description">
                    <h2>Tygr</h2>
                    <h5>Issue and project management</h5>
                    <p>Tygr is a web based open-source issue/amendment management system. It was first developed after seeing an opportunity for making life at Sponge UK easier, replacing the process of tracking client amendments through spreadsheets and powerpoint files. Since then the system has grown to become a robust solution for tracking managing projects and tracking amendments. It's built on top of the popular Laravel 5 framework, with Gulp and Sass to help the development workflow. It's also completely open-source, and actively maintained under the MIT license.</p>
                    <p><strong>Technologies:</strong> <a href="http://laravel.com">Laravel 5</a>, <a href="http://php.net">PHP</a>, <a href="http://mysql.com">MySQL</a>, <a href="http://gulpjs.com">Gulp</a>, <a href="http://sass-lang.com">Sass</a></p>

                    <a href="http://github.com/jamieshepherd/tygr" class="box"><i class="fa fa-github"></i> Github</a>
                </div>
            </div>
        </section>

        <section>
            <div class="project">
                <img class="preview" src="/images/polaris-syntax.jpg" />
                <div class="description">
                    <h2>Polaris</h2>
                    <h5>Syntax theme for Github's Atom editor</h5>
                    <p>Polaris is an Atom syntax theme designed to make coding clear, elegant, and enjoyable. A unique palette was chosen that clearly identifies important parts of your code, but is not distracting and allows you to craft your applications with pleasure. The theme was built purely in CSS on top of Atom's theme framework, which makes it easily adaptable for your own use.</p>
                    <p><strong>Technologies:</strong> <a href="http://atom.io">Atom</a>, <a href="https://developer.mozilla.org/en-US/docs/Glossary/CSS">CSS</a></p>

                    <a href="http://atom.io/themes/polaris-syntax" class="box"><i class="fa fa-arrow-circle-right"></i> View project</a>
                    <a href="http://github.com/jamieshepherd/polaris-syntax" class="box"><i class="fa fa-github"></i> Github</a>
                </div>
            </div>
        </section>

        <section>
            <div class="project">
                <img class="preview" src="/images/adaptionary.jpg" />
                <div class="description">
                    <h2>Adaptionary</h2>
                    <h5>Adapt elearning plugin for Sublime Text 3</h5>
                    <p>Adaptionary is a small project which was the result of working with the Adapt Elearning framework during my time at Sponge UK - one of the developing partners of the framework. Adaptionary makes the process of working with JSON files much easier by providing pre-populated templates and snippets directly in the Sublime Text 3 editor. It makes use of the fuzzy search and snippet framework to make working with the framework incredibly fast. It was released on the default Sublime Package Control channel in 2014.</p>
                    <p><strong>Technologies:</strong> <a href="https://developer.mozilla.org/en-US/docs/Glossary/XML">XML</a>, <a href="http://sublimetext.com">Sublime Text 3</a></p>

                    <a href="https://packagecontrol.io/packages/Adaptionary" class="box"><i class="fa fa-arrow-circle-right"></i> View project</a>
                    <a href="http://github.com/jamieshepherd/adaptionary" class="box"><i class="fa fa-github"></i> Github</a>
                </div>
            </div>
        </section>

        <section>
            <div class="project">
                <img class="preview" src="/images/panther.jpg" />
                <div class="description">
                    <h2>Property Panther</h2>
                    <h5>Desktop and mobile property management</h5>
                    <p>Property Panther is the concept and prototype of a full fledged property management system, developed as part of Plymouth University's Computer Science Year 2 extended project. The brief was to develop a property management solution for students in and around Plymouth. As part of a small team, I designed the initial branding, design concepts for mobile, desktop, and web applications. I then built the back-end RESTful middleware with Java, on top of an Oracle PL/SQL database. I also built the entire web application (a Laravel 4.2 PHP application) from concept to production.</p>
                    <p><strong>Technologies:</strong> <a href="http://laravel.com">Laravel 4.2</a>, <a href="http://php.net">PHP</a>, <a href="http://java.com">Java</a>, <a href="http://www.oracle.com/technetwork/database/features/plsql/index.html">PL/SQL</a>, <a href="https://developer.mozilla.org/en-US/docs/Glossary/HTML5">HTML5</a>, <a href="https://developer.mozilla.org/en-US/docs/Glossary/CSS">CSS3</a></p>

                    <a href="https://plus.google.com/photos/115865257071033861074/albums/5979859132089611313" class="box"><i class="fa fa-arrow-circle-right"></i> View project</a>
                </div>
            </div>
        </section>
@stop
