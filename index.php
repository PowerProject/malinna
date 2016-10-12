<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="lib/fancybox/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
    <script src="lib/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
    <link rel="stylesheet" href="lib/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link href="/css/all.css" media="screen, projection" rel="stylesheet" type="text/css" />
    


    <title>Маникюр, наращивание ногтей, дизайн ногтей жк. София | Malinna</title>
</head>
<body class="body">
    <div class="page-loader">
        <div class="content">
            <h1 class="heading-large">Malinna</h1>
            <p>Авторская студия ногтевого сервиса </p>
            <img src="img/raspberries.png" alt="raspberry-clipart">
        </div>
    </div>
    <script>
            var settings = function () {
        var wh=$(window).height();
        $('.page-loader').css({'height': wh + 'px'});
        $('.left-side').css({'height': wh + 'px'});
        $('.item').css({'height': wh + 'px'});
    };
settings();
    </script>
    <header class="clearfix padding" id="main">
        <div class="col-md-6 hidden-sm hidden-xs up padding"></div>
        <div class="col-md-6 col-sm-12 col-xs-12 padding">
            <div class="text-center navMenu">
                <div class="icon-menu">
                    <span class="divide"></span>
                    <span class="divide"></span>
                    <span class="divide"></span>
                </div>
                <div class="overlay-sidebar" data-dismiss="overlay-sidebar"></div>
                <ul class="sidebar">
                    <li><a  class="page active" href="#page">Главная</a></li>
                    <li><a class="price" href="#price">Прайс</a></li>
                    <li><a class="portfolio" href="#portfolio">Портфолио</a></li>
                    <li><a class="contacts" href="#contacts">Контакты</a></li>
                </ul>
            </div>
        </div>

    </header>
    <div class="page-container div" id="page">
        <div class="left-side col-md-6 padding clearfix">
                 <div class="overlay-panel">
                <img src="img/malinna_logo.png" alt="logo" class=" col-lg-4 col-md-5 col-sm-4 col-xs-5 img-responsive">
                <!--<h3>Авторская студия <br> ногтевого сервиса</h3>-->
            </div>
            <div class="slideshow">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="img/inna1_1.jpg" alt="inna1">
                        </div>
                        <div class="item">
                            <img src="img/inna2_2.jpg" alt="inna2">
                        </div>
                        <div class="item">
                            <img src="img/inna3_3.jpg" alt="inna3">
                        </div>
                        <div class="item">
                            <img src="img/inna4_4.jpg" alt="inna4">
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- -------------- Right Side ------------------>
        <div class="col-md-6 padding clearfix right-side">
            <section class="full-height div">

                <div class="head">
                    <div class="content head-content">
                        <h1 class="heading-large">Мал<span>и</span>нна</h1>
                        <p id="head-description">
							Ваш маникюр со вкусом!
                        </p>
                        <img src="img/raspberries.png" alt="raspberry-clipart">
                        <div class="text-center enroll">
                            <a data-toggle="modal" data-target="#myModal1" id="enroll">Заказать услугу</a>
                        </div>
                    </div>
                    <div class="text-center scroll  hidden-xs hidden-sm">
                        <img src="img/scroll2.gif"  alt="scroll" class="gif">
                        <p> Scroll Down</p>
                    </div>
                </div>
            </section>

            <!-- ------------------Price---------------->
            <section class="price clearfix div" id="price">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h2 class="text-center">Price</h2>
                    <hr>
                    <div class="rowPrices clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-12 padding column">
                            <h3>Маникюр гигиенический женский</h3>
                            <p>Обрезной маникюр с ванночкой и шлифовкой ногтей</p>
                            <p class="cost"> 70 грн</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 padding column">
                            <h3>Маникюр гигиенический мужской</h3>
                            <p>Обрезной маникюр с ванночкой и шлифовкой ногтей</p>
                            <p class="cost"> 100 грн</p>
                        </div>
                    </div>
                    <div class="rowPrices clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-12 padding column" id="item-3">
                            <h3>Маникюр европейский</h3>
                            <p>Необрезной маникюр с ванночкой и шлифовкой ногтей</p>
                            <p class="cost"> 80 грн</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 padding column">
                            <h3>Покрытие ногтей гель-лак</h3>
                            <p>Подготовка ногтевой пластины к нанесению гель-лака и покрытие</p>
                            <p class="cost"> 120 грн</p>
                        </div>
                    </div>
                    <div class="rowPrices clearfix">
                        <div class="col-md-6  col-sm-6 col-xs-12 padding column">
                            <h3>Покрытие ногтей гель-лак френч, лунный</h3>
                            <p>Подготовка ногтевой пластины к нанесению гель-лака и покрытие в стиле френч</p>
                            <p class="cost"> 140 грн</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 padding column" id="item-6">
                            <h3>Снятие гель-лака</h3>
                            <p>Снятие покрытия с ногтевой пластины посредством профессиональной жидкости</p>
                            <p class="cost"> 20 грн</p>
                        </div>
                    </div>
                    <div class="rowPrices clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-12 padding column"  >
                            <h3>Дизайн ногтей (1 ноготь)</h3>
                            <p>Дизайн, роспись и декорирование ногтей</p>
                            <p class="cost"> 5-20 грн</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 padding column">
                            <h3>Ремонт ногтей (1 ноготь)</h3>
                            <p>Удаление трещин, надломов и сколов ногтя</p>
                            <p class="cost"> 20 грн</p>
                        </div>
                    </div>
                    <div class="rowPrices clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-12 padding column" id="item-9">
                            <h3>Наращивание ногтей</h3>
                            <p>Наращивание ногтей на форму (гелевая основа)</p>
                            <p class="cost"> от 300 грн</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 padding column">
                            <h3>Снятие нарощенных ногтей</h3>
                            <p>Удаление геля с натуральных ногтей</p>
                            <p class="cost"> от 80 грн</p>
                        </div>
                    </div>
                    <div class="rowPrices clearfix">
                        <div class="col-md-6  col-sm-6 col-xs-12 padding column">
                            <h3>Коррекция нарощенных ногтей</h3>
                            <p>Коррекция нарощенных ногтей (гелевая система)</p>
                            <p class="cost"> от 200 грн</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 padding column">
                            <h3>Spa-процедура для рук</h3>
                            <p>Spa-уход включает: пиллинг, маску и крем для рук</p>
                            <p class="cost"> 80 грн</p>
                        </div>
                    </div>
                    <div class="rowPrices clearfix">
                        <div class="col-md-6  col-sm-6 col-xs-12 padding column">
                            <h3>Педикюр гигиенический женский</h3>
                            <p>Обрезной педикюр с ванночкой и полированием подошвы</p>
                            <p class="cost"> 120 грн</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 padding column">
                            <h3>Педикюр гигиенический мужской</h3>
                            <p>Обрезной педикюр с ванночкой и полированием подошвы</p>
                            <p class="cost"> 140 грн</p>
                        </div>
                    </div>
                    <div class="text-center enroll">
                        <a data-toggle="modal" data-target="#myModal1">Заказать услугу</a>
                    </div>
                <div class="col-md-1"></div>
               </div>
            </section>

            <!-- --------------------Portfolio--------------->
            <section class="portfolio clearfix div" id="portfolio">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h2 class="text-center">Portfolio</h2>
                    <hr>
                    <div class="text-center">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#image-category" data-toggle="tab">Рисунок</a></li>
                            <li><a href="#slider-design" data-toggle="tab">Slider-design</a></li>
                            <li><a href="#simple" data-toggle="tab">Simple</a></li>
                            <li><a href="#swarovski" data-toggle="tab">Swarovski</a></li>
                            <li><a href="#different" data-toggle="tab">Разное</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content clearfix">
                             <!------------ Рисунок ---------->
                                <div class="tab-pane  in active" id="image-category">
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="overflow">
                                            <a class="fancybox" rel="group" href="img/portfolio/portfolio13.jpg"><img
                                                    src="img/portfolio/small/portfolio13.jpg" alt="portfolio21"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                         <div class="overflow">
                                             <a class="fancybox" rel="group" href="img/portfolio/portfolio17.jpg"><img
                                                     src="img/portfolio/small/portfolio17.jpg" alt="portfolio17"></a>
                                         </div>
                                     </div>
                                     <div class="col-md-4 col-sm-4 col-xs-6">
                                         <div class="overflow">
                                             <a class="fancybox" rel="group" href="img/portfolio/portfolio18.jpg"><img
                                                     src="img/portfolio/small/portfolio18.jpg" alt="portfolio18"></a>
                                         </div>
                                     </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                         <div class="overflow">
                                             <a class="fancybox" rel="group" href="img/portfolio/portfolio34.jpg"><img
                                                     src="img/portfolio/small/portfolio34.jpg" alt="portfolio34"></a>
                                         </div>
                                     </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                         <div class="overflow">
                                             <a class="fancybox" rel="group" href="img/portfolio/portfolio38.jpg"><img
                                                     src="img/portfolio/small/portfolio38.jpg" alt="portfolio38"></a>
                                         </div>
                                     </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                         <div class="overflow">
                                             <a class="fancybox" rel="group" href="img/portfolio/portfolio43.jpg"><img
                                                     src="img/portfolio/small/portfolio43.jpg" alt="portfolio43"></a>
                                         </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="overflow">
                                            <a class="fancybox" rel="group" href="img/portfolio/portfolio50.jpg"><img
                                                    src="img/portfolio/small/portfolio50.jpg" alt="portfolio50"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="overflow">
                                            <a class="fancybox" rel="group" href="img/portfolio/portfolio24.jpg"><img
                                                    src="img/portfolio/small/portfolio24.jpg" alt="portfolio24"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="overflow">
                                            <a class="fancybox" rel="group" href="img/portfolio/portfolio33.jpg"><img
                                                    src="img/portfolio/small/portfolio33.jpg" alt="portfolio33"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="overflow">
                                            <a class="fancybox" rel="group" href="img/portfolio/portfolio45.jpg"><img
                                                    src="img/portfolio/small/portfolio45.jpg" alt="portfolio45"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="overflow">
                                            <a class="fancybox" rel="group" href="img/portfolio/portfolio16.jpg"><img
                                                    src="img/portfolio/small/portfolio16.jpg" alt="portfolio16"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="overflow">
                                            <a class="fancybox" rel="group" href="img/portfolio/portfolio19.jpg"><img
                                                    src="img/portfolio/small/portfolio19.jpg" alt="portfolio19"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="overflow">
                                            <a class="fancybox" rel="group" href="img/portfolio/portfolio20.jpg"><img
                                                    src="img/portfolio/small/portfolio20.jpg" alt="portfolio20"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="overflow">
                                            <a class="fancybox" rel="group" href="img/portfolio/portfolio27.jpg"><img
                                                    src="img/portfolio/small/portfolio27.jpg" alt="portfolio27"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="overflow">
                                            <a class="fancybox" rel="group" href="img/portfolio/portfolio28.jpg"><img
                                                    src="img/portfolio/small/portfolio28.jpg" alt="portfolio28"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="overflow">
                                            <a class="fancybox" rel="group" href="img/portfolio/portfolio32.jpg"><img
                                                    src="img/portfolio/small/portfolio32.jpg" alt="portfolio32"></a>
                                        </div>
                                    </div>
                                </div>


                            <!----------- Simple ----------->
                            <div class="tab-pane clearfix" id="simple">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="overflow">
                                        <a class="fancybox" rel="group" href="img/portfolio/portfolio48.jpg"><img
                                                src="img/portfolio/small/portfolio48.jpg" alt="portfolio48"></a>
                                    </div>
                                </div>
                            </div>

                            <!---------- Slider-Design --------->
                            <div class="tab-pane" id="slider-design">
                               <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="overflow">
                                        <a class="fancybox" rel="group" href="img/portfolio/portfolio15.jpg"><img
                                                src="img/portfolio/small/portfolio15.jpg" alt="portfolio15"></a>
                                    </div>
                               </div>
                               <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="overflow">
                                        <a class="fancybox" rel="group" href="img/portfolio/portfolio14.jpg"><img
                                                src="img/portfolio/small/portfolio14.jpg" alt="portfolio14"></a>
                                    </div>
                                </div>
                               <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="overflow">
                                        <a class="fancybox" rel="group" href="img/portfolio/portfolio22.jpg"><img
                                                src="img/portfolio/small/portfolio22.jpg" alt="portfolio22"></a>
                                    </div>
                                </div>
                               <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="overflow">
                                        <a class="fancybox" rel="group" href="img/portfolio/portfolio31.jpg"><img
                                                src="img/portfolio/small/portfolio31.jpg" alt="portfolio31"></a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="overflow">
                                        <a class="fancybox" rel="group" href="img/portfolio/portfolio47.jpg"><img
                                                src="img/portfolio/small/portfolio47.jpg" alt="portfolio47"></a>
                                    </div>
                                </div>
                               <div class="col-md-4 col-sm-4 col-xs-6">
                                   <div class="overflow">
                                       <a class="fancybox" rel="group" href="img/portfolio/portfolio25.jpg"><img
                                               src="img/portfolio/small/portfolio25.jpg" alt="portfolio25"></a>
                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-4 col-xs-6">
                                   <div class="overflow">
                                       <a class="fancybox" rel="group" href="img/portfolio/portfolio30.jpg"><img
                                               src="img/portfolio/small/portfolio30.jpg" alt="portfolio30"></a>
                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-4 col-xs-6">
                                   <div class="overflow">
                                       <a class="fancybox" rel="group" href="img/portfolio/portfolio41.jpg"><img
                                               src="img/portfolio/small/portfolio41.jpg" alt="portfolio41"></a>
                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-4 col-xs-6">
                                   <div class="overflow">
                                       <a class="fancybox" rel="group" href="img/portfolio/portfolio46.jpg"><img
                                               src="img/portfolio/small/portfolio46.jpg" alt="portfolio46"></a>
                                   </div>
                               </div>
                            </div>

                            <!--------- Swarovski ----------->
                            <div class="tab-pane" id="swarovski">
                               <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="overflow">
                                        <a class="fancybox" rel="group" href="img/portfolio/portfolio15.jpg"><img
                                                src="img/portfolio/small/portfolio15.jpg" alt="portfolio15"></a>
                                    </div>
                                </div>
                               <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="overflow">
                                        <a class="fancybox" rel="group" href="img/portfolio/portfolio21.jpg"><img
                                                src="img/portfolio/small/portfolio21.jpg" alt="portfolio21"></a>
                                    </div>
                                </div>
                               <div class="col-md-4 col-sm-4 col-xs-6">
                                   <div class="overflow">
                                       <a class="fancybox" rel="group" href="img/portfolio/portfolio36.jpg"><img
                                               src="img/portfolio/small/portfolio36.jpg" alt="portfolio36"></a>
                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-4 col-xs-6">
                                   <div class="overflow">
                                       <a class="fancybox" rel="group" href="img/portfolio/portfolio37.jpg"><img
                                               src="img/portfolio/small/portfolio37.jpg" alt="portfolio37"></a>
                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-4 col-xs-6">
                                   <div class="overflow">
                                       <a class="fancybox" rel="group" href="img/portfolio/portfolio52.jpg"><img
                                               src="img/portfolio/small/portfolio52.jpg" alt="portfolio52"></a>
                                   </div>
                               </div>
                            </div>
                            <!-------- Разное ------------>
                            <div class="tab-pane" id="different">
                                 <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="overflow">
                                        <a class="fancybox" rel="group" href="img/portfolio/portfolio29.jpg"><img
                                                src="img/portfolio/small/portfolio29.jpg" alt="portfolio29"></a>
                                    </div>
                                  </div>
                                 <div class="col-md-4 col-sm-4 col-xs-6">
                                      <div class="overflow">
                                          <a class="fancybox" rel="group" href="img/portfolio/portfolio34.jpg"><img
                                                  src="img/portfolio/small/portfolio34.jpg" alt="portfolio34"></a>
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-4 col-xs-6">
                                      <div class="overflow">
                                          <a class="fancybox" rel="group" href="img/portfolio/portfolio39.jpg"><img
                                                  src="img/portfolio/small/portfolio39.jpg" alt="portfolio39"></a>
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-4 col-xs-6">
                                      <div class="overflow">
                                          <a class="fancybox" rel="group" href="img/portfolio/portfolio40.jpg"><img
                                                  src="img/portfolio/small/portfolio40.jpg" alt="portfolio40"></a>
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-4 col-xs-6">
                                      <div class="overflow">
                                          <a class="fancybox" rel="group" href="img/portfolio/portfolio42.jpg"><img
                                                  src="img/portfolio/small/portfolio42.jpg" alt="portfolio42"></a>
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-4 col-xs-6">
                                      <div class="overflow">
                                          <a class="fancybox" rel="group" href="img/portfolio/portfolio21.jpg"><img
                                                  src="img/portfolio/small/portfolio21.jpg" alt="portfolio21"></a>
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-4 col-xs-6">
                                     <div class="overflow">
                                         <a class="fancybox" rel="group" href="img/portfolio/portfolio51.jpg"><img
                                                     src="img/portfolio/small/portfolio51.jpg" alt="portfolio51"></a>
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-4 col-xs-6">
                                      <div class="overflow">
                                          <a class="fancybox" rel="group" href="img/portfolio/portfolio16.jpg"><img
                                                  src="img/portfolio/small/portfolio16.jpg" alt="portfolio16"></a>
                                      </div>
                                  </div>
                                 <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="overflow">
                                        <a class="fancybox" rel="group" href="img/portfolio/portfolio23.jpg"><img
                                                src="img/portfolio/small/portfolio23.jpg" alt="portfolio23"></a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="overflow">
                                        <a class="fancybox" rel="group" href="img/portfolio/portfolio26.jpg"><img
                                                src="img/portfolio/small/portfolio26.jpg" alt="portfolio26"></a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="overflow">
                                        <a class="fancybox" rel="group" href="img/portfolio/portfolio35.jpg"><img
                                                src="img/portfolio/small/portfolio35.jpg" alt="portfolio35"></a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="overflow">
                                        <a class="fancybox" rel="group" href="img/portfolio/portfolio44.jpg"><img
                                                src="img/portfolio/small/portfolio44.jpg" alt="portfolio44"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </section>

            <!-- -----------Contacts ----------->
            <section class="contacts clearfix div" id="contacts">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h2>Contacts</h2>
                    <hr>
                    <div id="map"></div>
                     <div class="text-center enroll hidden-lg hidden-md">
                         <p><a class="fancy" rel="group2" href="javascript:;">
                         Подробнее</a></p>
                      </div>
                    <div class="rowContacts clearfix">
                        <div class="col-md-6 adress text-center">
                            <p class="title-contact">Наш адрес:</p>
                            <p> ЖК "София" <br> ул. Л. Украинки, 6 <br> (вход с ул. И. Франка)</p>
                        </div>
                        <div class="col-md-6 phone text-center">
                            <p class="title-contact"> Наши контакты:</p>
                            <p>тел. 096-323-50-00</p>
                            <a href="https://vk.com/studio_malinna"><div id="sprite"></div></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </section>

            <!-- ---------- Footer ---------------->
            <footer class="clearfix">
                <div class="col-md-3 col-sm-3"></div>
                <div class="col-md-2 col-sm-2 col-xs-4">
                    <ul>
                        <li><a href=""> Главная</a></li>
                        <li><a href=""> Портфолио</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-4 text-center">
                    <img src="img/raspberries.png" alt="raspberries">
                </div>
                <div class="col-md-2 col-sm-2 col-xs-4">
                    <ul>
                        <li><a href=""> Прайс</a></li>
                        <li><a href=""> Контакты</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3"></div>
            </footer>

        </div>
    </div>



    <!-- ========== MODAL =========== -->
    <div id="myModal1" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="img/close.png" alt="close"></button>
                <h4 class="modal-title">Заказать услугу</h4>
                <form role="form" id="question-form" method="post" action="send.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name"  required placeholder="Ваше имя">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" name="phone" required placeholder="Ваш телефон">
                    </div>
                    <div class="rowCheckbox clearfix">
                        <div class="col-md-6 padding">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="manicure[]" value="Маникюр женский"><span></span> Маникюр женский <span class="price-modal"> 70 грн</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="manicure[]" value="Маникюр европейский"><span></span> Маникюр европейский <span class="price-modal"> 80 грн</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="manicure[]" value="Гель-лак, френч, лунный"><span></span> Гель-лак, френч, лунный <span class="price-modal"> 140 грн</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="manicure[]" value="Дизайн ногтей(1шт)"><span></span> Дизайн ногтей(1шт) <span class="price-modal"> 5-20 грн</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="manicure[]" value="Ремонт ногтя(1шт)"><span></span> Ремонт ногтя(1шт) <span class="price-modal"> 20 грн</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="manicure[]" value="Снятие нарощенных"><span></span> Снятие нарощенных <span class="price-modal"> от 80 грн</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="manicure[]" value="Spa-процедура"><span></span> Spa-процедура <span class="price-modal"> 80 грн</span>
                                </label>
                            </div>

                        </div>
                        <div class="col-md-6 padding">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="manicure[]" value="Маникюр мужской"><span></span> Маникюр мужской <span class="price-modal"> 100 грн</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="manicure[]" value="Покрытие гель-лак"><span></span> Покрытие гель-лак <span class="price-modal"> 120 грн</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="manicure[]" value="Снятие гель-лака"><span></span> Снятие гель-лака <span class="price-modal"> 20 грн</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="manicure[]" value="Наращивание ногтей"><span></span> Наращивание ногтей <span class="price-modal"> от 300 грн</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="manicure[]" value="Коррекция нарощенных"><span></span> Коррекция нарощенных <span class="price-modal"> от 200 грн</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="manicure[]" value="Педикюр гигиенический женский"><span></span> Педикюр  женский <span class="price-modal"> 120 грн</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="manicure[]" value="Педикюр гигиенический мужской"><span></span> Педикюр мужской <span class="price-modal"> 140 грн</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <textarea class="form-control" rows="3" name="date" placeholder="Дата и время"></textarea>
                    <button type="submit" class="btn btn-default text-center">Записаться</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/common.js" type="text/javascript"></script>
    <!-- Google Maps-->
    <script>
        function initMap() {
            var myLatLng = {lat: 50.400872, lng: 30.375282};

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 17,
                draggable: $(window).width() > 640,
                center: myLatLng,
                scrollwheel: false,
            });

            var contentString = '<div id="content">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<h1 id="firstHeading" class="firstHeading">Malinna</h1>'+
                    '<div id="bodyContent">'+
                    '<p> ЖК "София"<br> ' +
                    'ул. Л. Украинки,6' +
                    '<p><a class="fancybox fancybox1" rel="group1" href="img/map2.jpg"><img src="img/map2-small.jpg" alt="map2"></a>'+
                    '<a class="fancybox fancybox1" rel="group1" href="img/map3.jpg"><img src="img/map3-small.jpg" alt="map3"></a>'+
                    '<a class="fancybox fancybox1" rel="group1" href="img/map4.jpg"><img src="img/map4-small.jpg" alt="map4"></a></p>'+
                    '</div>'+
                    '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            var image = 'img/raspberries-small.png';

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Malinna',
                icon: image
            });
            var ww=$(window).width();
            if (ww>991) {
               infowindow.open(map, marker);
               marker.addListener('click', function() {
                  infowindow.open(map, marker);
                });
            } else {
                infowindow.close();
            }





        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdXm6GX3_UccW4Fgq2SgvaHg4eHWJcbw0&callback=initMap">
    </script>
</body>
</html>