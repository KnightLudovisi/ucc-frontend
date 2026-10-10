<?php
// Which page is being shown? 
$currentPage = $currentPage ?? '';


// key => [link, label]
	$utilityLinks = [
		'e-services'          => ['/e-services.php',          'E-SERVICES'],
		'student-life'        => ['/student-life.php',        'STUDENT LIFE'],
		'community-extension' => ['/community-extension.php', 'COMMUNITY EXTENSION SERVICES'],
		'admission'           => ['/admission.php',           'ADMISSION'],
		'news'                => ['/news.php',                'NEWS'],
		'alumni'              => ['/alumni.php',              'ALUMNI'],
		'careers'             => ['/careers.php',             'CAREERS'],
	];
?>


<div class="utility-bar">
	<div class="utility-inner">
		<div class="utility-links">
			<?php foreach ($utilityLinks as $key => [$href, $label]): ?>
				<a href="<?= $href ?>"<?= $currentPage === $key ? ' class="active" aria-current="page"' : '' ?>><?= $label ?></a>
			<?php endforeach; ?>
		</div>
	</div>
</div>