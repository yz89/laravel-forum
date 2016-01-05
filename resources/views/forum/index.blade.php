@extends('app')

@section('content')
    <div class="container">

        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h2>欢迎来到Laravel App社区
                <a class="btn btn-lg btn-primary pull-right" href="/discussions/create" role="button">发布新的帖子</a>
            </h2>
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
                        		<h4 class="media-heading">
                                    <a href="/discussions/{{ $discusson->id }}">{{ $discusson->title }}</a>
                                </h4>
                                {{ $discusson->user->name }}
                        	</div>
                        </div>
                    @endforeach
        		</div>
        	</div>
        </div>
    </div>
@stop