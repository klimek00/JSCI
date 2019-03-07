<style>
.carousel-inner img {
      width: 100%;
      height: 100%;
  }
</style>

<div id="demo" class="carousel slide w-50 h-50 mx-auto" data-ride="carousel" style="margin-top: 100px;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/1.jpg" alt="Los Angeles" width="300" height="200">
        <div class="carousel-caption text-danger">
        <h3 class="display-4 bg-light">NAUKOWCY ZADZIWIENI</h3>
            <h3 class="bg-light">Preparat na odchudzanie rowniez odmladza!</h3>
        </div>
    </div>
    <div class="carousel-item">
      <img src="./img/2.jpg" alt="Chicago" width="300" height="200">
        <div class="carousel-caption text-danger">
        <h3 class="display-4 bg-light">PARAPET OCIEPLAJĄCY</h3>
            <h3 class="bg-light">Dzieki niemu mozesz sie opierac i nie zmarznac!</h3>
        </div>
    </div>
    <div class="carousel-item">
      <img src="./img/3.jpg" alt="New York" width="300" height="200">
        <div class="carousel-caption text-danger">
        <h3 class="display-4 bg-light">KOMPUTER ZA 2 TYSIACE</h3>
            <h3 class="bg-light">intel core i5! dwa giga ramu! system windows! pamięc jeden tera! karta graficzna radeon!</h3>
        </div>
    </div>
  </div>

  <!-- move left/right-->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
