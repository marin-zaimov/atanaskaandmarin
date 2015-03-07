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
    <link href="css/marinBG.css" rel="stylesheet">

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
            <li class="active"><a href="#home">Начало</a></li>
            <?php if ($userRow != null): ?>
              <li><a id="jump_to_form" href="#rsvp-form">R.S.V.P.</a></li>
            <?php endif; ?>
            <li><a href="#about">Относно</a></li>
            <li><a href="#ceremony">Церемония</a></li>
            <li><a href="#photos">Снимки</a></li>
            <li><a href="#story">История</a></li>
            <li><a href="#contact">Контакти</a></li>
            <li title="Switch to English"><a href="index.php" class="flag-a"><img src="img/usa-flag.png" height="35" alt="Switch to English"></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
    <!-- end:navbar -->

    <!-- begin:home -->
    <section id="home" style="background: url(img/img01.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Атанаска & Марин</h1>
          <h3><span>Ще се</span></h3>
          <!-- <div class="line"><h3>Are getting</h3></div> -->
          <h2><i class="fa fa-heart-o"></i> ЖЕНЯТ! <i class="fa fa-heart-o"></i></h2>
          <h4>И с удоволствие ви канят да бъдете техни гости</h4>
          <h5><span id="rsvp-span">
            ~ RSVP ~ &nbsp;
            <span style="display:none;" id="rsvp-email-div">
              <input  id="rsvp-input" placeholder="Email" /> &nbsp;
              <button id="rsvp-go">Клик!</button>
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
          <h3>Location - Hiking Hut “Rai”, Balkan Mountains, Bulgaria</h3>
        
          <div class="row">
            <div class="col-md-12">
              <p>Hiking Hut “Rai” is a 4-5 hour hike into the Bulgarian mountains.</p>
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
              <p>A button down short with short sleeves for the men and a happy dress for the ladies is more than fancy enough for the ceremony.</p>
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
          <h3>R.S.V.P.</h3>

          <div class="row">
            <div class="col-md-5">Ще се присъедините ли към празника на Атанаска и Марин на 12-и Юли 2015?</div>
            <div class="col-md-7">
              <input type="radio" name="rsvp" value="Y" id="rsvp-radio-yes" <?php if ($userRow['rsvp'] == 'Y'): ?> checked <?php endif; ?>/> Да &nbsp; &nbsp;
              <input type="radio" name="rsvp" value="N" id="rsvp-radio-no" <?php if ($userRow['rsvp'] == 'N'): ?> checked <?php endif; ?>/> Не
            </div>
          </div>


          <?php if ($userRow['bachelorPartyInvited'] == 'Y'): ?>
            <div class="row restOfForm">
              <div class="col-md-5">Ще се включите ли в ергенското парти?</div>
              <div class="col-md-7">
                <input type="radio" name="bachelorPartyRsvp" value="Y" <?php if ($userRow['bachelorPartyRsvp'] == 'Y'): ?> checked <?php endif; ?>/> Yes &nbsp; &nbsp;
                <input type="radio" name="bachelorPartyRsvp" value="N" <?php if ($userRow['bachelorPartyRsvp'] == 'N'): ?> checked <?php endif; ?>/> No
              </div>
            </div>
          <?php endif; ?>

          <?php if (sizeof($userRow['relatedUsers']) > 0): ?>
          <div class="row restOfForm">
            <div class="col-md-5">Кои от поканените ще присъстват?</div>
            <div class="col-md-7">
              <?php foreach ($userRow['relatedUsers'] as $guest): ?>
                <input class="rsvp-guest" type="checkbox" data-id="<?php echo $guest['id']; ?>" value="Y" <?php echo ($guest['rsvp'] == 'Y') ? 'checked' : ''; ?>/> <?php echo $guest['firstName'] . ' ' .$guest['lastName']; ?></br>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <?php endif; ?>



        <div class="answer-section restOfForm">
          <h3>Информация за пътуването</h3>Отговорете на въпросите, на които можете. Можете да се върнете по всяко време и да обновите информацията.

          <?php if ($userRow['bachelorPartyInvited'] == 'N'): ?>
            <div class="row">
              <div class="col-md-5">С какъв транспорт планувате да пътувате? (кола, автобус, влак)</div>
              <div class="col-md-7"><input name="transport" value="<?php echo $userRow['transport']; ?>" type="text"/></div>
            </div>
          <?php endif; ?>

          <div class="row">
            <div class="col-md-5">Кой ден ще пристигнете на хижа Рай?</div>
            <div class="col-md-7">
              <select name="arrivalDay" value="<?php echo $userRow['arrivalDay']; ?>"> >
                <option value="saturday" <?php echo ($userRow['arrivalDay'] == 'saturday') ? 'selected' : ''; ?>> Събота 11.07</option>
                <option value="sunday" <?php echo ($userRow['arrivalDay'] == 'sunday') ? 'selected' : ''; ?>>Неделя 12.07</option>
              </select>
            </div>
          </div>
        </div>




        <div class="answer-section restOfForm">
          <h3>Информация за местоположението на сватбата</h3>

          <div class="row">
            <div class="col-md-5">Желаете ли да спите в хижата (легла на 2 етажа) или ще си носите палатка/спален чувал?</div>
            <div class="col-md-7">
              <input type="radio" name="sleepLocation" value="hut" <?php if ($userRow['sleepLocation'] == 'hut'): ?> checked <?php endif; ?>/> Ще спя в хижата. </br>
              <input type="radio" name="sleepLocation" value="tent" <?php if ($userRow['sleepLocation'] == 'tent'): ?> checked <?php endif; ?>/> Ще спя навън под звездите.
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">Имате ли някакви хранителни алергии или ограничения?</div>
            <div class="col-md-7"><input name="allergies" value="<?php echo $userRow['allergies']; ?>" type="text"/></div>
          </div>
          <div class="row">
            <div class="col-md-5">Предпочитате ли вегетарианско/веганско меню?</div>
            <div class="col-md-7">
                <input type="radio" name="vegetarian" value="Y" <?php if ($userRow['vegetarian'] == 'Y'): ?> checked <?php endif; ?>/> Да &nbsp; &nbsp;
                <input type="radio" name="vegetarian" value="N" <?php if ($userRow['vegetarian'] == 'N'): ?> checked <?php endif; ?>/> Не
            </div>
          </div>
        </div>



        <div class="answer-section restOfForm">
          <h3>Ние ще запазим отговорите ви на следващите въпроси завинаги! Очакваме да бъдете искрени и да разкажете весели (или не дотам) истории.</h3>

          <div class="row">
            <div class="col-md-5">Как и кога се запознахте с Атанаска?</div>
            <div class="col-md-7"><textarea name="meetAtanaska"><?php echo $userRow['meetAtanaska']; ?></textarea></div>
          </div>
          <div class="row">
            <div class="col-md-5">Как и кога се запознахте с Марин?</div>
            <div class="col-md-7"><textarea name="meetMarin"><?php echo $userRow['meetMarin']; ?></textarea></div>
          </div>
        </div>

        <div id="fieldRequiredMessage" class="alert alert-danger" role="alert" style="display: none">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="sr-only">Грешка:</span>
          Моля, попълнете всички полета
        </div>
        <div id="savedMessage" class="alert alert-success" role="alert" style="display: none">
          <span class="glyphicon glyphicon glyphicon-saved" aria-hidden="true"></span>
          <span class="sr-only">Браво!:</span>
          Отговорите ви са записани!
        </div>

        <div id="saveFailMessage" class="alert alert-success" role="alert" style="display: none">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="sr-only">Грешка:</span>
          Неуспешно записване. Моля пратете имейл на thissitesucks@atanaskaandmarin.com за помощ.
        </div>

        <div class="row">
          <div class="col-md-12" style="text-align: center;"><button id="rsvpSubmit">Изпращане на отговор</button></div>
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
            <h2>Атанаска</h2>
            <p>ТУК ПИШЕШ ТИ!!!

             </p>
            <blockquote>

              <small>Марин</small>
            </blockquote>
          </div>
          <!-- break -->

          <div class="col-md-4">
            <div class="about-img-container" style="background: url(img/img05.jpg) center;"></div>
            <img src="img/bottom.png" class="about-img img-responsive">
          </div>
          <!-- break -->

          <div class="col-md-4">
            <h2>Марин</h2>
            <p>Ако има някое място на света, където няма нито един слънчев ден, аз бих го изпратила там, за да стопли сърцата на хората и да огрява деня им с усмивката си. Както огрява моя.

            </p>

            Едва ли има друг мъж, който преди да предложи брак е казал:"Моля те не се шашкай!"
              <small>Атанаска</small>
            </blockquote>
          </div>
          <!-- break -->

        </div>
      </div>
    </div>
  </section>
  <!-- end:about -->

  <!-- begin:ceremony -->
  <section id="ceremony" style="background: url(img/1.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Церемонията</h1>
          <h3><span>Ще се състои на</span></h3>
          <h2>12-и Юли 2015</h2>
          <!-- <h5><span>~ July ~</span></h5> -->
          <h4>Параклиса до хижа Рай,  16:00ч. </h4>
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
          <h2>Фото Галерия</h2>
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
          <h2>The Story</h2>
          <ul class="content">
            <li>
              <h3 class="content-avatar avatar-top">
                <div class="img-avatar" style="background: url(img/img08.jpg);"></div>
              </h3>
              <ul>
                <!-- begin:content-text -->
                <li class="content-item content-text">
                  <h3>Hae :"></h3>
                  <div class="text">I meet you at the first time. I smile, and you don't smile back to me. I was silent, and you laugh out loud alone. I'ts so fuck'in romantic epic. :))</div>
                  <time datetime=""><i class="fa fa-calendar"></i> December, 19 2010</time>
                </li>
                <!-- end:content-text -->

                <!-- begin:content-photo -->
                <li class="content-item content-photo">
                  <img src="img/img05.jpg" alt="ditinggal rabi - together">
                  <p class="caption">At the first date, we ate ice cream and "cemong" together. We enjoyed the evening. Sitting on the bench side of the road. Telling each other silly thing, and I was able to make a little melted. Emm.. I mean make your ice cream melts. :|</p>
                  <time datetime=""><i class="fa fa-calendar"></i> January, 19 2011</time>
                </li>
                <!-- end:content-photo -->

                <!-- begin:content-photo -->
                <li class="content-item content-photo">
                  <img src="img/img06.jpg" alt="ditinggal rabi - sleep together">
                  <time datetime=""><i class="fa fa-calendar"></i> February, 19 2011</time>
                </li>
                <!-- end:content-photo -->

                <!-- begin:content-chat -->
                <li class="content-item content-chat">
                  <p class="text chat odd">A : Sist..</p>
                  <p class="text chat even">B : Yeah..</p>
                  <p class="text chat odd">A : Sist..</p>
                  <p class="text chat even">B : Yeahh broth..</p>
                  <p class="text chat odd">A : Would you be..</p>
                  And then silence....
                  <time datetime=""><i class="fa fa-calendar"></i> March, 26 2011</time>
                </li>
                <!-- end:content-chat -->

                <!-- begin:content-quote -->
                <li class="content-item content-quote">
                  <blockquote>
                    <p>I do not promise anything, I can only promise one thing. I would still handsome until tomorrow... <small>avriqq</small></p>
                    <time datetime=""><i class="fa fa-calendar"></i> March, 26 2013</time>
                  </blockquote>
                </li>
                <!-- end:content-quote -->

                <!-- begin:content-photo -->
                <li class="content-item content-photo">
                  <img src="img/img07.jpg" alt="ditinggal rabi - wedding ring">
                  <p class="caption">And finally, we are now getting married. :')</p>
                  <time datetime=""><i class="fa fa-calendar"></i> March, 26 2016</time>
                </li>
                <!-- end:content-photo -->


              </ul>
            </li>

            <li class="content-end">
              <h3 class="content-avatar avatar-end">
                <div class="img-avatar" style="background: url(img/avatar.png);"></div>
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
      <!-- <div class="row">
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
          <h2>Атанаска & Марин</h2>
           <h3>Свържете се с нас на </h3>
           <h3>wedding@atanaskaandmarin.com, marinatanaskaandmarin.com, and atanaska@atanaskaandmarin.com</h3>
        </div>
      </div>
<!--
      <div class="row">
        <div class="col-md-12">
          <ul class="list-inline social-icon">
            <li><a href="#" class="icon-twitter" rel="tooltip" title="Twitter" data-placement="top"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="icon-facebook" rel="tooltip" title="Facebook" data-placement="top"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="#" class="icon-google" rel="tooltip" title="Google Plus" data-placement="top"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="icon-instagram" rel="tooltip" title="Instagram" data-placement="top"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div> -->

      <div class="row">
        <div class="col-md-12">
           <p>Страхотния сватбен сайт на Атанаска & Марин</p>
           <p>Създаден от Марин. ЮююююююХууууууу!</p>
         </div>
      </div>
    </div>
  </section>
  <!-- end:copyright -->

<br/>
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
