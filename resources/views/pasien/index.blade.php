<x-App>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">

            {{ session('success') }}

        </div>
    @endsession

    <a href="{{ route('pasien.create') }}" class="btn btn-primary mb-3">

        Tambah Pasien

    </a>

    <ul class="list-group">

        @foreach ($pasiens as $pasien)
            <li class="list-group-item">

                {{ $loop->iteration }}.

                {{ $pasien->nama_pasien }} --

                {{ $pasien->umur }} Tahun --

                {{ $pasien->jenis_kelamin }} --

                {{ $pasien->alamat }} --

                {{ $pasien->keluhan }}

                <a href="{{ route('pasien.edit', $pasien) }}" class="btn btn-warning btn-sm">Edit</a>

            </li>
        @endforeach

    </ul>

</x-App>
