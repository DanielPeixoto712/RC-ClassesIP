
<?php

if (isset($_POST['ip1']) && isset($_POST['ip2'])&& isset($_POST['ip3'])&& isset($_POST['ip4'])) {


	$ips1=$_POST['ip1'];
	$ips2=$_POST['ip2'];
	$ips3=$_POST['ip3'];
	$ips4=$_POST['ip4'];

	if ($ips1>=0 && $ips1<=255  && $ips2>=0 && $ips2<=255  && $ips3>=0 && $ips3<=255  && $ips4>=0 && $ips4<=255) {

		if ($ips1=='127') {
			echo "IP reservado para loopback ou localhost";
		}

		if ($ips1>=1 && $ips1<=126) {
			echo "IP é da Classe A";
			echo "<br>";
		
		}


		if ($ips1>=128 && $ips1<=191) {
			echo "IP é da Classe B";
			echo "<br>";
		
		}


		if ($ips1>=192 && $ips1<=223) {
			echo "IP é da Classe C";
			echo "<br>";
		
		}

		if ($ips1>=224 && $ips1<=239) {
			echo "IP é da Classe D";
			echo "<br>";
		
		}

		if ($ips1>=240 && $ips1<=254) {
			echo "IP é da Classe E";
			echo "<br>";
		
		}
		if ($ips1==10) {
			echo "IP é Privado";
			echo "<br>";
		}
		if ($ips1==172 && $ips2 >=16 && $ips2 <=31) {
			echo "IP é Privado";
			echo "<br>";

		}
		if ($ips1==192 && $ips2==168) {
			echo "IP é Privado";
			echo "<br>";
		
		}
		else{
		    echo "IP é publico";
		}

	}
	else{
		echo "Erro";
	}
}






if (isset($_POST['protocolo'])) {


    $pr1=$_POST['protocolo'];
	

	if ($pr1=='dns') {
		echo "DNS [Domain Name System]";
	}
	if ($pr1=='ftp') {
		echo "FTP [File Transfer Protocol]";
	}
	if ($pr1=='http') {
		echo "HTTP [HyperText Transfer Protocol]";
	}
	if ($pr1=='ip') {
		echo "IP [Internet Protocol]";
	}

	


}


