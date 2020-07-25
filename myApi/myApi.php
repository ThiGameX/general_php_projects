<?php 

$parameter = $_GET["parameter"];

$list = Array(
	"Thiago",
	"Ricardo",
	"Werdan",
	"Cegobia",
	"Yasta",
	"Tanjiro",
	"kamado",
	"Kirigaya",
	"Kazuto",
	"Emma",
	"Norman",
	"Ray",
	"Murano",
	"Satomi",
	"Shinichi",
	"Izumi"
);

function echoRandom($list){
	$random = rand(0, sizeof($list) - 1);
	echo $list[$random];
}

$choosed = false;
for($i = 0; $i < sizeof($list); $i++){
	if($parameter == $list[$i]){
		echo "$parameter == list";
		$choosed = true;
	}else{
		echoRandom($list);
		$choosed = true;
	}

	if($choosed){
		break;
	}
}