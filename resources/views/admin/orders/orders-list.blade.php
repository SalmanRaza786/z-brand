@extends('admin.admin-setup.master')
@section('content')
    <style type="text/css">
        body {
            font-family: Arial;
            font-size: 10pt;
        }
        table {
            border: 1px solid #ccc;
            border-collapse: collapse;
        }
        table th {
            background-color: #F7F7F7;
            color: #333;
            font-weight: bold;
        }
        table th,
        table td {
            padding: 5px;
            border: 1px solid #ccc;
        }
    </style>
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <div class="page-header my-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title bold-heading">Orders  List</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Orders List</li>
                        </ul>
                    </div>


                </div>
            </div>

        </div>


        <div class="card">
            <div class="card-body">


                <table  class="table table-striped table-hover data-table">
                    <thead>
                    <tr style="background:black;color:white">
                        <th>SR#</th>
                        <th>Product</th>
                        <th>Product Image</th>
                        <th>Qty</th>
                        <th>Name</th>

                        <th>Contact#</th>
                        <th> City</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Date</th>

                    </tr>
                    </thead>

                    <tbody>
                    @php $c=0; @endphp
                    @isset($data)
                        @foreach($data['orders'] as $order)
                            @php $c++; @endphp
                            <tr>
                                <td>{{$c}}</td>
                                <td>{{$order->p_name}}</td>

                                <td> <img class="img img-thumbnail" src="{{asset('storage/app/public/products/').'/'.$order->image}}"  style="height: 60px" width="60px"></td>
                                <td>{{$order->qty}}</td>
                                <td>{{$order->name}}</td>

                                <td>{{$order->contact}}</td>
                                <td>{{$order->city_name}}</td>
                                <td>{{$order->address}}</td>
                                <td>
                                    @if($order->status=='pending')
                                        <a href="{{url('update-order-status/').'/'.$order->id}}" class="btn btn-danger"> {{$order->status}}</a>
                                    @else
                                        <a href="#" class="btn btn-success"> {{$order->status}}</a>
                                    @endif
                                </td>
                                <td>{{$order->created_at}}</td>

                            </tr>

                        @endforeach
                    @endisset
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /Page Content -->
    </div>

    <script>
        $(document).ready(function() {

            //Datatables
            $('.data-table').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {

            //Datatables
            $('.data-table').DataTable();
        });
    </script>

@endsection
