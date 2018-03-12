<?php include('../deepPageHeader.php'); ?>
<style>

 hr.verify {
          padding: 0;
          border: none;
          border-top: 1px solid #808080;
          color: #808080;
          text-align: center;
          overflow: visible;
        }
        hr.verify:after {
          content: "How To Verify Your Product";
          display: inline-block;
          position: relative;
          top: -0.7em;
          font-size: 1em;
          font-weight: bold;
          padding: 0 0.75em;
          background: white;
        }
    
    hr.nsc {
        padding: 0;
        border: none;
        border-top: 1px solid #808080;
        color: #808080;
        text-align: center;
        overflow: visible;
            }
    hr.nsc:after {
        content:" Imitation Nerium SkinCare Products" ;
        display: inline-block;
        position: relative;
        top: -0.7em;
        font-size: 1em;
        font-weight: bold;
        padding: 0 0.75em;
        background: white;
    }
    
   img.abc {
    display: block;
    margin: 0 auto;   
}
    .mobile_link{
        text-align: center;
        padding-top:20px;
        font-family: sans-serif;
        
    }
    .mobile_link h4{
        color:blue;
    }
    .mobile_link a{
        text-decoration: none;
        font-weight:bold;
    }
    
    .mob{
        background-color:azure;
        border-radius: 5px;
        font-size: 20px;
        font-family: sans-serif;
    }
   
    .blue{
        color: blue;
        font-size: 16px;
    }

    .link img{
        width:100%;
    }

    .mobile_link img {
        width:60%;
        margin-bottom:10px;
    }
  @media screen and (max-width: 770px)
  {
     .link {
            display:none !important;
            }
    }
    
    @media screen and (min-width: 771px)
    {
        .mobile_link{
            display:none !important;
            text-align: center;
            font-weight:100;
            
        }
    }
</style>
	<div class="row">
		<div class="col-sm-12">
			<div class="banner">
				<img src="../images/heroes/products.jpg" alt="hero image">
                <hr class="verify" />   
            </div>
                <div class="link">
                    <img src="nsc-image-LinkReaderHow2%20(1).png">
                    <p>Counterfeits can be dangerous! With our products and their anti-counterfeit technology you don’t have to take a chance. &nbsp; <a href="https://www.fbi.gov/news/stories/counterfeit-cosmetics-fragrances" class="blue">Read more information about counterfeits and how they can be harmful to you and your loved ones.</a>  </p>
                </div>

                <div class="mobile_link">   
                    <h4>Click Below to Download Nerium Skincare Product Verification App</h4><br/>
                    
                    <button class="mob">  <a href="https://itunes.apple.com/us/app/linkreader/id716209670?mt=8" class="mobile_link">iphone users</a></button><br/><br/>
                    <button class="mob"><a href="https://play.google.com/store/apps/details?id=com.hp.link&hl=en" class="mobile_link">android users</a></button><br/>
                
                    <img src="nsc-LinkreaderHow2-Mobile.png" class="mobile_link">
                 </div>
                <hr class="nsc"/><br/>
            <div class="banner">
                <img src="../images/knockoffVreal.jpg"  alt="hero image" class="abc">
			</div>
           
		</div>	
	</div>	

<?php include('../deepPageFooter.php'); ?>

