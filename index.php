<?php session_start();?>

<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>CUPPING</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!--<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-ae362vOLHy2F1EfJtpMbNW0i9pNM1TP2l5O4VGYYiLJKsaejqVWibbP6BSf0UU5i" crossorigin="anonymous">-->
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/journal/bootstrap.min.css" rel="stylesheet" integrity="sha384-RYo6CbRL8rh7rpbkCiH9NYNDn+viHdKTOp1Df1HCOxcq1shtPNZV9s1U/Hot17Qy" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/css/swiper.css">
  <link rel="stylesheet" href="css/general.css">


  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="js/custom.js"></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/js/swiper.js"></script>
  <style>
  .bottomFloatBar {
    position: fixed;
    width: 100%;
    bottom: 0;
    z-index : 10;
  }

  .topFloatBar{
    position:fixed;
    width:100%;
    top: 0px;
    z-index:5;
    text-align:center;
    background-color: #e3e3e3;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    /*
    -webkit-transition: all 2s linear;
    -moz-transition: all 2s linear;
    transition: all 2s linear;
    */
  }

  .navbar {
    z-index:10;
  }

  .sampleNumberIndex{
    position:absolute;
    width:100%;
    height:50px;
    background:#e3e3e3;
    text-align:center;
    z-index:2;
  }
  .sampleNumberIndex h2 {
    text-aligne:center;
    padding:0;
    margine:0;
    position:relative;
    top:10%
  }

  #sampleNumberList {
    max-height:0;
    overflow:hidden;


  }

  #sampleNumberList.active{
    max-height:100%;
    display:block;
    overflow:auto;
  }

  .slidedownEffect{
    animation-name:slide-down;
    animation-duration: .5s;
    animation-delay: 0;
    animation-iteration-count: ;
    animation-timing-function: linear;
    animation-direction: ;
  }

  @keyframes slide-down{
    from{
      height:50px;
      overflow:hidden;
    }
    to{
      height:150px;
      display:block;
      overflow:auto;
    }
  }

  </style>

  <script>
  (function() {
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
    });
  })();

</script>

</head>

