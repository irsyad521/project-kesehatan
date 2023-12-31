<!-- resources/views/patients/show.blade.php -->

<h1>Detail Pasien</h1>

<!-- Tampilkan detail dari pasien tertentu -->
<p>ID: {{ $patient->id }}</p>
<p>Nama: {{ $patient->name }}</p>
<p>Alamat: {{ $patient->address }}</p>
<!-- Tampilkan detail lainnya jika diperlukan -->
<a href="{{ route('patients.index') }}">Kembali ke Daftar Pasien</a>
