<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Health Services and Wealth Office Lorma Colleges Carlatan Campus</title>
  <!-- FONT AWESOME -->
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

</head>
<body>

<style>

  #magic-line {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100px;
  height: 4px;
  background: #fe4902;
}

</style>
<!-- JQUERY -->
<script src="../assets/js/jquery-3.3.1.min.js"></script>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
          </li>
       </ul>
    </form>
  </div>
    </div>
</nav>
    <div style="margin-bottom: 60px;"></div>

<script type="">
  $(function() {
  var $el,
    leftPos,
    newWidth,
    $mainNav = $(".navbar-nav");

  $mainNav.append("<li id='magic-line'></li>");
  var $magicLine = $("#magic-line");

  $magicLine
    .width($(".active").width())
    .css("left", $(".active a").position().left)
    .data("origLeft", $magicLine.position().left)
    .data("origWidth", $magicLine.width());

  $(".navbar-nav li a").hover(
    function() {
      $el = $(this);
      leftPos = $el.position().left;
      newWidth = $el.parent().width();
      $magicLine.stop().animate({
        left: leftPos,
        width: newWidth
      });
    },
    function() {
      $magicLine.stop().animate({
        left: $magicLine.data("origLeft"),
        width: $magicLine.data("origWidth")
      });
    }
  );
});

// Credit: https://css-tricks.com/jquery-magicline-navigation

</script>


