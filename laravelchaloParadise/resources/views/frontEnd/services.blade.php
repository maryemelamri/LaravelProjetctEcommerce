
@extends('frontEnd.layouts.master')
@section('title','Services')
@section('content')



<style>
   
    .swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }
    .swiper-slide {
      background-color: #fff;
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;

    }
  </style>



<div class="container-fluid boxIndex" style="background-color: black;color: white;font-size: large;font-weight: bold;text-align: center;vertical-align: middle;opacity: 0.9;background: url(images/backbox.jpeg);background-size: cover;background-repeat: no-repeat;">
  <h2 class="" style="color: white;padding: 20px;    margin-bottom: 0px">Nos services</h2> 
</div>

<div class="container-fluid boxIndex" style="background-color: black;height: 711px;color: white;font-size: large;font-weight: bold;text-align: center;vertical-align: middle;opacity: 0.9;background: url(images/soin-2.jpg);background-size: cover;background-repeat: no-repeat;">

</div>

<div>
  <h3 style="font-size: xx-large;font-family: cursive;color: initial;text-align: center;"> Nos maîtres mots : Indissociables pour un service de qualité!</h3>
  <p style="text-align: center;">Une philosophie pour une harmonie dans nos services, L’eau pour ses nombreuses vertus, des soins sur mesure corps et visage pour être au plus prêt de vos besoins, une équipe de professionnels pour un accompagnement et une écoute sérieuse, et un environnement idéal entièrement pensé pour votre bien être grâce à ses infrastructures et à ses prestations haut de gamme.
  </p>
  <p style="text-align: center;">
    <a href="" class="btn btn-warning">Réservez un Soin </a>
  </p>
</div>

  <!--   
  <div class="container-fluid" style=" background: #333;font-size: 14px;font-family: Helvetica Neue, Helvetica, Arial, sans-serif;color:#000;margin: -10;padding: 0;" >
     
    <div class="swiper-container " >
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="imgbx" style="height: inherit;">
              <a href="#id1"><img src="images/soin3.jpeg" style="width: 100%; height: 100%"></a>
            </div>
            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
               <p>Soins</p>
            </div>  
          </div>
          <div class="swiper-slide">
            <div class="imgbx" style="height: inherit;">
              <a href="#id1"><img src="images/soin2.jpeg" style="width: 100%; height: 100%"></a>
            </div>
            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
               <p>Soins</p>
            </div>  
          </div>
          <div class="swiper-slide">
            <div class="imgbx" style="height: inherit;">
              <a href="#id1"><img src="images/soin.jpg" style="width: 100%; height: 100%"></a>
            </div>
            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
               <p>Soins</p>
            </div>  
          </div>
          <div class="swiper-slide ">
            <div class="imgbx" style="height: inherit; overflow: hidden;">
              <a href="#id2"><img src="img/makeUpService.jpg" style="width: 100%; height: 100%"></a>
            </div>
            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
               <p>Maquillage</p>
            </div>  
          </div>
          <div class="swiper-slide">
            <div class="imgbx" style="height: inherit; overflow: hidden;">
              <a href="#id2"><img src="images/makeupArtist.jpeg" style="width: 100%; height: 100%"></a>
            </div>
            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
               <p>Maquillage</p>
            </div>  
          </div>
          <div class="swiper-slide">
            <div class="imgbx" style="height: inherit; overflow: hidden;">
              <a href="#id2"><img src="images/maqillage.jpg" style="width: 100%; height: 100%"></a>
            </div>
            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
               <p>Maqillage</p>
            </div>  
          </div>
          <div class="swiper-slide">
            <div class="imgbx" style="height: inherit; overflow: hidden;">
              <a href="#id2"><img src="images/massage (2).jpg" style="width: 100%; height: 100%"></a>
            </div>
            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
               <p>Massage</p>
            </div>  
          </div>
          <div class="swiper-slide">
            <div class="imgbx" style="height: inherit; overflow: hidden;">
              <a href="#id2"><img src="images/massage1.png" style="width: 100%; height: 100%"></a>
            </div>
            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
               <p>Massage</p>
            </div>  
          </div>
          <div class="swiper-slide">
            <div class="imgbx" style="height: inherit; overflow: hidden;">
              <a href="#id2"><img src="images/massage.jpg" style="width: 100%; height: 100%"></a>
            </div>
            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
               <p>Massage</p>
            </div>  
          </div>

          
        </div>
        <div class="swiper-pagination"></div>
    </div>

       
  </div> -->

