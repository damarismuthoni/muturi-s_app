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

.hero-section{
  align-items: flex-start;
  background-image: linear-gradient(15deg, #0f4667 0%, #2a6973 150%);
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
    </style>

</head>
<body>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<section class="hero-section">
  <div class="card-grid">
   

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/images/maizeflour.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Maize Flour</h5>
            <p class="card-text">Ksh 195</p>
            
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">-</button>
                <button type="button" class="btn btn-secondary btn-outline">1</button>
                <button type="button" class="btn btn-secondary">+</button>
              </div>'
            <a href="#" class="btn btn-primary">Add To Cart</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/images/cookingoil.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">cookingoil</h5>
            <p class="card-text">Ksh 265</p>
            
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">-</button>
                <button type="button" class="btn btn-secondary btn-outline">1</button>
                <button type="button" class="btn btn-secondary">+</button>
              </div>'
            <a href="#" class="btn btn-primary">Add To Cart</a>
        </div>
    </div>
    
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/images/wheatflour.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Wheat Flour</h5>
            <p class="card-text">Ksh 200</p>
            
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">-</button>
                <button type="button" class="btn btn-secondary btn-outline">1</button>
                <button type="button" class="btn btn-secondary">+</button>
              </div>'
            <a href="#" class="btn btn-primary">Add To Cart</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/images/milk.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">milk</h5>
            <p class="card-text">Ksh 120</p>
            
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">-</button>
                <button type="button" class="btn btn-secondary btn-outline">1</button>
                <button type="button" class="btn btn-secondary">+</button>
              </div>'
            <a href="#" class="btn btn-primary">Add To Cart</a>
        </div>
    </div>
    
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/images/salt.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">salt</h5>
            <p class="card-text">Ksh 30</p>
            
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">-</button>
                <button type="button" class="btn btn-secondary btn-outline">1</button>
                <button type="button" class="btn btn-secondary">+</button>
              </div>'
            <a href="#" class="btn btn-primary">Add To Cart</a>
        </div>
    </div>
    
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/images/sugar.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">sugar</h5>
            <p class="card-text">Ksh 156</p>
            
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">-</button>
                <button type="button" class="btn btn-secondary btn-outline">1</button>
                <button type="button" class="btn btn-secondary">+</button>
              </div>'
            <a href="#" class="btn btn-primary">Add To Cart</a>
        </div>
    </div>
    
  <div>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>