var app = angular.module("myapp", []);
app.controller("controller", function($scope, $http) {
	$scope.btnName = "Login";
	$scope.alert = "Input User Credentials";
	$scope.login = function() {
		if ($scope.username == null) {
            alert("Please input Username");
        } 
        else if ($scope.passcode == null) {
            alert("Please input Password");
        }  
        else {
        	$scope.btnName = "Logging in...";
        	$scope.alert = "Checking Account. Please Wait...";
            $http.post(
                "login.php", {
                    'username': $scope.username,
                    'passcode': $scope.passcode,
                }
            ).success(function(data) {
            	if(data!=''){
            		setTimeout(function() {
    					$scope.alert = "Login Failed. User not Found!";
            			$scope.btnName = "Login";
            			$scope.$apply();
  					}, 3000);
            	}
            	else{
            		setTimeout(function() {
	            		$scope.username = null;
	                	$scope.passcode = null;
	                	$scope.alert = "Login Successful. Welcome!";
	                	$scope.btnName = "Login";
	                	$scope.$apply();
	                }, 3000);
	                setTimeout(function() {	
            			window.location.reload();
            		}, 4000);
  					
            	}
            });
        }
	}
});