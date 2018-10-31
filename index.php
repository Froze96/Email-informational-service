<?php
require_once 'config.php';
require_once 'functions.php';
$events = get_events();
$events = get_json($events);

$today_event = get_today_events();   //информация о сегодняшнем событии 
$future_event = get_future_events();  //информация о завтрашнем событии 
$today_event = get_jsonDay($today_event); 
$future_event= get_jsonDay($future_event); 

?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="https://vk.com/js/api/share.js?95" charset="windows-1251"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="css/eventCalendar.css">
    <link rel="stylesheet" href="css/eventCalendar_theme_responsive.css">
     <link href="favicon1.ico" rel="icon" type="image/x-icon" /> 

    <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">

      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      <script type="text/javascript" src="//vk.com/js/api/openapi.js?153"></script>

 <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js"></script>
<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <title>sfmai-info</title>
    

</head>
<body>







<nav class="navbar navbar-expand-lg navbar-dark  sticky-top" style="background: #2D3D48;">
    <a href = "index.php" class = "navbar-brand">  <img src="img\mai_logo.png" width ="60"  height = "60" alt = "logo" > Ступинский филиал МАИ</a>
    <button class="navbar-toggler" type=" button" data-toggle = "collapse"  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id = "navbarSupportedContent">
         <ul class = "navbar-nav mr-auto">
            <li class="nav-item active"><a href="#" class ="nav-link">Главная </a>  </li>
            <li class="nav-item "><a href="#" class ="nav-link" data-toggle="modal" data-target="#exampleModal">Информация </a>  </li>
            <li class="nav-item "><a href="contacts.html" class ="nav-link">Контакты</a>  </li>
            <li class="nav-item "><a href="media_services.html" class ="nav-link">Медиа-ресурсы</a>  </li>
        </ul>
          <div class=" my-2 my-lg-0"              <!-- Yandex.Metrika informer -->
                <a href="https://metrika.yandex.ru/stat/?id=48928823&amp;from=informer"
                target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/48928823/3_1_FFFFFFFF_FFFFFFFF_0_pageviews"
                style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="48928823" data-lang="ru" /></a>
                <!-- /Yandex.Metrika informer -->
            </div>



    </div>
</nav>



<div class="contaner-fluid p-0" >
    

       <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" >
            <ol class="carousel-indicators">
                <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>


           <div class="carousel-inner " >

               <div class="carousel-item active"><img src="img/1.jpg" alt=""  class="d-block w-100">


                       <div class="carousel-caption slider_cap d-none d-md-block">
                        
                          <div class="slider_bg" >

                               <h1 class="slider_res">Добро пожаловать на новостной ресурс Ступинского филиала <span class="slider_span">МАИ</span></h1>
                               <p>Узнавайте свежую информацию быстро, легко и доступно! </p>
                            
                          </div> 
                             
                       </div>
               </div>
               <div class="carousel-item "><img src="img/2.jpg" alt=""  class="d-block w-100">
                       <div class="carousel-caption d-none d-md-block">
                           <div class="slider_bg" >

                                 <h2 class="slider_res">Вы  еще не подписаны на нашу новостную рассылку?</h2>
                                 <p>Можете сделать это прямо сейчас</p>                           
                                 <a class="btn btn-outline-info btn-sm" href="#mailsub" role="button">Перейти к подписке</a>
                            </div>     
                       </div>
               </div>
               <div class="carousel-item "><img src="img/3.jpg" alt=""  class="d-block w-100">
                   <div class="carousel-caption d-none d-md-block">
                           <div class="slider_bg" >

                                 <h2 class="slider_res">Мы выбираем активный и здоровый образ жизни!</h2>
                                 <p >Становись активистом уже сегодня</p>                           
                               
                            </div>     
                       </div>
               </div>


           </div>


           <a href="#carouselExampleIndicators" class="carousel-control-prev" role="button" data-slide="prev" >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
           </a>
           <a href="#carouselExampleIndicators" class="carousel-control-next" role="button" data-slide="next" >
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
           </a>
       </div>





