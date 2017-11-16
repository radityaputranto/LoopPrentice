<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Loopprentice</title>
    <link rel="shortcut icon" href="libs/home_register/img/LogoLoop.png" type="libs/home_register/image/x-icon">

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
    <center><h3>Hi Loopers ,<br>maaf halaman tidak ditemukan</h3></center>
    <center><h1>404</h1></center>

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

  

    
</body>
</html>






