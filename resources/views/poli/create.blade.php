<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('poli.store') }}">
        @csrf

        <div class="mb-3">
            <label>Nama Poli</label>
            <input type="text" name="nama_poli" class="form-control @error('nama_poli') is-invalid @enderror"
                value="{{ old('nama_poli') }}">

            @error('nama_poli')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Kode Poli</label>
            <input type="text" name="kode_poli" class="form-control @error('kode_poli') is-invalid @enderror"
                value="{{ old('kode_poli') }}">

            @error('kode_poli')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Lokasi</label>
            <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror"
                value="{{ old('lokasi') }}">

            @error('lokasi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <a href="{{ route('poli.index') }}" class="btn btn-warning">
            Cancel
        </a>

        <button type="submit" class="btn btn-danger">
            Submit
        </button>
    </form>
</x-app>