<body>

  <!-- data saved message -->
  <div id="saving_effect" class="alert alert-dismissible alert-primary">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Data Saved</strong>
  </div>

  <div class="topFloatBar" id="topSampleNum" >
    <h2 id="mainNumber" style="margin:5px;padding:0"> #1 </h2>
    <div id="sampleNumberList"> </div>
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


  <!-- Three columns of text below the carousel -->
  <?php


  $i = 1;
  while($i <= $_POST['sampleNum'])
  {
    ?>

    <div class="sampleNumberIndex" id="sampleNumberIndex_<?php echo $i; ?>"> <h2>#<?php echo $i; ?></h2> </div>
    <div class="container marketing">
      <form id="evaluation_form_<?php echo $i; ?>" action="submit_process.php" method="post">


        <div class="row"> <!-- row 1-->
          <div class="col-lg-4">
            <div class="rounded-circle taste-pics" > <img src="img/flavor5.png" alt="flavor_img" width="140" height="140"  > </div>
            <h2>Flavor</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>

            <font id="flavor_value_<?php echo $i;?>">5</font>
            <p><input type="range" class="slider" name="flavor_<?php echo $i;?>" id="flavor_<?php echo $i;?>" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
          </div><!-- /.col-lg-4 -->

          <div class="col-lg-4">
            <div class="rounded-circle taste-pics"> <img src="img/balance2.png" alt="Generic placeholder image" width="120" height="120" style="margin-top:10px;"> </div>
            <h2>Balance</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <font id="balance_value_<?php echo $i;?>">5</font>
            <p><input type="range" class="slider" name="balance_<?php echo $i;?>" id="balance_<?php echo $i;?>" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
          </div><!-- /.col-lg-4 -->

          <div class="col-lg-4">
            <div class="rounded-circle taste-pics"> <img src="img/roast2.png" alt="Generic placeholder image" width="140" height="140"> </div>
            <h2>Roasting</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <font id="roasting_value_<?php echo $i;?>">5</font>
            <p><input type="range" class="slider" name="roastlevel_<?php echo $i;?>" id="roasting_<?php echo $i;?>" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row 1 -->

        <div class="row"> <!-- /.row 2 -->
          <div class="col-lg-4">
            <div class="rounded-circle taste-pics" > <img src="img/acidity.png" alt="Generic placeholder image" width="140" height="140"> </div>
            <h2>Acidity</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <font id="acidity_value_<?php echo $i;?>">5</font>
            <p><input type="range" class="slider" name="acidity_<?php echo $i;?>" id="acidity_<?php echo $i;?>" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
          </div><!-- /.col-lg-4 -->

          <div class="col-lg-4">
            <div class="rounded-circle taste-pics"> <img src="img/donut-no-sprinkles-512.png" alt="Generic placeholder image" width="140" height="140"> </div>
            <h2>Sweetness</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <font id="sweetness_value_<?php echo $i;?>">5</font>
            <p><input type="range" class="slider" name="sweetness_<?php echo $i;?>" id="sweetness_<?php echo $i;?>" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
          </div><!-- /.col-lg-4 -->

          <div class="col-lg-4">
            <div class="rounded-circle taste-pics"> <img src="img/smell2.png" alt="Generic placeholder image" width="125" height="125" style="margin-top:7px; margin-left:-5px;"> </div>
            <h2>Aroma</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <font id="aroma_value_<?php echo $i;?>">5</font>
            <p><input type="range" class="slider" name="aroma_<?php echo $i;?>" id="aroma_<?php echo $i;?>" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row 2 -->
        <div class="row"> <!-- /.row 3 -->
          <div class="col-lg-4">
            <div class="rounded-circle taste-pics" > <img src="img/aftertaste.png" alt="flavor_img" width="110" height="110" style="margin-top:22px" > </div>
            <h2>Aftertaste</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <font id="aftertaste_value_<?php echo $i;?>">5</font>
            <p><input type="range" class="slider" name="aftertaste_<?php echo $i;?>" id="aftertaste_<?php echo $i;?>" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
          </div><!-- /.col-lg-4 -->

          <div class="col-lg-4">
            <div class="rounded-circle taste-pics"> <img src="img/uniformity2.png" alt="Generic placeholder image" width="180" height="120" style="margin-top:10px;margin-left:-19px" >  </div>
            <h2>Uniformity</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <font id="uniformity_value_<?php echo $i;?>">5</font>
            <p><input type="range" class="slider" name="uniformity_<?php echo $i;?>" id="uniformity_<?php echo $i;?>" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
          </div><!-- /.col-lg-4 -->

          <div class="col-lg-4">
            <div class="rounded-circle taste-pics"> <img src="img/cleanup.png" alt="Generic placeholder image" width="140" height="140" style="margin-left:-15px" > </div>
            <h2>Clean up</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <font id="cleanup_value_<?php echo $i;?>">5</font>
            <p><input type="range" class="slider" name="cleanup_<?php echo $i;?>" id="cleanup_<?php echo $i;?>" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row 3 -->
        <div class="row"> <!-- /.row 4 -->
          <div class="col-lg-4">
            <div class="rounded-circle taste-pics" > <img src="img/defect.png" alt="Generic placeholder image" width="150" height="100"  style="margin-top:15px" > </div>
            <h2>Defect</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <font id="defect_value_<?php echo $i;?>">5</font>
            <p><input type="range" class="slider" name="defect_<?php echo $i;?>" id="defect_<?php echo $i;?>" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
          </div><!-- /.col-lg-4 -->

          <div class="col-lg-4">
            <div class="rounded-circle taste-pics"> <img src="img/body2.png" alt="Generic placeholder image" width="90" height="90" style="margin-top:20px;margin-left:0px" > </div>
            <h2>Body</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <font id="body_value_<?php echo $i;?>">5</font>
            <p><input type="range" class="slider" name="body_<?php echo $i;?>" id="body_<?php echo $i;?>" value="5" min="0" max="10" step="1" data-highlight="true"/></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row 4 -->
        <div class="row"> <!-- /.row 5 -->
          <button type="submit" class="btn btn-primary btn-lg btn-block" style="width:70%; margin:auto;">Save</button>
        </div><!-- /.row 4 -->
      </form>
      <div class="footer" style="height:50px"> </div>
    </div> <!-- container marketing -->

    <?php
    $i = $i + 1;
  }

  ?>
  <!--
  <div class="bottomFloatBar" id="noteBar">
  <input type="text" placeholder="note"/>
