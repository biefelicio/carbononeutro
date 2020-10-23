<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Carbono Neutro</title>
<script type="text/javascript" src="jquery.js">
</script>
<script type="text/javascript">
$('document').ready(function(){
		$('#motodiv').hide();
		$('#autodiv').hide();
		$('#busdiv').hide();
        $('#el_qtd').keyup(function(){
                $.post('calculator.php',
                {num: $('#el_qtd').val()},
                function(data){
                                $('#el_ton').show();
                                $('#el_ton').empty().html(data);
                }
                );
		});
		$('#gas_qtd').keyup(function(){
                $.post('calculator.php',
                {gas: $('#gas_qtd').val(), tipo: $('input[name=gas_t]:checked').val()},
                function(data){
                                $('#gas_ton').show();
                                $('#gas_ton').empty().html(data);
                }
                );
        });
		$('#gas_t1').click(function(){
                $.post('calculator.php',
                {gas: $('#gas_qtd').val(), tipo: $('input[name=gas_t]:checked').val()},
                function(data){
                                $('#gas_ton').show();
                                $('#gas_ton').empty().html(data);
                }
                );
        });
		$('#gas_t2').click(function(){
                $.post('calculator.php',
                {gas: $('#gas_qtd').val(), tipo: $('input[name=gas_t]:checked').val()},
                function(data){
                                $('#gas_ton').show();
                                $('#gas_ton').empty().html(data);
                }
                );
        });
		$('#lixo_qtd').keyup(function(){
                $.post('calculator.php',
                {lixo: $('#lixo_qtd').val()},
                function(data){
                                $('#lixo_ton').show();
                                $('#lixo_ton').empty().html(data);
                }
                );
        });
		$('#popa_tmp').keyup(function(){
                $.post('calculator.php',
                {popa_tmp: $('#popa_tmp').val(), popa_hp: $('#popa_hp').val(), popa_t: $('input[name=popa_t]:checked').val()},
                function(data){
                                $('#popa_ton').show();
                                $('#popa_ton').empty().html(data);
                }
                );
        });
		$('#popa_hp').keyup(function(){
                $.post('calculator.php',
                {popa_tmp: $('#popa_tmp').val(), popa_hp: $('#popa_hp').val(), popa_t: $('input[name=popa_t]:checked').val()},
                function(data){
                                $('#popa_ton').show();
                                $('#popa_ton').empty().html(data);
                }
                );
        });
		$('#popa_t1').click(function(){
                $.post('calculator.php',
                {popa_tmp: $('#popa_tmp').val(), popa_hp: $('#popa_hp').val(), popa_t: $('input[name=popa_t]:checked').val()},
                function(data){
                                $('#popa_ton').show();
                                $('#popa_ton').empty().html(data);
                }
                );
        });
		$('#popa_t2').click(function(){
                $.post('calculator.php',
                {popa_tmp: $('#popa_tmp').val(), popa_hp: $('#popa_hp').val(), popa_t: $('input[name=popa_t]:checked').val()},
                function(data){
                                $('#popa_ton').show();
                                $('#popa_ton').empty().html(data);
                }
                );
        });
		$('#popa_t3').click(function(){
                $.post('calculator.php',
                {popa_tmp: $('#popa_tmp').val(), popa_hp: $('#popa_hp').val(), popa_t: $('input[name=popa_t]:checked').val()},
                function(data){
                                $('#popa_ton').show();
                                $('#popa_ton').empty().html(data);
                }
                );
        });
		$('#roca_tmp').keyup(function(){
                $.post('calculator.php',
                {roca_tmp: $('#roca_tmp').val(), roca_hp: $('#roca_hp').val()},
                function(data){
                                $('#roca_ton').show();
                                $('#roca_ton').empty().html(data);
                }
                );
        });
		$('#roca_hp').keyup(function(){
                $.post('calculator.php',
                {roca_tmp: $('#roca_tmp').val(), roca_hp: $('#roca_hp').val()},
                function(data){
                                $('#roca_ton').show();
                                $('#roca_ton').empty().html(data);
                }
                );
        });
		$('#moto_cil').keyup(function(){
                $.post('calculator.php',
                {moto_t: $('select[name=moto_t]').find(':selected').val(), moto_cil: $('#moto_cil').val(), moto_qtd: $('#moto_qtd').val(), moto_tp: $('input[name=moto_tp]:checked').val(), motoap:'0'},
                function(data){
                                $('#moto_ton').show();
                                $('#moto_ton').empty().html(data);
                }
                );
        });
		$('#moto_t').change(function(){
                $.post('calculator.php',
                {moto_t: $('select[name=moto_t]').find(':selected').val(), moto_cil: $('#moto_cil').val(), moto_qtd: $('#moto_qtd').val(), moto_tp: $('input[name=moto_tp]:checked').val(), motoap:'0'},
                function(data){
                                $('#moto_ton').show();
                                $('#moto_ton').empty().html(data);
                }
                );
        });
		$('#moto_qtd').keyup(function(){
                $.post('calculator.php',
                {moto_t: $('select[name=moto_t]').find(':selected').val(), moto_cil: $('#moto_cil').val(), moto_qtd: $('#moto_qtd').val(), moto_tp: $('input[name=moto_tp]:checked').val(), motoap:'0'},
                function(data){
                                $('#moto_ton').show();
                                $('#moto_ton').empty().html(data);
                }
                );
        });
		$('#moto_tp1').click(function(){
                $.post('calculator.php',
                {moto_t: $('select[name=moto_t]').find(':selected').val(), moto_cil: $('#moto_cil').val(), moto_qtd: $('#moto_qtd').val(), moto_tp: $('input[name=moto_tp]:checked').val(), motoap:'0'},
                function(data){
                                $('#moto_ton').show();
                                $('#moto_ton').empty().html(data);
                }
                );
        });
		$('#moto_tp2').click(function(){
                $.post('calculator.php',
                {moto_t: $('select[name=moto_t]').find(':selected').val(), moto_cil: $('#moto_cil').val(), moto_qtd: $('#moto_qtd').val(), moto_tp: $('input[name=moto_tp]:checked').val(), motoap:'0'},
                function(data){
                                $('#moto_ton').show();
                                $('#moto_ton').empty().html(data);
                }
                );
        });
		$('#motoap1').click(function(){
				$.post('calculator.php',
                {moto_t: $('select[name=moto_t]').find(':selected').val(), moto_cil: $('#moto_cil').val(), moto_qtd: $('#moto_qtd').val(), moto_tp: $('input[name=moto_tp]:checked').val(), motoap:'1', mototonacc: $('#moto_tonacc').text(), motoarvacc: $('#moto_arvacc').text()},
                function(data){
                                $('#motodiv').show();
                                $('#motodiv').empty().html(data);
                }
                );
				$('#moto_cil').val('0');
				$('#moto_qtd').val('0');
				$.post('calculator.php',
                {moto_t: $('select[name=moto_t]').find(':selected').val(), moto_cil: $('#moto_cil').val(), moto_qtd: $('#moto_qtd').val(), moto_tp: $('input[name=moto_tp]:checked').val(), motoap:'0'},
                function(data){
                                $('#moto_ton').show();
                                $('#moto_ton').empty().html(data);
                }
                );
         });
		 $('#auto_pot').keyup(function(){
                $.post('calculator.php',
                {auto_t: $('select[name=auto_t]').find(':selected').val(), auto_u: $('select[name=auto_u]').find(':selected').val(), auto_pot: $('#auto_pot').val(), auto_qtd: $('#auto_qtd').val(), auto_tp: $('input[name=auto_tp]:checked').val(), autoap:'0'},
                function(data){
                                $('#auto_ton').show();
                                $('#auto_ton').empty().html(data);
                }
                );
        });
		$('#auto_t').change(function(){
                $.post('calculator.php',
                {auto_t: $('select[name=auto_t]').find(':selected').val(), auto_u: $('select[name=auto_u]').find(':selected').val(), auto_pot: $('#auto_pot').val(), auto_qtd: $('#auto_qtd').val(), auto_tp: $('input[name=auto_tp]:checked').val(), autoap:'0'},
                function(data){
                                $('#auto_ton').show();
                                $('#auto_ton').empty().html(data);
                }
                );
        });
		$('#auto_u').change(function(){
                $.post('calculator.php',
                {auto_t: $('select[name=auto_t]').find(':selected').val(), auto_u: $('select[name=auto_u]').find(':selected').val(), auto_pot: $('#auto_pot').val(), auto_qtd: $('#auto_qtd').val(), auto_tp: $('input[name=auto_tp]:checked').val(), autoap:'0'},
                function(data){
                                $('#auto_ton').show();
                                $('#auto_ton').empty().html(data);
                }
                );
        });
		$('#auto_qtd').keyup(function(){
                $.post('calculator.php',
                {auto_t: $('select[name=auto_t]').find(':selected').val(), auto_u: $('select[name=auto_u]').find(':selected').val(), auto_pot: $('#auto_pot').val(), auto_qtd: $('#auto_qtd').val(), auto_tp: $('input[name=auto_tp]:checked').val(), autoap:'0'},
                function(data){
                                $('#auto_ton').show();
                                $('#auto_ton').empty().html(data);
                }
                );
        });
		$('#auto_tp1').click(function(){
                $.post('calculator.php',
                {auto_t: $('select[name=auto_t]').find(':selected').val(), auto_u: $('select[name=auto_u]').find(':selected').val(), auto_pot: $('#auto_pot').val(), auto_qtd: $('#auto_qtd').val(), auto_tp: $('input[name=auto_tp]:checked').val(), autoap:'0'},
                function(data){
                                $('#auto_ton').show();
                                $('#auto_ton').empty().html(data);
                }
                );
        });
		$('#auto_tp2').click(function(){
                $.post('calculator.php',
                {auto_t: $('select[name=auto_t]').find(':selected').val(), auto_u: $('select[name=auto_u]').find(':selected').val(), auto_pot: $('#auto_pot').val(), auto_qtd: $('#auto_qtd').val(), auto_tp: $('input[name=auto_tp]:checked').val(), autoap:'0'},
                function(data){
                                $('#auto_ton').show();
                                $('#auto_ton').empty().html(data);
                }
                );
        });
		$('#autoap1').click(function(){
				$.post('calculator.php',
                {auto_t: $('select[name=auto_t]').find(':selected').val(), auto_u: $('select[name=auto_u]').find(':selected').val(), auto_pot: $('#auto_pot').val(), auto_qtd: $('#auto_qtd').val(), auto_tp: $('input[name=auto_tp]:checked').val(), autoap:'1', autotonacc: $('#auto_tonacc').text(), autoarvacc: $('#auto_arvacc').text()},
                function(data){
                                $('#autodiv').show();
                                $('#autodiv').empty().html(data);
                }
                );
				$('#auto_pot').val('0');
				$('#auto_qtd').val('0');
				$.post('calculator.php',
                {auto_t: $('select[name=auto_t]').find(':selected').val(), auto_u: $('select[name=auto_u]').find(':selected').val(), auto_pot: $('#auto_pot').val(), auto_qtd: $('#auto_qtd').val(), auto_tp: $('input[name=auto_tp]:checked').val(), autoap:'0'},
                function(data){
                                $('#auto_ton').show();
                                $('#auto_ton').empty().html(data);
                }
                );
         });
		 $('#bus_t').change(function(){
                $.post('calculator.php',
                {bus_t: $('select[name=bus_t]').find(':selected').val(), bus_qtd: $('#bus_qtd').val(), bus_tp: $('input[name=bus_tp]:checked').val(), busap:'0'},
                function(data){
                                $('#bus_ton').show();
                                $('#bus_ton').empty().html(data);
                }
                );
        });
		$('#bus_qtd').keyup(function(){
                $.post('calculator.php',
                {bus_t: $('select[name=bus_t]').find(':selected').val(), bus_qtd: $('#bus_qtd').val(), bus_tp: $('input[name=bus_tp]:checked').val(), busap:'0'},
                function(data){
                                $('#bus_ton').show();
                                $('#bus_ton').empty().html(data);
                }
                );
        });
		$('#bus_tp1').click(function(){
                $.post('calculator.php',
                {bus_t: $('select[name=bus_t]').find(':selected').val(), bus_qtd: $('#bus_qtd').val(), bus_tp: $('input[name=bus_tp]:checked').val(), busap:'0'},
                function(data){
                                $('#bus_ton').show();
                                $('#bus_ton').empty().html(data);
                }
                );
        });
		$('#bus_tp2').click(function(){
                $.post('calculator.php',
                {bus_t: $('select[name=bus_t]').find(':selected').val(), bus_qtd: $('#bus_qtd').val(), bus_tp: $('input[name=bus_tp]:checked').val(), busap:'0'},
                function(data){
                                $('#bus_ton').show();
                                $('#bus_ton').empty().html(data);
                }
                );
        });
		$('#busap1').click(function(){
				$.post('calculator.php',
                {bus_t: $('select[name=bus_t]').find(':selected').val(), bus_qtd: $('#bus_qtd').val(), bus_tp: $('input[name=bus_tp]:checked').val(), busap:'1', bustonacc: $('#bus_tonacc').text(), busarvacc: $('#bus_arvacc').text()},
                function(data){
                                $('#busdiv').show();
                                $('#busdiv').empty().html(data);
                }
                );
				$('#bus_pot').val('0');
				$('#bus_qtd').val('0');
				$.post('calculator.php',
                {bus_t: $('select[name=bus_t]').find(':selected').val(), bus_qtd: $('#bus_qtd').val(), bus_tp: $('input[name=bus_tp]:checked').val(), busap:'0'},
                function(data){
                                $('#bus_ton').show();
                                $('#bus_ton').empty().html(data);
                }
                );
         });
		 $('#finalizar').click(function(){
                $.post('calculator.php',
                {tot_ee: $('#tot_ee').text(), tot_gas: $('#tot_gas').text(), tot_lixo: $('#tot_lixo').text(), tot_popa: $('#tot_popa').text(), tot_roca: $('#tot_roca').text(), tot_moto: $('#tot_moto').text(), moto_tonacc: $('#moto_tonacc').text(), tot_auto: $('#tot_auto').text(), auto_tonacc: $('#auto_tonacc').text(), tot_bus: $('#tot_bus').text(), bus_tonacc: $('#bus_tonacc').text()},
                function(data){
                                $('#final').show();
                                $('#final').empty().html(data);
                }
                );
        });
		
});
</script>
</head>

