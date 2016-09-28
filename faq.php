<html>
	<head>
		<title>Libre-book</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="icon" type="image/png" href="favicon.png">
		<meta charset="UTF-8">
	</head>
	<body>
		<div class="center title" id="title">
			libr<font color="CadetBlue">e-book</font>
		</div>

		<div class="center very-big">
			<font color="powderblue">Domande Frequenti</font>
		</div>

		<h3 class="q">Chi sei?</h3>
		<blockquote>
			Potete contattarmi all'indirizzo <br>
			<a href="mailto:dpdevelopment@librebook.xyz">dpdevelopment@librebook.xyz</a>
		</blockquote>

		<h3 class="q">Quali file posso caricare?</h3>
		<blockquote>
			Le estensioni accettate sono zip, epub, pbd, fb2, pdf.
			Contattatemi se pensate che siano insufficienti. <br>
			Il limite massimo per la dimensione dei file è di 500MB. Ad ogni modo, è suggerita la compressione.
		</blockquote>

		<h3 class="q">Qual è la causa di Libre-book e perché è così importante?</h3>
		<blockquote>
			I contenuti digitali sono sempre stati soggetti alle critiche degli utenti, perché essi, spesso,
			sono distribuiti in un formato che nega all'utente le <a href="https://www.gnu.org/philosophy/free-sw.html.it">Libertà</a> che gli
			sono dovute. Nessuno degli enti che distribuiscono (previo pagamento) i libri digitali lo fa
			rispettando il nostro diritto alla Libertà. Questa è un'ingiustizia a cui intento
			(contribuire a) porre fine.
		</blockquote>

		<h3 class="q">Dove trovo i libri in un formato libero per poterli caricare?</h3>
		<blockquote>
			Questa è la parte difficile. I libri sono generalmente distribuiti in un formato proprietario
			(soggiogante, non libero). Servirà l'impegno di tutti per liberarli e liberarci. Se hai trovato
			un metodo efficace ed estendibile ad altri libri o pensi di poterlo fare ma non hai gli strumenti, Contattami
		</blockquote>

		<h3 class="q">Quali metodi di pagamento accetti per le donazioni?</h3>
		<blockquote>
			<a href="https://www.paypal.me/makeitrainonme">Paypal</a> e Bitcoin a questo indirizzo:
			<code>
				<?php
					$addrs = array('1JRwqG9Lz9aeWcspHjxKJtSQ8mm3NTGVKa',
						'12L1d8iJ41rJA9cw2uPgwYmL7Kot3xnSmk',
						'1KZVbWygkxbnYCd2dmwuDSuGnnD1MUEc4k',
						'1NRhS9YmLAQGm7uBkDuEec2i11V8KYRKZa',
						'1BZzQNun8wDhSct2rmjBoiyY8PQG5XPsWf',
						'15EeGc6NqFBEfqfnAdxKjxAaAMCWBzSMPj');

					echo($addrs[rand(0, count($addrs) - 1)]);
				?>
			</code>
		</blockquote>

		<span class="bt-r footnote" id="foot">
			DP Development 2016<br>GNU GPL3
		</span>

		<script src="main.js"></script>
	</body>
</html>