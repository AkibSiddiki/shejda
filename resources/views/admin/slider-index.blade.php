@extends('admin.layout.panel')
@section('title', 'Slider List')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Home Top Slider List</h5>
                <div class="p-4">
                    <a href="{{ route('panel.slider.create') }}" class="btn btn-primary">Create Slider</a>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th width="10%">Status</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($sliders as $slider)
                            <tr>
                                <td>{{ $slider->title }}</td>
                                <td>
                                    <img src="{{ asset($slider->image) }}" width="100" alt="">
                                </td>
                                <td>
                                    <a type="button"
                                        class="btn btn-sm {{ $slider->status ? 'btn-success' : 'btn-warning' }} text-white"
                                        href="{{ route('panel.slider.status', $slider) }}">
                                        {{ $slider->status ? 'Publish' : 'Unpublish' }}
                                    </a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="{{ route('panel.slider.edit', $slider) }}"
                                            class="btn btn-sm btn-primary"><i class='bx bx-edit'></i></a>
                                        <form action="{{ route('panel.slider.destroy', $slider) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i
                                                    class='bx bx-trash'></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
