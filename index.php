<?php
    require_once __DIR__."plantillas/cabecera.php";
?>
<header>
        <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                        <span class="sr-only">Desplegar / Ocultar Menú</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand logo"><img src="img/logo.png" alt="ColorssPalette" class="img-responsive imgLogo"></a>
                </div>
                <!--Inicia menú-->
                <div class="collapse navbar-collapse" id="navbar-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="palette.php">Palette</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="jumbotron">
            <div class="container text-center">
                <img src="img/logo.png" alt="logo" class="imgJBT">
                <p>ColorssPalette</p>
            </div>
        </section>
    </header>

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
        </div>
    </section>
<?php
    require_once __DIR__."plantillas/footer.php";
    require_once __DIR__."plantillas/pie.php";
?>
