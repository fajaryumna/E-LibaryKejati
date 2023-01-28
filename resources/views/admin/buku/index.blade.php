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
                            <th>Judul</th>
                            <th>Nomor Rak</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>Jenis Buku</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->judul_buku }}</td>
                            <td>{{ $book->no_rak }}</td>
                            <td>{{ $book->nama_pengarang }}</td>
                            <td>{{ $book->penerbit }}</td>
                            <td>{{ $book->tahun_terbit }}</td>
                            <td>{{ $book->jenis_buku }}</td>
                            <td>
                                <a href="/data-dokter/{{ $book->id }}/edit" class="btn btn-warning"><i
                                        class="fas fa-edit"></i></a>
                                <form action="/data-dokter/{{ $book->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger border-0"
                                        onclick="return confirm('Upps, Yakin mau hapus data dari {{ $book->judul_buku }}?')"><i
                                            class="fas fa-trash-alt"></i></button>
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