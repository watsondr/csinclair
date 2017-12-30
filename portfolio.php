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

			<!-- Row One -->
			<div class="portfolioRow">
				
				<!-- Box 1  -->	
				<div class="portfolioBox" ontouchstart="this.classList.toggle('hover');">
					<div class="flipStart">
						<div class="front">
							<p>
								<a href="https://codepen.io/Watsonian/pen/gLmyQv">
									<img src="/img/wiki.png" width="150px" height="150px" />
								</a>
							</p>
						</div>
						<div class="back">
							<p>
								Wikipedia's RestAPI for search results, using JSON return to show descriptions with URL links.
							</p>
						</div>
					</div>
				</div> 					 			
				
				<!-- Box 2  -->	
				<div class="portfolioBox" ontouchstart="this.classList.toggle('hover');">
					<div class="flipStart">
						<div class="front">
							<p>
								<a href="https://codepen.io/Watsonian/pen/ObZQXr">
									<img src="/img/Glitch_White_RGB.png" width="150px" height="150px" />
								</a>
							</p>
						</div>
						<div class="back">
							<p>
								I use Twitch.tv's RestAPI to show who is online / offline on their website out of pre-defined users.
							</p>
						</div>
					</div>
				</div>
				
				<!-- Box 3 -->
				<div class="portfolioBox" ontouchstart="this.classList.toggle('hover');">
					<div class="flipStart">
						<div class="front">
							<p>	
								<a href="https://codepen.io/Watsonian/pen/WxvgRY">
									<img src="/img/2016_Anchor_Point_Webpage.png" width="150px" height="150px" class="outline"/>
								</a>
							</p>
						</div>
						<div class="back">
							<p>
								This is an example of a landing page with navigational anchor points.
							</p>
						</div>
					</div>
				</div>				
				
			</div>
			
		</section>

		
		<?php require 'footer.php' ?>
    </body>
    </html>