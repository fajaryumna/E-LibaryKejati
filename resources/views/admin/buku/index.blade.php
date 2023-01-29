@extends('admin.layouts.main')
@section('container')
<!-- DataTales Example -->
<div id="content">
    <div class="card mb-4" style="border-radius: 0!important;">
        <div class="card-body" style="background-color: #fffbf5">
            <h3 class="title">Koleksi <span class="teks-ungu">Buku</span></h3>
            <div class="table-responsive">
                <table id="table" class="table table-striped" style="width:100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="text-align: center">No</th>
                            <th style="text-align: center">Judul</th>
                            <th style="text-align: center">Nomor Rak</th>
                            <th style="text-align: center">Pengarang</th>
                            <th style="text-align: center">Penerbit</th>
                            <th style="text-align: center">Tahun</th>
                            <th style="text-align: center">Jenis Buku</th>
                            <th style="text-align: center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $nomor = 1;
                        @endphp
                        @foreach ($books as $book)
                        <tr>
                            <td>{{ $nomor++ }}</td>
                            <td>{{ $book->judul_buku }}</td>
                            <td>{{ $book->no_rak }}</td>
                            <td>{{ $book->nama_pengarang }}</td>
                            <td>{{ $book->penerbit }}</td>
                            <td>{{ $book->tahun_terbit }}</td>
                            <td>{{ $book->jenis_buku }}</td>
                            <td>
                                <a href="/edit_buku/{{ $book->id }}" class="btn btn-warning"><i
                                        class="fas fa-edit"></i></a>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#hapusModal{{ $book->id }}"> <i class="fa fa-trash"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="hapusModal{{ $book->id }}" tabindex="-1"
                                    aria-labelledby="hapusModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="hapusModalLabel">Konfirmasi</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="POST" action="{{ route('delete_buku', $book->id) }}">
                                                @csrf
                                                <div class="modal-body">
                                                    Apakah Anda yakin ingin menghapus data ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tidak</button>
                                                    <button type="submit" class="btn btn-primary">Ya</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

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