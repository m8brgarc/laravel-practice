@extends('layout.layout')

@section('content')
    <div class="container block-sep-lg">
        <div class="row block-sep-lg">
            @if(!empty($msg))
                <div class="col-xs-12 text-center">
                    <span class="alert-success h3">{{ $msg }}</span>
                </div>
            @endif
            <div class="col-sm-8 col-sm-offset-2 col-xs-12">
                <h2 class="block-sep-sm">{{ $blog->title }}</h2>
                <h5>Published by {{ $blog->author }}</h5>
                <h5 class="block-sep-md">{{ date_format($blog->created_at, 'g:ia | m/d/Y') }} {{ ($blog->updated_at > $blog->created_at) ? ' | Updated - ' . date_format($blog->updated_at, 'm/d/Y') : '' }}</h5>
                <p class="block-sep-sm">{{ $blog->content }}</p>
            </div>
            <div class="col-sm-8 col-sm-offset-2 col-xs-12 btn-group">
                {{ HTML::decode(link_to('blogs?page='.$page, '<span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Back', array('class' => 'btn btn-primary')) . link_to_route('blog.edit', '<span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Edit', array('id' => $blog->id), array('class' => 'btn btn-primary'))) }}
            </div>
        </div>
        <div class="row">
            <hr/>
            <div class="col-sm-8 col-sm-offset-2 col-xs-12">
                <h3 class="text-center">Comments</h3>
                <div class="row">
                    @foreach($comments as $comment)
                        <div class="col-xs-6">
                            <h5>Author - {{ $comment->author }}</h5>
                        </div>
                        <div class="col-xs-6 text-right">
                            <h5>{{ date_format($comment->created_at, 'g:i:sa | m/d/Y') }} {{ ($comment->updated_at > $comment->created_at) ? ' | Edited - ' . date_format($comment->updated_at, 'm/d/Y') : '' }}</h5>
                        </div>
                        <div class="col-xs-12">
                            @for($i=1;$i<=5;$i++)
                                @if($i <= $comment->rating)
                                    <span class="glyphicon glyphicon-star"></span>
                                @else
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                @endif
                            @endfor
                        </div>
                        <div class="col-xs-12">
                            <p>{{ $comment->comment_text }}</p>
                        </div>
                    @endforeach
                    @if($comments->count() < 1)
                        <div class="col-xs-12 text-center">
                            <h4>No Comments Created</h4>
                            <h5>Be the first!</h5>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop