<DOCTYPE html>
<html>
	<!-- Code developed following tutorial from the Code Player tutorial:
	http://thecodeplayer.com/walkthrough/make-a-stopwatch-using-css3-without-images-or-javascript -->
	<head>
		<link rel="stylesheet" href="css/chronometer.css"/>
	</head>
	<body>
		<!-- The core logic is a simple div containing numbers being moved
		using keyframe animations -->


		<div class="container">
			<input id="start" name="controls" type="radio" />
			<input id="stop" name="controls" type="radio" />
			<input id="reset" name="controls" type="radio" />
			
			<div class="timer">
				<!-- Numbers are wrapped in a cell to display only one digit -->
				<div class="cell">
					<!-- The numbers have space between them so that they
					can be aligned vertically easily by reducing the container width -->
					<div class="numbers tenhour moveten">0 1 2 3 4 5 6 7 8 9</div>
				</div>
				<div class="cell">
					<div class="numbers hour moveten">0 1 2 3 4 5 6 7 8 9</div>
				</div>
				<div class="cell divider"><div class="numbers">:</div></div>
				<div class="cell">
					<div class="numbers tenminute movesix">0 1 2 3 4 5</div>
				</div>
				<div class="cell">
					<div class="numbers minute moveten">0 1 2 3 4 5 6 7 8 9</div>
				</div>
				<div class="cell divider"><div class="numbers">:</div></div>
				<div class="cell">
					<div class="numbers tensecond movesix">0 1 2 3 4 5</div>
				</div>
				<div class="cell">
					<div class="numbers second moveten">0 1 2 3 4 5 6 7 8 9</div>
				</div>

				<div class="cell divider"><div class="numbers">.</div></div>
				<div class="cell">
					<div class="numbers hundredmilisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
				</div>
				<div class="cell">
					<div class="numbers tenmilisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
				</div>
				<div class="cell">
					<div class="numbers milisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
				</div>
			</div>
			<!-- Lables for the controls -->
			<div id="timer_controls">
				<label for="start">Start</label>
				<label for="stop">Stop</label>
				<label for="reset">Reset</label>
			</div>
		</div>

		<!-- Prefixfree allows the use of CSS without taking care of browser specific prefixes
		http://leaverou.github.com/prefixfree/  (MIT License)-->
		<script src="js/prefixfree.js" type="text/javascript"></script>
	</body>
</html>