@extends('admin.layout.panel')
@section('title', 'Edit Project')
@section('title', 'Create Project')
@push('css')
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css">
@endpush
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Edit Project</h5>
                <div class="p-4">
                    <a href="{{ route('panel.project.index') }}" class="btn btn-primary">List</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('panel.project.update', $project->id) }}" method="POST"
                    enctype="multipart/form-data">
                    <form action="{{ route('panel.project.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ old('title') ?? $project->title }}" placeholder="Enter title" />
                                    @error('title')
                                        <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="image" class="form-label">Cover Image<span
                                            class="text-danger">*</span></label>
                                    <p class="form-text text-warning my-1">The maximum file size allowed is 1 megabyte (MB).
                                    </p>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="image" name="image"
                                            accept="image/*" onchange="loadFile(event)" />
                                        <span class="input-group-text" id="upload-image"><i class="bx bx-upload"></i></span>
                                    </div>
                                    <div class="mt-2">
                                        <img id="previewImage"
                                            src="{{ is_null($project->image) ? asset('assets/img/no-image.jpg') : asset($project->image) }}"
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
                                    <label for="description1" class="form-label">Description 1<span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" id="description1" name="description1" rows="3">{{ old('description1') ?? $project->description1 }}</textarea>
                                    @error('description1')
                                        <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description2" class="form-label">Description 2<span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" id="description2" name="description2" rows="3">{{ old('description2') ?? $project->description2 }}</textarea>
                                    @error('description2')
                                        <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="mb-3">
                                    <label for="type" class="form-label">Type<span class="text-danger">*</span></label>
                                    <select class="form-select" id="type" name="type">
                                        <option value="1"
                                            {{ old('type') == 1 ? 'selected' : ($project->type == 1 ? 'selected' : '') }}>
                                            Upcoming</option>
                                        <option value="2"
                                            {{ old('type') == 2 ? 'selected' : ($project->type == 2 ? 'selected' : '') }}>
                                            Ongoing</option>
                                        <option value="3"
                                            {{ old('type') == 3 ? 'selected' : ($project->type == 3 ? 'selected' : '') }}>
                                            Completed</option>
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