<div class="container">
   <div class="row">
        <div class="col-md-12 text-center i_header">
            <div> <p  >Календарь событий</p> <img src="img/calendar_header.png" alt="calendar_header"></div>
        </div>
   </div>
</div>
<div class="container mt-2 blocks">

   <div class="row  " >
        <div class="col-md-6  col-xs-12  ">  <div  id="eventCalendar" >   </div> </div>

        <div class="col-md-6  col-xs-12"  >
            <h2>Будьте в курсе последних новостей, планируйте свое время заранее!<b><br> Не забудьте
            <a href="https://vk.com/share.php?url=http://sfmai-info.ml//" target="_blank">поделиться новостью ВКонтакте.</a></h2>
        </div>
    </div>
</div>







<div class="container mt-5 ">
    <div class="row  mb-2 ">
            <div class="col-md-6 mb-2">

                    <div class="card h-100">

                            <div class="card-header d-flex justify-content-between align-items-baseline"> Событие на  сегодня <span class="badge badge-primary" id="today_Date"></span> </div>

                            <div class="card-body">
                              <h5 class="card-title" id="today_Title"></h5>
                              <p class="card-text"   id="today_Descr"></p>
                              <a href=" " class="btn btn-info" id="today_Url" >Перейти к новости</a>
                             </div>

                     </div>
             </div>

          <div class="col-md-6 mb-2">
                <div class="card  h-100">

                            <div class="card-header d-flex justify-content-between align-items-baseline"> Предстоящее событие   <span class="badge badge-primary" id="f_Date"></span> </div>

                            <div class="card-body">
                              <h5 class="card-title" id="f_Title"></h5>
                              <p class="card-text"   id="f_Descr"></p>
                              <a href=" " class="btn btn-info" id="f_Url" >Перейти к новости</a>
                             </div>

                     </div>
           </div>


           
        </div>
 </div>





    <div class="container">
        <div id="mailsub" class= "row " style="height:80px;">
        </div>
    </div>








 <div id="mailcontent" class="clearfix   container justify-content-center text-center blocks  ">
    <div class="row  justify-content-center text-center ">
          <div class="col-xs-12 col-md-6 ">
                <h3 class="mail_h3" >Хотите получать новостную рассылку о предстоящих мероприятиях?</h3>
                <h1 class="mail_h1" >Подпишитесь на на наш ресурс!</h1>
                <div  class=" m-5" id="email-icon" ><img  src="img/mail_logo.png" width ="70%"  height = "auto"></div>
                <p >Просто введите свою электронную почту и Вы будете добавлены в список рассылки.</p>
                    <div  id="completeform">
                          <span  id="error" style="color:red;"></span>
                            <form    id="inviteform" name="inviteform" method="post" >
                                  <div class="form-row align-items-center justify-content-center mb-4  ">
                                        <div class="col-xs-12 m-2">
                                                <input class="form-control form-control-lg" type="email" name="email" id="email" placeholder="Введите Ваш E-mail" autocomplete="off" autocorrect="off" autocapitalize="off">

                                        </div>
                                        <div id="btnwrap"> <button class="btn btn-success btn-lg " name="sendbtn" id="sendbtn" type="button" value="Send">Подписаться</button></div>
                                  </div>
                            </form>
                    </div>
           </div>
      </div>
  </div>



