@extends('layout.layout')

@section('content')
    <div class="container text-center block-sep-lg">
        <div class="row">
            @if(!empty($msg))
                <div class="col-xs-12 text-center">
                    <span class="alert-success h3">{{ $msg }}</span>
                </div>
            @endif
            <div class="col-xs-3 text-left">
                <div class="inner-sm">
                    {{ HTML::decode(link_to_route('blog.create', '<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New', null, array('class' => 'btn btn-primary'))) }}
                </div>
            </div>
            <div class="col-xs-6">
                {{ $blogs->links() }}
            </div>
        </div>
        <div class="row block-sep-sm">
            <div class="col-sm-3 col-xs-4 h4">
                Title
            </div>
            <div class="col-sm-3 col-xs-4 h4">
                Author
            </div>
            <div class="col-sm-3 hidden-xs h4">
                Date
            </div>
            <div class="col-sm-3 col-xs-4 h4">
                Modify
            </div>
        </div>
        <hr/>
        @foreach($blogs as $blog)
            <div class="row block-sep">
                <div class="col-sm-3 col-xs-4 ellipsis">
                    {{ link_to_route('blog.show', $blog->title, array('id' => $blog->id)) }}
                </div>
                <div class="col-sm-3 col-xs-4 ellipsis">
                    {{ $blog->author }}
                </div>
                <div class="col-sm-3 hidden-xs ellipsis">
                    {{ ($blog->updated_at > $blog->created_at) ? '<span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;' . date_format($blog->updated_at, 'M d, Y') : date_format($blog->created_at, 'M d, Y') }}
                </div>
                <div class="col-sm-3 col-xs-4">
                    <div class="btn-group custom-btn-group">
                        {{ HTML::decode(link_to_route('blog.edit', '<span class="glyphicon glyphicon-pencil"></span>', array('id' => $blog->id), array('class' => 'btn btn-primary btn-sm'))) }}
                        {{ Form::open(array('route' => array('blog.destroy', $blog->id), 'style' => 'display:inline;', 'method' => 'delete')) }}
                        <button type="submit" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span></button>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop