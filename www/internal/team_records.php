<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Team 4516 Scouting</title>
    <meta name="description" content="Team 4516 Scouting">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  </head>
  <body>
    <nav>
      <div class="nav-wrapper grey lighten-4">
        <a href="/internal/index.html" class="brand-logo"><img width="110" src="/images/logo1.png"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons md-dark">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="/internal/programming.html">Programming</a></li>
          <li><a href="/internal/build.html">Build</a></li>
          <li><a href="/internal/design.html">Design</a></li>
          <li><a href="/internal/scouting.html">Scouting</a></li>
          <li><a href="/internal/outreach.html">Outreach</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="/internal/programming.html">Programming</a></li>
          <li><a href="/internal/build.html">Build</a></li>
          <li><a href="/internal/design.html">Design</a></li>
          <li><a href="/internal/scouting.html">Scouting</a></li>
          <li><a href="/internal/outreach.html">Outreach</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col s12">
          <?php
            $username = '~~USERNAME~~';
            $password = '~~PASSWORD~~';
            $dbname = 'scouting';
            $servername = 'localhost';

            # Testing stuff
            echo "<p>Using team number: ";
            if ($_POST['useTeamNumber'] == "on") echo "TRUE</p>";
            else echo "FALSE</p>";

            echo "<p>Using team name: ";
            if ($_POST['useTeamName'] == "on") echo "TRUE</p>";
            else echo "FALSE</p>";

            echo "<p>Using start date: ";
            if ($_POST['useStartDate'] == "on") echo "TRUE</p>";
            else echo "FALSE</p>";

            echo "<p>Using end date: ";
            if ($_POST['useEndDate'] == "on") echo "TRUE</p>";
            else echo "FALSE</p>";

            echo "<p>Using max entries: ";
            if ($_POST['useMaxEntries'] == "on") echo "TRUE</p>";
            else echo "FALSE</p>";
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <p class="center-align">
            <a class="waves-effect waves-light green lighten-1 btn" href="/internal/scouting_history.html">Search again</a>
          </p>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){
          $(".button-collapse").sideNav();
      });
    </script>
  </body>
  <footer class="page-footer green lighten-2">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Hyperion</h5>
          <p class="grey-text text-lighten-4">Footer content to come</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Links</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        &copy; 2014 Copyright Blessed Trinity Robotics
        <a class="grey-text text-lighten-4 right" href="/index.html">Main site</a>
      </div>
    </div>
  </footer>
</html>