</div>








     <div  class="container justify-content-center mt-5">
        <div class="row ">

             <div class="col  ">
                    <!-- VK Widget -->
                    <div id="vk_groups"></div>
                    <script  type="text/javascript">
                    VK.Widgets.Group("vk_groups", {mode: 4, wide: 1,width:"auto", height: "720 px"}, 59558767);
                    </script>
             </div>

        </div>
    </div>



    <div class=" container-fluid mt-5 icons">
        <div  class="container">
            <div class="row text-center  ">
                <div class="col-xs-4 col-sm-4 col-lg-3"><img src="img/icon_tab/13 Computer.svg" alt="no" class="op"> <h3>Информационные технологии</h3><p>Знакомьтесь с последними разработками в сфере IT</p>  </div>
                <div class="col-xs-4 col-sm-4 col-lg-3"><img src="img/icon_tab/37 Basketball.svg" alt="no" class="op"> <h3>Спорт</h3><p>Учавствуйте в спортивных мероприятиях нашего города</p>  </div>
                <div class="col-xs-6 col-sm-4 col-lg-3"><img src="img/icon_tab/39 Trophy.svg" alt="no" class=" op"> <h3>Турниры </h3><p>Учавствуйте в турнирах и побеждайте</p>  </div>
                <div class="col-xs-6 col-sm-4 col-lg-3"><img src="img/icon_tab/32 Compass.svg" alt="no" class=" op"> <h3>Инновации</h3><p>Встречайте единомышленников и делитесь идеями</p>  </div>
                <div class="col-xs-6 col-sm-4 col-lg-3"><img src="img/icon_tab/11 Writing Board.svg" alt="no" class=" op"> <h3>Конференции</h3><p>Делитесь своими знаниями с другими</p>  </div>
                <div class="col-xs-6 col-sm-4 col-lg-3"><img src="img/icon_tab/20 Graduation.svg" alt="no" class=" op"> <h3>Образование</h3><p>Узнавайте что то новое каждый день</p>  </div>
                <div class="col-xs-6 col-sm-4 col-lg-3"><img src="img/icon_tab/17 Scholl Bus.svg" alt="no" class=" op"> <h3>Путешествия</h3><p>Участвуйте в различных выездных мероприятиях</p>  </div>
                <div class="col-xs-6 col-sm-4 col-lg-3"><img src="img/icon_tab/23 Flask.svg" alt="no" class=" op"> <h3>Открытия </h3><p>Открываейте в себе что-то новое кажый день</p>  </div>
            </div>
        </div>
    </div>









   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
       <div class="modal-dialog modal-lg" role="document">
           <div class="modal-content">

               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Наша история</h5>
                       <button class="close" type="button" data-dismiss ="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
               </div>

               <div class="modal-body">
                   <div class="container-fluid justify-content-center">
                       <div class="row">
                           <div class="col-6"><img src="img/sfmai1.jpg" alt="no" class="w-100 h-100 modal_pic"></div>
                           <div class="col-6"><img src="img/sfmai3.jpg" alt="no" class="w-100 h-100 modal_pic"></div>                           
                       </div>
                       <div class="row">
                                
                               <p class="modal_line">
                                  Ступинский филиал федерального государственного бюджетного образовательного учреждения высшего образования «Московский авиационный институт (национальный исследовательский университет)»
                                  основан в 1956 г. как вечернее отделение Московского  авиационного технологического института (приказ №1035 от 20.10.1955 г.), как вечерний факультет  Московского  авиационного технологического
                                   института (приказ Министра высшего образования №242 от 14.03.1956 г.), реорганизован с 15.06.1966 в филиал Московского авиационного технологического института в г. Ступино  (приказ Министра высшего
                                   и среднего специального образования РСФСР №315 от 06.06.1966), реорганизован в Ступинский филиал федерального государственного бюджетного образовательного учреждения высшего образования «Московский
                                   авиационный институт (национальный исследовательский университет)» (приказ Минобрнауки России № 266 от 24 марта 2015 г.), переименован (приказ Минобрнауки России №1159 от 16.10.2015г.) в Ступинский
                                   филиал федерального государственного бюджетного образовательного учреждения высшего образования "Московский авиационный институт (национальный исследовательский университет)"

                               </p>
                       </div>
                   </div>
               </div>

               <div class="moda-footer m-3">
                       <div class="row m-3 p-3">
                           <button class="btn btn-secondary btn-lg" data-dismiss="modal"> Закрыть</button>                                                       
                       </div>
               </div>
           </div>
       </div>
   </div>

    
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12 text-center i_header">
          <div> <p  >Наши страницы в Инстаграм</p> <img src="img/inst.png" alt="instagram_logo"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <!-- InstaWidget -->
