<!-- about -->
<?php include('../deepPageHeader.php'); ?>
<style>

hr.rx {
  padding: 0;
  border: none;
  border-top: 1px solid #CF0A2C;
  color: #808080;
  text-align: center;
}
hr.rx:after {
  content: "Products Coming Soon";
  display: inline-block;
  position: relative;
  top: -0.7em;
  font-size: 1em;
  font-weight: bold;
  padding: 0 0.75em;
  background: white;
}
    
hr.products {
  padding: 0;
  border: none;
  border-top: 1px solid #CF0A2C;
  color: #808080;
  text-align: center;
}
hr.products:after {
  content: "NeriumRX™ Therapy Line will be launched soon";
  display: inline-block;
  position: relative;
  top: -0.7em;
  font-size: 1em;
  font-weight: bold;
  padding: 0 0.75em;
  background: white;
}
    
hr.professionals {
  padding: 0;
  border: none;
  border-top: 1px solid #CF0A2C;
  color: #808080;
  text-align: center;
}
hr.professionals:after {
  content: "Available through Authorized HealthCare Professionals";
  display: inline-block;
  position: relative;
  top: -0.7em;
  font-size: 1em;
  font-weight: bold;
  padding: 0 0.75em;
  background: white;
}

   .img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
    
.floating-box {
    display: inline-block;
    padding: 5px;
   
}
.button1 {
    
    background-color: white; 
    color: #CF0A2C; 
    border: 2px solid #CF0A2c;
    padding: 10px 10px 10px 10px;
    border-radius: 10px;
    align-content: center;
   
}
    
 .hovereffect {
width:100%;
height:100%;
float:left;
overflow:hidden;
position:relative;
text-align:center;
cursor:default;
}

.hovereffect .overlay {
width:100%;
height:100%;
position:absolute;
overflow:hidden;
top:0;
left:0;
opacity:0;
background-color:rgba(0,0,0,0.5);
-webkit-transition:all .4s ease-in-out;
transition:all .4s ease-in-out
}

.hovereffect img {
display:block;
position:relative;
-webkit-transition:all .4s linear;
transition:all .4s linear;
}

.hovereffect h2 {
text-transform:uppercase;
color:#fff;
text-align:center;
position:relative;
font-size:17px;
background:rgba(0,0,0,0.6);
-webkit-transform:translatey(-100px);
-ms-transform:translatey(-100px);
transform:translatey(-100px);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
padding:10px;
}

.hovereffect a.info {
text-decoration:none;
display:inline-block;
text-transform:uppercase;
color:#fff;
border:1px solid #fff;
background-color:transparent;
opacity:0;
filter:alpha(opacity=0);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
margin:50px 0 0;
padding:7px 14px;
}

.hovereffect a.info:hover {
box-shadow:0 0 5px #fff;
}

.hovereffect:hover img {
-ms-transform:scale(2);
-webkit-transform:scale(2);
transform:scale(2);
}

.hovereffect:hover .overlay {
opacity:1;
filter:alpha(opacity=100);
}

.hovereffect:hover h2,.hovereffect:hover a.info {
opacity:1;
filter:alpha(opacity=100);
-ms-transform:translatey(0);
-webkit-transform:translatey(0);
transform:translatey(0);
}

.hovereffect:hover a.info {
-webkit-transition-delay:.2s;
transition-delay:.2s;
}
 
    

    ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    position:relative;
   }


ul.tab li {
    float:left;
    
    }


ul.tab li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}
    .tabcontent {
    display: none;
    padding: 6px 12px;
    
    border-top: none;
}
   
    p.center{
        text-align:center;
        font-weight: bold;
        color:black;
        
    }
   
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
      
   .box{
        text-align: center;
    }
 #carousel-1:checked ~ .control-1, #carousel-2:checked ~ .control-2, #carousel-3:checked ~ .control-3 {
    display: block;
}
(index):65
.carousel-control.next {
    right: 2%;
}
(index):41
.carousel-control {
    background: rgba(0, 0, 0, 0.28);
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
    display: none;
    font-size: 40px;
    height: 40px;
    line-height: 35px;
    position: absolute;
    top: 50%;
    -webkit-transform: translate(0, -50%);
    cursor: pointer;
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%);
    text-align: center;
    width: 40px;
    z-index: 10;
}
    
.carousel-control.prev {
    left: 2%;
}

