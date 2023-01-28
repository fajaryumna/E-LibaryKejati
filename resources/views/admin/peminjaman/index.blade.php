@extends('admin.layouts.main')
@section('container')


<!-- DataTales Example -->
<div id="content">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table id="table" class="table table-striped" style="width:100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Peminjam</th>
                            <th>Nama Buku/Rak Buku</th>
                            <th>No. Telp</th>
                            <th>Aksi</th>
                            <th>Status</th>
                            <th>Tombol</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $nomor = 1;
                        @endphp
                        @foreach ($peminjaman as $p)
                        <tr>
                            <td>{{ $nomor++ }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->judul }}{{ " / " }}{{ $p->rak }}</td>
                            <td>
                                <a href="/data-dokter/{{ $p->id }}/edit" class="btn btn-warning"><i
                                        class="fas fa-edit"></i></a>
                                <form action="/data-dokter/{{ $p->id }}" method="" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger border-0"
                                        onclick="return confirm('Upps, Yakin mau hapus data dari {{ $p->nama }}?')"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                            <td>{{ $p->telepon }}</td>
                            <td>{{ $p->status }}</td>
                            <td>
                                {{-- <a href="/update_peminjaman/{{ $p->id }}">
                                    <button type="button" class="btn btn-primary">Kembali</button>
                                </a> --}}
                                <form action="{{ route('peminjaman.kembali',  $p->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success">Kembali</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- <script>
    $(document).ready(function() {
        $('#buku-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('adminbook.data') }}",
            columns: [
                { data: 'judul_buku', name: 'judul_buku' },
                { data: 'no_rak', name: 'no_rak' },
                { data: 'nama_pengarang', name: 'nama_pengarang' },
                { data: 'penerbit', name: 'penerbit' },
                { data: 'tahun_terbit', name: 'tahun_terbit' },
                { data: 'jenis_buku', name: 'jenis_buku' },
                // { data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    });
</script> --}}
@endsection