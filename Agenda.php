<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Coat_of_arms_of_West_Java.svg/1200px-Coat_of_arms_of_West_Java.svg.png">
	<title>Agenda</title>

	<style>
		.container {
			margin-top: 2%;
		}

		hr {
			background-color: #015579;
			padding: 1px;
		}

		#time {
			float: right;
		}

		.sticky {
			position: -webkit-sticky;
			position: sticky;
			top: 0;
			background-color: white;
		}
	</style>
</head>

<body onload="Time()">
	<div class="container">
		<div class="sticky">
			<div class="row">
				<div class="col-sm-6">
					<h3>Agenda Diskominfo</h3>
				</div>
				<div class="col-sm-6">
					<h3 id="time"></h3>
				</div>
			</div>
			<hr>
		</div>
		<div class="row">
			<div class="col">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Tanggal</th>
							<th>Waktu</th>
							<th>Acara</th>
							<th>Tempat</th>
							<th>Pelaksana</th>
						</tr>
					</thead>
					<tbody>
						<form action="<?php echo base_url(); ?>index.php/FullCalendar/search" method="post">
							<div class="container">
								<td id="col1" name="z" colspan="5"></td>
								<tr></tr>
								<?php foreach ($tanggalan1 as $row) : ?>
									<td>
										<?php echo "<td>" . $row["time_start"] . "-" . $row["time_ends"] . "<td>" . $row["isi_agenda"] . "<td>" . $row["judul_agenda"] . "<td>" . $row["penanggung_jawab"]  ?>
									</td>
									<tr>
									<?php endforeach; ?>
							</div>
						</form>
						<form action="<?php echo base_url(); ?>index.php/FullCalendar/index" method="post">
							<div class="container">
								<td id="col2" colspan="5"></td>
								<input type="hidden" name="col2"></input>
								<tr></tr>
								<?php foreach ($tanggalan2 as $row) : ?>
									<td>
										<?php echo "<td>" . $row["time_start"] . "-" . $row["time_ends"] . "<td>" . $row["isi_agenda"] . "<td>" . $row["judul_agenda"] . "<td>" . $row["penanggung_jawab"]  ?>
									</td>
									<tr>
									<?php endforeach; ?>
							</div>
						</form>
						<form action="<?php echo base_url(); ?>index.php/FullCalendar/index" method="post">
							<div class="container">
								<td id="col3" colspan="5"></td>
								<input type="hidden" name="col2" <tr></tr>
								<?php foreach ($tanggalan3 as $row) : ?>
									<td>
										<?php echo "<td>" . $row["time_start"] . "-" . $row["time_ends"] . "<td>" . $row["isi_agenda"] . "<td>" . $row["judul_agenda"] . "<td>" . $row["penanggung_jawab"]  ?>
									</td>
									<tr>
									<?php endforeach; ?>
							</div>
						</form>
						<form action="<?php echo base_url(); ?>index.php/FullCalendar/index" method="post">
							<div class="container">
								<td id="col4" colspan="5"></td>
								<input type="hidden" name="col2" <tr></tr>
								<?php foreach ($tanggalan4 as $row) : ?>
									<td>
										<?php echo "<td>" . $row["time_start"] . "-" . $row["time_ends"] . "<td>" . $row["isi_agenda"] . "<td>" . $row["judul_agenda"] . "<td>" . $row["penanggung_jawab"]  ?>
									</td>
									<tr>
									<?php endforeach; ?>
							</div>
						</form>
						<form action="<?php echo base_url(); ?>index.php/FullCalendar/index" method="post">
							<div class="container">
								<td id="col5" colspan="5"></td>
								<input type="hidden" name="col2" <tr></tr>
								<?php foreach ($tanggalan5 as $row) : ?>
									<td>
										<?php echo "<td>" . $row["time_start"] . "-" . $row["time_ends"] . "<td>" . $row["isi_agenda"] . "<td>" . $row["judul_agenda"] . "<td>" . $row["penanggung_jawab"]  ?>
									</td>
									<tr>
									<?php endforeach; ?>
							</div>
						</form>
						<form action="<?php echo base_url(); ?>index.php/FullCalendar/index" method="post">
							<div class="container">
								<td id="col6" colspan="5"></td>
								<input type="hidden" name="col2" <tr></tr>
								<?php foreach ($tanggalan6 as $row) : ?>
									<td>
										<?php echo "<td>" . $row["time_start"] . "-" . $row["time_ends"] . "<td>" . $row["isi_agenda"] . "<td>" . $row["judul_agenda"] . "<td>" . $row["penanggung_jawab"]  ?>
									</td>
									<tr>
									<?php endforeach; ?>
							</div>
						</form>
						<form action="<?php echo base_url(); ?>index.php/FullCalendar/index" method="post">
							<div class="container">
								<td id="col7" colspan="5"></td>
								<input type="hidden" name="col2" <tr></tr>
								<?php foreach ($tanggalan7 as $row) : ?>
									<td>
										<?php echo "<td>" . $row["time_start"] . "-" . $row["time_ends"] . "<td>" . $row["isi_agenda"] . "<td>" . $row["judul_agenda"] . "<td>" . $row["penanggung_jawab"]  ?>
									</td>
									<tr>
									<?php endforeach; ?>
							</div>
						</form>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script>
		var tglbaru = 0
		var blnbaru = 0
		var thnbaru = 0

		function Time() {
			var realtimeclock = new Date();

			var jam = realtimeclock.getHours();
			var menit = realtimeclock.getMinutes();
			var detik = realtimeclock.getSeconds();
			var tggl = realtimeclock.getDate();
			var bln = realtimeclock.getMonth() + 1;
			var thn = realtimeclock.getFullYear();

			var ampm = (jam < 12) ? "AM" : "PM";

			jam = (jam > 12) ? jam - 12 : jam;

			jam = ("0" + jam).slice(-2);
			menit = ("0" + menit).slice(-2);
			detik = ("0" + detik).slice(-2);

			document.getElementById('time').innerHTML = tggl + "/" + bln + "/" + thn + " - " + jam + " : " + menit + " : " + detik + ' ' + ampm;
			var t = setTimeout(Time, 500);
			var x1 = document.getElementById('col1').innerHTML = tggl + ' ' + bln + ' ' + thn;
			var x2 = document.getElementById('col2').innerHTML = converter(tggl + 1, bln, thn) + ' ' + converterbln(tggl + 1, bln, thn) + ' ' + converterthn(tggl + 1, bln, thn);
			var x3 = document.getElementById('col3').innerHTML = converter(tggl + 2, bln, thn) + ' ' + converterbln(tggl + 2, bln, thn) + ' ' + converterthn(tggl + 2, bln, thn);
			var x4 = document.getElementById('col4').innerHTML = converter(tggl + 3, bln, thn) + ' ' + converterbln(tggl + 3, bln, thn) + ' ' + converterthn(tggl + 3, bln, thn);
			var x5 = document.getElementById('col5').innerHTML = converter(tggl + 4, bln, thn) + ' ' + converterbln(tggl + 4, bln, thn) + ' ' + converterthn(tggl + 4, bln, thn);
			var x6 = document.getElementById('col6').innerHTML = converter(tggl + 5, bln, thn) + ' ' + converterbln(tggl + 5, bln, thn) + ' ' + converterthn(tggl + 5, bln, thn);
			var x7 = document.getElementById('col7').innerHTML = converter(tggl + 6, bln, thn) + ' ' + converterbln(tggl + 6, bln, thn) + ' ' + converterthn(tggl + 6, bln, thn);
			document.getElementsByTagName("col21")[0].innerHTML = tggl + ' ' + bln + ' ' + thn;
			document.getElementById('col1').value = x1;
			document.getElementById('col2').value = x2;
			document.getElementById('col3').value = x3;
			document.getElementById('col4').value = x4;
			document.getElementById('col5').value = x5;
			document.getElementById('col6').value = x6;
			document.getElementById('col7').value = x7;

			// var selectJP = document.getElementById('col1').value;
			// // value of selected option
			// alert(selectJP);
			$(document).ready(function() {
				$.ajax({
					url: "<?php echo base_url(); ?>FullCalendar/index",
					method: "POST",
					data: {
						amount: $("col1").val()
					},
					success: function(res) {
						console.log("ok");
					}
				});
			});
		}

		function getHari(bln, thn) {
			var hari = 0
			if (bln == 2 && thn % 4 == 0) {
				hari = 29
			} else {
				hari = 28
			}

			switch (bln) {
				case 1:
					hari = 31
					break;
				case 3:
					hari = 31
					break;
				case 4:
					hari = 30
					break;
				case 5:
					hari = 31
					break;
				case 6:
					hari = 30
					break;
				case 7:
					hari = 31
					break;
				case 8:
					hari = 31
					break;
				case 9:
					hari = 30
					break;
				case 10:
					hari = 31
					break;
				case 11:
					hari = 30
					break;
				case 12:
					hari = 31
					break;
			}
			return hari
		}

		function converter(tgl, bln, thn) {
			var tglakhr = 0
			var blnakhir = 0
			var thnakhir = 0

			if (bln > 11 && bln == 12 && tgl > getHari(bln, thn)) {
				tglakhr = (tgl - getHari(bln, thn))
				thnakhir = (1 + thn)
				blnakhir = (bln + 1) - 12
			} else if (tgl > getHari(bln, thn)) {
				tglakhr = (tgl - getHari(bln, thn))
				blnakhir = bln + 1
				thnakhir = thn
			} else {
				tglakhr = tgl
				blnakhir = bln
				thnakhir = thn
			}
			return tglakhr
		}

		function converterbln(tgl, bln, thn) {
			var tglakhr = 0
			var blnakhir = 0
			var thnakhir = 0

			if (bln > 11 && bln == 12 && tgl > getHari(bln, thn)) {
				tglakhr = (tgl - getHari(bln, thn))
				thnakhir = (1 + thn)
				blnakhir = (bln + 1) - 12
			} else if (tgl > getHari(bln, thn)) {
				tglakhr = (tgl - getHari(bln, thn))
				blnakhir = bln + 1
				thnakhir = thn
			} else {
				tglakhr = tgl
				blnakhir = bln
				thnakhir = thn
			}
			return blnakhir
		}

		function converterthn(tgl, bln, thn) {
			var tglakhr = 0
			var blnakhir = 0
			var thnakhir = 0

			if (bln > 11 && bln == 12 && tgl > getHari(bln, thn)) {
				tglakhr = (tgl - getHari(bln, thn))
				thnakhir = (1 + thn)
				blnakhir = (bln + 1) - 12
			} else if (tgl > getHari(bln, thn)) {
				tglakhr = (tgl - getHari(bln, thn))
				blnakhir = bln + 1
				thnakhir = thn
			} else {
				tglakhr = tgl
				blnakhir = bln
				thnakhir = thn
			}
			return thnakhir
		}
	</script>
</body>

</html>