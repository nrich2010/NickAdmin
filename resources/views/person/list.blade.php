@extends('app')

@section('content')
<div class="container" ng-controller="PersonListCtrl">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Listing of people</div>

				<div class="panel-body">

                    <div ng-repeat="person in people">
                        <p>{{person.name}} = {{person.description}}</p>
                    </div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
