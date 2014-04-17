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
include('endheader.php');
include('navbar.php');
?>

<div class="container clear-top" id="wrap">
  <div class="row-fluid">
    <div class="span4">
      <!--Sidebar content-->
      <div class="teacherclass">
      	<table class="table table-striped table-hover">
      		<thead>
      			<tr>
      				<th colspan="2"><h3 style="margin:-10px;">Difficult Topics</h3></th>
      			</tr>
      			<tr>
      				<th style="text-align:right;">% Correct</th>
      				<th>Topic</th>
      			</tr>
      		</thead>
      		<tbody>
      			<?php
					$sql = "SELECT * FROM `angelhack_problem` LIMIT 0, 15";
					$result = mysql_query($sql);
					$i = 0;
					$prev = 0;
					while ($row = mysql_fetch_assoc($result)) {
						$i = max(10, max($i + rand(0,14), $prev));
						$percentage = $i;
						$color = dechex(((100-$percentage)*255)/100).dechex(($percentage*255)/100)."00";
						echo '
						<tr>
						<td style="color:#'.$color.';text-align:right;">'.$percentage.'%</td>
						<td><a href="#">'.$row['title'].'</a></td>
						</tr>
						';
					}
      			?>
      		</tbody>
		</table>
      </div>
    </div>
    <div class="span8">
    	<?php
		$sql = "SELECT * FROM `angelhack_class` JOIN angelhack_class_list ON id = angelhack_class_list.class_id WHERE user_id = '".$_GET['id']."'";
		$result = mysql_query($sql);
		$i = 0;
		while ($row = mysql_fetch_assoc($result)) {
			$classId = $row['id'];
			$className = $row['name'];
			echo '<div class="row">
			<a href="/angelhack/class.php?id='.$classId.'">
    			<div class="teacherclass">

<script type="text/javascript">


function drawVisualization() {
        var data = google.visualization.arrayToDataTable(
[["x", "Robby Mann","Gertrud Jakes", "Sebrina Gordillo", "Ebony Skillern", "Noble Figgins", "Cordie Turberville", "Demetrius Shackleford", "Kyong Hegwood", "Jacqueline Lopiccolo", "Jenise Artist", "Domenica Link", "Jodie Devaughn", "Chanelle Blackford", "Meridith Coss", "Faye Studer", "Stormy Calkins", "Deb Hedrick", "Vinnie Faucette"],
["a",0 ,1 ,71 ,51 ,51 ,6 ,18 ,65 ,2 ,5 ,63 ,35 ,7 ,13 ,28 ,64 ,25 ,74 ],
["a",74 ,40 ,64 ,20 ,34 ,9 ,14 ,42 ,62 ,16 ,64 ,78 ,44 ,53 ,68 ,60 ,12 ,6 ],
["a",46 ,67 ,71 ,79 ,63 ,67 ,20 ,67 ,35 ,70 ,91 ,47 ,89 ,40 ,65 ,34 ,66 ,71 ],
["a",73 ,79 ,37 ,18 ,65 ,36 ,42 ,36 ,68 ,40 ,54 ,17 ,77 ,71 ,23 ,46 ,88 ,26 ],
["a",60 ,70 ,26 ,35 ,40 ,68 ,21 ,64 ,71 ,41 ,60 ,21 ,68 ,34 ,38 ,73 ,41 ,47 ],
["a",60 ,70 ,30 ,67 ,34 ,72 ,57 ,61 ,57 ,46 ,38 ,35 ,44 ,62 ,80 ,34 ,55 ,49 ],
["a",33 ,73 ,79 ,52 ,52 ,36 ,48 ,74 ,70 ,70 ,76 ,33 ,72 ,39 ,44 ,78 ,61 ,31 ],
["a",49 ,23 ,14 ,25 ,32 ,54 ,19 ,26 ,21 ,70 ,88 ,71 ,54 ,58 ,72 ,44 ,38 ,48 ],
["a",47 ,53 ,52 ,60 ,77 ,45 ,65 ,52 ,75 ,70 ,62 ,52 ,41 ,58 ,55 ,75 ,53 ,53 ],
["a",80 ,52 ,58 ,49 ,51 ,91 ,50 ,54 ,77 ,53 ,70 ,60 ,68 ,52 ,76 ,62 ,67 ,65 ],
["a",51 ,47 ,71 ,32 ,58 ,64 ,50 ,61 ,80 ,68 ,64 ,62 ,74 ,77 ,48 ,66 ,51 ,69 ],
["a",61 ,23 ,74 ,57 ,72 ,58 ,63 ,92 ,62 ,80 ,74 ,77 ,57 ,59 ,55 ,68 ,72 ,56 ],
["a",65 ,45 ,69 ,71 ,66 ,72 ,77 ,82 ,76 ,61 ,80 ,73 ,67 ,65 ,60 ,69 ,73 ,71 ],
["a",70 ,71 ,90 ,91 ,74 ,72 ,78 ,99 ,69 ,69 ,75 ,68 ,72 ,76 ,78 ,84 ,96 ,69 ]]
); // Create and draw the visualization.
        new google.visualization.LineChart(document.getElementById("visualization'.$i.'")).
            draw(data, {curveType: "function",
                        height: 300,
                        vAxis: {
                        	viewWindow: {
                        		max: 101,
                        		min: 0
                        	}
						}
                        }
                );
      }
      google.setOnLoadCallback(drawVisualization);
</script>
					<div><h2 style="margin-top:-10px;margin-bottom:-10px;">'.$className.'</h2></div>
					<div><h5>Percent answers correct:</h5></div>
	    			<div id="visualization'.$i.'"></div>
    			</div>
    			</a>
	    	</div>';
	    	$i+=1;
		}
    	?>
    </div>
  </div>
</div>

<?php
include('footer.php');
?>