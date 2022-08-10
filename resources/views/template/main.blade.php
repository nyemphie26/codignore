<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../css/paper-kit.css" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../../demo/demo.css" rel="stylesheet" />

  </head>
  <body>

<!--    navbar come here          -->
<div id="navbar">
  @include('template.navbar')
</div>
<!-- end navbar  -->

<div class="wrapper">
    <!-- content come here     -->
    <div class="container">
      @yield('content')
    </div>
</div>

<!-- Modal Bodies come here -->

<!--   end modal -->

</body>

<!-- Core JS Files -->
<script src="../../js/jquery-3.2.1.js" type="text/javascript"></script>
<script src="../../js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
<script src="../../js/popper.js" type="text/javascript"></script>
<script src="../../js/bootstrap.min.js" type="text/javascript"></script>

<!-- Switches -->
<script src="../../js/bootstrap-switch.min.js"></script>

<!--  Plugins for Slider -->
<script src="../../js/nouislider.js"></script>

<!--  Plugins for DateTimePicker -->
<script src="../../js/moment.min.js"></script>
<script src="../../js/bootstrap-datetimepicker.min.js"></script>

<!--  Paper Kit Initialization snd functons -->
<script src="../../js/paper-kit.js"></script>
</html>