<a href="https://instawidget.net/v/user/mai_stupino" id="link-ed273b68ede043c15d02110dfbb4c5fe96f0696e787b460f0d29263da7d9d9a5">@mai_stupino</a>
<script src="https://instawidget.net/js/instawidget.js?u=ed273b68ede043c15d02110dfbb4c5fe96f0696e787b460f0d29263da7d9d9a5&width=100%"></script>
      </div>
      <div class="col-md-6">
        <!-- InstaWidget -->
<a href="https://instawidget.net/v/user/maiuniversity" id="link-4acccb8d96e020af536a738f648d689fa2eee5439961764cfdd952d7eb0b8783">@maiuniversity</a>
<script src="https://instawidget.net/js/instawidget.js?u=4acccb8d96e020af536a738f648d689fa2eee5439961764cfdd952d7eb0b8783&width=100%"></script>

      </div>
    </div>
  </div>




























    <div class="container-fluid mt-5 card_bg" >
        <!--<div class="row p-2">-->
            <div class="container p-3">
                    <div class="card-deck">

                         <div class="card border-secondary "  >
                            <img class="card-img" src="img/mai_vk2.jpg" alt="Card image">
                           <div class="card-image-overlay">
                            <div class="card-body text-secondary">
                                <h5 class="card-title">«Московский авиационный институт (национальный исследовательский университет)» </h5>
                                <p class="card-text">Ознакомьтесь с последними новостями  МАИ </p>
                                 
                            </div>

                             <div class="card-footer bg-transparent ">
                                <a href="https://vk.com/maiuniversity" class="btn btn-outline-primary  ">Перейти</a>
                            </div>

                           </div>
                        </div>


                        <div class="card border-secondary " >
                            <img src="img/mai_vk.jpg" alt="pic1" class="card-img-top">
                            <div class="card-body text-secondary">
                                <h5 class="card-title">Мы Вконтакте</h5>
                                <p class="card-text"> Следите за всеми новостями в нашей группе Вконтакте.</p>
                            </div>

                            <div class="card-footer bg-transparent ">
                                    <a href="https://vk.com/sf_mai" class="btn btn-outline-primary ">Перейти</a>
                            </div>
                            
                        </div>

                       

                         <div class="card border-secondary "  >
                            <img class="card-img" src="img/panorama.jpg" alt="Card image">
                           <div class="card-image-overlay">
                            <div class="card-body text-secondary ">
                                <h5 class="card-title">Информационный портал городского округа Ступино</h5>
                                <p class="card-text">Посетите главный новостной ресурс нашего города. Оставайтесь в курсе всех новостей и принимайте участие в жизни города! </p>                               
                                 
                            </div>

                             <div class="card-footer bg-transparent ">
                                      <a href="http://instupino.ru/" class="btn btn-outline-primary ">Перейти</a>
                             </div>

                           </div>
                        </div>
                  </div>
            </div>
    </div>





<div class="container mt-5">
   <div class="row">
        <div class="col-md-12 text-center i_header">
            <div> <p  >Видеоряд</p> <img src="img/youtube.png" alt="youtube"></div>
        </div>
    </div>
</div>

