@extends('admin.layouts.main')
@section('container')


<!-- DataTales Example -->
<div id="content" style="width:100%;">
    <div class="card shadow mb-4">
        <div class="card-body" style="background-color: #fffbf5">
            <h3 class="title">Peminjaman <span class="teks-ungu">Buku</span></h3>
            <div class="table-responsive">
                <table id="table" class="table table-striped" style="width:100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="text-align: center">No</th>
                            <th style="text-align: center">Nama Peminjam</th>
                            <th style="text-align: center">Nama Buku/Rak Buku</th>
                            <th style="text-align: center">Aksi</th>
                            <th style="text-align: center">No. Telp</th>
                            <th style="text-align: center">Status</th>
                            <th style="text-align: center">Tombol</th>
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
                                <a href="/edit_peminjaman/{{ $p->id }}" class="btn btn-warning"><i
                                        class="fas fa-edit"></i></a>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#hapusModal{{ $p->id }}"> <i class="fa fa-trash"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="hapusModal{{ $p->id }}" tabindex="-1"
                                    aria-labelledby="hapusModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="hapusModalLabel">Konfirmasi</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="POST" action="{{ route('delete_peminjaman', $p->id) }}">
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
                            <td>{{ $p->telepon }}</td>
                            <td>{{ $p->status }}</td>
                            <td>
                                {{-- <a href="/update_peminjaman/{{ $p->id }}">
                                    <button type="button" class="btn btn-primary">Kembali</button>
                                </a> --}}
                                <form action="{{ route('update_pengembalian',  $p->id) }}" method="POST">
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
<script>
    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
    @endif
</script>

<script>
    @if(Session::has('error'))
        toastr.error("{{ Session::get('error') }}")
    @endif
</script>
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