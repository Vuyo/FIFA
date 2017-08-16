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

        <div class="one-half column background-dark-eighty">
            <div class="content-wrap">
                <span id="ContentIntroHeading" class="yellow-text">STARTS AUGUST 2017</span>
                <p>More than 7000 Cat surplus parts and Barloworld Reman Components will be on sale and sold at cost price.</p>
            </div>
        </div>
    </div>

    <div id="Content" class="container background-dark-eighty">
        <div class="row">

            <div class="one-half column">
                <div class="content-wrap">
                    
                    <h3>CAT PARTS CLEARANCE SALE STARTS AUGUST UNTIL 30 SEPTEMBER 2017</h3>
                    <p>More than 7000 Cat surplus parts and Barloworld Reman Components will be on sale and sold at cost price. The sale will be open for both account and cash customers.</p>
                    <p>The sale is only on the selected parts and components and stock is limited. </p>
                    <p>Returns will not be permitted on stock bought from this sale.</p>
                    <p>Transportation costs are not included.</p>
                    <p>Call us on <a href="#" onclick="goog_report_conversion ('tel:010 040 7487')">010 040 7487</a> for more information or fill out the contact form and we’ll get back to you.</p>
                    
                    <p><a href="Parts-Clearance-Parts-List.pdf" target="_blank"><button class="find-out-more">Download Parts List PDF</button></a></p>
                    <img src="images/feature-1.jpg" />
                </div>
            </div>

            <div class="one-half column">
                <div class="content-wrap">
                    <h3>RESERVE YOURS TODAY!</h3>
                    
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
                        <input type="hidden" name="Campaign" value="Parts-Sale" >
                    </form>
                </div>
            </div>
        </div>
        
            <div class="row">
                <div class="spacer"></div>
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
                            <img src="https://campaign.barloworld-equipment.com/images/specials/specials-320d2gc-feature.jpg" />
                            <h3 class="yellow-text">320D2 GC HYDRAULIC EXCAVATOR</h3>
                            <p>BUY, RENT or TRY a 320D2 GC Hydraulic Excavator.</p><br>
                            <a href="https://campaign.barloworld-equipment.com/MTM-320D2GC-Hydraulic-Excavator/"> <button class="find-out-more">Find out more</button></a>
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
