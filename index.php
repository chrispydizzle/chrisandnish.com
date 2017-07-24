<?php
include_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/cn.php';
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <title>Chris &amp; Nish</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="apple-touch-icon"
          href="assets/RG_amper_60.png">
    <link rel="apple-touch-icon" sizes="76x76"
          href="assets/RG_amper_76.png">
    <link rel="apple-touch-icon" sizes="120x120"
          href="assets/RG_amper_120.png">
    <link rel="apple-touch-icon" sizes="152x152"
          href="assets/RG_amper_152.png">-->

    <link rel="stylesheet" media="all" href="style/layout_template.css"/>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/TweenMax.js"></script>
    <script src="js/jquery.gsap.js"></script>
    <script src="js/application.js"></script>
</head>
<body>
<!-- side nav panel -->

<div id="site-body" class="site-body-css  ">
    <div class="container">
        <div class="header">
            <div id="menubox">
                <input type="checkbox" id="menu"/>
                <div class="header-inner">
                    <nav>
                        <ul>
                            <li>
                                <a id="home-menu" href="#home" onclick="change('home');">Home</a>
                            </li>
                            <li style="visibility: hidden;">
                                <a id="locationln" href="#venue" onclick="change('venue');">Location</a>
                            </li>
                            <li>
                                <a id="eventsln" href="#events" onclick="change('events');">Events</a>
                            </li>
                            <li>
                                <a id="visaln" href="#visa" onclick='change("ustravel");'>Visa</a>
                            </li>
                            <li style="visibility: hidden;">
                                <a id="cultureln" href="#culture" onclick='change("culture");'>Culture</a>
                            </li>
                            <li style="visibility: hidden;">
                                <a id="rsvpln" href="#rsvp" onclick='change("rsvp");'>RSVP</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <label class="burger" for="menu">
                    <span>

                    </span>
                </label>
            </div>
        </div>
        <div id="pages" class="pages">
            <section class="page-outer first" id="home">
                <div class="page-inner" id="home-inner">
                    <div class="bottom-sliding-section">
                        <div id="scroll-container-height-helper">
                            <div id="scroll-arrow-container-height-helper">
                                <h1 class="title">Chris & Nish</h1>
                                <h3 class="subtitle">September 8th, 9th</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page-outer" id="ustravel">
                <div class="page-inner" id="ustravel-inner">
                    <h1>Visa</h1>
                    If you've never been to India before, you'll need to apply for a visa.
                    This is done easily at the <a href="https://indiantouristvisa.org.in/visa/tvoa.php" target="_blank">India
                        Online Visa Office</a>.
                    <br/><br/>
                    Below is a quick run-through of the questionnaire, and what you should probably put in if you're
                    flying from the US.
                    <div class="formwindow">
                        <h3>Form 1</h3>
                        <img id="formimage" src="artifacts/visa/Page%201.png"/>
                    </div>
                    <div class="formwindow">
                        <h3>Form 2</h3>
                        <img src="artifacts/visa/Page%202.png"/>
                    </div>
                    <div class="formwindow">
                        <h3>Form 3</h3>
                        <img src="artifacts/visa/Page%203.png"/>
                    </div>
                    <div class="formwindow">
                        <h3>Form 4</h3>
                        <img src="artifacts/visa/Page%204.png"/>
                    </div>
                    <div class="formwindow">
                        <h3>Form 5</h3>
                        <img src="artifacts/visa/Page%205.png"/>
                    </div>
                </div>
            </section>
            <section class="page-outer" id="events">
                <div class="page-inner" id="events-inner">
                    <h1>Events</h1>
                    <?php
                    ini_set('display_errors', 'On');
                    error_reporting(E_ALL);
                    showevents();
                    //menuevents($cn);
                    // writeevents($cn);


                    /*'foreach ($cn as $cn1){
                     //       echo '<div class="formwindow" img="artifacts/icons/'.$cn1->icon.'">';
                      //      echo '<h3>' .$cn1->title. '</h3>';
                       //     echo '<p>' .$cn1->description. '</p>';                    }
                    */ ?>


                    <h3>Form 1</h3>

                </div>
        </div>
        </section>
        <section class="rsvp" id="rsvp-dialog">
            <div class="rsvp-inner" id="rsvp-inner">
                <div class="formcontainer">
                    <div class="formsection">
                        <h1>You're coming, right?</h1>
                        <fieldset>
                            <input type="radio" id="comingY" name="coming" value="Y"><label
                                    for="comingY">Yes</label>
                            <input type="radio" id="comingN" name="coming" value="N"><label for="comingN">No</label>
                        </fieldset>
                    </div>
                    <div class="formsection">
                        <h1>Awesome!</h1>
                        <input type="radio" id="name" name="name" placeholder="What's your name?"/>
                    </div>
                    <div class="formsection">
                        <h1>Your food?</h1>
                        <fieldset>
                            <input type="radio" id="foodVeg" name="veg" value="Y"><label
                                    for="comingY">Vegitarian</label>
                            <input type="radio" id="foodNonveg" name="veg" value="N"><label
                                    for="comingN">Non-Veg</label>
                        </fieldset>
                    </div>
                    <div class="formsection">
                        <textarea id="comments" name="comments" placeholder="Something else to say?"/>
                    </div>
                    <div class="formsection">
                        <button id="comments" name="comments" placeholder="Something else to say?"/>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </section>
</div>
<footer>
    <div>This site is also a shameless plug! <a href="https://cpsharp.net.">CP Sharp</a>!</div>
</footer>
</div>
</body>
</html>