<?php
require 'assets/php/functions.php';
?>

<!DOCTYPE HTML>

<html>

<head>
	<title>R&Day Sécurité Informatique</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">

	<!-- Header -->
	<div id="header">
		<span class="logo icon fa-paper-plane"></span>
		<h1>R&Day Sécurité Informatique</h1>
		<p>Un événement de sensibilisation à l'état de la sécurité informatique proposé par les CMI Informatique de Besançon</a>
		</p>
	</div>

	<!-- Main -->
	<div id="main">

		<header class="major container medium">
			<h2>Une occasion de mieux comprendre <br> la sécurité informatique</h2>
		</header>

		<div class="box alt container">
			<section class="feature left">
				<a href="#" class="image icon solid fa-search"><img src="images/escape-game.webp" alt="Un escape game" /></a>
				<div class="content">
					<h3><i>Escape game</i></h3>
					<p>
						Dans cet <i>escape game</i>,
						<!-- conçu en partenariat avec <a href="siteweb">nom entreprise</a>, -->
						vous incarnerez une équipe en situation de crise chargée d'arrêter une attaque pirate en temps réel.
					</p>
				</div>
			</section>
			<section class="feature right">
				<a href="#" class="image icon solid fa-microphone"><img src="images/conference.webp" alt="" /></a>
				<div class="content">
					<h3>Conférences</h3>
					<p>
						<ul>
							<li>Thème 1 : Intervenant 1</li>
							<li>Thème 2 : Intervenant 2</li>
							<li>Thème 3 : Intervenant 3</li>
						</ul>
					</p>
				</div>
			</section>
			<section class="feature left">
				<a href="#" class="image icon solid fa-hand-paper"><img src="images/workshop.webp" alt="" /></a>
				<div class="content">
					<h3>Ateliers</h3>
					<p>
						Des ateliers participatifs où vous pourrez manipuler :</p>
					<ul>
						<li>Thème atelier 1</li>
						<li>Thème atelier 2</li>
						<li>Thème atelier 3</li>
					</ul>

				</div>
			</section>
		</div>


		<!-- <div class="box container">
			<header>
				<h2>A lot of generic stuff</h2>
			</header>
			<section>
				<header>
					<h3>Paragraph</h3>
					<p>This is the subtitle for this particular heading</p>
				</header>
				<p>Phasellus nisl nisl, varius id <sup>porttitor sed pellentesque</sup> ac orci. Pellentesque
					habitant <strong>strong</strong> tristique <b>bold</b> et netus <i>italic</i> malesuada <em>emphasized</em> ac turpis egestas. Morbi
					leo suscipit ut. Praesent <sub>id turpis vitae</sub> turpis pretium ultricies. Vestibulum sit
					amet risus elit.</p>
			</section>
			<section>
				<header>
					<h3>Blockquote</h3>
				</header>
				<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget.
					tempus euismod. Vestibulum ante ipsum primis in faucibus.</blockquote>
			</section>
			<section>
				<header>
					<h3>Divider</h3>
				</header>
				<p>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra
					ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
					facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
					tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
					posuere cubilia.</p>
				<hr />
				<p>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra
					ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
					facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
					tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
					posuere cubilia.</p>
			</section>
			<section>
				<header>
					<h3>Unordered List</h3>
				</header>
				<ul class="default">
					<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
					<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
					<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
					<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
				</ul>
			</section>
			<section>
				<header>
					<h3>Ordered List</h3>
				</header>
				<ol class="default">
					<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
					<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
					<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
					<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
				</ol>
			</section>
			<section>
				<header>
					<h3>Table</h3>
				</header>
				<div class="table-wrapper">
					<table class="default">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Description</th>
								<th>Price</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>45815</td>
								<td>Something</td>
								<td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>
								<td>29.99</td>
							</tr>
							<tr>
								<td>24524</td>
								<td>Nothing</td>
								<td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>
								<td>19.99</td>
							</tr>
							<tr>
								<td>45815</td>
								<td>Something</td>
								<td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>
								<td>29.99</td>
							</tr>
							<tr>
								<td>24524</td>
								<td>Nothing</td>
								<td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>
								<td>19.99</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="3"></td>
								<td>100.00</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</section>
		</div> -->
	</div>

	<!-- Footer -->
	<div id="footer">
		<div class="container medium">

			<header class="major last">
				<h2>Voulez-vous nous contacter ?</h2>
			</header>

			<p>N'hésitez pas à nous contacter via ce formulaire pour toute question ou remarque.</p>
			<?php getFlash(); ?>
			<form method="post" action="assets/php/form.php">
				<div class="row">
					<div class="col-6 col-12-mobilep">
						<input type="text" name="name" placeholder="Votre nom" />
					</div>
					<div class="col-6 col-12-mobilep" hidden>
						<input type="email" name="email" placeholder="Email adress" />
					</div>
					<div class="col-6 col-12-mobilep">
						<input type="email" name="email2" placeholder="Votre adresse électronique" />
					</div>
					<div class="col-12">
						<textarea name="message" placeholder="Votre message" rows="6"></textarea>
					</div>
					<div class="col-12">
						<ul class="actions special">
							<li><input type="submit" value="Envoyer le message" /></li>
						</ul>
					</div>
				</div>
			</form>

			<ul class="icons">
				<li><a href="twitter.com/rnday-besancon" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="www.facebook.com/rnday-besancon" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
			</ul>

			<ul class="copyright">
				<li>&copy; CMI Informatique Besançon. Tous droits réservés.</li>
				<li>Design: Nathanaël H. & Fabian D. & <a href="http://html5up.net">HTML5 UP</a></li>
			</ul>

		</div>
	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>
