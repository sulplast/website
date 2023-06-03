<h3 class="h3">Formulário de denúncias</h3>
<p>Caso queira relatar alguma denúncia, utilize o formulário abaixo. Os campos marcados com * são obrigatórios</p>

<?php echo Form::open(['url' => url()->current(), 'method' => 'post', 'files' => true]); ?>


    <div class="form-group">
        <?php echo Form::label('nome', 'Nome', ['class' => 'control-label']); ?>

        <?php echo Form::text('nome', null, ['class' => 'form-control-sulplast mask-text-only']); ?>

    </div>

    <div class="row form-group">
        <div class="col-lg-7">
            <?php echo Form::label('email', 'E-mail', ['class' => 'control-label']); ?>

            <?php echo Form::email('email', null, ['class' => 'form-control-sulplast']); ?>

        </div>
        <div class="col-lg-5">
            <?php echo Form::label('telefone', 'Telefone', ['class' => 'control-label']); ?>

            <?php echo Form::text('telefone', null, ['class' => 'form-control-sulplast mask-telefone']); ?>

        </div>
    </div>

    <div class="form-group">
        <?php echo Form::label('motivo', 'Motivo da denúncia *', ['class' => 'control-label']); ?>

        <?php echo Form::select('motivo', [
            '' => 'Por favor, selecione...', 
            'Assédio' => 'Assédio', 
            'Corrupção' => 'Corrupção', 
            'Discriminação' => 'Discriminação', 
            'Fraude' => 'Fraude', 
            'Furto/Roubo' => 'Roubo/Furto', 
            'Privacidade de Dados' => 'Privacidade de Dados', 
            'Propriedade Intelectual' => 'Propriedade Intelectual', 
            'Denúncias Ambientais' => 'Denúncias Ambientais', 
            'Outros' => 'Outros'
        ], null, ['class' => 'form-control-sulplast']); ?>

    </div>
    
    <div class="form-group">
        <?php echo Form::label('oque_aconteceu', 'O que aconteceu? *', ['class' => 'control-label']); ?>

        <?php echo Form::textarea('oque_aconteceu', null, ['class' => 'form-control-sulplast', 'rows' => 3]); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('quando_aconteceu', 'Quando aconteceu? *', ['class' => 'control-label']); ?>

        <?php echo Form::textarea('quando_aconteceu', null, ['class' => 'form-control-sulplast', 'rows' => 3]); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('outras_informacoes', 'Outras informações', ['class' => 'control-label']); ?>

        <?php echo Form::textarea('outras_informacoes', null, ['class' => 'form-control-sulplast', 'rows' => 3]); ?>

    </div>
    
    <fieldset class="my-3">
        <div class="form-group">
            <?php echo Form::label('arquivo', 'Anexar arquivo', ['class' => 'control-label']); ?>

            <?php echo Form::file('arquivo'); ?>

            <small class="text-muted my-1">Utilize o botão acima para anexar arquivos que contenham informações relevantes sobre a sua denúncia. <strong>Formatos aceitos: PDF, DOC e DOCX com no máximo 2MB.</strong></small>
        </div>
    </fieldset>

    <p>Para enviar a sua mensagem é preciso concordar com a nossa <a href="<?php echo e(env('APP_URL')); ?>/pt-br/pdf/politica-privacidade.pdf" target="_blank">Política de Privacidade</a>.</p>

    <div class="row">
        <div class="col-lg-3">
            <div class="radio">
                <label>
                    <input type="radio" name="concordo" id="concordo" value="1">Eu concordo
                </label>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="radio">
                <label>
                    <input type="radio" name="concordo" id="concordo" value="0">Não concordo
                </label>
            </div>
        </div>
    </div>

    <br>
    <hr>

    <div class="form-footer-sulplast">
        <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i>&emsp;Enviar formulário</button>
    </div>

<?php echo Form::close(); ?><?php /**PATH C:\xampp\htdocs\site\app\resources\views/frontend/canal-transparencia/partials/form.blade.php ENDPATH**/ ?>