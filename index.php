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
                    Once you have link the CSS file, you only have to use the class of the color you want to apply to your background or text.
                    If it's a background will be like this:
                </p>
                <figure class="highlight">
				<pre class="textCD"><code class="language-html" data-target="html"><span class="tag">&lt;div</span><span> </span><span class="atr">class</span><span class="sbl">=</span><span class="atrDT">"bc-banana"</span><span class="tag">&gt;</span><span class="txt"> Hello World</span><span class="tag">&lt;/div</span><span class="tag">&gt;</span></code></pre>
                </figure>
                <p class="text">Result:</p>
                <p class="resultado"><div class="bc-banana">Hello world</div> </p>
                <p class="text">
                    If you want to color the text will be like this:
                </p>
                <figure class="highlight">
                    <pre class="textCD"><code class="language-html" data-target="html"><span class="tag">&lt;div</span><span> </span><span class="atr">class</span><span class="sbl">=</span><span class="atrDT">"c-cayenne"</span><span class="tag">&gt;</span><span class="txt"> Hello World</span><span class="tag">&lt;/div</span><span class="tag">&gt;</span></code></pre>
                </figure>
                <p class="text">Result:</p>
                <p class="resultado"><div class="c-cayenne">Hello world</div> </p>
                <p class="text">Now you only have to go to the "Palette" page and choose your favorite color</p>
            </article>
            <article class="col-xs-12 text-center">
                <a href="<?php echo url::getRaiz()?>/download/downloadFile.php" class="btn btn-default btn-lg">Download ColorssPalette</a>
            </article>
        </div>
    </section>
<?php
    require_once __DIR__ . "/plantillas/footer.php";
    require_once __DIR__ . "/plantillas/pie.php";
?>
