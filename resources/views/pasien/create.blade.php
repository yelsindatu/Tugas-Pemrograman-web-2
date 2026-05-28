<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <h2 class="fw-bold mb-4">Form Tambah Pasien</h2>

    <form method="POST" action="{{ route('pasien.store') }}">

        @csrf

        <div class="mb-3">

            <label class="form-label">Nama Pasien</label>

            <input type="text" name="nama_pasien" class="form-control @error('nama_pasien') is-invalid @enderror"
                value="{{ old('nama_pasien') }}">

            @error('nama_pasien')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <div class="mb-3">

            <label class="form-label">Umur</label>

            <input type="number" name="umur" class="form-control @error('umur') is-invalid @enderror"
                value="{{ old('umur') }}">

            @error('umur')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <div class="mb-3">

            <label class="form-label">Jenis Kelamin</label>

            <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">

                <option value="">-- Pilih --</option>

                <option value="Laki-laki">Laki-laki</option>

                <option value="Perempuan">Perempuan</option>

            </select>

            @error('jenis_kelamin')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <div class="mb-3">

            <label class="form-label">Alamat</label>

            <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat') }}</textarea>

            @error('alamat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <div class="mb-3">

            <label class="form-label">Keluhan</label>

            <input type="text" name="keluhan" class="form-control @error('keluhan') is-invalid @enderror"
                value="{{ old('keluhan') }}">

            @error('keluhan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <a href="{{ route('pasien.index') }}" class="btn btn-warning">
            Cancel
        </a>

        <button type="submit" class="btn btn-primary">
            Submit
        </button>

    </form>

</x-app>
