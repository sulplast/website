<div class="cookies-container" style="display: none;">
    <div class="cookies">
        <div class="cookies-text">
            <span><strong>Atenção:</strong> Utilizamos cookies e tecnologias semelhantes para conhecer nossos usuários, analisar as interações com o site e melhorar a experiência de navegação. Acesse nossa <a href="<?php echo e(env('APP_URL')); ?>/pt-br/pdf/politica-privacidade.pdf">Política de Privacidade</a> para conhecer quais dados são coletados.</span>
        </div>

        <div>
            <button class="btn btn-primary" id="btn-cookies-accept">Aceitar</button>
            <button class="btn btn-primary" id="btn-cookies-deny">Negar</button>
        </div>
    </div>
</div>

<script>
    $(function() {

        if ( localStorage.getItem('cookies-ls') == null ) {

            $('.cookies-container').show();

            $('#btn-cookies-accept').click(function(event) {
                event.preventDefault();
                $('.cookies-container').hide();
                localStorage.setItem('cookies-ls', 'allow');
            })

            $('#btn-cookies-deny').click(function(event) {
                event.preventDefault();
                $('.cookies-container').hide();
                localStorage.setItem('cookies-ls', 'deny');
            })
        }

    }, (jQuery));
</script><?php /**PATH C:\xampp\htdocs\site\app\resources\views/frontend/layouts/cookies.blade.php ENDPATH**/ ?>