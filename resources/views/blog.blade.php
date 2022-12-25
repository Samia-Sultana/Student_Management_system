@extends('masterAdmin')
@section('blog')

<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">


                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">

                            </div>
                        </div>

                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">Add Blog</h5>
                                </div>

                                <form class="gy-3" enctype="multipart/form-data" method="POST" action="{{ route('createBlog') }}">
                                    @csrf

                                    <div class="row g-3 align-center">
                                    <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input class="form-control" type="text" id="title" name="title" value="" placeholder="Title" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control" type="text" id="blog" name="blog" value=""> </textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <div class="form-control-wrap">

                                                <label for="catagory">Choose a catagory:</label>
                                                <select name="catagory" id="catagory">
                                                    @foreach($catagories as $catagory )
                                                    @if($catagory->status == "enable")
                                                    <option value="{{$catagory->id}}">{{$catagory->catagoryName}}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row g-3">
                                        <div class="col-lg-7 offset-lg-5">
                                            <div class="form-group mt-2">
                                                <button type="submit" class="btn btn-lg btn-primary">Upload</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div><!-- card -->
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">All Blogs</h5>
                                </div>
                                <div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <!-- <th class="pro-thumbnail">Thumbnail</th>
                                    <th class="pro-title">Product</th> -->
                                                <th class="pro-id">Id</th>
                                                <th class="pro-name">Title</th>
                                                <th class="pro-name">Catagory</th>
                                                <th class="pro-remove">Delete</th>
                                                <th class="pro-status">Update</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($blogs)
                                            @foreach($blogs as $blog)
                                            <tr>
                                                <td>{{$blog->id}}</td>
                                                <td>{{$blog->title}}</td>
                                                <td>{{$blog->blogcatagory_id}}</td>
                                                <td>
                                                    <form action="{{route('deleteCatagory')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" value="{{$blog->id}}" name="blog_id" id="blog_id">
                                                        <button type="submit" class="btn btn-danger btn-delete-catagory">Delete</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    update
                                                </td>
                                            </tr>

                                            @endforeach
                                            @endif
                                </div>
                            </div>

                        </div>

                    </div><!-- .nk-block -->

                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->

<!----Jquery----->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<!--=====popper js=====-->
<script src="{{ asset('assets/js/popper.min.js')}}"></script>
<!--=====bootstrap=====-->
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<!--=====Owl carousel=====-->
<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
<!--=====header script=====-->
<script src="{{ asset('assets/js/script.js')}}"></script>
<!--=====header script=====-->
<script src="{{ asset('assets/js/main.js')}}"></script>
<!--=====CKeditor=====-->
<script src="{{asset('adminFrontend/assets/js/ckeditor/ckeditor.js')}}"></script>

<script>
    CKEDITOR.replace('blog');
</script>


<script type="text/Javascript">
    $(".status").on("change", function() {
        var $select = $(this);
        var id = $select.parent().prev().find("input#catagory_id").val();
        var status = $select.val();
        console.log(id,status);
        $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });

   $.ajax({
            type:'POST',
            url:"{{ route('updateCatagoryStatus') }}",
            data: {id:id,status:status},
            success:function(data){
                console.log('hiiiiiiiiiiiiiiiiii');
          }
       });
        

    });
</script>


@endsection


<!-- 
<form method="POST" action="{{ route('createCatagory') }}">
            @csrf
  <label for="catagoryName">Category name</label><br>
  <input type="text" id="catagoryName" name="catagoryName" value=""><br>
  <input type="submit" value="Submit">

        </form> -->