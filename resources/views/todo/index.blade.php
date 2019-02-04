<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>Angular Basic CRUD</title>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style type="text/css">
  .strike {
    text-decoration: line-through;
  }
</style>
<body>
<div data-ng-app="firstApp" data-ng-controller="firstCtrl" ng-init="initFirst()">
   <div class="container">
      <br><br><br>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <h1 class="text-center"> To Do </h1>
          <div class="form-group">
            <label for="exampleInputEmail1">Task Name :</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" data-ng-model="name" placeholder="Enter Task name">
            <br>
            <button type="button" ng-click="saveData()" class="btn btn-primary">Save</button>
          </div>
            <ul class="list-group">
                <li class="list-group-item" ng-repeat="x in people">
                  <span ng-class="{strike: x.status}">@{{ x.name }}</span> <button type="button" class="btn btn-primary" style="float: right;" ng-click="statusChange(x.id)">Mark</button>
                </li>
            </ul>
        </div>
        <div class="col-md-4">
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong ng-bind="myWelcome"></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        </div>
      </div>
    </div>
  </ul>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('angular/models/firstModel.js') }}"></script>
<script type="text/javascript" src="{{ asset('angular/controllers/firstCtrl.js') }}"></script>
<script type="text/javascript" src="{{ asset('angular/directives/firstdirective.js') }}"></script>
</body>
</html>