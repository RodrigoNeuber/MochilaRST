<html ng-app>

<head>
	<title>Knapsack Mochila</title>
	<meta http-equiv="Content-Type" content="text/html">
	<meta name="description" content="Problema da Mochila - Knapsack" />
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-indigo.min.css" />
	<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular.min.js"></script>
	
	<style>
		body{
				background: #fafafa;
			}

			.mdl-grid{
				
				color: #757575 !important;
			}

			.background-cinza{
				background: #eee;
				min-height: 50px;
			}

			.transparent{
				background: url('img/download.jpg') center / cover;
			}

			nav.mdl-navigation .mdl-badge[data-badge]:after{
				top: 5px;
				right: -8px;
			}

			@media screen and (max-width: 400px){
				.esconde-celular{
					display: none;
				}
				nav.mdl-navigation .mdl-badge[data-badge]:after{
					right: 5px;
				}
			}
		

			.titlecard{
				color: #000;
			}

			.demostracao-card > .mdl-card__menu{
				color: #fff;
			}

			.demostracao-card2 > .mdl-card__menu{
				color: #fff;
			}

			.fundosimplex{
				background: url('img/Simplex_Logo.png') center / cover;
				width: 250px;
			}
	</style>
	
</head>
<body>
	<div class=" transparent mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">KNAPSACK MOCHILA</span>
				<div class="mdl-layout-spacer"></div>
			</div>
		</header>
		
		
    <script type="text/javascript">
      var principal = function($scope)
	  {
		$scope.array = [];//cria array
        $scope.add = function (index) 
		{
			$scope.array.push({ indexvalue: index	});
        };
		$scope.clear = function () 
		{
			$scope.array = [];
			$scope.add(-1);
        };
		$scope.delete = function(index)
		{
			$scope.array.splice(index, 1);
			if($scope.array.length == 0)
			{			$scope.add(-1);				}
		}
		$scope.add(-1);
     }
    </script>
	<div ng-controller="principal" class="form">
		<form action="mochila.php" target="blank" method="POST">
		
		
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--12-col" align="center">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" name="pesomaximo" type="number" id="pesomaximo" tabindex="1" size="70">
				<label class="mdl-textfield__label" for="pesomaximo">Capacidade Da Mochila</label>
			</div>	
		</div>
	</div>
		
			
	<div ng-repeat="item in array" class=" item mdl-grid" align="center">
		<div class="mdl-cell mdl-cell--12-col">
			<div>
						
			     
					
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" name="peso[]" type="number" id="pes" tabindex="2" size="20">
						<label class="mdl-textfield__label" for="peso">Peso {{$index + 1}}</label>
					</div>
					
					
					
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input  class="mdl-textfield__input" name="custo[]" type="number" id="custo" tabindex="2" size="5">
						<label class="mdl-textfield__label" for="custo">Custo {{$index + 1}}</label>
					</div>
					
					<input class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised" type="button" id="btnRemover" value="Deletar" ng-click="delete($index)">
					
			</div>	
		</div>
	</div>
		
							
								<div align="center">
									<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised" type="button" id="btnAdicionar" tabindex="-1" value="Adicionar outro" ng-click="add()"><i class="material-icons">add</i></button>
									
									<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised" type="button" id="btnLimpar" tabindex="-1" value="Remover todos" ng-click="clear()"><i class="material-icons">delete</i>Todos</button>
								</div>
								
						<div align="center">
							<div class="mdl-grid">
								<div class="mdl-cell mdl-cell--12-col" align="center">
									<input class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised" type="submit" style="width: 150px; height: 30px;" tabindex="-1" value="Calcular"></center>
							</div>
						</div>
						
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