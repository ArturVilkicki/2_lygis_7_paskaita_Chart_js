<!DOCTYPE html>
<html>
<head>
	<title>Chart JS</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
</head>
<body>
	<div style="width: 400px; height: 400px; float: left;">
		<canvas id="myChart" width="400" height="400"></canvas>
	</div>
	
	<div style="width: 400px; height: 400px; float: left;">
		<canvas id="myChart2" width="100" height="100"></canvas>
	</div>
	<div style="width: 400px; height: 400px; float: left;">
		<canvas id="myChart3" width="100" height="100"></canvas>
	</div>
	<div style="width: 400px; height: 400px; float: left;">
		<canvas id="myChart4" width="100" height="100"></canvas>
	</div>
	<script>
		var ctx = document.getElementById("myChart");
		var ctx = document.getElementById("myChart").getContext("2d");
		//var ctx = $("#myChart");
		//var ctx = "myChart";
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
				datasets: [{
					label: '# of Votes',
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
					'black',
					'green',
					'yellow',
					'red',
					'pink',
					'blue'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});

		var ctx = document.getElementById("myChart2");
		var ctx = document.getElementById("myChart2").getContext("2d");
		//var ctx = $("#myChart");
		//var ctx = "myChart";
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
				datasets: [{
					label: '# of Votes',
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				title: {
					display: true,
					text: 'Skrituline diagrama'
				}
			}
		});
		var ctx = document.getElementById("myChart3");
		var ctx = document.getElementById("myChart3").getContext("2d");
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
				datasets: [{
					label: '# of Votes',
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				title: {
					display: true,
					text: 'Skrituline diagrama doughnut'
				}
			}
		});
		var ctx = document.getElementById("myChart4");
		var ctx = document.getElementById("myChart4").getContext("2d");
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
				datasets: [{
					label: '# of Votes',
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				title: {
					display: true,
					text: 'Linijine diagrama'
				}
			}
		});
	</script>
</body>
</html>