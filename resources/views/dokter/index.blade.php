<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-danger mb-3" href="{{ route('dokter.create') }}">
        Create
    </a>

    <form action="" class="mb-3">
        <div class="row">

            <div class="col-md-5">
                <input type="text" name="keyword" class="form-control" placeholder="Cari Dokter"
                    value="{{ request('keyword') }}">
            </div>

            <div class="col-md-5">
                <select name="poli" class="form-control">
                    <option value="">Semua Poli</option>

                    @foreach ($polis as $poli)
                        <option value="{{ $poli->id }}" @selected(request('poli') == $poli->id)>
                            {{ $poli->nama_poli }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-2">
                <button class="btn btn-primary">
                    Search
                </button>
            </div>

        </div>
    </form>

    <ul class="list-group">
        @foreach ($dokters as $dokter)
            <li class="list-group-item">
                {{ $dokters->firstItem() + $loop->index }}.

                {{ $dokter->nama_dokter }} --
                {{ $dokter->spesialis }} --
                {{ $dokter->no_telepon }} --
                {{ $dokter->poli->nama_poli }} --
                {{ $dokter->created_at->format('d-m-Y') }}


                <a href="{{ route('dokter.show', $dokter) }}" class="btn btn-info btn-sm">
                    Detail
                </a>

                <a href="{{ route('dokter.edit', $dokter) }}" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('dokter.destroy', $dokter) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin?')">
                        Delete
                    </button>
                </form>
            </li>
        @endforeach
    </ul>

    <div class="mt-3">
        {{ $dokters->links() }}
    </div>

</x-app>
