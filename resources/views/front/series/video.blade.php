@extends('layouts.app')

@section('content')

<b-container>
    <h2 class="mb-2 mb-md-5">Video Player</h2>
    <section class="d-flex justify-content-center">
        <video controls>
            <source src="{{asset('videos/test.mp4')}}" type="video/mp4">
                Your browser does not support the video tag
        </video>
    </section>

    <section class="mb-5 pt-5 text-center">
        <a href="#" class="text-decoration-none" style="color: black">
        <b-card class="mb-2 overflow-hidden" no-body>
            <b-col>
                <h3 class="pt-3"><strong>About this Episode</strong></h3>

                <b-card-body title="{{$video->title}}">
                    <b-card-text>
                        {{$video->description}}
                    </b-card-text>
                </b-card-body>
            </b-col>
        </b-card>
    </a>

    </section>

    <section class="mb-3">
        <hr style="background: blue">
        <h3 class="mb-3 text-center">Episodes</h3>

        <episodes :videos="{{$series->videos}}"></episodes>

    </section>

</b-container>



@endsection
