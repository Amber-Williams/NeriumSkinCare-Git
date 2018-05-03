<?php include('../deepPageHeader.php'); ?>

	<div class="row">
		<div class="col-sm-12">
			<div class="banner">
				<img src="../images/heroes/about_contact.jpg" alt="hero image">
			</div>
		</div>	
	</div>

<form method="POST" action="../processing/process.php">
	<div class="row">
		<div class="form-group">
			<div class="col-sm-3">
				<label for="fullName">Full Name *</label>
			</div>
			<div class="col-sm-9">  
				<input type="text" class="form-control" name="fullName" id="fullName" placeholder="Full Name"  required>
			</div>
		</div>
	</div>

<div class="row">
    <div class="form-group">
        <div class="col-sm-3">
            <label for="product">Products Used:</label>
         </div>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="product" id="product" placeholder="Products Used" required>
        </div>
        
    </div>
</div>
	
<div class="row">
		<div class="form-group">
			<div class="col-sm-3">
				<label for="testimonials">Testimonials *</label>
			</div>
			<div class="col-sm-9">  
				<textarea placeholder="Write a Testimonial Here" name="testimonials" id="testimonials" rows="5"></textarea>
			</div>
		</div>
	</div>	
    
 
		 <div class="col-sm-4">
		<button type="submit" class="btn btn-default submitButton">Submit</button>
        </div>
</form>
<?php include('../deepPageFooter.php'); ?>
