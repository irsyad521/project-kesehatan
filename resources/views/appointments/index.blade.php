<!-- resources/views/appointments/index.blade.php -->

<h1>Daftar Janji Temu</h1>

<!-- Tampilan tabel untuk menampilkan daftar janji temu -->
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>ID Pasien</th>
            <th>Tanggal & Waktu</th>
            <th>Deskripsi</th>
            <!-- Tambahkan kolom lainnya jika diperlukan -->
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($appointments as $appointment)
            <tr>
                <td>{{ $appointment->id }}</td>
                <td>{{ $appointment->patient_id }}</td>
                <td>{{ $appointment->date_time }}</td>
                <td>{{ $appointment->description }}</td>
                <!-- Tampilkan aksi seperti lihat, edit, hapus -->
                <td>
                    <a href="{{ route('appointments.show', $appointment->id) }}">Lihat</a> |
                    <a href="{{ route('appointments.edit', $appointment->id) }}">Edit</a> |
                    <!-- Tombol hapus menggunakan metode DELETE pada formulir -->
                    <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- Tombol untuk membuat janji temu baru -->
<a href="{{ route('appointments.create') }}">Tambah Janji Temu Baru</a>
