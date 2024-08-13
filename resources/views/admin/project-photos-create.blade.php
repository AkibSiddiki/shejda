@extends('admin.layout.panel')
@section('title', 'Create Project')
@push('css')
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css">
@endpush
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Create Project Photos</h5>
                <div class="p-4">
                    <a href="{{ route('panel.project.index') }}" class="btn btn-primary">List</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('panel.project.photos.store', $project) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 mt-4">
                            <div class="alert alert-info">
                                <p class="mb-0">
                                    <strong>Notice:</strong> The maximum file size allowed is 512 kilobytes (KB).
                                </p>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="upload__box p-4 border border-2 rounded rounded-3">
                                <div class="upload__btn-box d-flex justify-content-center">
                                    <label class="upload__btn d-flex align-items-center">
                                        <p class="mb-0">Upload images</p>
                                        <input type="file" multiple="" name="photos[]" data-max_length="20"
                                            class="upload__inputfile">
                                    </label>
                                </div>
                                <div class="upload__img-wrap"></div>
                            </div>
                        </div>
                    </div>
                    @error('photos.*')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

                <div class="mt-4">
                    <div class="row">
                        @if ($project && $project->photos()->count())
                            <div class="col-12">
                                <h5 class="card-title m-0 me-2">Past Uploaded Photos</h5>
                            </div>
                            @foreach ($project->photos as $photo)
                                <div class="col-md-3 mt-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="{{ $photo->image }}" class="img-fluid" alt="">
                                            <form action="{{ route('panel.project.photos.destroy', $photo) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger mt-2">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
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
