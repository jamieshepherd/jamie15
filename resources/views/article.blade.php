@extends('_layout.base')
@section('body')
        <header style="background-image: url('/images/uploads/{{ $article->background }}')">
            <h1>{{ $article->title}}</h1>
            <p>{{ $article->created_at->diffForHumans() }}</p>
        </header>
        <section>
            <div class="article">
                <script>hljs.initHighlightingOnLoad();</script>
                {!! (new Parsedown())->text($article->content) !!}
            </div>
            <div class="comments">
                <div id="disqus_thread"></div>
                <script type="text/javascript">
                    /* * * CONFIGURATION VARIABLES * * */
                    var disqus_shortname = 'testetsetsfstest';

                    /* * * DON'T EDIT BELOW THIS LINE * * */
                    (function() {
                        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
            </div>
        </section>
@stop
