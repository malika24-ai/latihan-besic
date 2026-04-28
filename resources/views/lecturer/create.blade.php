<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('lecturer.store') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nama Mahasiswa</label>
            <input type="text" 
                class="form-control @error('name') is-invalid @enderror"
                id="name" 
                name="name"
                value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="departemen_id" class="form-label">Departemen</label>
            <select class="form-select" id="departemen_id" name="departemen_id">
                <option value="">Choose Department</option>
                @foreach ($departemens as $departement)
                    <option value="{{ $departement->id }}"
                        {{ old('departemen_id') == $departement->id ? 'selected' : '' }}>
                        {{ $departement->name }}
                    </option>
                @endforeach
            </select>
            @error('departemen_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a class="btn btn-warning" href="{{ route('lecturer.index') }}">Cancel</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-app>