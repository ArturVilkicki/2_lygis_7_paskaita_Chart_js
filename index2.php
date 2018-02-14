<!DOCTYPE html>
<html>
<head>
	<title>Chart JS uzduotys</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
</head>
<body>
	<div style="width: 600px; height: 600px;">
		<canvas id="Skrituline" width="400" height="400"></canvas>
	</div>
	<div style="width: 600px; height: 600px;">
		<canvas id="Linijine" width="400" height="400"></canvas>
	</div>
	<div style="width: 600px; height: 600px;">
		<canvas id="bar" width="400" height="400"></canvas>
	</div>
	<div style="width: 1000px; height: 1000px;">
		<canvas id="top10" width="400" height="400"></canvas>
	</div>
	<p id="sortas1"></p>
<script>

	function hex() {
		var h = "#"+((1<<24)*Math.random()|0).toString(16);
		return h;
	}
	
	var ctx = document.getElementById("Skrituline");
	var ctx = document.getElementById("Skrituline").getContext("2d");
	var masyvas = ["Jovaiša","Graževičius","Kalašnikovas","Stankus","Kukauskas","Malijonis","Maslininkovas","Baranauskas","Vašina","Peleckas","Urnikas","Gulbinas","Ramanauskas","Klimavičius","Valiukaitė","Saveikis","Ivanauskas","Vadopalaitė","Taraila","Švažas","Jucevičius"];
	var masyvas2 = [209.32,305.70,213.87,205.96,226.83,153.80,72.69,170.93,63.80,229.10,187.18,77.54,73.04,107.94,130.67,130.75,140.80,233.36,46.43,116.47,50.25];
	var colors = [];
	
	function sortas(){
		var masyvas3 = [];
		masyvas2.sort();
		for(i = 1;i<=10;i++){
			masyvas3.push(masyvas2[i]);
			
		}
		//masyvas3.push(masyvas2);
		
		
	}

	
	for(i=0;i<masyvas.length;i++){
		colors.push(hex());
	}
	console.log(colors);
	var myChart = new Chart(ctx, {
		type: 'pie',
		data: {
			labels: masyvas,
			datasets: [{
				label: 'TOP100 zaideju reitingas',
				data: masyvas2,
				backgroundColor: colors,
				borderColor: colors,
				borderWidth: 1
			}]
		},
		options: {
			title: {
				display: true,
				text: 'TOP100 zaideju skrituline diagrama'
			}
		}

	});
	var ctx = document.getElementById("Linijine");
	var ctx = document.getElementById("Linijine").getContext("2d");
	var masyvas = ["Jovaiša","Graževičius","Kalašnikovas","Stankus","Kukauskas","Malijonis","Maslininkovas","Baranauskas","Vašina","Peleckas","Urnikas","Gulbinas","Ramanauskas","Klimavičius","Valiukaitė","Saveikis","Ivanauskas","Vadopalaitė","Taraila","Švažas","Jucevičius"];
	var masyvas2 = [209.32,305.70,213.87,205.96,226.83,153.80,72.69,170.93,63.80,229.10,187.18,77.54,73.04,107.94,130.67,130.75,140.80,233.36,46.43,116.47,50.25];
	var colors = [];
	for(i=0;i<masyvas.length;i++){
		colors.push(hex());
	}
	console.log(colors);
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: masyvas,
			datasets: [{
				label: 'TOP100 zaideju reitingas',
				data: masyvas2,
				backgroundColor: colors,
				borderColor: colors,
				borderWidth: 1
			}]
		},
		options: {
			title: {
				display: true,
				text: 'TOP100 zaideju linijine diagrama'
			}
		}
	});
	var ctx = document.getElementById("bar");
	var ctx = document.getElementById("bar").getContext("2d");
	var masyvas = ["Jovaiša","Graževičius","Kalašnikovas","Stankus","Kukauskas","Malijonis","Maslininkovas","Baranauskas","Vašina","Peleckas","Urnikas","Gulbinas","Ramanauskas","Klimavičius","Valiukaitė","Saveikis","Ivanauskas","Vadopalaitė","Taraila","Švažas","Jucevičius"];
	var masyvas2 = [209.32,305.70,213.87,205.96,226.83,153.80,72.69,170.93,63.80,229.10,187.18,77.54,73.04,107.94,130.67,130.75,140.80,233.36,46.43,116.47,50.25];
	var colors = [];
	for(i=0;i<masyvas.length;i++){
		colors.push(hex());
	}
	console.log(colors);
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: masyvas,
			datasets: [{
				label: 'TOP100 zaideju reitingas',
				data: masyvas2,
				backgroundColor: colors,
				borderColor: colors,
				borderWidth: 1
			}]
		},
		options: {
			title: {
				display: true,
				text: 'TOP100 zaideju bar diagrama'
			}
		}
	});
	var ctx = document.getElementById("top10");
	var ctx = document.getElementById("top10").getContext("2d");
	var masyvas4 = ["Tomkevičienė","Levanas","Klimavičiūtė","Ramoška","Ulkė","Graževičius","Žeronas","Plyčius","Viselga","Rimkutė","Kalinkinas"];
	var masyvas3 = ["Vilnius","Druskininkai","Kaunas","Stovykla","Palanga","Dubingiai","Anupriškės"];
	var vilnius = [111.24,171.67,132.88,4.46,3.71,0,50.97,87.33,2.92,44.14,10.38];
	var druskininkai = [19.41,16.21,15.98,15.08,17.20,130.93,5.72,1.24,6.59,0,17.72];
	var kaunas = [29.49,4.92,33.53,153.33,71.05,6.89,2.76,13.08,12.28,6.04,21.57];
	var stovykla = [10.69,0,13.66,0,91.39,0,1.32,13.95,0,50.18,66.60];
	var palanga = [83.43,11.91,17.52,32.23,2.28,129.17,0,0,15.84,20.36,9.33];
	var dubingiai = [62.29,8.35,31.69,16.26,6.64,18.4,55.77,7.12,0,34.73,0];
	var anupriskes = [25.63,0,12.77,34.58,14.79,3.32,49.73,1.86,0,15.95,52.97];
	var colors = [];
	for(i=0;i<masyvas.length;i++){
		colors.push(hex());
	}
	console.log(colors);
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: masyvas4,
			datasets: [{
				label: 'Vilnius',
				data: vilnius,
				backgroundColor: colors,
				borderColor: colors,
				borderWidth: 1
			},
			{
				label: 'Druskininkai',
				data: druskininkai,
				backgroundColor: colors,
				borderColor: colors,
				borderWidth: 1
			},
			{
				label: 'Kaunas',
				data: kaunas,
				backgroundColor: colors,
				borderColor: colors,
				borderWidth: 1	
			},
			{
				label: 'Stovykla',
				data: stovykla,
				backgroundColor: colors,
				borderColor: colors,
				borderWidth: 1
			},
			{
				label: 'Palanga',
				data: palanga,
				backgroundColor: colors,
				borderColor: colors,
				borderWidth: 1
			},
			{
				label: 'Dubingiai',
				data: dubingiai,
				backgroundColor: colors,
				borderColor: colors,
				borderWidth: 1
			},
			{
				label: 'Anupriškės',
				data: anupriskes,
				backgroundColor: colors,
				borderColor: colors,
				borderWidth: 1
			}],
		},
		options: {
			title: {
				display: true,
				text: 'TOP100 zaideju bar diagrama'
			}
		}
	});
</script>
</body>
</html>