<!-- resources/views/patients/index.blade.php -->

<h1>Daftar Pasien</h1>

<!-- Tampilan tabel untuk menampilkan daftar pasien -->
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <!-- Tambahkan kolom lainnya jika diperlukan -->
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($patients as $patient)
            <tr>
                <td>{{ $patient->id }}</td>
                <td>{{ $patient->name }}</td>
                <td>{{ $patient->address }}</td>
                <!-- Tampilkan aksi seperti lihat, edit, hapus -->
                <td>
                    <a href="{{ route('patients.show', $patient->id) }}">Lihat</a> |
                    <a href="{{ route('patients.edit', $patient->id) }}">Edit</a> |
                    <!-- Tombol hapus menggunakan metode DELETE pada formulir -->
                    <form action="{{ route('patients.destroy', $patient->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- Tombol untuk membuat pasien baru -->
<a href="{{ route('patients.create') }}">Tambah Pasien Baru</a>
