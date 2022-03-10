@extends('admin.admin-setup.master')
@section('content')
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
                        <a href="{{url('/products')}}" class="btn add-btn" title="Add New Product"><i class="fa fa-list" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">

                @if($message=Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong> {{ $message}}</strong>
                    </div>
                @endif
                <form action="{{ url('save-product') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">



                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Category</label>
                                <select name="cat_id" id="" class="form-control">
                                    <option value="">Choose Category</option>
                                    @isset($data['category'])
                                        @foreach($data['category']  as $cat)
                                    <option value="{{$cat->id}}">{{$cat->cat_name}}</option>
                                        @endforeach
                                    @endisset
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Product Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="number" class="form-control" name="price" placeholder="price">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Sale Price</label>
                                <input type="number" class="form-control" name="sale_price" placeholder="Sale Price">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Desc</label>

                                <textarea name="desc" id="" cols="10" rows="3" name="desc" class="form-control"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <!-- tabel start -->
                        <table class="table table-bordered mt-5 table-style">
                            <tbody id="tblPurchase">
                            <tr>
                                <td>
                                    <label for="">Cover Image</label>
                                    <input type="file" class="form-control " name="file" required>
                                </td>
                                <td><button type="button" class="btn-success" id="addNewRow"><i class="fa fa-plus"></i></button> </td>
                            </tr>
                            </tbody>
                        </table>
                        <button class="btn btn-primary" id="btnSubmit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /Page Content -->
    </div>
    <script type="text/javascript">
        $(function () {
            $('#addNewRow').on('click', function () {
                var tr = $("#dvOrders").find("Table").find("TR:has(td)").clone();
                console.log(tr);
                $("#tblPurchase").append(tr);
            });
        });
    </script>
    <div id="dvOrders" style="display:none">
        <table class="table table-bordered mt-5 table-style secondtable " >
            <tr>
                <td>
                    <label for="">Images</label>
                    <input type="file" class="form-control "  name="images[]" >
                </td>
                <td style="color:red;cursor: pointer" class="delete-row" title="Remove"><i class="fa fa-trash"></i></td>
            </tr>
        </table>
    </div>
    <script>
        $(document).ready(function () {

            // Denotes total number of rows
            var rowIdx = 0;


            // jQuery button click event to remove a row.
            $('#tblPurchase').on('click', '.delete-row', function () {

                // Getting all the rows next to the row
                // containing the clicked button
                var child = $(this).closest('tr').nextAll();

                // Iterating across all the rows
                // obtained to change the index
                child.each(function () {

                    // Getting <tr> id.
                    var id = $(this).attr('id');

                    // Getting the <p> inside the .row-index class.
                    var idx = $(this).children('.row-index').children('p');

                    // Gets the row number from <tr> id.
                    var dig = parseInt(id.substring(1));

                    // Modifying row index.
                    idx.html(`Row ${dig - 1}`);

                    // Modifying row id.
                    $(this).attr('id', `R${dig - 1}`);
                });

                // Removing the current row.
                $(this).closest('tr').remove();

                // Decreasing total number of rows by 1.
                rowIdx--;
            });




            $('.livesearch').select2({

                ajax: {
                    url: '{{url("get-clients-name")}}',
                    dataType: 'json',
                    delay: 250,
                    processResults: function (data) {

                        return {
                            results: $.map(data, function (item) {
                                return {
                                    text: item.name,
                                    id: item.id
                                }
                            })
                        };
                    },
                    cache: true
                }
            });
        });
    </script>
@endsection
