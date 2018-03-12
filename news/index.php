<!-- newsSplash -->
<?php include('../deepPageHeader.php'); ?>

<style>
h2{
        font-size: 20px;
    }
hr.news {
  padding: 0;
  border: none;
  border-top: 1px solid #808080;
  color: #808080;
  text-align: center;
}
hr.news:after {
  content: "Nerium News-General";
  display: inline-block;
  position: relative;
  top: -0.7em;
  font-size: 1em;
  font-weight: bold;
  padding: 0 0.75em;
  background: white;
}

    hr.news1 {
  padding: 0;
  border: none;
  border-top: 1px solid #808080;
  color: #808080;
  text-align: center;
}
hr.news1:after {
  content: "Nerium News-Litigation Against Distributor";
  display: inline-block;
  position: relative;
  top: -0.7em;
  font-size: 1em;
  font-weight: bold;
  padding: 0 0.75em;
  background: white;
}
 
 
ul.bulletList li a {
  text-decoration: underline;
}  
</style>
<div class="row">
		<div class="col-sm-12">
			<div class="banner">
				<img src="../images/heroes/newsbanner2.png" alt="hero image">
			</div>
		</div>	
	</div>
<div class="row">

	<div class="col-xs-12">
	<hr class="news" />
	
			<ul class="bulletList">
                <li><a href="../companyannouncements">Current Company Announcements</a></li>
                <li><a href="../blog">Blog</a></li>
                <li><a href="../mediacoverage/">Media Coverage</a></li>
                <li><a href="../testimonials/index.php">Testimonials</a></li>
                <li>Subscribe to our Newsletter below for more information</li>
                <br/>
<?php include('../deepPageFooter.php'); ?>
