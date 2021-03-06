<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {

  //Email information
  $admin_email = "toma06pal@gmail.com";
  $email = $_REQUEST['email'];
  $name = $_REQUEST['name'];
  $comment = $_REQUEST['message'];

  //send email
  mail($admin_email, "$name", $message, "From:" . $email);
  }

?><!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>

		<link rel="stylesheet" href="css/bootstrap-grid.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-reboot.css">
		<link rel="stylesheet" href="css/flaticon.css">
		<link rel="stylesheet" href="css/cover.css">
		<link rel="stylesheet" href="css/styles.css">

		<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700" rel="stylesheet">
	</head>

	<body>
		<div class="site-wrapper">
			<div class="site-wrapper-inner">
				<div class="masthead clearfix">
					<div class="inner container">
						<h3 class="masthead-brand">Cover</h3>
						<nav class="nav nav-masthead">
							<a class="nav-link" href="#profil">Mon profil</a>
							<a class="nav-link" href="#parcours">Mon Parcours</a>
							<a class="nav-link" href="#competence">Mes Compétences</a>
							<a class="nav-link" href="#portfolio">Mes travaux</a>
							<a class="nav-link" href="#contact">Me contacter</a>
						</nav>
					</div>
				</div>

				<div class="cover-container">
					<!--
<div class="inner cover">
<h1 class="cover-heading">Thomas Palamara</h1>
<p class="lead mb-md">Développeur Front-End</p>
<p class="lead">
<a href="#profil" class="btn btn-lg btn-secondary">Continuer</a>
<a href="#" class="btn btn-lg btn-secondary ml-md">CV classique</a>
</p>
</div>

