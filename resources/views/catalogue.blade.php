<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Muturis Shop</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        :root{
  /* --background-dark: #2d3548; */
  --text-light: rgba(255,255,255,0.6);
  --text-lighter: rgba(255,255,255,0.9);
  --spacing-s: 8px;
  --spacing-m: 16px;
  --spacing-l: 24px;
  --spacing-xl: 32px;
  --spacing-xxl: 64px;
  --width-container: 1200px;
}

*{
  border: 0;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html{
  height: 100%;
  font-family: 'Montserrat', sans-serif;
  font-size: 14px;
}

body{
  height: 100%;
}

.selector-for-some-widget {
  box-sizing: content-box;
}
.bg-light {
    background-color: EEA47FFF;
}
.hero-section{
  align-items: flex-start;
  background-image: linear-gradient(15deg, #5C5696 0%, #6A679E 150%);
  display: flex;
  min-height: 100%;
  justify-content: center;
  padding: var(--spacing-xxl) var(--spacing-l);
}

.card-grid{
  display: grid;
  grid-template-columns: repeat(1, 1fr);
  grid-column-gap: var(--spacing-l);
  grid-row-gap: var(--spacing-l);
  max-width: var(--width-container);
  width: 100%;
}

@media(min-width: 540px){
  .card-grid{
    grid-template-columns: repeat(2, 1fr); 
  }
}

@media(min-width: 960px){
  .card-grid{
    grid-template-columns: repeat(4, 1fr); 
  }
}

.card{
  list-style: none;
  position: relative;
}

.card:before{
  content: '';
  display: block;
  width: 100%;
}

.card__content{
  left: 0;
  padding: var(--spacing-l);
  position: absolute;
  top: 0;
}

.card__category{
  color: var(--text-light);
  font-size: 0.9rem;
  margin-bottom: var(--spacing-s);
  text-transform: uppercase;
}

.card__heading{
  color: var(--text-lighter);
  font-size: 1.9rem;
  /* text-shadow: 2px 2px 20px rgba(0,0,0,0.2); */
  line-height: 1.4;
  word-spacing: 100vw;

}


.card-img-top {
  height: 300px;
}

/* Cart Styles */
ul.dropdown-cart{
    min-width:250px;
}
ul.dropdown-cart li .item{
    display:block;
    padding:3px 10px;
    margin: 3px 0;
}
ul.dropdown-cart li .item:hover{
    background-color:#f3f3f3;
}
ul.dropdown-cart li .item:after{
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0;
}

ul.dropdown-cart li .item-left{
    float:left;
}
ul.dropdown-cart li .item-left img,
ul.dropdown-cart li .item-left span.item-info{
    float:left;
}
ul.dropdown-cart li .item-left span.item-info{
    margin-left:10px;   
}
ul.dropdown-cart li .item-left span.item-info span{
    display:block;
}
ul.dropdown-cart li .item-right{
    float:right;
}
ul.dropdown-cart li .item-right button{
    margin-top:14px;
}

</style>

</head>
<body>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        {{-- <a class="navbar-brand" href="#">Home</a> --}}
        <a class="navbar-brand" href="#"> Welcome, {{session('name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>




        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"></div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"></div>

      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav navbar-right">
            <li class="nav-item active">
              <a class="nav-link" href="#">🛒 Cart <span class="sr-only">(current)</span></a>
            </li>

            {{-- <ul class="nav navbar-nav navbar-right"> --}}
              <li class="nav-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span> ({{sizeof($myCart)}} Items)<span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-cart" role="menu">
                  @foreach($myCart as $cartItem)
                  <li>
                        <span class="item">
                          <span class="item-left">
                              <img style="width: 40px;" src="{{$cartItem->product->photo}}" alt="" />
                              <span class="item-info">
                                  <span>{{$cartItem->product->name}}</span>
                                  <span>Ksh {{$cartItem->product->price}}</span>
                              </span>
                          </span>
                          <span class="item-right">
                              <button class="btn btn-xs btn-danger pull-right">x</button>
                          </span>
                      </span>
                    </li>
                  @endforeach
                <li class="divider"></li>

                    <li>
                      <button type="button" class="btn btn-success">Checkout</button>
                    </li>
                
                  </ul>
              </li>
            {{-- </ul> --}}
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <li class="nav-item">
              <a class="nav-link" href="/login">📴 Logout</a>
            </li>
        </div>

      </nav>

<section class="hero-section">
  <div class="card-grid">
   
    @foreach($products as $product)
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$product->photo}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">Ksh {{$product->price}}</p>
            
            <div id="quantity-counter-{{$product->id}}" style="display: {{$myCart->contains('product_id', $product->id) ? 'none' : 'block'}}" class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary" onClick="decrementProductQuantity({{$product->id}})">-</button>
                <button id="counter-{{$product->id}}" type="button" class="btn btn-secondary btn-outline">1</button>
                <button type="button" class="btn btn-secondary" onClick="incrementProductQuantity({{$product->id}})">+</button>
              </div>

              <a href="#" id="add-btn-{{$product->id}}" class="btn btn-primary" style="display: {{$myCart->contains('product_id', $product->id) ? 'none' : 'block'}}" onClick="addToCart({{$product->id}})">Add To Cart</a>
              
              <a href="#" id="remove-btn-{{$product->id}}" class="btn btn-danger" style="display: {{$myCart->contains('product_id', $product->id) ? 'block' : 'none'}}" onClick="removeFromCart({{$product->id}})">Remove From Cart</a>
        </div>
      </div>
    @endforeach


    
  <div>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{asset('js/catalogue.js')}}"></script>
</body>
</html>