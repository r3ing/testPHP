angular.module('app').controller('appController', function($scope, $resource){

    $video = function () {

        $resource('url').get().$promise.then(function(response){
               console.log(response);
        },function(promise){
            alert("error");
        })
    }


});