.carousel-control.next {
    right: 2%;
}
    
    
    .fa-caret-square-o-right{
        top:50%;
        z-index:10;
        position:relative;
        
    }
    
     .fa-caret-square-o-left{
        top:50%;
        z-index:10;
        position:relative;
    }
   
    .figcaption{
       text-align: right;
        font-size: 0.8em;
        font-weight: bold;
        padding-right: 18px;
        padding-top: 15px;
            
    }
    .figcaption1{
       
        font-size: 0.5em;
        font-weight: bold;
        padding-left: 25px;
        padding-top: 15px;
            
    }
    
    span.price{
        font-size:10px;
        font-weight: 100;
    }
    
</style>
<link rel="stylesheet" href="../css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

	<div class="row">
		<div class="col-sm-12">
			<div class="banner">
				<img src="../images/heroes/rxbanner.png" alt="hero image">
			</div>
		</div>	
	</div>	
	
	
		

		<hr class="rx" />

            <p>The NeriumRX™ products include: NAE-14™ (Enhanced proprietary Nerium extract), Peptide Matrix Complex, Aloe vera, Niacinamide, Chia Seed Oil, Matricaria flower Extract, Rosemary Leaf Extract, and Zinc Oxide to help protect young to aging skin from harmful sun rays and environmental stressors.</p>
            
            <p>Consumer should always purchase NeriumRX™ products through Authorized Healthcare Professionals to gurantee products authenticity, product quality and to ensure you benefit from the real science that goes into the Nerium skin care products.</p>

			
          <div class="floating-box">
               <img src="../images/new_images/dailyrx.png" width="240px" height="340px"/><br/>
            <figcaption class="figcaption">Daily Face <span class="price">&nbsp;$155</span></figcaption>
          
            </div>
            <div class="floating-box">
                  <img src="../images/new_images/nightrx.png" width="250px" height="340px"/><br/> 
                <figcaption class="figcaption">Nightly Face<span class="price">&nbsp;$137</span></figcaption>
            </div>
            <div class="floating-box">
              <img src="../images/new_images/newcreme.png" width="270px" height="341px"/><br/>
                <figcaption class="figcaption">Body Contour<span class="price">&nbsp;$130</span></figcaption>
            </div>
 
            
          <br/>
            <hr class="professionals">
		
           
            <p>Nerium SkinCare has launched their NEW a ALL-NeriumRX™ Professional Line of products that enhances anti-aging while promoting skin repair. <!--These products have been specifically designed for distribution by Healthcare Professionals.--> Nerium SkinCare's Scientific Advisors have provided formulation input, and development guidance regarding ingredients and products for many years now. This reasearch is vital for the clients and patients of Authorized Healthcare Professionals. </p>
                
           <p>  Nerium SkinCare is establishing a worldwide network of Authorized Healthcare Professionals who will provide their patients and consumers with the NeriumRX™ Product-Line. Nerium SkinCare's NeriumRX™ Nightly and Daily are the first products specifically designed for distribution by Healthcare Professionals as a skin repair product-line.</p>
           
            <p> NeriumRX™ products are available through Authorized Healthcare professionals</p>
             <br/>
			
              
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/0e9df0559b.js"></script>
 
  


  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="../images/editedimages/rxnight.png" alt="rxnight" width="460px" height="345px">
      </div>

      <div class="item">
        <img src="../images/editedimages/rxdaily.png" alt="rxdaily" width="460px" height="345px">
      </div>
    
      <div class="item">
        <img src="../images/editedimages/rxbody.png" alt="rxbody" width="460px" height="345px">
      </div>

    </div>

         <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="fa fa-caret-square-o-left" aria-hidden="true"></span>
             <!--<i class="fa fa-angle-double-left" aria-hidden="true"></i>-->
            
     
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    
        <span class="fa fa-caret-square-o-right" aria-hidden="true"></span>
      <!--  <i class="fa fa-angle-double-right" aria-hidden="true"></i>-->
     
        </a>
      
  </div>

<br/><br/>
<p class="center">NeriumRX™ Therapy Line will be launched soon</p><br/>

<ul class="bulletList">
<li>NeriumRX™ Dermal Pain Relief Therapy</li>
<li>NeriumRX™ Psoriasis Relief Therapy</li>
<li>NeriumRX™ Cold Sore Therapy and NeriumRX™ Daily Maintenance Gel</li>
</ul>
<br/>
 <div align="center">  
 <a href="../distributor/index.php" ><button class="button1" >Find Distributor</button></a>
 </div>
<?php include('../deepPageFooter.php'); ?>
