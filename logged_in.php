<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="logged_in.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<!-- FAVICON: --------------------------------------------------------------------- -->

		<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
	<!-- ----------------------------------------------------------------------------- -->
</head>
<body>
	<div class="parent">
		<div class="kart grid_content_box">
<!--
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1785.3541287048874!2d10.115636952248126!3d63.41803898318914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNjPCsDI1JzA0LjkiTiAxMMKwMDcnMDQuMiJF!5e0!3m2!1sno!2sno!4v1583403156656!5m2!1sno!2sno" width="100%" height="100%" frameborder="0" style="border:0;""></iframe>
-->	
			<div id="map">
                <div id="map_div" style="width: 100%; height: 100%;"></div>
            </div>
        </div>

		<div class="facts grid_content_box">
            <h3>Valgte turbiner mellom <span id="sel_dates_from">01.01.2020</span> og <span id="sel_dates_to">31.12.2020</span>:</h3>
            <p class="facts_text">
                Flest treff registrert på turbin nr.: <span id="most_hit_turbine_selected"></span><br>
                Totalt antall treff registrert: <span id="total_hits_selected"></span><br>
            </p>
            <h3>Alle turbiner mellom <span id="all_dates_from">01.01.2020</span> og <span id="all_dates_to">31.12.2020</span>:</h3>
            <p class="facts_text">
			    Flest treff registrert på turbin nr.: <span id="most_hit_turbine_all"></span><br>
                Totalt antall treff registrert: <span id="total_hits_all"></span><br>
            </p>
		</div>

		<div class="graf grid_content_box">
    <div id="curve_chart" style="width: 100%; height: 100%;"></div>

		</div>

		<div class="grafvalg grid_content_box">
			<h3>Grafvalg</h3>
			<div class="dropdown" onmouseover="flipArrowUp()" onmouseout="flipArrowDown()">
				<button class="dropbtn">Graftype <i id="drop_down_arrow" class="arrow down"></i></button>
				<div class="dropdown-content">
					<a href="#" onclick="updateGraphType('histogram')">Histogram</a>
					<a href="#" onclick="updateGraphType('line-all')">Samlet Linje</a>
					<a href="#" onclick="updateGraphType('line-separate')">Separate Linjer</a>
					<a href="#" onclick="updateGraphType('sector')">Sektor</a>
			  	</div>
			</div> 
		</div>

		<div class="tabell grid_content_box">
			<?php
			// Credentials:
			$host="localhost";
			$dbname = "birdbase";
			$username = "elsys";
			$pwd = "aksel";

			// Establish connection to database:
			$mysqli = new mysqli($host, $username, $pwd, $dbname);

			if ($mysqli->connect_errno) {
				printf("Connect failed: %s\n", $mysqli->connect_error);
				exit();
			}

			if($result = $mysqli->query("SELECT * FROM minitest")){
				$num_fields = mysqli_num_fields($result);

				echo "<h3>Alle treff: {$table}</h3>";
				echo '<div class="table_container"><table border=1><tr>';
                echo '<thead>';
				// Print table headers.
				for($i=0; $i<$num_fields;$i++)
				{
					$field = mysqli_fetch_field($result);
					if($i > 1){
						//echo "<th>{$field->name}</th>";
					}
				}
                echo "<th>Turbin</th><th>Tidspunkt</th>";
				echo "</tr>\n";
                echo '</thead><tbody id="data_table">';
				// Print rows:
				while($row = mysqli_fetch_row($result))
				{
					echo "<tr class='allDataTable'>";
					$hacky_fix = 0;
					foreach($row as $cell){
						if($hacky_fix == 2 || $hacky_fix == 3){
							echo "<td>$cell</td>";
						}
						$hacky_fix++;	
						if($hacky_fix > 3){
							$hacky_fix = 0;
						}
						
					}
					echo "</tr>";
				}
				echo '</tbody></table></div>';
				$result->close();
			}
			?>
            <script>
            // Fiks 'alltid' verdier for Facts-panelet
            let list_tmp = document.querySelectorAll(".allDataTable");
            function mode(){
                let arr = [];
                list_tmp.forEach((el) => {
                    arr.push(el.childNodes[0].innerHTML);
                });
                return arr.sort((a,b) =>
                    arr.filter(v => v===a).length 
                    - arr.filter(v => v===b).length).pop();
            }
           
            top.allmosthitturbine = mode();
            top.alltotalhits = list_tmp.length;
			</script>
		</div>

        <div class="datoer grid_content_box">
            <div class="datoboks">
                <span class="date_title">Dato fra</span><br>
                <input id="date_from" class="date_choose" type="date"></input>
            </div>
            <div class="datoboks">
                <span class="date_title">Dato til</span><br>
                <input id="date_to" class="date_choose" type="date"></input>
            </div>
		</div>

		<div class="turbin_liste grid_content_box">
			<h3>Valgte turbiner</h3>
            <div id="table_div" class="map_table" ></div>
		</div>

        <div class="pynt">
            <img src="img/bubonyere.png">
        </div>
	</div>
	<!--<script type="text/javascript" src="map_script.js"></script>-->
	<script type="text/javascript" src="date_script.js"></script>
	<script type="text/javascript" src="settings_script.js"></script>
	<script type="text/javascript" src="list_script.js"></script>
	<script type="text/javascript" src="graph_script.js"></script>
	<script type="text/javascript" src="map_api_script.js"></script>
	<script type="text/javascript" src="facts_script.js"></script>
    <script type="text/javascript" src="alert_script.js"></script>
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHN59_Mygwxtd8HHZQ_703GOl0bqLvyWQ&callback=initMap">
    </script>
</body>

</html>