<div class="container pl-5 mb-5">
    <div class="row">
      <div class="col-sm-6 mb-2">
          <div class=" embed-responsive embed-responsive-16by9">
              <iframe src="https://www.youtube.com/embed/TI6nHU2nqqc" class="embed-responsive-item" allowfullscreen> </iframe>
          </div>
      </div>
      <div class="col-sm-6 mb-2">
          <div class=" embed-responsive embed-responsive-16by9">
              <iframe src="https://www.youtube.com/embed/07NaRVnu0I4" class="embed-responsive-item" allowfullscreen> </iframe>
          </div>
      </div>
      <div class="col-sm-6">
          <div class=" embed-responsive embed-responsive-16by9">
              <iframe src="https://www.youtube.com/embed/Hm6UBEJDRAA" class="embed-responsive-item" allowfullscreen> </iframe>
          </div>
      </div>
      <div class="col-sm-6">
          <div class=" embed-responsive embed-responsive-16by9">
              <iframe src="https://www.youtube.com/embed/83V21QZOAZc" class="embed-responsive-item" allowfullscreen> </iframe>
          </div>
      </div>
    </div>
</div>








</div>


<a href="#" class="scrollup"></a>

<div class="navbar-fixed-bottom row-fluid bg-dark" >
    <div class="navbar-inner">
        <div class="container  p-5">
             <div class="row justify-content-center">

                 <div class="col-sm-6 col-lg-4  mb-2">

                   <div class="card border-dark footer_card" >
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Адрес: г.Ступино, ул.Пристанционная д.4</li>
                        <li class="list-group-item"> Деканат: 8(496)641-10-92</li>
                        <li class="list-group-item"> Наш сайт: <a href="http:\\sfmai.ru" class="card-link">www.sfmai.ru</a></li>
                      </ul>

                    </div>
                 </div>

                 <div class="col-sm-6 col-lg-4 text-center mb-2 footer_content" >
                    <a href="http:\\sfmai.ru"><img src="img/mai_card.jpg" alt="no" height= "auto" width = "145px"></a>
                     <h3>Ступинский филиал МАИ</h3>
                     <p>Будьте в курсе всех событий из жизни института!</p>
                 </div>

                 <div class="col-sm-8 col-lg-4 footer_content">
                     <h3> Не забудьте поделиться с друзьями! </h3>
                     <div class="ya-share2 " data-services="collections,vkontakte,facebook,odnoklassniki,gplus,twitter,reddit,evernote,lj,viber,whatsapp,skype,telegram"  data-image="http://sfmai-info.ml/img/mai_logo.png"></div>
                 </div>
             </div>
        </div>

         <div class="container  ">
             <div class="row justify-content-center">

                 <div class="col-sm-12 col-lg-12  text-center footer_content ">
                  <h5>© Разработка ресурса: Dyakov I.P., 2018 </h5>

              </div>


          </div>
        </div>
    </div>
</div>





<!-- Event Calendar-->

<script src="http://code.jquery.com/jquery.min.js"> </script>
<script src="js/moment.js"> </script>
<script src="js/jquery.eventCalendar.js"> </script>

<!--  Yandex share -->

