<x-App>

    <x-slot:title>{{ $title }}</x-slot>

    <div class="d-flex justify-content-between mb-4">
        <h2 class="fw-bold">Data Pasien</h2>

        <a href="/pasien/create" class="btn btn-primary">
            Tambah Pasien
        </a>
    </div>

    <div class="card p-4">
        <p>Halaman data pasien rumah sakit.</p>
    </div>

</x-App>
