<?php
header("Content-Type: text/html; charset=UTF-8",true);
if (isset($_POST['num'])){
        $ton = round($_POST['num']*0.5808/1000, 2);
		$arv = $ton*5;
        echo "<td align='center' class='texto' width='100'><b><span id='tot_ee'>$ton</span></b><br>ton de CO<sub>2</sub></td><td align='center' class='texto' width='100'><b>$arv</b><br>árvores</td>";
}

if (isset($_POST['gas'])){
	$gas_ton = 0;
	$gas_arv = 0;
	if($_POST['tipo']=='gn'){
        $gas_ton = round($_POST['gas']*12*1.609/1000, 2);
		$gas_arv = $gas_ton*5;
	}
	if($_POST['tipo']=='glp'){
        $gas_ton = round($_POST['gas']*3.013/1000, 2);
		$gas_arv = $gas_ton*5;
	}
        echo "<td align='center' class='texto' width='100'><b><span id='tot_gas'>$gas_ton</span></b><br>ton de CO<sub>2</sub></td><td align='center' class='texto' width='100'><b>$gas_arv</b><br>árvores</td>";
}

if (isset($_POST['lixo'])){
        $lixo_ton = round($_POST['lixo']*52*1.972/1000, 2);
		$lixo_arv = $lixo_ton*5;
        echo "<td align='center' class='texto' width='100'><b><span id='tot_lixo'>$lixo_ton</span></b><br>ton de CO<sub>2</sub></td><td align='center' class='texto' width='100'><b>$lixo_arv</b><br>árvores</td>";
}

if (isset($_POST['popa_tmp'])){
	$popa_ton = 0;
	$popa_arv = 0;
	if($_POST['popa_t']=='g2'){
        $popa_ton = round($_POST['popa_tmp']*$_POST['popa_hp']*12*0.35*2.219/1000, 2);
		$popa_arv = $popa_ton*5;
	}
	if($_POST['popa_t']=='g4'){
        $popa_ton = round($_POST['popa_tmp']*$_POST['popa_hp']*12*0.245*2.219/1000, 2);
		$popa_arv = $popa_ton*5;
	}
	if($_POST['popa_t']=='di'){
        $popa_ton = round($_POST['popa_tmp']*$_POST['popa_hp']*12*0.14*2.705/1000, 2);
		$popa_arv = $popa_ton*5;
	}
        echo "<td align='center' class='texto' width='100'><b><span id='tot_popa'>$popa_ton</span></b><br>ton de CO<sub>2</sub></td><td align='center' class='texto' width='100'><b>$popa_arv</b><br>árvores</td>";
}

if (isset($_POST['roca_tmp'])){
        $roca_ton = round($_POST['roca_tmp']*$_POST['roca_hp']*12*0.8*2.219/1000, 2);
		$roca_arv = $roca_ton*5;
        echo "<td align='center' class='texto' width='100'><b><span id='tot_roca'>$roca_ton</span></b><br>ton de CO<sub>2</sub></td><td align='center' class='texto' width='100'><b>$roca_arv</b><br>árvores</td>";
}

if (isset($_POST['moto_qtd'])){
	$moto_ton = 0;
	$moto_arv = 0;
	if($_POST['moto_tp']=='km'){
		$moto_calc = 12*($_POST['moto_qtd'])/(75.177*(pow($_POST['moto_cil'],(-0.22))));
	}
	if($_POST['moto_tp']=='l'){
		$moto_calc = 12*($_POST['moto_qtd']);
	}
	if($_POST['moto_t']=='g'){
        $moto_ton = round($moto_calc*2.219/1000, 2);
		$moto_arv = $moto_ton*5;
	}
	if($_POST['moto_t']=='a'){
        $moto_ton = round($moto_calc*1.507/1000, 2);
		$moto_arv = $moto_ton*5;
	}
	if($_POST['moto_t']=='d'){
        $moto_ton = round($moto_calc*2.705/1000, 2);
		$moto_arv = $moto_ton*5;
	}
	if($_POST['motoap']=='0'){
		echo "<td align='center' class='texto' width='100'><b><span id='tot_moto'>$moto_ton</span></b><br>ton de CO<sub>2</sub></td><td align='center' class='texto' width='100'><b>$moto_arv</b><br>árvores</td>";
	}
	if($_POST['motoap']=='1'){
		$moto_tonacc = $_POST['mototonacc'] + $moto_ton;
		$moto_arvacc = $_POST['motoarvacc'] + $moto_arv;
		echo"<br><table width='690' border='0' align='center' cellpadding='0' cellspacing='0'>
				<tr>
					<td width='10'>&nbsp;</td>
					<td align='left' class='texto' width='430'>Acumulado</td>
					<td width='10'>&nbsp;</td>
					<td align='center' class='texto' width='240'>
                    		<table width='230' border='0' align='center' cellpadding='0' cellspacing='0'><tr>
								<td align='center' class='texto' width='115'><b><span id='moto_tonacc'>$moto_tonacc</span></b> ton de CO<sub>2</sub></td>
								<td align='center' class='texto' width='115'><b><span id='moto_arvacc'>$moto_arvacc</span></b> árvores</td>
                    		</tr></table>
                    </td>
					<td width='10'>&nbsp;</td>
				</tr>
			</table>";
	}
}

