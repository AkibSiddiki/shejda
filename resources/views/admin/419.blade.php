@extends('admin.layout.auth')
@section('title', 'Error')
@section('main')
    <!-- Error -->
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card px-sm-6 px-0 text-center">
                    <div class="misc-wrapper mb-4">
                        <h1 class="mb-2 mx-2" style="line-height: 8rem; font-size: 6rem; color: #696cff3b">419</h1>
                        <h4 class="mb-2 mx-2">Page Expired</h4>
                        <p class="mb-6 mx-2">Your session has expired</p>
                        <a href="{{ route('home') }}" class="btn btn-primary">Back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Error -->
@endsection
