<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('poli.update', $poli) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="kode_poli" class="form-label">Kode Poli</label>
            <input type="text" class="form-control @error('kode_poli') is-invalid @enderror" id="kode_poli"
                name="kode_poli" value="{{ old('kode_poli', $poli->kode_poli) }}">

            @error('kode_poli')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nama_poli" class="form-label">Nama Poli</label>
            <input type="text" class="form-control @error('nama_poli') is-invalid @enderror" id="nama_poli"
                name="nama_poli" value="{{ old('nama_poli', $poli->nama_poli) }}">

            @error('nama_poli')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi"
                name="lokasi" value="{{ old('lokasi', $poli->lokasi) }}">

            @error('lokasi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a class="btn btn-warning" href="{{ route('poli.index') }}">
            Cancel
        </a>

        <button type="submit" class="btn btn-primary">
            Submit
        </button>
    </form>
</x-app>
