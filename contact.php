<?php session_start();?>

<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>Contact</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-ae362vOLHy2F1EfJtpMbNW0i9pNM1TP2l5O4VGYYiLJKsaejqVWibbP6BSf0UU5i" crossorigin="anonymous">
  <link rel="stylesheet" href="css/general.css">


  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="js/custom.js"></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



  <script>
  $(document).ready(function () {
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
  <!-- head -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php">CUPPING</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Evalutation <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="history.php">History</a>
        </li>
        <li class="nav-item active">
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


  <div class="container marketing">
  <form>
    <fieldset>
      <legend>Legend</legend>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="hapsody@gmail.com">
        </div>
      </div>



      <div class="form-group">
        <label for="exampleTextarea">Example textarea</label>
        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
        <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
      </div>

      <fieldset class="form-group">
        <legend>Checkboxes</legend>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="" checked="">
            Option one is this and that—be sure to include why it's great
          </label>
        </div>
        <div class="form-check disabled">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="" disabled="">
            Option two is disabled
          </label>
        </div>
      </fieldset>
      <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
  </form>
</div> <!-- /. container marketing -->

</body>

</html>
