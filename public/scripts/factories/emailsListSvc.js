angular.module('app.emailsList')
.factory('emailsListSvc', ['$http', '$sanitize', function($http, $sanitize) {
  
var services = {

    getAll: function() {
      var results = $http.get('/api/v1/emails/get_all');
      return results;
    },

    getEmailByid: function(email_id) {
      var results = $http.post('/api/v1/emails/get_collection', angular.toJson({ id: email_id }));
      return results;
    },

    saveEmail: function(email) {
      var results = $http.post('/api/v1/emails/saveEmail', angular.toJson(email));
      return results;
    },

    create: function(email) {
      var results = $http.post('/api/v1/emails/create', angular.toJson(email));
      return results;
    },

    updateKeyword: function(email) {
      var results = $http.post('/api/v1/emails/update', angular.toJson(email));
      return results;
    },

    delete: function(id) {
      return $http({ method: 'DELETE', url: '/api/v1/emails/delete/'+id });
    },

    search: function(email) {
      return $http.get('/api/v1/emails/search', angular.toJson(email));
    }

  };

  return services;

}]);
