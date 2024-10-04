<?php 
  require 'link.php' ;
  ob_start('ob_gzhandler');
  date_default_timezone_set('Asia/Kolkata');
  setcookie("utm_medium", isset($_GET['utm_medium']) ? $_GET['utm_medium'] : 'Direct', strtotime(date('Y-m-d H:i:s'))+1200);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>VJ Palladio | 3, 4 & 4XL BHK APARTMENTS | At Balewadi Central, Pune</title>
  
  <link href="style.css" rel="stylesheet">
  <link href="icon.css" rel="icons">
  <!-- Favicon -->
  <link href="img/favicon.png" rel="icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">


    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owl.theme.default.min.css">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <script>
    // ****  UTM Tracking Code - Abrar Khan *****
    function getParameterByName(name) {
      name = name.replace(/[\[\]]/g, "\\$&");
      var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(window.location.href);
      if (!results) return null;
      if (!results[2]) return '';
      return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    window.onload = function () {
      var utmSource = getParameterByName('utm_source');
      var utmMedium = getParameterByName('utm_medium');
      var utmCampaign = getParameterByName('utm_campaign');
      var utmTerm = getParameterByName('utm_term');
      var utmContent = getParameterByName('utm_content');

      if (utmSource) document.querySelector('input[name="utm_source"]').value = utmSource;
      if (utmMedium) document.querySelector('input[name="utm_medium"]').value = utmMedium;
      if (utmCampaign) document.querySelector('input[name="utm_campaign"]').value = utmCampaign;
      if (utmTerm) document.querySelector('input[name="utm_term"]').value = utmTerm;
      if (utmContent) document.querySelector('input[name="utm_content"]').value = utmContent;
    }
    // END
  </script>


  <!-- Google Tag Manager -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-M3CLGPTL');
  </script>
  <!-- End Google Tag Manager -->


  
</head>

<body>
  <canvas class="grey darken-4" id="canvas" width="" height=""></canvas>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      overflow: hidden;
      background: #e4e4e4;
    }

    img {
      height: 70px;
      width: 100%;
      object-fit: contain;
    }

    #canvas {
      width: 100%;
      height: 100%;
    }

    .text span {
      font-weight: 500;
    }

    .btn {
      margin: 40px auto 0;
      width: 200px;
      position: relative;
    }

    .text span.complete {
      font-weight: bold;
      margin: 19px 0 7px;
      display: inline-block;
      font-size: 30px;
    }

    .btn::before {
      content: "";
      margin: 40px auto 0;
      width: 73px;
      background-image: url(images/degree.png);
      position: absolute;
      left: -55px;
      bottom: -5px;
      height: 50px;
      background-size: 70px;
      background-repeat: no-repeat;
    }

    .text {
      font-size: 24px;
      text-align: center;
      font-weight: 100;
      color: #000;
    }

    .tankyou {
      max-width: 700px;
      margin: auto;
      position: absolute;
      transform: translate(-50%, -50%);
      left: 50%;
      top: 50%;
    }

    .btn a {
      background: #EB731E;
      color: #000;
      text-decoration: none;
      padding: 9px 40px;
      border-radius: 50px;
      text-transform: uppercase;
      font-size: 19px;
      font-weight: bold;
    }

    .btn a:hover {
      background: #1a1a1a;
    }

    @media screen and (max-width:480px) {
      .text span.complete {
        font-size: 26px;
        line-height: 25px;
      }

      .text {
        font-size: 15px;
        text-align: center;
        font-weight: 100;
        line-height: 22px;
      }
    }

    .text2 {
      font-size: 20px !important;
      font-weight: 700;
      color: #000;
    }
  </style>

  <div class="tankyou text-center">
    <div class="logo mb-5"><img src="images/img/logo.webp" alt="logo" loading="lazy"> </div>
    <div class="logo"><img src="images/img/thankyou.png" alt="Congratulations"> </div>

    <div class="text">Thank you for choosing <b>VJ Palladio</b> We’ll get back to you soon with the best properties in
      Pune.</span><br><br>
    </div>
    <p class="text2">"You'll be redirected to the Ghar Pravesh website in just <span id="countdown">5</span> seconds to
      explore more amazing properties."</p>


    <div class="btn"></div>
  </div>

  <script>
    var canvas = document.getElementById('canvas');
    var c = canvas.getContext('2d');

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    var mouse = {
      x: undefined,
      y: undefined
    }

    window.addEventListener('mousemove', function (e) {
      mouse.x = e.x;
      mouse.y = e.y;
    });

    window.addEventListener('resize', function () {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    });

    function getRandomInt(max) {
      return Math.floor(Math.random() * Math.floor(max));
    }

    function Circle() {
      this.radius = getRandomInt(10);
      this.originalSize = this.radius;
      this.x = Math.random() * (innerWidth - this.radius * 2) + this.radius;
      this.y = Math.random() * (innerHeight - this.radius * 2) + this.radius;
      this.gradient = Math.random();
      this.color = 'rgba(' + getRandomInt(255) + ',' + getRandomInt(255) + ',' + getRandomInt(255) + ',' + this
        .gradient + ')';
      this.xVelocity = 5 * (Math.random() - Math.random());
      this.yVelocity = 5 * (Math.random() - Math.random());
      this.draw = function () {
        c.beginPath();
        c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
        c.strokeStyle = this.color;
        c.stroke();
        c.fillStyle = this.color;
        c.fill();
        this.update();
      }
      this.update = function () {
        if (this.x + this.radius > innerWidth || this.x - this.radius < 0) {
          this.xVelocity = -this.xVelocity;
        }
        if (this.y + this.radius > innerHeight || this.y - this.radius < 0) {
          this.yVelocity = -this.yVelocity;
        }
        this.x += this.xVelocity;
        this.y += this.yVelocity;

        if (mouse.x - this.x < 50 && mouse.x - this.x > -50 &&
          mouse.y - this.y < 10 && mouse.y - this.y > -50) {
          if (this.radius < 100) {
            this.radius += 2;
          }
        } else if (this.radius !== this.originalSize) {
          this.radius -= 2;
        }
      }
    }

    var circleArray = [];

    for (var i = 0; i < 30; i++) {
      circleArray.push(new Circle());
    }

    function animate() {
      c.clearRect(0, 0, innerWidth, innerHeight);
      for (var i = 0; i < circleArray.length; i++) {
        circleArray[i].draw();
      }
      requestAnimationFrame(animate);
    }
    animate();

    // Redirect to another URL after 5 seconds
    // setTimeout(function () {
    //   window.location.href = "https://portal.amity.edu/NewOnlineForm/Candidate/SignIn";  
    // }, 5000);

    function countdown() {
      var seconds = 5;
      var countdownElement = document.getElementById('countdown');

      var interval = setInterval(function () {
        if (seconds > 0) {
          seconds--;
          countdownElement.textContent = seconds;
        } else {
          clearInterval(interval);
          window.location = "<?= LINK;?>";
        }
      }, 1000);
    }

    window.onload = countdown;
  </script>

  <script type="text/javascript">
    function ZFLead() {}
    ZFLead.utmPValObj = ZFLead.utmPValObj || {};

    ZFLead.utmPNameArr = new Array('utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content');

    ZFLead.prototype.zfutm_getLeadVal = function (pName) {
      var qStr = '';
      try {
        qStr = window.top.location.search.substring(1);
      } catch (e) {
        qStr = '';
      }
      var pNameTemp = pName + '=';
      var pValue = '';
      if (typeof qStr !== "undefined" && qStr !== null && qStr.length > 0) {
        var begin = qStr.indexOf(pNameTemp);
        if (begin != -1) {
          begin = begin + pNameTemp.length;
          end = qStr.indexOf('&', begin);
          if (end == -1) {
            end = qStr.length;
          }
          pValue = decodeURIComponent(qStr.substring(begin, end));
        }
      }
      if (pValue == undefined || pValue == '') {
        pValue = this.zfutm_gC(pName);
      }
      return pValue;
    };

    ZFLead.prototype.zfutm_sC = function (paramName, path, domain, secure) {
      var value = ZFLead.utmPValObj[paramName];
      if (typeof value !== "undefined" && value !== null) {
        var cookieStr = paramName + "=" + encodeURIComponent(value);
        var exdate = new Date();
        exdate.setDate(exdate.getDate() + 7);
        cookieStr += "; expires=" + exdate.toGMTString();
        cookieStr += "; path=/";
        if (domain) {
          cookieStr += "; domain=" + encodeURIComponent(domain);
        }
        if (secure) {
          cookieStr += "; secure";
        }
        document.cookie = cookieStr;
      }
    };

    ZFLead.prototype.zfutm_ini = function () {
      for (var i = 0; i < ZFLead.utmPNameArr.length; i++) {
        var zf_pN = ZFLead.utmPNameArr[i];
        var zf_pV = this.zfutm_getLeadVal(zf_pN);
        if (typeof zf_pV !== "undefined" && zf_pV !== null) {
          ZFLead.utmPValObj[zf_pN] = zf_pV;
        }
      }
      for (var pkey in ZFLead.utmPValObj) {
        this.zfutm_sC(pkey);
      }
    };
    ZFLead.prototype.zfutm_gC = function (cookieName) {
      var cookieArr = document.cookie.split('; ');
      for (var i = 0; i < cookieArr.length; i++) {
        var cookieVals = cookieArr[i].split('=');
        if (cookieVals[0] === cookieName && cookieVals[1]) {
          return decodeURIComponent(cookieVals[1]);
        }
      }
    };
    ZFLead.prototype.zfutm_gC_enc = function (cookieName) {
      var cookieArr = document.cookie.split('; ');
      for (var i = 0; i < cookieArr.length; i++) {
        var cookieVals = cookieArr[i].split('=');
        if (cookieVals[0] === cookieName && cookieVals[1]) {
          return cookieVals[1];
        }
      }
    };
    ZFLead.prototype.zfutm_iframeSprt = function () {
      var zf_frame = document.getElementsByTagName("iframe");
      for (var i = 0; i < zf_frame.length; ++i) {
        if ((zf_frame[i].src).indexOf('formperma') > 0) {
          var zf_src = zf_frame[i].src;
          for (var prmIdx = 0; prmIdx < ZFLead.utmPNameArr.length; prmIdx++) {
            var utmPm = ZFLead.utmPNameArr[prmIdx];
            var utmVal = this.zfutm_gC_enc(ZFLead.utmPNameArr[prmIdx]);
            if (typeof utmVal !== "undefined") {
              if (zf_src.indexOf('?') > 0) {
                zf_src = zf_src + '&' + utmPm + '=' + utmVal;
              } else {
                zf_src = zf_src + '?' + utmPm + '=' + utmVal;
              }
            }
          }
          if (zf_frame[i].src.length < zf_src.length) {
            zf_frame[i].src = zf_src;
          }
        }
      }
    };
    ZFLead.prototype.zfutm_DHtmlSprt = function () {
      var zf_formsArr = document.forms;
      for (var frmInd = 0; frmInd < zf_formsArr.length; frmInd++) {
        var zf_form_act = zf_formsArr[frmInd].action;
        if (zf_form_act && zf_form_act.indexOf('formperma') > 0) {
          for (var prmIdx = 0; prmIdx < ZFLead.utmPNameArr.length; prmIdx++) {
            var utmPm = ZFLead.utmPNameArr[prmIdx];
            var utmVal = this.zfutm_gC(ZFLead.utmPNameArr[prmIdx]);
            if (typeof utmVal !== "undefined") {
              var fieldObj = zf_formsArr[frmInd][utmPm];
              if (fieldObj) {
                fieldObj.value = utmVal;
              }
            }
          }
        }
      }
    };
    ZFLead.prototype.zfutm_jsEmbedSprt = function (id) {
      document.getElementById('zforms_iframe_id').removeAttribute("onload");
      var jsEmbdFrm = document.getElementById("zforms_iframe_id");
      var embdSrc = jsEmbdFrm.src;
      for (var prmIdx = 0; prmIdx < ZFLead.utmPNameArr.length; prmIdx++) {
        var utmPm = ZFLead.utmPNameArr[prmIdx];
        var utmVal = this.zfutm_gC_enc(ZFLead.utmPNameArr[prmIdx]);
        if (typeof utmVal !== "undefined") {
          if (embdSrc.indexOf('?') > 0) {
            embdSrc = embdSrc + '&' + utmPm + '=' + utmVal;
          } else {
            embdSrc = embdSrc + '?' + utmPm + '=' + utmVal;
          }
        }
      }
      jsEmbdFrm.src = embdSrc;
    };
    var zfutm_zfLead = new ZFLead();
    zfutm_zfLead.zfutm_ini();
    if (document.readyState == "complete") {
      zfutm_zfLead.zfutm_iframeSprt();
      zfutm_zfLead.zfutm_DHtmlSprt();
    } else {
      window.addEventListener('load', function () {
        zfutm_zfLead.zfutm_iframeSprt();
        zfutm_zfLead.zfutm_DHtmlSprt();
      }, false);
    }
  </script>

</body>

</html>