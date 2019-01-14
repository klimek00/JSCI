<style>
.carousel-inner img {
      width: 100%;
      height: 100%;
  }
</style>

<div id="demo" class="carousel slide w-50 h-50 mx-auto" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/1.jpg" alt="Los Angeles" width="300" height="200">
        <div class="carousel-caption">
        <h3>Los Angeles</h3>
            <p>We had such a great time in LA!</p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="./img/2.jpg" alt="Chicago" width="300" height="200">
    </div>
    <div class="carousel-item">
      <img src="./img/3.jpg" alt="New York" width="300" height="200">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>