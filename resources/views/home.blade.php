@extends('layouts.app')

@section('content')
    
    <div class="container py-4">
        <div class="row row-cols-5 g-4">
            @foreach ($today_trains as $train)
                <div class="col">
                    <div class="card">
                        <h3>{{$train->train_code}}</h3>
                        <p>{{$train->departure_station}} - {{$train->arrive_station}}</p>
                        <p>{{$train->departure_time}} - {{$train->arrive_time}}</p>
                        @if ($train->on_time === 0)
                            <h4>Train is Late</h4>
                        @else
                            <h4>Train on-Time</h4>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div> 
    
@endsection