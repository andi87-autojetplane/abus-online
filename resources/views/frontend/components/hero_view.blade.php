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
                        <form method="post" action="#" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-sm-3 col-form-label">Judul</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" id="name" name="name">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="email" id="email" name="email">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="username" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" id="username" name="username">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="phone" class="col-sm-3 col-form-label">No. HP</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text"
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
                                    <img src=""
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

                    </div>
                </div>

            </div>
        </div>


    </div>
</div>
@endsection
