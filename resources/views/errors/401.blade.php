<!DOCTYPE html>
<html lang="en">
<head>

  <title>Farmtuntic | Erreur !</title>
  <link rel="shortcut icon" href="{{ URL::asset('assets\img\logo\Icon.png')}}" title="icon">
  <link href="{{ URL::asset('assets/css/style.css')}}" rel="stylesheet">
  <style>
    .page_404{ padding:40px 0; background:#fff;  }
    .page_404  img { width:100%; }

    .four_zero_four_bg{
 
      background-image: url("/assets/img/dribbble_1.gif");
      height: 400px;
      background-position: center;
    } 
 
    .four_zero_four_bg h1{ font-size:80px; }
    .four_zero_four_bg h3{ font-size:80px; }
    
	.contant_box_404{ margin-top:-50px;}
  .link_404{      
    color: #fff!important;
    padding: 10px 20px;
    background: #39ac31;
    margin: 20px 0;
    display: inline-block;
    font-weight: 500;
  }
  </style>
</head>
<body>
  <center>
  <section class="page_404">
    <div class="container">
      <div class="row">	
      <div class="col-sm-12 ">
      <div class="col-sm-10 col-sm-offset-1  text-center">
      <div class="four_zero_four_bg">
        <h1 class="text-center ">401</h1>    
      </div>      
      <div class="contant_box_404">
      <h3 class="h2">
      Ooops, voila qui n'était pas prévu
      </h3>      
      <p>la page que vous recherchez est non autorisé !</p>   
      <div class="form-group">
        <a href="/">
        <button type="submit" class="link_404 btn-second">
          <img src="{{ asset('assets/img/logo/white-icon.png') }}" alt="btn logo" style="width: 3ch">Retour à la page d'acceuil
        </button>
        </a>
      </div>
    </div>
      </div>
      </div>
      </div>
    </div>
  </section>
  </center>
</body>
</html>



