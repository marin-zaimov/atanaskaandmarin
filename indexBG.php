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
        <div class="adventure collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
    <section id="home" style="background-image: url(img/surce.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="adventure" style="color: #CCC">Атанаска & Марин</h1>
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

        <h2>МОЛЯ, ПРЕДИ ДА ОТГОВОРИТЕ НА ПОКАНАТА, ПРОЧЕТЕТЕ МНОГО ВНИМАТЕЛНО И ИМАЙТЕ ПРЕДВИД ПОСЛЕДВАЩАТА ИНФОРМАЦИЯ.</h2>
        <div class="answer-section">
          <h3>Местоположение - Туристическа хижа "Рай”, Стара планина</h3>

          <div class="row">
            <div class="col-md-12">
              <p>До хижата няма път за автомобилен транспорт, като достъпът е възможен само пеша по указаните туристически маршрути. Преходът се прави през деня и е около 4-5 часа пеш.</p>
              <p></p>Хижа „Рай“ се намира в Стара планина на 1530 м надморска височина, в рамките на Национален парк „Централен Балкан“ и в южното подножие на вр.Ботев - 2376 м. най-високият връх в Стара планина.
              <p> В близост до хижата се намира най-високият водопад на Балканския полуостров - Райското пръскало 124,5 м.
              Хижата се състои от масивна триетажна сграда, построена през 1935 г. и разполага със 120 легла, разпределени в стаи с по 5, 7, 10 и повече легла (повечето от тях двуетажни), с вътрешни и външни санитарни възли и външна баня. Сградата е водоснабдена, електрифицирана от собствен генератор.
              </p>
            </div>

          </div>
        </div>

        <div class="answer-section">
          <h3>Транспорт</h3>

          <div class="row">
            <div class="col-md-12">
              <p>Началната точка за изкачването е местността "Паниците" на 4км. от гр.Калофер.</p>
              <p>Транспорт, с който може да стигнете до гр.Калофер:</p>
              <ul>
                <li>Автомобил</li>
                <li>Влак - Разписанието на влаковете можете да намерите на сайта на БДЖ.</li>
                <li>Автобус.</li>
              </ul>
            </div>

          </div>
        </div>

        <div class="answer-section">
          <h3>Изкачване до хижа Рай</h3>

          <div class="row">
            <div class="col-md-12">
              <p>До хижата се стига по добре маркирана пътека, която започва от местността “Паниците” на 4 км. от град Калофер по поречието на река Тунджа.</p>
              <p>“Паниците” е крайната точка до която можете да се стигне с автомобил, след което ще трябва да продължите през пределите на Централен Балкан пеша. Има възможност за транспорт от гарата или от града до местността с микробус (проверете в сайта на гр. Калофер или се свържете с нас).</p>
              <p>Преходът обикновено е около 4 часа пеш, но ако сте там в събота няма да има за къде да бързате и без притеснение ще можете да си почивате, колкото често решите.</p>
              <p>НО ТРЯБВА ДА ПРИСТИГНЕТЕ В ХИЖАТА ПРЕДИ ЗАЛЕЗ В СЪБОТА 11.07 ИЛИ ДО ОБЯД В НЕДЕЛЯ 12.07! През нощта е лесно да се загубите в планината и би било много трудно да ви открием при положение, че телефоните губят обхват.</p>
              <p>Самото изкачване ще бъде организирано от нас на групи с предварително определен водач-сватбар, който е преминавал маршрута. Този преход по принцип няма нужда от водач, но не бихме искали да загубим ценни сватбари в планината. Групите ще се сформират в зависимост от транспорта, който изберете и времето ви на пристигане. Ако вече сте минавали този преход и не желаете водач, може да ни улесните и вие самите да бъдете такъв.</p>
            </div>
          </div>
        </div>


        <div class="answer-section">
          <h3>Екипировка</h3>

          <div class="row">
            <div class="col-md-12">
              <p>Дядо Парашкева казваше: “Не тръгвай лятно време без абичка, зимно време без торбичка!”</p>
              <p>Желателно е да бъдете подготвени за изкачване в планински условия. Макар и през лятото в планината времето се променя много бързо от слънчево към мъгливо и от топло към студено.
              <p>Препоръчваме ви да сте екипирани с:</p>
              <ul>
                <li>Здрава подходяща раница. Големината зависи изцяло от това какво и колко можете да носите и дали ви е нужно.</li>
                <li>Два чифта обувки - за ходенето по време на прехода и подходящи за сватбата. Обувките за прехода - колкото по-леки, толкова по-добре, летни планинарски или по-здрави маратонки, но глезена да е обхванат (по възможност). Тъй като ще е средата на лятото желателно е да си носите и чифт джапанки - за банята или просто да ви отпочиват краката от обувките. Обувките за сватбата - здрави, с равни подметки, за тропане на хора (може и сандали). За дамите - моля, ако сте подбрали обувки на тънък или висок ток за сватбата, помислете пак.</li>
                <li>Поне 1 пуловер или полар, 1 яке подходящо за дъжд или вятър, 1 дъждобран.</li>
                <li>Слънчеви очила, шапка, слънцезащитен крем, челник или фенерче.</li>
                <li>Палатка и/или спален чувал, шалте - само в случай, че не възнамерявате да спите в хижата.</li>
                <li>Аптечка - ако пиете някакви лекарства или имате алергии, които могат да се обострят, не забравяйте да вземете нужните медикаменти с вас. Лепенки - особено, ако обувките ви са нови. Препарат против комари.</li>
                <li>Храна - за прехода задължително си носете поне сандвичи, ядки, солети, бисквити, малко вода (по маршрута има чешми). Хижата разполага с кухня.</li>
                <li>Фотоапарат - ще има прекрасни гледки, които ще поискате да заснемете.</li>
                <li>Добро настроение и усмивки - задължителни!</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="answer-section">
          <h3>Подаръци за младоженците</h3>

          <div class="row">
            <div class="col-md-12">
              <p>Поради местоположението на събитието и начина на стигане до там, силно ви препоръчваме да не носите каквито и да е подаръци с вас.</p>
              <p>Ако желаете, след церемонията можете да ни изкажете своите благопожелания с картички или пликове в специално поставена за целта кутия.</p>
            </div>
          </div>
        </div>

        <div class="answer-section">
          <h3>Какво да облечете или така наречения “дрес код”</h3>

          <div class="row">
            <div class="col-md-12">
              <p>Тъй като е “планинска сватба” нещо леко и удобно.Имайте предвид, че през нощта температурите падат значително. Самото място не предполага гостите да бъдат строго официални - летен костюм, риза с къс ръкав и панталон или свежа рокля са напълно достатъчни (без бели рокли, дами, младоженецът може да се обърка - жени се за първи път).</p>
            </div>
          </div>
        </div>

        <div class="answer-section">
          <h3>Още за голямото събитие</h3>

          <div class="row">
            <div class="col-md-12">
              <p>Церемонията, както и празненството след нея, ще бъдат навън (при подходящи метереологични условия).</p>
              <p>Венчавката ще се състои в неделя следобед до параклиса в близост до хижата, а празненството на поляната пред хижа Рай.</p>
              <p>Присъствието на децата е силно желано от нас.</p>
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


          <?php if (sizeof($userRow['relatedUsers']) > 0): ?>
          <div class="row">
            <div class="col-md-5">Кои от поканените ще присъстват?</div>
            <div class="col-md-7">
              <?php foreach ($userRow['relatedUsers'] as $guest): ?>
                <input class="rsvp-guest" type="checkbox" data-id="<?php echo $guest['id']; ?>" value="Y" <?php echo ($guest['rsvp'] == 'Y') ? 'checked' : ''; ?>/> <?php echo $guest['firstName'] . ' ' .$guest['lastName']; ?></br>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>

          <?php if ($userRow['bachelorPartyInvited'] == 'Y'): ?>
            <div class="row restOfForm">
              <div class="col-md-5">Ще се включите ли в ергенското парти?</div>
              <div class="col-md-7">
                <input type="radio" name="bachelorPartyRsvp" value="Y" <?php if ($userRow['bachelorPartyRsvp'] == 'Y'): ?> checked <?php endif; ?>/> Yes &nbsp; &nbsp;
                <input type="radio" name="bachelorPartyRsvp" value="N" <?php if ($userRow['bachelorPartyRsvp'] == 'N'): ?> checked <?php endif; ?>/> No
              </div>
            </div>
          <?php endif; ?>

        </div>



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
            <div class="col-md-5">Кои вечери ще нощувате в хижата?</div>
            <div class="col-md-7">
              <input type="checkbox" name="nightsToStaySat" <?php echo (strpos($userRow['nightsToStay'], "Sat") === false) ? '' : 'checked'; ?>/> събота </br>
              <input type="checkbox" name="nightsToStaySun" <?php echo (strpos($userRow['nightsToStay'], "Sun") === false) ? '' : 'checked'; ?>/> неделя
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
          <div class="col-md-12" style="text-align: center;"><button id="rsvpSubmit">Изпращане на Oтговор</button></div>
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
<!--             <p>ТУК ПИШЕШ ТИ!!!

             </p> -->
            <blockquote>
            Наси е най-душевно красивият човек с който съм се запознавал.
            </br>
            Не е имало друг който да ме задължи да спра какво правя и да въвря сума време за да ми покаже "нешо важно" и като стигнем там да ми посочи страхотна луна или залез с пълна усмивка на лице.
            </br>
            Тя кара тези около нея да не забравят за важните и красивите неща в живота.
              <small>Марин</small>
            </blockquote>
          </div>
          <!-- break -->

          <div class="col-md-4">
            <div class="about-img-container" style="background-image: url(img/13.jpg); background-position: -15px 3px;"></div>
            <img src="img/bottom.png" class="about-img img-responsive">
          </div>
          <!-- break -->

          <div class="col-md-4">
            <h2>Марин</h2>
            <!-- <p>

            </p> -->
            <blockquote>
            "Ако има някое място на света, където няма нито един слънчев ден, аз бих го изпратила там, за да стопли сърцата на хората и да огрява деня им с усмивката си. Както огрява моя."
            </br>
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
  <section id="ceremony" style="background: url(img/1.jpg);" class="adventure">
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
          <h2 class="adventure">Фото Галерия</h2>
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
          <h2>Нашата История</h2>
          <ul class="content">
            <li>
              <h3 class="content-avatar avatar-top">
                <div class="img-avatar" style="background-image: url(img/18.jpg); background-position: 0px -28px;"></div>
              </h3>
              <ul>
                <!-- begin:content-text -->
                <li class="content-item content-photo">
                  <h3>Запознанство:</h3>
                  <img src="img/1.jpg" alt="">
                  <time datetime=""><i class="fa fa-calendar"></i> 12 юли 2012 пред хижа Рай</time>
                </li>
                <!-- end:content-text -->

                <!-- begin:content-photo -->
                <li class="content-item content-text">
                  <h3>Как се стигна до там:</h3>
                  <p class="caption">Всяко лято, когато Tой се прибира в България организира поход с приятели до хижа Рай (където са се запознали родителите му!). Тя, никога дотогава не е ходила там, но две седмици по-рано заедно с нейн познат вземат на стоп Алекс, приятел на Марин, който ги кани да отидат на планина заедно. Тя решава да отиде и се качва сама на нощния влак от Варна за Калофер в 3 сутринта. След изкачването се запознават пред хижата.</p>
                  <time datetime=""><i class="fa fa-calendar"></i> 12 юли 2012</time>
                </li>
                <!-- end:content-photo -->


                <!-- begin:content-text -->
                <li class="content-item content-text">
                  <h3>Първа НЕсреща:</h3>
                  <img src="img/16.jpg" alt="">
                  <time datetime=""><i class="fa fa-calendar"></i> 31 юли 2012, Варна</time>
                </li>
                <!-- end:content-text -->

                <!-- begin:content-text -->
                <li class="content-item content-text">
                  <h3>Първа среща:</h3>
                  <img src="img/17.jpg" alt="">
                  <time datetime=""><i class="fa fa-calendar"></i> 2 август 2012, Варна</time>
                </li>
                <!-- end:content-text -->


                <!-- begin:content-text -->
                <li class="content-item content-text">
                  <h3>Техният пръв танц:</h3>
                  <div class="text">Elvis Presley - Can’t help falling in love with you</div>
                  <time datetime=""><i class="fa fa-calendar"></i> 15 август 2013, Прага</time>
                </li>
                <!-- end:content-text -->




                <!-- begin:content-chat -->
                <li class="content-item content-chat">
                  <h3>Предложението:</h3>
                  <p class="text chat even">Глория: “Наси не искаш ли с Марин да се ожените?”</p>
                  <div class="text">Тя казва не. Той стои до нея с пръстен в джоба, изражението на лицето му - безценно. Обяснението й - той е с 4 години по-млад, не иска да го притиска да прави нещо, за което не е готов.</div>
                  <img src="img/11.jpg" alt="">
                  <time datetime=""><i class="fa fa-calendar"></i> 16-ти февруари 2013, Калифорния</time>
                </li>
                <!-- end:content-chat -->

                <!-- begin:content-chat -->
                <li class="content-item content-chat">
                  <h3>Решение къде ще бъде сватбата:</h3>
                  <div class="text">Същия ден, лежейки в хамак между вековните калифорнийски дървета, решават че сватбата ще бъде на същото място където са се запознали, на същият ден в годината.</div>
                  <img src="img/19.jpg" alt="">
                  <time datetime=""><i class="fa fa-calendar"></i> 16-ти февруари 2013, Калифорния</time>
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

    <script src="http://cufon.shoqolate.com/js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/adventure.cufonfonts.js" type="text/javascript"></script>
    <script type="text/javascript">
    $( document ).ready(function() {
      $('#rsvp-form').find('h2').addClass('adventure');
      $('#rsvp-form').find('h1').addClass('adventure');
      $('#rsvp-form').find('h3').addClass('adventure');


      $('#story').find('h2').addClass('adventure');
      $('#story').find('h1').addClass('adventure');
      $('#story').find('h3').addClass('adventure');

      $('#story').find('h3').addClass('adventure');

      $('#copyright').find('h2').addClass('adventure');

      $('#about').find('h2').addClass('adventure');

      Cufon.replace('.adventure', { fontFamily: 'Adventure', hover: true }); 
    });
    </script>

  </body>
</html>
