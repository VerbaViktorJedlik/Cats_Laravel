<x-layout>
    <h1 class="text-center">Edit cat</h1>

    <form action="{{ route('cats.store') }}" method="POST" class="mt-4 ">
        @csrf
        
        
        
            <img src="{{old('image_url')}}" class="col-md-4 rounded float-end" alt="">
       
        
        <div class="mb-3 col-md-4 ">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3 col-md-4">
            <label for="breed" class="form-label">Breed</label>
            <input type="text" class="form-control" id="breed" name="breed" value="{{ old('breed') }}">
        </div>

        <div class="mb-3 col-md-4">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="{{ old('age') }}">
        </div>

        <div class="mb-3 col-md-4">
            <label for="ownerName" class="form-label">Owner Name</label>
            <input type="text" class="form-control" id="ownerName" name="ownerName" value="{{ old('ownerName') }}">
        </div>

        <div class="mb-3 col-md-4">
            <label for="ownerEmail" class="form-label">Owner email</label>
            <input type="email" class="form-control" id="ownerEmail" name="ownerEmail" value="{{ old('ownerEmail') }}">
        </div>

        <div class="mb-3 col-md-4">
            <label for="image_url" class="form-label">Image URL</label>
            <input type="url" class="form-control" id="image_url" name="image_url" value="{{ old('image_url') }}">
        </div>

        <div class="mb-3 col-md-4" >
            <label for="vaccinated" class="form-label">Vaccinated</label>
            <input type="checkbox" class="form-check-input" id="vaccinated" name="vaccinated" >
        </div>


        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Upload cat</button>
            <a href="{{ route('cats.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</x-layout>
