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
            <div class="one-full column text-right"><span id="Title">MORETHANMACHINES</span></div>
        </div>

        <div class="one-half column offset-by-six columns background-dark-eighty">
            <div class="content-wrap">
                <span id="ContentIntroHeading">320D2 GC</span>
                <p class="yellow-text">Designed to lower operating cost, the <span class="bold-text">320D2 GC</span> is the most fuel efficient 20t excavator in the industry (up to 25% fuel reduction) and 15% reduction in maintenance cost..</p>
                <p>
                    <span class="bold-text">BUY</span>&nbsp;&nbsp; - Get your <span class="bold-text">320D2 GC Hydraulic Excavator</span> including 3 solutions at no extra charge.<br>
                    <span class="bold-text">RENT</span> - Rent a <span class="bold-text">320D2 GC Hydraulic Excavator</span> for a month then buy it for less.<br>
                    <span class="bold-text">TRY</span> &nbsp;&nbsp;&nbsp;- Rent a <span class="bold-text">320D2 GC Hydraulic Excavator</span> for <span class="bold-text">R265p/h.</span>
                </p>
            </div>
        </div>
    </div>

    <div id="Content" class="container background-dark-eighty">
        <div class="row">

            <div class="one-full column">
                <div class="text-center content-wrap">
                    <h1>Your experts in service solutions</h1>
                </div>
            </div>

            <div class="one-half column">
                <div class="content-wrap">
                    <img src="images/feature-1.jpg" />
                    <h3>OPERATOR STATION</h3>
                    <p>The ergonomic cab design of the Cat 320D2 GC provides a spacious, quiet and comfortable environment to maximise the operators’ production and efficiency. Features include a user intuitive monitor with full-colour graphic display. of adjustments to allow for different operators.</p>

                    <img src="images/feature-2.jpg" />
                    <h3>POWER AND RELIABILITY</h3>
                    <p>The Cat 320D2 GC hydraulic excavator is powered by the Cat 4.4 – a four-cylinder, turbocharged engine that’s rated at 88.4 net kW (SAE J1349) and meets U.S. EPA Tier 2 and EU Stage II emission standards. Less sensitive to low quality fuel the engine improves reliability and reduces fuel consumption by up to 19%.</p>
                    <img src="images/feature-3.jpg" />
                    <h3>MINIMAL DOWNTIME. MAXIMUM PROFIT.</h3>
                    <p>Routine service and maintenance can be completed quickly and easily reducing ownership costs. Convenient access points, standard service intervals and advanced air filtration keep downtime to a minimum and maximise profit.</p>
                </div>
            </div>

            <div class="one-half column">
                <div class="content-wrap">
                    <a href="#LeadForm"><button class="find-out-more">Enquire Now</button></a>
                    <h3>BUY YOURS TODAY</h3>
                    <p>AVOID DISAPPOINTMENT PRE-ORDER NOW, PLEASE COMPLETE THE FORM BELOW OR CALL <a href="#" onclick="goog_report_conversion ('tel:0100407565')">010 040 7565</a> FOR MORE INFORMATION.</p>
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
                        <input type="hidden" name="ip" value="<?php echo($ip); ?>">
                        <input type="hidden" name="Campaign" value="MTM-320D2GC-Hydraulic-Excavator">
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="spacer"></div>
            <div id="CallOut" class="one-full column">
                <div class="content-wrap">
                    <h2>build More <span class="yellow-text">now</span></h2>
                    <h3>buy</h3>
                    <p>
                        <span class="bold-text">Equipment Protection Plan (EPP)</span> – Protect your investment with 36 Months/8000 hours power train and hydraulics protection plan.<br>
                        <span class="bold-text">EMSolutions</span> – Ability to track your machine and operations to improve your efficiency.<br>
                        <span class="bold-text">Cat® Finance</span> – Let us assist you with a customised payment plan.<br>
                    </p>
                    <h3>Rent</h3>
                    <p>
                        Rent a
                        <span class="bold-text">320D2 GC Hydraulic Excavator</span> for 1 month at R50,000 unlimited hours and then buy it at R1,350,000 excl. vat.
                    </p>
                    <h3>try</h3>
                    <p>
                        Rent a
                        <span class="bold-text">320D2 GC</span> for R265 p/h, unlimited hours instead of the normal rate of R390p/h and minimum of 189 hours per month. No limitation to rental period. Should you like to buy at any stage, rental will give you a selling price at that time.
                    </p>
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
                        <img src="https://campaign.barloworld-equipment.com/images/specials/specials-462f2-feature.jpg" />
                        <h3 class="yellow-text">5 ROCK SOLID REASONS</h3>
                        <p>To buy a Cat® 426F2.</p><br>
                        <a href="https://campaign.barloworld-equipment.com/MTM-426F2-Backhoe-Loader/"> <button class="find-out-more">Find out more</button></a>
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
