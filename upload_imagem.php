<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
        <link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/all.css">
        <link rel="stylesheet" href="assets/css/font-awesome.css">
        <link href="assets/css/cubeportfolio.min.css" rel="stylesheet" />
        <link id="t-colors" href="skins/default.css" rel="stylesheet" />
        <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
        <title>El Shaday Community - Registro</title>
</head>
<body>

        <nav id="nav-menu-container">
                <ul class="nav-menu">
                  <li class="menu-active"><a href="../community/index.html">Página Inicial</a></li>
                  <li><a href="../community/index.html#team">Responsáveis pelo Projeto</a></li>
                  <li><a href="../community/index.html#call-to-action">Ajuda</a></li>
				  <li><a href="../community/index.html#contact">Links Úteis</a></li>
				  <li><a href="upload_imagem.php">Enviar Fotos</a></li>
              </nav>
              <header>
                    <h1>El Shadday Community</h1>
                    <h2>Um Site para você!</h2>
				</header>
				
				<!-- inserir Texto Aqui -->
<form method="POST" action="proc_upload.php" enctype="multipart/form-data">
	Imagem: <input id="galeria" name="arquivo" type="file"><br><br>
	<input id="galeria" type="submit" value="Mandar Arquivo">
</form>

			<!-- Inserir texto Aqui -->

			<section id="contact">
            <div class="container wow fadeInUp">
              <div class="section-header">
                <h3 id="ctt1" class="section-title">Contato</h3>
                <p id="ctt2" class="section-description">Está com dúvidas? Gostou do nosso projeto e quer contratar os nossos serviços ? Entre em contato com a IADM</p>
              </div>
            </div>
            <div class="container wow fadeInUp mt-5">
<div class="row justify-content-center">

<div class="col-lg-3 col-md-4">

<div class="info">
<div>
<i class="fa fa-map-marker"></i>
<p>Avenida 07 de Setembro<br>Centro, Dianópolis-TO</p>
</div>

<div>
<i class="fa fa-envelope"></i>
<p>iadd@gmail.com</p>
</div>

<div>
<i class="fa fa-phone"></i>
<p>+55 63 99256 6155</p>
</div>
</div>

<div class="social-links">
<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
</div>

</div>

<div class="col-lg-5 col-md-8">
<div class="form">
<div id="sendmessage">Sua Mensagem foi recebida. Obrigado!</div>
<div id="errormessage"></div>
<form action="" method="post" role="form" class="contactForm">
<div class="form-group">
<input type="text" name="name" class="form-control" id="name" placeholder="Digite seu Nome" data-rule="minlen:4" data-msg="Por favor, adicione no minímo 4 caracteres" />
<div class="validation"></div>
</div>
<div class="form-group">
<input type="email" class="form-control" name="email" id="email" placeholder="Digite seu Email" data-rule="email" data-msg="Por favor, indique um email válido" />
<div class="validation"></div>
</div>
<div class="form-group">
<input type="text" class="form-control" name="subject" id="subject" placeholder="Título" data-rule="minlen:4" data-msg="Minímo de 8 caracteres" />
<div class="validation"></div>
</div>
<div class="form-group">
<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensagem"></textarea>
<div class="validation"></div>
</div>
<div class="text-center"><button type="submit">Enviar Mensagem</button></div>
</form>
</div>
</div>

</div>

</div>
</section>

<footer>
<div>
<p>O Site Feito para você!</p>
<p>Copyright 2019™</p>
</div>
</footer>

<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>