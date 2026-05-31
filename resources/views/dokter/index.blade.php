<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <a class="btn btn-danger mb-3" href="#">
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

                    <option value="">
                        Semua Poli
                    </option>

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
            </li>
        @endforeach
    </ul>

    <div class="mt-3">
        {{ $dokters->links() }}
    </div>

</x-app>
