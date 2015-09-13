var todoApp = angular.module('todoApp', []);

todoApp.controller('TodoCtrl', function ($scope, $http) {
	
	$http.get('ckegiatan/kegiatan').success(function(data){
		$scope.tasks = data;
	}).error(function(data){
		$scope.tasks = data;
	});
	
	$scope.refresh = function(){
		$http.get('Ckegiatan/kegiatan').success(function(data){
			$scope.tasks = data;
		}).error(function(data){
			$scope.tasks = data;
		});
	}
	
	$scope.addTask = function(){
		var newTask = {title: $scope.taskTitle};
		$http.post('Ckegiatan/kegiatan', newTask).success(function(data){
			$scope.refresh();
			$scope.taskTitle = '';
		}).error(function(data){
			alert(data.error);
		});
	}
	
	$scope.deleteTask = function(task){
		$http.delete('Ckegiatan/kegiatan/' + task.id);
		$scope.tasks.splice($scope.tasks.indexOf(task),1);
	}
	
	$scope.updateTask = function(task){
		$http.put('Ckegiatan/kegiatan', task).error(function(data){
			alert(data.error);
		});
		$scope.refresh();
	}
	
});