@extends('layout.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Cars
            </h1>
        </div>
    
        <div class="pt-10">
            <a 
                href="cars/create"
                class="border-b-2 pb-2 border-dotted italic text-grey-500"
            >
                Add a new Car
            </a>
        </div>

        <div class="w-5/6 py-10">
            @foreach ($cars as $item)
                <div class="m-auto">
                <div class="float-right">
                    <a href="cars/{{ $item->id}}/edit">
                        Edit &rarr;
                    </a>

                    <form action="/cars/{{ $item->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button 
                            type="submit"
                        >
                            Delete &rarr;
                        </button>
                    </form>
                </div>
                <span class="uppercase text-blue-blue-500 font-bold text-xs italic">
                    Founder :{{ $item->founder }}
                </span>

                <h2 class="text-grey-700 text-5xl"> 
                    <a href="/cars/{{ $item->id }}">
                        {{ $item->name }}
                    </a>
                </h2>

                <p class="text-lg text-grey-700">
                    {{ $item->description }}
                </p>

                <hr class="mt-4 mb-8"/>
            </div>
            @endforeach
        </div>
    </div>
@endsection