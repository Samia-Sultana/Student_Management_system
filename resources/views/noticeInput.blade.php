@extends('masterAdmin')
@section('noticeInput')

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
                                    <h5 class="card-title">Add Notice</h5>
                                </div>

                                <form class="gy-3" enctype="multipart/form-data" method="POST" action="{{ route('createNotice') }}">
                                    @csrf

                                    <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap ">
                                                    <input type="text" name="title" id="title" placeholder="Title" class="col-10">
                                                </div>
                                            </div>
                                    </div>


                                    <div class="row g-3 align-center">
                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control" type="text" id="notice" name="notice" value=""> </textarea>
                                                </div>
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
                                    <h5 class="card-title">All Notice</h5>
                                </div>
                                <div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <!-- <th class="pro-thumbnail">Thumbnail</th>
                                    <th class="pro-title">Product</th> -->
                                                <th class="pro-id">Id</th>
                                                <th class="pro-name">Name</th>
                                                <th class="pro-remove">Delete</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($notices)
                                            @foreach($notices as $notice)
                                            <tr>

                                                <td>{{$notice->id}}</td>
                                                <td>{{$notice->title}}</td>
                                                <td>
                                                    <form action="{{route('deleteNotice')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" value="{{$notice->id}}" name="notice_id" id="notice_id">
                                                        <button type="submit" class="btn btn-danger btn-delete-notice">Delete</button>
                                                    </form>
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
<script src="{{ asset('adminFrontend/assets/js/jquery-3.6.0.min.js')}}"></script>
<!--=====popper js=====-->
<script src="{{ asset('adminFrontend/assets/js/popper.min.js')}}"></script>
<!--=====bootstrap=====-->
<script src="{{ asset('adminFrontend/assets/js/bootstrap.min.js')}}"></script>
<!--=====Owl carousel=====-->
<script src="{{ asset('adminFrontend/assets/js/owl.carousel.min.js')}}"></script>
<!--=====header script=====-->
<script src="{{ asset('adminFrontend/assets/js/script.js')}}"></script>
<!--=====header script=====-->
<script src="{{ asset('adminFrontend/assets/js/main.js')}}"></script>
<script src="{{asset('adminFrontend/assets/js/ckeditor/ckeditor.js')}}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
    CKEDITOR.replace('notice');
</script>




@endsection


<!-- 
<form method="POST" action="{{ route('createCatagory') }}">
            @csrf
  <label for="catagoryName">Category name</label><br>
  <input type="text" id="catagoryName" name="catagoryName" value=""><br>
  <input type="submit" value="Submit">

        </form> -->