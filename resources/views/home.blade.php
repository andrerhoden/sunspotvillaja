<?
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $g_link = false;
  // require 'functions/database.php';

  // $sql = "  SELECT * FROM `us_photos`
  //           LEFT JOIN `us_photos_cstm` ON ( `us_photos_cstm`.id_c = `us_photos`.id )
  //           WHERE deleted=0 AND display_c=1
  //           ORDER BY sort_order_c ASC
  // ";
  // $res_photos = mysql_query( $sql, GetMyConnection() );

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=1"/>
    <title>Sunspot Villa</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="stylesheets/app.css" />
    <link rel="stylesheet" href="stylesheets/custom.css" />
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css" />
    <link rel="stylesheet" href="assets/lightbox/css/lightbox.css" />
    <style>
    .sub-nav dt a:hover, .sub-nav dd a:hover, .sub-nav li a:hover {
    color: #e37f1d;
}
    </style>


    <script src="bower_components/modernizr/modernizr.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>


  <body onload="removeLoadScreen();">

      <div class="MainContainer">

      <div id="loadScreen">
            <div id="fountainTextG">
                <div id="fountainTextG_1" class="fountainTextG">L</div><div id="fountainTextG_2" class="fountainTextG">o</div><div id="fountainTextG_3" class="fountainTextG">a</div><div id="fountainTextG_4" class="fountainTextG">d</div><div id="fountainTextG_5" class="fountainTextG">i</div><div id="fountainTextG_6" class="fountainTextG">n</div><div id="fountainTextG_7" class="fountainTextG">g</div><div id="fountainTextG_8" class="fountainTextG">.</div><div id="fountainTextG_9" class="fountainTextG">.</div><div id="fountainTextG_10" class="fountainTextG">.</div>

            </div>
        </div>

      <div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
        <h2 id="modalTitle">Message.</h2>
        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
        <p id="myModalMsg"></p>
      </div>

       <div class="overlay"></div>

  <!--- MAIN CONTENT STARTS ---->
        <div id="mobileBg">
            <div class="show-for-small"><br /></div>
            <div class="show-for-medium"><br /><br /><br /></div>
            <div class="show-for-large-up"><br /><br /><br /><br /></div>

            <div class="row">
                <div class="large-12 columns centered">
                    <div id="HomeLogo"><img src="images/SunSpotLogo-Shade.png" style="width:100%;"/></div>
                    <div class="mobileOnly"><br/><a target="_blank" href="images/villWeb.mp4" class="button">Show Intro Video</a></div>
                </div>
            </div>

            <div class="show-for-small"><br /></div>
            <div class="show-for-medium"><br /><br /><br /></div>
            <div class="show-for-large-up"><br /><br /><br /><br /></div>
        </div>

        <div id="navMenu" data-magellan-expedition="fixed">
          <dl class="sub-nav" style="text-align: center;">
            <dd data-magellan-arrival="VillaDesc"><a class="navLink" href="#VillaDesc">Description</a></dd>
            <dd data-magellan-arrival="Photos"><a class="navLink" href="#Photos">Photos</a></dd>
            <dd data-magellan-arrival="Location"><a class="navLink" href="#Location">Location</a></dd>
            <dd data-magellan-arrival="Amenities"><a class="navLink" href="#Amenities">Amenities</a></dd>
            <dd data-magellan-arrival="Rates"><a class="navLink" href="#Rates">Rates</a></dd>
            <dd><a class="navLink" href="/images/TermsRentalSunspot.pdf" target="_blank">TERMS</a></dd>
            <!--<dd data-magellan-arrival="Availability"><a href="#Availability">Availability</a></dd>-->
            <!--<dd data-magellan-arrival="Reviews"><a href="#Reviews">Reviews</a></dd>-->
            <dd data-magellan-arrival="BookNow"><a class="navLink" href="#BookNow">Request to Book</a></dd>

          </dl>
        </div>

        <section id="VillaDesc" style="background:rgba(227, 127, 29,0.6); color:#fff;">

            <div class="show-for-small"><br /></div>
            <div class="show-for-medium"><br /><br /><br /></div>
            <div class="show-for-large-up"><br /><br /><br /><br /></div>

            <div class="row">
                <div class="large-1 show-for-large-up columns">&nbsp;</div>
                <div class="large-6 medium-8 columns">
                    <h3 class="title">Villa Description</h3>
                    <hr/>
                    <p>SunSpot is set in a lush well maintained garden. Walk from your own private pool, through the gate to your own white sand beach located on the sandy shores of Runaway Bay, one of the best beaches in Jamaica along the North Coast. Directly across from the villa is a beautiful manicured golf course.</p>
                    <p>Recently renovated, the charm of this home continues to radiate from room to room, inside out. This bright beachfront villa with high-beamed ceiling has six bedrooms and seven bathrooms. All bedrooms are fully air conditioned with ceiling fans.</p>
                    <p>The main house consists of four bedrooms, five bathrooms, kitchen, dining and living room which features French doors to patio, large gazebo and pool area with ocean view. The courtyard area features two bedrooms and two bathrooms.</p>
                    <p>This villa comes with a coordinator, cook, housekeeper and houseman. During your stay, the caring staff guarantee your relaxation in this tranquil luxurious home.</p>
                    <p>SunSpot villa will offer you an inclusive experience, a meal plan, select activities, airport transfers with other services and amenities included. Guests will receive the highest level of personalization and customization, with each stay perfectly tailored to individual preferences.</p>
                </div>

                <div class="large-4 medium-4 columns">
                    <a href="images/DescImage.png" data-lightbox="gallery2"><img style="margin-top:60px; width:100%;" src="images/DescImage.png"/></a>
                </div>

                <div class="large-1 show-for-large-up columns">&nbsp;</div>

            </div>

            <div class="show-for-small"><br /></div>
            <div class="show-for-medium"><br /><br /><br /></div>
            <div class="show-for-large-up"><br /><br /><br /><br /></div>

        </section>

        <section id="Photos" class="centered" style="background:rgba(158, 158, 158,0.6); color:#fff;">

            <div class="show-for-small"><br /></div>
            <div class="show-for-medium"><br /><br /><br /></div>
            <div class="show-for-large-up"><br /><br /><br /><br /></div>

            <div class="row">
            <div class="large-1 show-for-large-up columns">&nbsp;</div>
            <div class="large-10 medium-12 columns">

                <div id="owl" class="owl-carousel owl-theme centered">

                  <?
                    // while ($row = mysql_fetch_array($res_photos)) {
                    //   echo "
                    //     <div class='item'>
                    //       <a href='http://admin1.sunspotvillaja.com/upload/{$row['id']}_photo_c' data-lightbox='gallery' data-title='{$row['name']}'>
                    //         <img class='lazyOwl'
                    //           data-src='http://admin1.sunspotvillaja.com/upload/{$row['id']}_photo_c'
                    //           style='max-width: 245px;'
                    //           height=''
                    //         />
                    //       </a>
                    //     </div>
                    //   ";

                    // }
                  ?>

                </div>

            </div>
            <div class="large-1 show-for-large-up columns">&nbsp;</div>
            </div>


            <div class="show-for-small"><br /></div>
            <div class="show-for-medium"><br /><br /><br /></div>
            <div class="show-for-large-up"><br /><br /><br /><br /></div>

        </section>

        <section id="Location" style="background:rgba(227, 127, 29,0.6); color:#fff;">

            <div class="show-for-small"><br /></div>
            <div class="show-for-medium"><br /><br /><br /></div>
            <div class="show-for-large-up"><br /><br /><br /><br /></div>

            <div class="row">
                <div class="large-1 show-for-large-up columns">&nbsp;</div>
                <div class="large-4 medium-4 columns">
                    <a target="_blank" href="https://www.google.com/maps/@18.463118,-77.3262989,800m/data=!3m1!1e3"><img class="fullWidth" src="images/imageMap.png"/></a>
                </div>
                <div class="large-6 medium-8 columns">
                    <h4 class="title">Runaway Bay Jamaica</h4>
                    <p>SunSpot is located on the sandy shores of Runaway Bay, one of the best beaches in Jamaica</p>
                    <p>“Jamaica ranks as the world’s third best island destination and the best in the entire Caribbean”, according to the 2016 Travelers’ Choice Awards by TripAdvisor.</p>
                </div>
                <div class="large-1 show-for-large-up columns">&nbsp;</div>
            </div>

            <div class="show-for-small"><br /></div>
            <div class="show-for-medium"><br /><br /><br /></div>
            <div class="show-for-large-up"><br /><br /><br /><br /></div>

        </section>

        <section id="Amenities" style="background:rgba(158, 158, 158,0.6); color:#fff;">

            <div class="show-for-small"><br /><br /></div>
            <div class="show-for-medium"><br /><br /><br /><br /></div>
            <div class="show-for-large-up"><br /><br /><br /><br /><br /></div>

            <div class="row">
                <div class="large-1 show-for-large-up columns">&nbsp;</div>
                <div class="large-10 medium-12 columns">
                    <h3 class="title centered">Amenities</h3>
                    <p class="centered">We are delighted to provide you with a selection of amenities designed to help you relax and revitalize during your stay at SunSpot Villa, Runaway Bay, Jamaica</p>
                </div>
                <div class="large-1 show-for-large-up columns">&nbsp;</div>
            </div>

             <div class="row">
                <div class="large-1 show-for-large-up columns">&nbsp;</div>
                <div class="large-10 medium-12 columns">

                    <ul class="accordion" data-accordion>

                        <li class="accordion-navigation">
                          <a href="#bathrooms" data-content="bathrooms">Bathrooms</a>
                          <div id="bathrooms" class="content active">
                              <ul>
                                  <li>Shower</li>
                                  <li>Spacious Bathroom</li>
                                  <li>Vanity</li>
                              </ul>
                          </div>
                        </li>

                        <li class="accordion-navigation">
                          <a href="#roomFeatures" data-content="roomFeatures">Room Features</a>
                          <div id="roomFeatures" class="content">
                            <ul>
                                <li>Queen Size Bed in Each Room</li>
                                <li>One Room Features Two Queen size Beds</li>
                                <li>Closet</li>
                                <li>Chaise Lounge / Chair</li>
                                <li>Credenza</li>
                                <li>Ceiling Fan and AC (Individually Controlled)</li>
                                <li>In-Room Electronic Safe</li>
                                <li>Smoke Detector</li>
                                <li>Flat Screen TV</li>
                                <li>Crib Available Upon Request</li>
                                <li>Additional Single Beds Available Upon Request</li>
                                <li>Double Door Walk out from Three Rooms to Pool, Gazebo and Ocean View</li>
                            </ul>
                          </div>
                        </li>

                        <li class="accordion-navigation">
                          <a href="#services" data-content="services">Services</a>
                          <div id="services" class="content">
                              <ul>
                                <li>Turndown Service (upon request)</li>
                                <li>Iron & Ironing Board</li>
                                <li>Laundry Service (upon request)</li>
                                <li>Internet Wireless High Speed (Complimentary)</li>
                              </ul>
                          </div>
                        </li>

                        <li class="accordion-navigation">
                          <a href="#dining" data-content="dining">Dining</a>
                          <div id="dining" class="content">
                              <h4 style="color:#fff;">AVAILABLE FOR YOUR CONVENIENCE</h4>
                              <ul>
                                <li>MEAL PLAN - Additional Cost of $50 Per/Person Daily</li>
                                <li>Included in the Daily Meal Plan</li>
                                <li>Three meals daily (Breakfast, Lunch & Dinner)</li>
                                <li>Non-Alcohol Refreshment Centre</li>
                                <li>Tea and Coffee</li>
                                <li>Dining Out can be Arranged with Coordinator</li>
                              </ul>
                          </div>
                        </li>

                        <li class="accordion-navigation">
                          <a href="#recreation" data-content="recreation">Recreation & Entertainment</a>
                          <div id="recreation" class="content">
                              <ul>
                                  <li>Golf</li>
                                  <li>Water Sports at Jewel Runaway Bay (2mins walking distance)</li>
                                  <li>Tennis</li>
                                  <li>Pool</li>
                                  <li>Private Beach (Walk from Pool to Beach)</li>
                                  <li>Outdoor Shower</li>
                                  <li>Gazebo (Lounging by the Pool)</li>
                                  <li>Designated Outdoor Smoking Area</li>
                                  <li>Horseback Riding</li>
                                  <li>Planned Excursion of the Island</li>
                                  <li>Dining Out</li>
                              </ul>
                          </div>
                        </li>

                        <li class="accordion-navigation">
                          <a href="#transport" data-content="transport">Transport & Security</a>
                          <div id="transport" class="content">
                              <ul>
                                  <li>Shuttle Service within Surrounding Area can be Arranged with Coordinator</li>
                                  <li>Pick-up and Drop-off from Montego Bay Airport (Complimentary)</li>
                                  <li>Gated and Security Present</li>
                              </ul>
                          </div>
                        </li>

                    </ul>

                </div>
                <div class="large-1 show-for-large-up columns">&nbsp;</div>
             </div>

            <div class="show-for-small"><br /><br /></div>
            <div class="show-for-medium"><br /><br /><br /><br /></div>
            <div class="show-for-large-up"><br /><br /><br /><br /><br/></div>


        </section>

        <section id="Rates" class="centered" style="background:rgba(227, 127, 29,0.6); color:#fff;">

            <div class="show-for-small"><br /><br /></div>
            <div class="show-for-medium"><br /><br /><br /><br /></div>
            <div class="show-for-large-up"><br /><br /><br /><br /></div>

            <div class="row">
                <div class="large-1 show-for-large-up columns">&nbsp;</div>
                <div class="large-10 medium-12 columns">
                    <h3 class="title">Rates</h3>
                    <p style="font-family:sans-serif;">ALL PRICES ARE IN $USD CURRENCY.
                      <!--THE PRICES LISTED ARE FOR 8 GUESTS USING 4 BEDROOMS.-->
                      <br><center><i><font size="-1">For larger or smaller groups contact us</font></i></center>
                    </p>

                    <table class="priceTable">
                      <tr>
                        <th style="width" class="white">SEASON</th>
                        <th class="white">PERIOD</th>
                        <th class="white">WEEKLY<Br>4 BEDROOM<Br>8 GUESTS</th>
                        <th class="white">WEEKLY<Br>5 BEDROOM<Br>10 GUESTS</th>
                        <th class="white">WEEKLY<Br>6 BEDROOM<Br>12 GUESTS</th>
                      </tr>
                      <!-- getPriceTable runs the function and places it here-->

                    </table>

                    <div style="text-align:left;">
                      <ul>
                        <li><b>Jamaica High Season</b>, December 15 to April 14 except for Christmas and New Year's week.</li>
                        <li><b>Jamaica Low Season</b>, April 15 to December 14 except for Thanksgiving week.</li>
                        <li><b>Holiday Weeks</b>, Easter April 10-17, Thanksgiving Nov 18-25 </li>
                        <li>Christmas Dec 19-26, New Year's Dec 26-Jan 2.</li>
                        <li>All Holiday bookings require one week and full house rate except where noted.</li>
                      </ul>
                    </div>

                    <br/>
                    <a href="/images/TermsRentalSunspot.pdf" class="button" target="_blank">Terms & Conditions</a>
                </div>
                <div class="large-1 show-for-large-up columns">&nbsp;</div>
            </div>

            <div class="show-for-small"><br /><br /></div>
            <div class="show-for-medium"><br /><br /><br /><br /></div>
            <div class="show-for-large-up"><br /><br /><br /><br /></div>

        </section>

        <section id="BookNow" style="background:rgba(158, 158, 158,0.6); color:#fff;">

            <div class="show-for-small"><br /></div>
            <div class="show-for-medium"><br /><br /></div>
            <div class="show-for-large-up"><br /><br /><br /></div>

            <div class="row">
                <div class="large-2 medium-2 show-for-medium-up columns">&nbsp;</div>
                <div class="large-8 medium-8 columns">
                    <h3 class="title">Request to Book</h3>
                    <hr/>
                    <p>Please fill out the form with the required information and we will get back to you shortly.</p>

                    <form id="calendarForm">
                        <!--<label for="name">Name</label>-->
                        <input type="text" placeholder="Full Name" id="name" name="name" required  >

                        <!--<label for="phone">Phone</label>-->
                        <input type="text" placeholder="Phone Number" id="phone" name="phone" >

                        <!--<label for="email">Email</label>-->
                        <input type="email" placeholder="Email" id="email" name="email" required >
                        <input type="email" placeholder="Confirm Email" id="confirm_email" name="confirm_email" required >

                        <!--<label for="fromDate">From</label>-->
                        <div class="row">
                            <div class="columns small-6"><input type="text" placeholder="Start Date" id="fromDate" name="fromDate"></div>
                        <!--<label for="toDate">to</label>-->
                            <div class="columns small-6"><input type="text" placeholder="End Date" id="toDate" name="toDate"></div>
                        </div>

                        <input type="text" placeholder="Country Flying From" id="country" name="country" required >

                                    <div class="row">
                          <div class="columns small-12 medium-4">
                              <select id="numberAdultGuests" name="numberAdultGuests" required >
                                <option value="">Number of Adult Guests</option>
                                <? for ( $i = 0; $i <= 19; $i++ ) : ?>
                                  <option><?=$i?></option>
                                <? endfor; ?>
                                  <option>20+</option>
                              </select>
                          </div>
                          <div class="columns small-12 medium-4">
                              <select id="numberChildGuests" name="numberChildGuests" >
                                <option value="0">Child Guests</option>
                                <? for ( $i = 1; $i <= 9; $i++ ) : ?>
                                  <option><?=$i?></option>
                                <? endfor; ?>
                                  <option>10+</option>
                              </select>
                          </div>
                          <div class="columns small-12 medium-4">
                              <select id="numberInfantGuests" name="numberInfantGuests" >
                                <option value="0">Infant Guests</option>
                                <? for ( $i = 1; $i <= 9; $i++ ) : ?>
                                  <option><?=$i?></option>
                                <? endfor; ?>
                                  <option>10+</option>
                              </select>
                          </div>
                        </div>


                        <textarea name="comments" cols="30" rows="5" id="commentBox" class="commentBox" placeholder="Comments here..."></textarea>

                        <div class="g-recaptcha" data-sitekey="6Led3CUTAAAAADmvEp_Nm6mRtNRbf2hBtEp-UXVR" ></div>

                        <button style="margin-top: 15px;" type="submit" class="btn btn-primary btn-large" id="btnSubmit" data-reactid=".2.0.2.0">Request Booking</button>
                                <div id="loading" style="display:none;">Loading...</div>
                    </form>
                </div>

                <div class="large-2 medium-2 show-for-medium-up columns">&nbsp;</div>

            </div>

            <div class="show-for-small"><br /></div>
            <div class="show-for-medium"><br /><br /></div>
            <div class="show-for-large-up"><br /><br /><br /></div>

        </section>

        <footer>

            <div class="show-for-small-up"><br /></div>

             <div class="row">

                <div class="large-12 medium-12 small-12 columns centered">
                    <img style="width:40%; text-align: center;" src="images/SunSpotLogo-Shade.png" class="logo">
                    <p style="text-align: center;" class="footerCopy centered">
                        Phone: 1-416-619-4606<br/>
                        Email: info@sunspotvillaja.com
                    </p>
                    <p style="text-align: center; text-align: center;
    font-family: sans-serif;
    margin-bottom: 5px;
    font-size: 12px;">
                      COPYRIGHT &copy; 2016. SUNSPOT VILLA ALL RIGHTS RESERVED.
                    </p>
                </div>

                <!--<div class="large-4 medium-4 small-12 columns centered">&nbsp;</div>-->

                <!--<div class="large-4 medium-4 small-12 columns centered">

                    <br/><br/>
                    <h4>FOLLOW US ON:</h4>
                    <img style="width:80%;" src="images/socialMediaBtns.png"/>
                    <br/><br/>

                </div>-->

             </div>

        </footer>


    </div>


        <div class="fullscreen-bg nonMobile">
            <video id="v0" tabindex="0" muted loop autobuffer="autobuffer" preload="preload" class="fullscreen-bg__video">
              <!--<source type="video/webm; codecs=&quot;vp8, vorbis&quot;" src="assets/video/upshoot_rev.webm"></source>-->
              <!--<source type="video/ogg; codecs=&quot;theora, vorbis&quot;" src="http://www.html5rocks.com/tutorials/video/basics/Chrome_ImF.ogv"></source>-->
              <source type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;" data-src="images/villWeb.mp4"></source>
              <p>Sorry, your browser does not support the &lt;video&gt; element.</p>
            </video>
        </div>


    <script src="bower_components/jquery/dist/jquery.min-foundation.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="bower_components/foundation/js/foundation/foundation.js"></script>
    <script src="bower_components/foundation/js/foundation/foundation.accordion.js"></script>
    <script src="bower_components/foundation/js/foundation/foundation.magellan.js"></script>
    <script src="bower_components/foundation/js/foundation/foundation.magellan.js"></script>
    <script src="bower_components/foundation/js/foundation/foundation.reveal.js"></script>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js" ></script>
    <script src="assets/owl-carousel/owl.carousel.js"></script>
    <script src="assets/lightbox/js/lightbox.js"></script>
    <script src="js/app.js"></script>
    <script type="text/javascript" src="data.json"></script>
     <script>

     var disableddates = [];
     var priceRates = [];

     function getPriceTable(){


       var submitData = {};
         var results = null;

         var url = 'assets/webservices/getPriceRates.php?buster='+new Date().getTime();

         $.post( url, submitData, function( response ){

           var objResponse = jQuery.parseJSON( response );
           $.each( objResponse, function( key, value ) {

             var htmlBlock = '<tr><td>'+value.Season+'</td><td>'+value.Period+'</td><td>$'+value.Weekly_8+'USD</td><td>$'+value.Weekly_10+'USD</td><td>$'+value.Weekly_12+'USD</td></tr>';
             $('.priceTable').append(htmlBlock);
           });

         });
     }

        $(function() {

          getBookings();
          getPriceTable();

            var formValidator =  $("#calendarForm").validate({
                    rules: {
                        email: {
                            required: true,
                            email: true
                        },
                confirm_email: {
                  required: true,
                  email: true,
                  equalTo: "#email"
                }
                    }
                });


                   $( "#fromDate" ).datepicker({
                beforeShowDay: DisableSpecificDates,
                defaultDate: "+1w",
                changeMonth: false,
                numberOfMonths: 1,
                onClose: function( selectedDate ) {
                    $( "#toDate" ).datepicker( "option", "minDate", selectedDate );
                }
            });

            $( "#toDate" ).datepicker({
                beforeShowDay: DisableSpecificDates,
                defaultDate: "+1w",
                changeMonth: false,
                numberOfMonths: 1,
                onClose: function( selectedDate ) {
                    $( "#fromDate" ).datepicker( "option", "maxDate", selectedDate );
                }
            });

            $('#btnSubmit').click(function( e ){

                e.preventDefault();

                var form_status = formValidator.form();
                if ( form_status == true ) {

                  $('#myModalMsg').html( 'Sending Request...' );
                  $('#myModal').foundation('reveal', 'open');

                  submitLead();

                }else{

                  $('#myModal').foundation('reveal', 'close');

                }


            });

            function getBookings() {

                var submitData = {};
                var results = null;

                var url = 'assets/webservices/getBookings.php';

                $.post( url, submitData, function( response ){

                  var objResponse = jQuery.parseJSON( response );
                  disableddates = objResponse;

                });


            }

            function submitLead() {

                var submitData = {
                    "name":$('#name').val(),
                    "email":$('#email').val(),
                    "phone":$('#phone').val(),
                    "fromDate":$('#fromDate').val(),
                    "toDate":$('#toDate').val(),
                    "country":$('#country').val(),
                    "numberAdultGuests":$('#numberAdultGuests').val(),
          "numberChildGuests":$('#numberChildGuests').val(),
          "numberInfantGuests":$('#numberInfantGuests').val(),
                    "commentBox":$('#commentBox').val(),
                    "g-recaptcha-response":$('#g-recaptcha-response').val()
                };

                $.post("/assets/webservices/submitLead.php", submitData, function( response ){

                  var objResponse = jQuery.parseJSON( response );

                    console.log( objResponse );
                    console.log( objResponse.status_code );

                    $('#myModalMsg').html( objResponse.status_msg );
                    $('#myModal').foundation('reveal', 'open');

                    if ( objResponse.status_code == true ) {
                      $('#name').val('');
                      $('#email').val('');
                      $('#confirm_email').val('');
                      $('#phone').val('');
                      $('#fromDate').val('');
                      $('#toDate').val('');
                      $('#country').val('');
                      $('#commentBox').val('');
                      $('#numberAdultGuests').val('');
                      $('#numberChildGuests').val('');
                      $('#numberInfantGuests').val();
                    }

                });


            }

            function DisableSpecificDates(date) {

                console.log(disableddates.length );
                if ( disableddates.length == 0 ) {
                    return [true];
                } else {


                    var m = date.getMonth();
                    var d = date.getDate();
                    var y = date.getFullYear();

                    // First convert the date in to the mm-dd-yyyy format
                    // Take note that we will increment the month count by 1
                    var currentdate = (m + 1) + '-' + d + '-' + y ;

                    // We will now check if the date belongs to disableddates array
                    for (var i = 0; i < disableddates.length; i++) {

                        // Now check if the current date is in disabled dates array.
                        if ($.inArray(currentdate, disableddates) != -1 ) {
                            return [false];
                        }else{
                            return [true];
                        }
                    }

                }

            }


        });


    </script>


  </body>
</html>
