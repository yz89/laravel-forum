@extends('app')

@section('content')
    <div class="container">

        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Hello World!
                <a class="btn btn-lg btn-primary pull-right" href="#" role="button">View navbar docs »</a>
            </h1>
        </div>
        <div class="container">
        	<div class="row">
        		<div class="col-md-9" role="main">
        			@foreach($discussons as $discusson)
                        <div class="media">
                        	<div class="media-left">
                        		<a href="">
                        			<img src="{{ $discusson->user->avatar }}" alt="64x64" class="media-object img-circle" style="width:64px;height:64px">
                        		</a>
                        	</div>
                        	<div class="media-body">
                        		<h4 class="media-heading">{{ $discusson->title }}</h4>
                                {{ $discusson->user->name }}
                        	</div>
                        </div>
                    @endforeach
        		</div>
        	</div>
        </div>
    </div>
@stop