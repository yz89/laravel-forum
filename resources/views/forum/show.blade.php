@extends('app')

@section('content')
    <div class="container">

        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <div class="media">
                	<div class="media-left">
                		<a href="">
                			<img src="{{ $discussion->user->avatar }}" alt="64x64" class="media-object img-circle" style="width:64px;height:64px">
                		</a>
                	</div>
                	<div class="media-body">
                		<h4 class="media-heading">
                            {{ $discussion->title }}
                            @if(Auth::check() && Auth::user()->id == $discussion->user_id)
                            <a class="btn btn-lg btn-primary pull-right" href="/discussions/{{ $discussion->id }}/edit" role="button">修改帖子</a>
                            @endif
                        </h4>
                        {{ $discussion->user->name }}
                	</div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-9" role="main">
                    <div class="blog-post">
                        {{ $discussion->body }}
                    </div>
                    <hr>
                    @foreach($discussion->comments as $comment)
                        <div class="media">
                        	<div class="media-left">
                        		<a href="">
                        			<img src="{{ $comment->user->avatar }}" alt="64x64" class="media-object img-circle" style="width:64px;height:64px">
                        		</a>
                        	</div>
                        	<div class="media-body">
                        		<h4 class="media-heading">{{ $comment->user->name }}</h4>
                        		{{ $comment->body }}
                        	</div>
                        </div>
                    @endforeach
                    <hr>
                    @if(Auth::check())
                    {!! Form::open(['url'=>'/comment']) !!}
                        <!--- Body Field --->
                        {!! Form::hidden('discussion_id',$discussion->id) !!}
                        <div class="form-group">
                            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                        </div>
                        <div>
                            {!! Form::submit('发表信息', ['class' => 'btn btn-success pull-right']) !!}
                        </div>
                    {!! Form::close() !!}
                    @else
                        <a href="/users/login" class="btn btn-block btn-success">登录参与评论</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop