<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <form action="" class="mb-3">
        <input type="text" name="keyword" class="form-control" placeholder="Cari Poli" value="{{ request('keyword') }}">
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
