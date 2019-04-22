<html>
  <body>
   <?php
          // This PHP Contact Form is offered &quot;as is&quot; without warranty of any kind, either expressed or implied.
          // Andrew Raynor at www.css3templates.co.uk shall not be liable for any loss or damage arising from, or in any way
          // connected with, your use of, or inability to use, the website templates (even where Andrew Raynor has been advised
          // of the possibility of such loss or damage). This includes, without limitation, any damage for loss of profits,
          // loss of information, or any other monetary loss.

          // Set-up these 3 parameters
          // 1. Enter the email address you would like the enquiry sent to
          // 2. Enter the subject of the email you will receive, when someone contacts you
          // 3. Enter the text that you would like the user to see once they submit the contact form
		  
          $to = 'oo.aremu@ui.edu.ng';
          $subject = 'Enquiry from the website';
          $contact_submitted = 'Your message has been sent.';

          // Do not amend anything below here, unless you know PHP
          function email_is_valid($email) {
            return preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i',$email);
          }
          if (!email_is_valid($to)) {
            echo '<p style="color: red;">You must set-up a valid (to) email address before this contact page will work.</p>';
          }
          if (isset($_POST['contact_submitted'])) {
            $return = "\r";
            isset($_POST['your_email'])?$youremail = trim(htmlspecialchars($_POST['your_email'])):$youremail ="";
            isset($_POST['your_name'])?$yourname = stripslashes(strip_tags($_POST['your_name'])):$yourname ="";
		  
            
        $yourmessage = stripslashes(strip_tags($_POST['your_message']));
		 $answer = trim(htmlspecialchars($_POST['answer']));
		   $user_answer = trim(htmlspecialchars($_POST['user_answer']));
	 
  if (filter_var($youremail, FILTER_VALIDATE_EMAIL) && $yourname != "" && $yourmessage != "" && substr(md5($user_answer),5,10) === $answer)
   {
	   		
            $contact_name = "Name: ".$yourname;
            $message_text = "Message: ".$yourmessage;
          
           
            $message = $contact_name . $return . $message_text;
            $headers = "From: ".$youremail;
              mail($to,$subject,$message,$headers);
              $yourname = '';
              $youremail = '';
              $yourmessage = '';
              echo '<p style="color: blue;">'.$contact_submitted.'</p>';
            }
            else echo '<p style="color: red;">Please enter your name, a valid email address, your message and the answer to the simple maths question before sending your message.</p>';
		  }
          $number_1 = rand(1, 9);
          $number_2 = rand(1, 9);
          $answer = substr(md5($number_1+$number_2),5,10)
		  
        ?>
<section id="contact" class="main style3 secondary">
				<div class="content container">
					<header>
						<h2>Contact Us.</h2>
						<p>Please fill the form below and send to contact us on  .</p>
					</header>
					<div class="box container 75%">

					<!-- Contact Form -->
							<form method="post" action="#">
								<div class="row 50%">
									<div class="6u"><input type="text" name="name" placeholder="Name" /></div>
									<div class="6u"><input type="email" name="email" placeholder="Email" /></div>
								</div>
								<div class="row 50%">
									<div class="12u"><textarea name="message" placeholder="Message" rows="6"></textarea></div>
								</div>
								<div class="row">
									<div class="12u">
										<ul class="actions">
                                        <p style="line-height: 1.7em;">To help prevent spam, please enter the answer to this question:</p>
            <p><span><?php echo $number_1; ?> + <?php echo $number_2; ?> = ?</span><input type="text" name="user_answer" /><input type="hidden" name="answer" value="<?php echo $answer; ?>" /></p>
											<li><input type="submit" value="Send Message" /></li>
										</ul>
									</div>
								</div>
							</form>

					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">

				<!-- Icons -->
					<ul class="actions">
						<li><a href="https://twitter.com/search?q=beads%20work&src=tyah" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/beadsbycarnelian" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
						<li><a href="https://www.instagram.com/beadsbycarnelian/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>

				<!-- Menu -->
					<ul class="menu">
						<li>@copyright 2015</li><li>Design: <a href=>David&AndersonDoughlas</a></li>
					</ul>

			</footer>

	</body>
</html>