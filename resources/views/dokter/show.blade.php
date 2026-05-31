<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <a href="{{ route('dokter.index') }}" class="btn btn-secondary mb-3">
        Back
    </a>

    <ul class="list-group">
        <li class="list-group-item">
            Nama Dokter : {{ $dokter->nama_dokter }}
        </li>

        <li class="list-group-item">
            Spesialis : {{ $dokter->spesialis }}
        </li>

        <li class="list-group-item">
            No Telepon : {{ $dokter->no_telepon }}
        </li>

        <li class="list-group-item">
            Poli : {{ $dokter->poli->nama_poli }}
        </li>

        <li class="list-group-item">
            Dibuat : {{ $dokter->created_at->format('d-m-Y H:i') }}
        </li>
    </ul>
</x-app>
