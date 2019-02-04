app1.controller('firstCtrl',function($scope,$http){
	$scope.myWelcome  = 'Add Tasks';$scope.alpha = false;
	$scope.initFirst=function(){
		$http.get("http://localhost:8000/api/list").then(function (response) {
			if (response.data.status ==true) {
	        	$scope.people = response.data.data;
	    	} else {
	    		console.log(response.data.message);
	    		$scope.myWelcome = response.data.message;
	    	}
	    });
	}
    $scope.saveData = function(){
    	console.log($scope.name);
    	$http({
	        method : "POST",
	        url : "http://localhost:8000/api/save",
	        data: {
	            name: $scope.name,
	        }
	    }).then(function mySuccess(response) {
	        $scope.myWelcome = response.data.message;
	        $scope.name='';
	         $scope.initFirst();
	    }, function myError(response) {
	        $scope.myWelcome = response.statusText;
	    });    	
    }
    $scope.statusChange = function($id){
    	console.log($id)
    	$http({
	        method : "GET",
	        url : "http://localhost:8000/api/status-change",
	        params:{
	            id: $id,
	        }
	    }).then(function mySuccess(response) {
	        $scope.myWelcome = response.data.message;
	         $scope.initFirst();
	    }, function myError(response) {
	        $scope.myWelcome = response.statusText;
	    });    	
    }
});
