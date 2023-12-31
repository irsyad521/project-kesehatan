<!-- resources/views/appointments/edit.blade.php -->

<h1>Formulir Edit Janji Temu</h1>

<!-- Form untuk mengedit data janji temu -->
<form action="{{ route('appointments.update', $appointment->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="patient_id">ID Pasien:</label>
    <input type="text" id="patient_id" name="patient_id" value="{{ $appointment->patient_id }}" required><br><br>
    <label for="date_time">Tanggal & Waktu:</label>
    <input type="datetime-local" id="date_time" name="date_time" value="{{ $appointment->date_time }}" required><br><br>
    <label for="description">Deskripsi:</label>
    <textarea id="description" name="description" required>{{ $appointment->description }}</textarea><br><br>
    <!-- Tambahkan input lainnya jika diperlukan -->
    <button type="submit">Simpan</button>
</form>
<a href="{{ route('appointments.index') }}">Kembali ke Daftar Janji Temu</a>
