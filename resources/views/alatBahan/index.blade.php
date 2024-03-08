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
                                    <h4 class="mb-sm-0 font-size-18">All Shoes</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Shoes</a></li>
                                            <li class="breadcrumb-item active">Shoe</li>
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
                                        
                                        <h4 class="card-title mb-0 pb-4">Shoe</h4>
                                        <!-- App Search-->
                                        <a href="{{ route('create.alatBahan') }}" class="btn btn-primary shadow-sm">Add New Shoe</a>
                                        <form class="app-search float-end d-none d-lg-block">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Search...">
                                                <span class="bx bx-search-alt"></span>
                                            </div>
                                        </form>

                                        {{-- <table id="datatable" class="table table-bordered border-1 border-dark dt-responsive nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Merk</th>
                                                <th>Spesifikasi</th>
                                                <th>Kondisi</th>
                                                <th>Jumlah Barang</th>
                                                <th>Sumber Dana</th>
                                                <th>Image</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($alatBahans as $sepatu)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $sepatu->nama_barang }}</td>
                                                        <td>{{ $sepatu->spesifikasi }}</td>
                                                        <td>{{ $sepatu->kondisi }}</td>
                                                        <td>{{ $sepatu->jumlah_barang }}</td>
                                                        <td>{{ $sepatu->sumber_dana }}</td>
                                                        @foreach ($sepatu->image as $image)
                                                            <img src="{{ asset('storage/' . $image->image) }}" alt="{{ $image->nama_barang }}">
                                                        @endforeach
                                                        <td>
                                                            <a href="{{ route('edit.alatBahan', $sepatu->id) }}"class="btn btn-warning"><i class="bx bx-edit"></i></a>
                                                            <form action="{{ route('delete.alatBahan', $sepatu->id) }}" method="POST" class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger border-0" onclick="return confirm('Apakah Anda yakin?')">
                                                                    <i class="bx bx-x-circle"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table> --}}
                                        
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr> 
                                                    <th>No.</th> 
                                                    <th>Nama Barang</th> 
                                                    <th>Spesifikasi</th> 
                                                    <th>Kondisi</th> 
                                                    <th>Jumlah Barang</th> 
                                                    <th>Sumber Dana</th> 
                                                    <th>Gambar</th> 
                                                    <th>Aksi</th> 
                                                </tr> 
                                            </thead> 
                                            <tbody> 
                                                @foreach ($alatBahans as $sepatu) 
                                                <tr> 
                                                    <td>{{ $loop->iteration }}</td> 
                                                    <td>{{ $sepatu->nama_barang }}</td> 
                                                    <td>{{ $sepatu->spesifikasi }}</td> 
                                                    <td>{{ $sepatu->kondisi }}</td> 
                                                    <td>{{ $sepatu->jumlah_barang }}</td> 
                                                    <td>{{ $sepatu->sumber_dana }}</td> 
                                                    <td> @if ($sepatu->image) 
                                                            <img src="{{ asset('storage/' . $sepatu->image) }}" alt="{{ $sepatu->nama_barang }}" class="img-fluid" style="width: 5rem; height:4rem;"> 
                                                            @else Tidak ada gambar 
                                                        @endif 
                                                    </td> 
                                                    <td> <a href="{{ route('edit.alatBahan', $sepatu->id) }}" class="btn btn-warning"><i class="bx bx-edit"></i></a> 
                                                        <form action="{{ route('delete.alatBahan', $sepatu->id) }}" method="POST" class="d-inline"> 
                                                            @csrf 
                                                            @method('DELETE') 
                                                            <button class="btn btn-danger border-0" onclick="return confirm('Yakin ingin menghapus?')"><i class="bx bx-x-circle"></i></button> 
                                                        </form> 
                                                    </td> 
                                                </tr> 
                                                @endforeach </tbody> 
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