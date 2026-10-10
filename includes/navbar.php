<?php
// Which page is being shown? Each page sets $currentPage before including this file.
$currentPage = $currentPage ?? '';

// Helper: returns $class if $page matches the current page, otherwise an empty string.
$is = fn(string $page, string $class = 'active') => $currentPage === $page ? $class : '';

// Helper: true if the current page is any page in the given group (used for dropdown buttons).
$inGroup = fn(array $pages) => in_array($currentPage, $pages, true) ? 'active' : '';
?>
<header class="brand-header">
	<div class="container brand-inner">

		<!-- LEFT LOGOS -->
		<div class="brand-logos">
			<img src="/images/BagongPilipinas.png" alt="Bagong Pilipinas">
			<img src="/images/Caloocan.png" alt="Caloocan City">
			<img src="/images/UCC2.png" alt="University of Caloocan City seal">
		</div>

		<!-- MAIN NAVIGATION -->
		<nav class="main-nav" id="mainNav">
			<div class="nav-inner">
				<div class="nav-links">

					<a href="/homepage.php" class="<?= $is('home') ?>">HOME</a>

					<!-- ABOUT DROPDOWN -->
					<div class="nav-dropdown">
						<button type="button" class="<?= $inGroup(['about', 'regents', 'officials']) ?>"
								aria-haspopup="true" aria-expanded="false">
							ABOUT <span aria-hidden="true">⌄</span>
						</button>
						<div class="dropdown-menu">
							<a href="/about.php" class="<?= $is('about', 'current-page') ?>">About UCC</a>
							<a href="/board-of-regents.php" class="<?= $is('regents', 'current-page') ?>">Board of Regents</a>
							<a href="/executive-officials.php" class="<?= $is('officials', 'current-page') ?>">Executive Officials</a>
						</div>
					</div>

					<!-- ACADEMICS DROPDOWN -->
					<div class="nav-dropdown">
						<button type="button"
								class="<?= $inGroup(['business', 'criminal-justice', 'education', 'engineering', 'law', 'liberal-arts', 'graduate']) ?>"
								aria-haspopup="true" aria-expanded="false">
							ACADEMICS <span aria-hidden="true">⌄</span>
						</button>
						<div class="dropdown-menu academics-menu">
							<a href="/business-accountancy.php" class="<?= $is('business', 'current-page') ?>">College of Business and Accountancy</a>
							<a href="/criminal-justice.php" class="<?= $is('criminal-justice', 'current-page') ?>">College of Criminal Justice Education</a>
							<a href="/education.php" class="<?= $is('education', 'current-page') ?>">College of Education</a>
							<a href="/engineering.php" class="<?= $is('engineering', 'current-page') ?>">College of Engineering</a>
							<a href="/law.php" class="<?= $is('law', 'current-page') ?>">College of Law</a>
							<a href="/liberal-arts-sciences.php" class="<?= $is('liberal-arts', 'current-page') ?>">College of Liberal Arts and Sciences</a>
							<a href="/graduate-school.php" class="<?= $is('graduate', 'current-page') ?>">Graduate School</a>
						</div>
					</div>

					<a href="/campus.php" class="<?= $is('campus') ?>">CAMPUS</a>
					<a href="/contacts.php" class="<?= $is('contacts') ?>">CONTACTS</a>
				</div>

				<!-- SEARCH -->
				<form class="search-box" onsubmit="return false;">
					<input type="search" name="q" placeholder="Search..." aria-label="Search UCC">
					<button type="submit" aria-label="Search">⌕</button>
				</form>
			</div>
		</nav>

		<!-- RIGHT AM LOGO -->
		<img class="am-logo" src="/images/AM-LOGO.png" alt="Aksyon at Malasakit">
	</div>
</header>