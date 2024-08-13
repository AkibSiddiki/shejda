@extends('admin.layout.panel')
@section('title', 'Create Job Post')
@push('css')
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css">
@endpush
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Create Job Post</h5>
                <div class="p-4">
                    <a href="{{ route('panel.job.index') }}" class="btn btn-primary">List</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('panel.job.store') }}" method="POST" enctype="multipart/form-data">
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
                                <label for="type" class="form-label">Type<span class="text-danger">*</span></label>
                                <select class="form-select" id="type" name="type">
                                    <option value="1">Full time</option>
                                    <option value="2">Part time</option>
                                    <option value="3">Internship</option>
                                </select>
                                @error('type')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="location" class="form-label">Location<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="location" name="location"
                                    value="{{ old('location') }}" placeholder="Enter location" />
                                @error('location')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="salary" class="form-label">Salary<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="salary" name="salary"
                                    value="{{ old('salary') }}" placeholder="Enter salary" />
                                @error('salary')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="is_negotiable" class="form-label">Is Negotiable<span class="text-danger">*</span></label>
                                <select class="form-select" id="is_negotiable" name="is_negotiable">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                                @error('is_negotiable')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="experience" class="form-label">Experience<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="experience" name="experience"
                                    value="{{ old('experience') }}" placeholder="Enter experience in years" />
                                @error('experience')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="expertise" class="form-label">Expertise<span class="text-danger">*</span></label>
                                <select class="form-select" id="expertise" name="expertise">
                                    <option value="1">Beginner</option>
                                    <option value="2">Intermediate</option>
                                    <option value="3">Expert</option>
                                </select>
                                @error('expertise')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="due_date" class="form-label">Due date<span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="due_date" name="due_date"
                                    value="{{ old('due_date') ?? date('Y-m-d') }}" placeholder="Enter due date" />
                                @error('due_date')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="overview" class="form-label">Overview</label>
                                <textarea class="form-control" id="overview" name="overview" rows="5">{{ old('overview') }}</textarea>
                                @error('overview')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="5">{{ old('description') }}</textarea>
                                @error('description')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="responsibilities" class="form-label">Responsibilities</label>
                                <textarea class="form-control" id="responsibilities" name="responsibilities" rows="5">{{ old('responsibilities') }}</textarea>
                                @error('responsibilities')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="required_skills" class="form-label">Required Skills</label>
                                <textarea class="form-control" id="required_skills" name="required_skills" rows="5">{{ old('required_skills') }}</textarea>
                                @error('required_skills')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="benefits" class="form-label">Benefits</label>
                                <textarea class="form-control" id="benefits" name="benefits" rows="5">{{ old('benefits') }}</textarea>
                                @error('benefits')
                                    <small class="mt-3 d-block text-small text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endSection

@push('js')
    <script type="importmap" src="{{ asset('assets/js/ckeditor5.js') }}">
    </script>

@endpush
