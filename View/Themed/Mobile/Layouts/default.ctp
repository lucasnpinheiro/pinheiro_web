<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php echo Configure::read('Config.Titulo'); ?></title>

        <!-- Bootstrap core CSS -->
        <?php
        echo $this->fetch('meta_tag');
        echo $this->Html->meta('/css/bootstrap.min.css');
        echo $this->Html->css('/css/bootstrap.min.css');
        echo $this->Html->css('/css/bootstrap-theme.min.css');
        echo $this->Html->css('/css/modern-business.css');
        echo $this->Html->css('/font-awesome/css/font-awesome.min.css');
        echo $this->fetch('css');
        $_idiomas = $this->requestAction('conteudos/conteudos_idiomas/get');
        ?>
    </head>

    <body>

        <div class="topo">

            <div class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".top-collapse"><!-- NOTE!  data-toggle was changed to top-collapse -->
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><?php echo $this->Html->image('/img/logo.png'); ?></a>
                    </div>
                    <div class="navbar-collapse collapse top-collapse"><!-- NOTE!  the class top-collapse was added here -->
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="../navbar/">Default</a></li>
                            <li class="active"><a href="./">Static top</a></li>
                            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>

        </div>
        <div class="banner"></div>
        <div class="conteudo"></div>
        <div class="rodape">
            <div class="rodape_nivel_1">
                <div class="col-xs-6">
                    <input type="text" /><img src="/cakePainel/img/pinheiro/seta_news.png" />
                </div>
                <div class="col-xs-6" style="text-align: right;">
                    <span style="background: #1F1F1F; margin: 0; padding: 0; display: inline-block; height: 47px;">
                        <a class="social social_facebbok" href=""></a>
                        <a class="social social_twitter" href=""></a>
                        <a class="social social_google_plus" href=""></a>
                        <a class="social social_linkedin" href=""></a>
                        <a class="social social_flick" href=""></a>
                    </span>
                </div>
            </div>
            <div class="rodape_nivel_2">
                <div class="col-xs-6">
                    Copyright ₢ PinheiroWeb 2013.<br />Designed by Felipe Faggion.
                </div>
                <div class="col-xs-6" style="text-align: right;">
                    <a href="">Home</a> / 
                    <a href="">Empresa</a> / 
                    <a href="">Serviços</a> / 
                    <a href="">Contato</a>
                </div>
            </div>
        </div>

        <?php
        echo $this->Html->script('/js/jquery-1.10.2.min.js');
        echo $this->Html->script('/js/bootstrap.min.js');
        echo $this->Html->script('/js/modern-business.js');
        echo $this->Html->script('/js/jquery.hcaptions.js');
        echo $this->Html->script('/js/scripts.js');
        echo $this->fetch('script');
        echo $this->element('sql_dump');

        echo Configure::read('Social.GoogleAnalytics');
        ?>

    </body>
</html>