-->
					<ul id="techList">
						<li class="html5 fading">html5</li>
						<li class="css3 fading">css3</li>
						<li class="javascript decal_top">javascript</li>
						<li class="jquery decal_bot">jquery</li>
						<li class="wordpress decal_left">wordpress</li>
						<li class="standards decal_bot">standards</li>
						<li class="front decal_right">Front - End</li>
						<li class="photoshop decal_right">Photoshop</li>
						<li class="seo decal_top">seo</li>
						<li class="name decal_left">Thomas Palamara</li>
						<li class="web decal_top">web</li>
						<li class="ajax decal_bot">ajax</li>
						<li class="responsive decal_left">responsive</li>
						<li class="php decal_right">Php browsers</li>
						<li class="dev decal_top">dev</li>
						<li class="resume fading">Résumé</li>
					</ul>
					<a class="scroll" href="#profil"><span></span>Scroll</a>
				</div>

			</div>

		</div>
		<section id="profil" class="bg-light">
			<h2>Mon Profil</h2>
			<div class="container">
				<div class="row">
					<article class="col-lg">
						<h3>Qui suis-je ?</h3>
						<p class="subtitle">La compréhension du monde qui m’entoure à toujours été ma plus grande motivation.
						</p>

						<p>Je suis un passionné de sciences et un geek fan d’informatique, de jeux vidéo, de science fiction et de nouvelles technologies, etc.</p>
						<p>Mon temps libre est bien rempli : </p>
						<ul>
							<li>Lecture de revues scientifiques (particulièrement astronomie et physique atomique) et la conception de systèmes électroniques simples (cube LED et toutes sortes d’applications pour Rasberry PI) pour satifaire ma curiosité scientifique. </li>
							<li>Visionnage de séries et exploration vidéo ludique pour la détente.</li>
						</ul>
					</article>
					<article class="col-lg">
						<h3>D’où je viens ?</h3>
						<p class="subtitle">Mes études en DUT GEII m’ont fait découvrir ma vocation : la&nbsp;Programmation !
						</p>
						<p>Mes rêves d’enfant se réalisaient enfin ! Programmer le fonctionnement de robot de courses, de bras robotiques touilleur de cafés, de microcontroleurs etc. Un nombre infini de possibilités s’offrait à moi. </p>
						<p> Avec le développement d’une application Android, j’ai découvert des applications de programmation plus abstraites, plus immatérielles et moins limitées par les contraintes physiques. Une fois le DUT fini, je me suis dirigé vers une formation qui me correspondait plus : le WEB. </p>
					</article>
				</div>
			</div>

		</section>
		<section id="typing" class="container">
			<div class="scene row">
				<figure class="dib col">
					<div class="actor">
						<div class="actor__prefix">&#60;</div>
						<div id="me" class="actor__content"></div>
					</div>
					<img  id="bgimgvect" src="img/withoutcss.jpg" alt="">
					<img src="img/pcvect.png" alt="">
				</figure>

				<div class="col">

				</div>
			</div>
		</section>
		<section id="parcours" class="bg-dark">
			<div class="container">
				<div class="row">
					<div class="col-lg">
						<h3>Mes Formations :</h3>
						<div class="row">
							<div class="col-auto">
								<i class="flaticon-success green"></i>
							</div>
							<div class="col">
								<h4>2017 : Formation Développeur Front-end</h4>
								<p>
									Formation web Développeur/ Designer au centre de formation Image à Nîmes.
								</p>
							</div>
						</div>
						<div class="row mb-md mt-md">
							<div class="col-auto">
								<i class="flaticon-success blue"></i>
							</div>
							<div class="col">
								<h4>2013 - 2016 : DUT GEII</h4>
								<p>
									Diplome universitaire technologique en Génie Électrique et Informatique Industrielle à l’IUT de Nice (06).
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-auto">
								<i class="flaticon-success red"></i>
							</div>
							<div class="col">
								<h4>2012 : Baccalauréat S</h4>
								<p>
									Bac S SVT spé Math à l’institut Emmanuel D’Alzon, Gard (30).
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg">
						<h3>Mes expériences professionnelles :</h3>
						<div class="row">
							<div class="col-auto">
								<i class="flaticon-success blue"></i>
							</div>
							<div class="col">
								<h4>Stage :</h4>
								<p><strong>Avril à Juin 2015 :</strong> Développement d’une application Android au laboratoire I3S à Sophia Antipolis 06 (2 mois)</p>
								<p><strong>Avril à Juin 2016 :</strong> Conception de boitier de pilotage programmable pour moteur pas à pas (développement d’un programme logiciel embarquées) au centre d’expertise Crouzet Motors à Alès 30 (2 mois)</p>
							</div>
						</div>
						<div class="row mt-md">
							<div class="col-auto">
								<i class="flaticon-success blue"></i>
							</div>
							<div class="col">
								<h4>Projets Tuteurés :</h4>
								<ul>
									<li>» Réalisation d’un asservissement de moteur pas à pas bipolaire (micro-contrôleur Beck).</li>
									<li>» Réalisation d’un robot suiveur de ligne (micro-contrôleur Arduino).</li>
									<li>» Réalisation d’une centrale automatisée biomédicale (FPGA Altera).</li>
									<li>» Rénovation de la partie électronique d’un piano synthétiseur.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="test">
			<div id="integration-text">

			</div>
			<div id="psd-text">

			</div>
			<div id="tools-text">

			</div>
			<div id="web-text">

			</div>
			<div id="communication-text">

			</div>
			<div id="tools-text">

			</div>
			<div id="cache">
				<div class="wrapper opened">
					<ul>
						<li><a class="flaticon-settings" href="#"></a></li>
						<li><a class="flaticon-tools" href="#"></a></li>
						<li><a class="flaticon-html-coding" href="#"></a></li>
						<li><a class="flaticon-photoshop" href="#"></a></li>
						<li><a class="flaticon-web" href="#"></a></li>
						<li><a class="flaticon-communication" href="#"></a></li>
					</ul>
				</div>
			</div>
			<div class="overlay on-overlay"></div>
		</section>
		<section id="competence">
			<div class="container">
				<h2>Mes competences</h2>
				<div class="row">
					<div class="col-6">
						<h3>Web :</h3>
						<ul class="bar-red">
							<li>CSS</li>
							<div><div style="width: 90%"></div></div>
							<li>HTML</li>
							<div><div style="width: 90%"></div></div>
							<li>Bootstrap Framework</li>
							<div><div style="width: 80%"></div></div>
							<li>Sass</li>
							<div><div style="width: 80%"></div></div>
						</ul>
						<ul class="bar-orange">
							<li>Less</li>
							<div><div style="width: 70%"></div></div>
							<li>Photoshop</li>
							<div><div style="width: 70%"></div></div>
							<li>JavaScript</li>
							<div><div style="width: 60%"></div></div>
						</ul>
						<ul class="bar-yellow">
							<li>Foundation Framework</li>
							<div><div style="width: 50%"></div></div>
							<li>Git/Github</li>
							<div><div style="width: 50%"></div></div>
							<li>WordPress</li>
							<div><div style="width: 40%"></div></div>
						</ul>
						<ul class="bar-green">
							<li>Jquery</li>
							<div><div style="width: 20%"></div></div>
							<li>Prestashop</li>
							<div><div style="width: 20%"></div></div>
							<li>PHP</li>
							<div><div style="width: 20%"></div></div>
						</ul>
					</div>
					<div class="col-3">
						<h3>Programmation :</h3>
						<ul class="bar-orange">
							<li>C</li>
							<div><div style="width: 60%"></div></div>
							<li>Microcontrôleur</li>
							<div><div style="width: 60%"></div></div>
						</ul>
						<ul class="bar-yellow">
							<li>Java</li>
							<div><div style="width: 40%"></div></div>
						</ul>
						<ul class="bar-green">
							<li>XML</li>
							<div><div style="width: 30%"></div></div>
							<li>C#</li>
							<div><div style="width: 30%"></div></div>
						</ul>
					</div>
					<div class="col-3">
						<h3>Langues :</h3>
						<ul class="bar-red">
							<li>Français</li>
							<div><div></div></div>
						</ul>
						<ul class="bar-orange">
							<li>Anglais</li>
							<div><div style="width: 80%"></div></div>
						</ul>
						<ul class="bar-green">
							<li>Espagnol</li>
							<div><div style="width: 20%"></div></div>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="portfolio">
			<h2 class="bg-dark">Portfolio</h2>
			<div id="folio-ave">
				<a href="#"></a>
				<div class="container">
					<article class="row">
						<figure class="col-sm-3">
							<img src="img/Sans-titre-1.jpg" alt="">
						</figure>
						<div class="col-sm-4 offset-1 flex-align">
							<h4>Agence Voyage Extreme</h4>
							<p>Site d'une agence de voyage fictive pour des voyage et croisieres dans des pays nordiques et aux pôles</p>
							<span class="tag">Jquery - Bootstrap3 - Responsive Sass</span>
						</div>
						<aside class="flex-align col offset-1">
							<i class="flaticon-right-arrow"></i>
						</aside>
					</article>
				</div>
			</div>

			<div id="folio-leon">
				<a href="#"></a>
				<div class="container">
					<article class="row">
						<figure class="col-sm-3">
							<img src="img/Sans-titre-2.jpg" alt="">
						</figure>
						<div class="col-sm-4 offset-1 flex-align">
							<h4>La cuisine de Léon</h4>
							<p>Site d'un chef à domicile proposant cours, dîners et dégustation de vins</p>
							<span class="tag">Jquery - Bootstrap3 - Responsive Sass</span>
						</div>
						<aside class="flex-align col offset-1">
							<i class="flaticon-right-arrow"></i>
						</aside>
					</article>
				</div>
			</div>
		</section>
		<section id="contact" class="bg-dark">
