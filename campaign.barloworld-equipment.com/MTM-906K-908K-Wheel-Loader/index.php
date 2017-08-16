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
                <span id="ContentIntroHeading">Wheel Loaders</span>
                <h3>Get your Wheel Loader plus...</h3>
                <p>Agri Work Tools – General Purpose Bucket and Forks and Carriage for different agricultural applications Equipment protection plan (EPP) – Protect your investment with 60 months/3000 hours power train plus hydraulics protection plan Cat Finance – Finance assistance available to suit your needs.</p>
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
                    <h3>Find out more on the 906K and 908K</h3>
                    <p><a href="https://www.barloworld-equipment.com/find-equipment/new-equipment/wheel-loaders/compact-wheel-loaders/906k/specifications/" target="_blank">&#8226; 906K Wheel Loader</a></p>
                    <p><a href="https://www.barloworld-equipment.com/find-equipment/new-equipment/wheel-loaders/compact-wheel-loaders/908k/specifications/" target="_blank">&#8226; 908K Wheel Loader</a></p>

                    <img src="images/feature-2.jpg" />
                    <h3>Equipment Protection Plans</h3>
                    <p>You count on your Cat® machines to get the job done, day in and day out. Choose a protection plan that's just as dependable and long-lasting. Compare our three comprehensive Equipment Protection Plans (EPP), and learn which systems and components are included for each option.</p>
                    <img src="images/feature-3.jpg" />
                    <h3>Looking for finance:</h3>
                    <p><a href="https://financeapps.wesbank.co.za/financeApps/company/asset/index.xhtml?appType=CPY&appSrc=" target="_blank"><button class="find-out-more">Apply Online Now</button></a></p>
                </div>
            </div>

            <div class="one-half column">
                <div class="content-wrap">
                    <a href="#LeadForm"><button class="find-out-more">Enquire Now</button></a>
                    <h3>BUY YOURS TODAY</h3>
                    <p>AVOID DISAPPOINTMENT PRE-ORDER NOW, PLEASE COMPLETE THE FORM BELOW OR CALL <a href="#" onclick="goog_report_conversion ('tel:0100407856')">010 040 7856</a> FOR MORE INFORMATION.</p>
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
                        <input type="hidden" name="Campaign" value="MTM-906K-908K-Wheel-Loader">

                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="one-full column">
                <div class="responsive-video"><iframe width="100%" height="720" src="https://www.youtube.com/embed/JHDly3bV0Ao?rel=0" frameborder="0" allowfullscreen></iframe></div>
            </div>

            <div class="spacer"></div>
            <div id="CallOut" class="one-full column">
                <div class="content-wrap">
                    <h2>more efficient farming</h2>
                    <ul>
                        <li>Cat® Wheel Loaders deliver a powerful solution for all customer applications</li>
                        <li>Efficiency of a traditional Z-bar with tool carrier capabilities for great performance and versatility</li>
                        <li>Quick and easy servicing</li>
                    </ul>
                    <button>Find out more about Equipment Protection Plans</button>
                </div>

            </div>
            <div class="row">
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

                <div class="spacer"></div>
                <img class="line-yellow" src="../images/line-yellow.jpg" />
                <div class="spacer"></div>
            </div>

            <?php include '../footer.php' ?>
</body>

</html>