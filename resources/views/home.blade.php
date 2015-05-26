@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					<h3>Hello: {{ Auth::user()->name }} <br></h3>
					You are logged in!
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
