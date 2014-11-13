<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {{ HTML::decode(link_to('blogs?page='.$page, '<span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Back', array('class' => 'btn btn-primary'))) }}
        </div>
        <div class="col-md-6 col-md-offset-3 text-center">
            @foreach($errors->all() as $key => $error)
                <span class="alert-danger">{{ ($key < (count($errors->all()) - 1)) ? preg_replace('/\./', ',', $error) : $error; }}</span>
            @endforeach
        </div>
        <div class="col-md-6 col-md-offset-3">
            @if(!empty($blog))
                <h2>Edit Post</h2>
                {{ Form::model($blog, array('route' => array('blog.update', $blog->id), 'method' => 'patch')) }}
            @else
                <h2>New Post</h2>
                {{ Form::open(array('route' => 'blog.store')) }}
            @endif
                <div class="form-group">
                    {{ Form::label('title', 'Title') }}
                    {{ Form::text('title', Input::old('title'), array('placeholder' => 'Enter a Title', 'class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('author', 'Author') }}
                    {{ Form::text('author', Input::old('author'), array('placeholder' => 'Enter a Title', 'class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('content', 'Content') }}
                    {{ Form::textarea('content', Input::old('content'), array('placeholder' => 'Enter a Title', 'class' => 'form-control')) }}
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>&nbsp;&nbsp;Save</button>
                </div>
                {{ Form::close() }}
        </div>
    </div>
</div>