<!-- contact -->
<?php include('../deepPageHeader.php'); ?>

	<div class="row">
		<div class="col-sm-12">
			<div class="banner">
				<img src="../images/heroes/about_contact.jpg" alt="hero image">
			</div>
		</div>	
	</div>

<form method="POST" action="../private/process.php">
	<div class="row">
		<div class="form-group">
			<div class="col-sm-3">
				<label for="firstName">First Name *</label>
			</div>
			<div class="col-sm-9">  
				<input type="text" class="form-control" id="firstName" placeholder="First Name" name="firstName" required>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="form-group">
			<div class="col-sm-3">
				<label for="lastName">Last Name *</label>
			</div>
			<div class="col-sm-9">  
				<input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName" required>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="form-group">
			<div class="col-sm-3">
				<label for="exampleInputEmail1">Email address *</label>
			</div>
			<div class="col-sm-9">  
				<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" required>
			</div>
		</div>
	</div>

    <div class="row">
		<div class="form-group">
			<div class="col-sm-3">
				<label for="country">Country *</label>
			</div>
			<div class="col-sm-9">  
				<input type="text" class="form-control" id="country" name="country" placeholder="Country" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="form-group">
			<div class="col-sm-3">
				<label for="telephone">Telephone</label>
			</div>
			<div class="col-sm-9">  
				<input type="text" class="form-control" id="telephone" name="phone" placeholder="000-000-0000">
			</div>
		</div>
	</div>
    
    <div class="row">
		<div class="form-group">
			<div class="col-sm-3">
				<label for="product">Name of the Nerium product you use:</label>
			</div>
			<div class="col-sm-9">  
                <input type="text" class="form-control" id="product" name="product" >
				
			</div>
		</div>
	</div>	
	<div class="row">
		<div class="form-group">
			<div class="col-sm-3">
				<label for="message">Message</label>
			</div>
			<div class="col-sm-9">  
				<textarea placeholder="Message" name="message" id="message" rows="5"></textarea>
			</div>
		</div>
	</div>	
    
    <div class="row">
            <div class="form-group">
                 <div class="col-sm-20">  
                Enter the Captcha code: &nbsp;<input name="captcha" type="text">&nbsp;
             <img src="captcha.php" /><br/>
                </div>
        </div>
    </div>
		 <div class="col-sm-4">
		<button type="submit" class="btn btn-default submitButton">Submit</button>
        </div>
</form>
<br/><br/><br/>
<h2><u><a href="../testimonials/index.php">Click here to write a Testimonial</a></u></h2>
<?php include('../deepPageFooter.php'); ?>
