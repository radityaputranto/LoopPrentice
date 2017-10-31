<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Loopprentice</title>
    <link rel="shortcut icon" href="libs/home_register/img/LogoLoop.png" type="libs/home_register/image/x-icon">
<?php
$message_register = '{}';
$message_login = '{}';

if(isset($_SESSION['message_register'])) {
    $message_register = $_SESSION['message_register'];
    unset($_SESSION['message_register']);
}

if(isset($_SESSION['message_login'])) {
    $message_login = $_SESSION['message_login'];
    unset($_SESSION['message_login']);
}

$message_sales = '{}';

if(isset($_SESSION['message_sales'])) {
    $message_sales = $_SESSION['message_sales'];
    unset($_SESSION['message_sales']);
}

$message = json_decode($message_sales);
if($message_sales != '{}') {
    echo $message->message;
}
?>


  

    <!--video-->
    <link rel="stylesheet" href="libs/home_register/css/docs.theme.min.css">
    <link rel="stylesheet" href="libs/home_register/css/owl.carousel.css">
    <link rel="stylesheet" href="libs/home_register/css/owl.theme.default.css">
    <script src="libs/home_register/js/jquery.min.js"></script>
    <script src="libs/home_register/js/owl.carousel.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="libs/home_register/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="libs/home_register/general/normalize.css">
    <link rel="stylesheet" type="text/css" href="libs/home_register/general/style.css">
    <link rel="stylesheet" href="libs/home_register/css/font-awesome.min.css">
    <link rel="stylesheet" href="libs/home_register/css/font-awesome.min.css">

    <!-- wow.js -->
    <link rel="stylesheet" href="libs/home_register/css/libs/animate.css">

    <style type="text/css">
        .statistik {
    padding: 60px 0 60px; 
    background: url("libs/img/bgStat.jpg");
    /*background-color:#e56754;*/
    background-attachment: fixed;
    background-size:cover;  
    color:#fff;
    margin-top: 30px;
    margin-bottom: 30px;
}
    </style>    
</head>
<body>
    <!-- alertLogin -->
<div id="alertlogingagal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <h3>username atau password salah</h3>
        </div>
    </div>
</div>

<!-- header -->
<nav class="navbar navbar-expand-lg navbar-dark  navigation transparent menu fixed-top">
    <a class="navbar-brand" href="#">
        <img src="libs/home_register/img/LogoLoop.png" width="80" height="auto" alt="">
    </a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-white"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link " href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=blog_prentice&action=index">Aksiku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Challenge</a>
            </li>
            <li class="nav-item">
                
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" >Login</button>
            </li>
        </ul>
    </div>
</nav>

<div class="banner-img">
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 3em">
            <!-- moobile view -->
            <div class="col-xs-12 d-md-none d-flex  mentor-atas wow fadeInDown" data-wow-duration="2s">
                <img class="img-fluid " src="libs/home_register/img/mentor.png">
            </div>
            <div class="col-xs-12 d-md-none d-flex  header-keterangan-atas wow fadeInDown " data-wow-duration="2s" style="width: 100%">
                <h4 style="margin: 0 auto">LOOP APPRENTICE</h4>
            </div>
            
            <div class="col-xs-12 d-md-none d-flex  header-keterangan-atas wow fadeInDown " data-wow-duration="2s">
                <a  href="?page=register_prentice&action=index"><button class="round-btn">Join Us</button></a>
            </div>
            
        </div>
        <div class="row">

            
            

            <!-- normal -->
            <div class="col-xs-12 col-sm-12 col-md-7 header-keterangan wow slideInLeft d-none  d-md-block" data-wow-duration="2s">
                <h2>LOOP APPERNTICE</h2>
                <p>Mau magang di perusahaan Telekomunikasi No 1 di Indonesia khusus buat kamu yang punya jiwa kreatif,aktif ,suka tantangan dan mau belajar leadership,marketing dan enterpreneour </p>
                <a href="?page=register_prentice&action=index"><button class="round-btn">Join Us</button></a>
            </div>
            <div class="col-xs-12 d-none  d-md-block col-md-5 mentor wow slideInRight" data-wow-duration="2s">
                <img class="img-fluid " src="libs/home_register/img/mentor.png">
            </div>
        </div><!-- container -->
    </div><!-- row -->
</div><!-- banner image -->

