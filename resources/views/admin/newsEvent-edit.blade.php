@extends('admin.layout.panel')
@section('title', 'Edit Slider')

@push('css')
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css">
@endpush
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Edit News & Event</h5>
                <div class="p-4">
                    <a href="{{ route('panel.newsEvent.index') }}" class="btn btn-primary">List</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('panel.newsEvent.update', $newsEvent) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $newsEvent->title }}" placeholder="Enter title" />
                                @error('title')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="content" class="form-label">Content<span class="text-danger">*</span></label>
                                <textarea class="form-control" id="content" name="content" rows="5" placeholder="Enter content">{{ $newsEvent->content }}</textarea>
                                @error('content')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="image" class="form-label">Image<span class="text-danger">*</span></label>
                                <p class="form-text text-muted my-1">Maximum file size is 1MB</p>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="image" name="image"
                                        accept="image/*" onchange="loadFile(event)" />
                                    <span class="input-group-text" id="upload-image"><i class="bx bx-upload"></i></span>
                                </div>
                                <div class="mt-2">
                                    <img id="previewImage"
                                        src="{{ $newsEvent->image ? asset($newsEvent->image) : asset('assets/img/no-image.jpg') }}"
                                        class="img-fluid w-20" alt="image preview" />
                                </div>
                                @error('image')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
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
        var loadFile = function(event) {
            var preview = document.getElementById('previewImage');
            preview.src = URL.createObjectURL(event.target.files[0]);
            preview.onload = function() {
                URL.revokeObjectURL(preview.src) // free memory
            }
        }
    </script>
    <script type="importmap">
		{
			"imports": {
				"ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.js",
				"ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.0.0/"
			}
		}
	</script>
    <script type="module" src="{{ asset('assets/js/ckeditor5.js') }}"></script>
@endpush
