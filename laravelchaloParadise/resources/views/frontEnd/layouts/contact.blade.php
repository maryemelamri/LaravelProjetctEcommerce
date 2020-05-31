@extends('frontEnd.layouts.master')
@section('title','Contactez-nous')
@section('content')
<div class=" box col-md-8">
      <div >
        <center>
          <h3 style="text-decoration: underline; font-family: sans-serifs;color: #ec971f">CONTACT </h3>
        </center>

        <form action="#" method="post">
          
          <div class="form-group">               
            <input style="border-bottom-color: orange; border-radius:10px;" type="text" placeholder="Votre Nom" class="form-control" name="name" required>              
          </div>

          <div class="form-group">               
            <input style="border-bottom-color: orange; border-radius:10px;" type="text" placeholder="Votre Email" class="form-control" name="email" required>              
          </div>

          <div class="form-group">               
            <input style="border-bottom-color: orange; border-radius:10px;" type="text" placeholder="Votre Telephone" class="form-control" name="tele" required>              
          </div>
          
          <div class="form-group"> 
            <textarea style="border-bottom-color: orange; border-radius:10px;" class="form-control"  rows="5" placeholder="Votre Message" class="form-control" name="msg" required></textarea>              
          </div>

          <div class="text-center">               
            <button type="submit" name="submit" class="btn btn-warning">
              <i class=""></i>Envoyer un message                  
            </button> 
          </div>
        </form>
      </div>
    </div>

  </div>  

  <div   class="row" > 

    <div class="col-md-6 col-sm-6 col-xs-12">
      <h3 class="uk-heading-line uk-text-center"><span> Position </span></h3>
      <div class="mapouter"><div style="width: 635px;"class="gmap_canvas"><iframe width="831" height="367" id="gmap_canvas" src="https://maps.google.com/maps?q=Beauty%20Centre%20Sister&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/">elegant themes</a></div><style>.mapouter{position:relative;text-align:right;height:367px;width:831px;}.gmap_canvas {overflow:hidden;background:none!important;height:367px;width:831px;}</style></div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
      <h3 class="uk-heading-line uk-text-center"><span> Service Client </span></h3>
      <div class="customer_support">
        <div class="container">
          <div class="row">
            <div class="info"><i class="fa fa-hourglass"></i>
              <div class="txt"><span class="txt1">Lun - Ven / 09:00 - 18:00</span> <span class="txt2"> Jours / heures de travail</span></div>
            </div>
          </div><br>
          <div class="row">
            <div class="info"><i style="width: 55px" class=" fa fa-mobile"></i>
              <div style="margin-left: 15px" class="txt"><span class="txt1">05 22 97 65 42</span>  <span class="txt2">Allo Boutika</span></div>
            </div>
          </div><br>
          <div class="row">
            <div class="info"><i class=" fa fa-envelope"></i>
              <div class="txt"><span class="txt1">contact@boutika.ma</span> <span class="txt2">Contactez-nous par e-mail</span></div>
            </div>
          </div><br>
        </div>
      </div>
    </div>
  </div>



@endsection
