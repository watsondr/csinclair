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
								<a href="https://codepen.io/Watsonian/pen/gLmyQv" target='_blank'>
									<i class="fab fa-wikipedia-w fa-9x" aria-hidden="true"></i>
								</a>
							</p>
						</div>
						<div class="back">
								<a href="https://codepen.io/Watsonian/pen/gLmyQv" target='_blank'>							
									Wikipedia's RestAPI for search results, using JSON return to show descriptions with URL links.
								</a>
						</div>
				</div> 					 			
				
				<!-- Box 2  -->	
				<div class="portfolioBox">
						<div class="front">
							<p>
								<a href="https://codepen.io/Watsonian/pen/ObZQXr" target='_blank'>
									<i class="fab fa-twitch fa-9x" aria-hidden="true"></i>
								</a>
							</p>
						</div>
						<div class="back">
								<a href="https://codepen.io/Watsonian/pen/ObZQXr" target='_blank'>							
									I use Twitch.tv's RestAPI to show who is online / offline on their website out of pre-defined users.
								</a>
						</div>
				</div>
				
				<!-- Box 3 -->
				<div class="portfolioBox">
						<div class="front">
							<p>	
								<a href="https://codepen.io/Watsonian/pen/WxvgRY" target='_blank'>
									<i class="fas fa-anchor fa-9x" aria-hidden="true"></i>
								</a>
							</p>
						</div>
						<div class="back">
							<a href="https://codepen.io/Watsonian/pen/WxvgRY" target='_blank'>
								This is an example of a landing page with navigational anchor points.
							</a>
						</div>
				</div>		

				<!-- Box 4 -->
				<div class="portfolioBox">
						<div class="front">
							<p>	
							<a href="https://codepen.io/Watsonian/pen/GxvaPq" target='_blank'>
									<i class="fas fa-calculator fa-9x" aria-hidden="true"></i>
								</a>
							</p>
						</div>
						<div class="back">
							<a href="https://codepen.io/Watsonian/pen/GxvaPq" target='_blank'>
								This calculator is an example of interactive client side JavaScript application.
							</a>
						</div>
				</div>								
				
			</div>
			
		</section>

		
		<?php require 'footer.php' ?>
    </body>
    </html>