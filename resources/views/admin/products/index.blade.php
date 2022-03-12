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
                        <h3 class="page-title bold-heading">Products  List</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Products List</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="{{url('/add-product')}}" class="btn add-btn" title="Add New Product"><i class="fa fa-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

        </div>


        <div class="card">
            <div class="card-body">


                <table id="example1" class="table  table-striped table-hover">
                    <thead>
                    <tr style="background:black;color:white">
                        <th>SR#</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th> Desc</th>

                        <th>Created At</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @php $c=0; @endphp
                    @isset($data)
                        @foreach($data['products'] as $pro)
                            @php $c++; @endphp
                            <tr>
                                <td>{{$c}}</td>
                                <td>{{$pro->name}}</td>
                                <td>
                                    <img class="img img-thumbnail" src="{{asset('storage/app/public/products/').'/'.$pro->image}}" alt="{{$pro->name}}" style="height: 70px" width="80px">
                                </td>
                                <td>{{$pro->price}}</td>
                                <td>{{$pro->dsec}}</td>

                                <td>{{$pro->created_at}}</td>

                                <td>
                                    <a href="{{url('edit-product').'/'.encrypt($pro->id)}}">Edit</a>
                                    <a href="{{url('delete-product').'/'.encrypt($pro->id)}}">Delete</a>

                                </td>


                            </tr>

                        @endforeach
                    @endisset
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /Page Content -->
    </div>

@endsection