if (isset($_POST['auto_qtd'])){
	$auto_ton = 0;
	$auto_arv = 0;
	if($_POST['auto_tp']=='km'){
		if($_POST['auto_t']=='g'){
			if($_POST['auto_u']=='e'){
				$auto_calc = 12*($_POST['auto_qtd'])/(18.827-(2.7989*($_POST['auto_pot'])));
			}
			if($_POST['auto_u']=='c'){
				$auto_calc = 12*($_POST['auto_qtd'])/(13.854-(2.1249*($_POST['auto_pot'])));
			}
			if($_POST['auto_u']=='m'){
				$auto_calc = 12*($_POST['auto_qtd'])/(16.34-(2.4619*($_POST['auto_pot'])));
			}
			$auto_ton = round($auto_calc*2.219/1000, 2);
			$auto_arv = $auto_ton*5;
		}
		if($_POST['auto_t']=='a'){
			if($_POST['auto_u']=='e'){
				$auto_calc = 12*($_POST['auto_qtd'])/(13.943-(2.2347*($_POST['auto_pot'])));
			}
			if($_POST['auto_u']=='c'){
				$auto_calc = 12*($_POST['auto_qtd'])/(10.486-(1.8042*($_POST['auto_pot'])));
			}
			if($_POST['auto_u']=='m'){
				$auto_calc = 12*($_POST['auto_qtd'])/(12.245-(4.0389*($_POST['auto_pot'])));
			}
			$auto_ton = round($auto_calc*1.507/1000, 2);
			$auto_arv = $auto_ton*5;
		}
		if($_POST['auto_t']=='d'){
			if($_POST['auto_u']=='e'){
				$auto_calc = 12*($_POST['auto_qtd'])/(19.193-(1.9118*($_POST['auto_pot'])));
			}
			if($_POST['auto_u']=='c'){
				$auto_calc = 12*($_POST['auto_qtd'])/(13.603-(1.4853*($_POST['auto_pot'])));
			}
			if($_POST['auto_u']=='m'){
				$auto_calc = 12*($_POST['auto_qtd'])/(16.398-(1.6986*($_POST['auto_pot'])));
			}
			$auto_ton = round($auto_calc*2.705/1000, 2);
			$auto_arv = $auto_ton*5;
		}
		if($_POST['auto_t']=='f'){
			if($_POST['auto_u']=='e'){
				$auto_calc = 12*($_POST['auto_qtd'])/(16.385-(2.5168*($_POST['auto_pot'])));
			}
			if($_POST['auto_u']=='c'){
				$auto_calc = 12*($_POST['auto_qtd'])/(12.17-(1.9646*($_POST['auto_pot'])));
			}
			if($_POST['auto_u']=='m'){
				$auto_calc = 12*($_POST['auto_qtd'])/(14.278-(2.2407*($_POST['auto_pot'])));
			}
			$auto_ton = round($auto_calc*1.863/1000, 2);
			$auto_arv = $auto_ton*5;
		}
		if($_POST['auto_t']=='v'){
			if($_POST['auto_u']=='e'){
				$auto_calc = 12*($_POST['auto_qtd'])/(13.2);
			}
			if($_POST['auto_u']=='c'){
				$auto_calc = 12*($_POST['auto_qtd'])/(10.7);
			}
			if($_POST['auto_u']=='m'){
				$auto_calc = 12*($_POST['auto_qtd'])/(11.95);
			}
			$auto_ton = round($auto_calc*1.609/1000, 2);
			$auto_arv = $auto_ton*5;
		}
		
	}
	if($_POST['auto_tp']=='l'){
		$auto_calc = 12*($_POST['auto_qtd']);
		if($_POST['auto_t']=='g'){
			$auto_ton = round($auto_calc*2.219/1000, 2);
			$auto_arv = $auto_ton*5;
		}
		if($_POST['auto_t']=='a'){
			$auto_ton = round($auto_calc*1.507/1000, 2);
			$auto_arv = $auto_ton*5;
		}
		if($_POST['auto_t']=='d'){
			$auto_ton = round($auto_calc*2.705/1000, 2);
			$auto_arv = $auto_ton*5;
		}
		if($_POST['auto_t']=='f'){
			$auto_ton = round($auto_calc*1.863/1000, 2);
			$auto_arv = $auto_ton*5;
		}
		if($_POST['auto_t']=='v'){
			$auto_ton = round($auto_calc*1.609/1000, 2);
			$auto_arv = $auto_ton*5;
		}
	}
	if($_POST['autoap']=='0'){
		echo "<td align='center' class='texto' width='100'><b><span id='tot_auto'>$auto_ton</span></b><br>ton de CO<sub>2</sub></td><td align='center' class='texto' width='100'><b>$auto_arv</b><br>árvores</td>";
	}
	if($_POST['autoap']=='1'){
		$auto_tonacc = $_POST['autotonacc'] + $auto_ton;
		$auto_arvacc = $_POST['autoarvacc'] + $auto_arv;
		echo"<br><table width='690' border='0' align='center' cellpadding='0' cellspacing='0'>
				<tr>
					<td width='10'>&nbsp;</td>
					<td align='left' class='texto' width='430'>Acumulado</td>
					<td width='10'>&nbsp;</td>
					<td align='center' class='texto' width='240'>
                    		<table width='230' border='0' align='center' cellpadding='0' cellspacing='0'><tr>
								<td align='center' class='texto' width='115'><b><span id='auto_tonacc'>$auto_tonacc</span></b> ton de CO<sub>2</sub></td>
								<td align='center' class='texto' width='115'><b><span id='auto_arvacc'>$auto_arvacc</span></b> árvores</td>
                    		</tr></table>
                    </td>
					<td width='10'>&nbsp;</td>
				</tr>
			</table>";
	}
}