</div>

<div class="bottomFloatBar" id="topBenchMark" style="">
<p>topBenchMark</p>
</div>
<div class="bottomFloatBar" id="bottomBenchMark" style="">
<p>bottomBenchMark</p>
</div> -->
<div class="bottomFloatBar" id="halfBenchMark" style="">
<p>halfBenchMark</p>
</div>



<div class="bottomFloatBar" id="noteBar">
  <div class="input-group">
    <div class="input-group-prepend">
      <span class="input-group-text" id='noteTag'>#noteTag</span>
    </div>
    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder='Note This...'>
  </div>
</div>


<script>
var noteBuf = new Array();

for(i=1; i<= <?php echo $_POST['sampleNum']; ?> ; i++){
  noteBuf[i] = new Array();
}

var currentSampleNumber;
var kindOf;


$('#noteBar input').on('input', {currentSampleParam: currentSampleNumber}, function(event){
  // var i = event.data.currentSampleParam;
  noteBuf[currentSampleNumber][kindOf] = $('#noteBar input').val();
  console.log('event: input('+ noteBuf[currentSampleNumber] + ') notebuf[' + currentSampleNumber + ']');
});

$('#topSampleNum').on('click', function(){
  $('#topSampleNum').removeClass('slidedownEffect');
  $('#topSampleNum').offsetWidth = $('#topSampleNum').offsetWidth;
  $('#topSampleNum').addClass('slidedownEffect');
  /*
  if( $('#sampleNumberList' ).hasClass('active') === true ){
  $('#sampleNumberList').removeClass('active');
}
else {
$('#sampleNumberList').addClass('active');
}
*/
// $('#sampleNumberList').css('display', 'block');
// $('#sampleNumberList').css('max-height', '100%');

console.log("topFloatBar is clicked");
});

function notebarDisplay(identifier, samplenumber, risingOrDown){

  var noteTagText;

  switch(identifier){
    case 1:
    noteTagText = '#Flavor #';
    break;
    case 2:
    noteTagText = '#Balance #';
    break;
    case 3:
    noteTagText = '#Roasting #';
    break;
    case 4:
    noteTagText = '#Acidity #';
    break;
    case 5:
    noteTagText = '#Sweetness #';
    break;
    case 6:
    noteTagText = '#Aroma #';
    break;
    case 7:
    noteTagText = '#Aftertaste #';
    break;
    case 8:
    noteTagText = '#Uniformity #';
    break;
    case 9:
    noteTagText = '#Clean Up #';
    break;
    case 10:
    noteTagText = '#Defect #';
    break;
    case 11:
    noteTagText = '#Body #';
    break;
  }
  kindOf = identifier; // kind of coffee taste.
  $('#noteTag').text(noteTagText + samplenumber);
  $('#noteBar input').val(noteBuf[samplenumber][kindOf]);
  $('#noteBar').show();
}

