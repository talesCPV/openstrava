<?php

include "crip.php";

//	echo crip('mylast96_ctr_portal_da_mata');

	$usuario = decrip('R#RUmRuW*%euloRaVvRSXTO+pRfhIb@]g[@MbRqUdRjSRrq ');
	$senha= decrip('#M#)B#J+C?8@AD#4*K#%,(0*E#9;15G0:/(#c#F)7#?z#GK2');
	$servidor = decrip('hthk*h2imml!),hvljhinjn--h "qwerhqme`h.kyh%oh/um');
	$banco = decrip('R#RUmRuW*%euloRaVvRSXTO+pRfhIb@]g[@MbRqUdRjSRrq ');

//	echo($servidor." ".$usuario." ".$senha." ".$banco);

	
	$conexao = new mysqli($servidor, $usuario, $senha, $banco);

	if (!$conexao){
        die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
    }

/*
	COCF]CeHSPUF\_CQGfCDIE(+`CVX3RqMWLq#bCaFTCZ,CbBL <- usuario
	PWPSjPr1PPOWilP^TMPQVR6-mPce9_-Z0Y5-`PnSaPg7PoXP <- IP
	#M#)B#J+C?8@AD#4*K#%,(0*E#9;15G0:/(#c#F)7#?z#GK2 <- senha
	nlnq0n8s7M(J/2n!rLnotpn,3n)+0"+xewYUan4q%n-in5FG <- banco
*/
?>