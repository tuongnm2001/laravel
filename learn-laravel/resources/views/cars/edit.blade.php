@extends('layout.app')

@section('content')
    <div class="m-auto w4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                UPDATE Car
            </h1>
        </div>

        <div class="flex justify-center pt-20">
            <form action="/cars/{{ $car->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="block">
                    <input 
                        type="text"
                        name="name"
                        value="{{ $car->name }}"
                    />

                     <input 
                        type="text"
                        name="founder"
                        placeholder="founder..."
                        value="{{ $car->founder }}"
                    />

                     <input 
                        type="text"
                        name="description"
                        value="{{ $car->description }}"
                    />

                    <button type="submit">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection