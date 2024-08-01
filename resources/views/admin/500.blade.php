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
                        <h1 class="mb-2 mx-2" style="line-height: 8rem; font-size: 6rem; color: #696cff3b">500</h1>
                        <h4 class="mb-2 mx-2">Server Error</h4>
                        <p class="mb-6 mx-2">We're sorry, but we're having trouble processing your request. It looks like
                            something went wrong on our servers.</p>
                        <a href="{{ route('home') }}" class="btn btn-primary">Back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Error -->
@endsection
