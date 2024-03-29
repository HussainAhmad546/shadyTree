@extends('admin.layouts.master')

@section('title')
  <title>Sheddy Tree | Products List</title>
  <link type="image/x-icon" href="images/favicon.png" rel="icon">
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/admin/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{asset('css/admin/style.css')}}">



@endsection

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
                <div class="col-sm-6">
                    <button class="float-sm-right btn default-color" data-toggle="modal" data-target="#add-product-model" onclick="add_product()">Add Product</button>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Product List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="product_list" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category</th>
                                            <th>Name</th>
                                            <th>Second Name</th>
                                            <th>Product Note</th>
                                            <th>Quantity</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $key => $singleProduct)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $singleProduct->category->name }}</td>
                                                <td>{{ $singleProduct->name }}</td>
                                                <td>{{ $singleProduct->second_name }}</td>
                                                <td>{{ $singleProduct->product_note }}</td>
                                                <td>{{ $singleProduct->quantity }}</td>
                                                <td>
                                                    {!! substr(strip_tags($singleProduct->description), 0, 60) !!}{{ strlen(strip_tags($singleProduct->description)) > 20 ? '...' : '' }}
                                                </td>

                                                <td>{{ $singleProduct->price }}</td>
                                                <td><img src="{{ asset('upload/product/'. $singleProduct->image_1) }}" style="width: 70px" class="previewable"/></td>
                                                <td><span class="badge bg-{{ $singleProduct->status == 0 ? 'green' : 'danger' }}">{{ $singleProduct->status == 0 ? 'Active' : 'Inactive' }}</span></td>
                                                <td>
                                                    <!-- <button class="btn mb-0.5" onclick="edit_product('{{ $singleProduct->id }}', '{{ $singleProduct->category_id }}', '{{ $singleProduct->name }}', '{{ $singleProduct->description }}', '{{ $singleProduct->price }}', '{{ $singleProduct->status }}', '{{ $singleProduct->image_1 }}')"><i class="fas fa-pen"></i></button> -->
                                                    <button class="btn mb-0.5" onclick="edit_product('{{ $singleProduct->id }}', '{{ $singleProduct->category_id }}', '{{ addslashes($singleProduct->name) }}', '{{ addslashes($singleProduct->description) }}', '{{ $singleProduct->price }}', '{{ $singleProduct->status }}', '{{ $singleProduct->image_1 }}')"><i class="fas fa-pen"></i></button>

                                                    <a class="btn" id="delete_btn_{{ $singleProduct->product_id }}" onclick="delete_product('{{ $singleProduct->id }}')"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header flex-column">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title w-100">Are you sure?</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelDelete">Cancel</button>
                        <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
                    </div>
                </div>
          </div>
        </div>

    <div class="modal fade" id="add-product-model">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="product_form" onsubmit="return false;">
                        <input type="hidden" id="id" name="id"/>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option value="">Select category</option>
                                        @foreach($categories as $category)
                                            <option  value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" id="product_name" name="name" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="second_name">Second Name</label>
                                    <input type="text" id="second_name" name="second_name" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="product_note">Product Note</label>
                                    <input type="text" id="product_note" name="product_note" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="text" id="quantity" name="quantity" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="product_description">Product Description</label>
                                    <textarea id="product_description" name="description"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="original_price">Price</label>
                                    <input type="number" id="original_price"  name="price" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="0">Active</option>
                                        <option value="1">In Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="product_image_1">Product Image</label>
                                    <input class="form-control" type="file" id="product_image_1" name="image_1" onchange="getImagePreview(this)">
                                    <img id="product_image_1_preview" src="#" style="display: none"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="add_product_btn">
                        <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                        <span class="btn-text">Save</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('js/admin/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/admin/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/admin/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/admin/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/admin/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/admin/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/admin/jszip.min.js') }}"></script>
    <script src="{{ asset('js/admin/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/admin/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/admin/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/admin/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/admin/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('js/admin/summernote-bs4.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/he/1.2.0/he.min.js"></script>

    <script>

function getImagePreview(image_object) {
    readURL(image_object);
}

function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#'+input.id+'_preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }

    $('#'+input.id+'_preview').css('display', 'block').css('width', '100px').css('margin-top', '20px');
}

</script>

    <script>

        $(function () {
            $("#product_list").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });

</script>
    <script>

    $(function () {
        $('#product_description').summernote();
    });

    </script>

<script>

function add_product() {

    $('#id').val('');
    $('#category_id').val('');
    $('#product_name').val('');
    $("#product_description").summernote("code", '');
    $('#original_price').val('');
    $('#status').val('');
    $('#second_name').val(''); // Populate second_name input
    $('#product_note').val(''); // Populate product_note input
    $('#quantity').val(''); // Populate quantity input
    $('#product_image_1_preview').css('display', 'none').css('width', '0px').css('margin-top', '0px').attr('src', '');
}

</script>


