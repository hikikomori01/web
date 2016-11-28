<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Booking Page</title>
  <!-- Compiled and minified CSS -->
  <script src='lib/moment.min.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified JavaScript -->
  <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    Materialize.updateTextFields();
  });
  $(document).ready(function() {
    $('select').material_select();
  });
  $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
  $(document).ready(function() {
    defaultDate: moment().format('YYYY-MM-DD HH:mm:ss');
  });


  </script>
  <link rel="stylesheet" href="css/mycss.css">
  <style media="screen">
  body {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
}

main {
  flex: 1 0 auto;
}
  </style>
</head>
<body class="grey lighten-3">
<form method="post" action="save.php">
  <nav>
    <div class="nav-wrapper orange accent-4">
      <a href="index.php" class="brand-logo">&nbsp&nbspFIBO Visiting Reservation</span></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      </ul>
    </div>
  </nav>
  <div class="section"></div>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <ul class="collection with-header">
          <li class="collection-header orange accent-3 white-text"><h5><i class="material-icons">assignment_turned_in</i> Booking Information</h5></li>
          <form action="" method="POST">
            <li class="collection-item grey darken-4">
              <div class="row">
                <div class="col s12">
                  <h6 class="header-input-booking">Gender</h6>
                  <div class="col s12 m6 l6 input-field">
                    <input name="gender" type="radio" id="male" value="Mr." checked/>
                    <label for="male">Mr.</label>
                    <input name="gender" type="radio" id="female" value="Mrs./Ms."/>
                    <label for="female">Mrs./Ms.</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <h6 class="header-input-booking">Full Name</h6>
                  <div class="col s12 m6 l6 input-field">
                    <input id="first_name" name="first_name" type="text" class="validate" required>
                    <label for="first_name">First Name</label>
                  </div>
                  <div class="col s12 m6 l6 input-field">
                    <input id="last_name" name="last_name" type="text" class="validate" required>
                    <label for="last_name">Last Name</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <h6 class="header-input-booking">Age</h6>
                  <div class="col s12 m6 l6 input-field">
                    <input id="age" name="age" type="text" class="validate" required>
                    <label for="age">Age</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col s12">
                  <h6 class="header-input-booking">Contact</h6>
                  <div class="input-field col s12 m6 l6">
                    <input id="icon_telephone" name="icon_telephone" type="tel" class="validate" required>
                    <label for="icon_telephone" data-error="Wrong Number">Telephone</label>
                  </div>
                  <div class="input-field col s12 m6 l6">
                    <input id="email" name="email" type="email" class="validate" required>
                    <label for="email" data-error="Wrong Email" data-success="right">Email</label>
                  </div>
                </div>
              </div>
            </li>
            <li class="collection-item grey darken-4">
              <div class="row">
                <div class="col s12">
                  <h6 class="header-input-booking">Amount</h6>
                  <div class="input-field col s8 m8 l8">
                    <p class="range-field">
                      <input type="range" id="amount" name="amount" min="1" max="20" onchange="updateTextInput(this.value);"/>
                    </p>
                  </div>
                  <div class="input-field col s4 m4 l4">
                    <script type="text/javascript">
                    function updateTextInput(val) {
                      document.getElementById('display-amount').value = val+" person(s)";
                    }
                    </script>
                    <input type="text" id="display-amount" readonly value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <h6 class="header-input-booking">Date/Time</h6>
                  <div class="col s12 m6 l6 input-field">
                    <input name="visitday" type="date" value="YYYY-MM-DD" class="datepicker">
                  </div>
                  <div class="col s12 m6 l6 input-field">
                    <input name="timeOption" type="radio" id="morning" value="morning" checked/>
                    <label for="morning">8:00 - 12:00</label>
                    <input name="timeOption" type="radio" id="afternoon" value="afternoon"/>
                    <label for="afternoon">13:00 - 16:30</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col s12">
                  <h6 class="header-input-booking">Visit By and Purpose</h6>
                  <div class="col s12 m6 l6 input-field">
                    <select name = "visiter">
                        <option value="Student" selected>Student</option>
                        <option value="Parent">Parent</option>
                        <option value="Indurtry">Industry</option>
                        <option value="Other">Other</option>
                    </select>
                    <input name="purpose[]" type="radio" id="normal" class="validate" value="normal" checked/>
                    <label for="normal">Normal</label>
                    <input name="purpose[]" type="radio" id="specify" class="validate" value="specify"/>
                    <label for="specify">Specific</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <h6 class="header-input-booking">Specific Selected (You can choose more than 1)</h6>
                  <div class="col s12 m6 l6 input-field">
                    <p>
                      <input name="purpose[]" type="checkbox" id="bearlab" class="validate" value="Bear Lab" />
                      <label for="bearlab">Bear Lab</label>
                    </p>
                    <p>
                      <input name="purpose[]" type="checkbox" id="cemt" class="validate" value="CEMT" />
                      <label for="cemt">CEMT</label>
                    </p>
                    <p>
                      <input name="purpose[]" type="checkbox" id="hci" class="validate" value="HCI Lab"/>
                      <label for="hci">HCI Lab</label>
                    </p>
                    <p>
                      <input name="purpose[]" type="checkbox" id="iam" class="validate" value="I AM Excellent Center"/>
                      <label for="iam">I AM Excellent Center</label>
                    </p>
                    <p>
                      <input name="purpose[]" type="checkbox" id="micro" class="validate" value="Micro Robotics Lab"/>
                      <label for="micro">Micro Robotics Lab</label>
                    </p>
                    <p>
                      <input name="purpose[]" type="checkbox" id="mint" class="validate" value="MINT Lab"/>
                      <label for="mint">MINT Lab</label>
                    </p>
                    <p>
                      <input name="purpose[]" type="checkbox" id="sea" class="validate" value="SEA Lab"/>
                      <label for="sea">SEA Lab</label>
                    </p>
                    <p>
                      <input name="purpose[]" type="checkbox" id="thavida" class="validate" value="THAVIDA Lab"/>
                      <label for="thavida">THAVIDA Lab</label>
                    </p>
                    <p>
                      <input name="purpose[]" type="checkbox" id="samed" class="validate" value="SAMed Lab"/>
                      <label for="samed">SAMeD Lab</label>
                    </p>
                    <p>
                      <input name="purpose[]" type="checkbox" id="uvax" class="validate" value="UVAX"/>
                      <label for="uvax">UVAX</label>
                    </p>
                    <p>
                      <input name="purpose[]" type="checkbox" id="idea" class="validate" value="Idea Lab"/>
                      <label for="idea">Idea Lab</label>
                    </p>
                  </div>
                </div>
              </div>
            </li>
            <li class="collection-item grey darken-4">
              <div class="section"></div>
              <div class="row">
                <div class="col s12">
                  <div class="center">
                    <button class="waves-effect waves-light btn booking-submit" type="submit" name="submit" value="Save">Submit</button>
                  </div>
                </div>
              </div>
              <div class="section"></div>
            </li>
          </form>
        </ul>
      </div>
    </div>
  </div>
  <footer class="page-footer orange accent-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">CONTACT US</h5>
                <p class="grey-text text-lighten-4">Tel: +(66) 0-2470-9339, 0-2470-9691</p>
                <p class="grey-text text-lighten-4">Fax: +(66) 0-2470-9703</p>
                <p class="grey-text text-lighten-4">Email: information@fibo.kmutt.ac.th</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="http://fibo.kmutt.ac.th/">Fibo Main Page</a></li>
                  <li><a class="grey-text text-lighten-3" href="http://www.fibo.kmutt.ac.th/fiboweb2015/research/">Reseach</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            </div>
          </div>
        </footer>
</form>
</body>
</html>
