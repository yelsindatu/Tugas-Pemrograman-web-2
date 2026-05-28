<x-App>

    <x-slot:title>{{ $title }}</x-slot>

    <div class="d-flex justify-content-between mb-4">

        <h2 class="fw-bold">Data Pasien</h2>

        <a href="/pasien/create" class="btn btn-primary">
            Tambah Pasien
        </a>

    </div>

    <ul class="list-group">

        @foreach ($pasiens as $pasien)
            <li class="list-group-item">

                {{ $loop->iteration }}.

                {{ $pasien->nama_pasien }} --

                {{ $pasien->umur }} Tahun --

                {{ $pasien->jenis_kelamin }} --

                {{ $pasien->alamat }} --

                {{ $pasien->keluhan }}

            </li>
        @endforeach

    </ul>

</x-App>
