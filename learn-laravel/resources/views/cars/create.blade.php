@extends('layout.app')

@section('content')
    <div class="m-auto w4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Create Car
            </h1>
        </div>

        <div class="flex justify-center pt-20">
            <form action="/cars" method="POST">
                @csrf
                <div class="block">
                    <input 
                        type="text"
                        name="name"
                        placeholder="brand name..."
                    />

                     <input 
                        type="text"
                        name="founder"
                        placeholder="founder..."
                    />

                     <input 
                        type="text"
                        name="description"
                        placeholder="description..."
                    />

                    <button type="submit">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection