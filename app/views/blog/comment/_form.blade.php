<div class="row comment-form" {{ ($errors->all()) ? 'style="display:block;"' : '' }}>
    @if(count($errors->all()) > 0)
    <div class="col-md-6 col-md-offset-3 text-center">
        @foreach($errors->all() as $key => $error)
            <span class="alert-danger">{{ ($key < (count($errors->all()) - 1)) ? preg_replace('/\./', ',', $error) : $error; }}</span>
        @endforeach
    </div>
    @endif
    <div class="col-md-6 col-md-offset-3 text-center">
            <h2>New Comment</h2>
            {{ Form::open(array('route' => array('blog.comment.store', $blog->id))) }}
            <div class="form-group">
                {{ Form::label('author', 'Author') }}
                {{ Form::text('author', Input::old('author'), array('placeholder' => 'Enter Your Name', 'class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('rating', 'Rating') }}
                {{ Form::selectRange('rating', 1, 5, 5, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('comment_text', 'Comment Text') }}
                {{ Form::textarea('comment_text', Input::old('content'), array('placeholder' => 'Enter Your Comment', 'class' => 'form-control')) }}
            </div>
            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;Post Comment</button>
            </div>
            {{ Form::close() }}
    </div>
</div>