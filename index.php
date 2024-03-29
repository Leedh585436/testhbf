<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device width, initial-scale=1">
	<title>Test tab</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
</head>

<body>
	<div class="row justify-content-center">
		<?php
			$dbcon=mysqli_connect("127.0.0.1","u879184150_lMUf9","ZYWGj9EmVg");
			mysqli_select_db($dbcon,"u879184150_oNWyH");
			$i=0;
			$check_text="select * from ae_cours";
			$run=mysqli_query($dbcon,$check_text);
			while ($res=mysqli_fetch_assoc($run)) {
				$id[$i]=$res['id'];
				$type[$i]=$res['type'];
				$date[$i]=$res['date'];
				$time[$i]=$res['time'];
				$i=$i+1;
			} 
		?>
		<div class="grid-cont3">
			<div class="grid-cursor grid-bord1" id="prev"><img src="images/dog2.png" class="grid-dog" alt="P"></div>
			<div class="grid-default grid-bord1" id="week"></div>
			<div class="grid-cursor grid-bord1" id="next"><img src="images/dog1.png" class="grid-dog" alt="N"></div>
		</div>
		<?php
			echo '1- ';
			for ($i=0; $i < count($id); $i++) { 				
				echo '<div><b>';
					echo $id[$i];
					echo ' - ';
					echo $type[$i];
					echo ' - ';
					echo $date[$i];
					echo ' - ';
					echo $time[$i];
				echo '</b></div>';      
			}
		?>
		<div class="grid-cont1">
			<div class="grid-day grid-default" id="button"></div>
			<div class="grid-day grid-default" id="mon"></div>
			<div class="grid-day grid-default" id="tue"></div>
			<div class="grid-day grid-default" id="wed"></div>
			<div class="grid-day grid-default" id="thu"></div>
			<div class="grid-day grid-default" id="fri"></div>
			<div class="grid-day grid-default" id="sat"></div>
		</div>
		<div class="grid-cont2">
			<div class="grid-9 grid-default">9h - 10h</div>
			<div class="grid-10 grid-default">10h - 11h</div>
			<div class="grid-11 grid-default">11h - 12h</div>
			<div class="grid-12 grid-default">12h - 13h</div>
			<div class="grid-13 grid-default">13h - 14h</div>
			<div class="grid-14 grid-default">14h - 15h</div>
			<div class="grid-15 grid-default">15h - 16h</div>
			<div class="grid-16 grid-default">16h - 17h</div>
			<div class="grid-17 grid-default">17h - 18h</div>
			<div class="grid-18 grid-default">18h - 19h</div>
			<div class="grid-12b"></div>
			<div class="grid-9 grid-cursor grid-bord2" id="mon9"><img src="images/c1d.png" class="grid-dog" alt="cours" id="mon9i"></div>
			<div class="grid-10 grid-cursor grid-bord2" id="mon10"><img src="images/c2c.png" class="grid-dog" alt="cours" id="mon10i"></div>
			<div class="grid-11 grid-cursor grid-bord2" id="mon11"><img src="images/c3i.png" class="grid-dog" alt="cours" id="mon11i"></div>
			<div class="grid-13 grid-cursor grid-bord2" id="mon13"><img src="images/c4d.png" class="grid-dog" alt="cours" id="mon13i"></div>
			<div class="grid-14 grid-cursor grid-bord2" id="mon14"><img src="images/c5d.png" class="grid-dog" alt="cours" id="mon14i"></div>
			<div class="grid-15 grid-cursor grid-bord2" id="mon15"><img src="images/c1d.png" class="grid-dog" alt="cours" id="mon15i"></div>
			<div class="grid-16 grid-cursor grid-bord2" id="mon16"><img src="images/c1d.png" class="grid-dog" alt="cours" id="mon16i"></div>
			<div class="grid-17 grid-cursor grid-bord2" id="mon17"><img src="images/c1d.png" class="grid-dog" alt="cours" id="mon17i"></div>
			<div class="grid-18 grid-cursor grid-bord2" id="mon18"><img src="images/c1d.png" class="grid-dog" alt="cours" id="mon18i"></div>
			<div class="grid-9 grid-cursor grid-bord2" id="tue9"><img src="images/c1d.png" class="grid-dog" alt="cours" id="tue9i"></div>
			<div class="grid-10 grid-cursor grid-bord2" id="tue10"><img src="images/c1d.png" class="grid-dog" alt="cours" id="tue10i"></div>
			<div class="grid-11 grid-cursor grid-bord2" id="tue11"><img src="images/c1d.png" class="grid-dog" alt="cours" id="tue11i"></div>
			<div class="grid-13 grid-cursor grid-bord2" id="tue13"><img src="images/c1d.png" class="grid-dog" alt="cours" id="tue13i"></div>
			<div class="grid-14 grid-cursor grid-bord2" id="tue14"><img src="images/c3c.png" class="grid-dog" alt="cours" id="tue14i"></div>
			<div class="grid-15 grid-cursor grid-bord2" id="tue15"><img src="images/c1d.png" class="grid-dog" alt="cours" id="tue15i"></div>
			<div class="grid-16 grid-cursor grid-bord2" id="tue16"><img src="images/c1d.png" class="grid-dog" alt="cours" id="tue16i"></div>
			<div class="grid-17 grid-cursor grid-bord2" id="tue17"><img src="images/c5i.png" class="grid-dog" alt="cours" id="tue17i"></div>
			<div class="grid-18 grid-cursor grid-bord2" id="tue18"><img src="images/c1d.png" class="grid-dog" alt="cours" id="tue18i"></div>
			<div class="grid-9 grid-cursor grid-bord2" id="wed9"><img src="images/c1d.png" class="grid-dog" alt="cours" id="wed9i"></div>
			<div class="grid-10 grid-cursor grid-bord2" id="wed10"><img src="images/c1d.png" class="grid-dog" alt="cours" id="wed10i"></div>
			<div class="grid-11 grid-cursor grid-bord2" id="wed11"><img src="images/c1d.png" class="grid-dog" alt="cours" id="wed11i"></div>
			<div class="grid-13 grid-cursor grid-bord2" id="wed13"><img src="images/c1d.png" class="grid-dog" alt="cours" id="wed13i"></div>
			<div class="grid-14 grid-cursor grid-bord2" id="wed14"><img src="images/c1d.png" class="grid-dog" alt="cours" id="wed14i"></div>
			<div class="grid-15 grid-cursor grid-bord2" id="wed15"><img src="images/c1d.png" class="grid-dog" alt="cours" id="wed15i"></div>
			<div class="grid-16 grid-cursor grid-bord2" id="wed16"><img src="images/c1d.png" class="grid-dog" alt="cours" id="wed16i"></div>
			<div class="grid-17 grid-cursor grid-bord2" id="wed17"><img src="images/c0.png" class="grid-dog" alt="cours" id="wed17i"></div>
			<div class="grid-18 grid-cursor grid-bord2" id="wed18"><img src="images/c1d.png" class="grid-dog" alt="cours" id="wed18i"></div>
			<div class="grid-9 grid-cursor grid-bord2" id="thu9"><img src="images/c1d.png" class="grid-dog" alt="cours" id="thu9i"></div>
			<div class="grid-10 grid-cursor grid-bord2" id="thu10"><img src="images/c1d.png" class="grid-dog" alt="cours" id="thu10i"></div>
			<div class="grid-11 grid-cursor grid-bord2" id="thu11"><img src="images/c1d.png" class="grid-dog" alt="cours" id="thu11i"></div>
			<div class="grid-13 grid-cursor grid-bord2" id="thu13"><img src="images/c1d.png" class="grid-dog" alt="cours" id="thu13i"></div>
			<div class="grid-14 grid-cursor grid-bord2" id="thu14"><img src="images/c1d.png" class="grid-dog" alt="cours" id="thu14i"></div>
			<div class="grid-15 grid-cursor grid-bord2" id="thu15"><img src="images/c1d.png" class="grid-dog" alt="cours" id="thu15i"></div>
			<div class="grid-16 grid-cursor grid-bord2" id="thu16"><img src="images/c1d.png" class="grid-dog" alt="cours" id="thu16i"></div>
			<div class="grid-17 grid-cursor grid-bord2" id="thu17"><img src="images/c1d.png" class="grid-dog" alt="cours" id="thu17i"></div>
			<div class="grid-18 grid-cursor grid-bord2" id="thu18"><img src="images/c1d.png" class="grid-dog" alt="cours" id="thu18i"></div>
			<div class="grid-9 grid-cursor grid-bord2" id="fri9"><img src="images/c1d.png" class="grid-dog" alt="cours" id="fri9i"></div>
			<div class="grid-10 grid-cursor grid-bord2" id="fri10"><img src="images/c1d.png" class="grid-dog" alt="cours" id="fri10i"></div>
			<div class="grid-11 grid-cursor grid-bord2" id="fri11"><img src="images/c1d.png" class="grid-dog" alt="cours" id="fri11i"></div>
			<div class="grid-13 grid-cursor grid-bord2" id="fri13"><img src="images/c1d.png" class="grid-dog" alt="cours" id="fri13i"></div>
			<div class="grid-14 grid-cursor grid-bord2" id="fri14"><img src="images/c1d.png" class="grid-dog" alt="cours" id="fri14i"></div>
			<div class="grid-15 grid-cursor grid-bord2" id="fri15"><img src="images/c1d.png" class="grid-dog" alt="cours" id="fri15i"></div>
			<div class="grid-16 grid-cursor grid-bord2" id="fri16"><img src="images/c1d.png" class="grid-dog" alt="cours" id="fri16i"></div>
			<div class="grid-17 grid-cursor grid-bord2" id="fri17"><img src="images/c1d.png" class="grid-dog" alt="cours" id="fri17i"></div>
			<div class="grid-18 grid-cursor grid-bord2" id="fri18"><img src="images/c1d.png" class="grid-dog" alt="cours" id="fri18i"></div>
			<div class="grid-9 grid-cursor grid-bord2" id="sat9"><img src="images/c1d.png" class="grid-dog" alt="cours" id="sat9i"></div>
			<div class="grid-10 grid-cursor grid-bord2" id="sat10"><img src="images/c1d.png" class="grid-dog" alt="cours" id="sat10i"></div>
			<div class="grid-11 grid-cursor grid-bord2" id="sat11"><img src="images/c1d.png" class="grid-dog" alt="cours" id="sat11i"></div>
			<div class="grid-13 grid-cursor grid-bord2" id="sat13"><img src="images/c1d.png" class="grid-dog" alt="cours" id="sat13i"></div>
			<div class="grid-14 grid-cursor grid-bord2" id="sat14"><img src="images/c1d.png" class="grid-dog" alt="cours" id="sat14i"></div>
			<div class="grid-15 grid-cursor grid-bord2" id="sat15"><img src="images/c1d.png" class="grid-dog" alt="cours" id="sat15i"></div>
			<div class="grid-16 grid-cursor grid-bord2" id="sat16"><img src="images/c1d.png" class="grid-dog" alt="cours" id="sat16i"></div>
			<div class="grid-17 grid-cursor grid-bord2" id="sat17"><img src="images/c1d.png" class="grid-dog" alt="cours" id="sat17i"></div>
			<div class="grid-18 grid-cursor grid-bord2" id="sat18"><img src="images/c1d.png" class="grid-dog" alt="cours" id="sat18i"></div>
		</div>
	</div>
