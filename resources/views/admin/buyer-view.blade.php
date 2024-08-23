@extends('admin.layout.panel')
@section('title', 'Buyer View')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y" id="printTable">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4 class="card-title m-0 me-2">Buyer Information | Name: {{ $buyer->name }} | Contact: {{ $buyer->phone }}</h4>
                <button class="btn btn-primary" onclick="printTable()">
                    <i class="bx bx-printer"></i>
                    Print
                </button>
            </div>
            <div class="table-responsive text-nowrap mb-4">
                <table class="table">
                    <thead class="bg-dark">
                        <tr>
                            <th class="text-white">Info</th>
                            <th class="text-white">Data</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <th>Name</th>
                            <td>{{ $buyer->name }}</td>
                        </tr>
                        <tr>
                            <th>Profession</th>
                            <td>{{ $buyer->profession }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $buyer->email }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $buyer->phone }}</td>
                        </tr>
                        <tr>
                            <th>Mail Address</th>
                            <td>{{ $buyer->mail_address }}</td>
                        </tr>
                        <tr>
                            <th>Preferred Location</th>
                            <td>{{ $buyer->preferred_location }}</td>
                        </tr>
                        <tr>
                            <th>Preferred Size</th>
                            <td>{{ $buyer->preferred_size }}</td>
                        </tr>
                        <tr>
                            <th>No of Car Parking Requirement</th>
                            <td>{{ $buyer->no_of_car_parking_requirement }}</td>
                        </tr>
                        <tr>
                            <th>Expected Handover Date</th>
                            <td>{{ $buyer->expected_handover_date }}</td>
                        </tr>
                        <tr>
                            <th>Facing of the Apartment</th>
                            <td>{{ \App\Models\Buyer::FACING[$buyer->facing_of_the_apartment] }}</td>
                        </tr>
                        <tr>
                            <th>Preferred Floor</th>
                            <td>{{ $buyer->preferred_floor }}</td>
                        </tr>
                        <tr>
                            <th>Minimum Number of Bedrooms</th>
                            <td>{{ $buyer->minimum_number_of_bedrooms }}</td>
                        </tr>
                        <tr>
                            <th>Minimum Number of Bathrooms</th>
                            <td>{{ $buyer->minimum_number_of_bathrooms }}</td>
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

