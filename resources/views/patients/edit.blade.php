<!-- resources/views/patients/edit.blade.php -->

<h1>Formulir Edit Pasien</h1>

<!-- Form untuk mengedit data pasien -->
<form action="{{ route('patients.update', $patient->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Nama:</label>
    <input type="text" id="name" name="name" value="{{ $patient->name }}" required><br><br>
    <label for="address">Alamat:</label>
    <input type="text" id="address" name="address" value="{{ $patient->address }}" required><br><br>
    <!-- Tambahkan input lainnya jika diperlukan -->
    <button type="submit">Simpan</button>
</form>
<a href="{{ route('patients.index') }}">Kembali ke Daftar Pasien</a>
