@extends('app')
@section('content')
    <div class="container">
    	<div class="row">
    		<div class="col-md-6 col-md-offset-3">
    			<div class="text-center">
					<img src="{{ Auth::user()->avatar }}" alt="64x64" class="img-circle" style="width:64px;height:64px">
					{!! Form::open(['url'=>'/avatar','files'=>true]) !!}
					    {!! Form::file('avatar') !!}
						{!! Form::submit('上传头像', ['class' => 'btn btn-primary pull-right']) !!}
					{!! Form::close() !!}
				</div>
    		</div>
    	</div>
    </div>
@stop