</body>
</html>

<script>
	var days = ['mon','tue','wed','thu','fri','sat'];
	var days_text = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'];
	var today = new Date();
	var today_day = today.getDay();

	var hours = [9,10,11,13,14,15,16,17,18];
	var cours_test = ['c1','c2','c3','c4','c5'];
	var cours_test2 = ['Treibball','Agility','Flyball','Hooper','Education'];
	var cours_col = ['red','navy','green','purple'];
	var niveau = ['d','i','c'];
	var niveau2 = ['Débutant','Intermédiaire','Concours'];


	var selected = new Array(54);
	for (var i = 0; i < selected.length; i++) {
		selected[i] = 0;
	}
	$(document).ready(function(){
		set_tab();
			
		document.getElementById('mon9').addEventListener("click",changecol);
		document.getElementById('mon10').addEventListener("click",changecol);
		document.getElementById('mon11').addEventListener("click",changecol);
		document.getElementById('mon13').addEventListener("click",changecol);
		document.getElementById('mon14').addEventListener("click",changecol);
		document.getElementById('mon15').addEventListener("click",changecol);
		document.getElementById('mon16').addEventListener("click",changecol);
		document.getElementById('mon17').addEventListener("click",changecol);
		document.getElementById('mon18').addEventListener("click",changecol);
		document.getElementById('tue9').addEventListener("click",changecol);
		document.getElementById('tue10').addEventListener("click",changecol);
		document.getElementById('tue11').addEventListener("click",changecol);
		document.getElementById('tue13').addEventListener("click",changecol);
		document.getElementById('tue14').addEventListener("click",changecol);
		document.getElementById('tue15').addEventListener("click",changecol);
		document.getElementById('tue16').addEventListener("click",changecol);
		document.getElementById('tue17').addEventListener("click",changecol);
		document.getElementById('tue18').addEventListener("click",changecol);
		document.getElementById('wed9').addEventListener("click",changecol);
		document.getElementById('wed10').addEventListener("click",changecol);
		document.getElementById('wed11').addEventListener("click",changecol);
		document.getElementById('wed13').addEventListener("click",changecol);
		document.getElementById('wed14').addEventListener("click",changecol);
		document.getElementById('wed15').addEventListener("click",changecol);
		document.getElementById('wed16').addEventListener("click",changecol);
		document.getElementById('wed17').addEventListener("click",changecol);
		document.getElementById('wed18').addEventListener("click",changecol);
		document.getElementById('thu9').addEventListener("click",changecol);
		document.getElementById('thu10').addEventListener("click",changecol);
		document.getElementById('thu11').addEventListener("click",changecol);
		document.getElementById('thu13').addEventListener("click",changecol);
		document.getElementById('thu14').addEventListener("click",changecol);
		document.getElementById('thu15').addEventListener("click",changecol);
		document.getElementById('thu16').addEventListener("click",changecol);
		document.getElementById('thu17').addEventListener("click",changecol);
		document.getElementById('thu18').addEventListener("click",changecol);
		document.getElementById('fri9').addEventListener("click",changecol);
		document.getElementById('fri10').addEventListener("click",changecol);
		document.getElementById('fri11').addEventListener("click",changecol);
		document.getElementById('fri13').addEventListener("click",changecol);
		document.getElementById('fri14').addEventListener("click",changecol);
		document.getElementById('fri15').addEventListener("click",changecol);
		document.getElementById('fri16').addEventListener("click",changecol);
		document.getElementById('fri17').addEventListener("click",changecol);
		document.getElementById('fri18').addEventListener("click",changecol);
		document.getElementById('sat9').addEventListener("click",changecol);
		document.getElementById('sat10').addEventListener("click",changecol);
		document.getElementById('sat11').addEventListener("click",changecol);
		document.getElementById('sat13').addEventListener("click",changecol);
		document.getElementById('sat14').addEventListener("click",changecol);
		document.getElementById('sat15').addEventListener("click",changecol);
		document.getElementById('sat16').addEventListener("click",changecol);
		document.getElementById('sat17').addEventListener("click",changecol);
		document.getElementById('sat18').addEventListener("click",changecol);
	});

	$('#prev').click(function(){
		var ndate = today.getTime() - 7 * 24 * 3600000;
		today = new Date(ndate);
		today_day = today.getDay();
		set_tab();
	});

	$('#next').click(function(){
		var ndate = today.getTime() + 7 * 24 * 3600000;
		today = new Date(ndate);
		today_day = today.getDay();
		set_tab();
	});

	function changecol(){
		var idim = this.id + 'i';
		var estvide = document.getElementById(idim).src.slice(-6);
		if (estvide != 'c0.png') {
			for (var i = 0; i < days.length; i++) {
				for (var j = 0; j < hours.length; j++) {
					if (this.id == days[i] + hours[j]) {
						var num = 9 * i + (j + 1);
						var idimsrc = document.getElementById(idim).src.slice(-8);
						idimsrc = idimsrc.replace('/','');
						if (selected[num-1] == 0) {
							selected[num-1] = 1;
							this.style.backgroundColor = '#444444';
							idimsrc = idimsrc.replace('.png','1.png');
							idimsrc = 'images/' + idimsrc;
							document.getElementById(idim).src = idimsrc;
						} else {
							selected[num-1] = 0;
							this.style.backgroundColor = 'ghostwhite';
							idimsrc = idimsrc.replace('1.png','.png');
							idimsrc = 'images/' + idimsrc;
							document.getElementById(idim).src = idimsrc;
						}
						i = days.length;
						j = hours.length;
					}
				}
			}
		}
	}

	function date_new(date,i,j){
		let dms = date.getTime() + (i - j + 1) * 24 * 3600000;
		return new Date(dms);
	}

	function date_week(date,j){
		let debut = date_new(date,0,j);
		let fin = date_new(date,6,j);
		return date_return(debut) + " - " + date_return(fin);
	}

	function date_return(date){
		let d = date;
		d = ['0' + d.getDate(),'0' + (d.getMonth() + 1),'' + d.getFullYear()].map(component => component.slice(-2)); // prend les 2 derniers chiffres de chaque composant
		// joindre les composants en date
		return d.slice(0, 3).join('/');
	}

	function set_tab(){
		document.getElementById('week').innerHTML = date_week(today,today_day);
		for (var i = 0; i < days.length; i++) {
			var days_date = date_new(today,i,today_day);
			document.getElementById(days[i]).innerHTML = days_text[i] + "<br>" + date_return(days_date);
			for (var j = 0; j < hours.length; j++) {
				var dh = days[i] + hours[j] + 'i';
				var valtest = document.getElementById(dh).src.slice(-8);
				valtest = valtest.replace('/','');
				valtest = valtest.replace('1.png','');
				valtest = valtest.replace('.png','');
				var nonvide = 1;
				for (var k = 0; k < cours_test.length; k++) {
					if ((valtest == (cours_test[k] + niveau[0]))||(valtest == (cours_test[k] + niveau[1]))||(valtest == (cours_test[k] + niveau[2]))) {
						document.getElementById(dh).alt = cours_test2[k];
						nonvide = 1;
						k = cours_test.length;
					} else {
						nonvide = 0;
					}
				}
				if (nonvide == 0) {
					document.getElementById(dh).alt = '';
					document.getElementById(days[i] + hours[j]).style.cursor = 'default';
				}
			}
		}
	}
</script>