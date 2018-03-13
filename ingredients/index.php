<?php include('../deepPageHeader.php'); ?>

<style>
    .grid-wrapper {
        display: grid;
    }
    @media only screen and (min-width:734px) {
          .grid-wrapper {
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 50%;
            grid-column-gap: 3%;
            /* Dev note: grid row below only works across browsers if defined in px's instead of % */
            grid-row-gap:20px;
          }

    }
    @media only screen and (min-width: 470px) and (max-width: 735px) {
        .grid-wrapper {
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 50%;
            grid-column-gap: 3%;
            /* Dev note: grid row below only works across browsers if defined in px's instead of % */
            grid-row-gap:20px;
        }
    }
    @media only screen and (max-width: 470px) {
        .grid-wrapper {
            grid-template-columns: 1fr;
            grid-template-rows: 20%;
            /* Dev note: grid row below only works across browsers if defined in px's instead of % */
            grid-row-gap:20px;
        }
    }

    .box-front,
    .box-back {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 200px;
        max-height: 200px;
        min-width: 100%;
        max-width: 250px;
    }
    .box-front {
        border: 1px solid #e2e2e2;
        background: white;
        flex-flow: column;
    }
    .box-front img {
        margin:5px;
    }
    .box-back {
        border: 1px solid #e2e2e2;
        background: white;
        font-size: .8em;
        padding:10px;
        text-align: justify;
    }

    .ingredients-grid-text {
        color: #47322e;
        text-transform: uppercase;
        font-size: 1.2em;
        font-weight: normal;
        line-height: 27px;
        text-align: center;
    }
    .box-front span{
        border-bottom: 1px solid #47322e;
    }
    .hoverable {
        cursor:default;
        color:#000;
        text-decoration:none;
        }
    .hoverable .hover {
        display:none;
        }
    .hoverable:hover .normal {
        display:none;
        }
    .hoverable:hover .hover {
        display:grid;
        }
    a:hover {
        text-decoration:  none;
    }
