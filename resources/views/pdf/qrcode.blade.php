<!-- pdf/qrcode.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code PDF</title>
    <style>
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        img {
            width: 50%; /* Adjust the size as needed */
            height: auto;
        }
    </style>
</head>
<body>
    <img src="data:image/png;base64,{{ base64_encode($qrCode) }}" alt="QR Code">
</body>
</html>




<!DOCTYPE html>
<html>

<head>
  <title>W3.CSS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    .mySlides {
      display: none;
    }

    .slide-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      text-align: center;
      font-size: 6em;
      font-weight: bold;
      width: 100%;
    }

    .slide-text2 {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      text-align: center;
      font-size: 60px;
      font-weight: bold;
      width: 100%;
    }

    .slide-text3 {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      text-align: center;
      font-size: 60px;
      font-weight: bold;
      width: 100%;
    }


    .slide-text span {
      color: red;
    }

    .slide-text2 span {
      font-size: 1em;
      color: red;
      font-weight: 900;
      width: 50%;
    }

    .slide-text3 span {
      font-size: 1em;
      color: red;
      font-weight: 900;
      width: 20%;
    }

    .button-container {
      position: absolute;
      bottom: 17em;
      left: 50%;
      transform: translateX(-50%);
    }

    button {
      padding: 10px 20px;
      font-size: 18px;
      background-color: red;
      color: white;
      border: none;
      cursor: pointer;
    }
  </style>
</head>

<body>

  <div class="">
    <div class="mySlides w3-animate-left">
      <img src="assets/img/backgrounds/1.webp" style="width:100%">
      <div class="slide-text">Karibu Tukonekt! <br> <span>The future of Event Registrations!</span></div>
      <div class="button-container">
        <a href="{{ route('create.registers')}}">
          <button>Register Here</button>
        </a>
      </div>
    </div>
    <div class="mySlides w3-animate-right">
      <img src="assets/img/backgrounds/2.webp" style="width:100%">
      <div class="slide-text2">Step into a world where registrations are <br> <span>effortless, and attendance tracking is lightning-fast</span></div>
    </div>
    <div class="mySlides w3-animate-top">
      <img src="assets/img/backgrounds/3.webp" style="width:100%">
      <div class="slide-text3">Embrace the convenience of our QR Code system <br> <span>simplifying your event access like never before. With a single click, your personalized QR Code awaits you.</span></div>
    </div>
    <div class="mySlides w3-animate-bottom">
      <img src="assets/img/backgrounds/4.webp" style="width:100%">
      <div class="slide-text">Let's craft unforgettable event <span>experiences together.</span></div>
    </div>
  </div>

  <script>
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {
        myIndex = 1
      }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 4000); // Change image every 2 seconds
    }
  </script>

</body>

</html>