<!--			<form class="container" action="" method="post" onsubmit="return check()">-->
			<form class="container" action="" method="post">
				<h2>Besoin d'un renseignement ? Une proposition à me faire ? Contactez-moi.</h2>
				<div class="row">
					<div class="form-group col-6">
						<label for="name-input" class="col-2 col-form-label">Nom</label>
						<input class="form-control col" type="text" name="name" value="" id="name-input"  onblur="check(this)" >
					</div>
					<div class="form-group col-6">
						<label for="email-input" class="col-2 col-form-label">Email</label>
						<input class="form-control" type="email" name="email" value="" id="email-input" onblur="check(this)">
					</div>
				</div>

				<div class="form-group row">
					<label for="msg-input" class="col-1 col-form-label">Message</label>
					<textarea class="vam form-control col-10" name="message" id="msg-input" onblur="check(this)"></textarea>
				</div>

				<button type="submit" id="subButton" class="btn btn-default">Envoyer</button>
			</form>
		</section>

		<!-- Bootstrap core JavaScript
================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->


		<!--
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

IE10 viewport hack for Surface/desktop Windows 8 bug
<script src="../docs/assets/js/ie10-viewport-bug-workaround.js"></script>
-->
		<!-- Mes js -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="http://ricostacruz.com/jquery.transit/jquery.transit.min.js"></script>
		<script src="js/theater.min.js"></script>
		<script src="js/scroll.js"></script>
		<script src="js/formCheck.js"></script>
		<script src="js/type.js"></script>
		<script src="js/animations.js"></script>
	</body>
</html>