<!-- Initialize Swiper -->
  <!-- <script>
    $(document).ready(function() {
  var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      direction: 'horizontal',
      loop: false,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
    swiper.slideTo(3, false,false);
 });
  </script> -->
<div class="container-fluid " style="background-color: white; margin-top: 10px;margin-bottom: 10px">
      
     <!--  <div id="id1" class="uk-section"style="background-color:#ec971f;padding: 20px;margin-right:-50px;margin-left: -50px; " >
        <div class="uk-container">
          <div class="uk-grid-match uk-child-width-1-1@m " uk-grid>

            <div>             
                <p style="text-transform: uppercase; color: white;font-size: large;font-weight: bold;text-align: center;vertical-align: middle;"> Soin </p>              
            </div>
            
          
          </div>
        </div>
      </div>
 -->
        <div class="uk-child-width-1-2@s uk-grid-match" uk-grid style="margin-top: 10px">

          <div>
              <div class="uk-card-media-left uk-cover-container" >
                <center> <img src="images/hammam-marrakech-spa.jpg" alt="" style=""></center>  
              </div>
          </div> 
          <div>
            <center>
              <div class="uk-card uk-card-hover uk-card-body">
                <p class="uk-card-title" align="center">
                  <strong>Le théâtre de la sensualité orientale invite à faire peau neuve effet de soie sur soi.</strong>
                </p>
                  
                <p >A l’image de l’art de vivre qui depuis des siècles fait la réputation de Marrakech, notre spa recrée les équilibres vertueux de la cité-jardin, dialogue incessant d’ombres, d’eau et de lumière aussi apaisant que revitalisant.</p>
                  <br><br>
                  <div align="center">
                    
                    
                      <a href="#"><button  class="uk-button  uk-button-warning"> <i class="fa fa-calendar-week"></i> Découvrez nos Hammam 
                      </button></a>
                    
                    
                </div>
              </div>
            </center>
          </div>            
        </div>

        <div class="uk-child-width-1-2@s uk-grid-match" uk-grid style="margin-top: 10px">

          <div>
            <center>



              <div class="uk-card uk-card-hover uk-card-body">
                <p class="uk-card-title" align="center">
                  <strong>MASSAGE LES MAINS D’OR.</strong>
                </p>
                  
                <p >Les bienfaits du massage qui apportent le repos et le bien-être sont connus depuis des millénaires.</p>
                  <br><br>
                  <div align="center">
                    
                    
                      <a href="#"><button  class="uk-button  uk-button-warning"> <i class="fa fa-calendar-week"></i> Découvrez nos Massage 
                      </button></a>
                    
                    
                </div>
              </div>
            </center>
          </div>

          <div>
              <div class="uk-card-media-left uk-cover-container" >
                <center> <img src="images/massage-marrakech.jpg" alt="" style=""></center>  
              </div>
          </div>            
        </div>
      



        <div class="uk-child-width-1-2@s uk-grid-match" uk-grid style="margin-top: 10px">

          <div>
              <div class="uk-card-media-left uk-cover-container" >
                <center> <img src="images/soin-bien-etre-marrakech.jpg" alt="" style=""></center>  
              </div>
          </div> 
          <div>
            <center>
              <div class="uk-card uk-card-hover uk-card-body">
                <p class="uk-card-title" align="center">
                  <strong>Le théâtre de la sensualité orientale invite à faire peau neuve effet de soie sur soi.</strong>
                </p>
                  
                <p >Les produits utilisées lors de nos soins sont 100% naturels et écologiques.<br>Nos produits sont puisés dans les ressources naturelles de la terre, pour donner à votre peau un nouvel éclat et votre corps l’énergie vitale nécessaire au quotidien..</p>
                  <br><br>
                  <div align="center">
                    
                    
                      <a href="#"><button  class="uk-button  uk-button-warning"> <i class="fa fa-calendar-week"></i>Découvrez nos Cures
                      </button></a>
                    
                    
                </div>
              </div>
            </center>
          </div>            
        </div>  
        </div>
  @endsection