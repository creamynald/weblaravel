@extends('layouts.main')

@section('container')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">
    <h2>{{ $title }}</h2>
    <p>Semua Post</p>
  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Courses Section ======= -->
<section id="courses" class="courses">
  @if ($posts->count())
  <div class="container" data-aos="fade-up">

    <div class="row" data-aos="zoom-in" data-aos-delay="100">
      @foreach ($posts as $post)
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-3">
        <div class="course-item">
          @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt=".{{ $post->category->name }}">
          @else
            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
          @endif
          <div class="course-content">

            <h3><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h3>
            <p>{{ $post->excerpt }}</p>
            <div class="trainer d-flex justify-content-between align-items-center">
              <div class="trainer-profile d-flex align-items-center">
                <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                <span><a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a></span>
              </div>
              <div class="trainer-rank d-flex align-items-center">
                {{ $post->created_at->diffForHumans() }}
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
  @else
  <p class="text-center fs-4">No post found.</p>
  @endif
</section><!-- End Courses Section -->

<div class="d-flex justify-content-center">
  {{ $posts->links() }}
</div>

@endsection