<script  src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script  src="//yastatic.net/share2/share.js"></script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<!--  index scripts  -->
<script>

       //Скрипт для вывода сегодншнего и предстоящего событий 

      var Data_t = ' <?php echo  $today_event; ?> ';   //получаем информацию о сегодняшнем событии из функции php
      
        if (Data_t  !== '  ') {
              var  HeadNewsData  =  JSON.parse(Data_t);
            
                    today_Date.innerHTML = HeadNewsData.date;
                    today_Title.innerHTML = HeadNewsData.title;
                    today_Descr.innerHTML = HeadNewsData.description;
                   // today_Url.innerHTML = HeadNewsData.url;
           
                    if   (HeadNewsData.url !== ""){
                       today_Url.setAttribute ("href", HeadNewsData.url);
                    }else {
                        today_Url.setAttribute ("class"," d-none");
                    }
                    
            
        }else {
                 today_Descr.innerHTML = "Нет событий на сегоня";
                 today_Url.setAttribute ("class", " d-none"); 
              }

    var Data_f = ' <?php echo  $future_event; ?> ';  //получаем информацию о будущем событии из функции php
        
            if (Data_f  !== '  ') {
                var  HeadNewsData_f  =  JSON.parse(Data_f);           
                    
                    f_Date.innerHTML = HeadNewsData_f.date;
                    f_Title.innerHTML = HeadNewsData_f.title;
                    f_Descr.innerHTML = HeadNewsData_f.description;
                  //  f_Url.setAttribute ("href", HeadNewsData_f.url);
            
            
                    if  (HeadNewsData_f.url !== ""){
                               f_Url.setAttribute ("href", HeadNewsData_f.url);
                            }else {
                                f_Url.setAttribute ("class"," d-none");
                            }
                
            }else {
                 f_Descr.innerHTML = "Нет предстоящих событий";
                 f_Url.setAttribute ("class", " d-none");
                  }
            


  //---------------- скрипт календаря событий




    $(function () {
        var data = <?php echo  $events; ?>  // входные данные формата JSON полученные из обработчика
        $('#eventCalendar').eventCalendar({
            jsonData: data,                 //данные
            //eventsjson: 'js/data.json',
            jsonDateFormat: 'human',        //пользовательски формат отображения даты
            openEventInNewWindow: true,     //открытие ссылок в новой вкладке
            eventsLimit: 5,                 //суммарное количесвто отображаемых элементов в блоке
            dateFormat: 'dddd MM-DD-YYYY',  //формат дат
            locales: {
                locale: "ru",               // выбор локализации
                txt_noEvents: "Нет никаких событий для данного периода",
                txt_SpecificEvents_prev: "",
                txt_SpecificEvents_after: ", cобытия:",
                txt_NextEvents: "Следующие события:",
                txt_GoToEventUrl: "Смотреть",
                moment: {
                    "months" : [ "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь",
                        "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь" ],
                    "monthsShort" : [ "Янв", "Фев", "Мар", "Апр", "Май", "Июн",
                        "Июл", "Авг", "Сен", "Окт", "Ноя", "Дек" ],
                    "weekdays" : [ "Воскресенье","Понедельник","Вторник","Среда",
                        "Четверг","Пятница","Суббота" ],
                    "weekdaysShort" : [ "Вс","Пн","Вт","Ср", "Чт","Пт","Сб" ],
                    "weekdaysMin" : [ "Вс","Пн","Вт","Ср", "Чт","Пт","Сб" ],
                    "longDateFormat" : {
                        "LL" : "DD-MM-YYYY",
                       },
                }
            }


        });

    });




    // Проверка введенного email
    function isEmail(email) {
        // регулярное вырожение для проверки введенного адреса
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    function completeInviteForm() {

        setTimeout(function() { $("#completeform").fadeOut(800, function(){
            $.ajax({
                type: 'POST',
                url: 'save.php',
                data: 'email='+$("#email").val(),
                success: function(){


                    $('#completeform').before('<span class="msg alert alert-success">Все готово! Вы добавлены в список новостной рассылки.</span>')}
                
            });
        });
        }, 1800);
    }

    var erdiv    = $("#error");
    var btnwrap  = $("#btnwrap");

    $(document).ready(function(){
        $("#sendbtn").on("click", function(){
           if ($('#sendtn').val() == ' ') {
             erdiv.html("Вы не правильно ввели адрес электронной почты");
             erdiv.css("display", "block");
           }
              // Введенное значение
            var emailval = $("#email").val();
                //Проверка, если true то выполняется анимация добавления
            if(!isEmail(emailval)) {
                erdiv.html("Вы не правильно ввели адрес электронной почты");
                erdiv.css("display", "block");
            }

            if(isEmail(emailval)) {
                erdiv.css("color", "#719dc8");
                erdiv.html("обработка...");
                btnwrap.html('<img src="img/loader.gif" alt="loading">');

                (completeInviteForm(), 900);
            }
        });



            // Функция скроллинга наверх 

           $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn(1000);
            } else {
            $('.scrollup').fadeOut(1000);
            }
            });
             
            $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
            });
             


    });


 

    










</script>
</body>

</html>


