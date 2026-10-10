<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>University of Caloocan City | Contacts</title>
	<link rel="icon" type="image/png" href="images/UCC2.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="contacts.css">
	<link rel="stylesheet" href="utility.css">
</head>
<body>
	<div class="page-dots" aria-hidden="true">
		<span class="dot-pattern dot-1"></span>
		<span class="dot-pattern dot-2"></span>
		<span class="dot-pattern dot-3"></span>
		<span class="dot-pattern dot-4"></span>
	</div>



	<?php 
		$currentPage = 'contacts';

		//UTILITY
		require_once __DIR__ . '/includes/utility-bar.php';

		//NAVBAR
		require_once __DIR__ . '/includes/navbar.php'; 
	?>



	<!-- CONTACTS PAGE -->
	<main class="contacts-page">
		<!-- HERO -->
		<section class="contacts-hero">
			<div class="container contacts-hero-inner">
				<div class="contacts-hero-copy">
					<span class="contacts-eyebrow">
						UNIVERSITY OF CALOOCAN CITY
					</span>
					<h1>CONNECT WITH UCC</h1>
					<p>
						Find the right campus, college, or office<br>
						for your questions.
					</p>
					<div class="contacts-hero-buttons">
						<a href="#campus-directory" class="contact-gold-btn">
							VIEW CAMPUS DIRECTORY
							<i data-lucide="arrow-right"></i>
						</a>
						<a href="#office-directory" class="contact-outline-btn">
							SEND AN INQUIRY
							<i data-lucide="mail"></i>
						</a>
					</div>
				</div>
				<!-- HELP BADGE -->
				<div class="contacts-help-badge">
					<i data-lucide="mail"></i>
					<strong>WE'RE HERE</strong>
					<span>TO HELP</span>
				</div>
			</div>
		</section>
		<!-- QUICK CONTACT CARDS -->
		<section class="quick-contact-section">
			<div class="container">
				<div class="quick-contact-grid">
					<div class="quick-contact-card">
						<div class="quick-contact-icon">
							<i data-lucide="phone"></i>
						</div>
						<div>
							<span>CALL UCC</span>
							<strong>8528-4654</strong>
						</div>
					</div>
					<div class="quick-contact-card">
						<div class="quick-contact-icon">
							<i data-lucide="mail"></i>
						</div>
						<div>
							<span>EMAIL US</span>
							<strong>admin@ucc-caloocan.edu.ph</strong>
						</div>
					</div>
					<div class="quick-contact-card">
						<div class="quick-contact-icon">
							<i data-lucide="map-pin"></i>
						</div>
						<div>
							<span>VISIT MAIN CAMPUS</span>
							<strong>Biglang Awa Street</strong>
						</div>
					</div>
					<div class="quick-contact-card">
						<div class="quick-contact-icon">
							<i data-lucide="clock-3"></i>
						</div>
						<div>
							<span>OFFICE HOURS</span>
							<strong>Monday–Friday</strong>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- OFFICES -->
		<section class="offices-section" id="office-directory">
			<div class="container offices-layout">
				<!-- SEARCH PANEL -->
				<div class="office-search-panel">
					<div class="office-search-heading">
						<h2>Need a specific office?</h2>
						<p>
							Search colleges, offices, or email addresses.
						</p>
					</div>
					<div class="office-search-box">
						<input type="text" id="officeSearch" placeholder="Search college, office, or email address">
						<button type="button" aria-label="Search">
							<i data-lucide="search"></i>
						</button>
					</div>
					<div class="office-tabs">
						<button type="button" class="office-tab active" data-filter="colleges">
							COLLEGES
						</button>
						<button type="button" class="office-tab" data-filter="offices">
							OFFICES
						</button>
						<button type="button" class="office-tab" data-filter="inquiry">
							INQUIRY FORMS
						</button>
					</div>
					<!-- COLLEGES LIST -->
					<div class="office-list" id="collegeList">
						<a href="#">
							<span>Graduate School</span>
							<small>
								uccgradschool@ucc-caloocan.edu.ph
							</small>
						</a>
						<a href="#">
							<span>College of Education</span>
							<small>
								coed@ucc-caloocan.edu.ph
							</small>
						</a>
						<a href="#">
							<span>College of Liberal Arts and Sciences</span>
							<small>
								clas@ucc-caloocan.edu.ph
							</small>
						</a>
						<a href="#">
							<span>College of Law</span>
							<small>
								collegeoflaw@ucc-caloocan.edu.ph
							</small>
						</a>
						<a href="#">
							<span>College of Engineering</span>
							<small>
								engineering@ucc-caloocan.edu.ph
							</small>
						</a>
						<a href="#">
							<span>College of Computing and Information Technology</span>
							<small>
								ccit@ucc-caloocan.edu.ph
							</small>
						</a>
						<a href="#">
							<span>College of Nursing</span>
							<small>
								nursing@ucc-caloocan.edu.ph
							</small>
						</a>
						<a href="#">
							<span>College of Business and Accountancy</span>
							<small>
								cba@ucc-caloocan.edu.ph
							</small>
						</a>
					</div>
					<!-- OFFICES LIST -->
					<div class="office-list" id="officeList" style="display:none;">
						<a href="#">
							<span>Office of the Registrar</span>
							<small>
								registrar@ucc-caloocan.edu.ph
							</small>
						</a>
						<a href="#">
							<span>Office of the Registrar</span>
							<small>
								registrar.north@ucc-caloocan.edu.ph
							</small>
						</a>
						<a href="#">
							<span>MIS</span>
							<small>
								mis@ucc-caloocan.edu.ph
							</small>
						</a>
						<a href="#">
							<span>Library</span>
							<small>
								library@ucc-caloocan.edu.ph
							</small>
						</a>
						<a href="#">
							<span>Guidance and Counselling</span>
							<small>
								gcc.uccsouthcampus@gmail.com
							</small>
						</a>
						<a href="#">
							<span>Clinic</span>
							<small>
								ucccampusclinic@gmail.com
							</small>
						</a>
						<a href="#">
							<span>Accounting</span>
							<small>
								accounting@ucc-caloocan.edu.ph
							</small>
						</a>
					</div>
				</div>
				<!-- OFFICE DIRECTORY -->
				<aside class="office-directory-panel">
					<h2>Offices Directory</h2>
					<div class="office-directory-list">
						<a href="#">
							<i data-lucide="user-round"></i>
							<span>
								<strong>Office of the Registrar</strong>
								registrar@ucc-caloocan.edu.ph
							</span>
						</a>
						<a href="#">
							<i data-lucide="graduation-cap"></i>
							<span>
								<strong>MIS</strong>
								mis@ucc-caloocan.edu.ph
							</span>
						</a>
						<a href="#">
							<i data-lucide="book-open"></i>
							<span>
								<strong>Library</strong>
								library@ucc-caloocan.edu.ph
							</span>
						</a>
						<a href="#">
							<i data-lucide="heart-handshake"></i>
							<span>
								<strong>Guidance and Counselling</strong>
								gcc.uccsouth@gmail.com
							</span>
						</a>
						<a href="#">
							<i data-lucide="cross"></i>
							<span>
								<strong>Clinic</strong>
								uccsouthclinic@gmail.com
							</span>
						</a>
						<a href="#">
							<i data-lucide="calculator"></i>
							<span>
								<strong>Accounting</strong>
								accounting@ucc-caloocan.edu.ph
							</span>
						</a>
					</div>
				</aside>
			</div>
		</section>
	</main>
	

	

	<!-- FOOTER -->
	<?php require_once __DIR__ . '/includes/footer.php'; ?>




	<button class="back-top" id="backTop" aria-label="Back to top">
		↑
	</button>
	<script src="script.js"></script>
	<script src="https://unpkg.com/lucide@latest"></script>
	<script>
		lucide.createIcons();
	</script>
	<script>
		const officeTabs=document.querySelectorAll(".office-tab");
		const collegeList=document.getElementById("collegeList");
		const officeList=document.getElementById("officeList");
		officeTabs.forEach(tab=>{
			tab.addEventListener("click",()=>{
				const filter=tab.dataset.filter;
				officeTabs.forEach(item=>{
					item.classList.remove("active");
				});
				tab.classList.add("active");
				if(filter==="colleges"){
					collegeList.style.display="grid";
					officeList.style.display="none";
				}
				if(filter==="offices"){
					collegeList.style.display="none";
					officeList.style.display="grid";
				}
				if(filter==="inquiry"){
					collegeList.style.display="none";
					officeList.style.display="none";
				}
			});
		});
	</script>
</body>
</html>