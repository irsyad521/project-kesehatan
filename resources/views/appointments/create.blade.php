<!-- resources/views/appointments/create.blade.php -->

<h1>Formulir Tambah Janji Temu</h1>

<!-- Form untuk membuat janji temu baru -->
<form action="{{ route('appointments.store') }}" method="POST">
    @csrf
    <label for="patient_id">ID Pasien:</label>
    <input type="text" id="patient_id" name="patient_id" required><br><br>
    <label for="date_time">Tanggal & Waktu:</label>
    <input type="datetime-local" id="date_time" name="date_time" required><br><br>
    <label for="description">Deskripsi:</label>
    <textarea id="description" name="description" required></textarea><br><br>
    <!-- Tambahkan input lainnya jika diperlukan -->
    <button type="submit">Simpan</button>
</form>
