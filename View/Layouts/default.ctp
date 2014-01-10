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

        <div class="topo"></div>
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
