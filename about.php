<?php
/*
Template Name: About Page
*/

get_header();?>
<div id="alice">            <?php get_sidebar();?>
</div>
<section>    
    <div class="container"> 
        
      
            <div class="row">
              <div class="col-md-3"></div>
          
              <div class="col-md-6 martop">
                  <h1>We are your book solution</h1>
                <p class="p2">We are a local book store providing the ability to read both online and purchase our products.
                You can sign in for a free online download
                or simply purchase a book from our store.</p>
              
                <p class="p2">To order books from our web-store simply create an account, select titles, and proceed to checkout. In-stock titles will be reserved for purchase. Titles not currently stocked can be special ordered. You will be notified when your order is available for pickup. Shipping can be arranged for an additional charge.</p>



                <p class="p2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Velit ut tortor pretium viverra suspendisse potenti. Ac felis donec et odio pellentesque diam volutpat commodo. Cursus euismod quis viverra nibh. Hac habitasse platea dictumst quisque. Aliquam etiam erat velit scelerisque in dictum. Sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper eget. Cursus eget nunc scelerisque viverra. Mi tempus imperdiet nulla malesuada pellentesque. Tincidunt vitae semper quis lectus nulla. Est velit egestas dui id ornare arcu. Consectetur lorem donec massa sapien faucibus et. Montes nascetur ridiculus mus mauris vitae ultricies leo.</p>

                  
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Read Ebooks for Free</button>

              </div>
</div>
              <section>

              <style>


.row1 {
  display: flex;
}

/* Create three equal columns that sits next to each other */
.column1 {
  flex: 33.33%;
  padding: 5px;
}
</style>




<h3>We have different Book Geners</h3>

<div class="row1">
  <div class="column1">
  <a href="http://localhost/assignment2/wordpress/books/horror/">
    <img src="<?php bloginfo('template_directory');?>/images/horror.jpg" class="img-fluid logo">
</a>  
<p>Horror</p>
</div>
  <div class="column1">
  <a href="http://localhost/assignment2/wordpress/books/action-and-adventure/">
    <img src="<?php bloginfo('template_directory');?>/images/adventure.jpg" class="img-fluid logo"></a>
    <p>Action</p>

  </div>
  <div class="column1">
  <a href="http://localhost/assignment2/wordpress/books/classics/
">
    <img src="<?php bloginfo('template_directory');?>/images/fantasy.jpg" class="img-fluid logo"></a>
    <p>Fantasy</p>

</div>
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