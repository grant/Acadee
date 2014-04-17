<?php
//////////////////////////////////////////////////////////
//INCLUDE THIS FOR EVERY SCRIPT//
//////////////////////////////////////////////////////////
$thisUrl = $_SERVER['SCRIPT_NAME'];
$numDirectory = substr_count($thisUrl,"/")-1;
$parent = '';
for($i = 0;$i<$numDirectory;$i++) {
 $parent .= '../';
}
//////////////////////////////////////////////////////////
//END/////////////////////////////////////////////////
//////////////////////////////////////////////////////////

require $parent . 'angelhack/connect.inc.php';

include('header.php');
?>

<script type="text/javascript">
  $('.dropdown').dropdown();
</script>

<?php
include('endheader.php');
include('navbar.php');
?>

<div class="container clear-top" id="wrap">
<!-- Main hero unit for a primary marketing message or call to action -->
  <div class="hero-unit" style="padding-top:200px;background-image:url('/angelhack/img/cover3.jpg');">
    <h1 style="color:white"><span style="background-color:rgba(55,55,55,0.5);">Imagine</span></h1>
    <p style="color:white;"><span style="background-color:rgba(55,55,55,0.5);">Never needing to grade 20 students' homeworks on a Friday night again.</span></p>
    <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
  </div>

  <!-- Example row of columns -->
  <div class="row">
    <div class="span4" style="text-align:center">
      <h2>Always be updated</h2>
      <p>By assigning questions to your students and viewing all of their answers on the spot during classtime, you can always know whether everyone had understood what you just taught (or whether anyone was sleeping!</p>
    </div>
    <div class="span4" style="text-align:center">
      <h2>Interactivity, everywhere</h2>
      <p>Students can take practices available to improve their scores, which can be tracked and monitored to find that student's progress. If a student encountered a problem not in the syllabus, he or she can just take a photo of the problem and scribble any questions on it!</p>
   </div>
    <div class="span4" style="text-align:center">
      <h2>One-on-one</h2>
      <p>Edit a student's work by highlighting the mistakes the student has made. This way, students can easily check where simple mistakes could have made wrong answers, or notice any trends in the type of mistakes they make.</p>
    </div>
  </div>

  <h2 class='breakline'><span>What people have to say...</span></h2>

  <div class="row-fluid">
    <div class="span8">
      <div class="media">
        <a class="pull-left" href="#">
          <img class="media-object img-rounded" width="100px" height="100px" src="/angelhack/img/students/m3.jpg">
        </a>
        <div class="media-body">
          <h4 class="media-heading">Awesome!</h4>
          Acadee has made the classroom experience so much more enjoyable than I could have ever imagined! I love how I can track my progress and see which areas of Calculus I need to study more. <strong>-Zac</strong>
        </div>
      </div>
      <div class="media">
        <a class="pull-left" href="#">
          <img class="media-object img-rounded" width="100px" height="100px" src="/angelhack/img/students/f3.jpg">
        </a>
        <div class="media-body">
          <h4 class="media-heading">Just what I needed!</h4>
          Before I used to hate going to class. Now Acadee has made the classroom experience so much more enjoyable than I could have ever imagined! I love how I can track my progress and see which areas of Calculus I need to study more. <strong>-Amy</strong>
        </div>
      </div>
    </div>
    <div class="span4">
      <div class="well">
        <h1 style="margin-top:-10px">Dedication to Education</h1>
        <p>Our goal is to provide teachers and students one-on-one help in and out of the classroom. Students can take practices available to improve their scores, which can be tracked and monitored to find that student's progress. If a student encountered a problem not in the syllabus, he or she can just take a photo of the problem and scribble any questions on it!</p>
      </div>
    </div>

  </div>

  <hr>
</div> <!-- /container -->

<?php include('footer.php'); ?>