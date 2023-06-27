<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Riki Guntara</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <style media="screen">
    body,
    html {
      height: 100%;
      margin: 0;
      font: 400 15px/1.8 "Lato", sans-serif;
      color: #777;
    }

    .bgimg-1,
    .bgimg-2,
    .bgimg-3 {
      position: relative;
      opacity: 0.75;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .bgimg-1 {
      background-image: url("bg_compress.jpg");
      height: 100%;
    }

    .caption {
      position: absolute;
      left: 0;
      top: 50%;
      width: 100%;
      text-align: center;
      color: #000;
    }

    .caption span.border {
      background-color: #111;
      color: #fff;
      padding: 20px;
      font-size: 25px;
      letter-spacing: 10px;

    }

    h3 {
      letter-spacing: 5px;
      text-transform: uppercase;
      font: 20px "Lato", sans-serif;
      color: #111;
    }
  </style>
</head>

<body>
  <div class="bgimg-1">
    <div class="caption">
      <span class="border">COMING SOON!!!</span><br><br>
      <span class="border"><span id="days"></span> days | <span id="hours"></span> Hours | <span id="minutes"></span> Minutes | <span id="seconds"></span> Seconds</span>
    </div>
  </div>
</body>
<script>
  (function() {
    const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

    //I'm adding this section so I don't have to keep updating this pen every year :-)
    //remove this if you don't need it
    let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = 2070,
      nextYear = yyyy + 1,
      dayMonth = "04/19/",
      birthday = dayMonth + yyyy;

    today = mm + "/" + dd + "/" + yyyy;
    if (today > birthday) {
      birthday = dayMonth + nextYear;
    }
    //end

    const countDown = new Date(birthday).getTime(),
      x = setInterval(function() {

        const now = new Date().getTime(),
          distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
          document.getElementById("headline").innerText = "It's my birthday!";
          document.getElementById("countdown").style.display = "none";
          document.getElementById("content").style.display = "block";
          clearInterval(x);
        }
        //seconds
      }, 0)
  }());
</script>

</html>