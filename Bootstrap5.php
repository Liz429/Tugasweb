<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


<link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


  </head>

 <style>
  .bordered {
  border: solid;
}

 .contoh { 
  height: 50px;
 background-color: skyblue;
}
</style>

  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
 <div class="container-fluid">
   
    <a class="navbar-brand" href="#">

<img src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Hacker_inside.jpg" width="50">  

Toko Great Bakery
</a> <buton class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>

</nav>
<div>
 <style>


.banner {

    height: 80vh;
   
 background: url('img/5.jpg');
                
 background-size: cover;
   background-position: center;
}
   .banner-contain {
   height: 100%;
   display: flex;
   align-items: cover;
}
.background
background-color: skyblue;
width: 100%;
</style>
<body>
<!--banner-->
<div class="container-fluid banner">

<div class="container banner-contain col-ig-6">

<div class="my-5 text-center text-white">
<p class="fs-4">Selamat Datang Di Great Bakery</p>
<p class="container col-10 text-white">Setiap gigitan adalah sebuah kenangan manis yang takkan terlupakan.Dapatkan sekarang hanya di toko kami.</p>

<form action="http://google.com">
<button type="submit"class="btn btn-primary">Reservasi</button>
</div>
</div>
</div>
<div class="my-5 container col-10 col-sn-9 col-md-8 col-6">
<h2 class="text center mb-5">Kenapa Harus Belanja di Great Bekery</h2>
<div class="accordion" id="accordionExample">
 

 <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Karena Murah
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Fresh From Oven
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" >
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
 <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       
        Jaminan Uang Kembali
 </button> 
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" >
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
<div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
       
       Ada Cashback 30%
 </button> 
    </h2>
    <div id="collapsefour" class="accordion-collapse collapse" >
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<div class="container-fluid py-5 bg-black text-white">
<div class="container"> 
 <h2 class="text center mb-5">Produk Terbaik Kami
</h2> 

<div id="carouselExampleIndicators" class="carousel slide col-lg-8 offset-lg-2">

<div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/5.jpg" class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block">
        <h5>Produk 1</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/kue.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block"> 
       
<h5>Produk 2</h5> <p>Some representative placeholder content for the first slide.</p>
 </div> 
</div>
    <div class="carousel-item">
     
 <img src="img/6.jpg" class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block"> 
<h5>Produk 3</h5> 
<p>Some representative placeholder content for the first slide.</p> 
</div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
 
 <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"> 
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


</div>
</div>


<!--boostrap image-->
<div class="container-fluid py-5">
<div class="container">
<h2 class="text-center">Produk Terlaris</h2>
<div
 <div class="mt-5 d-block mx-auto"style="width:300px">
<img src="img/bakery.jpg"class="img-fluid img-thumbnail" alt="...">

</div>
</div>
</div>
<!--end of boostrap image-->


<!--blockquote-->
<div class="container-fluid.fy-5 bg-dark-text-light">
<div class="container">
<h2 class="text-center mb-5">Apa Kata Customer Kami</h2>
<div class="col-12 mb-4">
<figure>
  <blockquote class="blockquote">
    <p>Bakery Berkualitas</p>
  </blockquote>
  <figcaption class="blockquote-footer">
cap tain tsubasa
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>
</div>

<div class="col-12 mb-4">
<figure class="text-end">
  <blockquote class="blockquote">
    <p>Bakery Berkualitas</p>
  </blockquote>
  <figcaption class="blockquote-footer">
cap tain tsubasa
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>
</div>

<div class="col-12 mb-4">
<figure>
  <blockquote class="blockquote">
    <p>Bakery Berkualitas</p>
  </blockquote>
  <figcaption class="blockquote-footer">
cap tain tsubasa
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>
</div>
</div>
<div class="col-12 mb-4">
<figure class="text-end">
  <blockquote class="blockquote">
    <p>Bakery Berkualitas</p>
  </blockquote>
  <figcaption class="blockquote-footer">
cap tain tsubasa
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>
</div>
</div>
<!--end of blockquote-->
<!--card-->
 <div class="container-fluid.py-5">
<div class="container">
<h2 class="text-center">Produk Kami</h2>
<div class="col-12">
<div class="row">
<div class="col-lg-3 col-md-4 mb-3">

<div class="list-group">
  <a class="list-group-item d-flex justify-content-between align-items-center ">
Full kue
<span class="badge bg-primary rounded-pill">2</span>
</a>
  <a class="list-group-item d-flex justify-content-between align-items-center ">
roti
<span class="badge bg-primary  rounded-pill">7</span>
</a>
  <a class="list-group-item d-flex justify-content-between align-items-center ">
kue
<span class="badge bg-primary rounded-pill">5</span>
</a>
  <a class="list-group-item d-flex justify-content-between align-items-center ">
bolu
<span class="badge bg-primary rounded-pill">10</span>
</a>
  <a class="list-group-item d-flex justify-content-between align-items-center ">
donat
<span class="badge bg-primary rounded-pill">3</span>
</a> 
</div> 
</div>
<div class="col-lg-9 col-md-8">

 <div class="col-lg-6 col-md-12 d-block mx-outo mt-6" style="width:600px">

<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6">
  <img src="img/rotibuah.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Roti Buah</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button class="btn btn-primary dropdown-toggle"data-bs-toggle="dropdown">Lihat</button>
<ul class="dropdown-menu dropdown-menu-dark">
    <li><a class="dropdown-item" href="#">Lihat Detail</a></li>
<li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Beli</a></li>
    
  </ul>
  </div>
</div> 

