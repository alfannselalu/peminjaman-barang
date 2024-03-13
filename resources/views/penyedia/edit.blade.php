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
                                            <h1 class="h4 mb-5 pt-4 text-xl font-semibold">Update Penyedia</h1>
                                        </div>
                                        <form action="{{ route('penyedia.update', $penyedia->id) }}" method="POST" class="penyedia" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="mt-3">
                                                <label for="nama_penyedia" class="form-label">Nama Penyedia</label>
                                                <input value="{{ old('nama_penyedia', $penyedia->nama_penyedia) }}" type="text" class="mt-1 w-full form-control @error('nama_penyedia') is-invalid @enderror" name="nama_penyedia" id="nama_penyedia" required autofocus>
                                                @error('nama_penyedia')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mt-3">
                                                <label for="alamat_penyedia" class="form-label">Alamat Penyedia</label>
                                                <textarea  value="{{ old('alamat_penyedia', $penyedia->alamat_penyedia) }}" class="mt-1 w-full form-control @error('alamat_penyedia') is-invalid @enderror" type="textarea" name="alamat_penyedia" required></textarea>
                                                @error('alamat_penyedia')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mt-3">
                                                <label for="telepon_penyedia" class="form-label">Telp. Penyedia</label>
                                                <input value="{{ old('telepon_penyedia', $penyedia->telepon_penyedia) }}" type="number" class="form-control @error('telepon_penyedia') is-invalid @enderror" name="telepon_penyedia" id="telepon_penyedia" autofocus required>
                                                @error('telepon_penyedia')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            </div>
                                                <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Update Penyedia</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end main content-->

            @include('admin.dashboard.footer')

