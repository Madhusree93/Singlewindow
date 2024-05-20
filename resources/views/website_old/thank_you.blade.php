<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ICARE</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU !</h1>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">We Will Contact You Shortly .This page will automatically redirect in <span id="countdown">10</span> seconds.</p>
	</div>

	<footer class="site-footer" id="footer">
		<p class="site-footer__fineprint" id="fineprint">Copyright ©2023 | All Rights Reserved</p>
	</footer>


	<script>
    var countdown = 10; // Set the initial countdown time in seconds

    function updateCountdown() {
      var countdownElement = document.getElementById("countdown");
      countdownElement.textContent = countdown;
      countdown--;

      if (countdown < 0) {
        redirectToAnotherPage();
      }
    }

    function redirectToAnotherPage() {
      window.location.href = '{{route('website.home')}}'; // Replace 'https://example.com' with the URL you want to redirect to.
    }

    // Initial call to update countdown, and then call it every second (1000 milliseconds)
    updateCountdown(); // Call it immediately
    var countdownInterval = setInterval(updateCountdown, 1000);

    // Clear the interval when the countdown reaches 0
    setTimeout(function () {
      clearInterval(countdownInterval);
    }, 11000); // This will ensure that the interval is cleared after 30 seconds
  </script>
</body>
</html>