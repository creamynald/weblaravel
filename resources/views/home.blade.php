@extends('layouts.main')

@section('container')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        </div>
    </section><!-- End Hero -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-2 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Berita & Artikel</p>
          </div>

          <div class="col-lg-2 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p>Galeri Kegiatan</p>
          </div>

          <div class="col-lg-2 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Video Kegiatan</p>
          </div>

          <div class="col-lg-2 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Foto Kegiatan</p>
          </div>

          <div class="col-lg-2 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Informasi Publik</p>
          </div>

          <div class="col-lg-2 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Perizinan</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
            <div class="col-lg-4 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
              <div class="section-title">
                <h2>Topik</h2>
                <p>Populer</p>
              </div>
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5><span data-feather="hash" class="text-warning"></span>Kasmarni - Bagus Santoso</h5>
              </div>
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5><span data-feather="hash" class="text-warning"></span>Karhutla Bengkalis</h5>
              </div>
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5><span data-feather="hash" class="text-warning"></span>Pj Bupati Syahrial Abdi</h5>
              </div>
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5><span data-feather="hash" class="text-warning"></span>Diskominfotik Bengkalis</h5>
              </div>

              <div class="course-info d-flex justify-content-between align-items-center">
                <h5><span data-feather="hash" class="text-warning"></span>Pariwisata Bengkalis</h5>
              </div>
  
              <div class="align-center"></div>
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 order-2 order-lg-1 content">
              <div class="section-title">
                <h2>Kata Sambutan</h2>
                <p>Kepala Dinas</p>
              </div>
              <p class="fst-italic">
                assalamualaikum warahmatullahi wabarakatuh
              </p>
              <p>Pertama dan utama sekali, mari kita panjatkan puji syukur ke hadirat Allah SWT., Tuhan Yang Maha Kuasa, karena berkat cucuran rahmat dan nikmat-Nya, Dinas Komunikasi, Informatika dan Statistik, sebagai salah satu Perangkat Daerah di Pemerintah Kabupaten (Pemkab) Bengkalis, masih bisa dan terus berupaya untuk eksis dalam mendukung terwujudnya visi Kabupaten Bengkalis, yakni:</p>
              <p>“Terwujudnya Kabupaten Bengkalis yang Bermarwah, Maju dan Sejahtera”, khususnya melalui transparansi dan keterbukaan informasi publik“</p>
            </div>
          </div>
  
        </div>
      </section><!-- End About Section -->
  
      <!-- ======= Popular Courses Section ======= -->
      <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>BERITA</h2>
            <p>SEKILAS KEC.BENGKALIS</p>
          </div>
  
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @foreach ($posts->take(3) as $post)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="course-item">
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
                    @else
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
                  @endif
                <div class="course-content">
                  <h3><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h3>
                  <p>{{ $post->excerpt }}</p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                      <span>{{ $post->author->name }}</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      {{ $post->created_at->diffForHumans() }}
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- End Course Item--> 
            @endforeach
            <div class="text-center mt-3">
              <a href="/posts" class="badge bg-danger text-white"><span data-feather="chevrons-right"></span> Berita lainnya</a>
            </div>
          </div>
  
        </div>
      </section><!-- End Popular Courses Section -->
  
      <!-- ======= Trainers Section ======= -->
      <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">
  
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Walter White</h4>
                  <span>Web Development</span>
                  <p>
                    Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                  </p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Sarah Jhinson</h4>
                  <span>Marketing</span>
                  <p>
                    Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                  </p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>William Anderson</h4>
                  <span>Content</span>
                  <p>
                    Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                  </p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Trainers Section -->
@endsection