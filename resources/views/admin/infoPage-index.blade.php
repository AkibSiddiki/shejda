@extends('admin.layout.panel')
@section('title', 'InfoPage List')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title m-0 me-2">Informative Page List</h5>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Slug</th>
                            {{-- <th width="10%">Status</th> --}}
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($infoPages as $infoPage)
                            <tr>
                                <td>{{ $infoPage->title }}</td>
                                <td>{{ $infoPage->slug }}</td>
                                {{-- <td>
                                    <a type="button"
                                        class="btn btn-sm {{ $infoPage->status ? 'btn-success' : 'btn-warning' }} text-white"
                                        href="{{ route('panel.infoPage.status', $infoPage) }}">
                                        {{ $infoPage->status ? 'Publish' : 'Unpublish' }}
                                    </a>
                                </td> --}}
                                <td>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="{{ route('panel.infoPage.edit', $infoPage) }}"
                                            class="btn btn-sm btn-primary"><i class='bx bx-edit'></i></a>
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
