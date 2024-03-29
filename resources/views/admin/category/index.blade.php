@extends('admin.layouts.master')

@section('title')
  <title>Sheddy Tree | Category List</title>
@endsection
@section('style')

    <link rel="stylesheet" href="{{asset('css/admin/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/admin/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/admin/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/style.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


@endsection

@section('content')

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Parent Category</h1>
                    </div>
                    <div class="col-sm-6">
                        <button class="float-sm-right btn btn-primary default-color" data-toggle="modal" data-target="#add-category-model" onclick="add_category()">Add Category</button>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Category List</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="category_list" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category Name</th>
                                            <th>Time</th>
                                            <th>Choice</th>
                                            <th>Note</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categories as $key => $category)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->time }}</td>
                                                <td>{{ $category->choice }}</td>
                                                <td>{{ $category->addons }}</td>
                                                <td><span class="badge bg-{{ $category->status == 0 ? 'green' : 'danger' }}">{{ $category->status == 0 ? 'Active' : 'Inactive' }}</span></td>
                                                <td>
                                                <button class="btn" onclick="edit_category('{{ $category->id }}', '{{ $category->name }}', '{{ $category->status }}')"><i class="fas fa-pencil-alt"></i></button>
                                                    <a class="btn" id='delete_btn_{{ $category->id }}' onclick="delete_category('{{ $category->id }}')"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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


    <!-- <div class="modal fade" id="add-category-model">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="category_form" onsubmit="return false;">
                        <input type="hidden" id="id" name="id"/>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="category_name">Category Name</label>
                                    <input type="text" id="category_name" name="name" placeholder="" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="category_status">Status</label>
                                    <select name="status" id="category_status" class="form-control">
                                        <option value="">Please select</option>
                                        <option value="0">Active</option>
                                        <option value="1">In Active</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="add_category_btn">Save</button>
                </div>
            </div>
        </div>
    </div> -->
    <div class="modal fade" id="add-category-model">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="category_form" onsubmit="return false;">
                        <input type="hidden" id="id" name="id"/>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="category_name">Category Name</label>
                                    <input type="text" id="category_name" name="name" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="category_status">Status</label>
                                    <select name="status" id="category_status" class="form-control">
                                        <option value="">Please select</option>
                                        <option value="0">Active</option>
                                        <option value="1">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <!-- New Fields: Time, Choice, Addons -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="time">Time</label>
                                    <input type="text" id="time" name="time" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="choice">Choice</label>
                                    <input type="text" id="choice" name="choice" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="addons">Addons</label>
                                    <input type="text" id="addons" name="addons" placeholder="" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="add_category_btn">Save</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

    <script src="{{asset('js/admin/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/admin/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/admin/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('js/admin/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/admin/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('js/admin/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/admin/jszip.min.js')}}"></script>
    <script src="{{asset('js/admin/pdfmake.min.js')}}"></script>
    <script src="{{asset('js/admin/vfs_fonts.js')}}"></script>
    <script src="{{asset('js/admin/buttons.html5.min.js')}}"></script>
    <script src="{{asset('js/admin/buttons.print.min.js')}}"></script>
    <script src="{{asset('js/admin/buttons.colVis.min.js')}}"></script>

    <script>

        $(function () {
            $("#category_list").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });

    </script>
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
        function add_category() {
            $('#category_form input[type=hidden]').val('');
            $('#category_form input[type=text]').val('');
            $('#category_form select').val('');
        }
</script>

<script>

    $('#add_category_btn').on('click', function () {
        const category_name = $('#category_name').val();
        const category_status = $('#category_status').val();
        const time = $('#time').val(); // New field: Time
        const choice = $('#choice').val(); // New field: Choice
        const addons = $('#addons').val(); // New field: Addons
        let form_error = false;

        if (!category_name) {
            toastr.error('Category name is required to process.');
            form_error = true;
        }
        if (!category_status) {
            toastr.error('Status is required to process.');
            form_error = true;
        }

        if (form_error)
            return false;

        $('#add_category_btn').addClass('disabled');

        var formData = new FormData(document.getElementById('category_form'));

        var url = null;
        var id = $('#id').val();
        if (!id) {
            url = '{{ route('category.add') }}';
        } else {
            url = '{{ route('category.update') }}';
        }

        formData.append('time', time); // Append Time field data to form data
        formData.append('choice', choice); // Append Choice field data to form data
        formData.append('addons', addons); // Append Addons field data to form data

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
                        window.location.href = '{{ route('category.list') }}';
                    }, 1000);
                }
                else {

                    toastr.error(response.message);
                    $('#add_category_btn').removeClass('disabled');
                }
            }
        })
    });

</script>

<script>

    function edit_category(id, name, status) {
    $('#id').val(id);
    $('#add-category-model').modal('show');

    $.ajax({
        url: '{{ route('category.edit') }}',
        type: 'POST',
        data: {
            id: id,
            _token: '{{ csrf_token() }}'
        },
        success: function (response) {
            $('#category_name').val(response.category.name);
            $('#category_status').val(response.category.status);
            $('#time').val(response.category.time); // Set Time field value
            $('#choice').val(response.category.choice); // Set Choice field value
            $('#addons').val(response.category.addons); // Set Addo
        },
        error: function (xhr, status, error) {
            console.log(error);
            toastr.error('Failed to fetch category details for editing.');
        }
    });
 }


</script>



<script>

   
    function delete_category(id) {
    $('#myModal').modal('show');
    $('#delete_btn_' + id).html('<i class="fas fa-spinner fa-spin"></i>');

    $('#confirmDelete').on('click', function () {
        $('#delete_btn_' + id).addClass('disabled');

        $.ajax({
            url: '{{ route('category.delete', ['id' => '__id__']) }}'.replace('__id__', id),
            type: 'POST',
            data: {
                id: id,
                _token: '{{ csrf_token() }}'
            },
            success: function (response) {
                if (response.success) {
                    toastr.success(response.message);
                    setTimeout(function () {
                        window.location.href = '{{ route('category.list') }}';
                    }, 1000);
                } else {
                    toastr.error(response.message);
                }

                $('#delete_btn_' + id).html('<i class="fas fa-trash"></i>').removeClass('disabled');
                $('#myModal').modal('hide');
            },
            error: function () {
                toastr.error('Failed to delete category. Please try again.');
                $('#delete_btn_' + id).html('<i class="fas fa-trash"></i>').removeClass('disabled');
                $('#myModal').modal('hide');
            }
        });
    });

    $('#cancelDelete').on('click', function () {
        $('#myModal').modal('hide');
    });
}


</script>
@endsection
