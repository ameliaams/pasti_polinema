@extends('layouts.main')

@section('title', 'Program Kerja')


  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('guest/img/logo pasti.jpg') }}" alt="" />
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
        <li><a href="/">Beranda</a></li>
          <li><a href="/tentang" >Tentang</a></li>
          <li><a href="/proker" class="active">Program Kerja</a></li>
          <li><a href="/struktur">Struktur Organisasi</a></li>
          <li><a href="/kontak" >Kontak</a></li>
          <li><a class="get-a-quote" href="/login">Masuk</a></li>
        </ul>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

@section('breadcrumbs')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('guest/img/page-header.jpg')">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Program Kerja</h2>
          <p>Program Kerja dan kegiatan UKM PASTI POLINEMA</p>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="index.html">Beranda</a></li>
        <li>Program Kerja</li>
      </ol>
    </div>
  </nav>
</div>
<!-- End Breadcrumbs -->

@section('content')
<!-- ======= BIDANG 1 ======= -->
<section id="service" class="services pt-0">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <span>BIDANG 1</span>
      <h2>BIDANG 1</h2>
    </div>
    <div class="content order-last order-lg-first">
      <p style="text-align: justify">
        <strong>Bidang 1 (Internal)</strong> adalah salah satu bidang di UKM PASTI POLINEMA yang bertugas dalam mendayagunakan dan memaksimalkan potensi yang dimiliki oleh UKM PASTI POLINEMA, baik individualnya maupun di berbagai
        kelengkapan organisasi lainnya.
      </p>
    </div>
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card">
          <div class="card-img">
            <img src="assets/img/logo pasti.jpg" alt="" class="img-fluid" />
          </div>
          <h3><a href="#" class="stretched-link">Malam Keakraban</a></h3>
          <p>Cumque eos in qui numquam. Aut aspernatur perferendis sed atque quia voluptas quisquam repellendus temporibus itaqueofficiis odit</p>
        </div>
      </div>
      <!-- End Card Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="card">
          <div class="card-img">
            <img src="assets/img/logo pasti.jpg" alt="" class="img-fluid" />
          </div>
          <h3><a href="#" class="stretched-link">Pelepasan Alumni</a></h3>
          <p>Asperiores provident dolor accusamus pariatur dolore nam id audantium ut et iure incidunt molestiae dolor ipsam ducimus occaecati nisi</p>
        </div>
      </div>
      <!-- End Card Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="card">
          <div class="card-img">
            <img src="assets/img/logo pasti.jpg" alt="" class="img-fluid" />
          </div>
          <h3><a href="#" class="stretched-link">Dies Natalis</a></h3>
          <p>Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit doloremque oluptatem aut et molestiae ut et nihil</p>
        </div>
      </div>
      <!-- End Card Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="card">
          <div class="card-img">
            <img src="assets/img/logo pasti.jpg" alt="" class="img-fluid" />
          </div>
          <h3><a href="#" class="stretched-link">Musyawarah Kerja</a></h3>
          <p>Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit doloremque oluptatem aut et molestiae ut et nihil</p>
        </div>
      </div>
      <!-- End Card Item -->
    </div>
  </div>
</section>
<!-- End BIDANG 1 -->

<!-- ======= BIDANG 2 ======= -->
<section id="service" class="services pt-0">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <span>BIDANG 2</span>
      <h2>BIDANG 2</h2>
    </div>
    <div class="content order-last order-lg-first">
      <p style="text-align: justify">
        <strong>Bidang 2 (Pencegahan)</strong> adalah salah satu bidang di UKM PASTI POLINEMA yang melaksanakan fungsi Pencegahan, Pemberantasan, Penyalahgunaan, dan Peredaran Gelap Narkoba (P4GN) khususnya di civitas akademika
        POLINEMA dan masyarakat pada umumnya.
      </p>
    </div>
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card">
          <div class="card-img">
            <img src="assets/img/logo pasti.jpg" alt="" class="img-fluid" />
          </div>
          <h3><a href="#" class="stretched-link">Tes Urine</a></h3>
          <p>Cumque eos in qui numquam. Aut aspernatur perferendis sed atque quia voluptas quisquam repellendus temporibus itaqueofficiis odit</p>
        </div>
      </div>
      <!-- End Card Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="card">
          <div class="card-img">
            <img src="assets/img/logo pasti.jpg" alt="" class="img-fluid" />
          </div>
          <h3><a href="#" class="stretched-link">Penyuluhan</a></h3>
          <p>Asperiores provident dolor accusamus pariatur dolore nam id audantium ut et iure incidunt molestiae dolor ipsam ducimus occaecati nisi</p>
        </div>
      </div>
      <!-- End Card Item -->
    </div>
  </div>
</section>
<!-- End BIDANG 2 -->

