@extends('admin.layout.panel')
@section('title', 'Create Project')
@push('css')
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css">
@endpush
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Create Project</h5>
                <div class="p-4">
                    <a href="{{ route('panel.project.index') }}" class="btn btn-primary">List</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('panel.project.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title') }}" placeholder="Enter title" />
                                @error('title')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="image" class="form-label">Cover Image<span
                                        class="text-danger">*</span></label>
                                <p class="form-text text-warning my-1">The maximum file size allowed is 1 megabyte (MB).</p>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="image" name="image"
                                        accept="image/*" onchange="loadFile(event)" />
                                    <span class="input-group-text" id="upload-image"><i class="bx bx-upload"></i></span>
                                </div>
                                <div class="mt-2">
                                    <img id="previewImage" src="{{ asset('assets/img/no-image.jpg') }}"
                                        class="img-fluid w-20" alt="image preview" />
                                </div>
                                @error('image')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="description" class="form-label">Description<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                                @error('description')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="client" class="form-label">Client</label>
                                <input type="text" class="form-control" id="client" name="client" value="{{ old('client') }}">
                                @error('client')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="architect" class="form-label">Architect</label>
                                <input type="text" class="form-control" id="architect" name="architect" value="{{ old('architect') }}">
                                @error('architect')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}">
                                @error('location')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="size" class="form-label">Size</label>
                                <input type="text" class="form-control" id="size" name="size" value="{{ old('size') }}">
                                @error('size')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="year_completed" class="form-label">Year Completed</label>
                                <input type="text" class="form-control" id="year_completed" name="year_completed" value="{{ old('year_completed') }}">
                                @error('year_completed')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="categories" class="form-label">Categories</label>
                                <input type="text" class="form-control" id="categories" name="categories" value="{{ old('categories') }}">
                                @error('categories')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="property_type" class="form-label">Property Type<span class="text-danger">*</span></label>
                                <select class="form-select" id="property_type" name="property_type">
                                    <option value="1" {{ old('property_type') == 1 ? 'selected' : '' }}>Residential</option>
                                    <option value="2" {{ old('property_type') == 2 ? 'selected' : '' }}>Commercial</option>
                                </select>
                                @error('property_type')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12 mt-4">
                            <div class="mb-3">
                                <label for="type" class="form-label">Type<span class="text-danger">*</span></label>
                                <select class="form-select" id="type" name="type">
                                    <option value="1" {{ old('type') == 1 ? 'selected' : '' }}>Upcoming</option>
                                    <option value="2" {{ old('type') == 2 ? 'selected' : '' }}>Ongoing</option>
                                    <option value="3" {{ old('type') == 3 ? 'selected' : '' }}>Completed</option>
                                </select>
                                @error('type')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
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
    <script>
        jQuery(document).ready(function() {
            ImgUpload();
        });

        function ImgUpload() {
            var imgWrap = "";
            var imgArray = [];

            $(".upload__inputfile").each(function() {
                $(this).on("change", function(e) {
                    imgWrap = $(this).closest(".upload__box").find(".upload__img-wrap");
                    var maxLength = $(this).attr("data-max_length");

                    var files = e.target.files;
                    var filesArr = Array.prototype.slice.call(files);
                    var iterator = 0;
                    filesArr.forEach(function(f, index) {
                        if (!f.type.match("image.*")) {
                            return;
                        }

                        if (imgArray.length > maxLength) {
                            return false;
                        } else {
                            var len = 0;
                            for (var i = 0; i < imgArray.length; i++) {
                                if (imgArray[i] !== undefined) {
                                    len++;
                                }
                            }
                            if (len > maxLength) {
                                return false;
                            } else {
                                imgArray.push(f);

                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    var html =
                                        "<div class='upload__img-box'><div style='background-image: url(" +
                                        e.target.result +
                                        ")' data-number='" +
                                        $(".upload__img-close").length +
                                        "' data-file='" +
                                        f.name +
                                        "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                    imgWrap.append(html);
                                    iterator++;
                                };
                                reader.readAsDataURL(f);
                            }
                        }
                    });
                });
            });

            $("body").on("click", ".upload__img-close", function(e) {
                var file = $(this).parent().data("file");
                for (var i = 0; i < imgArray.length; i++) {
                    if (imgArray[i].name === file) {
                        imgArray.splice(i, 1);
                        break;
                    }
                }
                $(this).parent().parent().remove();
            });
        }
    </script>
@endpush
