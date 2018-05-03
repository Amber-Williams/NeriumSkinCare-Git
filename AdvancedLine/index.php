<?php include('../deepPageHeader.php'); ?>
<style>

.hovereffect {
width:100%;
height:100%;
float:left;
overflow:visible;
position:relative;
text-align:center;
cursor:default;
}

.hovereffect .overlay {
width:100%;
height:100%;
position:absolute;
overflow:visible;
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
    
    .hovereffect h5{
        color:grey;
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
padding:7px 10px;
}

.hovereffect a.info:hover {
box-shadow:0 0 5px #fff;
}

.hovereffect:hover img {
-ms-transform:scale(1.2);
-webkit-transform:scale(1.2);
transform:scale(1.2);
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
    h5.price{
         color:grey;
    }
 
    .tab{
        text-align:center;
    }

    ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    position:relative;
   }

ul.tab li {
    margin:auto;
    display: inline-block;
    }


ul.tab li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 0px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}
    .tabcontent {
    display: none;
    padding: auto;
    border-top: none;
}
    
    .names{
        color:grey;
        font-size: 11px;
        text-align: center;
        font-family: sans-serif;
        font-weight: bold;
    }
    
hr.countries {
  padding: 0;
  border: none;
  border-top: 1px solid #808080;
  color: #808080;
  text-align: center;
}
hr.countries:after {
  content: "Countries Launching In:";
  display: inline-block;
  position: relative;
  top: -0.7em;
  font-size: 1em;
  font-weight: bold;
  padding: 0 0.75em;
  background: white;
}
hr.products1 {
  padding: 0;
  border: none;
  color: #808080;
  text-align: center;
}
hr.products1:after {
  content: "Click On The Products For more Info:";
  display: inline-block;
  position: relative;
  top: -0.7em;
  font-size: 1em;
  font-weight: bold;
  padding: 0 0.75em;
  background: white;
}
ul.bulletList {
  margin: 0 0 20px 30px;
  list-style: disc;
   
}
ul.bulletList li {
  line-height: 1.3;
    
}
ul.bulletList li a {
  text-decoration: none;
     
}
   
  
  </style>
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<body>
 
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

</script>
    
 <div class="row">
		<div class="col-sm-12">
			<div class="banner">
				<img src="sub-headers_about copy.jpg" alt="hero image">
			</div>
		</div>	
	</div>	
    
<hr class="products"> 
    
            <ul class="tab">
                
            <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'tab1')" id="defaultOpen">
            <div class="hovereffect"> <img src="day.png" width="260px" height="300px"> <p class="names">NeriumAD™ ADVANCED <br/> Daily Face Moisturizer<br/></p><h5>$120</h5></div></a></li>
    
            <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'tab3')"><div class="hovereffect"><img src="body.png" width="260px" height="300px"><p class="names">NeriumAD™ ADVANCED <br/> Body Energizing Age-Defying Creme<br/></p><h5>$126</h5></div></a></li>
            <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'tab2')"><div class="hovereffect"><img src="night.png" width="260px" height="300px"><p class="names">NeriumAD™ ADVANCED <br/> Nightly Face Treatment<br/></p><h5>$135</h5></div></a></li>
   
            </ul>
    
  <!--  <hr class="products1"> -->
    		
    <div class="row">
		<div class="col-xs-12">
                <div id="tab1" class="tabcontent">


                <h1 class="text">NeriumAD™ ADVANCED Daily Face Moisturizer</h1>
                    <p>NeriumAD™ Advanced Daily Face Moisturizer is a rejuvenating formula designed to protect your skin against free radicals and other environmental stressors associated with aging. This hydrating day cream combines revolutionary key ingredients that actively work together to awaken and refresh your skin’s youthful, luminous tone while reducing the appearance of fine lines and wrinkles.</p>
                    <h1 class="text">How To Use NeriumAD™ Daily Face Moisturizer:</h1>

			<p>After cleansing skin thoroughly, apply four pumps (+/-) to your face and neck in the morning and throughout the day as needed. 