<div class="col-lg-4 col-md-6 col-sm-6">
  <img src="img/Pie.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pie</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's contentbalanbdude .</p>
    <a href="#" class="btn btn-primary ">Lihat</a>
  </div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
  <img src="img/cara.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cake</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's contentbalanbdude .</p>
    <a href="#" class="btn btn-primary">Lihat</a>
  </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
  <img src="img/tutor.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Croissant</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's contentbalanbdude .</p>
    <a href="#" class="btn btn-primary">Lihat</a>
  </div>
</div> 
<!--end of card-->
<!--table-->
<div class="container-fluid py-5">
<div class="container">
<h2 class="text-center mb-5">
Customer Beruntung Minggu Ini <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" title="informasi" data-bs-content="Pengundian dilakukan setiap jum'at jam17.00">
  ?
</button>
</h2>


<div class="table-responsive">
<table class="table table-striped table-bordered table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">No.Handphone</th>
      <th scope="col">Tanggal Pembelian</th>
<th scope="col">No.Struk</th>
<th scope="col">No.Undian</th>
<th scope="col">Hadiah</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1.</th>
      <td>Leo</td>
      <td>0831 7079 xxxx</td>
      <td>29 july 2022</td>
      <td>01932211</td>
      <td>021</td>
      <td>1 Cake</td>

    </tr>
    <tr>
      <th scope="row">2.</th>
      <td>Zidni</td>
      <td>0854 3352 xxxx</td>
      <td>15 Mei 2023</td>
       <td>01754442</td>
       <td>045</td>
       <td>1 Cake</td>
    </tr>
    <tr>
      <th scope="row">3.</th>
      <td>Lady</td>
       <td>0899 3762 xxxx</td>
     <td>23 Februari 2023</td>
     <td>01788452</td>
     <td>013</td>
<td>1 Paket Pie</td>




    </tr>
  </body>

   <th scope="row">4.</th>
      <td>Liza</td>
       <td>0899 3762 xxxx</td>
     <td>05 Maret 2023</td>
     <td>01317575</td>
     <td>075</td>
<td>1 Roti Buah</td>




    </tr>
  </body>


   <th scope="row">5.</th>
      <td>Cila</td>
       <td>0899 3762 xxxx</td>
     <td>17 Agustus 2023</td>
     <td>051313370</td>
     <td>059</td>
<td>1 Croissant </td>




    </tr>
  </body>
</table>
</div>


<div class="container-fluid py-5 bg-dark text-white">
<div class="container">
<h2 class="text-center mb-4">Hubungi Kami</h2>

<div class="offset-2 col-8">


<div class="alert alert-success alert-dismissible mb-4" id="myAlert"><i class="bi bi-check2-square"></i>
Formulir Berhasil Dikirim.klik<a href="http://google.com" class="alert-link">di sini</a>untuk melihat
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>











<form>
   <div class="mb-3">
<div class="row">
   <div class="col-6">
     <label for="namadepan">Nama Depan</label>
     <input type="text" id="namadepan" class="form-control" autocomplete="off">
</div>

<div class="col-6">
     <label for="namabelakang">Nama Belakang</label>
     <input type="text" id="namabelakang" class="form-control" autocomplete="off">
</div>


<div class="mb-3">
<label for="username">Username</label>
<div class="input-group">

<input type="text" class="form-control"> <span class="input-group-text">@</span>

<input type="text" class="form-control"> <span class="input-group-text">com</span>

</div>
</div>

<div class="mb-3">
<label for="email" class="form-label">Email</label>
<input type="email" id="email" class="form-control" autocomplete="off">
<label>*email anda tidak akan kami sebar luaskan</label>
</div>

<div class="mb-3">
   <label for="tingkatargensi" class="form-label">Tingkat Urgensi</label>
<select  class="form-select" id="tingkatargensi">
<option value="penting">Penting</option>
<option value="normal">Normal</option>
<option value="tidakpenting">Tidak Penting</option>
</select>
</div>
<div class="mb-3">
<input type="radio" class="form-check-input" id="komplain" name="kategori">
<label for="komplain" class="form-check-label">Komplain</label>
</div>

<div class="mb-3">
<input type="radio" class="form-check-input" id="komplain" name="kategori">
<label for="saran" class="form-check-label">Saran</label>

<div class="mb-3">
<label for="deskripsi" class="form-label">Deskripsi</label>
<textarea id="deskripsi" class="form-control" cols="30" rows="10"></textarea>
   </div>

<div class="mb-3">
<button type="button" onclick="myFunction()" id="btnKirim" onclick ="simpanform" class="btn btn-primary w-100">Kirim</button>
<button type="button" id="btnLoading" class="btn-primary w-100 mt-2" disabled>
<div class="spinner-border spinner-border-sm" role="status">
<span class="visually-hidden">Loading...</span></div> 
</button>
</div> 
</from> 
</div>  
</div>
</div>

<!--end of table-->



<script src="bootstrap-5.0.0-dist/js/bootstrap.bundle.min.js"></script>

  

<!--end of card-->

 <h1>hello,Liza</h1>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<script>
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
 const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))


var myAlert=document.getElementById('myAlert');
myAlert.style.display='none'
function myFunction(){
myAlert.style.display='block'
}
var btnKirim = document.getElementById('btnKirim');
var btnLoading = document.getElement('btnLoading');

btnLoading.style.display = 'none';

function startProses(){
btnKirim.style.display = 'none';
btnLoading.style.display = 'block';
}

function endProses(){
btnLoading.style.display = 'none';
btnKirim.style.display = 'none';
}

function simpanForm(){
startProses();
}

</script>

  </body>
</html>