<!-- ======= BIDANG 3 ======= -->
<section id="service" class="services pt-0">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <span>BIDANG 3</span>
      <h2>BIDANG 3</h2>
    </div>
    <div class="content order-last order-lg-first">
      <p style="text-align: justify">
        <strong>Bidang 3 (Hubungan Masyarakat)</strong> adalah salah satu bidang di UKM PASTI POLINEMA yang bergerak dalam hubungan masyarakat untuk menjalin hubungan di lingkup internal dan eksternal Politeknik Negeri Malang utamanya
        BNN, organisasi sejenis, dan seluruh elemen yang bergerak di ranah kerja yang sama khususnya Kota Malang.
      </p>
    </div>
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card">
          <div class="card-img">
            <img src="assets/img/logo pasti.jpg" alt="" class="img-fluid" />
          </div>
          <h3><a href="#" class="stretched-link">Expo Kelembagaan</a></h3>
          <p>Cumque eos in qui numquam. Aut aspernatur perferendis sed atque quia voluptas quisquam repellendus temporibus itaqueofficiis odit</p>
        </div>
      </div>
      <!-- End Card Item -->
    </div>
  </div>
</section>
<!-- End BIDANG 3-->

<!-- ======= BIDANG 4 ======= -->
<section id="service" class="services pt-0">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <span>BIDANG 4</span>
      <h2>BIDANG 4</h2>
    </div>
    <div class="content order-last order-lg-first">
      <p style="text-align: justify">
        <strong>Bidang 4 (Terapi dan Rehabilitasi)</strong> adalah salah satu bidang di UKM PASTI POLINEMA yang memfokuskan kegiatannya terhadap pengembangan pengetahuan tentang proses terapi dan rehabilitasi.
      </p>
    </div>
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card">
          <div class="card-img">
            <img src="assets/img/logo pasti.jpg" alt="" class="img-fluid" />
          </div>
          <h3><a href="#" class="stretched-link">Peringatan HANI</a></h3>
          <p>Cumque eos in qui numquam. Aut aspernatur perferendis sed atque quia voluptas quisquam repellendus temporibus itaqueofficiis odit</p>
        </div>
      </div>
      <!-- End Card Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="card">
          <div class="card-img">
            <img src="assets/img/logo pasti.jpg" alt="" class="img-fluid" />
          </div>
          <h3><a href="#" class="stretched-link">Peringatan AIDS Sedunia</a></h3>
          <p>Asperiores provident dolor accusamus pariatur dolore nam id audantium ut et iure incidunt molestiae dolor ipsam ducimus occaecati nisi</p>
        </div>
      </div>
      <!-- End Card Item -->
    </div>
  </div>
</section>
<!-- End BIDANG 4 -->

<!-- ======= BIDANG 5 ======= -->
<section id="service" class="services pt-0">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <span>BIDANG 5</span>
      <h2>BIDANG 5</h2>
    </div>
    <div class="content order-last order-lg-first">
      <p style="text-align: justify">
        <strong>Bidang 5 (Penelitian dan Pengembangan)</strong> adalah salah satu bidang di UKM PASTI POLINEMA yang bergerak dalam pengembangan sumber daya manusia dan bertugas mencetak seluruh fungsionaris yang berkualitas.
      </p>
    </div>
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card">
          <div class="card-img">
            <img src="assets/img/logo pasti.jpg" alt="" class="img-fluid" />
          </div>
          <h3><a href="#" class="stretched-link">Malam Keakraban</a></h3>
          <p>Cumque eos in qui numquam. Aut aspernatur perferendis sed atque quia voluptas quisquam repellendus temporibus itaqueofficiis odit</p>
        </div>
      </div>
      <!-- End Card Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="card">
          <div class="card-img">
            <img src="assets/img/logo pasti.jpg" alt="" class="img-fluid" />
          </div>
          <h3><a href="#" class="stretched-link">Open Recruitment</a></h3>
          <p>Asperiores provident dolor accusamus pariatur dolore nam id audantium ut et iure incidunt molestiae dolor ipsam ducimus occaecati nisi</p>
        </div>
      </div>
      <!-- End Card Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="card">
          <div class="card-img">
            <img src="assets/img/logo pasti.jpg" alt="" class="img-fluid" />
          </div>
          <h3><a href="#" class="stretched-link">Upgrading</a></h3>
          <p>Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit doloremque oluptatem aut et molestiae ut et nihil</p>
        </div>
      </div>
      <!-- End Card Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="card">
          <div class="card-img">
            <img src="assets/img/logo pasti.jpg" alt="" class="img-fluid" />
          </div>
          <h3><a href="#" class="stretched-link">Penempuhan NIA</a></h3>
          <p>Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit doloremque oluptatem aut et molestiae ut et nihil</p>
        </div>
      </div>
      <!-- End Card Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="card">
          <div class="card-img">
            <img src="assets/img/logo pasti.jpg" alt="" class="img-fluid" />
          </div>
          <h3><a href="#" class="stretched-link">Pelatihan Dasar</a></h3>
          <p>Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit doloremque oluptatem aut et molestiae ut et nihil</p>
        </div>
      </div>
      <!-- End Card Item -->
    </div>
  </div>
</section>
<!-- End BIDANG 5 -->
@endsection