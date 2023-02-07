<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Muturis Shop</title>

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
  padding-bottom: 150%;
  width: 100%;
}

.card__background{
  background-size: cover;
  background-position: center;
  border-radius: var(--spacing-l);
  bottom: 0;
  filter: brightness(0.75) saturate(1.2) contrast(0.85);
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  transform-origin: center;
  trsnsform: scale(1) translateZ(0);
  transition: 
    filter 200ms linear,
    transform 200ms linear;
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
    <a class="card" href="#">
      <div class="card__background" style="background-image:  url('/images/cookingoil.jpg')" ></div>
      <div class="card__content">
        <h3 class="card__heading">Cooking oil</h3>
      </div>
    
    </a>
    <a class="card" href="#">
        <div class="card__background" style="background-image:  url('/images/maizeflour.jpg')" ></div>
        <div class="card__content">
          <h3 class="card__heading">Maize Flour</h3>
        </div>
      
      </a>

      <a class="card" href="#">
        <div class="card__background" style="background-image:  url('/images/wheatflour.jpg')" ></div>
        <div class="card__content">
          <h3 class="card__heading">Wheat Flour</h3>
        </div>
      
      </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url('/images/milk.jpg')"></div>
      <div class="card__content">
       <h3 class="card__heading">Milk</h3>
      </div>
    </a>
    <a class="card" href="#">
        <div class="card__background" style="background-image: url('/images/salt.jpg')"></div>
        <div class="card__content">
         <h3 class="card__heading">Salt</h3>
        </div>
      </a>

      <a class="card" href="#">
        <div class="card__background" style="background-image:  url('/images/sugar.jpg')" ></div>
        <div class="card__content">
          <h3 class="card__heading">Sugar</h3>
        </div>
      
      </a>
  <div>
</section>
</body>
</html>