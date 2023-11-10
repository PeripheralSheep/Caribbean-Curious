<!--Just base code so you only have to copy and paste the beginning structure each time-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- viewport w3 link: https://www.w3schools.com/css/css_rwd_viewport.asp -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suggestions</title>
    <!-- Name to Page  -->
    <link rel="stylesheet" href="suggestions.css">
    <link rel="stylesheet" href="../fonts.css">
    <!-- Change href to relevant css -->
    <!-- Add Navicon somewhere -->
    <link rel="apple-touch-icon" sizes="180x180" href="../Favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../Favicon/favicon-16x16.png">
    <link rel="manifest" href="../Favicon/site.webmanifest">
  </head>
<body>

  <?php
  //Runs on PHP 7.4, NOT PHP8.0+. Use PHPMailer upgraded , -v 6.2+
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  require('phpmailer/PHPMailerAutoload.php');
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPDebug = 0;
  $mail->SMTPAuth = TRUE;
  $mail->SMTPSecure = "tls";
  $mail->Port     = 587;
  $mail->Username = "caribbeancurious@gmail.com";
  $mail->Password = "axjrifzhrwkrxbnc";
  $mail->Host     = "smtp.gmail.com";
  $mail->Mailer   = "smtp";
  $mail->SetFrom("caribbeancurious@gmail.com", $_POST['your_name']);

  //$mail->addBCC("bccaddress@ccdomain.com", "Some BCC Name");


  $mail->AddReplyTo($_POST['email'], $_POST['your_name']);
  $mail->AddAddress("caribbeancurious@gmail.com");
  $mail->AddAddress($_POST['email']);
  $mail->Subject = "A Suggestion for Caribbean Curious";
  $mail->WordWrap   = 80;
  $content = "Dear " . $_POST['your_name'] .",<br><br>Thank you for this suggestion: <br><br>\"". $_POST["suggestion_box"] ."\"<br><br>Best Regards,<br><br>" . "Caribbean Curious";
  $mail->MsgHTML($content);
  $mail->IsHTML(true);
  if(!$mail->Send())
  echo "<script> alert('There was an issue with the service.'); </script>";
  else
  echo "<script> alert('Suggestion Sent'); </script>";
  }
  ?>

    <div style="padding:0;"class="row" id ="BannerBar">
        <div id="logosection" class="col-3">
          <a  href="../index.html"><img id="logo" src="../Caribbean_Curious.png" alt=""></a>
        </div>
        <div style="padding:0;" id="optionsection"class="col-9">
          <div id="optionscontainer">
            <div id="mobileMenu">
              <button id ="buttonMobile"type="button" name="button" onclick="openClose()">
                <div class="hamburger"></div>
                <div class="hamburger"></div>
                <div class="hamburger"></div>
              </button>
            </div>
            <ul id = "options">
              <li class ="option"><a href="../Suggestions/suggestions.html">SUGGESTIONS</a></li>
              <li class ="option"><a href="../About Us/AboutUs.html">ABOUT US</a></li>
              <li class ="option"><a href="../IslandList/IslandList.html">ISLAND LIST</a></li>
              <li id="OddOne"class ="option"><a href="../InteractiveMap/InteractiveMap.html">INTERACTIVE MAP</a></li>
            </ul>
          </div>
        </div>
    </div>
      <!-- Copy from Line 50 to line 65 to add more content options-->
      <div class="row">
        <h1 class="CenterText">Your Suggestions</h1>
      </div>
      <form class="info" action="suggestions.php" method="POST">
        <div class="row">
          <div class="col-12">
              Name: <input type="text" name="your_name" placeholder="Enter Your Name" >
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            Select your gender:<br>
            <input type="radio" name="gender" id="female" value="Female">
            <label for="female">Female</label><br>
            <input type="radio" name="gender" id="male" value="Male">
            <label for="male">Male</label><br>
            <input type="radio" name="gender" id="non_Binary" value="Non_Binary">
            <label for="non_binary">Non-Binary</label><br>
            <input type="radio"name="gender" id="other" value="Other">
            <label for="other">Other</label><br>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
              Country of Origin: <input type="text" name="country" placeholder="What country are you from?">
          </div>

        </div>
        <div class="row">
          <div class="col-12">
            Country of Comment: <input type="text" name="country" placeholder="What country are you commenting on?">
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <label for="email">Your Email</label>
            <input type="email" name="email" id="email" value="">
          </div>
        </div>
        <div  style="padding-bottom:0px;"class="row">
          <div style="padding-bottom:0px;" class="col-12">
            <label for="suggestion">Your Suggestion:</label>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
              <textarea style="border:1px solid black;"name="suggestion_box" rows="8" cols="80" name="suggestion" id="suggestion" class ="suggestion"value=""></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <input type="submit" value="Submit">
          </div>
        </div>
      </form>
    <script src="suggestions.js"></script>
  </body>
</html>
