<?php session_start();?>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <?php
        if($_SESSION['login'] == 'true') {
          echo '
          <a class="brand" href="/angelhack">Acadee</a>
          <a class="brand" href="#">-</a>
          <a class="brand" href="/angelhack/teacher.php?id='.$_SESSION['id'].'">'.$_SESSION['name'].'</a>
            ';
        } else {
          echo '
          <a class="brand" href="#">Acadee</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
            ';
        }
      ?>

        <!-- Right side -->
        <?php
          if($_SESSION['login'] == 'true') {
            echo '
            <form class="navbar-form pull-right" action="/angelhack/gologout.php" method="post">
              <button type="submit" class="btn">Logout</button>
            </form>
            ';
          } else {
            echo '
            <form class="navbar-form pull-right" action="/angelhack/login.php" method="post">
              <input class="span2" type="text" placeholder="Email" name="username">
              <input class="span2" type="password" placeholder="Password" name="password">
              <button type="submit" class="btn">Sign in</button>
            </form>
            ';
          }
        ?>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>