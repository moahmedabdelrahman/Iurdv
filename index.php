<?php $titel = 'الإتحاد الدولي لإعادة الأعمار و التنمية'; ?>

<?php include 'include/header.php'; ?>
<?php include 'include/navebar.php'; ?>
<?php include 'include/Slider.php'; ?>
<script type="text/javascript">
    window.jssor_1_slider_init = function () {

        var jssor_1_options = {
            $AutoPlay: 1,
            $Idle: 0,
            $SlideDuration: 1000,
            $SlideEasing: $Jease$.$Linear,
            $PauseOnHover: 4,
            $SlideWidth: 140,
            $Align: 0
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 980;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };
</script>
<style>
    /*jssor slider loading skin spin css*/
    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-009-spin {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }
</style>

<main id="main">
    <div id="about" class="about-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="section-headline text-center">
                        <div class="row">
                            <div class="col-lg 4">
                                <br>
                                <h2 class="Kufi" style="font-weight:100;margin-bottom: 15px;">الإتحاد الدولي لإعادة
                                    الإعمار والتنميه</h2>

                                <h3 class="Kufi" style="font-weight:100">منظمة إقتصادية دولية غير حكومية</h3>
                                <h3 class="Kufi" style="font-weight:100">غير هادفة للربح</h3>
                                <h3 class="Kufi" style="font-weight:100">لندن 2020</h3>
                            </div>
                            <div class="col-lg 4">
                                <div class="logo-section">
                                    <a href="">
                                        <img src="assets/img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg 4">
                                <div style="text-align: left">
                                    <h2 class="Kufi" style="font-size: 35px;margin-bottom: 15px;">International Union
                                        for Reconstruction and Development</h2>
                                </div>
                                <div>
                                    <h3 class="Kufi" style="font-weight:100;">Non Governmental Organization</h3>
                                </div>

                            </div>
                        </div>


                        <br>


                        <div>


                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-8">
                        <div class="well-middle" style="text-align: right;padding-right: 10px;">
                            <div class="single-well">
                                <div style="width: 100%;height: 33px;background-color: #a1353c"></div>
                                <div style="width: 100%;height: 20px;background-color: #77a379"></div>
                                <div style="width: 100%;height: 20px;background-color: #e5cba6"></div>
                                <a href="#" style="margin-top: 10px;text-align: center;margin-bottom: 15px;">
                                    <h3 class="Kufi">مرحبا بكم في الموقع الرسمي للإتحاد الدولي لإعادة الإعمار و
                                        التنمية </h3>

                                </a>
                                <div style="width: 100%;height: 20px;background-color: #e5cba6"></div>
                                <p>
                                    بدأت فكرة الأتحاد منذ عام تقريبا بين عدد من الأصدقاء يمثلون اتجاهات مختلفه منهم
                                    وزراء ومحافظين سابقين وقيادات اعلاميه وسفراء بالخارحيه ومستشارين واعضاء هيئات قضائيه
                                    ودبلوماسيه وقيادات بنوك ورجال أعمال ومستثمرين وخبراء المال والأعمال والاقتصاد
                                    والقانون. ومستشارين سابقين في مؤسسات اقتصاديه دوليه..
                                </p>
                                <p>
                                    كان الهدف من الفكره هو تأسيس كيان دولي غير حكومي مرتبط بالامم المتحدة والمنظمات
                                    والهيئات والمؤسسات الدوليه المهتمه بتقديم يد العون والمساعده للدول المتضرره من
                                    الحروب والكوارث والدول الناميه والفقيره ومساعدة اللاجئين وتقديم الدعم والمعونات
                                    للأفراد الأكثر احتياجا في مناطق متفرقة من العالم...
                                </p>
                                <div>
                                    <a href="about.php" class="btn btn-primary">للمزيد أضغط هنا</a>
                                    <i class="fa fa-hand-o-up" style="font-size: 35px"></i>
                                </div>
                                <br><br>


                                <div style="width: 100%;height: 15px;background-color: #a1353c"></div>
                                <div>
                                    <p style="font-size: 25px;
                                            margin-top: 10px;
                                            border: 3px solid #7e5050;
                                            padding: 8px;
                                            padding-top: 8px;
                                            padding-right: 8px;
                                            padding-bottom: 8px;
                                            padding-left: 8px;
                                            text-align: center;
                                            border-radius: 10px;">تصفح موقعنا بالغات الأتية </p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 ">
                                        <button class="langdiv" onclick="setlang('ar')">Arabic</button>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <button class="langdiv" onclick="setlang('en')">English</button>
                                    </div>
                                    <div class="col-lg-3">
                                        <button class="langdiv" onclick="setlang('fr')">French</button>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <button class="langdiv" onclick="setlang('gn')">German</button>
                                    </div>
                                    <div class="col-lg-3">
                                        <button class="langdiv" onclick="setlang('it')">Italian</button>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <button class="langdiv" onclick="setlang('ch')">Chinese</button>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <button class="langdiv" onclick="setlang('ja')">Japanese</button>
                                    </div>
                                    <!--          <div class="col-lg-3 ">
                                                  <button class="langdiv" onclick="setlang('sp')">Spanish </button>
                                              </div>-->
                                    <div class="col-lg-3 ">
                                        <button class="langdiv" onclick="setlang('ru')">Russian</button>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- #region Jssor Slider Begin -->
                        <!-- Generator: Jssor Slider Composer -->
                        <!-- Source: https://www.jssor.com/demos/carousel-slider.slider/=edit -->
                        <script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
                        <script type="text/javascript">
                            window.jssor_1_slider_init = function () {

                                var jssor_1_options = {
                                    $AutoPlay: 1,
                                    $AutoPlaySteps: 3, // no of image to move evry time
                                    $SlideDuration: 160,
                                    $SlideWidth: 200,
                                    $SlideSpacing: 3,
                                    $ArrowNavigatorOptions: {
                                        $Class: $JssorArrowNavigator$,
                                        $Steps: 3
                                    },
                                    $BulletNavigatorOptions: {
                                        $Class: $JssorBulletNavigator$,
                                        $SpacingX: 16,
                                        $SpacingY: 16
                                    }
                                };

                                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                                /*#region responsive code begin*/

                                var MAX_WIDTH = 1100;

                                function ScaleSlider() {
                                    var containerElement = jssor_1_slider.$Elmt.parentNode;
                                    var containerWidth = containerElement.clientWidth;

                                    if (containerWidth) {

                                        var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                                        jssor_1_slider.$ScaleWidth(expectedWidth);
                                    }
                                    else {
                                        window.setTimeout(ScaleSlider, 30);
                                    }
                                }

                                ScaleSlider();

                                $Jssor$.$AddEvent(window, "load", ScaleSlider);
                                $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                                $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                                /*#endregion responsive code end*/
                            };
                        </script>
                        <style>
                            /*jssor slider loading skin spin css*/
                            .jssorl-009-spin img {
                                animation-name: jssorl-009-spin;
                                animation-duration: 1.6s;
                                animation-iteration-count: infinite;
                                animation-timing-function: linear;
                            }

                            @keyframes jssorl-009-spin {
                                from {
                                    transform: rotate(0deg);
                                }
                                to {
                                    transform: rotate(360deg);
                                }
                            }

                            /*jssor slider bullet skin 057 css*/
                            .jssorb057 .i {
                                position: absolute;
                                cursor: pointer;
                            }

                            .jssorb057 .i .b {
                                fill: none;
                                stroke: #fff;
                                stroke-width: 2000;
                                stroke-miterlimit: 10;
                                stroke-opacity: 0.4;
                            }

                            .jssorb057 .i:hover .b {
                                stroke-opacity: .7;
                            }

                            .jssorb057 .iav .b {
                                stroke-opacity: 1;
                            }

                            .jssorb057 .i.idn {
                                opacity: .3;
                            }

                            /*jssor slider arrow skin 073 css*/
                            .jssora073 {
                                display: block;
                                position: absolute;
                                cursor: pointer;
                            }

                            .jssora073 .a {
                                fill: #ddd;
                                fill-opacity: .7;
                                stroke: #000;
                                stroke-width: 160;
                                stroke-miterlimit: 10;
                                stroke-opacity: .7;
                            }

                            .jssora073:hover {
                                opacity: .8;
                            }

                            .jssora073.jssora073dn {
                                opacity: .4;
                            }

                            .jssora073.jssora073ds {
                                opacity: .3;
                                pointer-events: none;
                            }
                        </style>
                        <div class="logincontainer">
                            <div class="d-sm-none d-md-block">
                                <div id="jssor_1"
                                     style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:200px;overflow:hidden;visibility:hidden;">


                                    <div data-u="slides"
                                         style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:200px;overflow:hidden;">
                                        <div>
                                            <a href="https://www.facebook.com/ZazioEgypt" target="_blank">
                                                <img data-u="image" src="assets/img/ads/main.jpg" alt="avertising"/>
                                            </a>
                                        </div>

                                        <div>
                                            <a href="https://www.cibeg.com/Arabic/" target="_blank">
                                                <img data-u="image" src="assets/img/ads/cib.jpg"/>
                                            </a>
                                        </div>

                                        <div>
                                            <a href="https://www.nbe.com.eg/NBE/E/#/EN/Home" target="_blank">
                                                <img data-u="image" src="assets/img/ads/ahlybank.png"/>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="/advertise">
                                                <img data-u="image" src="assets/img/ads/ads_4.jpeg"/>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="https://www.banquemisr.com/ar" target="_blank">
                                                <img data-u="image" src="assets/img/ads/bankmisr.jpg"/>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="/advertise">
                                                <img data-u="image" src="assets/img/ads/ads_1.jpeg"/>
                                            </a>
                                        </div>

                                        <div>
                                            <a href="/advertise">
                                                <img data-u="image" src="assets/img/ads/ads_3.jpeg"/>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="/advertise">
                                                <img data-u="image" src="assets/img/ads/ads_4.jpeg"/>
                                            </a>
                                        </div>

                                        <div>
                                            <a href="/advertise">
                                                <img data-u="image" src="assets/img/avertising/1.jpg"/>
                                            </a>
                                        </div>

                                    </div>


                                    <!-- Arrow Navigator -->
                                    <div data-u="arrowleft" class="jssora073"
                                         style="width:50px;height:50px;top:0px;left:-10px;" data-autocenter="2"
                                         data-scale="0.75" data-scale-left="0.75">
                                        <svg viewbox="0 0 16000 16000"
                                             style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                            <path class="a"
                                                  d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
                                        </svg>
                                    </div>
                                    <div data-u="arrowright" class="jssora073"
                                         style="width:50px;height:50px;top:0px;right:0px;" data-autocenter="2"
                                         data-scale="0.75" data-scale-right="0.75">
                                        <svg viewbox="0 0 16000 16000"
                                             style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                            <path class="a"
                                                  d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            jssor_1_slider_init();
                        </script>

                    </div>
                    <div class="col-lg-4 col-md-4" style="text-align: center;">
                        <iframe src="https://akhbarak.net/widgetgen/height/490/width/305/theme/default" frameborder="0"
                                scrolling="no" width="305" height="490"></iframe>

                        <div style="height: 300px;margin:auto;">

                            <a href="https://www.facebook.com/ZazioEgypt/posts/157829866047007" target="_blank"><img
                                        src="assets/img/ads/main.jpg" alt="avertising" class="avertising"></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="">
                            <div style="background-color: #f8f9fa;
                                    text-align: center;
                                    border-radius: 10px;
                                    border-top: 10px solid #e03a09;
                                    margin-bottom: 20px;
                                    margin-top:20px;">
                                <p style="font-size: 30px;
                                    padding-top: 15px;
                                    padding-bottom: 40px;
                                    line-height: 1.2;
                                    font-family: 'Aref Ruqaa';">
                                    صفحات الموقع</p>
                            </div>

                            <div class=" logincontainer ">
                                <div class="row">

                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="polaroid">
                                                    <a href="highteam"><img src="assets/img/hightteam.png"
                                                                            class="imglogo"></a>
                                                </div>
                                            </div>
                                            <div class=" polaroid card-footer ">
                                                <h4> مجلس الإدارة</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class=" card">
                                            <div class="card-body">
                                                <div class="polaroid">
                                                    <a href="general "><img src="assets/img/about-Us.jpg"
                                                                            class="imglogo"></a>
                                                </div>
                                            </div>
                                            <div class="polaroid card-footer ">
                                                <h4>الأمانة العامة</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-sm-6 ">
                                        <div class=" card">
                                            <div class="card-body">
                                                <div class="polaroid">
                                                    <a href="advisory"><img src="assets/img/services.jpg"
                                                                            class="imglogo"></a>
                                                </div>
                                            </div>
                                            <div class="polaroid card-footer ">
                                                <h4>المجلس الإستشاري </h4>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class=" card">
                                            <div class="card-body">
                                                <div class="polaroid">
                                                    <a href="honorary"><img src="assets/img/moard.png" class="imglogo"></a>
                                                </div>
                                            </div>
                                            <div class=" polaroid card-footer wow fadeInUp">
                                                <h4>الرئاسة الشرفية</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class=" card">
                                            <div class="card-body">
                                                <div class="polaroid">
                                                    <a href="Staff"><img src="assets/img/branches.jpg" class="imglogo"></a>
                                                </div>
                                            </div>
                                            <div class="polaroid card-footer ">
                                                <h4>فريق العمل</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInDown">
                                        <div class=" card">
                                            <div class="card-body">
                                                <div class="polaroid">
                                                    <a href="legan"><img src="assets/img/branches2.jpg" class="imglogo"></a>
                                                </div>
                                            </div>
                                            <div class="polaroid card-footer ">
                                                <h4>لجان الإتحاد</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class=" card">
                                            <div class="card-body">
                                                <div class="polaroid">
                                                    <a href="services"><img src="assets/img/project.jpg"
                                                                            class="imglogo"></a>
                                                </div>
                                            </div>
                                            <div class=" polaroid card-footer ">
                                                <h4>خدمات الأعضاء</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class=" card">
                                            <div class="card-body">
                                                <div class="polaroid">
                                                    <a href="Library"><img src="assets/img/book.png"
                                                                           class="imglogo"></a>
                                                </div>
                                            </div>
                                            <div class="polaroid card-footer ">
                                                <h4>مكتبة الإتحاد</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class=" card">
                                            <div class="card-body">
                                                <div class="polaroid">
                                                    <a href="projects"><img src="assets/img/projects.jpg"
                                                                            class="imglogo"></a>
                                                </div>
                                            </div>
                                            <div class="polaroid card-footer ">
                                                <h4>أفكار ومشروعات </h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class=" card">
                                            <div class="card-body">
                                                <div class="polaroid">
                                                    <a href="activities"><img src="assets/img/mob.png" class="imglogo"></a>
                                                </div>
                                            </div>
                                            <div class="polaroid card-footer ">
                                                <h4>أخبار وأنشطة الإتحاد </h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class=" card">
                                            <div class="card-body">
                                                <div class="polaroid">
                                                    <a href="conferences"><img src="assets/img/conference.png"
                                                                               class="imglogo"></a>
                                                </div>
                                            </div>
                                            <div class="polaroid card-footer ">
                                                <h4>المؤتمرات والفاعليات</h4>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- <div class="col-lg-3 col-md-4 col-sm-6">
                                         <div class=" card">
                                             <div class="card-body">
                                                 <div class="polaroid">
                                                     <a href="photos"><img src="assets/img/image.png"  class="imglogo" ></a>
                                                 </div>
                                             </div>
                                             <div class="polaroid card-footer ">
                                                 <h4>صور وفديوهات</h4>
                                             </div>
                                         </div>
                                     </div>
                         -->


                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class=" card">
                                            <div class="card-body">
                                                <div class="polaroid">
                                                    <a href="documents"><img src="assets/img/documents.jpg"
                                                                             class="imglogo"></a>
                                                </div>
                                            </div>
                                            <div class="polaroid card-footer ">
                                                <h4>وثائق ومستندات</h4>
                                            </div>
                                        </div>
                                    </div>


                                    <!--<div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class=" card">
                                            <div class="card-body">
                                                <div class="polaroid">
                                                    <a href="news"><img src="assets/img/megla.jpg"  class="imglogo" ></a>
                                                </div>
                                            </div>
                                            <div class="polaroid card-footer ">
                                                <h4>مجلة الإتحاد</h4>
                                            </div>
                                        </div>
                                    </div>
                        -->
                                    <!--
                                                <div class="col-lg-3 col-md-4 col-sm-6">
                                                    <div class=" card">
                                                        <div class="card-body">
                                                            <div class="polaroid">
                                                                <a href="branches"><img src="assets/img/mkateb.jpg"  class="imglogo" ></a>
                                                            </div>
                                                        </div>
                                                        <div class="polaroid card-footer ">
                                                            <h4>مكاتب الإتحاد حول العالم</h4>
                                                        </div>
                                                    </div>
                                                </div>-->

                                    <div class="col-lg-3 col-md-4  col-sm-6">
                                        <div class=" card">
                                            <div class="card-body">
                                                <div class="polaroid">
                                                    <a href="conatact"><img src="assets/img/join-us.png"
                                                                            class="imglogo"></a>
                                                </div>
                                            </div>
                                            <div class="polaroid card-footer ">
                                                <h4>تواصل معنا</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>


    <!--   advertisement
    <div class="container">
      <div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="ads-div">
                <img src="assets/img/ads/ads_1.jpeg" class="ads-img">
            </div>

        </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="ads-div">
                <img src="assets/img/ads/ads_2.jpeg" class="ads-img">
            </div>

        </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="ads-div">
                <img src="assets/img/ads/ads_3.jpeg" class="ads-img">
            </div>

        </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="ads-div">
                <img src="assets/img/ads/ads_4.jpeg" class="ads-img">
            </div>

        </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="ads-div">
                <img src="assets/img/ads/ads_5.jpeg" class="ads-img">
            </div>

        </div>

    </div>
    </div>

    -->


</main><!-- End #main -->


<script>

</script>

<?php include 'include/footer.php' ?>
<script type="text/javascript">jssor_1_slider_init();
</script>