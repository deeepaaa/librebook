<?php
include_once 'tools.php';
$lang = get_lang($_GET['lang'], $_SERVER['HTTP_ACCEPT_LANGUAGE']);
?>

<html>
	<head>
		<title>Libre-book</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="icon" type="image/png" href="favicon.png">
		<meta charset="UTF-8">
	</head>
	<body>
		<?php echo title(); ?>

		<div class="center very-big">
			<font color="#97DAE9">
				<?php echo $lang['faq']; ?>
			</font>
		</div>

		<?php
			$addrs = array('1JRwqG9Lz9aeWcspHjxKJtSQ8mm3NTGVKa',
					'12L1d8iJ41rJA9cw2uPgwYmL7Kot3xnSmk',
					'1KZVbWygkxbnYCd2dmwuDSuGnnD1MUEc4k',
					'1NRhS9YmLAQGm7uBkDuEec2i11V8KYRKZa',
					'1BZzQNun8wDhSct2rmjBoiyY8PQG5XPsWf',
					'15EeGc6NqFBEfqfnAdxKjxAaAMCWBzSMPj');

			end($lang['questions']);
			$lang['questions'][key($lang['questions'])] .= 
				(" <code>" . $addrs[rand(0, count($addrs) - 1)] . "</code>");

			$i = 0;
			foreach ($lang['questions'] as $q => $a) {
				echo '<h3 class="q" id="' . $i . '" onclick="book(event)">' . $q . '</h3>';
				echo '<blockquote>' . $a . '</blockquote>';

				$i++;
			}
		?>

		<script src="point.js"></script>

		<span class="bt-r footnote" id="foot">
			<a href="https://github.com/deeepaaa/librebook">
				DP Development 2016<br>GNU GPL3
			</a>
		</span>

		<span class="bt-l footnote">
		    <?php
		        echo '<a href="res.php?lang=' . $lang['code'] . '">' . $lang['index'] . '</a><br>';
		        echo '<a href="faq.php?lang=' . $lang['code'] . '">' . $lang['cont_faq'] . '</a><br>';
		    ?>
		</span>
	</body>
</html>