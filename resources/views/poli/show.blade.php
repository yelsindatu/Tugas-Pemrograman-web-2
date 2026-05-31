<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <a href="{{ route('poli.index') }}" class="btn btn-secondary mb-3">
        Back
    </a>

    <ul class="list-group">
        <li class="list-group-item">
            Kode Poli : {{ $poli->kode_poli }}
        </li>

        <li class="list-group-item">
            Nama Poli : {{ $poli->nama_poli }}
        </li>

        <li class="list-group-item">
            Lokasi : {{ $poli->lokasi }}
        </li>

        <li class="list-group-item">
            Dibuat : {{ $poli->created_at->format('d-m-Y H:i') }}
        </li>

        <li class="list-group-item">
            Diupdate : {{ $poli->updated_at->diffForHumans() }}
        </li>
    </ul>
</x-app>
