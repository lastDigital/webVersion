<?php include '../../asset/config/header.php';             ?>
<body>
    
<!doctype html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>LastDT • Help Services</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/starter-template/">

    

    

<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>
  <body>
    
<div class="col-lg-8 mx-auto p-3 py-md-5">
  <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
      <img src="../../asset/img/Logo3.jpeg" width="40" height="32" alt="">&nbsp;
      <span class="fs-4">lastDigital Help Services</span>
    </a>
  </header>

  <main>
  <div class="alert alert-info" role="alert">
  <h4 class="alert-heading">Error Code: <?php echo $_GET['ErrorId'];      ?></h4>
  <p><?php 
  
if (@$_GET['ErrorId'] == "err01") {
     echo "It is one of the most common mistakes. You get this error because you entered your Username or Password incorrectly.";
  }
elseif (@$_GET['ErrorId'] == "err02") {
     echo "If the phone number you entered while registering is registered to the system, you will receive this error."; 
}
elseif (@$_GET['ErrorId'] == "err03") {
    echo "If the e-mail address you entered while registering is registered in the system, you will receive this error."; 
}
elseif (@$_GET['ErrorId'] == "err04") {
    echo "If the phone number and e-mail address you entered while signing up are registered in the system, you will get this error."; 
}
elseif (@$_GET['ErrorId'] == "err05") {
     echo "After your balance top up is complete, you may need to re-login in order for your balance to be defined in your account and used. If you get this error, please log out and log back in.";
}
elseif (@$_GET['ErrorId'] == "err06") {
     echo "The reason you are getting this error is because your account has been suspended. Your account is caused by violating the rules or suspending your account from your profile.";
}
elseif (@$_GET['ErrorId'] == "err07") {
     echo "The reason you're getting this error is because your business application was rejected.";
}
elseif (@$_GET['ErrorId'] == "erra0") {
     echo"The most common error is caused by your subscription not being activated. We recommend checking your e-mail address and spam folder.";
}
  ?></p>
  <hr>
  <p class="mb-0">Do you need more help ? <a href="../../supporttickets.php">Create Supoort Ticket</a></p>
</div>
<hr class="col-3 col-md-2 mb-5">

<div class="row g-5">
  <div class="col-md-6">
    <h2>FAQ</h2>
    <p>The most common errors and their solutions</p>
    <ul class="icon-list ps-0">
      <li class="d-flex align-items-start mb-1"><a href="sss" rel="noopener" target="_blank">Review</a></li>
      <li class="text-muted d-flex align-items-start mb-1">taken care of</li>
    </ul>
  </div>

  <div class="col-md-6">
    <h2>Guid</h2>
    <p>Most common error codes and their descriptions</p>
    <ul class="icon-list ps-0">
      <li class="d-flex align-items-start mb-1"><a href="view?ErrorId=err05">Error Code "err05"</a></li>
      <li class="d-flex align-items-start mb-1"><a href="view?ErrorId=err06">Error Code "err06"</a></li>
      <li class="d-flex align-items-start mb-1"><a href="view?ErrorId=erra0">Error Code "erra0"</a></li>
    </ul>
  </div>
</div>
</main>
<footer class="pt-5 my-5 text-muted border-top">
lastDigital | &copy; 2022
</footer>
</div>




    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

      
  </body>
</html>

</body>
</html>