</style>


        <div class="row">
            <div class="col-sm-12">
                <div class="banner">
                    <img src="../images/heroes/NSC-Web Design- Key ING banner.jpg" alt="hero image">
                </div>
            </div>	
        </div>	
        
        <div class="row">
            <div class="col-sm-12">
                <div class="grid-wrapper">

                    <div class="box1">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Nerium oleander</span>
                                    <img src="neriumoleander.jpg" alt="Nerium Oleander" width="70%"/>
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>Targets not just the signs of aging but also the underlying cause. Delivers powerful antioxidants to target free radical damage. Boosts the skin rejuvenating process to reveal younger-looking skin. Research has shown that NAE-14® possesses potent antioxidant and anti-inflammatory properties, while also inducing specific cytokines in dermal fibroblasts of relevance to wound healing.</p>
                                </div>
                            </span>
                        </a>
                    </div>
                    
                    <div class="box2">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>BiovaDerm</span>
                                    <img src="../images/heroes/biova.jpg" alt="BiovaDerm" width="50%"/>
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>This advanced technology process retains the natural ratios of key elements found in nature’s potent life source of proteins and peptides from water soluble egg membrane (WSEM) that are beneficial to skin. These peptides include collagen, elastin, desmosine, isodesmosine and glycosaminoglycans (GAGs). </p>
                                </div>
                            </span>
                        </a>
                    </div>
                    
                    <div class="box3">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Parsley Basil</span>
                                    <img src="basil.jpg" alt="Parsley Basil" width="50%"/>
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>When basil and parsley are extracted and combined in the correct way it creates a unique synergy, which is extremely efficacious on the skin.</p>
                                </div>
                            </span>
                        </a>
                    </div>

                    <div class="box4">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Zinc Oxide</span>
                                    <img src="zincoxide.png" alt="Zinc Oxide" width="50%"/>
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>This popular ingredient is used primary to shield and protect the skin from UVB, UVA II and UVA I rays, as it is considered as one of the safest to use sun-protecting ingredient on the market. Zinc oxide is also used to be a soothing agent and an antioxidant.</p>
                                </div>
                            </span>
                        </a>
                    </div>
                    
                    <div class="box5">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Dimethicone</span>
                                    <img src="dimethicone.png" alt="Dimethicone" width="60%"/>
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>One of the most commonly found skin care ingredient is a silicon-based polymer used to condition the skin while protecting the skin, working to prevent water loss by forming a hydrating barrier on the skin. Fills in wrinkles and lines on the face to give it a temporary plumped appearance.</p>
                                </div>
                            </span>
                        </a>
                    </div>
                    
                    <div class="box6">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Hyaluronic Acid </span>

                                    <img src="hyaluronicacid.png" alt="Hyaluronic Acid" width="70%"/>                                
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>Powerful skin moisturizer</p>
                                </div>
                            </span>
                        </a>
                    </div>

                    <div class="box7">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Aloe Vera</span>
                                    <img src="Aloe.png" alt="Aloe Vera" width="50%"/>                               
                                 </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>Antioxidant and antibacterial properties</p>
                                </div>
                            </span>
                        </a>
                    </div>

                    <div class="box8">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Niacinamide </span>
                                    <img src="niacinamide.png" alt="Niacinamide" width="70%"/>                               
                                 </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>Vitamin B3</p>
                                </div>
                            </span>
                        </a>
                    </div>

                    <div class="box9">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Superoxide Dismutase</span>
                                    <img src="superoxidedismutase.png" alt="Superoxide Dismutase" width="50%"/>                                
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>Antioxidant Enzyme</p>
                                </div>
                            </span>
                        </a>
                    </div>

                    <div class="box10">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Camphor</span>

                                    <img src="camphor.png" alt="Camphor" width="70%"/>                                
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>Works upon application to relieve pain</p> 
                                </div>
                            </span>
                        </a>
                    </div>

                    <div class="box11">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Menthol</span>

                                    <img src="menthol.jpg" alt="Menthol" width="40%"/>                                
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>Topical Analgesic</p>
                                </div>
                            </span>
                        </a>
                    </div>

                    <div class="box12">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Allantoin</span>
                                    <img src="placeholder-3.jpg" alt="Allantoin" width="50%"/>                                
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>Works to protect the skin from environmental stressors and bacteria</p>
                                </div>
                            </span>
                        </a>
                    </div>

                    <div class="box13">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Salicylic Acid</span>
                                    <img src="placeholder-2.jpg" alt="Salicylic Acid" width="50%"/>                                
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>May work by helping the skin to shed dead cells from the top layer and by decreasing redness and swelling (inflammation). In addition, may help decrease the apperance of pimples that form and speeds healing.</p>
                                </div>
                            </span>
                        </a>
                    </div>

                    <div class="box14">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Green Tea</span>
                                    <img src="greentea.jpg" alt="Green Tea" width="50%"/>                                
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>Green tea has been shown to be the most effective agent against skin inflammation</p>
                                </div>
                            </span>
                        </a>
                    </div>

                    <div class="box15">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Collidal Oatmeal</span>
                                    <img src="oatmeal.jpg" alt="Collidal Oatmeal" width="70%"/>                                
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">Works to smooth and comfort skin that is itchy and dry</div>
                            </span>
                        </a>
                    </div>

                    <div class="box16">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Coconut Extract</span>
                                    <img src="coconut.jpg" alt="Coconut Extract" width="50%"/>                                
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>Delivers non-irritating moisturizing and conditioning benefits effectively to the skin</p>
                                </div>
                            </span>
                        </a>
                    </div>

                    <div class="box17">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Caffeine</span>
                                    <img src="caffeine.jpg" alt="Caffeine" width="70%"/>                                
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>Antioxidant</p>
                                </div>
                            </span>
                        </a>
                    </div>

                </div>
            </div>
        </div> 

    <?php include('../deepPageFooter.php'); ?>
