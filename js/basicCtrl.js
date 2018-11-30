app.controller('basicHomeCtrl',function($rootScope, checkUserSession){
	// Get user Email
	checkUserSession.fetchUserDetails().success(function(response){
		$rootScope.userEmail = response.userEmail;
	});
});
