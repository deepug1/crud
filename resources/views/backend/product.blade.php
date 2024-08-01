@extends('backend.layout.main')

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Product</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                        <li class="breadcrumb-item active">Product</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <!-- Product table -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <div>
                            <a class="btn btn-primary waves-effect waves-light" href="{{route('add_product')}}">Add
                                Product</a>
                        </div>
                    </div>

                    <h4 class="card-title mb-4">Latest Products</h4>

                    <div class="table-responsive">
                        <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>image</th>
                                    <!-- <th>product_description</th> -->
                                    <th>category</th>
                                    <th>Brand</th>
                                    <th>Quantity</th>
                                    <th>Satus</th>
                                    <!-- <th>Rating</th> -->
                                    <th>Discount</th>
                                    <!-- <th>Discount price</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead><!-- end thead -->

                            @foreach ($products as $product)
                            <tbody>
                                <tr>
                                    <td>
                                        <h6 class="mb-0">{{$product -> product_name}}</h6>
                                    </td>
                                    <td>
                                        <h6>{{$product -> product_price}}</h6>
                                    </td>
                                    <td>
                                        <!-- <h6>{{$product -> product_image}}</h6> -->
                                        <img src="{{ asset('upload/product_image/'.$product->product_image) }}"
                                            alt="product_image" style="width: 50px; height: 50px;">
                                    </td>
                                    <!-- <td>
                                        <h6>{{$product -> product_description}}</h6>
                                    </td> -->
                                    <td>
                                        <h6>{{$product -> product_category}}</h6>
                                    </td>

                                    <td>
                                        <h6>{{$product -> product_brand}}</h6>
                                    </td>
                                    <td>
                                        <h6>{{$product -> product_quantity}}</h6>
                                    </td>
                                    <td>
                                        <h6>{{$product -> product_status}}</h6>
                                    </td>
                                    <!-- <td>
                                        <h6>{{$product -> product_rating}}</h6>
                                    </td> -->
                                    <td>
                                        <h6>{{$product -> product_discount}}</h6>
                                    </td>
                                    <!-- <td>
                                        <h6>{{$product -> product_discount_price}}</h6>
                                    </td> -->
                                    <td class="d-flex gap-2">
                                        <h6><a href="{{route('product_edit',$product->id)}}"><i
                                                    class="ri-edit-2-fill"></i></a>
                                        </h6>

                                        <h6><a href="#"><i class="ri-delete-bin-fill"></i></button></a>
                                        </h6>
                                    </td>

                                </tr>

                                <!-- end -->

                            </tbody><!-- end tbody -->
                            @endforeach
                        </table> <!-- end table -->
                    </div>
                </div><!-- end card -->
            </div><!-- end card -->
        </div>
        <!-- end col -->



    </div>
    <!-- end row -->
</div>

@endsection