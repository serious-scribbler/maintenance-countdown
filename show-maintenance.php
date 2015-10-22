<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' ); ?>
<!DOCTYPE html>
<html lang="en">
<!--
Copyright (C) 2015 Phil Niehus

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
	<head>
		<link rel="stylesheet" href="<?php echo((plugins_url( 'styles/'.(esc_attr( get_option('mcount-design', 'greyout') )).'.css', __FILE__ ))); ?>">
		<!--countdown.js was written by Stephen M. McKamey and is licensed under The MIT License.
		Read the included 'Countdown.js LICENSE' or visit http://countdownjs.org for mor information.-->
		<script src="<?php echo(plugins_url( 'middleware/countdown.js', __FILE__ )); ?>" type="text/javascript"></script>
		<script type="text/javascript">
			//Change this values to your selected date
			var ending = "<?php echo esc_attr( get_option('mcount-enddate') ); ?>";
			var endtime = "<?php echo esc_attr( get_option('mcount-endtime') ); ?>";
			ending = ending.split("-");
			endtime = endtime.split(":");
			var year = 2018;
			var month = 10;
			var day = 1;
			var hour = 0;
			var minute = 0;
			var second = 0;
			if(ending.length == 3){
				day = ending[0];
				month = ending[1];
				year = ending[2];
			}
			if(endtime.length == 2){
				hour = endtime[0];
				minute = endtime[1];
			}
			//This function updates the time display every 200ms
			setInterval(function display(){
				var text = (countdown(new Date(year, month-1, day, hour, minute, second), null, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS));
				document.getElementById("days").innerHTML = text.days;
				document.getElementById("hours").innerHTML = text.hours;
				document.getElementById("minutes").innerHTML = text.minutes;
				document.getElementById("seconds").innerHTML = text.seconds;
			}, 200);
		</script>
		<title>
			<?php echo esc_attr( get_option('mcount-title', 'Maintenance') ); ?>
		</title>
	</head>
	<body>
		<div class="wrapper">
			<div class="giant">
				<?php echo esc_attr( get_option('mcount-bigtext', 'Down for maintenance') ); ?>
			</div>
			<p>
				<?php echo esc_attr( get_option('mcount-maintenanceinfo', 'This website is currently undergoing scheduled maintenance.') ); ?><br>
				<b><?php echo esc_attr( get_option('mcount-onlinemessage', 'Check back in:') ); ?></b>
			</p>
			<table>
				<tr>
					<td>
						<div class="frame">
							<div class="center">
								<span id="days"></span><br>
								<b>DAYS</b>
							</div>
						</div>
					</td>
					<td>
						<div class="frame">
							<div class="center">
								<span id="hours"></span><br>
								<b>HOURS</b>
							</div>
						</div>
					</td>
					<td>
						<div class="frame">
							<div class="center">
								<span id="minutes"></span><br>
								<b>MINUTES</b>
							</div>
						</div>
					</td>
					<td>
						<div class="frame">
							<div class="center">
								<span id="seconds"></span><br>
								<b>SECONDS</b>
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div id="footer">
			
		</div>
	</body>
</html>