if (isset($_POST['bus_qtd'])){
	$bus_ton = 0;
	$bus_arv = 0;
	if($_POST['bus_tp']=='km'){
		if($_POST['bus_t']=='cp'){
			$bus_calc = 12*($_POST['bus_qtd'])/5;
		}
		if($_POST['bus_t']=='cm'){
			$bus_calc = 12*($_POST['bus_qtd'])/3.5;
		}
		if($_POST['bus_t']=='cr'){
			$bus_calc = 12*($_POST['bus_qtd'])/2;
		}
		if($_POST['bus_t']=='mo'){
			$bus_calc = 12*($_POST['bus_qtd'])/4.04;
		}
		if($_POST['bus_t']=='ou'){
			$bus_calc = 12*($_POST['bus_qtd'])/2.672;
		}
		if($_POST['bus_t']=='or'){
			$bus_calc = 12*($_POST['bus_qtd'])/5;
		}
	}
	if($_POST['bus_tp']=='l'){
		$bus_calc = 12*($_POST['bus_qtd']);
	}
	$bus_ton = round($bus_calc*2.705/1000, 2);
	$bus_arv = $bus_ton*5;
	if($_POST['busap']=='0'){
		echo "<td align='center' class='texto' width='100'><b><span id='tot_bus'>$bus_ton</span></b><br>ton de CO<sub>2</sub></td><td align='center' class='texto' width='100'><b>$bus_arv</b><br>árvores</td>";
	}
	if($_POST['busap']=='1'){
		$bus_tonacc = $_POST['bustonacc'] + $bus_ton;
		$bus_arvacc = $_POST['busarvacc'] + $bus_arv;
		echo"<br><table width='690' border='0' align='center' cellpadding='0' cellspacing='0'>
				<tr>
					<td width='10'>&nbsp;</td>
					<td align='left' class='texto' width='430'>Acumulado</td>
					<td width='10'>&nbsp;</td>
					<td align='center' class='texto' width='240'>
                    		<table width='230' border='0' align='center' cellpadding='0' cellspacing='0'><tr>
								<td align='center' class='texto' width='115'><b><span id='bus_tonacc'>$bus_tonacc</span></b> ton de CO<sub>2</sub></td>
								<td align='center' class='texto' width='115'><b><span id='bus_arvacc'>$bus_arvacc</span></b> árvores</td>
                    		</tr></table>
                    </td>
					<td width='10'>&nbsp;</td>
				</tr>
			</table>";
	}
}

if (isset($_POST['tot_ee'])){
	$total_ton = $_POST['tot_ee'] + $_POST['tot_gas'] + $_POST['tot_lixo'] + $_POST['tot_popa'] + $_POST['tot_roca'] + $_POST['tot_moto'] + $_POST['moto_tonacc'] + $_POST['tot_auto'] + $_POST['auto_tonacc'] + $_POST['tot_bus'] + $_POST['bus_tonacc'];
	$total_arv = ceil(5*$total_ton);
	echo"O seu total de emissões é <font size='5'><b>$total_ton</b></font> ton de CO<sub>2</sub>, sendo necessário plantar <font size='5'><b>$total_arv</b></font> árvores* para a compensação.<br><small>*Árvores nativas da Mata Atlântica</small>";
}

?>