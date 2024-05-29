<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php include 'menu.php' ?>

  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/oldDhaka.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-light fw-bolder">
          <h5>Old Dhaka</h5>
          <p>Old Dhaka is the historic old city of Dhaka, the capital of Bangladesh.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/sylhet.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-light fw-bolder">
          <h5>Sylhet</h5>
          <p>Sylhet is a metropolitan city,the northeastern region of Bangladesh..</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/chittagong.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-light fw-bolder">
          <h5>Chittagong</h5>
          <p>Chittagong is the second-largest city in Bangladesh,the southeastern coast of Bangladesh</p>
         </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">About us</h2>
      <hr class="w-25 mx-auto">
    </div>
     <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/farmer.jpg" alt="" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12 ">
          <h2 class="dispaly-4">A Beautiful village </h2>
          <p class="py-3">
          Villages are mostly situated far from the hustle and bustle of urban civilization. The beauty of nature can be experienced in a village as 
          it is surrounded by trees, flowers, mountains, streams, and farmlands. There is no pollution in the village and one can feel the freshness in the breeze.
          </p>
          <a href="about.php" class="btn btn-outline-success">Check More</a>
        </div>
      </div>
    </div>
  </section>


  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Our Services</h2>
      <hr class="w-25 mx-auto">
    </div>
 <div class="container-fluid">
      <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img src="images/nature.jpg" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">Old Dhaka</h5>
              <p class="card-text">
              Lively Old Dhaka is known for historic buildings like the Mughal-era Lalbagh Fort, set amid green lawns, and Dhakeshwari Mandir, a 12th-century Hindu temple. Period furnishings are on display at the Ahsan Manzil Museum, a vast palace with a pink facade. Street vendors sell breads and sweets, while Shankhari Bazar is a popular spot to find bangles, spices, and textiles. 
              River boat trips depart from the Sadarghat area.
              </p>
              <a href="#" class="btn btn-outline-dark">Find place</a>
            </div>
          </div>
       </div>

       <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img src="images/nature.jpg" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Chittagong</h5>
              <p class="card-text">
              Chittagong is large port city on the southeastern coast of Bangladesh. The Ethnological Museum has exhibits about the many different ethnic tribes across the country. Zia Memorial Museum, inside the former Old Circuit House, displays items belonging to former president Ziaur Rahman, 
              who was assassinated on the site in 1981. The landmark Chandanpura Mosque has many onion-shaped domes and brightly painted minarets
              </p>
              <a href="#" class="btn btn-outline-dark">Find  place</a>
            </div>
          </div>
       </div>

       <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img src="images/nature.jpg" class=" card-img-top" >
            <div class="card-body">
              <h5 class="card-title">Sylhet</h5>
              <p class="card-text">
              Sylhet is one of the most economically important cities in Bangladesh after Dhaka and Chittagong.[6] Sylhet is a major commercial and financial center, and it is home to several multinational companies and industries, including the tea industry,
               which generates a significant amount of revenue for the city. The city has a diverse population, with Bengalis, Tripuris, and other ethnic groups living together. The official language of Sylhet is Bengali.
              </p>
              <a href="#" class="btn btn-outline-dark">Find place</a>
            </div>
          </div>
       </div>
     </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Our Gallery</h2>
      <hr class="w-25 mx-auto">
    </div>
</section><div class="container-fluid ">
       <div class="row g-3">
        <div class="col-lg-4 col-md-4 col-12 ">
           <img src="images/village1.jpg" class="img-fluid" pb-3>
        </div>   
         <div class="col-lg-4 col-md-4 col-12 ">
           <img src="images/village2.jpg" class="img-fluid" pb-3>
        </div>   
        <div class="col-lg-4 col-md-4 col-12 ">
           <img src="images/village3.jpg" class="img-fluid" pb-3>
        </div>
           <div class="col-lg-4 col-md-4 col-12 ">
           <img src="images/village4.jpg" class="img-fluid" pb-3>
        </div>
        <div class="col-lg-4 col-md-4 col-12 ">
           <img src="images/village10.jpg" class="img-fluid" pb-3>
        </div>
           <div class="col-lg-4 col-md-4 col-12 ">
           <img src="images/village6.jpg" class="img-fluid" pb-3>
        </div>
          <div class="col-lg-4 col-md-4 col-12 ">
           <img src="images/village7.jpg" class="img-fluid" pb-3>
        </div>
        <div class="col-lg-4 col-md-4 col-12 ">
           <img src="images/village8.jpg" class="img-fluid" pb-3>
        </div>
        <div class="col-lg-4 col-md-4 col-12 ">
           <img src="images/village9.jpg" class="img-fluid" pb-3>
        </div>
        </div>
    </div>

</section>


<section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Our Form</h2>
      <hr class="w-25 mx-auto">
    </div>
  <div class="w-50 mx-auto">
    <form action="userinfo.php" method="post">
   
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email Id</label>
    <input type="text" name="email" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mobile</label>
    <input type="text" name="mobile" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Comments</label>
  <textarea class="form-control" name="comments" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-outline-success">Submit</button>
</form>
  </div>
</section>

<footer>
    <h3 class="p-3 bg-dark text-white text-center"> Copyright &#169; All rights reserved-2024 </h3>
</footer>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
</body>

</html>