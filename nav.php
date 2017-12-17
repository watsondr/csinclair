		<!-- 
		This is a required file for the website
		It handles the navigation menu
		V1.0 written 21/09/2017
		
		COLOUR SCHEME: Navy blue background, whitish text
		
		IDEA: Active link for the link they are looking at
		
		NOTE: In case of ever needing dropdowns. Between a & / li place another nav tag. Then start the unordered list.
		-->
		
		<header>
		
			<div id="logo" class="menuUp">
				<div id="navToggle"><a href="#"><span class="fa fa-bars" aria-hidden="true"></span></a></div>
			</div>
		
			<nav>

				<ul>
					<li><a href="/index.php" class="<?= ($activePage == 'index') ? 'active':''; ?>">Home</a></li>
					<li><a href="/about.php"  class="<?= ($activePage == 'about') ? 'active':''; ?>">About</a></li>
					<li><a href="/experience.php"  class="<?= ($activePage == 'experience') ? 'active':''; ?>">Experience</a></li>
					<li><a href="/portfolio.php"  class="<?= ($activePage == 'portfolio') ? 'active':''; ?>">Projects</a></li>
					<li><a href="/contact.php"  class="<?= ($activePage == 'contact') ? 'active':''; ?>">Contact Me</a></li>
				</ul>
				
			</nav>

		</header>