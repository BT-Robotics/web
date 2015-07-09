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

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "INSERT INTO Teams (name, number, notes)
            VALUES ('{$_POST['tname']}', '{$_POST['tnumber']}', '{$_POST['tnotes']}')";

            if (mysqli_query($conn, $sql)) {
              echo "<h5 class=\"center-align\">New record successfully created for team \"{$_POST['tname']}\"</h5><br>";
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <p class="center-align">
            <a class="waves-effect waves-light green lighten-1 btn" href="/internal/scouting.html">Add another entry</a>
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
</html>
