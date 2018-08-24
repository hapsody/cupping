<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <style>
  body {
    background-color: #f05133;
    color: #efaa9d;
    text-align: center;
    font-family: Lato, Tahoma, sans-serif;
  }

  h1, h2, h3, h4, h5 {
    font-weight: normal;
  }

  p a {
    color: #f4f2ca;
    text-decoration: none;
    border-bottom: 1px solid rgba(255,255,255, .2);
    padding: .2em 0;
    -webkit-transition: all .2s linear;
    -moz-transition: all .2s linear;
    transition: all .2s linear;
  }
  p a:hover {
    color: #f4f2ca;
    opacity: .6;
  }

  /* style input field text */
  ::-webkit-input-placeholder {
    color: #f4f2ca;
    opacity: .8;
  }

  /* Input field that looks like a button */
  .email-field {
    width: 160px;
    height: 80px;
    display: inline-block;
    color: #f4f2ca;
    text-align: center;
    background-color: #d8492e;
    padding: 0em 0.3em;
    border: none;
    cursor: pointer;
    outline: none;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    -webkit-transition: all .1s linear;
    -moz-transition: all .1s linear;
    transition: all .1s linear;
    font-size:50px;
  }
  .email-field:hover {
    background-color: #d0432a;
  }

  /* after button is clicked */
  .email-field.active {
    /*width: 300px;*/
    width:80px;
    font-size:1cm;
    outline: none;
    color: #efaa9d;
    text-align: left;
    cursor: inherit;
  }

  /* Email submit button */
  #subscribe-button {
    width: 70px;
    height: 70px;
    border: none;
    text-indent: -9999px;
    opacity: .25;
    background: url(http://helixpowered.com/assets/img/arrow-circle-on-right.svg) no-repeat;
    background-size: 80px;

    -webkit-transition: all .2s linear;
    -moz-transition: all .2s linear;
    transition: all .2s linear;

    cursor: pointer; /* for demo only */

    display: none;
  }
  #subscribe-button:hover {
    opacity: .33;
  }

  #subscribe-button.show {
    display: inline-block;
    background-size: 70px;


  }

  /* vertically position everything for effect */
  @media screen and (min-width: 320px) {

    .middle {
      width: 100%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translateX(-50%) translateY(-50%);
    }

    footer {
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  }
  </style>
</head>
<body>
  <div class="wrapper">
    <div class="middle">
      <form action="index.php" method="post">
        <h2>Input the number of sample that you're gonna 'CUPPING'.</h2>
        <input type="text" value="" name="sampleNum" class="email-field" id="email-field" placeholder="Tell me more"/>
        <input type="submit" value="Subscribe" name="subscribe" id="subscribe-button" class=""/>
      </form>
    </div>
    <footer>
    </footer>

  </div><!-- /wrapper -->

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script>
  // remap jQuery to $
  (function($){

    /* trigger when page is ready */
    $(document).ready(function (){

      // your functions go here
      $('#email-field').click(function() {
        $(this).addClass("active");
        $(this).attr('placeholder','6');
        $(this).val(6);
        $('#subscribe-button').addClass("show");
      });

    });

  })(window.jQuery);
  </script>
</body>
</html>
