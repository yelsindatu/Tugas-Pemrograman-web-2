<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-danger mb-3" href="{{ route('poli.create') }}" role="button">
        Create
    </a>

    <form action="" class="mb-3">
        <input type="text"
               name="keyword"
               class="form-control"
               placeholder="Cari Poli"
               value="{{ request('keyword') }}">
    </form>

    <ul class="list-group">
        @foreach ($polis as $poli)
            <li class="list-group-item">
                {{ $polis->firstItem() + $loop->index }}.
                {{ $poli->kode_poli }} --
                {{ $poli->nama_poli }} --
                {{ $poli->lokasi }}
            </li>
        @endforeach
    </ul>

    <div class="mt-3">
        {{ $polis->links() }}
    </div>
</x-app>