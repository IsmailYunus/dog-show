@extends('layouts.app')

@section ('content')

    <div class="container mx-auto">
        <div class="flex justify-between">
            <div class="text-4xl mb-8">
                <h1>Poppleton Dog Show: Leaderboard</h1>
            </div>
            <div>
                <p class="nav-button mr-2">
                    <a href="/dog/"><i class="fas fa-paw mr-2"></i>Add New Dog</a>
                </p>
            </div>
        </div>
        <div class="flex flex-wrap">

            @foreach ($dogs as $dog)

                <div class="w-1/3 pr-2">
                    @include ('_dog')
                </div>

            @endforeach
        </div>

            {{ $dogs -> links () }}

    </div>

@endsection
