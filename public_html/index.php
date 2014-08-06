<html>
<head>
	<link type="application/opensearchdescription+xml" rel="search" href="/osdd.xml" />
</head>
<body>
	<?php if (isset($_GET['q'])) : ?>
		Query: <?= htmlentities($_GET['q']) ?>
	<?php endif; ?>
</body>
</html>
