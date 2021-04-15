<!DOCTYPE html>
<html>
<head>
	<title>Formulário de Contato</title>
	<link rel="stylesheet" type="text/css" href="contato.css">
    <link rel="stylesheet" type="text/css" href="../Home/css/style.css" media="screen">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&display=swap" rel="stylesheet">
    <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6Lesd6caAAAAAOMb_uTxoAGkr7TS8bmKGJ31tc8S'
        });
      };
    </script>
</head>

<body>
    <header>
        <div class="center">
            <div class="vó-fundo">
            </div>
            <!--vó-fundo-->
        </div>
        <!--center-->
    </header>

    <nav>
        <div class="center">
            <div class="logo">
                <a href="../Home/index.html">
                    <img src="../Home/imagem/Vó-logo.jpeg">
                </a>
            </div>
            <!--logo-->
            <ul class="menu">
                <li><a href="..//Home/index.html">Home</a></li>
                <li><a href="../Sobre/sobre.html">Sobre</a></li>
                <li><a href="../Projetos/projetos.html">Projetos</a></li>
                <li><a href="../Voluntario/cadastrovoluntario.html">Seja um voluntário</a></li>
                <li><a class="btn-menu" href="../Contato/Contato2.html">Contato</a></li>
                <li><a href="../Doaçao/formulario_doador.html">Doações</a></li>
            </ul>
            <!--menu-->
        </div>
        <!--center-->
    </nav>

    <h1 class="titulo">Contato</h1>
    
<div>
    <div class="info">
        <div class="paragrafos">
            <p class="tel">
                TELEFONE: (12) 3966-2823
            </p>

            <p class="email">
                E-MAIL: administracao@aamu.org.br
            </p>

            <p class="face">
                FACEBOOK: CECOI VÓ MARIA FÉLIX
            </p>

            <p class="horario">
                Horário de Segunda a Sexta das 07:00h ás 17:00h
            </p>
        </div>
    </div>

        <div class="google">
            <p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14660.29387667944!2d-45.8999728!3d-23.27678!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd429ce060f725c70!2sCECOI%20V%C3%B3%20Maria%20F%C3%A9lix!5e0!3m2!1sen!2sbr!4v1617325066947!5m2!1sen!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </p>
        </div>

</div>

<div class="faleconosco">

    <form name="formtest" method="post" action="../Contato/cadastrado_com_sucesso_contato.html">
        <h2 class="faleconosco2">FALE CONOSCO</h2>

        <p class="nome">
            <input type="texte" name="nome" placeholder="Nome:" required="required">
        </p>

        <p class="email">
            <input type="email" name="email" placeholder="E-mail:" required="required">
        </p>

        <p class="assunto">
            <input type="text" name="assunto" placeholder="Telefone:" required="required">
        </p>

        <p class="mensagem">
            <textarea name="mensagem" placeholder="Descreva o motivo do contato:" required="required"></textarea>
        </p>

        <div id="html_element"class="campo center"></div>
                <br>
                <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
                    async defer>
                 </script>
            </fieldset>
                <button class="botao" type="submit">Enviar</button>
</div>  

</form>
<div class="footer">
<div class="footer-inline">
<div class="footer-left">
    <p>Telefone:(12)3966-2833</p>
    <p>Email:administracao@aamu.oemail.br</p>
    <p>Horário de Segunda a Sexta, das 07:00h às 17:00hs</p>
</div>

<div class="footer-right">
    <span>Você pode nos ajudar compartilhando nossa causa</span>
    <span>
        <span>
            <a taemailet="_blank" href="javascript:void(0)" onclick="share()">
                <img class="vó-icons-share"src="../Home/imagem/compartilhar.png" />
            </a>
            
            <img class="vó-icons-share vó-icons-share-insta"src="../Home/imagem/logo-instagram.png" />

            <a taemailet="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/fatecjessenvidal/">
                <img class="vó-icons-share vó-icons-share-face" src="../Home/imagem/logo-facebook.png" >
            </a>

            <a taemailet="_blank" href="https://api.whatsapp.com/send?text=https://www.facebook.com/fatecjessenvidal/">
                <img class="vó-icons-share vó-icons-share-whats" src="../Home/imagem/logo-whatsapp.png" />
            </a>
        </span>
    </span>
    

</div>
</div>


<div class="footer-center">
<p>2021 <a href="">Vó Maria Félix</a> - Todos os direitos reservados.</p>
</div>

<script>
function share(){
    if (navigator.share !== undefined) {
        navigator.share({
            title: 'Maria Vó Félix',
            text: 'Um texto de resumo',
            url: 'https://www.facebook.com/fatecjessenvidal/',
        })
        .then(() => console.log('Successful share'))
        .catch((error) => console.log('Error sharing', error));
    }
}
</script>

</div>
</div>

</body>

</html>