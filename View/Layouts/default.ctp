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
            <div class="max-largura">
                <div class="navbar navbar-default">
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
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active fonte"><?php echo $this->Html->link('HOME', '/'); ?></li>
                                <li class="fonte"><?php echo $this->Html->link('EMPRESA', '/empresa'); ?></li>
                                <li class="fonte"><?php echo $this->Html->link('SERVIÇOS', '/servicos'); ?></li>
                                <li class="fonte"><?php echo $this->Html->link('CONTATO', '/contato'); ?></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <div>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <?php echo $this->Html->image('/img/iphone.png'); ?>
                            <div class="carousel-caption">
                                <h3>teste titulo</h3>
                                <p>teste conteudo</p>
                            </div>

                        </div>
                        <div class="item">
                            <?php echo $this->Html->image('/img/iphone.png'); ?>
                        </div>
                        <div class="item">
                            <?php echo $this->Html->image('/img/iphone.png'); ?>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="conteudo">
            <div class="max-largura">
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <div class="rodape">
            <div class="rodape_nivel_1">
                <div class="max-largura">
                    <div class="col-xs-12 col-md-6">
                        <input type="text" placeholder="Newsletter" style="border: none; height: 36px; margin: 0; padding: 3px;" />
                        <?php echo $this->Html->image('/img/seta_news.png', array('style' => 'margin: 0; padding: 0; margin-left: -4px; margin-top: -2px;')); ?>
                    </div>
                    <div class="col-xs-12 col-md-6 rodape_social">
                        <span style="background: #1F1F1F; margin: 0; padding: 0; display: inline-block; height: 47px;">
                            <?php echo $this->Html->link('', Configure::read('Social.LinkFacebook'), array('class' => 'social social_facebbok', 'escape' => false, 'target' => '_blank', 'title' => 'Facebook')); ?>
                            <?php echo $this->Html->link('', Configure::read('Social.LinkTwitter'), array('class' => 'social social_twitter', 'escape' => false, 'target' => '_blank', 'title' => 'Twitter')); ?>
                            <?php echo $this->Html->link('', Configure::read('Social.LinkGooglePlus'), array('class' => 'social social_google_plus', 'escape' => false, 'target' => '_blank', 'title' => 'Google Plus')); ?>
                            <?php echo $this->Html->link('', Configure::read('Social.LinkLinkedin'), array('class' => 'social social_linkedin', 'escape' => false, 'target' => '_blank', 'title' => 'Linkedin')); ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="rodape_nivel_2">
                <div class="max-largura">
                    <div class="col-xs-12 col-md-6 fonte texto_rodape">
                        Copyright &copy; PinheiroWeb 2013.<br />Designed by Felipe Faggion.
                    </div>
                    <div class="col-xs-12 col-md-6 rodape_social">
                        <a class="texto_rodape fonte" href="">HOME</a> | 
                        <a class="texto_rodape fonte" href="">EMPRESA</a> |
                        <a class="texto_rodape fonte" href="">SERVIÇOS</a> | 
                        <a class="texto_rodape fonte" href="">CONTATO</a>
                    </div>
                </div>
                <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Rua+Joaquim+Francisco+Galiano,+109,+Vila+Guiomar,+Ribeir%C3%A3o+Preto+-+S%C3%A3o+Paulo&amp;aq=t&amp;sll=-22.546141,-48.635523&amp;sspn=6.085761,10.821533&amp;ie=UTF8&amp;hq=&amp;hnear=Rua+Joaquim+Francisco+Galiano,+109+-+Vila+Guiomar,+S%C3%A3o+Paulo,+14031-010&amp;ll=-21.202224,-47.828857&amp;spn=0.006002,0.010568&amp;t=m&amp;z=14&amp;iwloc=B&amp;output=embed"></iframe>
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