$(document).ready(function() {
  // 기존 css에서 플로팅 배너 위치(top)값을 가져와 저장한다.
  var bottomFloatBarHeight = parseInt($(".bottomFloatBar").css('height'));
  var windowHeight = window.innerHeight;
  var halfWindowHeight = windowHeight / 2;

  var noteBarPos = windowHeight - bottomFloatBarHeight;
  //var topBenchMarkDisplayPos = parseInt(noteBarPos - windowHeight * 4 / 5 - 10);
  //var bottomBenchMarkDisplayPos = parseInt(noteBarPos - windowHeight / 5 + 10);
  var halfBenchMarkDisplayPos = parseInt(noteBarPos-windowHeight / 2);

  var sampleNumObj = [];
  var sampleNumPos = [];



  for(var i=1; i<=<?php echo $_POST['sampleNum']; ?>; i++){
    //sampleNumObj[i] = $("sampleNumberIndex_"+i);
    //sampleNumPos[i] = parseInt(sampleNumObj[i].offset().top);
    sampleNumPos[i] = parseInt($("#sampleNumberIndex_"+i).offset().top) - parseInt($("#sampleNumberIndex_"+i).css('height'));
    $('#sampleNumberList').append('<h5>#'+i  +'</h5>');
  }

  var prevIdentifier = 1;
  var prevScrollTop = 0;
  $(window).scroll(function() {
    // 현재 스크롤 위치를 가져온다.

    var scrollTop = $(window).scrollTop();
    var noteBarPos = scrollTop + windowHeight - bottomFloatBarHeight;
    var topFloatBarPos = scrollTop;
//    var topBenchMarkPos = parseInt(noteBarPos - windowHeight * 4 / 5);
//    var bottomBenchMarkPos = parseInt(noteBarPos - windowHeight / 5);
    var halfBenchMarkPos = parseInt(noteBarPos - halfWindowHeight);

    var risingOrDown =  prevScrollTop - scrollTop; // risingOrDown 이 양수면 올라가는중 음수면 내려가는중

    // 애니메이션 없이 바로 따라감
    //$("#noteBar").css('top', noteBarPos + 'px');
    // $("#topBenchMark").css('top', topBenchMarkDisplayPos  + 'px');
    // $("#bottomBenchMark").css('top', bottomBenchMarkDisplayPos + 'px');
    $("#halfBenchMarkPos").css('top', halfBenchMarkDisplayPos + 'px');

    var i =1;
    while( topFloatBarPos >= sampleNumPos[i++]); // find min sampleNumberIndex greater than topFloatBarPos
    // console.log("topFloatBarPos: "+ topFloatBarPos +" i: "+ (i-2));

    if( i-2 <= 0 )
    i = 3;

    currentSampleNumber = i-2;
    $('#mainNumber').html('#'+ currentSampleNumber);

    var identifier = -1;
    if( halfBenchMarkPos < parseInt($('#flavor_value_'+ currentSampleNumber).offset().top) ){
      identifier = 1;
    } else if( halfBenchMarkPos < parseInt($('#balance_value_' + currentSampleNumber).offset().top) ) {
      identifier = 2;
    } else if( halfBenchMarkPos < parseInt($('#roasting_value_' + currentSampleNumber).offset().top) ) {
      identifier = 3;
    } else if( halfBenchMarkPos < parseInt($('#acidity_value_' + currentSampleNumber).offset().top) ) {
      identifier = 4;
    } else if( halfBenchMarkPos < parseInt($('#sweetness_value_' + currentSampleNumber).offset().top) ) {
      identifier = 5;
    } else if( halfBenchMarkPos < parseInt($('#aroma_value_' + currentSampleNumber).offset().top) ) {
      identifier = 6;
    } else if( halfBenchMarkPos < parseInt($('#aftertaste_value_' + currentSampleNumber).offset().top) ) {
      identifier = 7;
    } else if( halfBenchMarkPos < parseInt($('#uniformity_value_' + currentSampleNumber).offset().top) ) {
      identifier = 8;
    } else if( halfBenchMarkPos < parseInt($('#cleanup_value_' + currentSampleNumber).offset().top) ) {
      identifier = 9;
    } else if( halfBenchMarkPos < parseInt($('#defect_value_' + currentSampleNumber).offset().top) ) {
      identifier = 10;
    } else if( halfBenchMarkPos < parseInt($('#body_value_' + currentSampleNumber).offset().top) ) {
      identifier = 11;
    }
    else {
      $('#noteBar input').val('');
      $('#noteBar').hide();
    }
    /*
    // 화면 중앙 이하로 내려가면 해당 엘리먼트에 대한 note 정보를 띄우고자 함.
    if( topBenchMarkPos < parseInt($('#flavor_value_'+ currentSampleNumber).offset().top) && bottomBenchMarkPos > parseInt($('#flavor_value_'+ currentSampleNumber).offset().top)){
      identifier = 1;
    } else if( topBenchMarkPos < parseInt($('#balance_value_' + currentSampleNumber).offset().top) && bottomBenchMarkPos > parseInt($('#balance_value_'+ currentSampleNumber).offset().top)) {
      identifier = 2;
    } else if( topBenchMarkPos < parseInt($('#roasting_value_' + currentSampleNumber).offset().top) && bottomBenchMarkPos > parseInt($('#roasting_value_'+ currentSampleNumber).offset().top)) {
      identifier = 3;
    } else if( topBenchMarkPos < parseInt($('#acidity_value_' + currentSampleNumber).offset().top) && bottomBenchMarkPos > parseInt($('#acidity_value_'+ currentSampleNumber).offset().top)) {
      identifier = 4;
    } else if( topBenchMarkPos < parseInt($('#sweetness_value_' + currentSampleNumber).offset().top) && bottomBenchMarkPos > parseInt($('#sweetness_value_'+ currentSampleNumber).offset().top)) {
      identifier = 5;
    } else if( topBenchMarkPos < parseInt($('#aroma_value_' + currentSampleNumber).offset().top) && bottomBenchMarkPos > parseInt($('#aroma_value_'+ currentSampleNumber).offset().top)) {
      identifier = 6;
    } else if( topBenchMarkPos < parseInt($('#aftertaste_value_' + currentSampleNumber).offset().top) && bottomBenchMarkPos > parseInt($('#aftertaste_value_'+ currentSampleNumber).offset().top)) {
      identifier = 7;
    } else if( topBenchMarkPos < parseInt($('#uniformity_value_' + currentSampleNumber).offset().top) && bottomBenchMarkPos > parseInt($('#uniformity_value_'+ currentSampleNumber).offset().top)) {
      identifier = 8;
    } else if( topBenchMarkPos < parseInt($('#cleanup_value_' + currentSampleNumber).offset().top) && bottomBenchMarkPos > parseInt($('#cleanup_value_'+ currentSampleNumber).offset().top)) {
      identifier = 9;
    } else if( topBenchMarkPos < parseInt($('#defect_value_' + currentSampleNumber).offset().top) && bottomBenchMarkPos > parseInt($('#defect_value_'+ currentSampleNumber).offset().top)) {
      identifier = 10;
    } else if( topBenchMarkPos < parseInt($('#body_value_' + currentSampleNumber).offset().top) && bottomBenchMarkPos > parseInt($('#body_value_'+ currentSampleNumber).offset().top)) {
      identifier = 11;
    }
    else {
      $('#noteBar input').val('');
      $('#noteBar').hide();
    }
*/

    if ( identifier == -1 ) {
      identifier = prevIdentifier;
    } else {
      prevIdentifier = identifier;
    }


    notebarDisplay(identifier, currentSampleNumber);

  }).scroll();
});

