<!-- resources/views/patients/create.blade.php -->

<h1>Formulir Tambah Pasien</h1>

<!-- Form untuk membuat pasien baru -->
<form action="{{ route('patients.store') }}" method="POST">
    @csrf
    <label for="name">Nama:</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="address">Alamat:</label>
    <input type="text" id="address" name="address" required><br><br>
    <!-- Tambahkan input lainnya jika diperlukan -->
    <button type="submit">Simpan</button>
</form>
