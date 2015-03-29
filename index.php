<?php

    // header("Location: "."/under-construction.html");
    // die();
    include_once "backend/indexPhpCode.php";
  ?>
<!DOCTYPE html>
<html lang="en">

  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="description" content="ditinggal rabi responsive wedding invitation theme built with bootstrap">
    <meta name="author" content="afriq yasin ramadhan">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Обичам те, патладжанче мое!</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://fonts.googleapis.com/css?family=Dancing+Script:700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Raleway:900" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/colorbox.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link href="css/marin.css" rel="stylesheet">

    <?php if ($userRow['rsvp'] == 'Y'): ?>
      <style>
        .restOfForm {
          display: block;
        }
      </style>
    <?php endif; ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-target=".navbar-default">

    <!-- begin:navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs" href="#home">Atanaska & Marin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#home">Home</a></li>
            <?php if ($userRow != null): ?>
              <li><a id="jump_to_form" href="#rsvp-form">R.S.V.P.</a></li>
            <?php endif; ?>
            <li><a href="#about">About</a></li>
            <li><a href="#ceremony">Ceremony</a></li>
            <li><a href="#photos">Photos</a></li>
            <li><a href="#story">Story</a></li>
            <li><a href="#copyright">Contact</a></li>
            <li title="Switch to Bulgarian"><a href="indexBG.php" class="flag-a"><img src="img/bg-flag.png" height="40" alt="Switch to Bulgarian"></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
    <!-- end:navbar -->

    <!-- begin:home -->
    <section id="home" style="background-image: url(img/surce.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Atanaska & Marin</h1>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>

          <h3><span>Are getting</span></h3>
          <!-- <div class="line"><h3>Are getting</h3></div> -->
          <h2><i class="fa fa-heart-o"></i> MARRIED! <i class="fa fa-heart-o"></i></h2>
          <h4>And They are pleased to Invite you</h4>
          <h5><span id="rsvp-span">
            ~ RSVP ~
            <span style="display:none;" id="rsvp-email-div">
              <input  id="rsvp-input" placeholder="Email" /> &nbsp;
              <button id="rsvp-go">Go!</button>
            </span>
          </span></h5>
          </div>
        </div>
      </div>
    </section>
    <!-- end:home -->
     
    <!--  begin: rsvp form -->
    <section id="rsvp-form" style="<?php echo ($userRow == null) ? "display:none" : ""; ?>">
    <div class="about-inner">
      <div class="container">

        <input type="hidden" id="hiddenEmail" value="<?php echo $userRow['email']; ?>" />
        <h2>PLEASE READ THE DETAILS BELOW FILLING OUT THE R.S.V.P FROM.</h2>
        
        <div class="answer-section">
          <h3>Location - Hiking Hut “Hija Rai”, Balkan Mountains, Bulgaria</h3>
        
          <div class="row">
            <div class="col-md-12">
              <p>Hiking Hut “Hija Rai” is a 4-5 hour hike into the Bulgarian mountains.</p>
              <p>There is no road for vehicles up to the wedding location. Everyone must hike up there :)</p>
              <p>
              Hiking hut “Rai” is in the Balkan mountains at 1530 meters elevation in the national park Central Balkan.
              It is beneath the highest peak in the Balkan mountain range, peak Botev at 2376 meters above sea level. It also stands under one of the tallest waterfalls on the Balkan Peninsula. The hut is a 3 story building built in 1935. It contains 120 beds, divided up in rooms of 5, 7, and 10 beds each. There are bathrooms and showers. The building has running water and electricity, but the electricity is from a generator and cannot support everyone’s personal electronics at once.
              </p>
            </div>

          </div>
        </div>

        <div class="answer-section">
          <h3>Transport to Bulgaria and Hija Rai</h3>
        
          <div class="row">
            <div class="col-md-12">
              <p>Fly into Sofia at least one day prior to arriving in Kalofer.</p>
              <p>For travel in Bulgaria, you have the following options:</p>
              <ul>
                <li>Train - trains are pretty frequent in Bulgaria, but are not the fanciest of modes of transport. Good if you want to experience Bulgaria more in depth. Not dangerous apart from the regular precautions to take when traveling through Europe</li>
                <li>Bus - also very frequent and more reliable than the trains when it comes to being on time.</li>
                <li>Rental Car - always an option for anyone not from Bulgaria. It is possible to drive in Bulgaria with a US license.</li>
              </ul>
            </div>

          </div>
        </div>

        <div class="answer-section">
          <h3>The hike to Hija Rai</h3>
        
          <div class="row">
            <div class="col-md-12">
              <p>The only way to the hut is along a well-marked path starting in the earea known as "Panicite", 4 km from the town of Klofer. Panicite is the furthest point that can be reached by car before continuing through the mountain on foot.</p>
              <p>There is transport from Kalofer to Panicite throughout the day, but it is likely that we'll have organized transport between these towns for all the wedding guests.</p> 
              <p>The hike itself is usually around 4 hours, although if you're arriving on Saturday, feel free to take longer and enjoy the scenery.</p>
              <p>NOTE: the hike is not too strenuous, however, YOU MUST ARRIVE AT THE HUT BEFORE NIGHTFALL! It is really easy to gt lost in the woods at night and finding you will be difficult, especially since cell phones loose reception so deep into the mountains.</p>
              <p>We will have organized groups hiking together led by friends that have been there before. The groups will be formed depending on time off arrival to Kalofer.</p>
            </div>
          </div>
        </div>


        <div class="answer-section">
          <h3>What to bring</h3>
        
          <div class="row">
            <div class="col-md-12">
              <p>Be prepared for a real multi-day hike into the mountains.</p>
              <p>Although it is summer, temperatures near the hut can get chilly at night. Even during the day, the weather can change in the mountains in a matter of minutes from sunny to foggy and warm to cold. It is always best to be prepared for any climate. 
              <p>We recommend you bring the following:</p>
              <ul>
                <li>A sturdy backpack. The size will depend on the amount of stuff you plan on bringing.</li>
                <li>Two pairs of shoes. One for hiking and one for the wedding. Rain can cause you to be really cold at night if you dont have an extra pair of shoes. Ladies: NO HIGH HEELS PLEASE!</li>
                <li>Sun glasses and hat</li>
                <li>Headlamp, flashlight or a phone with one, just in case</li>
                <li>First Aid kit. Band-aids, disinfectant, ibuprofen at a minimum</li>
                <li>Food for the hike only. Bring light, high calorie foods. Food will be provided for everyone during the stay at the hut.</li>
                <li>Camera - you will want to take pictures of the scenery. Its not to miss out on.</li>
                <li>A happy attitude and smiles - mandatory!</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="answer-section">
          <h3>Gifts</h3>
        
          <div class="row">
            <div class="col-md-12">
              <p>Due to the location, we recommend that you do not carry gifts up the mountain.</p>
              <p>If you prefer, you can leave us a card with your thoughts.</p>
            </div>
          </div>
        </div>

        <div class="answer-section">
          <h3>Dress Code</h3>
        
          <div class="row">
            <div class="col-md-12">
              <p>Because this is a mountain wedding, dress warm and confortably. During the day, we can expect temperatures 20-30 celcius, but the temperatures can drop significantly in the evening.</p>
              <p>A button down short with short sleeves for the men and a happy dress for the ladies is more than fancy enough for the ceremony. Please, no white dresses. We dont want the groom to get confused. He's getting married for the first time.</p>
            </div>
          </div>
        </div>

        <div class="answer-section">
          <h3>More about the big day</h3>
        
          <div class="row">
            <div class="col-md-12">
              <p>The ceremony and the celebrations afterwards will be held outdoors.</p>
              <p>The ceremony will be held in front of the chapel near the hut and the celebrations will be held on the lawn in front of the hut.</p>
            </div>
          </div>
        </div>




        <div class="answer-section">
          <h3>R.S.V.P. - please respond before May 1st</h3>

          <div class="row">
            <div class="col-md-5">Are you joining Atanaska and Marin on July 12th, 2015?</div>
            <div class="col-md-7">
              <input type="radio" name="rsvp" value="Y" id="rsvp-radio-yes" <?php if ($userRow['rsvp'] == 'Y'): ?> checked <?php endif; ?>/> Yes &nbsp; &nbsp;
              <input type="radio" name="rsvp" value="N" id="rsvp-radio-no" <?php if ($userRow['rsvp'] == 'N'): ?> checked <?php endif; ?>/> No
            </div>
          </div>

          <?php if (sizeof($userRow['relatedUsers']) > 1): ?>
          <div class="row">
            <div class="col-md-5">Which of the following related guests will be accompanying you?</div>
            <div class="col-md-7">
              <?php foreach ($userRow['relatedUsers'] as $guest): ?>
                <input class="rsvp-guest" type="checkbox" data-id="<?php echo $guest['id']; ?>" value="Y" <?php echo ($guest['rsvp'] == 'Y') ? 'checked' : ''; ?>/> <?php echo $guest['firstName'] . ' ' .$guest['lastName']; ?></br>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>


          <?php if ($userRow['bachelorPartyInvited'] == 'Y'): ?>
            <div class="row restOfForm">
              <div class="col-md-5">Will you be joining in any bachelor party activities?</div>
              <div class="col-md-7">
                <input type="radio" name="bachelorPartyRsvp" value="Y" <?php if ($userRow['bachelorPartyRsvp'] == 'Y'): ?> checked <?php endif; ?>/> Yes &nbsp; &nbsp;
                <input type="radio" name="bachelorPartyRsvp" value="N" <?php if ($userRow['bachelorPartyRsvp'] == 'N'): ?> checked <?php endif; ?>/> No
              </div>
            </div>
          <?php endif; ?>

        </div>
          

        

        <div class="answer-section restOfForm">
          <h3>Travel details</h3>Answer what you can. You can come back and update this at any time.
        
          <?php if ($userRow['bachelorPartyInvited'] == 'N'): ?>
            <div class="row">
              <div class="col-md-5">With what transport do you plan on traveling in Bulgaria? (rental car, buses, trains)</div>
              <div class="col-md-7"><input name="transport" value="<?php echo $userRow['transport']; ?>" type="text"/></div>
            </div>
          <?php endif; ?>
          
          <div class="row">
            <div class="col-md-5">What day will you be arriving in Bulgaria? (write date out in whatever format suits your fancy. I was too lazy to put a datepicker in here :)</div>
            <div class="col-md-7"><input name="arrivalDay" value="<?php echo $userRow['arrivalDay']; ?>" type="text"/></div>
          </div>
        </div>

        


        <div class="answer-section restOfForm">
          <h3>Wedding location details</h3>
        
          <div class="row">
            <div class="col-md-5">Are you sleeping in the hut (bunk bed) or do you have your own tent?</div>
            <div class="col-md-7">
              <input type="radio" name="sleepLocation" value="hut" <?php if ($userRow['sleepLocation'] == 'hut'): ?> checked <?php endif; ?>/> I'm sleeping in the hut. </br>
              <input type="radio" name="sleepLocation" value="tent" <?php if ($userRow['sleepLocation'] == 'tent'): ?> checked <?php endif; ?>/> I'd like to sleep in my tent even though a bed is provided for me inside.
            </div>
          </div>

          <div class="row">
            <div class="col-md-5">Which nights will you be sleeping up on the mountain?</div>
            <div class="col-md-7">
              <input type="checkbox" name="nightsToStaySat" <?php echo (strpos($userRow['nightsToStay'], "Sat") === false) ? '' : 'checked'; ?>/> Saturday </br>
              <input type="checkbox" name="nightsToStaySun" <?php echo (strpos($userRow['nightsToStay'], "Sun") === false) ? '' : 'checked'; ?>/> Sunday
              </div>
          </div>
          <div class="row">
            <div class="col-md-5">Do you have any food allergies or concerns we should be aware of?</div>
            <div class="col-md-7"><input name="allergies" value="<?php echo $userRow['allergies']; ?>" type="text"/></div>
          </div>
          <div class="row">
            <div class="col-md-5">Would you prefer a vegetarian menu?</div>
            <div class="col-md-7">
                <input type="radio" name="vegetarian" value="Y" <?php if ($userRow['vegetarian'] == 'Y'): ?> checked <?php endif; ?>/> Yes &nbsp; &nbsp;
                <input type="radio" name="vegetarian" value="N" <?php if ($userRow['vegetarian'] == 'N'): ?> checked <?php endif; ?>/> No
            </div>
          </div>
        </div>

        

        <div class="answer-section restOfForm">
          <h3>We'll save your answers to the following questions forever! We're looking for some cool stories.</h3>
          
          <div class="row">
            <div class="col-md-5">How and when did you meet Atanaska?</div>
            <div class="col-md-7"><textarea name="meetAtanaska"><?php echo $userRow['meetAtanaska']; ?></textarea></div>
          </div>
          <div class="row">
            <div class="col-md-5">How and when did you meet Marin?</div>
            <div class="col-md-7"><textarea name="meetMarin"><?php echo $userRow['meetMarin']; ?></textarea></div>
          </div>
        </div>

        <div id="fieldRequiredMessage" class="alert alert-danger" role="alert" style="display: none">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="sr-only">Error:</span>
          Please fill out all fields
        </div>
        <div id="savedMessage" class="alert alert-success" role="alert" style="display: none">
          <span class="glyphicon glyphicon glyphicon-saved" aria-hidden="true"></span>
          <span class="sr-only">Success:</span>
          Your inputs have been saved!
        </div>

        <div id="saveFailMessage" class="alert alert-danger" role="alert" style="display: none">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="sr-only">Error:</span>
          Save Failed. Please email thissitesucks@atanaskaandmarin.com for help.
        </div>
        
        <div class="row">
          <div class="col-md-12" style="text-align: center;"><button id="rsvpSubmit">Submit Response</button></div>
        </div>

      </div>
    </div>
  </section>
    <!--  end: rsvp form -->

  <!-- begin:about -->
  <section id="about">
    <div class="about-inner">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>Atanaska</h2>
            <blockquote>
              Nasi is the most internally beautiful person I've ever met.
              </br>
              There hasn't been anyone who makes me stop what I'm doing and go out of my way and follow her to show me "something very important," which ends up being a beautiful moon or sunset. And then she turns and smiles with a huge grin on her face.
              </br>
              She makes those around her appreciate the important and beautiful things in life.
              <small>Marin</small>
            </blockquote>
          </div>
          <!-- break -->

          <div class="col-md-4">
            <div class="about-img-container" style="background: url(img/13.jpg) center;"></div>
            <img src="img/bottom.png" class="about-img img-responsive">
          </div>
          <!-- break -->

          <div class="col-md-4">
            <h2>Marin</h2>
            <blockquote>
              If there is any place in the world where there is not even one sunny day, I would send him there to warm people's hearts and brightens their day with his shining smile. As he does to mine.

              </br>
              I doubt there is another man who before proposing have said: "Please, do not freak out!"
              <small>Atanaska</small>
            </blockquote>
          </div>
          <!-- break -->

        </div>
      </div>
    </div>
  </section>
  <!-- end:about -->

  <!-- begin:ceremony -->
  <section id="ceremony" style="background-image: url(img/1.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>The Ceremony</h1>
          <h3><span>Will Be Held On</span></h3>
          <h2>12 July, 2015</h2>
          <!-- <h5><span>~ July ~</span></h5> -->
          <h4>Chapel next to Hija Rai,  4:00 PM</h4>
        </div>
      </div>
    </div>
  </section>
  <!-- end:ceremony -->

  <!-- begin:photos -->
  <section id="photos">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="img/bottom.png" class="about-img img-responsive">
          <h2>Photo Gallery</h2>
          <p></p>
        </div>
        <!-- break -->

        <div class="col-md-8">
          <div id="wedding-photo" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item">
                  <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInLeftBig">
                      <a href="img/1.jpg" class="gallery-images">
                        <div class="photo-gallery" style="background: url(img/1.jpg);"></div>
                      </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInDownBig">
                      <a href="img/2.jpg" class="gallery-images">
                        <div class="photo-gallery" style="background: url(img/2.jpg);"></div>
                      </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInRightBig">
                      <a href="img/3.jpg" class="gallery-images">
                        <div class="photo-gallery" style="background: url(img/3.jpg);"></div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInLeftBig">
                      <a href="img/4.jpg" class="gallery-images">
                        <div class="photo-gallery" style="background: url(img/4.jpg);"></div>
                      </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInDownBig">
                      <a href="img/5.jpg" class="gallery-images">
                        <div class="photo-gallery" style="background: url(img/5.jpg);"></div>
                      </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInRightBig">
                      <a href="img/6.jpg" class="gallery-images">
                        <div class="photo-gallery" style="background: url(img/6.jpg);"></div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInLeftBig">
                      <a href="img/10.jpg" class="gallery-images">
                        <div class="photo-gallery" style="background: url(img/10.jpg);"></div>
                      </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInDownBig">
                      <a href="img/11.jpg" class="gallery-images">
                        <div class="photo-gallery" style="background: url(img/11.jpg);"></div>
                      </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInRightBig">
                      <a href="img/12.jpg" class="gallery-images">
                        <div class="photo-gallery" style="background: url(img/12.jpg);"></div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInLeftBig">
                      <a href="img/13.jpg" class="gallery-images">
                        <div class="photo-gallery" style="background: url(img/13.jpg);"></div>
                      </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInDownBig">
                      <a href="img/14.jpg" class="gallery-images">
                        <div class="photo-gallery" style="background: url(img/14.jpg);"></div>
                      </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInRightBig">
                      <a href="img/15.jpg" class="gallery-images">
                        <div class="photo-gallery" style="background: url(img/15.jpg);"></div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="item active">
                  <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInRightBig">
                      <a href="img/7.jpg" class="gallery-images">
                        <div class="photo-gallery" style="background: url(img/7.jpg);"></div>
                      </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInUpBig">
                      <a href="img/8.jpg" class="gallery-images">
                        <div class="photo-gallery" style="background: url(img/8.jpg);"></div>
                      </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInLeftBig">
                      <a href="img/9.jpg" class="gallery-images">
                        <div class="photo-gallery" style="background: url(img/9.jpg);"></div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              
              <a class="left carousel-control" href="#wedding-photo" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#wedding-photo" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end:photos -->

  <!-- begin:story -->
  <section id="story">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Our Story</h2>
          <ul class="content">
            <li>
              <h3 class="content-avatar avatar-top">
                <div class="img-avatar" style="background-image: url(img/18.jpg); background-position: 0px -28px;"></div>
              </h3>
              <ul>
                <!-- begin:content-text -->
                <li class="content-item content-photo">
                  <h3>Meeting:</h3>
                  <img src="img/1.jpg" alt="">
                  <time datetime=""><i class="fa fa-calendar"></i> 12 July, 2012 in front of Hija Rai</time>
                </li>
                <!-- end:content-text -->

                <!-- begin:content-photo -->
                <li class="content-item content-text">
                  <h3>How we got there:</h3>
                  <p class="caption">Every summer, when He comes home to Bulgaria, he organizes a hike with friends up to Hija Rai, (where his parents met). She has never been there before, but two weeks earlier, while traveling with a friend, the pick up a hitchiker, Alex, one of Marin's friends. Alex invites them to go hiking. She decides to go and hops alone on a night train  from Varna to Kalofer at 3 in the morning. After the hike, they meet in front of the hut.</p>
                  <time datetime=""><i class="fa fa-calendar"></i> 12 July, 2012</time>
                </li>
                <!-- end:content-photo -->


                <!-- begin:content-text -->
                <li class="content-item content-text">
                  <h3>First non-date:</h3>
                  <img src="img/16.jpg" alt="">
                  <time datetime=""><i class="fa fa-calendar"></i> 31 July, 2012, Varna</time>
                </li>
                <!-- end:content-text -->

                <!-- begin:content-text -->
                <li class="content-item content-text">
                  <h3>First date:</h3>
                  <img src="img/17.jpg" alt="">
                  <time datetime=""><i class="fa fa-calendar"></i> 2 August, 2012, Varna</time>
                </li>
                <!-- end:content-text -->


                <!-- begin:content-text -->
                <li class="content-item content-text">
                  <h3>First dance:</h3>
                  <div class="text">Elvis Presley - Can’t help falling in love with you</div>
                  <time datetime=""><i class="fa fa-calendar"></i> 15 August 2013, Prague</time>
                </li>
                <!-- end:content-text -->




                <!-- begin:content-chat -->
                <li class="content-item content-chat">
                  <h3>The proposal:</h3>
                  <p class="text chat even">Gloria: “Nasi, have you thought about getting married to Marin?”</p>
                  <div class="text">She says no. He's standing next to her with the ring in His pocket. His expression - priceless. Her explanation - he is 4 years younger and she doesnt want to rush him into anything he's not ready for. Her explanation calms him down and he bravely proposes later the same day.</div>
                  <img src="img/11.jpg" alt="">
                  <time datetime=""><i class="fa fa-calendar"></i> 16 February 2013, California</time>
                </li>
                <!-- end:content-chat -->

                <!-- begin:content-chat -->
                <li class="content-item content-chat">
                  <h3>Decision on wedding location:</h3>
                  <div class="text">The same day, while laying in a hammock between the great California red woods, they decide the wedding will be in the same place they met on the same day of the year.</div>
                  <img src="img/19.jpg" alt="">
                  <time datetime=""><i class="fa fa-calendar"></i> 16 February 2013, California</time>
                </li>
                <!-- end:content-chat -->


              </ul>
            </li>

            <li class="content-end">
              <h3 class="content-avatar avatar-end">
                <div class="img-avatar" style="background-image: url(img/12.jpg); background-position: -36px 0px;"></div>
              </h3>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- end:story -->
  
  <!-- begin:contact -->
  <section id="contact">
    <div id="maps"></div>
    <div class="container">
    <!--   <div class="row">
        <div class="col-md-12">
          <h2>Contact Us</h2>
          <div class="contact-container">
            <div class="row">
              <form>
              <div class="col-md-6 col-sm-6">
                <textarea rows="7" class="form-control no-resize" placeholder="Message"></textarea>
              </div>

              <div class="col-md-6 col-sm-6">
                <input type="text" class="form-control" placeholder="Name">
                <input type="email" class="form-control" placeholder="Email">
                <input type="submit" value="Submit" class="btn btn-lg btn-green" />
              </div>
              </form>
            </div>
          </div>
          <h5><span>~ Thank you ~</span></h5>
        </div>
      </div> -->
    </div>
  </section>
  <!-- end:contact -->

  <!-- begin:copyright -->
  <section id="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Atanaska & Marin</h2>
          <h3>Contact us at </h3>
          <h3>wedding@atanaskaandmarin.com, marinatanaskaandmarin.com, and atanaska@atanaskaandmarin.com</h3>
        </div>
      </div>

      <!-- <div class="row">
        <div class="col-md-12">
          <ul class="list-inline social-icon">
            <li><a href="#" class="icon-twitter" rel="tooltip" title="Twitter" data-placement="top"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="icon-facebook" rel="tooltip" title="Facebook" data-placement="top"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="#" class="icon-google" rel="tooltip" title="Google Plus" data-placement="top"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="icon-instagram" rel="tooltip" title="Instagram" data-placement="top"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div> -->

      <!-- <div class="row">
        <div class="col-md-12">
          <p>Atanaska & Marin's Wedding Invitation built with <i class="fa fa-heart-o"></i> by <a href="http://about.me/avriqq" target="_blank">@avriqq</a></p>
          <p>Copyright &copy; 2014 All Right Reserved.</p>
        </div>
      </div> -->
</br>
      <div class="row">
        <div class="col-md-12">
          <p>Atanaska & Marin's Awesome Wedding Invitation Website</p>
          <p>Built by Marin. WoooooooHooooooo!</p>
        </div>
      </div>
    </div>
  </section>
  <!-- end:copyright -->


  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
     <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="js/gmap3.js"></script>
    <script src="js/jquery.colorbox.js"></script>
    <script src="js/jquery.easing.js"></script> 
    <script src="js/script.js"></script>
  </body>
</html>
