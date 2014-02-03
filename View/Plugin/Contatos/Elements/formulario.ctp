<div class="row">
    <div class="col-xs-12 texto-borda">
        <h2 class="texto-titulo">Contato</h2>
        <div  class="texto-sub-titulo">Campos com (*) são de preenchimento obrigatório.</div>
        <?php
        echo $this->Form->create('Contatos.Contato', array('url' => '/contatos/contatos/enviar', 'type' => 'file'));

        echo $this->Form->input('redirect', array('type' => 'hidden', 'value' => ''));
        echo $this->Form->input('exibir', array('type' => 'hidden', 'value' => ''));
        echo $this->Form->input('status', array('type' => 'hidden', 'value' => 1));
        echo '<div class="col-xs-12 col-md-6">';
        echo $this->Form->input('nome', array('label' => false, 'placeholder' => '* Nome', 'style' => 'font-family: arial; font-size: 12px;', 'required' => true));
        echo '</div>';
        echo '<div class="col-xs-12 col-md-6">';
        echo $this->Form->input('email', array('label' => false, 'placeholder' => '* E-mail', 'style' => 'font-family: arial; font-size: 12px;', 'required' => true));
        echo '</div>';
        echo '<div class="col-xs-12 col-md-6">';
        echo $this->Form->input('telefone', array('label' => false, 'placeholder' => '* Telefone', 'style' => 'font-family: arial; font-size: 12px;', 'required' => true));
        echo '</div>';
        echo '<div class="col-xs-12 col-md-6">';
        echo $this->Form->input('tipo', array('label' => false, 'placeholder' => '* Assunto', 'style' => 'font-family: arial; font-size: 12px;', 'required' => true));
        echo '</div>';
        echo '<div class="col-xs-12 col-md-6">';
        echo $this->Form->input('mensagem', array('label' => false, 'placeholder' => '* Descricao', 'style' => 'font-family: arial; font-size: 12px;', 'required' => true, 'rows' => 10));
        echo '</div>';
        echo '<div class="col-xs-12 col-md-6">';
        $this->Captcha->render($captchaSettings);
        echo '</div>';
        echo '<div class="col-xs-12 col-md-6">';
        echo $this->Form->end(array('name' => 'Enviar', 'label' => 'Enviar', 'class' => 'btn btn-info btn-sm', 'div' => array('class' => 'form-group text-right')));
        echo '</div>';
        ?>
    </div>
</div>
<div class="clearfix"></div>