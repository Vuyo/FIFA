<?php include('../includes/page-variables.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?php
            $title = basename(__DIR__);
            $title = str_replace('_', ' ', $title);
            $title = str_replace('-', ' ', $title);
            $title = "Barloworld Equipment | " . ucwords($title);
            echo($title);    
        ?>
    </title>

    <?php include('../includes/meta-data.php'); ?>
    <?php include('../includes/scripts.php'); ?>

    <script src="/js/LeadForm.js"></script>

    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php include '../header.php' ?>

    <img class="line-yellow" src="../images/line-yellow.jpg" />
    <div class="spacer"></div>

    <div id="HeaderImage" class="image-fixed-centered"></div>

    <div id="ContentIntro" class="container">
        <div class="row">
            <div class="one-full column"><span id="Title">MORETHANMACHINES</span></div>
        </div>

        <div class="one-half column background-dark-eighty">
            <div class="content-wrap">
                <span id="ContentIntroHeading">5 ROCK SOLID REASONS</span>
                <h3>TO BUY A CAT® 426F2.</h3>
                <p>
                    <span class="yellow-text bold-text">Affordability:</span> A lower lifecycle cost than ever before. <br>
                    <span class="yellow-text bold-text">Quality:</span> Engineered with the same quality you would expect from Cat®. <br>
                    <span class="yellow-text bold-text">Endurance:</span> Trialed, tested and built for Africa.<br>
                    <span class="yellow-text bold-text">Performance:</span> It will work as hard as you do, minimising downtime.<br>
                    <span class="yellow-text bold-text">Parts:</span> Comes with incredible ease of serviceability and access to the the widest network of parts at parts.cat.com.
                
                </p>
            </div>
        </div>
    </div>

    <div id="Content" class="container background-dark-eighty">
        <div class="row">

            <div class="one-full column">
                <div class="content-wrap">
                    <h4>Introducing the CAT 426F2 - Lower life cycle costs, higher returns<br>Designed for durability, it's been proven to withstand the toughest conditions in Africa.
                    </h4>
                </div>
            </div>

            <div class="one-half column">
                <div class="content-wrap">
                    <img src="images/feature-1.jpg" />
                    <h3>OPERATOR STATION</h3>
                    <p>The 426F2 is fitted with mechanical controls providing low effort operation, with the ability to choose between ISO (Excavator) or SAE (Backhoe) control patterns. Providing easy and safe operation for operators of any experience or ability.</p>

                    <img src="images/feature-2.jpg" />
                    <h3>Power Train</h3>
                    <p>The lock-up torque converter provides a direct ratio between power pack and driveline when in roading gears. This results in a 16% decrease in fuel consumption and an 11% increased average speed. The lock-up torque converter is an invaluable addition for those traveling between job sites.</p>
                    
                    <img src="images/feature-3.jpg" />
                    <h3>Hydraulics</h3>
                    <p>Intelligent hydraulics provide the right amount of power at the right time. Load sensing, closed center hydraulic system, actively matches hydraulic power and flow, allowing full hydraulic forces at any engine speed.</p>
                </div>
            </div>

            <div class="one-half column">
                <div class="content-wrap">
                    <a href="#LeadForm"><button class="find-out-more">Pre-order Now</button></a>
                    <h3>BUY YOURS TODAY</h3>
                    <p>AVOID DISAPPOINTMENT PRE-ORDER NOW, PLEASE COMPLETE THE FORM BELOW OR CALL <a href="#" onclick="goog_report_conversion ('tel:0100407845')">010 040 7845 </a> FOR MORE INFORMATION.</p>
                    <form id="LeadForm">
                        <p><span class="c-form-required">Fields marked with asterisk (*) are required.</span></p>
                        
                        <label for="Company" type="text">Company*</label>
                        <input class="u-full-width" id="Company" name="Company" type="text" value="" />
                        
                        <label for="FirstName" type="text">First Name*</label>
                        <input class="u-full-width" id="FirstName" name="FirstName" type="text" value="" />
                        
                        <label for="Surname" type="text">Surname*</label>
                        <input class="u-full-width" id="Surname" name="Surname" type="text" value="" />
                        
                        <label for="Email" type="text">Email*</label>
                        <input class="u-full-width" id="Email" name="Email" type="email" value="" />
                        
                        <label for="CellNumber" type="text">Cell Number*</label>
                        <input class="u-full-width" id="CellNumber" name="CellNumber" type="text" value="" />
                        
                        <label for="City" type="text">City*</label>
                        <input class="u-full-width" id="City" name="City" type="text" value="" />
                        
                        <label for="Country" type="text">Country*</label>
                        <select class="u-full-width" id="Country" name="Country" class="select Select">
                            <option value="">Select a Country</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Republica de Angola">Republica de Angola</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Swaziland">Swaziland</option>
                        </select>

                        <label for="Questions" type="text">Questions</label>
                        <textarea id="Questions" name="Questions" class="u-full-width" placeholder="Enter your text here"></textarea>

                        <input type="checkbox" id="Terms" name="Terms" value="">
                        <label for="Terms">I accept the Terms & Conditions *</label>
                        <br>
                        <input id="SubmitButton" type="submit" value="Submit">
                        <input type="hidden" name="ip" value="<?php echo($ip); ?>" >
                        <input type="hidden" name="Campaign" value="MTM-426F2-Backhoe-Loader" >
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="spacer"></div>
            <div id="CallOut" class="one-full column">
                <div class="content-wrap">
                    
                </div>
            </div>

            <!-- Include Specials -->
            <div class="one-full column">
                <div class="text-center">
                    <h2>OTHER SPECIAL OFFERS YOU MIGHT BE INTERESTED IN</h2>
                </div>
            </div>
            <div id="Specials" class="row">
                <div class="four columns">
                    <div class="content-wrap">
                        <img src="images/special-1.jpg" />
                        <h3 class="yellow-text">THE CAT<sup>®</sup> PAVING TRAIN</h3>
                        <p>The Cat<sup>®</sup> paving train is an assembly of three paving machines acting together as one.</p>
                        <a href="https://www.barloworld-equipment.com/find-equipment/special-offers/paving-train/"><button class="find-out-more">Find out more</button></a>
                        <br>
                    </div>
                </div>
                <div class="four columns">
                    <div class="content-wrap">
                        <img src="https://campaign.barloworld-equipment.com/images/specials/specials-906k-908k-feature.jpg" />
                        <h3 class="yellow-text">906K 908K - WHEEL LOADERS</h3>
                        <p>Get your Wheel Loader plus...</p><br>
                        <a href="http://campaign.barloworld-equipment.com/MTM-906K-908K-Wheel-Loader/"> <button class="find-out-more">Find out more</button></a>
                        <br>
                    </div>
                </div>
                <div class="four columns">
                    <div class="content-wrap">
                        <img src="images/special-3.jpg" />
                        <h3 class="yellow-text">READY TO POWER SHOP?</h3>
                        <p>Find your parts from over 800 000 delivered to your door with a few easy clicks.</p>
                        <a href="https://www.barloworld-equipment.com/find-equipment/special-offers/partscatcom/"><button class="find-out-more">Find out more</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer"></div>
        <img class="line-yellow" src="../images/line-yellow.jpg" />
        <div class="spacer"></div>
    </div>


    <?php include '../footer.php' ?>
</body>

</html>