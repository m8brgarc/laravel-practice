@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                @foreach($errors->all() as $key => $error)
                    <span class="alert-danger">{{ ($key < (count($errors->all()) - 1)) ? preg_replace('/\./', ',', $error) : $error; }}</span>
                @endforeach
                @if(Session::get('success'))
                    <p class="alert-success">{{ Session::get('success'); }}</p>
                @endif
            </div>
            <div class="col-md-6 col-md-offset-3">
                <h1>Contact Us</h1>
                {{ Form::open(array('url' => '/contact', 'role' => 'form', 'class' => 'stripe-sm')) }}
                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', null, array('placeholder' => 'Enter Your Name', 'class' => 'form-control')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', 'Email Address') }}
                        {{ Form::email('email', null, array('placeholder' => 'Enter Your Email Address', 'class' => 'form-control')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('msg', 'Message') }}
                        {{ Form::textarea('msg', null, array('placeholder' => 'Enter Your Message', 'class' => 'form-control')) }}
                    </div>
                    <div class="form-group text-right">
                        {{ Form::submit('Send Message', array('class' => 'btn btn-primary')) }}
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop