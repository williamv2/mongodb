var datos = angular.module('mongodb',[]);

	datos.controller('controladorjug', function ($scope, $http) {
		
		$scope.importarjug =function () {
			
			$http.get('listarjug.php').then(function(datos){

				$scope.jugadores = datos.data;

				console.log(datos);
			})
		}

		$scope.importarjug();

		$scope.selectjug = function(jug){

			console.log(jug);

			$scope.clickjug = jug;
		}
	})

	datos.controller('controladorpadre', function ($scope, $http) {
		
		$scope.importarpadres =function () {
			
			$http.get('listarpadres.php').then(function(datos){

				$scope.padres = datos.data;

				console.log(datos);
			})
		}

		$scope.importarpadres();

		$scope.selectpadres = function(pad){

			console.log(pad);

			$scope.clickpad = pad;
		}
	})