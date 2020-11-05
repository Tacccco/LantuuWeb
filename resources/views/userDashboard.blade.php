@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                        <?php $num = count($posts) ?>
                        @if ($num > 0)
                            @foreach ($posts as $post)
                                <div>
                                    <h3> {{ $post->title }} </h3>
                                    <p> {{ $post->post }} </p>
                                </div>
                            @endforeach
                        @else 
                            <div>Nothing to see here</div>
                        @endif
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection
