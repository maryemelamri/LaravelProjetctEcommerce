@extends('frontEnd.layouts.master')
@section('title','Galerie')
@section('content')


<div class="container-fluid boxIndex" style="background-color: black;color: white;font-size: large;font-weight: bold;text-align: center;vertical-align: middle;opacity: 0.9;background: url(images/backbox.jpeg);background-size: cover;background-repeat: no-repeat;">
 <h2 class="" style="color: white;padding: 20px">Gallerie</h2> 
</div>
<br><br>



  <!-- Section Service -->
<div class="container-fluid" style="background: url('images/back2.jpg') no-repeat; background-size: cover;padding: 20px;margin-bottom: 20px">
  
  <div class="container">
    <div class="popup-gallery row gallery">
      <a class="hvr-grow ml-2 mr-2 " href="{{asset('images/Gallerie/coiffure1.jpeg')}}" title="Coiffure 1"><img src="{{asset('images/Gallerie/coiffure1.jpeg')}}" width="200" height="50" class=" hex-image"></a>

      <a class="hvr-grow ml-2 mr-2" href="{{asset('images/Gallerie/coiffure2.jpg')}}" title="Coiffure 2"><img src="{{asset('images/Gallerie/coiffure2.jpg')}}" width="200" height="200" class=""></a>

      <a class="hvr-grow ml-2 mr-2" href="{{asset('images/Gallerie/coiffure3.jpeg')}}" title="Coiffure 3"><img src="{{asset('images/Gallerie/coiffure3.jpeg')}}" width="200" height="200" class=""></a>

       <a class="hvr-grow ml-2 mr-2" href="{{asset('images/Gallerie/spa1.jpg')}}" title="SPA 1"><img src="{{asset('images/Gallerie/spa1.jpg')}}" height="200" width="200" ></a>

      <a class="hvr-grow ml-2 mr-2" href="{{asset('images/Gallerie/spa2.jpeg')}}" title="SPA 2"><img src="{{asset('images/Gallerie/spa2.jpeg')}}" height="200" width="200"></a>
      

      <a class="hvr-grow ml-2 mr-2 decalage fou9" href="{{asset('images/Gallerie/spa3.jpeg')}}" title="SPA 3"><img src="{{asset('images/Gallerie/spa3.jpeg')}}" width="200" height="200"></a>

       <a class="hvr-grow fou9" href="{{asset('images/Gallerie/soin1.jpeg')}}" title="SOIN 1"><img src="{{asset('images/Gallerie/soin1.jpeg')}}" width="200" height="200"></a>
      <a class="hvr-grow fou9" href="{{asset('images/Gallerie/soin2.jpeg')}}" title="SOIN 2"><img src="{{asset('images/Gallerie/soin2.jpeg')}}" width="200" height="200"></a>
      <a class="hvr-grow fou9" href="{{asset('images/Gallerie/soin3.jpeg')}}" title="SOIN 3"><img src="{{asset('images/Gallerie/soin3.jpeg')}}" width="200" height="200"></a>

       <a class="hvr-grow fou9" href="{{asset('images/Gallerie/prod1.jpeg')}}" title="PROD 2"><img src="{{asset('images/Gallerie/prod1.jpeg')}}" width="200" height="200"></a>
      <a class="hvr-grow fou9" href="{{asset('images/Gallerie/prod2.jpeg')}}" title="PROD 2"><img src="{{asset('images/Gallerie/prod2.jpeg')}}" width="200" height="200"></a>

      <a class="hvr-grow fou9" href="{{asset('images/Gallerie/local1.jpeg')}}" title="SOIN 3"><img src="img/Gallerie/local1.jpeg" width="200" height="200"></a>

       <a class="hvr-grow fou9" href="{{asset('images/Gallerie/local2.jpg')}}" title="PROD 2"><img src="{{asset('images/Gallerie/local2.jpg')}}" width="200" height="200"></a>
      <a class="hvr-grow fou9" href="{{asset('images/Gallerie/local2.jpg')}}" title="PROD 2"><img src="{{asset('images/Gallerie/local2.jpg')}}" width="200" height="200"></a>

    
      
  </div>
  </div>
</div>

<script>
  $(document).ready(function() {
  $('.popup-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function(item) {
        return item.el.attr('title') ;
      }
    }
  });
});
</script>


@endsection
