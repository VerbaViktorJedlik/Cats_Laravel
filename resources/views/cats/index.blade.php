<x-layout>
    <h1>Registered cats</h1>

    <div class="d-flex  mb-2">
        <a href="{{ route('cats.create') }}" class="btn btn-primary">Add a new cat</a>
    
    </div>
    <div class="row ">
        @foreach ($cats as $cat)
            <x-cat-card :cat="$cat" />
        @endforeach
    </div>

</x-layout>
