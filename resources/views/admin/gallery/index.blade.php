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
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
  </div>
</div>
<!-- Gallery -->


<!-- Gallery -->
<div class="row">
        @foreach($images as $image)
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <img src="{{ asset('storage/'.$image->path) }}" class="w-100 shadow-1-strong rounded mb-4" alt="gallery-image">
                </div>
        @endforeach
    </div> 
    <!-- Gallery -->
         
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
    function add_image() {
    var formData = new FormData();
    formData.append('image', $('#gallery_image')[0].files[0]);
    formData.append('_token', '{{ csrf_token() }}'); // Add CSRF token

    $.ajax({
        type: 'POST',
        url: '{{ route("image.add") }}',
        data: formData, // Directly pass FormData object
        processData: false,
        contentType: false,
        success: function(response) {
            // Success handling
            console.log(response);
            // Reload page or update UI as required
        },
        error: function(xhr, status, error) {
            // Error handling
            console.error(xhr.responseText);
        }
    });
}

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

@endsection
