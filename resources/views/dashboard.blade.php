<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>SAFRONS</title>
      <link rel="icon" href="{!! asset('img/ipb.png') !!}"/>
      
      <!-- CSS Files-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
      <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet"/>
      <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/jumbotron"/>
      <link href="/css/bootstrap.min.css" rel="stylesheet"/>
      <link rel="stylesheet" href="css/style-dashboard.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

      <!--Script-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
   </head>

   <body>
      <!-- ======= Header ======= -->
      <header>
         <nav>
            <div class= "logo">
            <a href="/"><img src="/img/logoo.png" width = "485" height = "69"/></a>
            </div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
               <i class="fas fa-bars"></i>
            </label> 
            <ul>
               <li><a class="active" href="/">Beranda</a></li>
               <li><a href="/ikuh">Informasi Kandungan Unsur Hara</a></li>
               <li><a href="/glosarium">Glosarium</a></li>
               <li><a href="/login">Masuk</a></li>
            </ul>
         </nav>
      </header>
      <!-- ======= End Header ======= -->
      
      <main>
         <div class= "primary p-5 mb-1">
            <div class="container-fluid pt-5">
               
               <div class="row">
                  <div class="col-lg-8">
                     <h1>SAFRONS</h1>
                     <h2>Smart Agriculture and Fertilizer Recommendation System</h2>
                     <p>Platform khusus yang dikembangkan oleh oleh mahasiswa IPB University untuk mempermudah
                        petani dalam mengetahui informasi kandungan unsur hara lahan dan rekomendasi pemupukan yang tepat agar dapat
                        menghasilkan komoditas tanaman pertanian yang optimal.
                     </p>
                     <a href="lebih-lanjut"><button class="btn btn-primary btn-lg" type="button">Lebih Lanjut</button></a>
                  </div>

                  <div class="col-md-auto">
                     <div class="image"><img class="img" src="img/image.png"></div>
                  </div>
               </div>
            </div>
         </div>

         <div class="secondary px-5">
            <div class="container2">
               <div class="d-grid gap-2">
                  <a href="/ikuh"><button class="btn btn-secondary" type="button">
                     <img class="icon" src="img/icon-ikuh.png">
                     <h1>Informasi Kandungan Unsur Hara<h1>
                     <h2>Klik Untuk Mengetahui Informasi Kandungan Unsur Hara Dengan Tampilan Peta Yang Responsif<h2>
                     </button></a>
               </div>
            </div>
         </div>

         <div class="secondary px-5">
            <div class="container3">
               <h5><strong> Frequently Asked Questions (FAQ)</strong></h5>
               
               <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           <b>Apa Itu SAFRONS?</b>
                        </button>
                     </h2>
                     
                     <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        SAFRONS hadir sebagai solusi bagi petani untuk membantu menyelesaikan permasalahan kesesuaian 
                        lahan dengan menyajikan data unsur hara lahan dan rekomendasi pemupukan yang tepat sesuai dengan 
                        kandungan unsur hara lahan. Pada pengembangangan tahap pertama, aplikasi berfokus pada fitur 
                        penyediaan informasi kandungan unsur hara lahan, yaitu Natrium, Kalium, Fosfor, dan kadar pH 
                        lahan di lokasi tertentu di Jawa Barat.
                        </div>
                     </div>
                  </div>
                  
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           <b> Apa tujuan SAFRONS? </b>
                        </button>
                     </h2>
                     <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        SAFRONS diharapkan dapat membantu petani dalam menentukan kesesuaian 
                        lahan untuk tanaman agar menghasilkan komoditas pertanian yang optimal..
                        </div>
                     </div>
                  </div>
                  
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           <b>Siapa saja yang terlibat dalam pengembangan aplikasi SAFRONS?</b>
                        </button>
                     </h2>
                     
                     <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        SAFRONS tersedia dalam bentuk website dan aplikasi mobile.
                        SAFRONS dikembangkan oleh mahasiswa Ilmu Komputer IPB University, yang datanya dikumpulkan 
                        dan diolah oleh Departemen Manajemen Sumber Daya Lahan IPB University.
                        </div>
                     </div>
                  </div>

                     <div class="accordion-item">
                     <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                           <b>Bagaimana cara memanfaatkan fitur-fitur yang ada di aplikasi SAFRONS?</b>
                        </button>
                     </h2>

                     <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Pengguna harus melakukan pendaftaran akun dan login terlebih dahulu untuk dapat 
                        menikmati fitur yang disediakan. Pengguna yang menggunakan mode tamu dapat menggunakan 
                        aplikasi SAFRONS dengan layanan terbatas.
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
   </body>
   
   <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
      <div class="text-footer"><strong> 2022 SAFRONS,</strong> IPB University</div>
   </footer>
</html>