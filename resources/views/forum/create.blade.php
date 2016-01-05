@extends('app')
@section('content')
    <div class="container">
    	<div class="row">
    		<div class="col-md-8 col-md-offset-2" role="main">
                {!! Form::open(['url'=>'/discussions']) !!}
                @include('forum.form')
                <div>
                    {!! Form::submit('发表帖子', ['class' => 'btn btn-primary pull-right']) !!}
                </div>
                {!! Form::close() !!}
    		</div>
    	</div>
    </div>	
@stop