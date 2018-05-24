<?php session_start();?>

<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>CUPPING</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-ae362vOLHy2F1EfJtpMbNW0i9pNM1TP2l5O4VGYYiLJKsaejqVWibbP6BSf0UU5i" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/css/swiper.css">
  <link rel="stylesheet" href="css/general.css">


  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="js/custom.js"></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/js/swiper.js"></script>
  <style>
  .floatMenu {
    position: absolute;
    width: 100%;
    height: 45px;
    background-color: #606060;
    margin:0;
    padding:0;
    color: #fff;
    /*transparency*/
  }

  #notePrompt input{
    width:100%;
    height:45px;

  }
  </style>

  <script>
  $(document).ready(function () {
    $( function() {
      // data saved part.
      function runEffect() {
        // Run the effect
        $( "#saving_effect" ).show( 'blind', '', 500, callback );
      };

      function callback() {
        setTimeout(function() {
          $( "#saving_effect:visible" ).removeAttr( "style" ).fadeOut();
        }, 3000 );
      };


      $( "#saving_effect" ).hide();
      <?php
      //if ( isset($_SESSION['username']) )
      if ( isset($_SESSION['saved']) ){
        if ( $_SESSION['saved'] == true)
        {

          echo 'runEffect();';

          $_SESSION['saved'] = false;
        }
      }
      ?>


    });

    //initialize swiper when document ready
    var mySwiper = new Swiper ('.swiper-container', {
      // Optional parameters
      direction: 'horizontal',
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      loop: true
    })



  });
</script>

<script>

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-23019901-1']);
_gaq.push(['_setDomainName', "bootswatch.com"]);
_gaq.push(['_setAllowLinker', true]);
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>



</head>

<body>

  <!-- data saved message -->
  <div id="saving_effect" class="alert alert-dismissible alert-primary">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Data Saved</strong>
  </div>


  <!-- head -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php">CUPPING</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Evalutation <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="history.php">History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <?php

      if(isset($_SESSION['username']))
      {
        echo '<a class="btn btn-primary btn-lg" href="" role="button" >'.$_SESSION['username'].'</a>';
        echo '<a class="btn btn-primary btn-lg" href="signout.php" role="button" >'.'Log out'.'</a>';

      } else {
        echo '<a class="btn btn-primary btn-lg" href="signin.html" role="button" >Sign in</a>';
      }
      ?>


    </div>
  </nav>

  <!-- swiper-->
  <div class="swiper-container"  style="padding-bottom: 10px" >
    <div class="parallax-bg" style="background-image:url(img/cup_of_coffee.jpg)" data-swiper-parallax="-23%"></div>
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="title" data-swiper-parallax="-300">Slide 1</div>
        <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
        <div class="text" data-swiper-parallax="-100">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.</p>

        </div>
      </div>
      <div class="swiper-slide">
        <div class="title" data-swiper-parallax="-300" data-swiper-parallax-opacity="0">Slide 2</div>
        <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
        <div class="text" data-swiper-parallax="-100">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.</p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="title" data-swiper-parallax="-300">Slide 3</div>
        <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
        <div class="text" data-swiper-parallax="-100">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.</p>
        </div>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-white"></div>

  </div>

  <!-- main contents -->
  <div class="jumbotron">
    <h1 class="display-3"></h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>
  </div>

  <!-- Three columns of text below the carousel -->
  <div class="container marketing">
    <form id="evaluation_form" action="submit_process.php" method="post">


      <div class="row"> <!-- row 1-->
        <div class="col-lg-4">
          <div class="rounded-circle taste-pics" > <img  src="img/flavor5.png" alt="flavor_img" width="140" height="140"  > </div>
          <h2>Flavor</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>

          <font id="flavor_value">5</font>
          <p><input type="range" class="slider" name="flavor" id="flavor" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <div class="rounded-circle taste-pics"> <img class="rounded-circle" src="img/balance2.png" alt="Generic placeholder image" width="120" height="120" style="margin-top:10px;"> </div>
          <h2>Balance</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <font id="balance_value">5</font>
          <p><input type="range" class="slider" name="balance" id="balance" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <div class="rounded-circle taste-pics"> <img class="rounded-circle" src="img/roast2.png" alt="Generic placeholder image" width="140" height="140"> </div>
          <h2>Roasting</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <font id="roasting_value">5</font>
          <p><input type="range" class="slider" name="roastlevel" id="roasting" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row 1 -->

      <div class="row"> <!-- /.row 2 -->
        <div class="col-lg-4">
          <div class="rounded-circle taste-pics" > <img class="rounded-circle" src="img/acidity.png" alt="Generic placeholder image" width="140" height="140"> </div>
          <h2>Acidity</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <font id="acidity_value">5</font>
          <p><input type="range" class="slider" name="acidity" id="acidity" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <div class="rounded-circle taste-pics"> <img class="rounded-circle" src="img/donut-no-sprinkles-512.png" alt="Generic placeholder image" width="140" height="140"> </div>
          <h2>Sweetness</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <font id="sweetness_value">5</font>
          <p><input type="range" class="slider" name="sweetness" id="sweetness" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <div class="rounded-circle taste-pics"> <img class="rounded-circle" src="img/smell2.png" alt="Generic placeholder image" width="125" height="125" style="margin-top:7px; margin-left:-5px;"> </div>
          <h2>Aroma</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <font id="aroma_value">5</font>
          <p><input type="range" class="slider" name="aroma" id="aroma" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row 2 -->
      <div class="row"> <!-- /.row 3 -->
        <div class="col-lg-4">
          <div class="rounded-circle taste-pics" > <img  src="img/aftertaste.png" alt="flavor_img" width="110" height="110" style="margin-top:22px" > </div>
          <h2>Aftertaste</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <font id="aftertaste_value">5</font>
          <p><input type="range" class="slider" name="aftertaste" id="aftertaste" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <div class="rounded-circle taste-pics"> <img class="rounded-circle" src="img/uniformity2.png" alt="Generic placeholder image" width="180" height="120" style="margin-top:10px;margin-left:-19px" >  </div>
          <h2>Uniformity</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <font id="uniformity_value">5</font>
          <p><input type="range" class="slider" name="uniformity" id="uniformity" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <div class="rounded-circle taste-pics"> <img class="rounded-circle" src="img/cleanup.png" alt="Generic placeholder image" width="140" height="140" style="margin-left:-15px" > </div>
          <h2>Clean up</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <font id="cleanup_value">5</font>
          <p><input type="range" class="slider" name="cleanup" id="cleanup" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row 3 -->
      <div class="row"> <!-- /.row 4 -->
        <div class="col-lg-4">
          <div class="rounded-circle taste-pics" > <img class="rounded-circle" src="img/defect.png" alt="Generic placeholder image" width="150" height="100"  style="margin-top:15px" > </div>
          <h2>Defect</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <font id="defect_value">5</font>
          <p><input type="range" class="slider" name="defect" id="defect" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <div class="rounded-circle taste-pics"> <img src="img/body2.png" alt="Generic placeholder image" width="90" height="90" style="margin-top:20px;margin-left:0px" > </div>
          <h2>Body</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <font id="body_value">5</font>
          <p><input type="range" class="slider" name="body" id="body" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row 4 -->
      <div class="row"> <!-- /.row 5 -->
        <button type="submit" class="btn btn-primary btn-lg btn-block" style="width:70%; margin:auto;">Save</button>
      </div><!-- /.row 4 -->
    </form>
    <div class="footer" style="height:50px"> </div>
  </div> <!-- container marketing -->

  <div class="floatMenu" id="notePrompt">
    <input type="text" placeholder="note"/>
  </div>

  <div class="floatMenu" id="topBenchMark">
    <p>topBenchMark</p>
  </div>
  <div class="floatMenu" id="bottomBenchMark">
    <p>bottomBenchMark</p>
  </div>


  <script>
  $("#flavor").on('input', function() {
    $("#flavor_value").html( $(this).val() );
  });
  $("#balance").on('input', function() {
    $("#balance_value").html( $(this).val() );
  });
  $("#roasting").on('input', function() {
    $("#roasting_value").html( $(this).val() );
  });
  $("#acidity").on('input', function() {
    $("#acidity_value").html( $(this).val() );
  });
  $("#sweetness").on('input', function() {
    $("#sweetness_value").html( $(this).val() );
  });
  $("#aroma").on('input', function() {
    $("#aroma_value").html( $(this).val() );
  });

  $("#aftertaste").on('input', function() {
    $("#aftertaste_value").html( $(this).val() );
  });
  $("#uniformity").on('input', function() {
    $("#uniformity_value").html( $(this).val() );
  });
  $("#cleanup").on('input', function() {
    $("#cleanup_value").html( $(this).val() );
  });
  $("#defect").on('input', function() {
    $("#defect_value").html( $(this).val() );
  });
  $("#body").on('input', function() {
    $("#body_value").html( $(this).val() );
  });

  var flavorNote = '';
  console.log('flavorNote init');
  $('#notePrompt input').on('input', function(){
    flavorNote = $('#notePrompt input').val();
    console.log('event: input('+ flavorNote + ')');
  });


  $(document).ready(function() {



    // 기존 css에서 플로팅 배너 위치(top)값을 가져와 저장한다.
    //var floatPosition = parseInt($("#notePrompt").css('top'));
    var floatingElementHeight = parseInt($(".floatMenu").css('height'));
    var windowHeight = window.innerHeight;
    // 250px 이런식으로 가져오므로 여기서 숫자만 가져온다. parseInt( 값 );


    $(window).scroll(function() {
      // 현재 스크롤 위치를 가져온다.
      var scrollTop = $(window).scrollTop();
      //var newPosition = scrollTop + floatPosition + "px";
      var notePromptPos = scrollTop + windowHeight - floatingElementHeight;
      var topBenchMarkPos = parseInt(notePromptPos - windowHeight * 4 / 5);
      var bottomBenchMarkPos = parseInt(notePromptPos - windowHeight / 5);

      //console.log("notePromptPos: " + notePromptPos + " topBenchMarkPos: " + topBenchMarkPos + " bottomBenchMarkPos: " + bottomBenchMarkPos);
      //console.log(parseInt($('#flavor_value').offset().top));
      // 애니메이션 없이 바로 따라감
      $("#notePrompt").css('top', notePromptPos + 'px');
      //$("#topBenchMark").css('top', topBenchMarkPos  + 'px');
      //$("#bottomBenchMark").css('top', bottomBenchMarkPos + 'px');

      // 화면 중앙 이하로 내려가면 해당 엘리먼트에 대한 note 정보를 띄우고자 함.

      if( topBenchMarkPos < parseInt($('#flavor_value').offset().top) && bottomBenchMarkPos > parseInt($('#flavor_value').offset().top)){
        $('#notePrompt input').val('\#flavor: '+ flavorNote);

        console.log(flavorNote);
        //$('#notePrompt').text("flavor");

      } else if( topBenchMarkPos < parseInt($('#balance_value').offset().top) && bottomBenchMarkPos > parseInt($('#balance_value').offset().top)) {
        //$('#notePrompt').text("Balance");
      } else {
        $('#notePrompt input').val('');
      }
/*
      animtation
      $("#floatMenu").stop().animate({
        "top" : newPosition
      }, 500);
*/

    }).scroll();
  });

  $("#evaluation_form").submit(function(evt) {
    // username 유효성 검사
    <?php
    if(isset($_SESSION['username']))
    {
      return true;
    } else {
      ?>
      evt.preventDefault();
      alert("please use this after login.");
      <?php } ?>
    });


    </script>
  </body>





  </html>