<?php
$i = 1;
while($i <= $_POST['sampleNum']){

  ?>
  $("#flavor_<?php echo $i;?>").on('input', function() {
    $("#flavor_value_<?php echo $i;?>").html( $(this).val() );
  });
  $("#balance_<?php echo $i;?>").on('input', function() {
    $("#balance_value_<?php echo $i;?>").html( $(this).val() );
  });
  $("#roasting_<?php echo $i;?>").on('input', function() {
    $("#roasting_value_<?php echo $i;?>").html( $(this).val() );
  });
  $("#acidity_<?php echo $i;?>").on('input', function() {
    $("#acidity_value_<?php echo $i;?>").html( $(this).val() );
  });
  $("#sweetness_<?php echo $i;?>").on('input', function() {
    $("#sweetness_value_<?php echo $i;?>").html( $(this).val() );
  });
  $("#aroma_<?php echo $i;?>").on('input', function() {
    $("#aroma_value_<?php echo $i;?>").html( $(this).val() );
  });

  $("#aftertaste_<?php echo $i;?>").on('input', function() {
    $("#aftertaste_value_<?php echo $i;?>").html( $(this).val() );
  });
  $("#uniformity_<?php echo $i;?>").on('input', function() {
    $("#uniformity_value_<?php echo $i;?>").html( $(this).val() );
  });
  $("#cleanup_<?php echo $i;?>").on('input', function() {
    $("#cleanup_value_<?php echo $i;?>").html( $(this).val() );
  });
  $("#defect_<?php echo $i;?>").on('input', function() {
    $("#defect_value_<?php echo $i;?>").html( $(this).val() );
  });
  $("#body_<?php echo $i;?>").on('input', function() {
    $("#body_value_<?php echo $i;?>").html( $(this).val() );
  });
  $("#evaluation_form_<?php echo $i;?>").submit(function(evt) {
    // username 유효성 검사
    <?php
    if(isset($_SESSION['username']))
    {
      echo 'return true;';
    } else {
      echo '
      evt.preventDefault();
      alert("please use this after login.");
      ';
    }
    ?>
  });


  <?php
  $i = $i+1;
}
?>


</script>
</body>





</html>
