<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
   
    <title>@yield('title')</title>
    
    {!!  Html::style('assets/css/bootstrap.css') !!}
    {!!  Html::style('assets/css/font-awesome.css') !!}
    {!!  Html::style('assets/css/style.css') !!}
    {!!  Html::style('assets/css/AdminLTE.css') !!}

    {!!  Html::script('assets/js/jquery-1.11.1.js') !!}    

    <!-- Insert to your webpage before the </head> -->
    {!!  Html::script('assets/sliderengine1/amazingslider.js') !!}        
    {!!  Html::style('assets/sliderengine1/amazingslider-1.css') !!}        
    {!!  Html::script('assets/sliderengine1/initslider-1.js') !!}
        <!-- End of head section HTML codes -->

<script type="text/javascript">
    $(document).ready(function(){
        $('.carousel').carousel({
          interval: 10000
        });

    });

</script>

</head>
<body>
@section('sidebar')
<header >
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <strong>Profile desa cihapit kecamatan tamansari kota bandung</strong>
                </div>
                 <div class="col-xs-12 col-sm-6">
                    &nbsp;&nbsp;
                    <a href="http://www.twitter.com/" target="_blank"><img src="http://bandungwetan.com/wp-content/themes/bantan/cyberchimps/lib/images/social/default/twitter.png" alt="Twitter" /></a><a href="http://www.facebook.com/" target="_blank"><img src="http://bandungwetan.com/wp-content/themes/bantan/cyberchimps/lib/images/social/default/facebook.png" alt="Facebook" /></a><a href="http://www.google.com/" target="_blank"><img src="http://bandungwetan.com/wp-content/themes/bantan/cyberchimps/lib/images/social/default/gplus.png" alt="Google" /></a><a href="http://www.youtube.com/" target="_blank"><img src="http://bandungwetan.com/wp-content/themes/bantan/cyberchimps/lib/images/social/default/youtube.png" alt="YouTube" /></a><a href="http://www.maps.google.com/" target="_blank"><img src="http://bandungwetan.com/wp-content/themes/bantan/cyberchimps/lib/images/social/default/googlemaps.png" alt="Google Maps" /></a><a href="http://bandungwetan.com/?feed=rss" target="_blank"><img src="http://bandungwetan.com/wp-content/themes/bantan/cyberchimps/lib/images/social/default/rss.png" alt="RSS" /></a>
                </div>
            </div>
        </div>
</header>
    <!-- HEADER END-->




    <div class="navbar navbar-inverse set-radius-zero" style="background:#2062DD; height:90px;">

    <div class="top">

        <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-2">
            <div class="navbar-header" style="margin-bottom:30px;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="" >
                    <img src="assets/img/64-64.jpg" style="margin-bottom:50px;"/>
                </a>
                
                </div>          
            </div>
            <div class="col-xs-12 col-sm-7">
                <h3 style="color:black; font-weight:bold;">DESA CIHAPIT KECAMATAN BANDUNG WETAN</h3>
                  <h5 style="color:black; text-align:center; ">Alamat : jl. sabang samapai merauke jl no 1234 telp 2313454 kode post</h5>
            </div>
            <div class="col-xs-12 col-sm-3">

            
            <div class="input-group navbar-right" style="margin-top:50px; margin-bottom:10px; margin-right:10px;">
                         
              <input type="search" name="pencarian"  class="form-control"  required="required" >
              <span class="input-group-btn">
                <button class="btn btn-default" type="Submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
              </span>
              
            </div><!-- /input-group -->
                

            </div>
            </div>
        </div>


    </div>

    <div class="middle">



    </div>

    <div class="bottom">


    </div>

 

    </div>


    <!-- LOGO HEADER END-->
<section class="menu-section">
    <div class="container">
          <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-left" >
                            <li><a  href="{{ URL::to('') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                            <li class="dropdown" style="bakcground:blue;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Peta Wilayah <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="-1-col.html">Lokasi</a>
                                </li>
                                <li>
                                    <a href="-2-col.html">Kondisi Existing</a>
                                </li>
                                
                            </ul>
                            </li>
                            <li><a href="{{ URL::to('/profile')}}">Profile</a></li>
                            <li class="dropdown" style="bakcground:blue;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Latar Belakang <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ URL::to('/visi-misi')}}">Visi & Misi</a>
                                </li>
                                <li>
                                    <a href="-#">Moto</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('/data-statis') }}">Data Statis</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('/data-dinamis') }}">Data Dinamis</a>
                                </li>

                                
                            </ul>
                            </li>
                                <li class="dropdown" style="bakcground:blue;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Galeri Foto <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Kegiata Kelurahan</a>
                                </li>
                                <li>
                                    <a href="#">PIPPK</a>
                                </li>
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lembaga  <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">RW</a></li>
                                        <li><a href="#">PKK</a></li>
                                        <li><a href="#">LPM</a></li>
                                        <li><a href="#">Karang Taruna</a></li>
                                    </ul>
                                  </li>
                                
                            </ul>
                            </li>
                                <li><a href="">Kependudukan</a></li>
                                <li><a href="table.html">Pengaduan</a></li>
                                <!-- <li><a href="forms.html">Forms</a></li>
                                 <li><a href="login.html">Login Page</a></li>
                                <li><a href="blank.html">Blank Page</a></li> -->
                                
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>     

@show
<section class="content">
<div class="container">
<div class="row">
@yield('content')        


 @section('side')
                <div class="col-xs-12 col-md-4">
                    <div class="panel panel-info">
                    <div class="panel-heading">
                      <h3 class="panel-title">Bapak Lurah</h3>
                    </div>
                    <div class="panel-body">
                      <img src="assets/img/pak_lurah.jpg" alt="" class="img-responsive" width="340">
                    </div>
                  </div>

                </div>
                
                <div class="row">
                 
                
                <div class="col-xs-12 col-md-4">
                    <div class="panel panel-info">
                    <div class="panel-heading">
                      <h3 class="panel-title">Bapak Lurah</h3>
                    </div>
                    <div class="panel-body">
                                        <!-- Insert to your webpage where you want to display the slider -->
                          <div id="amazingslider-wrapper-1" class="slider" >
                                <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                                    <ul class="amazingslider-slides" style="display:none;">
                                        <li><img src="assets/images/bg05-freshy-water-01.jpg" alt="bg05-freshy-water-01"  title="bg05-freshy-water-01" />
                                        </li>
                                        <li><img src="assets/images/Wallpaper%20pemandangan%20air%20terjun.jpg" alt="Wallpaper pemandangan air terjun"  title="Wallpaper pemandangan air terjun" />
                                        </li>
                                        <li><img src="assets/images/water-wide-hd-wallpaper-for-desktop-background-download-water-images.jpg" alt="water-wide-hd-wallpaper-for-desktop-background-download-water-images"  title="water-wide-hd-wallpaper-for-desktop-background-download-water-images" />
                                        </li>
                                    </ul>
                                    
                                <!-- <div class="amazingslider-engine"><a href="http://amazingslider.com" title="JavaScript Slideshow">JavaScript Slideshow</a></div> -->
                                </div>
                            </div>
                        <!-- End of body section HTML codes -->



                
                  </div>

                </div>
                   

                </div>
                </div>
                


@show




</div> <!-- end row -->
</div> <!-- containt -->
</div>
</div>
</section>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2016 Kelurahan Cihapit Bandung |  : <a href="http://www.designbootstrap.com/" target="_blank">Design Ver 1.1</a>
                </div>

            </div>
        </div>
    </footer>



{!! Html::script('assets/js/bootstrap.js') !!}
</body>
</html>