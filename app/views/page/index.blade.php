@extends('layout.layout')

@section('content')
    <div class="container-fluid hero bg-cover block-sep-lg" style="background: url('http://vitalhomeopathy.in/images/hx-banner-background.jpg') bottom center repeat-x; background-size: contain;">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1 class="stripe-xxl"><span>Welcome to our Business!</span></h1>
            </div>
        </div>
    </div>
    <div class="container block-sep-lg">
        <div class="row">
            <div class="col-md-4">
                <div class="mod inner text-center">
                    <img class="block-sep-sm" src="http://placehold.it/300x200" alt="image">
                    <p>
                        Duis at dolor imperdiet, congue diam et, dapibus ante. Suspendisse eu dolor vel quam viverra porttitor. Quisque ac lobortis velit, et sagittis dolor. Duis ac mollis dui. Praesent non eros vel ex lacinia consequat ut nec magna. Vivamus rutrum elementum lorem nec mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut quis erat ut risus mattis porta bibendum eget metus. Proin congue convallis purus, quis viverra neque euismod nec. Nullam tempus ligula vel ante rhoncus, ut pretium sapien ullamcorper. Donec feugiat vel enim vitae ultrices. Cras consequat tortor ac nunc auctor auctor. Sed tortor risus, tincidunt sed consectetur eu, imperdiet vitae purus. Integer id vulputate nibh.
                    </p>
                    {{ link_to('#', 'See More &nbsp;>>>', array('class' => 'btn btn-primary btn-block')); }}
                </div>
            </div>
            <div class="col-md-4">
                <div class="mod inner text-center">
                    <img class="block-sep-sm" src="http://placehold.it/300x200" alt="image">
                    <p>
                        Duis at dolor imperdiet, congue diam et, dapibus ante. Suspendisse eu dolor vel quam viverra porttitor. Quisque ac lobortis velit, et sagittis dolor. Duis ac mollis dui. Praesent non eros vel ex lacinia consequat ut nec magna. Vivamus rutrum elementum lorem nec mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut quis erat ut risus mattis porta bibendum eget metus. Proin congue convallis purus, quis viverra neque euismod nec. Nullam tempus ligula vel ante rhoncus, ut pretium sapien ullamcorper. Donec feugiat vel enim vitae ultrices. Cras consequat tortor ac nunc auctor auctor. Sed tortor risus, tincidunt sed consectetur eu, imperdiet vitae purus. Integer id vulputate nibh.
                    </p>
                    {{ link_to('#', 'See More &nbsp;>>>', array('class' => 'btn btn-primary btn-block')); }}
                </div>
            </div>
            <div class="col-md-4">
                <div class="mod inner text-center">
                    <img class="block-sep-sm" src="http://placehold.it/300x200" alt="image">
                    <p>
                        Duis at dolor imperdiet, congue diam et, dapibus ante. Suspendisse eu dolor vel quam viverra porttitor. Quisque ac lobortis velit, et sagittis dolor. Duis ac mollis dui. Praesent non eros vel ex lacinia consequat ut nec magna. Vivamus rutrum elementum lorem nec mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut quis erat ut risus mattis porta bibendum eget metus. Proin congue convallis purus, quis viverra neque euismod nec. Nullam tempus ligula vel ante rhoncus, ut pretium sapien ullamcorper. Donec feugiat vel enim vitae ultrices. Cras consequat tortor ac nunc auctor auctor. Sed tortor risus, tincidunt sed consectetur eu, imperdiet vitae purus. Integer id vulputate nibh.
                    </p>
                    {{ link_to('#', 'See More &nbsp;>>>', array('class' => 'btn btn-primary btn-block')); }}
                </div>
            </div>
        </div>
    </div>
@stop