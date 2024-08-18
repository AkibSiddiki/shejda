@extends('admin.layout.panel')
@section('title', 'Edit Team Member')
@push('css')
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css">
@endpush
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Edit Team Member</h5>
                <div class="p-4">
                    <a href="{{ route('panel.team.index') }}" class="btn btn-primary">List</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('panel.team.update', $team) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name', $team->name) }}" placeholder="Enter name" />
                                @error('name')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="designation" class="form-label">Designation</label>
                                <input type="text" class="form-control" id="designation" name="designation"
                                    value="{{ old('designation', $team->designation) }}" placeholder="Enter designation" />
                                @error('designation')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="bio" class="form-label">Bio</label>
                                <textarea id="bio" name="bio" rows="5" class="form-control"
                                    placeholder="Enter bio">{{ old('bio', $team->bio) }}</textarea>
                                @error('bio')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="position" class="form-label">Position</label>
                                <input type="number" class="form-control" id="position" name="position"
                                    value="{{ old('position', $team->position) }}" placeholder="Enter position" />
                                @error('position')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="type" class="form-label">Type</label>
                                <select class="form-select" id="type" name="type">
                                    <option value="1" {{ old('type', $team->type) == 1 ? 'selected' : '' }}>DIRECTORS</option>
                                    <option value="2" {{ old('type', $team->type) == 2 ? 'selected' : '' }}>OFFICERS</option>
                                </select>
                                @error('type')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <p class="form-text text-warning my-1">The maximum file size allowed is 1 megabyte (MB).</p>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="image" name="image"
                                        accept="image/*" onchange="loadFile(event)" />
                                    <span class="input-group-text" id="upload-image"><i class="bx bx-upload"></i></span>
                                </div>
                                <div class="mt-2">
                                    <img id="previewImage" src="{{ $team->image ? asset($team->image) : asset('assets/img/no-image.jpg') }}"
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

