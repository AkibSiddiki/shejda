@extends('admin.layout.panel')
@section('title', 'Landowner View')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y" id="printTable">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title m-0 me-2">Landowner Information | {{ $landowner->name }}</h5>
                <button class="btn btn-primary" onclick="printTable()">
                    <i class="bx bx-printer"></i>
                    Print
                </button>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="bg-dark">
                        <tr>
                            <th class="text-white">Info Name</th>
                            <th class="text-white">Data</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <th>Name</th>
                            <td>{{ $landowner->name }}</td>
                        </tr>
                        <tr>
                            <th>Contact Person</th>
                            <td>{{ $landowner->contact_person }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $landowner->email }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $landowner->phone }}</td>
                        </tr>
                        <tr>
                            <th>Locality</th>
                            <td>{{ $landowner->locality }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $landowner->address }}</td>
                        </tr>
                        <tr>
                            <th>Size</th>
                            <td>{{ $landowner->size }}</td>
                        </tr>
                        <tr>
                            <th>Road Width</th>
                            <td>{{ $landowner->road_width }}</td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <td>{{ \App\Models\Landowner::CATEGORY[$landowner->category] }}</td>
                        </tr>
                        <tr>
                            <th>Facing</th>
                            <td>{{ \App\Models\Landowner::FACING[$landowner->facing] }}</td>
                        </tr>
                        <tr>
                            <th>Feature</th>
                            <td>{{ \App\Models\Landowner::FEATURE[$landowner->feature] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('js')
<script>
    function printTable() {
        let printContents = document.getElementById("printTable").innerHTML;
        let originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endpush
