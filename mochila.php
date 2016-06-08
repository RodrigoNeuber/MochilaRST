<html>
<head> 
	<meta charset="utf-8">
	<title>Solução - Knapsack (Mochila)</title>
	<meta name="description" content="Solução - Knapsack (Mochila)" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-indigo.min.css" />
	<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html">
	
</head>
<body>
	
	<div class=" transparent mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-drawer">
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				
				<span class="mdl-layout-title">SOLUÇÃO - KNAPSACK (Mochila)</span>
				<div class="mdl-layout-spacer"></div>
			</div>
			
		</header>
	
<?php 

	function printaTabela($tb, $pesoarray, $linhatb, $colunatb, $tblfinal){
		echo "<table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\" align=center>";
		echo "<tr><td class=\"base\">#</td>";
		
		for($i=0; $i<$colunatb; $i++){
			echo "<td>";	echo $i;	echo "</td>";
		}	
		
		echo "</tr>";
		
		for($i=0; $i<$linhatb; $i++){
			echo "<tr><td>";
			if($i==0){		
				echo "<center>";
				echo 0; //zero		
			}else{		
				echo "<center>";	echo $pesoarray[$i-1];		
			}				
			echo "</td>";
			for($j=0; $j<$colunatb; $j++){
				echo "<td><center>";	echo $tb[$i][$j];	echo "</td>";
			}	
			echo "</tr>";
		}		
		echo "</table>";	
	}
	
	$pesoarray = $_POST['peso']; $arraycusto = $_POST['custo'];	$pesomaximo = $_POST['pesomaximo'];
	$tb; $tblfinal; $linhatb = count($pesoarray)+1; $colunatb = $pesomaximo+1; $resultado="";
	
	for($i=0; $i<$linhatb; $i++){
		for($j=0; $j<$colunatb; $j++){
			$tblfinal[$i][$j] = "t_0";	$tb[$i][$j] = 0;
		}
	}

	for($i=0; $i<$linhatb; $i++){
		for($j=0; $j<$colunatb; $j++){
			if($i==0 || $j==0){
				continue;
			}if($pesoarray[$i-1]<=$j){
				$indicex = $tb[$i-1][$j];
				$indicey = $tb[$i-1][$j-$pesoarray[$i-1]] + $arraycusto[$i-1];
					
					if($indicex>$indicey){
						$tb[$i][$j] = $indicex;
					}else{
						$tb[$i][$j] = $indicey;
					}
			}else{
				$tb[$i][$j] = $tb[$i - 1][$j];
				
			}
		}
	}			
	
	$linha = $linhatb-1; $coluna = $colunatb-1; $pesoTotal = 0; $custoTotal = 0;
	
	//Melhor solução dos itens a serem adicionados:
	do{
		if($tb[$linha][$coluna] == $tb[$linha - 1][$coluna]){
			$tblfinal[$linha][$coluna]=false;
			$linha = $linha-1;
			$coluna = $coluna;
		}else{
			$resultado = $resultado."<div style='height: 20px;' align='center'><h6>Adicionado Item - Peso ".$pesoarray[$linha - 1]." | Valor = ".$arraycusto[$linha - 1].";</h6></div>";
			$pesoTotal += $pesoarray[$linha - 1];
			$custoTotal += $arraycusto[$linha - 1];

			$tblfinal[$linha][$coluna] = "t_1";
			$linha = $linha-1;
			$coluna = $coluna-$pesoarray[$linha];
		}
		
		if($linha==0){
			$tblfinal[$linha][$coluna] = "t_2";
			
		}
	}while($linha!=0);
	
	$resultado = $resultado."<div style='height: 20px' align='center' color='blue'><h6><b> Peso da mochila = ".$pesoTotal."<b></h6></div>";
	$resultado = $resultado."<div><h6 align='center'> Valor final = ".$custoTotal."</h6></div>";
	echo "<div align='center'><h4>Tabela Programação Dinâmica</h4></div>";
	
	printaTabela($tb, $pesoarray, $linhatb, $colunatb, $tblfinal);
	echo "<div style='height: 40px' align='center'><h4>Solução do Algoritmo:</h4></div>";
	echo $resultado;
	
?>

	<footer class="mdl-mini-footer">
		<div class="mdl-mini-footer--left-section">
			<div class="mdl-logo"> Copyright © 2016. Todos os direitos reservados.</div>
		</div>
		<div class="mdl-mini-footer--right-section">
			<div class="mdl-logo">Rodrigo Neuber</div>
			<div class="mdl-logo">|</div>
			<div class="mdl-logo">Sandra Kawakame</div>
			<div class="mdl-logo">|</div>
			<div class="mdl-logo">Talita Mendes</div>
		</div>
	</footer>
	
</div>
</body>
</html>	