<div class="container block-sep-lg">
    <div class="row">
        <hr/>
        <div class="col-sm-8 col-sm-offset-2 col-xs-12">
            <h5>Comments</h5>
            <div class="row">
                @foreach($comments as $comment)
                    <div class="col-xs-6">
                        <h5>Author - {{ $comment->author }}</h5>
                    </div>
                    <div class="col-xs-6">
                        <h5>{{ date_format($comment->created_at, 'g:ia | m/d/Y') }} {{ ($comment->updated_at > $comment->created_at) ? ' | Edited - ' . date_format($comment->updated_at, 'm/d/Y') : '' }}</h5>
                    </div>
                    <div class="col-xs-12">
                        <p>{{ $comment->comment_text }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>