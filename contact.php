<?php
/*
Template Name: contact Page
*/
get_header();?>
<div id="alice">           
     <?php get_sidebar();?>
</div>



<section>    
    <div class="container"> 
            <div class="row">
              <div class="col-md-6">
                  <br/>
                <h1>We Are Here To Support You</h1>
                <hr>
             </div>
            </div>
            <!-- row -->
      
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6 martop">
                  <h1 id="title">Yield Books are #1 choice for both ebook and physical books</h1>
                <p class="p2">Get decked out in purple for YieldBooks Day and show your Mustang Pride to celebrate of our opening in 2020! Yild Book Day is March 3, but we're purple and proud all year long.</p>
                   <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Read Me for Free</button>

              </div>
              <section>

  
              <div class="container">  
  <form id="contact" action="" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 
  
</div>
   <!--modal-->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">                            
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-content">
      <!--this the the body of the modal-->
                 <div class="login-wrap">
	              <div class="login-html">
		                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
	                  <div class="login-form">
		               <div class="sign-in-htm">
			              <div class="group">
				               	<label for="user" class="label">Username</label>
					              <input id="user" type="text" class="input">
			                  	</div>
				                    <div class="group">
				                    	<label for="pass" class="label">Password</label>
				                      	<input id="pass" type="password" class="input" data-type="password">
			                        	</div>
			                          	<div class="group">
				                    	<input id="check" type="checkbox" class="check" checked>
				                	<label for="check"><span class="icon"></span> Keep me Signed in</label>
				                      </div>
			                    	<div class="group">
			                		<input type="submit" class="button" value="Sign In">
			                    	</div>
			                  	<div class="foot-lnk">
					              <a href="#forgot">Forgot Password?</a>
				              </div>
		                	</div>
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</label>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
  </div>
   </div>
    <!--end of modal-->

              <?php get_footer();?>