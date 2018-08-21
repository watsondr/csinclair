<!DOCTYPE html>
		<?php 
		if(isset($_POST['contactSubmit'])){
			$name = $_POST['name'];
			$emailAddress = $_POST['email'];
			$messageType = $_POST['request'];
			$messageBody = $_POST['content'];
			$mailHeader = "From: $emailAddress \r\n";
			$subject = "Contact via CSinclair.me : $messageType";
			$emailBody = "Return Address: $emailAddress \r $messageBody";
			$recipient = "campbell.sinc@gmail.com";
			
			/* return to page and express outcome */
			if(mail($recipient, $subject, $emailBody, $mailHeader)) {
				$success = "Message sent. Thank you.";
			} else {
				$success = "Send failed. Please try again later.";
			}
		}
		?>
		
	<html lang='en'>
	<head>
		<?php require 'header.php' ?>
	</head>	
    <body>
	
		<?php
			$activePage = "contact";
			require 'nav.php';
		?>
		
		
		<section class="contactUs">
		
			<h2>Get in touch!</h2>
			
			<!-- start contact us form -->
			
			<?php
				if (isset($success)){ echo "<div><p style='text-align: center'> $success </p></div>"; }
			?>
			
			<form class="form" action="" method="POST">
			
			<!-- Name -->
				<p class="name">
					<label for="name">Full Name</label> <br />
					<input type="text" name="name" id="name" placeholder="Enter your name here" autofocus/>
				</p>
				
			<!-- Email -->
				<p class="email">
					<label for="email">Email Address</label> <br />
					<input type="text" name="email" id="email" placeholder="john.doe@your-company.com" />
				</p>
			
			<!-- Request Type Entry so I know what the email is about -->
				<p class="request">
					<label for="request">Request Type</label> <br />
					<input type="text" name="request" id="request" placeholder="Quick description of your message" />

				</p>
			
			<!-- Content Body -->
				<p class="content">
				<label for="content">Message</label> <br />
				<textarea type="text" name="content" placeholder="Please write your message"></textarea>
				</p>
				
			<!-- Hidden Re-Direct field -->
			<input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>" />
				
			<!-- Submit Button -->
			<p class="submit">
				<input type="submit" name="contactSubmit" value="Send" />
			</p>
			
			<!-- end contact us form -->
			
			</form>
			
		</section>
		
		<?php require 'footer.php' ?>
    </body>
    </html>