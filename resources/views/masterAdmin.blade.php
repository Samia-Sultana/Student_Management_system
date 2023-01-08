<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('adminFrontend/images/favicon.png')}}">
    <!-- Page Title  -->
    <title></title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('adminFrontend/assets/css/dashlite.css?ver=3.1.1')}}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('adminFrontend/assets/css/theme.css?ver=3.1.1')}}">
       
    <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

     <!----------- master user styles ---------------->
   
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('userFrontend/assets/img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('userFrontend/assets/img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('userFrontend/assets/img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('userFrontend/assets/img/favicon/site.webmanifest')}}">
  
    <link href="{{ asset('userFrontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <link href="{{ asset('userFrontend/assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('userFrontend/assets/css/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{ asset('userFrontend/assets/css/flaticon-set.css')}}" rel="stylesheet" />
    <link href="{{ asset('userFrontend/assets/css/elegant-icons.css')}}" rel="stylesheet" />
    <link href="{{ asset('userFrontend/assets/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{ asset('userFrontend/assets/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('userFrontend/assets/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('userFrontend/assets/css/animate.css')}}" rel="stylesheet" />
    <link href="{{ asset('userFrontend/assets/css/bootsnav.css')}}" rel="stylesheet" />
    <link href="{{ asset('userFrontend/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('userFrontend/assets/css/style1.css')}}" rel="stylesheet">
    <link href="{{ asset('userFrontend/assets/css/responsive.css')}}" rel="stylesheet" />
   
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-------------------------end master user ------->


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">




    
</head>

@include('admin.adminNavbar')

    @yield('adminDashboard')
    @yield('onlineApplications')
    @yield('onlineApplicationsDetails')
    @yield('adminLogo');
    @yield('adminSlider')
    @yield('adminSmedia')
    @yield('navbar')
    @yield('blogCatagory')
    @yield('blog')
    @yield('photos')
    @yield('notice')
    @yield('noticeInput')
    @yield('class')
    @yield('schedule')
    @yield('teacherApplications')
    @yield('teacherApplicationForm')
    @yield('teacherApplicationsDetails')
    @yield('teacherApplicationApprove')
    @yield('tutionFee')
    @yield('teacherSalary')
    @yield('accountStatus')
    @yield('updateStudentInformation')
    

    
@include('admin.adminFooter')


<!-- JavaScript -->

<!----Jquery----->
<script
  src="https://code.jquery.com/jquery-3.6.3.min.js"
  integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
  crossorigin="anonymous"></script>
<!--=====popper js=====-->
<script src="{{ asset('adminFrontend/assets/js/js/popper.min.js')}}"></script>
<!--=====bootstrap=====-->
<script src="{{ asset('adminFrontend/assets/js/js/bootstrap.min.js')}}"></script>
<!--=====Owl carousel=====-->
<script src="{{ asset('adminFrontend/assets/js/js/owl.carousel.min.js')}}"></script>
<!--=====header script=====-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"> </script>
<script src="{{asset('adminFrontend/assets/js/ckeditor.js')}}"></script> 
<!--=====header script=====-->
<script src="{{ asset('adminFrontend/assets/js/js/script.js')}}"></script>
<script src="{{ asset('adminFrontend/assets/js/js/main.js')}}"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
        break;
        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
        break;
        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
        break;
        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
        break;
    }
    @endif
</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        $(function(){
            $(document).on('click','#delete',function(e){
                e.preventDefault();
                var link = $(this).attr("href");
                Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = link
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                }
                })
            });
        });
</script>



</html>