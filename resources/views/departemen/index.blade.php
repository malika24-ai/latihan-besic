<x-app>
    <x-slot:title>{{ $title }}</x-slot>
    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('departemen.create') }}" role="button">Create</a>

    <ul class="list-group">
        @foreach ($departemen as $departemen)

            <li class="list-group-item">
                {{ $loop->iteration }}.{{ $departemen->name }}

                <a class="btn btn-primary btn-sm" href="{{ route('departemen.edit', $departemen) }}" role="button">edit</a>
                <form action="{{ route('departemen.destroy', $departemen) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf

                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Anda Yakin?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-app>