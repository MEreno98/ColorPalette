<?php
    require_once __DIR__ . "/plantillas/url.php";
    require_once __DIR__ . "/plantillas/cabecera.php";
    require_once __DIR__ . "/plantillas/header.php";
?>
    <section class="container" >
        <div class="row">
            <article class="col-xs-12">
                <h1>How does it work?</h1>
                <p class="text">
                    You only have to downloaded ColorssPalette, copy in your web page's folder and link the CSS file as you can see below:
                </p>
                <figure class="highlight">
				<pre class="textCD">
<code class="language-html" data-target="html"><span class="tag">&lt;link</span><span> </span><span class="atr">rel</span><span class="sbl">=</span><span class="atrDT">"stylesheet"</span><span> </span><span class="atr">type</span><span class="sbl">=</span><span class="atrDT">"text/css"</span> <span class="atr">href</span><span class="sbl">=</span><span class="atrDT">"colorsspalette.min.css"</span><span class="tag">&gt;</span></code></pre>
                </figure>
            </article>
            <article class="col-xs-12">
                <h1>How to use it?</h1>
                <p class="text">

                </p>
            </article>
            <article class="col-xs-12 text-center">
                <a href="<?php echo url::getRaiz()?>/download/downloadFile.php" class="btn btn-default btn-lg bc-tungsten c-silver">Download ColorssPalette</a>
            </article>
        </div>
    </section>
<?php
    require_once __DIR__ . "/plantillas/footer.php";
    require_once __DIR__ . "/plantillas/pie.php";
?>