<!--banner slider-->
<section>
    <div class="row" style="margin: 0 auto;max-width:100%" >
        <div class="large-12 columns" style="margin: 0;padding: 0">
            <div id="owl-banner" class="owl-carousel owl-theme" style="margin: 0">
                <div class="item">
                    <img src="libs/home_register/img/banner1.jpg" class="img-fluid" alt="Responsive image" >
                </div>
                <div class="item">
                    <img src="libs/home_register/img/banner2.jpg" class="img-fluid" alt="Responsive image">
                </div>
                <div class="item">
                    <img src="libs/home_register/img/banner3.jpg" class="img-fluid" alt="Responsive image">
                </div>
                <div class="item">
                    <img src="libs/home_register/img/banner4.jpg" class="img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- bagian regioanl -->
<div class="bg-regional">
    <div class="container-fluid regional-container">
        <div class="row ">
            <div class="col12 regional" style="width: 100%">
                <h2 class="capitalize center" >Regional</h2>
                <div class="garis" style="width: 100%"></div>

            </div>
        </div>
    </div>
    <!--regional slider-->
    <!-- <section >
        <div class="row" style="margin: 0 auto;max-width:100%; margin-bottom: 20px">
            <div class="large-12 columns" style="margin: 0;padding: 0">
                <div id="owl-regional" class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="libs/img/prentice/JATENG.png" class="img-fluid round-img" alt="Responsive image" onclick="unhide('#section_jateng_diy','#section_jatim','#section_bali_nusra')">
                    </div>
                    <div class="item">
                        <img src="libs/img/prentice/JATIM.png" class="img-fluid round-img" alt="Responsive image" onclick="unhide('#section_jatim','#section_jateng_diy','#section_bali_nusra')">
                    </div>
                    <div class="item">
                        <img src="libs/img/prentice/BALI.png" class="img-fluid round-img" alt="Responsive image" onclick="unhide('#section_bali_nusra','#section_jateng_diy','#section_jatim')">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <div class="row" style="margin: 0 auto ; margin-bottom: 15px;">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-bottom: 5px;">
            <img src="libs/img/prentice/BALI.png" class="img-fluid round-img" alt="Responsive image" onclick="unhide('#section_bali_nusra','#section_jateng_diy','#section_jatim')">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-bottom: 5px;">
            <img src="libs/img/prentice/JATENG.png" class="img-fluid round-img" alt="Responsive image" onclick="unhide('#section_jateng_diy','#section_jatim','#section_bali_nusra')">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-bottom: 5px;">
            <img src="libs/img/prentice/JATIM.png" class="img-fluid round-img" alt="Responsive image" onclick="unhide('#section_jatim','#section_jateng_diy','#section_bali_nusra')">
        </div>
    </div>

    <!--user bali nusra slider-->
    <section id="section_bali_nusra">
        <div class="row" style="margin: 0 auto;max-width:100%">
            <div class="large-12 columns" style="margin: 0;padding: 0">
                <div id="owl-bali_nusra" class="owl-carousel owl-theme">

                    <?php
                    foreach ($apprentice_balinusra as $data) {
                        $img = $data->profile_photo;
                        if(!@getimagesize($img))
                        {
                            $img="libs/img/av1.png";
                        } ?>

                        <div class="item">
                            <img src=<?php echo $img ?> alt=<?php echo $data->full_name ?> class="img-fluid round-img" alt="Responsive image" style="width:170px;height:170px;margin-right: 3px">
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!--user jateng diy slider-->
    <section id="section_jateng_diy" class="hide">
        <div class="row" style="margin: 0 auto;max-width:100%">
            <div class="large-12 columns" style="margin: 0;padding: 0">
                <div id="owl-jateng_diy" class="owl-carousel owl-theme">

                    <?php
                    foreach ($apprentice_jatengdiy as $data) {
                        $img = $data->profile_photo;
                        if(!@getimagesize($img))
                        {
                            $img="libs/img/av1.png";
                        } ?>

                        <div class="item">
                            <img src=<?php echo $img ?> alt=<?php echo $data->full_name ?> class="img-fluid round-img" alt="Responsive image" style="width:170px;height:170px;">
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!--user jatim slider-->
    <section id="section_jatim" class="hide">
        <div class="row" style="margin: 0 auto;max-width:100%">
            <div class="large-12 columns" style="margin: 0;padding: 0">
                <div id="owl-jatim" class="owl-carousel owl-theme">

                    <?php
                    foreach ($apprentice_jatim as $data) {
                        $img = $data->profile_photo;
                        if(!@getimagesize($img))
                        {
                            $img="libs/img/av1.png";
                        } ?>

                        <div class="item">
                            <img src=<?php echo $img ?> alt=<?php echo $data->full_name ?> class="img-fluid round-img" alt="Responsive image" style="width:170px;height:170px;margin-right: 3px">
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </section>
</div><!-- AKHIR REFGIONAL -->

<!-- counter section -->
    <section class="statistik">
        <div class="container">
        <div class="row">
                <div class="col-lg-12 awalTesti">
                <div class="wow bounceInLeft text-center"><h2  >User Loopprentice </h2>
                <p class="text-white">Jumlah user yang telah mendaftar loopprentice</p></div>
            </div>
        </div>
            <br>
        <div class="row ">   
                
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                      <h1><i class="fa fa-user"></i> <span class="stat-count highlight-red"><?php echo $total_apprentice_balinusra->apprentice  ?></span></h1>
                      <h4>BALI NUSRA</h4>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                      <h1><i class="fa fa-user"></i>  <span class="stat-count highlight-red"><?php echo $total_apprentice_jatengdiy->apprentice  ?></span> </h1>
                      <h4>JATENG D.I.Y</h4>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                      <h1><i class="fa fa-user"></i>  <span class="stat-count highlight-red"><?php echo $total_apprentice_jatim->apprentice  ?></span></h1>
                      <h4>JATIM </h4>
                </div>

                
        </div>
        <br><br>
        <div class="row justify-content-center">
             
            <a  href="?page=register_prentice&action=index"><button type="button" class="btn btn-outline-danger text-white btn-lg">Join us now</button></a>
               
        </div>

        </div>
    </section>

<!-- end counter section -->


<!--bagian video-->
<section id="demos">
    <div class="row" style="margin: 0 auto;max-width:100%">
        <div class="large-12 columns" style="margin: 0;padding: 0">
            <div id="owl-video" class="owl-carousel owl-theme">
                <div class="item-video" data-merge="1">
                    <a class="owl-video" href="https://www.youtube.com/watch?v=1MWO5Y90Kgo"></a>
                </div>
                <div class="item-video" data-merge="1">
                    <a class="owl-video" href="https://www.youtube.com/watch?v=mPoGJ8bSWzE"></a>
                </div>
                <div class="item-video" data-merge="1">
                    <a class="owl-video" href="https://www.youtube.com/watch?v=1E74hDpy0xg"></a>
                </div>
                <div class="item-video" data-merge="1">
                    <a class="owl-video" href="https://www.youtube.com/watch?v=orW1Tu2Vm-U"></a>
                </div>
                <div class="item-video" data-merge="1">
                    <a class="owl-video" href="https://www.youtube.com/watch?v=-oZjbnF64C8"></a>
                </div>
                <div class="item-video" data-merge="1">
                    <a class="owl-video" href="https://www.youtube.com/watch?v=J2YmNK91Kl8"></a>
                </div>
                <div class="item-video" data-merge="1">
                    <a class="owl-video" href="https://www.youtube.com/watch?v=oZeUs3ydgoo"></a>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="bv-login" method="post" action="?page=login_prentice&action=auth">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        <span id="spanusername" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <span id="spanpassword" class="text-danger"></span>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger" style="width: 200px;" id="login-submit" name="login-submit">Login</button>
                    </div>
                </form>
            </div>

        </div>


  </div>
</div>

<footer id="footer" >
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container text-center">
          
            <div class="social-icons">
                <ul>
                   
                    <li><a class="twitter" href="https://twitter.com/loop_id" target="_blank"><i class="fa fa-twitter icon-footer"></i></a></li>
                    <li><a class="facebook" href="https://id-id.facebook.com/LoopersID/" target="_blank"><i class="fa fa-facebook icon-footer"></i></a></li>
                    <li><a class="instagram" href="https://www.instagram.com/loop_id/" target="_blank"><i class="fa fa-instagram icon-footer"></i></a></li>
                </ul>
                
                <h6 class="footer-tag text-white">copyright 2017 by Youth and Comunity Jawa Bali Nusra</h6>
            </div>
        </div>
    </div>
</footer>

<!-- end-footer -->

<!--script video-->
<script src="libs/js/script.js"></script>
<script src="libs/js/home.js"></script>
<script src="libs/home_register/js/highlight.js"></script>
<script src="libs/home_register/js/app.js"></script>

<!-- javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script type="text/javascript" src="libs/home_register/js/bootstrap.js"></script>
<script src="libs/home_register/dist/wow.js"></script>
<script src="libs/vendor/bootstrap/js/bootbox/bootbox.min.js"></script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    // document.getElementById('moar').onclick = function() {
    //   var section = document.createElement('section');
    //   section.className = 'section--purple wow fadeInDown';
    //   this.parentNode.insertBefore(section, this);
    // };
  </script>

  <!-- untuk navigasi -->
  <script type="text/javascript">
    $(window).scroll(function() {
        if($(this).scrollTop() > 50) 
         /*height in pixels when the navbar becomes non opaque*/ 
        {
            $('.menu').addClass('bg-red');
        } else {
            $('.menu').removeClass('bg-red');
        }
    });
    $( window ).width(function(){
        if($(this).width() > 690 && $(this).scrollTop() >= 0){
             $('.menu').addClass('navbar-def');

        }
    });
  </script>

  <!-- tambahan -->
    <script>
        var mlogin = JSON.parse(<?php echo "'".$message_login."'" ?>);
        var mregister = JSON.parse(<?php echo "'".$message_register."'" ?>);
        $(function () {

            if(mregister.message) {
                bootbox.dialog({
                    title: "Loopers Register Confirmation",
                    message: '<div class="media"><div class="profil-img"><img class="img-responsive" src="libs/img/av3.png" alt="Profile picture"></div><div class="media-body"><p class="text-semibold text-main">'+ mregister.message +'.</div></div>',
                    buttons: {
                        confirm: {
                            label: "Salam Loopers!"
                        }
                    }
                });
            }

            if(mlogin.message) {
                bootbox.dialog({
                    title: "Loopers Login Confirmation",
                    message: '<div class="media"><div class="profil-img"><img class="img-responsive" src="libs/img/av3.png" alt="Profile picture"></div><div class="media-body"><p class="text-semibold text-main">'+ mlogin.message +'.</div></div>',
                    buttons: {
                        confirm: {
                            label: "Salam Loopers!"
                        }
                    }
                });
            }
        })
    </script>

    <!-- script untuk navbar -->
    <script type="text/javascript">
        $(window).scroll(function() {
        if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/ 
        {
            $('.menu').addClass('warna');
             $('.menu').removeClass('transparent');
             
        } else {
            $('.menu').removeClass('warna');
            
        }
    });
     $( window ).width(function(){
        if($(this).width() < 1001){
             $('.menu').addClass('warna');
             $('.menu').removeClass('transparent');

        }
     });

    </script>

    <script>
        var mregister = JSON.parse(<?php echo "'".$message_register."'" ?>);
        var mlogin = JSON.parse(<?php echo "'".$message_login."'" ?>);

        $(document).ready(function() {
            // $(".regular").slick({
            //     dots: true,
            //     infinite: true,
            //     slidesToShow: 4,
            //     slidesToScroll: 4,
            //     autoplay: true,
            //     autoplaySpeed: 2000
            // });



            // var imgpopup = bootbox.dialog({
            //     message: '<div class="media"><div class="profil-img"><img class="img-popup" src="libs/img/periode_register.jpeg" alt=""></div></div>',
            //     onEscape: function() { console.log("Escape!"); }
            // });


            if(mregister.message) {
                bootbox.dialog({
                    title: "Loopers Confirmation",
                    message: '<div class="media"><div class="profil-img"><img class="img-responsive" src="libs/img/av3.png" alt="Profile picture"></div><div class="media-body"><p class="text-semibold text-main">'+ mregister.message +'.</div></div>',
                    buttons: {
                        confirm: {
                            label: "Salam Loopers!"
                        }
                    }
                });
            }

            if(mlogin.message) {
                bootbox.dialog({
                    title: "Loopers Confirmation",
                    message: '<div class="media"><div class="profil-img"><img class="img-responsive" src="libs/img/av3.png" alt="Profile picture"></div><div class="media-body"><p class="text-semibold text-main">'+ mlogin.message +'.</div></div>',
                    buttons: {
                        confirm: {
                            label: "Salam Loopers!"
                        }
                    }
                });
            }


        });
    </script>

    <!-- fungsi untuk counter  -->
     <script type="text/javascript">


    (function($) {


        "use strict";


        function count($this){


        var current = parseInt($this.html(), 10);


        current = current + 1; /* Where 50 is increment */  


        $this.html(++current);


            if(current > $this.data('count')){


                $this.html($this.data('count'));


            } else {    


                setTimeout(function(){count($this)}, 50);


            }


        }           


        $(".stat-count").each(function() {


          $(this).data('count', parseInt($(this).html(), 10));


          $(this).html('0');


          count($(this));


        });


   })(jQuery);


   </script>
</body>
</html>