<body bgcolor="#FFFFFF" bgproperties="fixed" background="images/back.jpg" topmargin="0" bottommargin="0">
<center>
<table width="690" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#19130f" id="Table_01"> 
	<tr> 
		<td><a href="http://www.preac.unicamp.br/lepac/"><img src="images/lepac.jpg" width="689" height="102" border="0"></a></td> 
	</tr> 
	<tr> 
		<td align="center"> 
		    <span class="title"><font face="Arial, Helvetica, sans-serif" color="#FFFFFF"><b><a href="index.html">CARBONO COMPENSADO</a></b></font></span><br />
            <font face="Arial, Helvetica, sans-serif" size="3" color="#FFFFFF"><b>ESTIMATIVAS BASEADAS E ADAPTADAS DO The Greenhouse Gas Protocol, E USANDO AS FERRAMENTAS ESTABELECIDAS PELO World Business Council for Sustaineble Development (WBCSD) E PELO World Resources Institute (WRI)</b></font> <br />
			<img src="images/separador.gif"/><br /><br />
			<img src="images/energia.gif" /><br />
			<table width="690" border="0" align="center" cellpadding="0" cellspacing="10">
				<tr>
					<td align="left" class="texto" width="470">Insira o consumo médio mensal em kWh:<br />
                    	<form name="elet">
							<input type="text" id="el_qtd" size="10" maxlength="10" /> kWh
                        </form>
                        <small>*Esse dado pode ser encontrado na fatura de energia elétrica.</small>
                    </td>
                    <td align="center" class="texto" width="210">
                    	<div id="el_ton">
                    		<table width="210" border="0" align="center" cellpadding="0" cellspacing="10"><tr>
								<td align="center" class="texto" width="100"><b>0</b><br />ton de CO<sub>2</sub></td>
								<td align="center" class="texto" width="100"><b>0</b><br />árvores</td>
                    		</tr></table>
                    	</div>
                    </td>
				</tr>
			</table>
            <img src="images/gas.gif" /><br />
			<table width="690" border="0" align="center" cellpadding="0" cellspacing="10">
				<tr>
					<td align="left" class="texto" width="470">Insira o consumo médio e selecione o tipo de gás utilizado:<br />
                    	<form name="gas">
							<input type="text" id="gas_qtd" size="10" maxlength="10" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="gas_t1" name="gas_t" type="radio" value="gn" />Gás Natural (m<sup>3</sup>/mês)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="gas_t2" name="gas_t" type="radio" value="glp" />GLP (kg/ano)
                        </form>
                        <small>*Para o gás natural, esse dado pode ser encontrado na sua fatura de gás.<br />**Para o GLP, um botijão doméstico tem 13kg e um botijão industrial 45kg.</small>
                    </td>
                    <td align="center" class="texto" width="210">
                    	<div id="gas_ton">
                    		<table width="210" border="0" align="center" cellpadding="0" cellspacing="10"><tr>
								<td align="center" class="texto" width="100"><b>0</b><br />ton de CO<sub>2</sub></td>
								<td align="center" class="texto" width="100"><b>0</b><br />árvores</td>
                    		</tr></table>
                    	</div>
                    </td>
				</tr>
			</table>
            <img src="images/lixo.gif" /><br />
			<table width="690" border="0" align="center" cellpadding="0" cellspacing="10">
				<tr>
					<td align="left" class="texto" width="470">Insira a quantidade de lixo produzida:<br />
                    	<form name="lixo">
							<input type="text" id="lixo_qtd" size="10" maxlength="10" /> kg/semana
                        </form>
                        <small>*Desconsidere o lixo encaminhado para reciclagem.</small>
                    </td>
                    <td align="center" class="texto" width="210">
                    	<div id="lixo_ton">
                    		<table width="210" border="0" align="center" cellpadding="0" cellspacing="10"><tr>
								<td align="center" class="texto" width="100"><b>0</b><br />ton de CO<sub>2</sub></td>
								<td align="center" class="texto" width="100"><b>0</b><br />árvores</td>
                    		</tr></table>
                    	</div>
                    </td>
				</tr>
			</table>
            <img src="images/popa.gif" /><br />
			<table width="690" border="0" align="center" cellpadding="0" cellspacing="10">
				<tr>
					<td align="left" class="texto" width="470">Insira o tempo de uso, cavalagem e tipo de motor de popa:<br />
                    	<form name="popa">
							<input type="text" id="popa_tmp" size="5" maxlength="5" /> h/mês&nbsp;&nbsp;&nbsp;&nbsp
                            <input type="text" id="popa_hp" size="5" maxlength="5" /> hp&nbsp;&nbsp;&nbsp
							<input id="popa_t1" name="popa_t" type="radio" value="g2" />Gasolina 2T&nbsp;&nbsp;&nbsp;
                            <input id="popa_t2" name="popa_t" type="radio" value="g4" />Gasolina 4T&nbsp;&nbsp;&nbsp;
							<input id="popa_t3" name="popa_t" type="radio" value="di" />Diesel
                        </form>
                    </td>
                    <td align="center" class="texto" width="210">
                    	<div id="popa_ton">
                    		<table width="210" border="0" align="center" cellpadding="0" cellspacing="10"><tr>
								<td align="center" class="texto" width="100"><b>0</b><br />ton de CO<sub>2</sub></td>
								<td align="center" class="texto" width="100"><b>0</b><br />árvores</td>
                    		</tr></table>
                    	</div>
                    </td>
				</tr>
                <tr>
					<td align="left" class="texto" width="470">Insira o tempo de uso e cavalagem da roçadeira:<br />
                    	<form name="roca">
							<input type="text" id="roca_tmp" size="10" maxlength="10" /> h/mês&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="roca_hp" size="10" maxlength="10" /> hp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </form>
                    </td>
                    <td align="center" class="texto" width="210">
                    	<div id="roca_ton">
                    		<table width="210" border="0" align="center" cellpadding="0" cellspacing="10"><tr>
								<td align="center" class="texto" width="100"><b>0</b><br />ton de CO<sub>2</sub></td>
								<td align="center" class="texto" width="100"><b>0</b><br />árvores</td>
                    		</tr></table>
                    	</div>
                    </td>
				</tr>
			</table>
            <img src="images/moto.gif" /><br />
            <div id="motodiv">
				&nbsp;
            </div>
            <div id="motoform">
			<table width="690" border="0" align="center" cellpadding="0" cellspacing="10">
				<tr>
					<td align="left" class="texto" width="470">Insira os dados sobre o combustível usado, as cilindradas e a quilometragem ou quantidade de litros utilizado por mês:<br />
               	    <form name="moto">
                        	<select name="moto_t" id="moto_t">
                        	  <option selected="selected">Combustível</option>
                        	  <option value="g">Gasolina</option>
                        	  <option value="a">Álcool</option>
                        	  <option value="d">Diesel</option>
                       		</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  		Cilindradas:<input type="text" id="moto_cil" size="10" maxlength="10" /> cc<br />
					  		Uso:
                            <input type="text" id="moto_qtd" size="10" maxlength="10" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="moto_tp1" name="moto_tp" type="radio" value="km" />km/mês&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="moto_tp2" name="moto_tp" type="radio" value="l" />litros/mês
                    </form>
                    </td>
                    <td align="center" class="texto" width="210">
               	  		<div id="moto_ton">
                    		<table width="210" border="0" align="center" cellpadding="0" cellspacing="10"><tr>
								<td align="center" class="texto" width="100"><b>0</b><br />ton de CO<sub>2</sub></td>
								<td align="center" class="texto" width="100"><b>0</b><br />árvores</td>
                    		</tr></table>
                    	</div>
                    </td>
				</tr>
            </table>
            <div id="motoap1" align="left"><button class="button" id="motoap1">+ 1 moto</button></div>
              </div>
               <table width="690" border="0" align="center" cellpadding="0" cellspacing="10">
                	<tr>
                		<td align="left" class="texto">
                    		<small>*Caso possua mais de uma moto, clique no botão "+ 1 moto".<br />
                        	**Caso possua duas ou mais motos de mesma cilindrada, o uso pode ser acumulado em apenas um formulário.</small>
                  		</td>
                    </tr>
			</table>
            <img src="images/auto.gif" /><br />
            <div id="autodiv">
				&nbsp;
            </div>
            <div id="autoform">
			<table width="690" border="0" align="center" cellpadding="0" cellspacing="10">
				<tr>
					<td align="left" class="texto" width="470">Insira os dados sobre o combustível usado, o motor, o principal tipo de uso e a quilometragem ou quantidade de litros utilizado por mês:<br />
               	    <form name="auto">
                        	<select name="auto_t" id="auto_t">
                        	  <option selected="selected">Combustível*</option>
                        	  <option value="g">Gasolina</option>
                        	  <option value="a">Álcool</option>
                        	  <option value="d">Diesel</option>
                              <option value="f">Flex</option>
                              <option value="v">GNV</option>
                       		</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  		Motor**:<input type="text" id="auto_pot" size="10" maxlength="10" /> l<br />
					  		Uso:<select name="auto_u" id="auto_u">
                        	  <option selected="selected"> </option>
                        	  <option value="e">Estrada</option>
                        	  <option value="c">Cidade</option>
                        	  <option value="m">Misto</option>
                            </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text" id="auto_qtd" size="10" maxlength="10" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="auto_tp1" name="auto_tp" type="radio" value="km" />km/mês&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="auto_tp2" name="auto_tp" type="radio" value="l" />litros/mês
                    </form>
                    </td>
                    <td align="center" class="texto" width="210">
               	  		<div id="auto_ton">
                    		<table width="210" border="0" align="center" cellpadding="0" cellspacing="10"><tr>
								<td align="center" class="texto" width="100"><b>0</b><br />ton de CO<sub>2</sub></td>
								<td align="center" class="texto" width="100"><b>0</b><br />árvores</td>
                    		</tr></table>
                    	</div>
                    </td>
				</tr>
            </table>
            <div id="autoap1" align="left"><button class="button" id="autoap1">+ 1 carro/pickup</button></div>
              </div>
               <table width="690" border="0" align="center" cellpadding="0" cellspacing="10">
                	<tr>
                		<td align="left" class="texto">
                    		<small>*Combustível: Se o motor é flex, mas é abastecido apenas com gasolina ou apenas com álcool, selecione um dos dois. Somente selecione "flex" se abastecer tanto com álcool quanto com gasolina.<br />
                            **Motor do carro/pickup: 1.0, 1.8, 2.0, etc...<br />
                            ***Caso possua mais de um carro ou pickup, clique no botão "+ 1 carro/pickup".<br />
                        	****Caso possua dois ou mais carros/pickups de mesmo motor, o uso pode ser acumulado em apenas um formulário.</small>
                  		</td>
                    </tr>
			</table>
            <img src="images/bus.gif" /><br />
            <div id="busdiv">
				&nbsp;
            </div>
            <div id="busform">
			<table width="690" border="0" align="center" cellpadding="0" cellspacing="10">
				<tr>
					<td align="left" class="texto" width="470">Insira os dados sobre o tipo de ônibus/caminhão e a quilometragem ou quantidade de litros utilizado por mês:<br />
               	    <form name="bus">
                        	<select name="bus_t" id="bus_t">
                        	  <option selected="selected">Tipo*</option>
                        	  <option value="cp">Caminhão Pequeno</option>
                        	  <option value="cm">Caminhão Médio</option>
                        	  <option value="cr">Carreta</option>
                              <option value="mo">Micro-ônibus</option>
                              <option value="ou">Ônibus Urbano</option>
                              <option value="or">Ônibus Rodoviário</option>
                       		</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  		Uso:<input type="text" id="bus_qtd" size="10" maxlength="10" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="bus_tp1" name="bus_tp" type="radio" value="km" />km/mês&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="bus_tp2" name="bus_tp" type="radio" value="l" />litros/mês
                    </form>
                    </td>
                    <td align="center" class="texto" width="210">
               	  		<div id="bus_ton">
                    		<table width="210" border="0" align="center" cellpadding="0" cellspacing="10"><tr>
								<td align="center" class="texto" width="100"><b>0</b><br />ton de CO<sub>2</sub></td>
								<td align="center" class="texto" width="100"><b>0</b><br />árvores</td>
                    		</tr></table>
                    	</div>
                    </td>
				</tr>
            </table>
            <div id="busap1" align="left"><button class="button" id="busap1">+ 1 ônibus/caminhão</button></div>
              </div>
               <table width="690" border="0" align="center" cellpadding="0" cellspacing="10">
                	<tr>
                		<td align="left" class="texto">
                    		<small>*Ônibus Urbano é caracterizado por ônibus com motor de baixa potência normalmente utilizado para percursos urbanos. Ônibus Rodoviário é caracterizado por ônibus com motor de alta potência normalmente utilizado para percursos rodoviários.<br />
                            **Caso possua mais de um ônibus ou caminhão, clique no botão "+ 1 ônibus/caminhão".<br />
                        	***Caso possua dois ou mais ônibus/caminhões de mesmo tipo, o uso pode ser acumulado em apenas um formulário.</small>
                  		</td>
                    </tr>
			</table>
            <img src="images/pegada.gif" /><br />
			<table width="690" border="0" align="center" cellpadding="0" cellspacing="10">
				<tr>
					<td align="center" class="texto" width="470">
                    	<div id="final">
                        </div>
                        <button class="button2" id="finalizar">Ver resultado final</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="calcule.php"><button class="button2" id="limpar">Novo Cálculo</button></a>
                    </td>
				</tr>
			</table>
            <img src="images/separador.gif" /><br />
            <table width="689" border="0" cellpadding="0" cellspacing="10">
            	<tr>
                	<td width="25%" align="left" class="rodape">
                    	<b>Contato:</b><br />
                    	<a href="mailto:lepac@reitoria.unicamp.br">lepac@reitoria.unicamp.br</a>
                    </td>
                    <td width="50%" align="left" class="rodape">
                    	<b>Idealização e Apoio:</b><br />
                    	<a href="http://www.preac.unicamp.br/lepac" target="_blank"><img src="images/lepac.gif" border="0" /></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.bromelias.com.br" target="_blank"><img src="images/flora.gif" border="0" /></a>
                    </td>
                    <td width="25%" align="right" class="rodape">
                    	<b>Criação e densenvolvimento:</b><br />
                        <a href="http://www.biefelicio.com.br" target="_blank"><img src="images/selo.gif" border="0" /></a>
                    </td>
                </tr>
            </table>
		</td> 
	</tr> 
</table>
</center>
</body>
</html>
