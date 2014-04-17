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
 <script src="filter/js/fitrify.js"></script>
 <link rel="stylesheet" href="filter/css/filtrify.css">
 <?php
include('endheader.php');
include('navbar.php');
?>

<div class="container clear-top" id="wrap">
  <div class="row-fluid">
    <div class="span4">
      <h1>Geometry 211 A</h1>
      <p><span class="firstcharacter">T</span>he branch of mathematics that deals with limits and the differentiation and integration of functions of one or more variables.</p>
      <table class="table table-condensed table-bordered">
        <thead>
          <th colspan="3">Students</th>
        </thead>
        <tbody>
          <tr>
            <td><img src="/angelhack/img/students/f1.jpg" width="30px" height="30px" class="img-rounded">&nbsp;&nbsp;<a href="#">Ebony</a></td>
            <td><img src="/angelhack/img/students/m1.jpg" width="30px" height="30px" class="img-rounded">&nbsp;&nbsp;<a href="#">Jodie</a></td>
            <td><img src="/angelhack/img/students/f2.jpg" width="30px" height="30px" class="img-rounded">&nbsp;&nbsp;<a href="#">Meridith</a></td>
          </tr>
          <tr>
            <td><img src="/angelhack/img/students/f3.jpg" width="30px" height="30px" class="img-rounded">&nbsp;&nbsp;<a href="#">Rosetta</a></td>
            <td><img src="/angelhack/img/students/f4.jpg" width="30px" height="30px" class="img-rounded">&nbsp;&nbsp;<a href="#">Vinnie</a></td>
            <td><img src="/angelhack/img/students/m2.jpg" width="30px" height="30px" class="img-rounded">&nbsp;&nbsp;<a href="#">Roy</a>&nbsp;&nbsp;<span class="badge badge-success">+2</span></td>
          </tr>
          <tr>
            <td><img src="/angelhack/img/students/m3.jpg" width="30px" height="30px" class="img-rounded">&nbsp;&nbsp;<a href="#">Zac</a></td>
            <td><img src="/angelhack/img/students/f5.jpg" width="30px" height="30px" class="img-rounded">&nbsp;&nbsp;<a href="#">Edna</a></td>
            <td><img src="/angelhack/img/students/f6.jpg" width="30px" height="30px" class="img-rounded">&nbsp;&nbsp;<a href="#">Kathy</a></td>
          </tr>
        </tbody>

      </table>
    </div>
    <div class="span8">

      <div class="teacherclass">

      <script type="text/javascript">
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Assignment', "Ebony", "Jodie", "Meridith", "Rosetta", "Vinnie", "Roy", "Zac", "Edna", "Kathy"],
          ['Test 1', 90, 86, 100, 84, 94, 73, 93, 99, 25],  
          ['Test 2', 86, 76, 69, 63, 73, 84, 74, 96, 74],
          ['Test 3', 97, 95, 85, 68, 73, 72, 63, 75, 53], 
          ['Test 4', 76, 42, 45, 65, 42, 95, 52, 76, 63]
        ]);

        var options = {
          title: 'Test Performance',
          hAxis: {title: 'Year', titleTextStyle: {color: 'black'}}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    <div id="chart_div" style="height: 300px;"></div>
    </div>
  </div>

  <div class="row">
    <div class="span12" style="text-align:center">
      <h2 class=>Assign Problems</h2>
    </div>
  </div>

  <div class="row-fluid">
    <div class="span4">
      <ul class="nav nav-tabs nav-stacked">
        <li class="nav-header"><h3 style="margin:-10px;">Topics</h3></li>
        <li class="nav-header">Limits</li>
        <li><a href="" class="s1">Definition of a Limit</a></li>
        <li class="nav-header">Differentialtion</li>
        <li><a href="" class="s2">Differentiate e and logs</a></li>
        <li><a href="" class="s3">Differentiate trig functions</a></li>
        <li><a href="" class="s4">Differentiation as a limit</a></li>
        <li class="nav-header">Integration</li>
        <li><a href="" class="s5">Trig Substitution</a></li>
        <li><a href="" class="s6">U Substitution</a></li>
        <li class="nav-header">Series and Sequences</li>
        <li><a href="" class="s7">Taylor Series</a></li>
        <li><a href="" class="s8">Sequences</a></li>
        <li><a href="" class="s9">L'Hopital Rule</a></li>
      </ul>


    </div>   
    <div class="span4 problems">
      <ul class="nav nav-tabs nav-stacked">
        <li class="nav-header"><h3 style="margin:-10px;">Problems</h3></li>
        <li class="nav-header">Sequences</li>
        <li><a href="" class="s12">Sequence involving e and logs</a></li>
        <li><a href="" class="s13">Sequence of trig functions</a></li>
        <li><a href="" class="s14">Sequence of polynomials</a></li>
      </ul>
    </div>

    <div class="span4 listProblems">

      <ul class="nav nav-tabs nav-stacked">
        <li class="nav-header"><h3 style="margin-top:-10px">Student Problems</h3></li>
      </ul>


      <div style="text-align:right;">
        <button type="submit" id="submit" class="btn" style="margin-bottom:10px;margin-right:20px;">Submit</button>
      </div>
      
      <script type="text/javascript">
      $('#submit').click(function() {
        $('.listProblems').append('<div class="alert alert-success">Problems sent to students!</div>');
        return false; 
      });

      $('.s12').click(function() {
        $('.listProblems .nav').append('<li><a href="" class="s9">Sequence involving e and logs</a></li>');
        return false;
      });

      $('.s13').click(function() {
        $('.listProblems .nav').append('<li><a href="" class="s9">Sequence of trig functions</a></li>');
        return false;
      });

      $('.s14').click(function() {
        $('.listProblems .nav').append('<li><a href="" class="s9">Sequence of polynomials</a></li>');
        return false;
      });
      </script>
    </div>
  </div>

</div>

<?php
include('footer.php');
?>