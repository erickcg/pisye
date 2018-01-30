<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>MLAB - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="/pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="/css/app.css" rel="stylesheet" type="text/css" />
    {{-- <link class="main-stylesheet" href="/pages/css/themes/corporate.css" rel="stylesheet" type="text/css" /> --}}
    <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="/pages/css/windows.chrome.fix.css" />'
    }
    </script>
  </head>
  <body class="fixed-header menu-pin menu-behind">
    <div class="register-container full-height sm-p-t-30">
      <div class="d-flex justify-content-center flex-column full-height ">
        @yield('content')
      </div>
    </div>
    <!-- BEGIN VENDOR JS -->
    <script src="/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/plugins/tether/js/tether.min.js" type="text/javascript"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript" src="/plugins/classie/classie.js"></script>
    <script src="/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <script src="/pages/js/pages.min.js"></script>
    <script>
    $(function()
    {
      $('#form-register').validate()
    })
    </script>
  </body>
</html>