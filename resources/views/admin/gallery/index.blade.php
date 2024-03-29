@extends('admin.layouts.master')

@section('title')
  <title>Sheddy Tree | Gallery</title>
  <link type="image/x-icon" href="images/favicon.png" rel="icon">
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
                        <h1>Sheddy Tree Gallery</h1>
                    </div>
                    <div class="col-sm-6">
                        <button class="float-sm-right btn btn-primary default-color" data-toggle="modal" data-target="#add-category-model" onclick="add_image()">Add Image</button>
                    </div>
                </div>
            </div>

    <!-- Gallery -->
    <div class="row">
        @foreach($images as $image)
            <div class="col-lg-4 col-md-6 col-xs-12 image-container">
                <img src="{{ asset('storage/'.$image->path) }}" class=" shadow-1-strong rounded mb-4" alt="gallery-image" height="200px" width="300px">
                <div class="delete-icon" id='delete_btn_{{ $image->id }}' onclick="delete_image('{{ $image->id }}')">
                    <i class="fas fa-trash"></i>
                </div>
            </div>
        @endforeach
    </div> 
    <!-- Gallery -->
         
        </section>
        
        <!-- Delete Image Confimation Modal -->
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
    
    <!-- Upload Gallery Image Modal -->
    <div class="modal fade" id="add-category-model">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Upload Gallery Image</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="category_form" onsubmit="return false;">
                    @csrf
                        <input type="hidden" id="id" name="id"/>
                        <div class="row">
                            <div class="col-lg-12" id="gallery_image_input">
                                <div class="form-group">
                                    <label for="gallery_image">Gallery Image</label>
                                    <input class="form-control" type="file" id="gallery_image" name="image" onchange="getImagePreview(this)">
                                    <img id="gallery_image_preview" src="#" style="display: none"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="add_image_btn">Save</button>
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
$(document).ready(function() {
    $('#add_image_btn').on('click', function(e) {
        e.preventDefault();
        if ($(this).data('submitting')) {
            return;
        }
        $(this).data('submitting', true);
        if ($('#gallery_image')[0].files.length > 0) {
            add_image();
        } else {
            alert('Please select an image.');
            $(this).data('submitting', false);
        }
    });

    function getImagePreview(image_object) {
        readURL(image_object);
    }

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#'+input.id+'_preview').attr('src', e.target.result).show();
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#add-category-model').on('hidden.bs.modal', function () {
        $('#category_form')[0].reset();
        $('#gallery_image_preview').attr('src', '#').hide();
        $('#add_image_btn').data('submitting', false);
    });

    function add_image() {
        var formData = new FormData();
        formData.append('image', $('#gallery_image')[0].files[0]);
        formData.append('_token', '{{ csrf_token() }}');

        $.ajax({
            type: 'POST',
            url: '{{ route("gallery.image.add") }}',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $('#add-category-model').modal('hide');
                location.reload();
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            },
            complete: function() {
                $('#add_image_btn').data('submitting', false);
            }
        });
    }
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
    $(document).ready(function() {
    $('.delete-icon').on('click', function() {
        $('#myModal').modal('show');
    });
});
</script>
<script>

   
    function delete_image(id) {
    $('#myModal').modal('show');
    $('#delete_btn_' + id).html('<i class="fas fa-spinner fa-spin"></i>');

    $('#confirmDelete').on('click', function () {
        $('#delete_btn_' + id).addClass('disabled');

        $.ajax({
            url: '{{ route('gallery.image.delete', ['id' => '__id__']) }}'.replace('__id__', id),
            type: 'POST',
            data: {
                id: id,
                _token: '{{ csrf_token() }}'
            },
            success: function (response) {
                if (response.success) {
                    toastr.success(response.message);
                    setTimeout(function () {
                        window.location.href = '{{ route('gallery.admin.list') }}';
                    }, 1000);
                } else {
                    toastr.error(response.message);
                }

                $('#delete_btn_' + id).html('<i class="fas fa-trash"></i>').removeClass('disabled');
                $('#myModal').modal('hide');
            },
            error: function () {
                toastr.error('Failed to delete Image. Please try again.');
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
