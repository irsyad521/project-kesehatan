<!-- resources/views/appointments/show.blade.php -->

<h1>Detail Janji Temu</h1>

<!-- Tampilkan detail dari janji temu tertentu -->
<p>ID: {{ $appointment->id }}</p>
<p>ID Pasien: {{ $appointment->patient_id }}</p>
<p>Tanggal & Waktu: {{ $appointment->date_time }}</p>
<p>Deskripsi: {{ $appointment->description }}</p>
<!-- Tampilkan detail lainnya jika diperlukan -->
<a href="{{ route('appointments.index') }}">Kembali ke Daftar Janji Temu</a>
