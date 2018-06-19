<?php include('../deepPageHeader.php'); ?>
  <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
  <script src="js/jssor.slider-25.2.1.min.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<body>

 <script>
		$(document).ready(function(){
			$("#quality").click(function(){
				$(".quality-content").show();
				$(".history-content").hide();
				$(".nerium-farms-content").hide();
        $(".SAB-content").hide();
        $(".safety-content").hide();
        $(".management-content").hide();
			});
			$("#history").click(function(){
        $(".history-content").show();
				$(".quality-content").hide();
				$(".nerium-farms-content").hide();
        $(".SAB-content").hide();
        $(".safety-content").hide();
        $(".management-content").hide();
			});
			$("#nerium-farms").click(function(){
				$(".nerium-farms-content").show();
				$(".quality-content").hide();
				$(".history-content").hide();
        $(".SAB-content").hide();
        $(".safety-content").hide();
        $(".management-content").hide();
			});
      $("#SAB").click(function(){
				$(".quality-content").hide();
				$(".history-content").hide();
				$(".nerium-farms-content").hide();
        $(".SAB-content").show();
        $(".safety-content").hide();
        $(".management-content").hide();
			});
      $("#safety").click(function(){
        $(".safety-content").show();
				$(".quality-content").hide();
				$(".history-content").hide();
				$(".nerium-farms-content").hide();
        $(".SAB-content").hide();
        $(".management-content").hide();
			});
      $("#management").click(function(){
        $(".management-content").show();
				$(".quality-content").hide();
				$(".history-content").hide();
				$(".nerium-farms-content").hide();
        $(".SAB-content").hide();
        $(".safety-content").hide();
			});
      $(".about-menu-choices").on("click", function() {
      $(".about-menu-choices").removeClass("active-about-menu-choice");
      $(".about-menu-choices").removeClass("initial-active-about-menu-choice");
       $(this).addClass("active-about-menu-choice");
      });
		});
	</script>

    <div class="row">
        <div class="col-sm-12">
            <div class="banner">
                <img src="../images/heroes/about_contact.jpg" alt="hero image">
            </div>
        </div>	
    </div>	

    <div class="row">
        <div class="col-xs-12">

        
            <hr class="aboutUs" />
                  <p>Nerium SkinCare, Inc. is dedicated to offering health and beauty solutions that are based on scientific research 
                  and actual customer success. Our natural products are founded on the result of years of continuing research at leading 
                  medical institutions, using the latest scientific methods and technology. Utilizing biotechnology research and new 
                  breakthrough extraction technology, Nerium SkinCare has formulated and developed a complete line of products that harnesses 
                  the unique and effective properties of the <i>Nerium oleander</i> plant.</p>
                  <p>Our vision is to consistently bring “first-in-class” products to market based on our firm belief in three tenets:
                  <ul class="bulletList">
                      <li>Core Science</li>
                      <li>Real Results</li>
                      <li>Continuous Advancement</li>
                  </ul>
                  <p>Our mission is to develop health and beauty solutions that provide unparalleled well-being to the consumer.</p>

                  <p>Nerium SkinCare utilizes the Nerium Biotechnology research and technology in the development, formulation, clinical testing, manufacturing, regulatory compliance, and product commercialization of its "best-in-class" natural skin care products. It’s this technology, core science, and continuing research on which Nerium SkinCare bases its products and defines their benefits.</p>

        </div>
    </div>

  <div class="row submenu-mobile">
    <div class="col-xs-12">
      <style>
        /*----- Accordion -----*/
        .accordion, .accordion * { -webkit-box-sizing:border-box;  -moz-box-sizing:border-box;  box-sizing:border-box; }
        .accordion { overflow:hidden; background:#f7f7f7; width:100%; margin:20px auto 0; font-family:Verdana, Geneva, sans-serif; font-size:14px; line-height:1.5}
        /*----- Section Titles -----*/
        .accordion-section-title { width:100%; padding:10px 30px 10px 15px; display:inline-block; background:#fff; transition:all linear 0.15s; -webkit-transition:all linear 0.15s; -moz-transition:all linear 0.15s; -ms-transition:all linear 0.15s; -o-transition:all linear 0.15s; font-size:1.200em; color:#3f3f3f; text-decoration:none; margin:0 0 1px 0; border:1px solid #dadada; position:relative; border-radius:4px; -webkit-border-radius:4px; -moz-border-radius:4px; -ms-border-radius:4px; -o-border-radius:4px;}
        .accordion-section-title.active, .accordion-section-title:hover { background:#A1D2E6; color:#fff;}
        /*----- Section Content -----*/ 
        .accordion-section-content { padding:15px; display:none; background:#f0f0f0; margin-bottom:2px; border-bottom:1px solid #dadada; }
        .active, .open { display:block;}
        .arrow { border-top:6px solid #7d7d7d; border-right:6px solid transparent; border-bottom:6px solid transparent; border-left:6px solid transparent; float:right; -webkit-transition: all .5s ease-in-out; -moz-transition: all .5s ease-in-out; -o-transition: all .5s ease-in-out; transition: all .5s ease-in-out; position:absolute; top:50%; right:15px; margin-top:-3px;} 
        .accordion-section-title.active .arrow {border-top:6px solid transparent; border-bottom:6px solid #fff; margin-top:-10px;}
      </style>
      <script>
            $(document).ready(function() {
            function close_accordion_section() {
                $('.accordion .accordion-section-title').removeClass('active');
                $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
            }
        
            $('.accordion-section-title').click(function(e) {
                // Grab current anchor value
                var currentAttrValue = $(this).attr('href');
        
                if($(e.target).is('.active')) {
                    close_accordion_section();
                }else {
                    close_accordion_section();
        
                    // Add active class to section title
                    $(this).addClass('active');
                    // Open up the hidden content panel
                    $('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
                }
                e.preventDefault();
            });
        });
      </script>

      <div class="accordion">
          <!-- First Accordion Start -->
          <div class="accordion-section">
              <a class="accordion-section-title" href="#accordion-1">Quality<span class="arrow"></span></a>
              <div id="accordion-1" class="accordion-section-content">
                <p>As a commitment to quality, Nerium SkinCare does not compromise on what goes into our products. The quality of Nerium Skincare's 
                products is a direct result of the investment into the people, scientific research, new technology development, natural farming methods, 
                biomass processing, cGMP production facilities, and product safety testing.</p>
                <br />
                <p>The Nerium Farms™ is the largest Nerium oleander operation of its kind in the world. Using environmentally responsible and sustainable 
                techniques, these naturally grown Nerium oleander plants, provide the raw material that make Nerium SkinCare’s products revolutionary. 
                Abiding by strict protocols, the Nerium oleander farm provides a dedicated and renewable biomass resource that is reserved exclusively for 
                Nerium SkinCare.</p>
                <br />
                <div class="responsive-video">
                <iframe  src="https://www.youtube.com/embed/sMcUmeEpgkU?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>  
                </div>
                <p>Considering that there were no historical accounts of <i>Nerium oleander</i> farming, it was imperative for Nerium SkinCare to develop 
                our own farming operations in order to broaden and commercialize access to the plant. Initially, transitioning of the plant from the nursery
                environment into a commercial environment involved the establishment of a research entity that allowed scientists to understand the growth
                patterns properly. Over time, as the physiology of <i>Nerium oleander</i> became more evident, planting and irrigation techniques, along 
                with harvesting and planting equipment, had to be newly developed. Nerium SkinCare is proud to say that we built our current farming 
                operations from the ground up.</p>
                <br />
                <p>After a decade of experience in <i>Nerium oleander</i> commercial farming, Nerium SkinCare continues to focus on new technology and 
                research that will allow us to enhance our farming operations. We are very proud of our all natural approach and adherence to strict biomedical
                field protocols. We continually seek ways to increase land utilization and field plant capacity through the development of improved planting 
                and irrigations techniques. Plans for field expansion are also in place.</p>
                </br />
                <p>Nerium SkinCare is proud of our quality control in the process from the farm into our final finished product.</p>
              </div>
          </div>
          <!-- First Accordion End -->
          <!-- Second Accordion Start -->
          <div class="accordion-section">
              <a class="accordion-section-title" href="#accordion-2">History<span class="arrow"></span></a>
              <div id="accordion-2" class="accordion-section-content">
                <p> We observed skin healing properties when researching the Nerium oleander plant in our labs. The history of Nerium SkinCare begins with groundbreaking
                research conducted by Dr. Robert Newman during his time with our parent company, Nerium Biotechnology. Dr. Newman’s research with natural botanical 
                compounds led to the re-discovery, identification, isolation, and further development of core ingredients from the Nerium oleander plant. Continuing 
                research and utilization of proprietary technologies has provided us the opportunity to develop a series of products that you know today as the NeriumAD® 
                line of skin care.</p>
                <br />
                <p>Historical use of the Nerium oleander plant has been reported in ancient texts and folklore for more than 1,500 years. In fact, the Nerium oleander 
                plant has been used traditionally as folk remedies for a wide variety of conditions. Over the last decade, there has been a considerable increase in the
                number of peer-reviewed studies in science journals that substantiate the properties of the Nerium oleander plant and its benefits.</p>
              </div>
          </div>
          <!-- Second Accordion End -->
          <!-- Third Accordion Start -->
          <div class="accordion-section">
              <a class="accordion-section-title" href="#accordion-3">Nerium Farms<span class="arrow"></span></a>
              <div id="accordion-3" class="accordion-section-content">
                <img src="../images/joel.png" width="250px;" class="float-left">
                <p>The Nerium Farms™ is the largest Nerium oleander operation of its kind in the world. With over 100,000 Nerium oleander plants, we employ natural and 
                organic farming practices and our orchard helps to minimize our carbon footprint by eliminating greenhouse gases throughout the year.</p>
                <br />
                <p>Our science begins at the farm where we use the latest horticulture techniques for watering, farming, and harvesting. For example, by also incorporating 
                the use of the latest analytical instruments, we are better able to determine the optimal time for harvesting. Similar analytic processes are employed in other 
                aspects of farming. From beginning to end, from farm to manufacturer to consumers, Nerium SkinCare is dedicated to providing real science and real results.</p>
                <br />
                <p>“We’re primarily after the leaves. And that's the reason why we do not want any irrigation water; we do not want any type of chemicals; nothing on the leaves.
                So it is a very specialized approach, it's extremely laborious, and it's very very expensive. No one has attempted to put in an orchard like this and they still
                  haven’t. It's not that easy to get involved in this industry. It's very complex; there’s a lot of science that goes into it. Science not only starting at the
                  field itself but all the way through the processing as well as to the end use. So it's an extremely complex dynamic approach. There’s no question in my mind
                  that this field is much more than a field of dreams. It truly is a field of life”– Joel Curtis, Chief Agricultural Officer of Nerium Farms™</p>     
            </div>
          </div>
          <!-- Third Accordion End -->
          <!-- Fourth Accordion Start -->
          <div class="accordion-section">
              <a class="accordion-section-title" href="#accordion-4">Scientific Advisory Board<span class="arrow"></span></a>
              <div id="accordion-4" class="accordion-section-content">
                <img src="images/SAB-mobile.png" width="100%"class="center"> 
            </div>
          </div>
          <!-- Fourth Accordion End -->
          <!-- Fifth Accordion Start -->
          <div class="accordion-section">
              <a class="accordion-section-title" href="#accordion-5">Safety<span class="arrow"></span></a>
              <div id="accordion-5" class="accordion-section-content">
                <p>Nerium SkinCare formulators, developers and researchers are dedicated to offering new unique skincare solutions that are based on review of ingredient use 
                experience, specific in vitro product testing, clinical research, pre/post consumer testing, scientific and the actual customer use reports and success. We 
                strongly believe in sustainable, honest, health focused practices, and maximum disclosure of safety information.<br /><br/>Nerium SkinCare is constantly 
                seeking new ways to educate our customers about our ingredients and products, how they were designed to work, and how to use them properly.</p>
                
                <p>Nerium SkinCare makes every effort to ensure our products are safe and effective. If you have any specific health related questions, please consult 
                your healthcare provider, and/or contact: 
                <a href="../contact/index.php">Contact Us</a></p>
            </div>
          </div>
          <!-- Fifth Accordion End -->
          <!-- Sixth Accordion Start -->
          <div class="accordion-section">
              <a class="accordion-section-title" href="#accordion-6">Management<span class="arrow"></span></a>
                <div id="accordion-6" class="accordion-section-content">
                <img src="../images/headshots1/knockeD.jpg" alt="Dennis R. Knocke" />
                <h4 class="space-below">Dennis R. Knocke, Chief Executive Officer <!--and Chairman of the Board of Directors--></h4>  
                <p>Mr. Knocke attended Sam Houston State University in Huntsville, Texas. He has successfully founded and operated several start-up 
                healthcare companies that were acquired by national and international business entities listed on the New York and London stock exchanges. Mr. Knocke was
                previously President of Bexar Credentials Verification, Inc., a start-up software technology company whose principals included the Bexar County Medical 
                Society, the Texas Medical Liability Trust, and Florida Physicians Insurance Company.</p>
                <br/><br/><br/>
                <img src="../images/headshots1/nesterJ.jpg" alt="Joseph B. Nester" />
                <h4 class="space-below ">Joseph B. Nester, Executive Vice President and Sec.-Treasurer</h4>
                <p>Mr. Nester graduated from the University of Texas at Austin with a BBA in General Business. He has over 23 years experience in the financial
                service industry as well as four years experience with a start-up pharmaceutical company, where he was initially the Secretary Treasurer and after four months
                  was named the President. During this time, he led Anvirzel™ in a successful Phase I clinical study, implemented a Compassionate Use Investigational New Drug 
                  (CUIND) program, and had direct involvement with the FDA, among other regulatory agencies.</p>
                <br/><br/> <br/>
                <img src="../images/headshots1/lorijones.jpg" alt="Lori Jones" />            
                <h4 class="space-below">Lori Jones, Chief Financial Officer</h4>
                <p>Ms. Jones has more than 25 years’ experience in finance and accounting with both private and publicly held entities.  She has served as 
                Chief Financial Officer and other executive level positions in various industries including biotech, manufacturing, and technology.   Those position included,
                in part, service as Vice President of Finance of CeloNova BioSciences, Inc, a global medical device manufacturer, CFO of Analytical Surveys, Inc., a publicly 
                traded geo-spatial mapping company, and was a partner in Tatum CFO, LLP.   Ms. Jones is a CPA and holds an MBA from the University of Texas at San Antonio. </p>
                <br/><br/>
                <h4 class="heading">Peter A. Leininger, M.D, Director</h4><br/>
                <p>Dr. Leininger received his medical degree from Indiana University. Upon graduation, he joined the U.S. Army as an intern and graduated as a Urologist from the Walter 
                Reed Army Medical Center. He served as Staff Urologist at Ft. Carson, Colorado, after which he entered private practice. In 1978, he joined his brother James R. 
                Leininger, M. D. at Kinetic Concepts, Inc. (KCI), a new medical products company in San Antonio, Texas. KCI became internationally recognized for innovation in 
                medical specialty beds and related products, eventually becoming an over-whelming success leading up to an IPO and sale of the company in 1998. Dr. Leininger’s 
                involvement included management of product research and development, medical research, product acquisition, engineering and manufacturing. He has been granted 
                numerous patents and his medical papers have been published in respected medical journals. Dr. Leininger has served KCI in the capacity as General Manager, National 
                Sales Manager, Medical Director, Board Member and Executive Vice-President from 1978 to 1998. In recent years, he has been active in various entrepreneurial endeavors
                 and affiliated with various business and community organizations. He currently serves as Chairman and President of The Arbor Group, President of Peak Finance, LP and 
                 various other business and real estate partnerships.</p>
            
                 <h4 class="heading">Michael J. Burke, Director</h4><br/>
                <p>Mr. Michael J. Burke’s education includes a Bachelor’s degree in Chemistry from State University of New York and a Master’s degree in Chemistry from Union College 
                in Schenectady, New York. He began his career at Sterling Drug in 1969 and served in various management roles worldwide. In 1985 he returned to corporate as VP of 
                MFG. with responsibility for Sterling’s 60+ manufacturing facilities. As part of a corporate development plan in 1992 he was named General Manager of Sterling Drug’s
                regional office in Hong Kong with responsibilities for sales, marketing and an entry strategy into China. After the sale of Sterling Drug in 1995, Mr. Burke moved 
                to Kinetic Concepts, Inc., first as head of Manufacturing and Quality and then as head of Research and Development. During this time, he participated in the sale of
                the company to private investors and later took part in taking it public again. After retiring from KCI in 2007, Mr. Burke opened Burke and Company, a private metal 
                fabrication company located in San Antonio, Texas.</p>
            
                <h4 class="heading">Gustavo Ulloa, Jr., Director</h4><br/>
                <p>Mr. Ulloa is General Manager and Director for Laboratorios Francelia, a pharmaceutical laboratory and manufacturing facility located in Tegucigalpa, Honduras. The 
                GMP clean room of Nerium is located inside this facility. He is also Country Sales Manager and Director for Distribuidora Francelia, an import and distribution firm 
                focusing on pharmaceuticals, disposables, hospital equipment, and related items. Mr. Ulloa attended the University of Miami where he studied Industrial Engineering. In 
                his various capacities, he interacts with governmental agencies and private entities throughout Central America. Mr. Ulloa is a member of various pharmaceutical trade 
                and producers organizations. He is presently involved in free trade negotiations related to pharmaceuticals between various Central American countries.</p>
            
                <h4 class="heading"> Richard Boxer, Director</h4><br/>
                <p>Mr. Boxer holds a B.A., from Queens University, Kingston, an M.B.A from York University, Toronto and is a Chartered Accountant. His career began with Clarkson
                 Gordon (now Ernst &amp; Young) and moved to the private business sector. During his business career he served as President of Waldec of Canada (a manufacturing 
                 company), acted as financial agent in a variety of equity transactions, founded and started a venture capital fund specializing in bridge loans, and has 
                 functioned as an angel investor in numerous business sectors. Presently Mr. Boxer is involved as a Director and a shareholder in Falls Management Company, which
                  has built and is now managing an $800,000,000 casino in Niagara Falls, Ontario. He currently serves as President of Buckingham Capital Corporation, a privately
                   owned Canadian merchant bank. Buckingham and an associated company, Rosmir Capital is involved in equity and debt financing, either as an agent or as a principal.</p>
            
                <h4 class="heading"> Kerry Mitchell, Director</h4><br/>
                <p>Ms. Mitchell completed the Executive Program at the Tuck School of Business at Dartmouth College in New Hampshire. She is a sought after speaker in Canada and 
                the U.S. on topics including Media, Leadership,Branding, Marketing to Women, and Women in Business. She provides extensive experience as an executive with a strong
                record of building and transforming multi-platform media brands that include some of the most iconic names in Canadian publishing. Her extensive leadership experience
                in brand development, marketing and sales, including in the cosmetics, fashion, and lifestyle industries, will be a great benefit to the development and marketing of
                Nerium’s consumer products.</p>
            
                <h4 class="heading">J. Peter Nettelfield, Honorary/Founding Director (2007-2012) </h4><br/>
                <p>Mr. Nettelfield attended the University of Manitoba in Winnipeg and prior to graduation joined the prestigious Canadian investment banking firm of Wood Gundy 
                &amp; Company, Limited. During his time there he assisted in the initial development of the Canadian money market. After 10 years with Wood Gundy, Mr. Nettelfield’s
                 interest changed from fixed income securities to equities. He then joined Burns Bros. &amp; Denton, noted for its excellent research department. Mr. Nettelfield 
                 serviced major institutions and commercial accounts. While at Burns Bros., at the invitation of Sir John Templeton, he became a director of the Templeton Growth 
                 Fund. Upon leaving the investment business, he moved to Texas where he became the president of the Texas subsidiary of a Canadian real estate development firm. In 
                 this capacity, he oversaw commercial development in Dallas, Austin, and San Antonio. In recent years, he has been active in various entrepreneurial endeavors. While 
                 Mr. Nettelfield has been a resident of Texas for over 30 years, he is proud of his Canadian heritage and has retained his Canadian citizenship.</p>
                 
                <h4 class="heading">John Christopher Counsel Wansbrough, Director (Retired 2016)</h4><br/>
                <p>Mr. Wansbrough holds a B.A., from the University of Toronto, and is a Chartered Financial Analyst. His career began with the prestigious Canadian investment banking
                 firm of Wood Gundy &amp; Company, Limited. After 7 years with Wood Gundy he joined National Trust Company Limited, were he served as President of National Trust Company
                  from 1977 to 1986, Vice Chairman from 1986 to 1991 and Lead Director through 1995. Mr. Wansbrough has also served as Chairman of the Board of OMERS Realty Corporation 
                  from 1989 to 1997, Chairman of the R.S. McLaughlin Foundation from 1994 to 2007, and currently serves as Chairman of Rogers Telecommunications Limited from 1997 to the
                   present. His service as a director to many additional business and community affiliations are too numerous to list.</p>
            
                <hr class="advisory">
            
                <h4 class="heading">Robert A. Newman, Ph.D., Scientific Advisor</h4><br/>
                <p>Dr. Newman obtained his M.S. and Ph.D. degrees in Pharmacology and Toxicology from the University of Connecticut and then served in postdoctoral positions at the 
                Medical School of the University of Georgia as well as the Department of Biochemistry at the University of Vermont. He served as a faculty member at the University of 
                Vermont Medical School for seven years and then spent a sabbatical year at Stanford University performing research on immune targeted therapy. He has spent the last 24
                 years at the University of Texas M. D. Anderson Cancer Center in Houston, Texas where he served as the founder and Co-Director of the Pharmaceutical Development Center.
                  He has published over 270 articles dealing with the pharmacology, toxicology and development of anticancer drugs. Dr. Newman has recently retired (September 1, 2008) 
                  from M. D. Anderson, but remains actively involved in continuing research as Scientific Advisor to NBI.</p>
            
                <h4 class="heading">Keith I. Block, M.D., Medical Advisor</h4><br/>
                <p>Dr. Block is an internationally recognized integrative cancer-care specialist and visiting lecturer. As Medical Director of the Block Center for Integrative Cancer 
                Care in Evanston, Illinois, the Block Center is committed to caring for people with cancer and improving total wellness through the integration of research-based 
                complementary therapies with innovative approaches to conventional medicine. Dr. Block is the Director of Integrative Medical Education and the Clinical Assistant 
                Professor, Department of Medical Education for the College of Medicine, University of Illinois at Chicago. While too numerous to list all governmental, teaching, and
                 professional appointments here, Dr. Block is Editor-In-Chief of Integrated Cancer Therapies, Sage Science Press, a Member of The Editorial Board for Physician Data 
                 Query, CAM, National Cancer Institute, Bethesda, Maryland, and Scientific Director of the Institute for Integrative Cancer Research and Education. He brings first-hand
                  clinical knowledge of Anvirzel™ and its effects through his observations of patients receiving Anvirzel™ therapy.</p>
            
                <h4 class="heading">Donald E. Baxter, M.D., International Medical Advisor</h4><br/>
                <p>Dr. Baxter is an internationally renowned and board-certified orthopedic surgeon with a private practice in Houston, Texas. He has been a Clinical Professor of 
                Orthopedic Surgery at both Baylor College of Medicine and the University of Texas Health Science Center. While too numerous to list here, Dr. Baxter is the author of
                 many papers and books. He is also an international and visiting lecturer. Additionally, Dr. Baxter is a past president and director of the Texas Neurofibromatosis 
                 Foundation. He brings first hand knowledge of Anvirzel ™ and its effects through his personal observations of family and friends receiving Anvirzel™ therapy.</p>
            
                <h4 class="heading">Charles R. Hughes, Branding and Marketing Advisor</h4><br/>
                <p>Mr. Hughes is the founder and presently operates Brand Rules, LLC, located in Severna Park, Maryland. Brand Rules is a consulting consortium that applies decades 
                of experience to create, shape, and sustain successful brands. It guides clients in developing a differentiating market strategy, an engaged culture, and effective 
                execution of product, marketing, and retail. Clients include Hyundai, Kia, Ford, and Zodiac as well as start-ups, not-for-profits, and marketing companies. Mr. Hughes 
                was the founder, President, and CEO of Land Rover North America, BMW Group located in Lanham, Maryland. As Chief Executive Officer, he presided over a $1 billion, 
                24,000-unit sales enterprise that successfully introduced the first Range Rover then Land Rover to the North American market. NBI believes that Mr. Hughes’ experience
                 with successfully building, branding, marketing, and expanding start-ups will be invaluable to NBI.</p>
            </div>
          </div>
          <!-- Sixth Accordion End -->
      </div>
      <!--Accordion End-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    </div> 
  </div>

 
  <div class="row submenu-desktop">
    <div class="col-xs-12">

      <div class="about-menu" >
        <button class="about-menu-choices initial-active-about-menu-choice" id="quality">Quality</button>
        <button class="about-menu-choices" id="history">History</button>
        <button class="about-menu-choices" id="nerium-farms">Nerium Farms</button>
        <button class="about-menu-choices" id="SAB">SAB</button>
        <button class="about-menu-choices" id="safety">Safety</button>
        <button class="about-menu-choices" id="management">Management</button>
		  </div>
	

		<span class="quality-content">
      <p>As a commitment to quality, Nerium SkinCare does not compromise on what goes into our products. The quality of Nerium Skincare's 
      products is a direct result of the investment into the people, scientific research, new technology development, natural farming methods, 
      biomass processing, cGMP production facilities, and product safety testing.</p>
      
      <p>The Nerium Farms™ is the largest Nerium oleander operation of its kind in the world. Using environmentally responsible and sustainable 
      techniques, these naturally grown Nerium oleander plants, provide the raw material that make Nerium SkinCare’s products revolutionary. 
      Abiding by strict protocols, the Nerium oleander farm provides a dedicated and renewable biomass resource that is reserved exclusively for 
      Nerium SkinCare.</p>
      
      <div class="responsive-video">
        <iframe  src="https://www.youtube.com/embed/sMcUmeEpgkU?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>  
        <br/><br/><br/>
      </div>
      <p>Considering that there were no historical accounts of <i>Nerium oleander</i> farming, it was imperative for Nerium SkinCare to develop 
      our own farming operations in order to broaden and commercialize access to the plant. Initially, transitioning of the plant from the nursery
      environment into a commercial environment involved the establishment of a research entity that allowed scientists to understand the growth
      patterns properly. Over time, as the physiology of <i>Nerium oleander</i> became more evident, planting and irrigation techniques, along 
      with harvesting and planting equipment, had to be newly developed. Nerium SkinCare is proud to say that we built our current farming 
      operations from the ground up.</p>

      <p>After a decade of experience in <i>Nerium oleander</i> commercial farming, Nerium SkinCare continues to focus on new technology and 
      research that will allow us to enhance our farming operations. We are very proud of our all natural approach and adherence to strict biomedical
      field protocols. We continually seek ways to increase land utilization and field plant capacity through the development of improved planting 
      and irrigations techniques. Plans for field expansion are also in place.</p> 

      <p>Nerium SkinCare is proud of our quality control in the process from the farm into our final finished product.</p>
    </span>


		<span class="history-content">
      <p> We observed skin healing properties when researching the Nerium oleander plant in our labs. The history of Nerium SkinCare begins with groundbreaking
      research conducted by Dr. Robert Newman during his time with our parent company, Nerium Biotechnology. Dr. Newman’s research with natural botanical 
      compounds led to the re-discovery, identification, isolation, and further development of core ingredients from the Nerium oleander plant. Continuing 
      research and utilization of proprietary technologies has provided us the opportunity to develop a series of products that you know today as the NeriumAD® 
      line of skin care.</p>

      <p>Historical use of the Nerium oleander plant has been reported in ancient texts and folklore for more than 1,500 years. In fact, the Nerium oleander 
      plant has been used traditionally as folk remedies for a wide variety of conditions. Over the last decade, there has been a considerable increase in the
      number of peer-reviewed studies in science journals that substantiate the properties of the Nerium oleander plant and its benefits.</p>
                    
		</span>

		<span class="nerium-farms-content">
      <img src="../images/joel.png">
      <p>The Nerium Farms™ is the largest Nerium oleander operation of its kind in the world. With over 100,000 Nerium oleander plants, we employ natural and 
      organic farming practices and our orchard helps to minimize our carbon footprint by eliminating greenhouse gases throughout the year.</p>

      <p>Our science begins at the farm where we use the latest horticulture techniques for watering, farming, and harvesting. For example, by also incorporating 
      the use of the latest analytical instruments, we are better able to determine the optimal time for harvesting. Similar analytic processes are employed in other 
      aspects of farming. From beginning to end, from farm to manufacturer to consumers, Nerium SkinCare is dedicated to providing real science and real results.</p>

      <p>“We’re primarily after the leaves. And that's the reason why we do not want any irrigation water; we do not want any type of chemicals; nothing on the leaves.
      So it is a very specialized approach, it's extremely laborious, and it's very very expensive. No one has attempted to put in an orchard like this and they still
        haven’t. It's not that easy to get involved in this industry. It's very complex; there’s a lot of science that goes into it. Science not only starting at the
        field itself but all the way through the processing as well as to the end use. So it's an extremely complex dynamic approach. There’s no question in my mind
        that this field is much more than a field of dreams. It truly is a field of life”– Joel Curtis, Chief Agricultural Officer of Nerium Farms™</p>
		</span>

    <span class="SAB-content">
      <img src="images/board.jpg" class="center">
    </span>

    <span class="safety-content">
    <p>Nerium SkinCare formulators, developers and researchers are dedicated to offering new unique skincare solutions that are based on review of ingredient use 
    experience, specific in vitro product testing, clinical research, pre/post consumer testing, scientific and the actual customer use reports and success. We 
    strongly believe in sustainable, honest, health focused practices, and maximum disclosure of safety information.<br /><br/>Nerium SkinCare is constantly 
    seeking new ways to educate our customers about our ingredients and products, how they were designed to work, and how to use them properly.</p>
    
    <p>Nerium SkinCare makes every effort to ensure our products are safe and effective. If you have any specific health related questions, please consult 
    your healthcare provider, and/or contact: 
    <a href="../contact/index.php">Contact Us</a></p>
    </span>
    
    <span class="management-content">
    <img src="../images/headshots1/knockeD.jpg" alt="Dennis R. Knocke" />
    <h4 class="space-below">Dennis R. Knocke, Chief Executive Officer <!--and Chairman of the Board of Directors--></h4>  
    <p>Mr. Knocke attended Sam Houston State University in Huntsville, Texas. He has successfully founded and operated several start-up 
    healthcare companies that were acquired by national and international business entities listed on the New York and London stock exchanges. Mr. Knocke was
     previously President of Bexar Credentials Verification, Inc., a start-up software technology company whose principals included the Bexar County Medical 
     Society, the Texas Medical Liability Trust, and Florida Physicians Insurance Company.</p>
    <br/><br/><br/>
    <img src="../images/headshots1/nesterJ.jpg" alt="Joseph B. Nester" />
    <h4 class="space-below ">Joseph B. Nester, Executive Vice President and Sec.-Treasurer</h4>
    <p>Mr. Nester graduated from the University of Texas at Austin with a BBA in General Business. He has over 23 years experience in the financial
     service industry as well as four years experience with a start-up pharmaceutical company, where he was initially the Secretary Treasurer and after four months
      was named the President. During this time, he led Anvirzel™ in a successful Phase I clinical study, implemented a Compassionate Use Investigational New Drug 
      (CUIND) program, and had direct involvement with the FDA, among other regulatory agencies.</p>
    <br/><br/> <br/>
    <img src="../images/headshots1/lorijones.jpg" alt="Lori Jones" />            
    <h4 class="space-below">Lori Jones, Chief Financial Officer</h4>
    <p>Ms. Jones has more than 25 years’ experience in finance and accounting with both private and publicly held entities.  She has served as 
    Chief Financial Officer and other executive level positions in various industries including biotech, manufacturing, and technology.   Those position included,
     in part, service as Vice President of Finance of CeloNova BioSciences, Inc, a global medical device manufacturer, CFO of Analytical Surveys, Inc., a publicly 
     traded geo-spatial mapping company, and was a partner in Tatum CFO, LLP.   Ms. Jones is a CPA and holds an MBA from the University of Texas at San Antonio. </p>
    <br/><br/>

    <h4 class="heading">Peter A. Leininger, M.D, Director</h4><br/>
    <p>Dr. Leininger received his medical degree from Indiana University. Upon graduation, he joined the U.S. Army as an intern and graduated as a Urologist from the Walter 
    Reed Army Medical Center. He served as Staff Urologist at Ft. Carson, Colorado, after which he entered private practice. In 1978, he joined his brother James R. 
    Leininger, M. D. at Kinetic Concepts, Inc. (KCI), a new medical products company in San Antonio, Texas. KCI became internationally recognized for innovation in 
    medical specialty beds and related products, eventually becoming an over-whelming success leading up to an IPO and sale of the company in 1998. Dr. Leininger’s 
    involvement included management of product research and development, medical research, product acquisition, engineering and manufacturing. He has been granted 
    numerous patents and his medical papers have been published in respected medical journals. Dr. Leininger has served KCI in the capacity as General Manager, National 
    Sales Manager, Medical Director, Board Member and Executive Vice-President from 1978 to 1998. In recent years, he has been active in various entrepreneurial endeavors
     and affiliated with various business and community organizations. He currently serves as Chairman and President of The Arbor Group, President of Peak Finance, LP and 
     various other business and real estate partnerships.</p>

     <h4 class="heading">Michael J. Burke, Director</h4><br/>
    <p>Mr. Michael J. Burke’s education includes a Bachelor’s degree in Chemistry from State University of New York and a Master’s degree in Chemistry from Union College 
    in Schenectady, New York. He began his career at Sterling Drug in 1969 and served in various management roles worldwide. In 1985 he returned to corporate as VP of 
    MFG. with responsibility for Sterling’s 60+ manufacturing facilities. As part of a corporate development plan in 1992 he was named General Manager of Sterling Drug’s
    regional office in Hong Kong with responsibilities for sales, marketing and an entry strategy into China. After the sale of Sterling Drug in 1995, Mr. Burke moved 
    to Kinetic Concepts, Inc., first as head of Manufacturing and Quality and then as head of Research and Development. During this time, he participated in the sale of
    the company to private investors and later took part in taking it public again. After retiring from KCI in 2007, Mr. Burke opened Burke and Company, a private metal 
    fabrication company located in San Antonio, Texas.</p>

    <h4 class="heading">Gustavo Ulloa, Jr., Director</h4><br/>
    <p>Mr. Ulloa is General Manager and Director for Laboratorios Francelia, a pharmaceutical laboratory and manufacturing facility located in Tegucigalpa, Honduras. The 
    GMP clean room of Nerium is located inside this facility. He is also Country Sales Manager and Director for Distribuidora Francelia, an import and distribution firm 
    focusing on pharmaceuticals, disposables, hospital equipment, and related items. Mr. Ulloa attended the University of Miami where he studied Industrial Engineering. In 
    his various capacities, he interacts with governmental agencies and private entities throughout Central America. Mr. Ulloa is a member of various pharmaceutical trade 
    and producers organizations. He is presently involved in free trade negotiations related to pharmaceuticals between various Central American countries.</p>

    <h4 class="heading"> Richard Boxer, Director</h4><br/>
    <p>Mr. Boxer holds a B.A., from Queens University, Kingston, an M.B.A from York University, Toronto and is a Chartered Accountant. His career began with Clarkson
     Gordon (now Ernst &amp; Young) and moved to the private business sector. During his business career he served as President of Waldec of Canada (a manufacturing 
     company), acted as financial agent in a variety of equity transactions, founded and started a venture capital fund specializing in bridge loans, and has 
     functioned as an angel investor in numerous business sectors. Presently Mr. Boxer is involved as a Director and a shareholder in Falls Management Company, which
      has built and is now managing an $800,000,000 casino in Niagara Falls, Ontario. He currently serves as President of Buckingham Capital Corporation, a privately
       owned Canadian merchant bank. Buckingham and an associated company, Rosmir Capital is involved in equity and debt financing, either as an agent or as a principal.</p>

    <h4 class="heading"> Kerry Mitchell, Director</h4><br/>
    <p>Ms. Mitchell completed the Executive Program at the Tuck School of Business at Dartmouth College in New Hampshire. She is a sought after speaker in Canada and 
    the U.S. on topics including Media, Leadership,Branding, Marketing to Women, and Women in Business. She provides extensive experience as an executive with a strong
    record of building and transforming multi-platform media brands that include some of the most iconic names in Canadian publishing. Her extensive leadership experience
    in brand development, marketing and sales, including in the cosmetics, fashion, and lifestyle industries, will be a great benefit to the development and marketing of
    Nerium’s consumer products.</p>

    <h4 class="heading">J. Peter Nettelfield, Honorary/Founding Director (2007-2012) </h4><br/>
    <p>Mr. Nettelfield attended the University of Manitoba in Winnipeg and prior to graduation joined the prestigious Canadian investment banking firm of Wood Gundy 
    &amp; Company, Limited. During his time there he assisted in the initial development of the Canadian money market. After 10 years with Wood Gundy, Mr. Nettelfield’s
     interest changed from fixed income securities to equities. He then joined Burns Bros. &amp; Denton, noted for its excellent research department. Mr. Nettelfield 
     serviced major institutions and commercial accounts. While at Burns Bros., at the invitation of Sir John Templeton, he became a director of the Templeton Growth 
     Fund. Upon leaving the investment business, he moved to Texas where he became the president of the Texas subsidiary of a Canadian real estate development firm. In 
     this capacity, he oversaw commercial development in Dallas, Austin, and San Antonio. In recent years, he has been active in various entrepreneurial endeavors. While 
     Mr. Nettelfield has been a resident of Texas for over 30 years, he is proud of his Canadian heritage and has retained his Canadian citizenship.</p>
     
    <h4 class="heading">John Christopher Counsel Wansbrough, Director (Retired 2016)</h4><br/>
    <p>Mr. Wansbrough holds a B.A., from the University of Toronto, and is a Chartered Financial Analyst. His career began with the prestigious Canadian investment banking
     firm of Wood Gundy &amp; Company, Limited. After 7 years with Wood Gundy he joined National Trust Company Limited, were he served as President of National Trust Company
      from 1977 to 1986, Vice Chairman from 1986 to 1991 and Lead Director through 1995. Mr. Wansbrough has also served as Chairman of the Board of OMERS Realty Corporation 
      from 1989 to 1997, Chairman of the R.S. McLaughlin Foundation from 1994 to 2007, and currently serves as Chairman of Rogers Telecommunications Limited from 1997 to the
       present. His service as a director to many additional business and community affiliations are too numerous to list.</p>

    <hr class="advisory">

    <h4 class="heading">Robert A. Newman, Ph.D., Scientific Advisor</h4><br/>
    <p>Dr. Newman obtained his M.S. and Ph.D. degrees in Pharmacology and Toxicology from the University of Connecticut and then served in postdoctoral positions at the 
    Medical School of the University of Georgia as well as the Department of Biochemistry at the University of Vermont. He served as a faculty member at the University of 
    Vermont Medical School for seven years and then spent a sabbatical year at Stanford University performing research on immune targeted therapy. He has spent the last 24
     years at the University of Texas M. D. Anderson Cancer Center in Houston, Texas where he served as the founder and Co-Director of the Pharmaceutical Development Center.
      He has published over 270 articles dealing with the pharmacology, toxicology and development of anticancer drugs. Dr. Newman has recently retired (September 1, 2008) 
      from M. D. Anderson, but remains actively involved in continuing research as Scientific Advisor to NBI.</p>

    <h4 class="heading">Keith I. Block, M.D., Medical Advisor</h4><br/>
    <p>Dr. Block is an internationally recognized integrative cancer-care specialist and visiting lecturer. As Medical Director of the Block Center for Integrative Cancer 
    Care in Evanston, Illinois, the Block Center is committed to caring for people with cancer and improving total wellness through the integration of research-based 
    complementary therapies with innovative approaches to conventional medicine. Dr. Block is the Director of Integrative Medical Education and the Clinical Assistant 
    Professor, Department of Medical Education for the College of Medicine, University of Illinois at Chicago. While too numerous to list all governmental, teaching, and
     professional appointments here, Dr. Block is Editor-In-Chief of Integrated Cancer Therapies, Sage Science Press, a Member of The Editorial Board for Physician Data 
     Query, CAM, National Cancer Institute, Bethesda, Maryland, and Scientific Director of the Institute for Integrative Cancer Research and Education. He brings first-hand
      clinical knowledge of Anvirzel™ and its effects through his observations of patients receiving Anvirzel™ therapy.</p>

    <h4 class="heading">Donald E. Baxter, M.D., International Medical Advisor</h4><br/>
    <p>Dr. Baxter is an internationally renowned and board-certified orthopedic surgeon with a private practice in Houston, Texas. He has been a Clinical Professor of 
    Orthopedic Surgery at both Baylor College of Medicine and the University of Texas Health Science Center. While too numerous to list here, Dr. Baxter is the author of
     many papers and books. He is also an international and visiting lecturer. Additionally, Dr. Baxter is a past president and director of the Texas Neurofibromatosis 
     Foundation. He brings first hand knowledge of Anvirzel ™ and its effects through his personal observations of family and friends receiving Anvirzel™ therapy.</p>

    <h4 class="heading">Charles R. Hughes, Branding and Marketing Advisor</h4><br/>
    <p>Mr. Hughes is the founder and presently operates Brand Rules, LLC, located in Severna Park, Maryland. Brand Rules is a consulting consortium that applies decades 
    of experience to create, shape, and sustain successful brands. It guides clients in developing a differentiating market strategy, an engaged culture, and effective 
    execution of product, marketing, and retail. Clients include Hyundai, Kia, Ford, and Zodiac as well as start-ups, not-for-profits, and marketing companies. Mr. Hughes 
    was the founder, President, and CEO of Land Rover North America, BMW Group located in Lanham, Maryland. As Chief Executive Officer, he presided over a $1 billion, 
    24,000-unit sales enterprise that successfully introduced the first Range Rover then Land Rover to the North American market. NBI believes that Mr. Hughes’ experience
     with successfully building, branding, marketing, and expanding start-ups will be invaluable to NBI.</p>
   
    </span>
  </div>
</div>
<?php include('../deepPageFooter.php'); ?>
<!--END AMBER's SCRIPT -->


