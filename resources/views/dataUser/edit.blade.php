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
                                            <h1 class="h4 mb-5 pt-4 text-xl font-semibold">Update User</h1>
                                        </div>
                                        <form action="{{ route('dataUser.update', $dataUser->id) }}" method="POST" class="user" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="mt-3">
                                                <label for="name" class="form-label">Nama</label>
                                                <input value="{{ old('name', $dataUser->name) }}" type="text" class="mt-1 w-full form-control @error('name') is-invalid @enderror" name="name" id="name" required autofocus>
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mt-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input value="{{ old('username', $dataUser->username) }}" type="text" class="mt-1 w-full form-control @error('username') is-invalid @enderror" name="username" id="username" required>
                                                @error('username')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mt-3">
                                                <label for="image" class="form-label">Email</label>
                                                <input value="{{ old('email', $dataUser->email) }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" autofocus required>
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mt-3">
                                                <label for="level" class="form-label">Level</label>
                                                <input value="{{ old('level', $dataUser->level) }}" type="text" class="form-control @error('level') is-invalid @enderror" name="level" id="level" autofocus required>
                                                @error('level')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mt-3">
                                                <label for="image" class="form-label">image</label>
                                                <input value="{{ old('image', $dataUser->image) }}" type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" autofocus required>
                                                @error('image')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            </div>
                                                <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Update User</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end main content-->

            @include('admin.dashboard.footer')

