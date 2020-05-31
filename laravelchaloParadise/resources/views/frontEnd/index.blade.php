@extends('frontEnd.layouts.master')
@section('title','Home Page')
@section('content')
    <section>
        <div class="container-fluid">
            <div class="row">
                
                
                <div>
                  <!-- <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 7:3; animation: push">

                  <ul class="uk-slideshow-items">
                      <li>
                          <img src="{{asset('images/slideE.jpg')}}" alt="" uk-cover>
                      </li>
                      <li>
                          <img src="{{asset('images/slideC.jpg')}}" alt="" uk-cover>
                      </li>
                      <li>
                          <img src="{{asset('images/slideD.jpg')}}" alt="" uk-cover>
                      </li>
                  </ul>

                  <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                  <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                </div> -->
                  <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 9:3;animation: push">

                    <ul class="uk-slideshow-items">
                      <li>
                        <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                          <img src="{{asset('images/banniere-1.png')}}" alt="" uk-cover>
                        </div>
                      </li>
                      <li>
                        <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-bottom-left">
                          <img src="{{asset('images/a3.Jpeg')}}" alt="" uk-cover>
                        </div>
                      </li>
                      <li>
                        <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                          <img src="{{asset('images/22222.jpg')}}" alt="" uk-cover>
                        </div>
                      </li>
                      <li>
                        <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-top-right">
                          <img src="{{asset('images/1111.jpg')}}" alt="" uk-cover>
                        </div>
                      </li>
                      <li>
                        <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-bottom-left">
                          <img src="{{asset('images/222.jpg')}}" alt="" uk-cover>
                        </div>
                      </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                  </div>
                   <!-- <div class="features_items">
                         <h2 class="title text-center">Features Items</h2>
                        @foreach($products as $product)
                            @if($product->category->status==1)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="{{url('/product-detail',$product->id)}}"><img src="{{url('products/small/',$product->image)}}" alt="" /></a>
                                            <h2>$ {{$product->price}}</h2>
                                            <p>{{$product->p_name}}</p>
                                            <a href="{{url('/product-detail',$product->id)}}" class="btn btn-default add-to-cart">View Product</a>
                                        </div>
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div> -->
                </div>
            </div>
        


            
                <!-- Nos Nouveauté -->
            <div class="row">
              <h3 style ="margin-top: 30px;"class="uk-heading-line uk-text-center"><span> Nos Nouveauté </span></h3>
              <div class="container-fluid" style="margin-bottom:25px;border:solid 1px #ec971f; border-top: 0px;margin-left: 16px;">   
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider  >
                    
                  <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid" >
                    @foreach($products as $product)
                       
                    <li class="article" style="margin-bottom: 10px;">

                        <div class="single-products">
                            <div class="productinfo text-center">

                                <a href="{{url('/product-detail',$product->id)}}"><img  src="{{url('products/small/',$product->image)}}" alt="" /> <p><img src="{{asset('frontEnd/images/product-details/new.jpg')}}" class="newarrival" alt="" /></p></a>

                                <p style="FONT-WEIGHT: 900;FONT-SIZE: 17px;">{{$product->p_name}}</p>
                                <p>
                                 
                                  <span style="font-size: 1.7em;margin-left: 22px;color:orange;font-weight: 600;">{{$product->price}} DH</span>
                                </p>
                                

                                <a style="color:black" href="{{url('/product-detail',$product->id)}}" class="btn btn-default add-to-cart">Détail de Produit </a>
                            </div>
                        </div>
                        
                    </li>
                    
                @endforeach
                </ul>
                 
                  <a class="uk-position-center-left uk-position-small " href="#" uk-slidenav-previous uk-slider-item="previous" style="margin-left: 0px;background-color: #ec971f"></a>
                  <a class="uk-position-center-right uk-position-small " href="#" uk-slidenav-next uk-slider-item="next" style=" margin-right: 0px; background-color: #ec971f"></a>
                </div>
              </div>  
            </div>
                    <!-- Nos promotions -->
            <div class="row">
              <h3 style ="margin-top: 30px;"class="uk-heading-line uk-text-center"><span> Nos promotions </span></h3>
              <div class="container-fluid" style="margin-bottom:25px;border:solid 1px #ec971f; border-top: 0px;margin-left: 16px;">   
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider  >
                    
                  <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid" >
                    @foreach($products as $product)
                        @if($product->price>32)
                    <li class="article" style="margin-bottom: 10px;">

                        <div class="single-products">
                            <div class="productinfo text-center">

                                <a href="{{url('/product-detail',$product->id)}}"><img  src="{{url('products/small/',$product->image)}}" alt="" /> <p><img style="position: absolute;top: 0;right: 0;" src="{{asset('frontEnd/images/home/sale.png')}}"  alt="" /></p></a>

                                <p style="FONT-WEIGHT: 900;FONT-SIZE: 17px;">{{$product->p_name}}</p>
                                <p>
                                 <span style="text-decoration: line-through;;color: #888888 ">{{$product->price+10}} DH</span>
                                  <span style="font-size: 1.7em;margin-left: 22px;color:orange;font-weight: 600;">{{$product->price}} DH</span>
                                </p>
                                

                                <a style="color:black" href="{{url('/product-detail',$product->id)}}" class="btn btn-default add-to-cart">Détail de Produit </a>
                            </div>
                        </div>
                        
                    </li>
                    @endif
                @endforeach
                </ul>
                 
                  <a class="uk-position-center-left uk-position-small " href="#" uk-slidenav-previous uk-slider-item="previous" style="margin-left: 0px;background-color: #ec971f"></a>
                  <a class="uk-position-center-right uk-position-small " href="#" uk-slidenav-next uk-slider-item="next" style=" margin-right: 0px; background-color: #ec971f"></a>
                </div>
              </div>  
            </div>
            
            
            <!-- CATEGORIES -->
            <div class="row">
                <h3 class="uk-heading-line uk-text-center"><span> Categories </span></h3>
                <div class="  uk-child-width-1-4@m uk-child-width-1-2@s " uk-grid style="margin-left:30px;margin-bottom: 10px">
                    <div class="">
                      <center>  
                       <div class="carduk uk-inline ">
                            <a href="http://localhost:8000/cat/25"><img src="images/visageA.jpg" alt=""></a>
                            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
                                <p>Beauté du Visage</p>
                            </div>
                        </div>
                      </center>
                    </div>  

                    <div class="">
                      <center>  
                       <div class="carduk uk-inline">
                            <a href="http://localhost:8000/cat/32"><img src="images/corps.jpg" alt=""></a>
                            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
                                <p>Beauté du corps</p>
                            </div>
                        </div>  
                      </center> 
                    </div >  
                    <div class="">
                      <center>  
                       <div class="carduk uk-inline">
                            <a href="http://localhost:8000/cat/29"><img src="images/huileA.jpg" alt=""></a>
                            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
                                <p>Huiles alimentaire</p>
                            </div>  
                        </div>
                        </center>
                    </div>  
                    <div class="">
                      <center>  
                       <div class="carduk uk-inline">
                            <a href="http://localhost:8000/cat/27"><img src="images/cheveaux (1).jpg" alt=""></a>
                            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
                                <p>beaute de cheveaux</p>
                            </div>  
                        </div>
                      </center>
                    </div>  

                    <div class="">
                      <center>  
                       <div class="carduk uk-inline">
                            <a href="http://localhost:8000/cat/31"><img src="images/food.jpg" alt=""></a>
                            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
                                <p>Super food</p>
                            </div>
                        </div> 
                      </center> 
                    </div>  


                    <div class="">
                      <center>  
                       <div class="carduk uk-inline">
                            <a href="http://localhost:8000/cat/30"><img src="images/bijou.jpg" alt=""></a>
                            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
                                <p>Les accessoires</p>
                            </div>
                        </div> 
                      </center> 
                    </div>  

                    <div class="">
                      <center>  
                       <div class="carduk uk-inline">
                            <a href="http://localhost:8000/cat/28"><img src="images/makeup.jpg" alt=""></a>
                            <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
                                <p>Make up</p>
                            </div>
                        </div> 
                      </center> 
                    </div >  
                    <div style="margin-bottom: 0px;margin-right: -20px">
                        <center>  
                            <div class="carduk uk-inline">
                                <a href="#"><img src="images/visageA.jpg" alt=""></a>
                                <div style="font-size: medium;padding: 7px 30px;background: rgba(236, 151, 31, 0.76);color:rgba(255,255,255);"  class="uk-overlay uk-overlay-primary uk-position-bottom">
                                    <p>Beauté du Visage</p>
                                </div>
                            </div>
                        </center>  
                    </div>
                </div>    
            </div>

            <!-- SERVICES -->
            <div class="row">
                <h3 class="uk-heading-line uk-text-center"><span> Nos Services </span></h3>
                <div class="  uk-child-width-1-4@m uk-child-width-1-2@s " uk-grid style="margin-right: 30px; margin-bottom: 10px">
                  
                    <div class="card-flip" >
                      <center>  
                        <div class=" uk-inline card-flip " >
                          <div class="card-front">
                            <a href="#"><img src="images/soin.jpg" alt="" style="border-radius: 30px;width: 100%"></a>
                            <div style=""  class="uk-overlay uk-overlay-primary uk-position-bottom In_Service_Text">
                              <p>Massage</p>
                            </div>
                          </div> 
                          <div class="card-back" style=" color : white; width: 100%">
                           <p style="margin-top: 80px">Découvrez les meilleure adresse de massage sélectionnées à Marrakech. Le temps s’arrête, bye bye maux de dos, stress et noeuds musculaires, place à la relaxation !</p>
                          </div>
                        </div>  
                      </center>
                    </div>

                    <div class="card-flip" >
                      <center>  
                        <div class=" uk-inline card-flip " >
                          <div class="card-front">
                            <a href="#"><img src="images/spa.jpg" alt="" style="border-radius: 30px;width: 100%"></a>
                            <div style=""  class="uk-overlay uk-overlay-primary uk-position-bottom In_Service_Text">
                              <p>SPA</p>
                            </div>
                          </div>     
                          <div class="card-back" style="width: 100%">
                            <p style="margin-top: 80px">Votre escapade spa est une invitation à suspendre le cours du temps et à vous ressourcer pour un moment de relaxation intense. </p>
                          </div>
                        </div>  
                      </center>
                    </div>

                    <div class="card-flip" >
                      <center>  
                         <div class=" uk-inline card-flip " >
                          <div class="card-front">
                            <a href="#"><img src="images/soin-2.jpg" alt="" style="border-radius: 30px;width: 100%"></a>
                            <div style=""  class="uk-overlay uk-overlay-primary uk-position-bottom In_Service_Text">
                              <p>Soins</p>
                            </div>
                          </div>
                          <div class="card-back"  style="width: 100% ">
                            <p style="margin-top: 80px;">Accordez-vous toujours un moment pour prendre soin de vous. Chalo paradise  et un spas vous offrent de de produits pour vous faire vivre des expériences bien-être inédites ! Hammam, soins du visage, massages…</p>
                          </div>
                        </div>
                      </center>
                    </div>

                  
                    <div class="card-flip" >
                        <center>
                            <div class=" uk-inline card-flip " >
                                <div class="card-front">
                                  <a href="#"><img src="images/esthetique.jpg" alt="" style="border-radius: 30px;width: 100%"></a>
                                  <div style=""  class="uk-overlay uk-overlay-primary uk-position-bottom In_Service_Text">
                                    <p>Coifure et Esthetique</p>
                                  </div>
                                </div>
                                
                                <div class="card-back" style="width: 100%">
                                  <p style="margin-top: 80px">Accordez-vous un moment pour vous refaire une beauté à Chalo Paradise. Une escapade dans notre Salon vous permettra de mettre en valeur votre image et votre personnalité.</p>
                                </div>
                            </div>
                        </center>
                    </div>    
                </div>
            </div>  
     <!-- service client -->     
            <div class="row">
                <h3 class="uk-heading-line uk-text-center"><span> service client </span></h3>
                <div class="customer_support">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-lg-4" style="margin-bottom: 40px;margin-top: 20px">         
                                <div class="info">
                                    <table width="100%"> 
                                        <tr>  
                                            <td align="right"><img style=" float: left;margin: 0 19px 0 0;" src="{{asset('images/hourglass.png')}}" alt="">  </td>
                                            <td> 
                                                <div class="txt">
                                                  <span class="txt1">Lun - Ven / 09:00 - 18:00</span> <span class="txt2"> Jours / heures de travail</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-4 " style="margin-bottom: 40px;margin-top: 20px">
                                <div class="info" style="padding: 5px">
                                    <table width="100%"> 
                                        <tr>  
                                            <td align="right"><i style="font-size: 120px" class="fa fa-mobile"></i>  </td>
                                            <td> 
                                                <div class="txt">
                                                    <span class="txt1">05 22 97 65 42</span> <span class="txt2"> Allo Boutika</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-4" style="margin-bottom: 40px;margin-top:20px">
                                <div class="info">
                                    <table width="100%"> 
                                        <tr>  
                                            <td align="right"><i style="font-size: 80px" class="fa fa-envelope"></i>  </td>
                                            <td> 
                                                <div class="txt">
                                                    <span class="txt1">contact@chaloparadise.ma</span> <span class="txt2"> Contactez-nous par e-mail</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </section>
@endsection
