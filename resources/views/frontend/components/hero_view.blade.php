@extends('admin.admin_master')
@section('main')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Hero Layout</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Frontend</a></li>
                                <li class="breadcrumb-item active">Hero</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- end row -->
                            <form method="post" action="{{ route('post-hero') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-3 col-form-label">Judul</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" id="title" name="title">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                                    <div class="col-sm-9">
                                            <textarea id="elm1" name="description"></textarea>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="slide-picture" class="col-sm-3 col-form-label">Gambar SLide (1920x1152)</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" id="slide-picture"
                                            name="slide-picture">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="phone" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <img src="{{ asset('frontend/assets/img/slide/1920x1152.png') }}" alt="Admin" class="img-fluid" alt="Responsive image" id="previewPic" name="previewPic">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        {{-- <a href="{{ route('edit.profile') }}" class="btn btn-primary px-4">Edit Profile</a> --}}
                                        <input type="submit" class="btn btn-primary" value="Input Hero">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Heros</h4>
                            <table id="alternative-page-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>image</th>
                                        <th>created date</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($heros as $hero )
                                    <tr>
                                        <td>{{ $hero->title }}</td>
                                        <td>{{ $hero->description }}</td>
                                        <td><img src="{{ asset('frontend/assets/img/slide/'.$hero->hero_image) }}" width="320px" height="192px"></td>
                                        <td>{{ $hero->created_at }}</td>
                                        <td>
                                                <button type="button" class="btn btn-warning btn-sm waves-effect waves-light">Edit</button>
                                                <button type="button" class="btn btn-danger btn-sm waves-effect waves-light">Delete</button>
                                                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Banned</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
        </div>
    </div>
@endsection
@push('javascript')
     <!--tinymce js-->
     <script src="{{ asset('backend/assets/libs/tinymce/tinymce.min.js') }}"></script>

     <!-- init js -->
     <script src="{{ asset('backend/assets/js/pages/form-editor.init.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#slide-picture').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#previewPic').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endpush
