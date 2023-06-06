<h3 class="h3">Formulário</h3>
<p>Caso queira entrar em contato conosco, utilize o formulário abaixo. Os campos marcados com * são obrigatórios</p>

{!! Form::open(['url' => url()->current(), 'method' => 'post', 'files' => true]) !!}

    <div class="form-group">
        {!! Form::label('nome', 'Nome completo *', ['class' => 'control-label']) !!}
        {!! Form::text('nome', null, ['class' => 'form-control-sulplast mask-text-only']) !!}
    </div>

    <div class="row form-group">
        <div class="col-lg-7">
            {!! Form::label('email', 'E-mail *', ['class' => 'control-label']) !!}
            {!! Form::email('email', null, ['class' => 'form-control-sulplast']) !!}
        </div>
        <div class="col-lg-5">
            {!! Form::label('telefone', 'Telefone *', ['class' => 'control-label']) !!}
            {!! Form::text('telefone', null, ['class' => 'form-control-sulplast mask-telefone']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('assunto', 'Assunto *', ['class' => 'control-label']) !!}
        {!! Form::text('assunto', null, ['class' => 'form-control-sulplast mask-text-and-number-only']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('mensagem', 'Mensagem *', ['class' => 'control-label']) !!}
        {!! Form::textarea('mensagem', null, ['class' => 'form-control-sulplast', 'rows' => 3]) !!}
    </div>
    
    <fieldset class="my-3">
        <div class="form-group">
            {!! Form::label('arquivo', 'Anexar arquivo (opcional)', ['class' => 'control-label']) !!}
            {!! Form::file('arquivo') !!}
            <small class="text-muted my-1">Utilize o botão acima para anexar arquivos sobre a sua mensagem. <strong>Formatos aceitos: PDF, DOC e DOCX com no máximo 2MB.</strong></small>
        </div>
    </fieldset>

    <p>Para enviar a sua mensagem é preciso concordar com a nossa <a href="{{ env('APP_URL') }}/pt-br/pdf/politica-privacidade.pdf" target="_blank">Política de Privacidade</a>.</p>

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
    <div class="row">
        <div class="col-lg-12">
            <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
        </div>
    </div>
    <hr>

    <div class="form-footer-sulplast">
        <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i>&emsp;Enviar formulário</button>
    </div>

{!! Form::close() !!}

<script src='https://www.google.com/recaptcha/api.js'></script>