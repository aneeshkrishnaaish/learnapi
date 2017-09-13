<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en" ng-app="autocompleteFloatingLabelDemo" ng-controller="DemoCtrl as ctrl">
<head>
<title>Backend</title>
<!-- Angular Material Dependencies -->
<script src="support/js/angular.js"></script>
<script src="support/js/angular-animate.js"></script>
<script src="support/js/angular-material.js"></script>
<script src="support/js/angular-material-icons.js"></script>
<script src="support/js/angular-aria.js"></script>
<script src="support/js/script.js"></script>
<link rel="stylesheet" href="support/css/angular-material.css">
<link rel="stylesheet" href="support/css/style.css">
<link rel="stylesheet" href="support/css/bootstrap.min.css">
</head>
<body>
	<div layout="column">
		<md-content layout-padding layout="column">
		  <form ng-submit="$event.preventDefault()">
		    <div layout-gt-sm="row" style="height:100px;margin-top:50px;">
		      <md-input-container flex>
		        <label>Email</label>
		        <input type="text" ng-model="student.email"/>
		      </md-input-container>
  		      <md-input-container flex>
		        <label>Password</label>
		        <input type="password" ng-model="student.password"/>
		      </md-input-container>
		      <button>SignIn</button>
		    </div>
		  </form>
		</md-content>
	</div>
	<div class="col-md-12" style="margin-top: 100px">
		<div class="col-md-4">
				<table border="0">
					<tr>
						<md-input-container flex>
					        <label>FirstName</label>
					        <input type="text" ng-model="student.firstName"/>
					    </md-input-container>
					</tr>
					<tr>
						<md-input-container flex>
					        <label>LastName</label>
					        <input type="text" ng-model="student.lastName"/>
					    </md-input-container>
					</tr>
					<tr>
						<md-input-container flex>
					        <label>Email</label>
					        <input type="text" ng-model="student.email"/>
					    </md-input-container>
					</tr>					
				</table>	
			</div>
			<div class="col-md-4">
				<table border="2px">
					<tr>
			         	<md-autocomplete flex 
				          md-no-cache="ctrl.noCache"
				          md-selected-item="ctrl.selectedItem"
				          md-search-text="ctrl.searchText"
				          md-items="item in ctrl.querySearch(ctrl.searchText)"
				          md-item-text="item.display"
				          md-floating-label="Favorite state" ng-model="student.state">
				        <span md-highlight-text="ctrl.searchText">{{item.display}}</span>
			      		</md-autocomplete>
					<tr>
						<md-input-container flex>
					        <label>Password</label>
					        <input type="text" ng-model="student.password"/>
					    </md-input-container>
				    </tr>
				    <tr>
						<md-input-container flex>
					        <label>Confirm Password</label>
					        <input type="text" ng-model="student.conf.password"/>
					    </md-input-container>
				    </tr>
				</table>
			</div>
			<div class="col-md-4">
				<img src="support/img/1.jpg" width="300px" height="250px">
			</div>
		</div>
		<div class="container">
			<button class="btn-success">Sign up</button>
		</div>
	</body>
</html>