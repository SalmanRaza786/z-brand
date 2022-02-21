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

                <form method="post" action="{{url("new-employee")}}" class="needs-validation" novalidate id="regForm" enctype="multipart/form-data">
                    @csrf
                    <div class="card tab">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Personal Information</h4>
                        </div>
                        <div class="card-body">




                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label>Name:<span class="text-danger">*</span></label>
                                    <input class="form-control" type="number" name="cnic" placeholder="Name" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Price <span class="text-danger">*</span></label>
                                    <input class="form-control" type="number" name="phone" placeholder="Price" required>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label>Sale Price <span class="text-danger">*</span></label>
                                    <div class="cal-"> <input class="form-control " type="text" name="dob" placeholder="Sale Proce" required></div>
                                </div>


                                <div class="form-group col-sm-6">
                                    <label>Description <span class="text-danger">*</span></label>
                                    <div class="cal-">
                                        <textarea name="" id="" cols="10" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label>Cover Image<span class="text-danger">*</span></label>
                                    <input type="file" name="file" class="form-control" onchange="previewFile(this);">

                                </div>

                                <div class="form-group col-sm-6">
                                    <div class="input-group-btn">
                                        <label for=""></label>
                                        <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus" style="margin-top: 20px"></i>Add</button>
                                    </div>
                                </div>

                            </div>


                            <div class="row">


                            
                                    <div class="clone hide">
                                        <div class="control-group input-group" style="margin-top:10px">
                                            <input type="file" name="images[]" class="form-control">
                                            <div class="input-group-btn">
                                                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div style="overflow:auto;" class="btn-group-div">
                        <div style="float:right;">

                            <button type="submit" class="btn btn-success" id="nextBtn">Save</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
        <!-- /Page Content -->
    </div>



    <script type="text/javascript">
        $(document).ready(function() {

            $(".btn-success").click(function(){
                var html = $(".clone").html();
                $(".increment").after(html);
            });

            $("body").on("click",".btn-danger",function(){
                $(this).parents(".control-group").remove();
            });

        });

    </script>
@endsection
