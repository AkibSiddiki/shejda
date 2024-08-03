@extends('admin.layout.panel')

@section('title', 'Account')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            @include('admin.shared.success')
            @include('admin.shared.error')
            <div class="col-md-12">
                <div class="nav-align-top">
                    <ul class="nav nav-pills flex-column flex-md-row mb-6">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('panel.account.edit') ? 'active' : '' }}"
                                href="javascript:void(0);"><i class="bx bx-sm bx-user me-1_5"></i>
                                Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bx bx-sm bxs-contact me-1_5"></i> Users</a>
                        </li>
                    </ul>
                </div>
                <div class="card mb-6">
                    <!-- Account -->
                    <form enctype="multipart/form-data" id="formAccountSettings" method="POST"
                        action="{{ route('panel.account.update') }}">
                        @csrf
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-6 pb-4 border-bottom">
                                <img src="{{ asset($user->image ?? 'assets/img/avatars/default.png') }}" alt="user-avatar"
                                    class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar" />
                                <div class="button-wrapper">
                                    <label for="image" class="btn btn-primary me-3 mb-4" tabindex="0">
                                        <span class="d-none d-sm-block">Upload new photo</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input type="file" id="image" class="account-file-input" hidden
                                            name="image" accept="image/png, image/jpeg" />
                                    </label>
                                    <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                        <i class="bx bx-reset d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Reset</span>
                                    </button>

                                    <div>Allowed JPG, GIF or PNG. Max size of 300K</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-4">

                            <div class="row g-6">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input class="form-control" type="text" id="name" name="name"
                                        value="{{ $user->name }}" autofocus />
                                </div>
                                <div class="col-md-6">
                                    <label for="username" class="form-label">Username</label>
                                    <input class="form-control" type="text" id="username" name="username"
                                        value="{{ $user->username }}" autofocus />
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input class="form-control" type="text" id="email" name="email"
                                        value="{{ $user->email ?? '' }}" placeholder="email@example.com" />
                                </div>
                                <div class="col-md-6">
                                    <label for="role" class="form-label">Role</label>
                                    <select id="role" class="form-select" name="role">
                                        <option value="1">Admin</option>
                                        <option value="2">Moderator</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="current_password" class="form-label">Current Password</label>
                                    <input class="form-control" type="password" id="current_password"
                                        name="current_password" placeholder="********" />
                                </div>
                                <div class="col-md-6">
                                    <label for="password" class="form-label">New Password</label>
                                    <input class="form-control" type="password" id="password" name="password"
                                        placeholder="********" />
                                </div>
                                <div class="mt-6">
                                    <button type="submit" class="btn btn-primary me-3">Save changes</button>
                                    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
        </div>
    </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('assets/js/pages-account-settings-account.js') }}"></script>
@endpush
