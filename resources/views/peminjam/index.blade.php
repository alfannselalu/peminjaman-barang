@include('admin.dashboard.header')

@include('admin.dashboard.sidebar')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                
                
                <div class="page-content">
                    <div class="container-fluid">
                        @if (session()->has('success'))
                    <div class="fw-bold bg-success text-dark p-4">
                        <div class="container">
                            {{ session('success') }}
                        </div>
                    </div>
                @endif

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">All Peminjaman</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Peminjaman</a></li>
                                            <li class="breadcrumb-item active">Peminjaman</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <h4 class="card-title mb-0 pb-4">Peminjaman</h4>
                                        <!-- App Search-->
                                        <a href="/peminjaman/create" class="btn btn-primary shadow-sm">Add New Peminjam</a>
                                        <form class="app-search float-end d-none d-lg-block">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Search...">
                                                <span class="bx bx-search-alt"></span>
                                            </div>
                                        </form>

                                        <table class="table table-bordered">
                                            <thead>
                                                <tr> 
                                                    <th>No.</th> 
                                                    <th>Nama Peminjam</th> 
                                                    <th>Nama Barang</th> 
                                                    <th>Kondisi</th> 
                                                    <th>Jumlah Barang</th> 
                                                    <th>Tanggal Pinjam</th> 
                                                    <th>Tanggal Kembali</th> 
                                                    <th>Aksi</th> 
                                                </tr> 
                                            </thead> 
                                            <tbody> 
                                                @foreach ($peminjams as $peminjam) 
                                                <tr> 
                                                    <td>{{ $loop->iteration }}</td> 
                                                    <td>{{ $peminjam->peminjam }}</td> 
                                                    <td>{{ $peminjam->alatBahan->nama_barang }}</td> 
                                                    <td>{{ $peminjam->kondisi }}</td> 
                                                    <td>{{ $peminjam->jml_barang }}</td> 
                                                    <td>{{ $peminjam->tgl_pinjam }}</td> 
                                                    <td>{{ $peminjam->tgl_kembali }}</td> 
                                                    <td> <a href="/peminjaman/{{ $peminjam->id }}/edit" class="btn btn-warning"><i class="bx bx-edit"></i></a> 
                                                        <form action="/peminjaman/{{ $peminjam->id }}" method="POST" class="d-inline"> 
                                                            @csrf 
                                                            @method('DELETE') 
                                                            <button class="btn btn-danger border-0" onclick="return confirm('Yakin ingin menghapus?')"><i class="bx bx-x-circle"></i></button> 
                                                        </form> 
                                                    </td> 
                                                </tr> 
                                                @endforeach 
                                            </tbody> 
                                            </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <footer class="footer">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-6">
                                        SMKN 9 BEKASI
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="text-sm-end d-none d-sm-block">
                                            Design & Develop by Alfan
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>
            </div>
            <!-- end main content-->



@include('admin.dashboard.footer')