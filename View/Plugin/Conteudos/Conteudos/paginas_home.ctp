<div class="col-xs-12">
    <?php
    if (count($conteudos) > 0) {
        echo '<div class="row">';
        foreach ($conteudos as $key => $value) {
            echo '<div class="col-xs-12 texto-borda">';
            //echo '<h1 class="texto-titulo fonte">' . $value['ConteudosArtigo']['titulo'] . '</h1>';
            echo '<p class="lead texto-conteudo">' . $value['ConteudosArtigo']['conteudo'] . '</p>';
            echo '<div class="clearfix"></div>';
            echo '<div class="row">';
            if (count($value['ConteudosMidia']) > 0) {
                foreach ($value['ConteudosMidia'] as $k => $v) {
                    echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" style="padding: 20px 15px;">' . $this->MidiaView->get($v["midia_id"]['Midia']['id'], array('class' => 'col-xs-12 img-responsive', 'link' => $v['link'])) . '</div>';
                }
            }
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    }

    foreach ($metas as $key => $value) {
        $this->Html->meta($key, $value, array('block' => 'meta_tag'));
    }
    ?>
</div>