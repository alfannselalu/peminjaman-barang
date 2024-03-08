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
                                            <h1 class="h4 mb-5 pt-4 text-xl font-semibold">Update Sepatu</h1>
                                        </div>
                                        <form action="{{ route('update.alatBahan', $alatBahan->id) }}" method="POST" class="user" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="mt-3">
                                                <label for="nama_barang" class="form-label">Nama Barang</label>
                                                <input value="{{ old('nama_barang', $alatBahan->nama_barang) }}" type="text" class="mt-1 w-full form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" id="nama_barang" required autofocus>
                                                @error('nama_barang')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mt-3">
                                                <label for="spesifikasi" class="form-label">Spesifikasi</label>
                                                <input value="{{ old('spesifikasi', $alatBahan->spesifikasi) }}" type="text" class="mt-1 w-full form-control @error('spesifikasi') is-invalid @enderror" name="spesifikasi" id="spesifikasi" required>
                                                @error('spesifikasi')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mt-3">
                                                <label for="lokasi" class="form-label">Lokasi</label>
                                                <textarea  value="{{ old('lokasi', $alatBahan->lokasi) }}" class="mt-1 w-full form-control @error('lokasi') is-invalid @enderror" type="textarea" name="lokasi" required></textarea>
                                                @error('lokasi')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mt-3">
                                                <label for="kondisi" class="form-label">Kondisi</label>
                                                <input value="{{ old('kondisi', $alatBahan->kondisi) }}" type="text" class="form-control @error('kondisi') is-invalid @enderror" name="kondisi" id="kondisi" autofocus required>
                                                @error('kondisi')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mt-3">
                                                <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
                                                <input value="{{ old('jumlah_barang', $alatBahan->jumlah_barang) }}" type="number" class="form-control @error('jumlah_barang') is-invalid @enderror" name="jumlah_barang" id="jumlah_barang" autofocus required>
                                                @error('jumlah_barang')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mt-3">
                                                <label for="sumber_dana" class="form-label">Sumber Dana</label>
                                                <input value="{{ old('sumber_dana', $alatBahan->sumber_dana) }}" type="text" class="form-control @error('sumber_dana') is-invalid @enderror" name="sumber_dana" id="sumber_dana" autofocus required>
                                                @error('sumber_dana')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mt-3">
                                                <label for="image" class="form-label">image</label>
                                                <input value="{{ old('image', $alatBahan->image) }}" type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" autofocus required>
                                                @error('image')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            </div>
                                                <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Update Sepatu</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end main content-->

            @include('admin.dashboard.footer')

