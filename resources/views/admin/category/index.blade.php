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
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                            
                                    
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
                                        <option value="1">In Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6" id="category_image_input">
                                <div class="form-group">
                                    <label for="category_image">Category Image</label>
                                    <input class="form-control" type="file" id="category_image" name="image" onchange="getImagePreview(this)">
                                    <img id="category_image_preview" src="#" style="display: none"/>
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
            $('#category_image_input');
            $('#category_image_preview').css('display', 'none').attr('src', '');
        }
</script>
@endsection
