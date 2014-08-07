<html>
<head>
	<link type="application/opensearchdescription+xml" rel="search" href="/osdd.xml" />
</head>
<body>
	<h1>Welcome!</h1>
	<?php if (isset($_GET['q'])) : ?>
		Query: <?= htmlentities($_GET['q']) ?>
	<?php endif; ?>
</body>
</html>
