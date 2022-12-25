@extends('masterAdmin')
@section('schedule')

<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">


                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">

                        </div>

                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">Add schedule</h5>
                                </div>

                                <form class="gy-3" method="POST" action="{{route('createScedule')}}" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="row g-3 align-center">

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <lebel for="class">Choose class</lebel>
                                                    <select name="class" id="class" class="col-3">
                                                        @if($classes)
                                                        @foreach($classes as $item)
                                                        <option value="{{$item->class}}">{{$item->class}}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                <lebel for="section">Choose section</lebel>
                                                <select name="section" id="section" class="col-3">
                                                    @if($classes)
                                                    @foreach($classes as $item)
                                                    <option value="{{$item->section}}">{{$item->section}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                <lebel for="teacher">Choose teacher</lebel>
                                                <select name="teacher" id="teacher" class="col-3">
                                                    @if($teachers)
                                                    @foreach($teachers as $item)
                                                    <option value="{{$item->id}}">{{$item->initial}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                <lebel for="subject">Choose subject</lebel>
                                                <select name="subject" id="subject" class="col-5">
                                                    @if($teachers)
                                                    @foreach($teachers as $item)
                                                    <option value="{{$item->subject}}">{{$item->subject}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        


                                    </div>
                                    <div class="row g-3 align-center">
                                    <div class="col-lg-3">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                <lebel for="day">Day</lebel>
                                                <select name="day" id="day" class="col-6">
                                                   <option value="saturday">saturday</option>
                                                   <option value="sunday">sunday</option>
                                                   <option value="monday">monday</option>
                                                   <option value="tuesday">tuesday</option>
                                                   <option value="wednesday">wednesday</option>
                                                   <option value="thursday">thursday</option>
                                                   <option value="friday">friday</option>
                                                    
                                                </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                <lebel for="start">start</lebel>
                                               <input type="time" class="start" id="start" name="start">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                <lebel for="end">end</lebel>
                                               <input type="time" class="end" id="end" name="end">
                                                </div>
                                            </div>
                                        </div>



                                    </div>


                                    <div class="row g-3">
                                        <div class="col-lg-7 offset-lg-5">
                                            <div class="form-group mt-2">
                                                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div><!-- card -->
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">All Schedules</h5>
                                </div>
                                <div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <!-- <th class="pro-thumbnail">Thumbnail</th>
                                    <th class="pro-title">Product</th> -->
                                                <th class="pro-id">Class</th>
                                                <th class="pro-title">Section</th>
                                                <th class="pro-Day">Day</th>
                                                <th class="pro-teacher">Teacher</th>
                                                <th class="pro-subject">Subject</th>
                                                <th class="pro-start">Start</th>
                                                <th class="pro-end">End</th>
                                                <th class="pro-update">Update</th>
                                                <th class="pro-status">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($scedules)
                                            @foreach($scedules as $item)
                                            <tr>

                                                <td>{{$item->class}}</td>
                                                <td>{{$item->section}}</td>
                                                <td>{{$item->day}}</td>
                                                <td>{{$item->teacher_id}}</td>
                                                <td>{{$item->subject}}</td>
                                                <td>{{$item->start_time}}</td>
                                                <td>{{$item->end_time}}</td>
                                                <td>
                                                    
                                                update
                                                </td>
                                                <td>
                                                    <form action="{{route('deleteNav')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" value="{{$item->id}}" name="nav_id" id="nav_id">
                                                        <button type="submit" class="btn btn-danger btn-delete-catagory">Delete</button>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/Javascript">
    $(".status").on("change", function() {
        var $select = $(this);
        var id = $select.parent().prev().find("input#nav_id").val();
        var status = $select.val();
        console.log(id,status);
        $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });

   $.ajax({
            type:'POST',
            url:"{{ route('updateNavStatus') }}",
            data: {id:id,status:status},
            success:function(data){
                console.log('hiiiiiiiiiiiiiiiiii');
          }
       });
        

    });
</script>


@endsection


<!-- <form method="POST" action="{{ route('createNav') }}">
            @csrf
  <label for="title">Title</label><br>
  <input type="text" id="title" name="title" value=""><br>
  <label for="url">URL</label><br>
  <input type="text" id="url" name="url" value=""><br><br>
  <input type="submit" value="Submit">

        </form> -->