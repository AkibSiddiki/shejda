@extends('admin.layout.panel')
@section('title', 'Edit Info Page')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Edit Info Page</h5>
                <div class="p-4">
                    <a href="{{ route('panel.infoPage.index') }}" class="btn btn-primary">List</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('panel.infoPage.update', $infoPage) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        @if ($updateable['title'])
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ $infoPage->title }}" placeholder="Enter title" />
                                    @error('title')
                                        <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        @endif
                        @if ($updateable['content'])
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="content" class="form-label">Content<span
                                            class="text-danger">*</span></label>
                                    <textarea type="text" class="form-control" id="content" name="content" placeholder="Enter content"
                                        style="height: 250px;">{{ $infoPage->content }}</textarea>
                                    @error('content')
                                        <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        @endif
                        @if ($updateable['image1'])
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="image1" class="form-label">Image 1<span
                                            class="text-danger">*</span></label>
                                    <p class="form-text text-muted my-1">Maximum file size is 1MB</p>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="image1" name="image1"
                                            accept="image/*" onchange="loadFile(event, '1')" />
                                        <span class="input-group-text" id="upload-image"><i class="bx bx-upload"></i></span>
                                    </div>
                                    <div class="mt-2">
                                        <img id="previewImage1"
                                            src="{{ $infoPage->image1 ? asset($infoPage->image1) : asset('assets/img/no-image.jpg') }}"
                                            class="img-fluid w-20" alt="image preview" />
                                    </div>
                                    @error('image1')
                                        <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        @endif
                        @if ($updateable['image2'])
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="image2" class="form-label">Image 2<span
                                            class="text-danger">*</span></label>
                                    <p class="form-text text-muted my-1">Maximum file size is 1MB</p>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="image2" name="image2"
                                            accept="image/*" onchange="loadFile(event, '2')" />
                                        <span class="input-group-text" id="upload-image"><i class="bx bx-upload"></i></span>
                                    </div>
                                    <div class="mt-2">
                                        <img id="previewImage2"
                                            src="{{ $infoPage->image2 ? asset($infoPage->image2) : asset('assets/img/no-image.jpg') }}"
                                            class="img-fluid w-20" alt="image preview" />
                                    </div>
                                    @error('image2')
                                        <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endSection
@push('js')
    <script>
        var loadFile = function(event, target) {
            var preview = document.getElementById('previewImage' + target);
            preview.src = URL.createObjectURL(event.target.files[0]);
            preview.onload = function() {
                URL.revokeObjectURL(preview.src) // free memory
            }
        }
    </script>
@endpush
