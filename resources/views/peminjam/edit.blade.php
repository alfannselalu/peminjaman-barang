@include('admin.dashboard.header')

@include('admin.dashboard.sidebar')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8 col-sm-10">
                    <div class="card o-hidden border-dark shadow-lg">
                        <div class="card-body p-0 mt-5">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="p-5">
                                        <div class="text-center mb-2">
                                            <h1 class="h4 mb-5 pt-4 text-xl font-semibold">Update Peminjam</h1>
                                        </div>
                                        <form action="{{ route('peminjaman.update', $peminjam->id) }}" method="POST" class="peminjam" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="mt-3">
                                                <label for="peminjam" class="form-label">Nama peminjam</label>
                                                <input value="{{ old('peminjam', $peminjam->peminjam) }}" type="text" class="mt-1 w-full form-control @error('peminjam') is-invalid @enderror" name="peminjam" id="peminjam" required autofocus>
                                                @error('peminjam')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mt-1">
                                                <label for="alatBahan_id" class="form-label">Nama Barang</label>
                                                <select class="form-select" name="alatBahan_id" required>
                                                    @foreach ($alatBahans as $barang)
                                                        <option value="{{ $barang->id }}" {{ old('alatBahan_id', $peminjam->alatBahan->id) == $barang->id ? 'selected' : '' }}>
                                                            {{ $barang->nama_barang }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('alatBahan_id')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mt-1">
                                                <label for="kondisi" class="form-label">Kondisi</label>
                                                <input type="text" class="form-control @error('kondisi') is-invalid @enderror" name="kondisi" id="kondisi" autofocus required value="{{ old('kondisi', $peminjam->kondisi) }}">
                                                @error('kondisi')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mt-1">
                                                <label for="jml_barang" class="form-label">Jumlah Barang</label>
                                                <input type="number" class="form-control @error('jml_barang') is-invalid @enderror" name="jml_barang" id="jml_barang" autofocus required value="{{ old('jml_barang', $peminjam->jml_barang) }}">
                                                @error('jml_barang')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mt-1">
                                                <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                                                <input value="{{ old('tgl_pinjam', $peminjam->tgl_pinjam) }}" type="date" class="form-control @error('tgl_pinjam') is-invalid @enderror" name="tgl_pinjam" id="tgl_pinjam" autofocus required>
                                                @error('tgl_pinjam')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mt-1">
                                                <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                                                <input value="{{ old('tgl_kembali', $peminjam->tgl_kembali) }}" type="date" class="form-control @error('tgl_kembali') is-invalid @enderror" name="tgl_kembali" id="tgl_kembali" autofocus required>
                                                @error('tgl_kembali')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            </div>
                                                <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Update Peminjam</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end main content-->

            @include('admin.dashboard.footer')

