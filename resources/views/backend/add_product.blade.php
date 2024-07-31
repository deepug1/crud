@extends('backend.layout.main')

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Add Product</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                        <li class="breadcrumb-item active">Add Product</li>
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

                    <form action="{{ route('product_store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-4">
                                <label for="product_name" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="product_name" name="product_name">
                            </div>


                            <div class="mb-3 col-4">
                                <label for="product_category" class="form-label">Product Category</label>
                                <select class="form-control" id="product_category" name="product_category">
                                    <option value="electronics">Electronics</option>
                                    <option value="clothing">Clothing</option>
                                    <option value="Sport">Sport</option>
                                    <option value="home">Home</option>
                                    <option value="beauty">Beauty</option>
                                </select>
                            </div>

                            <div class="mb-3 col-4">
                                <label for="product_brand" class="form-label">Product Brand</label>
                                <input type="text" class="form-control" id="product_brand" name="product_brand">
                            </div>

                            <div class="mb-3 col-4">
                                <label for="product_quantity" class="form-label">Product Quantity</label>
                                <input type="number" class="form-control" id="product_quantity" name="product_quantity">
                            </div>

                            <div class="mb-3 col-4">
                                <label for="product_rating" class="form-label">Product Rating</label>
                                <input type="number" class="form-control" id="product_rating" name="product_rating"
                                    value="0">
                            </div>

                            <div class="mb-3 col-4">
                                <label for="product_status" class="form-label">Product Status</label>
                                <select class="form-control" id="product_status" name="product_status">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>

                            <div class="mb-3 col-4">
                                <label for="product_price" class="form-label">Product Price</label>
                                <input type="number" class="form-control" id="product_price" name="product_price">
                            </div>

                            <div class="mb-3 col-4">
                                <label for="product_discount" class="form-label">Product Discount</label>
                                <input type="number" class="form-control" id="product_discount" name="product_discount">
                            </div>

                            <div class="mb-3 col-4">
                                <label for="product_discount_price" class="form-label">Product Discount Price</label>
                                <input type="number" class="form-control" id="product_discount_price"
                                    name="product_discount_price">
                            </div>

                            <div class="mb-3 col-4">
                                <label for="product_image" class="form-label">Product Image</label>
                                <input type="file" class="form-control" id="product_image" name="product_image">
                            </div>


                            <div class="mb-3">
                                <label for="product_description" class="form-label">Product Description</label>
                                <textarea class="form-control" id="product_description"
                                    name="product_description"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>


                </div><!-- end card -->
            </div><!-- end card -->
        </div>
        <!-- end col -->



    </div>
    <!-- end row -->


</div>

@endsection