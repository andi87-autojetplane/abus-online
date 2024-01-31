@extends('admin.admin_master')
@push('css')
@endpush
@section('main')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Profile User</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item">Profile</li>
                                <li class="breadcrumb-item active">Show</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ !empty($userData->profile_image) ? url('img/user/' . $userData->profile_image) : url('img/user/no_image.jpg') }}"
                                    alt="Admin" class="img-thumbnail rounded-circle avatar-xl" width="110">
                                <div class="mt-3">
                                    <h4>{{ $userData->name }}</h4>
                                    <p class="text-secondary mb-1">{{ $userData->username }}</p>
                                    <p class="text-muted font-size-sm">{{ $userData->email }}</p>
                                </div>
                            </div>
                            <hr class="my-4">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-twitter me-2 icon-inline text-info">
                                            <path
                                                d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                            </path>
                                        </svg>Twitter</h6>
                                    <span class="text-secondary">@bootdey</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-instagram me-2 icon-inline text-danger">
                                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5">
                                            </rect>
                                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                        </svg>Instagram</h6>
                                    <span class="text-secondary">bootdey</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-facebook me-2 icon-inline text-primary">
                                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                            </path>
                                        </svg>Facebook</h6>
                                    <span class="text-secondary">bootdey</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <!-- end row -->
                            <form method="post" action="{{ route('update.profile') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" value="{{ $userData->name }}"
                                            id="name" name="name">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="email" value="{{ $userData->email }}"
                                            id="email" name="email">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="username" class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" value="{{ $userData->username }}"
                                            id="username" name="username">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="phone" class="col-sm-3 col-form-label">No. HP</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" value="{{ $userData->phone }}"
                                            id="phone" name="phone">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="phone" class="col-sm-3 col-form-label">Profile Picture</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" id="profile_picture"
                                            name="profile_picture">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="phone" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <img src="{{ !empty($userData->profile_image) ? url('img/user/' . $userData->profile_image) : url('img/user/no_image.jpg') }}"
                                            alt="Admin" class="rounded avatar-lg" id="avatar" name="avatar"
                                            width="110">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        {{-- <a href="{{ route('edit.profile') }}" class="btn btn-primary px-4">Edit Profile</a> --}}
                                        <input type="submit" class="btn btn-primary" value="Update Profile">
                                    </div>
                                </div>
                            </form>

                            <hr>
                            <h5 class="mb-sm-4">Ubah Password</h5>
                                @if(count($errors))
                                    @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <i class="mdi mdi-block-helper me-2"></i>
                                            {{ $error }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endforeach
                                @endif
                            <form method="post" action="{{ route('change.password') }}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-3 col-form-label">Password Lama</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="old_password" name="old_password" value="{{old('old_password')}}">
                                                <span class="input-group-text" id="show_old_password"><i class="fa fa-eye" id="icon_old"></i></span>
                                            </div>
                                        </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-3 col-form-label">Password Baru</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="new_password" name="new_password">
                                                <span class="input-group-text" id="show_new_password"><i class="fa fa-eye" id="icon_new"></i></span>
                                            </div>
                                        </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-3 col-form-label">Konfirmasi Password</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                                <span class="input-group-text" id="show_password_confirmation"><i class="fa fa-eye" id="icon_confirm"></i></span>
                                            </div>
                                        </div>
                                </div>
                                <!-- end row -->
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            {{-- <a href="{{ route('edit.profile') }}" class="btn btn-primary px-4">Edit Profile</a> --}}
                                            <input type="submit" class="btn btn-info waves-effect waves-light"
                                                value="Ubah Password">
                                        </div>
                                    </div>
                            </form>

                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="d-flex align-items-center mb-3">Project Status</h5>
                                    <p>Web Design</p>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p>Website Markup</p>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 72%"
                                            aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p>One Page</p>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 89%"
                                            aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p>Mobile Template</p>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 55%"
                                            aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p>Backend API</p>
                                    <div class="progress" style="height: 5px">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 66%"
                                            aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>


        </div>
    </div>
@endsection

@push('javascript')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#profile_picture').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#avatar').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });

            $('#show_old_password').click(function(){
                var notVisible = $("#old_password").attr("type");
                    if (notVisible === "password") {
                    $("#icon_old").attr("class", "fa fa-eye-slash");
                    $("#old_password").attr("type", "text");
                    } else {
                    $("#icon_old").attr("class", "fa fa-eye");
                    $("#old_password").attr("type", "password");
                    }
            });

            $('#show_new_password').click(function(){
                var notVisible = $("#new_password").attr("type");
                    if (notVisible === "password") {
                    $("#icon_new").attr("class", "fa fa-eye-slash");
                    $("#new_password").attr("type", "text");
                    } else {
                    $("#icon_new").attr("class", "fa fa-eye");
                    $("#new_password").attr("type", "password");
                    }
            });

            $('#show_password_confirmation').click(function(){
                var notVisible = $("#password_confirmation").attr("type");
                    if (notVisible === "password") {
                    $("#icon_confirm").attr("class", "fa fa-eye-slash");
                    $("#password_confirmation").attr("type", "text");
                    } else {
                    $("#icon_confirm").attr("class", "fa fa-eye");
                    $("#password_confirmation").attr("type", "password");
                    }
            });
        });
    </script>
@endpush
