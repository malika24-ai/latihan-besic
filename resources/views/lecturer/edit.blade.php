<x-app>

    <x-slot:title>{{ $title }}</x-slot>


    <form method="POST" action="{{ route('lecturer.update', $lecturer) }}">

    @csrf
        @method('PUT')


    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror"
        id="name" name="name" value="{{ old('name', $lecturer->name) }}">
        @error('name')
    <div class="invalid-feedback">{{ $message }}</div>

        @enderror
    
    </div>
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="number" class="form-control @error('nim') is-invalid @enderror"
        id="nim" name="nim" value="{{ old('nim', $lecturer->nim) }}">
        @error('nim')
    <div class="invalid-feedback">{{ $message }}</div>

        @enderror
    
    </div>
    
    <a class="btn btn-warning" href="{{ route('lecturer.index') }}" 
    role="button">Cencel</a>


    <button type="submit" class="btn btn-primary">Submit</button>
    
</form>  
    
</x-app>