<script>

    $('#add_product_btn').on('click', function (){
    $(this).addClass('disabled').find('.btn-text').addClass('d-none');
    $(this).find('.spinner-border').removeClass('d-none');

        const product_id = $('#id').val();
        const category_id = $('#category_id').val();
        const product_name = $('#product_name').val();
        const second_name = $('#second_name').val();
        const product_note = $('#product_note').val();
        const quantity = $('#quantity').val();
        const original_price = $('#original_price').val();
        const product_image_1 = $('#product_image_1').get(0).files.length;

        let form_error = false;

        if (!category_id) {
            toastr.error('category is required to process.');
            form_error = true;
        }
        if (!product_name) {
            toastr.error('Product name is required to process.');
            form_error = true;
        }
        if (!original_price) {
            toastr.error(' Price is required to process.');
            form_error = true;
        }

        if (!product_id) {
            if (product_image_1 === 0) {
                toastr.error('Product image 1 is required to process.');
                form_error = true;
            }
        }

        if (form_error) {
        $(this).removeClass('disabled').find('.btn-text').removeClass('d-none');
        $(this).find('.spinner-border').addClass('d-none');
        return false;
    }

        $('#add_product_btn').addClass('disabled');
        var product_description = $('#product_description').summernote('code');
        var formData = new FormData(document.getElementById('product_form'));
        formData.append('description', product_description);

        var url = null;
        var id = $('#id').val();
        if (!id) {
            url = '{{ route('product.add') }}';
        } else {
            url = '{{ route('product.update') }}';
        }


        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {

                if (response.success) {

                    toastr.success(response.message);
                    setTimeout(function() {
                        window.location.href = '{{ route('product.list') }}';
                    }, 1000);
                }
                else {

                    toastr.error(response.message);
                    $('#add_product_btn').removeClass('disabled').find('.btn-text').removeClass('d-none');
                    $('#add_product_btn').find('.spinner-border').addClass('d-none');
                }
            }
        })

    });

</script>





<script>
    function edit_product(id) {
    $('#id').val(id);
    $('#add-product-model').modal('show');

    $.ajax({
        url: '{{ route('product.edit') }}',
        type: 'POST',
        data: {
            id: id,
            _token: '{{ csrf_token() }}'
        },
        success: function (response) {
            $('#category_id').val(response.product.category_id);
            $('#product_name').val(response.product.name);
            $('#second_name').val(response.product.second_name);
            $('#product_note').val(response.product_note);
            $('#quantity').val(response.product.quantity);
            $("#product_description").summernote("code", response.product.description);
            $('#original_price').val(response.product.price);
            $('#status').val(response.product.status);

            
            showImagePreview('#product_image_1_preview', response.product.image_1);
        },
        error: function (xhr, status, error) {
            console.log(error);
            toastr.error('Failed to fetch product details for editing.');
        }
    });
        
}

function edit_product(id, category_id, name, description, price, status, image_1, second_name, product_note, quantity) {
    console.log('Second Name:', second_name); 
    console.log('Name:', name); 
    $('#id').val(id);
    $('#category_id').val(category_id);
    $('#product_name').val(name);
    $('#second_name').val(second_name);
    $('#product_note').val(product_note);
    $('#quantity').val(quantity);
    $("#product_description").summernote("code", description);
    $('#original_price').val(price);
    $('#status').val(status);
    showImagePreview('#product_image_1_preview', image_1);
    $('#add-product-model').modal('show');
    $.ajax({
        url: '{{ route('product.edit') }}',
        type: 'POST',
        data: {
            id: id,
            _token: '{{ csrf_token() }}'
        },
        success: function (response) {
            // Handle success response
        },
        error: function (xhr, status, error) {
            console.log(error);
            toastr.error('Failed to fetch product details for editing.');
        }
    });
}

    function showImagePreview(element, imageUrl) {
        if (imageUrl) {
            $(element).css('display', 'block').css('width', '100px').css('margin-top', '20px').attr('src', '/upload/product/' + imageUrl);
        } else {
            $(element).css('display', 'none').css('width', '0px').css('margin-top', '0px').attr('src', '');
        }
    }

</script>

<script>
    function delete_product(id) {
        $('#myModal').modal('show');

        $('#confirmDelete').off('click').on('click', function() {
            $('#delete_btn_' + id).addClass('disabled');
            
            $.ajax({
                url: '/product/delete/' + id,
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    if (response.success) {
                        toastr.success(response.message);
                        setTimeout(function () {
                            window.location.href = '{{ route('product.list') }}';
                        }, 1000);
                    } else {
                        toastr.error(response.message);
                        $('#delete_btn_' + id).removeClass('disabled');
                    }
                }
            });
        });

        $('#cancelDelete').off('click').on('click', function() {
            $('#myModal').modal('hide');
        });
    }
</script>

<script>
  $(document).ready(function() {
    function showPreview() {
      $('#preview').css('display', 'block');
    }

    function hidePreview() {
      $('#preview').css('display', 'none');
    }

    function setPreviewImage(src) {
      $('#preview-image').attr('src', src);
      showPreview();
    }

    $('.previewable').click(function() {
      var src = $(this).attr('src');
      setPreviewImage(src);
    });

    $(document).click(function(event) {
      if (!$(event.target).closest('#preview').length && !$(event.target).closest('.previewable').length) {
       hidePreview();
        }
       
    });

    $('#preview').click(function() {
      hidePreview();
    });
  });
</script>



@endsection
