/**
 * Created by nir003 on 3/4/15.
 */


nickAdminApp.controller('PersonListCtrl', function ($scope, $http) {
    $http.get('/api/v1/person').
        success(function(data, status, headers, config) {
            $scope.people = data;
        }).
        error(function(data, status, headers, config) {
            $scope.people = [
                {'name': 'Bob',
                    'snippet': 'bad'}
            ];
        });

});