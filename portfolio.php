		<!--

		*******************************
		
		THIS IS THE MOBILE VERSION
		
		*******************************	
		
		-->

    <!DOCTYPE html>
	<html lang='en'>
	<head>
		<?php require 'header.php' ?>
	</head>	
    <body>
	
		<?php
			$activePage = "portfolio";
			require 'nav.php';
		?>
		
		<section class="section1">
			<h2>Portfolio Showcase</h2>

			<div class="portfolioRow">
				
				<!-- Box 1  -->	
				<div class="portfolioBox">
						<div class="front">
							<p>
								<a href="https://codepen.io/Watsonian/pen/gLmyQv">
									<i class="fab fa-wikipedia-w fa-9x" aria-hidden="true"></i>
								</a>
							</p>
						</div>
						<div class="back">
								<a href="https://codepen.io/Watsonian/pen/gLmyQv">							
									Wikipedia's RestAPI for search results, using JSON return to show descriptions with URL links.
								</a>
						</div>
				</div> 					 			
				
				<!-- Box 2  -->	
				<div class="portfolioBox">
						<div class="front">
							<p>
								<a href="https://codepen.io/Watsonian/pen/ObZQXr">
									<i class="fab fa-twitch fa-9x" aria-hidden="true"></i>
								</a>
							</p>
						</div>
						<div class="back">
								<a href="https://codepen.io/Watsonian/pen/ObZQXr">							
									I use Twitch.tv's RestAPI to show who is online / offline on their website out of pre-defined users.
								</a>
						</div>
				</div>
				
				<!-- Box 3 -->
				<div class="portfolioBox">
						<div class="front">
							<p>	
								<a href="https://codepen.io/Watsonian/pen/WxvgRY">
									<i class="fas fa-anchor fa-9x" aria-hidden="true"></i>
								</a>
							</p>
						</div>
						<div class="back">
							<a href="https://codepen.io/Watsonian/pen/WxvgRY">
								This is an example of a landing page with navigational anchor points.
							</a>
						</div>
				</div>				
				
			</div>
			
		</section>

		
		<?php require 'footer.php' ?>
    </body>
    </html>