<?php
    require_once __DIR__."/plantillas/url.php";
    require_once __DIR__."/plantillas/cabecera.php";
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
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="palette.php">Palette</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="jumbotron">
            <div class="container">
                <h1>Palette</h1>
                <p>Choose from forty-eight colors for the background and font color</p>
            </div>
        </section>
    </header>
<?php
require_once __DIR__."/plantillas/paleta.php";
require_once __DIR__."/plantillas/footer.php";
require_once __DIR__."/plantillas/pie.php";
?>
