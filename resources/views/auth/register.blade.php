<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Register | Abus Online</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/pkm.ico') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">

                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="index.html" class="auth-logo">
                                    <img src="{{ asset('backend/assets/images/logo-dark.png') }}" height="30" class="logo-dark mx-auto" alt="">
                                    <img src="{{ asset('backend/assets/images/logo-light.png') }}" height="30" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>

                        <h4 class="text-muted text-center font-size-18"><b>Pendaftaran</b></h4>

                        <div class="p-3">
                            <form class="form-horizontal mt-3 needs-validation" method="POST" action="{{ route('register') }}" novalidate>
                                @csrf

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="name" name="name" type="text" placeholder="Isi Nama Lengkap anda" value="{{old('name')}}" required>
                                        @if ($errors->has('name'))
                                            @foreach ($errors->get('name') as $error)
                                            <span>{{ $error }}</span>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="email" name="email" type="email" placeholder="Isi Email Aktif anda" value="{{old('email')}}" required>
                                        @if ($errors->has('email'))
                                            @foreach ($errors->get('email') as $error)
                                            <span class="mt-2">{{ $error }}</span>
                                            @endforeach
                                        @endif
                                    </div>

                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="username" name="username" type="text" value="{{old('username')}}" placeholder="Isi Username anda" required>
                                        @if ($errors->has('username'))
                                        @foreach ($errors->get('username') as $error)
                                        <span class="mt-2">{{ $error }}</span>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="phone" name="phone" type="text" value="{{old('phone')}}" placeholder="Isi No. HP Aktif anda" required>
                                        @if ($errors->has('phone'))
                                        @foreach ($errors->get('phone') as $error)
                                        <span class="mt-2">{{ $error }}</span>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="password" name="password" id="password"
                                        required autocomplete="new-password"  placeholder="Isi Password">
                                        @if ($errors->has('password'))
                                        @foreach ($errors->get('password') as $error)
                                        <span class="mt-2">{{ $error }}</span>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="password" name="password_confirmation" id="password_confirmation"
                                        required autocomplete="new-password" placeholder="Isi kembali password">
                                        @if ($errors->has('password_confirmation'))
                                        @foreach ($errors->get('password_confirmation') as $error)
                                        <span class="mt-2">{{ $error }}</span>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checktermCondition" name="checktermcondition">
                                            <label class="form-label ms-1 fw-normal" for="customCheck1">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
                                        </div>
                                        @if ($errors->has('checktermcondition'))
                                        @foreach ($errors->get('checktermcondition') as $error)
                                        <span class="mt-2">{{ $error }}</span>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Daftar</button>
                                    </div>
                                </div>

                                <div class="form-group mt-2 mb-0 row">
                                    <div class="col-12 mt-3 text-center">
                                        <a href="{{ route('login') }}" class="text-muted">Sudah punya akun?Masuk</a>
                                    </div>
                                </div>
                            </form>
                            <!-- end form -->
                        </div>
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->


        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

        <script src="{{ asset('backend/assets/js/app.js') }}"></script>

    </body>
</html>
