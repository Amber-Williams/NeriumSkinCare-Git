<!-- lip-therapy -->
<?php include('deepPageHeader.php'); ?>

<div class="row">
	<div class="col-xs-12 slider">
    <!-- slider begin -->
    <script src="js/jssor.slider-26.3.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $Align: 0,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 15,
                $SpacingY: 10
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 834;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /* jssor slider loading skin double-tail-spin css */

        .jssorl-004-double-tail-spin img {
            animation-name: jssorl-004-double-tail-spin;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-004-double-tail-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssorb031 {position:absolute;}
        .jssorb031 .i {position:absolute;cursor:pointer;}
        .jssorb031 .i .b {fill:#FFF;fill-opacity:1;stroke:#C3004F;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.3;}
        .jssorb031 .i:hover .b {fill:#fff;fill-opacity:.7;stroke:#000;stroke-opacity:.5;}
        .jssorb031 .iav .b {fill:#C3004F;stroke:#C3004F;fill-opacity:1;} /* edited */
        .jssorb031 .i.idn {opacity:.3;}

        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:834px;height:430px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/therapypage/carousel/double-tail-spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:838px;height:430px;overflow:hidden;">
            <div>
                <img data-u="image" src="images/therapypage/carousel/NSC.TL.Web.Carousel.CS.V4.jpg" />
            </div>
            <div>
                <img data-u="image" src="images/therapypage/carousel/NSC.TL.Web.Carousel.DP.V4.jpg" />
            </div>
            <div>
                <img data-u="image" src="images/therapypage/carousel/NSC.TL.Web.Carousel.PS.V4.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:60px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
  </div>
</div><!-- row -->

<div class="row hidden-xs">
	<div id="tabs" class="tabs">
		<div class="row">
			<div class="col-xs-12">
				<ul class="navTabs">
					<li onmouseover="radioEffectColdSore();"><a href="#tabs-1"><p id="tab1" class="coldSore"></p></a></li>
					<li onmouseover="radioEffectPsoriasis();"><a href="#tabs-2"><p id="tab2" class="psoriasis"></p></a></li>
					<li class="lastTab" onmouseover="radioEffectDermalPain();"><a href="#tabs-3"><p id="tab3" class="dermalPain"></p></a></li>
				</ul>
			</div>
		</div>

		<div id="tabs-1">
			<div class="row">
				<h1 class="productHeader">COLD SORE THERAPY &amp; DAILY LIP MAINTENANCE</h1>
				<p class="csDailyMaintenance">This treatment system works together to fight against cold sores and reoccurrence of cold sores. Introducing a one of a kind cold sore treatment system to not only stop cold sores in their tracks, but also protect against them – Cold Sores Go Away, Stay Away.</p>
				<hr class="redHR" />
			</div>

			<div class="row">
				<h1 class="lipTherapy">COLD SORE THERAPY</h1>
				<div class="row">
					<div class="col-md-12">
						<img src="images/therapypage/Therapy-Cold-Sore-Tube_NoShadow_horiz.png" alt="cold sore applicator" width="300" class="center-block">
					</div>
				</div>	

				<div class="row">
					<div class="col-md-12">
						<p class="csTherapy">Provides fast-acting relief and promotes healing upon first contact. Formulated with powerful ingredients such as Docosanol, Camphor and Geranium oil, this dynamic treatment helps to calm, reduce cold sore appearance while easing discomfort and inflammation in the process.</p>
					</div>
				</div>
				<hr class="redHR" />
			</div>

			<div class="row">
				<h1 class="lipTherapy">DAILY LIP MAINTENANCE</h1>
				<div class="row">
					<div class="col-md-12">
						<img src="images/therapypage/Daily-Lip-Maintenance-Tube_NoShadow_horiz.png" alt="daily lip maintenance" width="400" class="center-block">
					</div>

					<div class="row">				
						<div class="col-md-12">
							<p class="csDailyLipMaintenance">Moisturizes and protects the lips following outbreaks to ensure continuous lip health and post-treatment protection. Lip maintenance following a cold sore is vital, and the powerful active ingredient Allantoin and NAE-14 have the necessary properties to ensure the well-being of your lips.</p>
						</div>
					</div>
			   <hr class="redHR" />
				</div>
			</div>	

			<div class="row">
				<h1 class="lipTherapy">HOW TO USE</h1>
					<div class="col-sm-1 visible-lg visible-md">
						<img src="images/therapypage/Step1.png" alt="step one">
					</div>	
					<div class="col-sm-3 visible-lg visible-md">
						<p class="csHowToUse"><span>Use Cold Sore Therapy:</span> Apply to cold sore 3 to 4 times daily. Recommended to clean hands and virus site before applying.</p>
					</div>
					<div class="col-sm-1 visible-lg visible-md">
						<img src="images/therapypage/Step2.png" alt="step two">
					</div>
					<div class="col-sm-3 visible-lg visible-md">
						<p class="csHowToUse">Once cold sore is fully healed, stop using Cold Sore Therapy.</p>
					</div>
					<div class="col-sm-1 visible-lg visible-md">
						<img src="images/therapypage/Step3.png" alt="step three">
					</div>
					<div class="col-sm-3 visible-lg visible-md">
						<p class="csHowToUse"><span>Use Daily Lip Maintenance:</span><br />Apply as needed to prevent recurrence of cold sore. Use only after cold sore is fully healed. Recommended to clean applicator in between use.</p>
					</div>
			</div>

			<div class="row howtoUseRowOne">
				<div class="col-sm-2 hidden-lg hidden-md"></div>
				<div class="col-sm-2 hidden-lg hidden-md">
					<img src="images/therapypage/Step1.png" alt="step one" class="center-block">
				</div>
				<div class="col-sm-6 hidden-lg hidden-md">
					<p class="csHowToUse"><span>Use Cold Sore Therapy:</span> Apply to cold sore 3 to 4 times daily. Recommended to clean hands and virus site before applying.</p>
				</div>
				<div class="col-sm-2 hidden-lg hidden-md"></div>
			</div>

			<div class="row howtoUseRowTwo">
				<div class="col-sm-2 hidden-lg hidden-md"></div>
				<div class="col-sm-2 hidden-lg hidden-md">
					<img src="images/therapypage/Step2.png" alt="step two" class="center-block">
				</div>
				<div class="col-sm-6 hidden-lg hidden-md">
					<p class="csHowToUse">Once cold sore is fully healed, stop using Cold Sore Therapy.</p>
				</div>
				<div class="col-sm-2 hidden-lg hidden-md"></div>
			</div>

			<div class="row">
				<div class="col-sm-2 hidden-lg hidden-md"></div>
				<div class="col-sm-2 hidden-lg hidden-md">
					<img src="images/therapypage/Step3.png" alt="step three" class="center-block">
				</div>
				<div class="col-sm-6 hidden-lg hidden-md">
					<p class="csHowToUse"><span>Use Daily Lip Maintenance:</span> Apply as needed to prevent recurrence of cold sore. Use only after cold sore is fully healed. Recommended to clean applicator in between use.</p>
				</div>
				<div class="col-sm-2 hidden-lg hidden-md"></div>	
			</div>

			<hr class="redHR" />

			<div class="row">
				<h1 class="lipTherapy">SYMPTOMS</h1>

				<ul class="csSymptomsList">
					<li><p>Tingling and itching</p><img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="symptom illustration" class="center-block"></img></li>
					<li><p>Blisters</p><img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="symptom illustration" class="center-block"></img></li>
					<li><p>Oozing and crusting</p><img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="symptom illustration" class="center-block"></img></li>
				</ul>

			</div>

			<hr class="redHR" />

			<div class="row">
				<h1 class="lipTherapy">CAUSES</h1>
				<p class="csCauses">Cold sores are caused by the herpes simplex virus-1. However, most people who have the virus never develop signs and symptoms of cold sores. Once you have had an outbreak, the virus lies dormant deep in nerve cells under the skin. Recurrence of another cold sore may emerge due to viral infection, hormonal changes, stress, exposure to sunlight or wind and changes in the immune system.</p>
				<hr class="redHR" />
			</div>

			<div class="row">
				<h1 class="lipTherapy">INGREDIENT BENEFITS FOR COLD SORE THERAPY</h1>
				<img src="images/therapypage/Key.Ingredients.ColdSore.V4.png" alt="cold sore key ingredients" class="img-responsive center-block">
			</div>
		</div>

		<div id="tabs-2">
			<div class="row">
				<h1 class="productHeader">PSORIASIS RELIEF THERAPY</h1>
				<p class="psLipTherapy">This fast-acting Psoriasis relief cream is a powerful formula designed to help sooth and relieve skin’s itching, redness, flakiness and scaling, along with other symptoms associated with psoriasis and seborrheic dermatitis. Formulated for ultra-strength, this cream performs as a skin protectant while enhancing rejuvenation of the skin to help quickly reduce active flare-ups and delay future recurrences.</p>
				<hr class="redHR" />
			</div>

			<div class="row">
				<h1 class="lipTherapy">HOW TO USE</h1>
				<p class="psHowToUse">Apply to affected areas 1 to 4 times daily until condition subsides.</p>
				<hr class="redHR" />
			</div>

			<div class="row">
				<h1 class="lipTherapy">SYMPTOMS</h1>
				<ul class="psSymptomsList">
					<li>
						<p>Dryness</p>
						<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="psoriasis symptoms illustration" class="center-block">
					</li>
					<li>
						<p>Rashes and redness</p>
						<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="psoriasis symptoms illustration" class="center-block">
					</li>
					<li>
						<p>Skin peeling or flaking</p>
						<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="psoriasis symptoms illustration" class="center-block">
					</li>
					<li>
						<p>Thickness of the skin</p>
						<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="psoriasis symptoms illustration" class="center-block">
					</li>
					<li>
						<p>Stiffness of<br />adjacent joints</p>
						<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="psoriasis symptoms illustration" class="center-block">
					</li>
				</ul>
				<hr class="redHR" />
			</div>

			<div class="row">
				<h1 class="lipTherapy">CAUSES</h1>
				<p class="psCauses">Psoriasis is a genetic immune system condition characterized by patches of abnormal skin. These patches are caused from the skin cell turn over to be increased rapidly and the cells pile up and cause skin congestion.</p>
				<hr class="redHR" />
			</div>

			<div class="row">
				<h1 class="lipTherapy">KEY INGREDIENTS</h1>
				<img src="images/therapypage/Key.Ingredients.Psoriasis.V3.png" alt="psoriasis ingredients" class="center-block img-responsive">		
			</div>
		</div>

		<div id="tabs-3">
			<div class="row">
				<h1 class="productHeader">DERMAL PAIN RELIEF THERAPY</h1>
				<p class="dpTherapy">Introducing the first ever Dermal Pain Relief spray to contain Nerium SkinCare’s powerful and effective NAE-8TM ingredient. Formulated with other proven skin-protecting ingredients, such as Lavender and Tea Tree Oil. This fast-acting spray will quickly help to relieve symptoms such as pain, itching, tingling and burning caused from various skin conditions such as shingles, sunburns, scrapes and insect bites.</p>
				<hr class="redHR" />
			</div>

			<div class="row">
				<h1 class="lipTherapy">HOW TO USE</h1>
				<p class="dpHowToUse">Apply to shingles, sun-burn, scrapes, insect bites and other dermal pain related conditions 3 to 4 times daily for fast-acting pain relief.</p>
				<hr class="redHR" />
			</div>

			<div class="row">
					<h1 class="lipTherapy">SYMPTOMS</h1>
			</div>

			<div class="row visible-lg visible-md">
				<ul class="dpSymptomsOne">
					<li>
						<p>Shingles</p>
						<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
					</li>
					<li>
						<p>Sun-burn</p>
						<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
					</li>
					<li>
						<p>Scrapes</p>
						<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
					</li>
					<li>
						<p>Insect Bites</p>
						<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
					</li>
				</ul>
			</div>

			<div class="row visible-lg visible-md">
				<ul class="dpSymptomsTwo">
					<li>
						<p>Superficial pain<br />from the skin</p>
						<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
					</li>
					<li>
						<p>Inflammation</p>
						<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
					</li>
					<li>
						<p>Blistering</p>
						<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
					</li>
					<li>
						<p>Itching &amp; Burning</p>
						<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
					</li>
				</ul>
			</div>

			<div class="row visible-sm">
				<ul class="dpSymptomsOne2up">
					<li>
						<p>Shingles</p>
						<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
					</li>
					<li>
						<p>Sun-burn</p>
						<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
					</li>
				</ul>
				<ul class="dpSymptomsTwo2up">
					<li>
						<p>Scrapes</p>
						<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
					</li>
					<li>
						<p>Insect Bites</p>
						<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
					</li>
				</ul>
				<ul class="dpSymptomsThree2up">
					<li>
						<p>Superficial pain<br />from the skin</p>
						<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
					</li>
					<li>
						<p>Inflammation</p>
						<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
					</li>
				</ul>
				<ul class="dpSymptomsFour2up">
					<li>
						<p>Blistering</p>
						<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
					</li>
					<li>
						<p>Itching <br /> &amp; Burning</p>
						<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
					</li>
				</ul>
			</div>
			<hr class="redHR" />			
				
			<div class="row=">
				<h1 class="lipTherapy">KEY INGREDIENTS</h1>
				<img src="images/therapypage/Key.Ingredients.Dermal.Pain.V3.png" alt="psoriasis ingredients" class="center-block img-responsive">
			</div>
		</div>
	</div>
</div>

<div class="row visible-xs">
	<p class="mobileInstruction">Tap on a product to<br />show more information.</p>
</div>

<div class="row visible-xs">
	<div id="accordion">
		<h3><img src="images/therapypage/HHProductSelection-RollOver.CS.V2.jpg" class="center-block" alt="cold sore therapy"></h3>
				<div>
					<div class="row">
						<h1 class="productHeader">COLD SORE THERAPY &amp; DAILY LIP MAINTENANCE</h1>
						<p class="csDailyMaintenance">This treatment system works together to fight against cold sores and reoccurrence of cold sores. Introducing a one of a kind cold sore treatment system to not only stop cold sores in their tracks, but also protect against them – Cold Sores Go Away, Stay Away.</p>
						<hr class="redHR" />
					</div>

					<div class="row">
						<h1 class="lipTherapy">COLD SORE THERAPY</h1>
							<div class="col-md-12">
								<img src="images/therapypage/Therapy-Cold-Sore-Tube_NoShadow_vert.png" alt="cold sore applicator"  class="center-block">
							</div>
						</div>	

						<div class="row">
								<div class="col-md-12">
									<p class="csTherapy">Provides fast-acting relief and promotes healing upon first contact. Formulated with powerful ingredients such as Docosanol, Camphor and Geranium oil, this dynamic treatment helps to calm, reduce cold sore appearance while easing discomfort and inflammation in the process.</p>
								</div>
							<hr class="redHR" />
						</div>

					<div class="row">
						<h1 class="lipTherapy">DAILY LIP MAINTENANCE</h1>

						<div class="row">
							<div class="col-md-12">
								<img src="images/therapypage/Daily-Lip-Maintenance-Tube_NoShadow_vert.png" alt="daily lip maintenance" class="center-block">
							</div>

							<div class="row">
								<div class="col-md-12">
									<p class="csDailyLipMaintenance">Moisturizes and protects the lips following outbreaks to ensure continuous lip health and post-treatment protection. Lip maintenance following a cold sore is vital, and the powerful active ingredient Allantoin and NAE-14 have the necessary properties to ensure the well-being of your lips.</p>
								</div>
							</div>
							<hr class="redHR" />
						</div>
					</div>
					
					<div class="row">
						<h1 class="lipTherapy">HOW TO USE</h1>
						<div class="row howtoUseRowOne">
							<div class="col-sm-2"></div>
							<div class="col-sm-2">
								<img src="images/therapypage/Step1.png" alt="step one" class="center-block">
							</div>

							<div class="col-sm-6">
								<p class="csHowToUse"><span>Use Cold Sore Therapy:</span> Apply to cold sore 3 to 4 times daily. Recommended to clean hands and virus site before applying.</p>
							</div>
							<div class="col-sm-2"></div>
						</div>

						<div class="row howtoUseRowTwo">
							<div class="col-sm-2"></div>
							<div class="col-sm-2">
								<img src="images/therapypage/Step2.png" alt="step two" class="center-block">
							</div>

							<div class="col-sm-6">
								<p class="csHowToUse">Once cold sore is fully healed, stop using Cold Sore Therapy.</p>
							</div>
							<div class="col-sm-2"></div>
						</div>
							
						<div class="row">
							<div class="col-sm-2"></div>
							<div class="col-sm-2">
								<img src="images/therapypage/Step3.png" alt="step three" class="center-block">
							</div>
							<div class="col-sm-6">
								<p class="csHowToUse"><span>Use Daily Lip Maintenance:</span> Apply as needed to prevent recurrence of cold sore. Use only after cold sore is fully healed. Recommended to clean applicator in between use.</p>
							</div>
							<div class="col-sm-2"></div>
						</div>
						<hr class="redHR" />
					</div>

					<div class="row">
						<h1 class="lipTherapy">SYMPTOMS</h1>
						<ul class="csSymptomsList">
							<li><p>Tingling and itching</p><img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="symptom illustration" class="center-block"></img></li>
							<li><p>Blisters</p><img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="symptom illustration" class="center-block"></img></li>
							<li><p>Oozing and crusting</p><img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="symptom illustration" class="center-block"></img></li>
						</ul>
						<hr class="redHR" />
					</div>

					<div class="row">
						<h1 class="lipTherapy">CAUSES</h1>
						<p class="csCauses">Cold sores are caused by the herpes simplex virus-1. However, most people who have the virus never develop signs and symptoms of cold sores. Once you have had an outbreak, the virus lies dormant deep in nerve cells under the skin. Recurrence of another cold sore may emerge due to viral infection, hormonal changes, stress, exposure to sunlight or wind and changes in the immune system.</p>
						<hr class="redHR" />
					</div>

					<div class="row">
						<h1 class="lipTherapy">KEY INGREDIENTS</h1>
						<ul class="csIngredients">
							<li><img src="images/therapypage/ingredients/NAE-8.png" class="center-block" alt="N A E"></li>
							<li><img src="images/therapypage/ingredients/Camphor.png" class="center-block" alt="camphor"></li>
							<li><img src="images/therapypage/ingredients/BiovaDerm.png" class="center-block" alt="biovaderm"></li>
							<li><img src="images/therapypage/ingredients/TeaTreeOil.png" class="center-block" alt="tea tree oil"></li>	
							<li><img src="images/therapypage/ingredients/LavenderOil.png" class="center-block" alt="lavender oil"></li>
							<li><img src="images/therapypage/ingredients/Dimethicone.png" class="center-block" alt="dimethicone"></li>
						</ul>
					</div>
				</div>
		<h3><img src="images/therapypage/HHProductSelection-RollOver.V2.PS.jpg" class="center-block" alt="psoriasis relief"></h3>
				<div>
					<div class="row">
						<h1 class="productHeader">PSORIASIS RELIEF THERAPY</h1>
						<p class="psLipTherapy">This fast-acting Psoriasis relief cream is a powerful formula designed to help sooth and relieve skin’s itching, redness, flakiness and scaling, along with other symptoms associated with psoriasis and seborrheic dermatitis. Formulated for ultra-strength, this cream performs as a skin protectant while enhancing rejuvenation of the skin to help quickly reduce active flare-ups and delay future recurrences.</p>
						<hr class="redHR" />
					</div>

				<div class="row">
					<h1 class="lipTherapy">HOW TO USE</h1>
					<p class="psHowToUse">Apply to affected areas 1 to 4 times daily until condition subsides.</p>
					<hr class="redHR" />
				</div>

				<div class="row">
					<h1 class="lipTherapy">SYMPTOMS</h1>
					<ul class="psSymptomsList">
						<li>
							<p>Dryness</p>
							<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="psoriasis symptoms illustration" class="center-block">
						</li>
						<li>
							<p>Rashes and redness</p>
							<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="psoriasis symptoms illustration" class="center-block">
						</li>
						<li>
							<p>Skin peeling or flaking</p>
							<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="psoriasis symptoms illustration" class="center-block">
						</li>
						<li>
							<p>Thickness of the skin</p>
							<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="psoriasis symptoms illustration" class="center-block">
						</li>
						<li>
							<p>Stiffness of<br />adjacent joints</p>
							<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="psoriasis symptoms illustration" class="center-block">
						</li>
					</ul>
					<hr class="redHR" />
				</div>

				<div class="row">
					<h1 class="lipTherapy">CAUSES</h1>
					<p class="psCauses">Psoriasis is a genetic immune system condition characterized by patches of abnormal skin. These patches are caused from the skin cell turn over to be increased rapidly and the cells pile up and cause skin congestion.</p>
					<hr class="redHR" />
				</div>

				<div class="row">
					<h1 class="lipTherapy">KEY INGREDIENTS</h1>
					<ul class="psIngredients">
						<li><img src="images/therapypage/ingredients/NAE-8.png" class="center-block" alt="N A E"></li>
						<li><img src="images/therapypage/ingredients/CollidalOatmeal.png" class="center-block" alt="collidal oatmeal"></li>
						<li><img src="images/therapypage/ingredients/BiovaDerm.png" class="center-block" alt="biovaderm"></li>
						<li><img src="images/therapypage/ingredients/CoconutExtract.png" class="center-block" alt="coconut extract"></li>
						<li><img src="images/therapypage/ingredients/OregonGrapeRootExtract.png" class="center-block" alt="oregon grape root extract"></li>
						<li><img src="images/therapypage/ingredients/PB8.png" class="center-block" alt="parsley basil extract"></li>
						<li><img src="images/therapypage/ingredients/SalicylicAcid.png" class="center-block" alt="salicylic acid"></li>
						<li><img src="images/therapypage/ingredients/CasterSeedOil.png" class="center-block" alt="caster seed oil"></li>
						<li><img src="images/therapypage/ingredients/ApricotExtract.png" class="center-block" alt="apricot extract"></li>
						<li><img src="images/therapypage/ingredients/SheaButter.png" class="center-block" alt="shea butter"></li>
					</ul>
				</div>
				</div>

		<h3><img src="images/therapypage/HHProductSelection-RollOver.DP.V2.jpg" class="center-block" alt="dermal pain"></h3>
				<div>
					<div class="row">
						<h1 class="productHeader">DERMAL PAIN RELIEF THERAPY</h1>
						<p class="dpTherapy">Introducing the first ever Dermal Pain Relief spray to contain Nerium SkinCare’s powerful and effective NAE-8TM ingredient. Formulated with other proven skin-protecting ingredients, such as Lavender and Tea Tree Oil. This fast-acting spray will quickly help to relieve symptoms such as pain, itching, tingling and burning caused from various skin conditions such as shingles, sunburns, scrapes and insect bites.</p>
						<hr class="redHR" />
					</div>

					<div class="row">
						<h1 class="lipTherapy">HOW TO USE</h1>
						<p class="dpHowToUse">Apply to shingles, sun-burn, scrapes, insect bites and other dermal pain related conditions 3 to 4 times daily for fast-acting pain relief.</p>
						<hr class="redHR" />
					</div>

					<div class="row">
						<ul class="dpSymptoms1up">
							<li>
								<p>Shingles</p>
								<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
							</li>
							<li>
								<p>Sun-burn</p>
								<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
							</li>	
							<li>
								<p>Scrapes</p>
								<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
							</li>
							<li>
								<p>Insect Bites</p>
								<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
							</li>
							<li>
								<p>Superficial pain<br />from the skin</p>
								<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
							</li>
							<li>
								<p>Inflammation</p>
								<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
							</li>
							<li>
								<p>Blistering</p>
								<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
							</li>
							<li>
								<p>Itching<br /> &amp; Burning</p>
								<img src="images/therapypage/SymptonIllustration-TemporaryImage.png" alt="dermal pain symptoms illustration" class="center-block">
							</li>
						</ul>
						<hr class="redHR" />
					</div>

					<div class="row=">
						<h1 class="lipTherapy">KEY INGREDIENTS</h1>
						<ul class="dpIngredients">
							<li><img src="images/therapypage/ingredients/NAE-8.png" class="center-block" alt="N A E"></li>
							<li><img src="images/therapypage/ingredients/Camphor.png" class="center-block" alt="camphor"></li>
							<li><img src="images/therapypage/ingredients/BiovaDerm.png" class="center-block" alt="biovaderm"></li>							
							<li><img src="images/therapypage/ingredients/TeaTreeOil.png" class="center-block" alt="tea tree oil"></li>
							<li><img src="images/therapypage/ingredients/LavenderOil.png" class="center-block" alt="lavender oil"></li>
							<li><img src="images/therapypage/ingredients/Dimethicone.png" class="center-block" alt="dimethicone"></li>
						</ul>
					</div>
				</div>
	</div>
</div>
 
<?php include('deepPageFooter.php'); ?>