For optimal results, use with NeriumAD™ Nightly Face Treatment.</p>

			

			<div class="collapse" id="dayCreamIngredients">

			<p class="ingredients">Water, Aloe Barbadenis Leaf Juice, Glycerin, Dicaprylyl Carbonate, Caprylic/Capric Triglyceride, Leuconostoc/Radish Root Ferment Filtrate, Cetyl Alcohol, Glyceryl Stearate, PEG-100 Stearate, Cetyl Palmitate, Cetearyl Glucoside, Dimethicone, Jojoba Esters, Sorbitol, Nerium Oleander LEAF Extract, Bisabolol, Glyceryl Caprylate, Squalane, Sodium Hyaluronate, Pentylene Glycol, Tetrahexyldecyl Ascorbate, Avena Sative (Oat) Kernel Extract, Santalum Album (Sandalwood) Extract, Phellodendron Amurense Bark Extract, Camellia Sinensis (Green Tea) Leaf Extract, Hordeum Distichon (Barley) Extract, Hydrogenated Lecithin, Tocopherol, Dipotassium Glycyrrhizate, Allantoin, Superoxide Dismutase, Palmitoyl Dipeptide-5 Diaminobutyroyl Hydroxythreonine, Palmitoyl Tripeptide-5, Tetradecyl Aminobutyroylvalylaminobutyric Urea Trifluoroacetate, Ubiquinone, Magnesium Chloride, Phenoxyethanol, Xanthan Gum, Disodium EDTA, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Tromethamine, Potassium Sorbate, May Contain: Aminomethyl Propanol, Citric Acid.</p>
			</div>

			<a class="greenButton btn btn-primary" role="button" data-toggle="collapse" href="#dayCreamIngredients" aria-expanded="false" aria-controls="5516">Ingredients</a>
            </div>
            
        <div id="tab3" class="tabcontent">
         <h1 class="text">NeriumAD<sup><span class="rSymbol">&circledR;</span></sup> Body Energizing Age-Defying Creme </h1>
 	<p>NeriumAD<sup><span class="rSymbol">&circledR;</span></sup> Body Energizing Age-Defying Creme is a clinically tested product powered by our exclusive NeriumAD<sup><span class="rSymbol">&circledR;</span></sup> Formula. This revolutionary body cream’s advanced ingredients help firm and tone problem areas for sleeker, more youthful-looking skin.</p>

			<h1 class="text">How To Use NeriumAD<sup><span class="rSymbol">&circledR;</span></sup> Body Energizing Age-Defying Creme:</h1>

			<p>Massage a quarter-sized amount of product into each targeted area in a circular motion for a minimum of 20 seconds or until fully absorbed. To maximize results, use twice a day. Optimal times of usage are after a warm shower and before bedtime.</p>

			<p>NeriumAD<sup><span class="rSymbol">&circledR;</span></sup> can also be used on other areas of the skin such as the neck, décolletage, arms, hands, elbows, and knees. If any skin irritation occurs, we recommend reducing the number of pumps used. The soft tissue area around the eyes is always a very sensitive region, so we do not recommend using NeriumAD<sup><span class="rSymbol">&circledR;</span></sup> on the soft tissue area around your eye.</p>

			<div class="collapse" id="contourCreamIngredients">

			<p class="ingredients">Water (aqua), NAE-8<sup><span class="rSymbol">&circledR;</span></sup> Nerium Aloe Extract (Aloe Barbadensis Leaf Juice, Nerium Oleander Leaf), Ethylhexyl Palmitate, Hydrogenated Polyisobutene, Glycerin, Cetyl Alcohol, Peptide Matrix (Collagen, Elastin, Glycosaminoglycans), Caffeine, Salix Alba Bark Extact, Cetearyl Alcohol, Phenoxyethanol, Camellia Oleifera (Green Tea) Leaf Extract, Isohexadecane, Ceteareth-20, Polysorbate 80, Sorbitan Stearate, Hydroxyethyl Acrylate/Sodium Acryloyldimethyltaurate Copolymer, Theobroma Cacao (Cocoa) Seed Butter, Dimethicone, Ethylhexylglycerin, Xanthan Gum, Butyrospermum Parkii (Shea) Butter, Coleus Forskohlii Root Oil, Sodum Hyaluronate, Sodium Hydroxymethylglycinate, Disodium EDTA, Retinyl Palmitate, Tocopheryl Acetate</p>
			</div>

			<a class="greenButton btn btn-primary" role="button" data-toggle="collapse" href="#contourCreamIngredients" aria-expanded="false" aria-controls="5516">Ingredients</a>
        </div>

     <div id="tab2" class="tabcontent">

        <h1 class="text">NeriumAD™ ADVANCED Nightly Face Treatment</h1>

              	<p>NeriumAD™ Advanced Nightly Face Treatment is a rich, age-defying formula designed to fight oxidative stress, reducing the appearance of fine lines and wrinkles. This dynamic formula combines a matrix of key ingredients that work in synergy to enhance and restore your skin’s texture and feel, revealing youthful, replenished skin.</p>

			<h1 class="text">How To Use NeriumAD™ ADVANCED Nightly Face Treatment:</h1>

         <p>After cleansing skin thoroughly, apply four pumps (+/-) to your slightly damp face and neck. In the morning, rinse off the night cream (avoid contact with eyes). <br/> 
For optimal results, use with NeriumAD™ Advanced Daily Face Moisturizer.</p>

			

			<div class="collapse" id="nightCreamIngredients">

			<p class="ingredients">Aloe Barbadensis Leaf Juice, Hydrolyzed Egg Shell Membrane, Cetyl Alcohol, Oryza Sativa (Rice) Bran Oil, Glycerin, Nerium oleander Leaf Extract, C14-22 Alcohol, Ricinus Communis (Castor) seed oil, Olus Oil, Cetearyl Glucoside, Cetearyl Alcohol, Glyceryl Stearate, Carrageenan, Leuconostoc/Radish Root Ferment Filtrate, Dicaprylyl Ether, Dimethicone, C12-20 Alkyl Glucoside, Chenopodium Quinoa Seed Extract, Sodium PCA, Caprylyl Glycol, Glyceryl Caprylate, Phenylpropanol, Fragrance, Tocopherol, Xanthan Gum, Potassium Sorbate, Sodium Benzoate, Sorbic Acid.</p>
			</div>

			<a class="greenButton btn btn-primary" role="button" data-toggle="collapse" href="#nightCreamIngredients" aria-expanded="false" aria-controls="5516">Ingredients</a>
        </div>
            
        </div></div>
    
    <hr class="countries"> 
    <ul class="bulletList">
    <li>Mexico</li>
    <li>Singapore</li>
    <li>Korea</li>
    <li>Japan</li>
    <li>Malaysia</li>
    <li>Indonesia</li>
    <li>Phillipines</li>
    <li>Vietnam</li>
    <li>Cambodia</li>
    <li>Taiwan</li>
    <li>Thailand</li>
    </ul>
 
    
 
</body>
<?php include('../deepPageFooter.php'); ?>

