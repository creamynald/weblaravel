@extends('layouts.main')

@section('container')

    <div class="mt-4">
        <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
            <div class="col-lg-8">
                <h3>{{ $post->title }}</h3>
                <p>Author : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                @if ($post->image)
                <div style="max-height: 350px; overflow:hidden; ">
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
                    </div>
                        @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                    @endif
              <p>{!! $post->body !!} </p>
            </div>
            <div class="col-lg-4">
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Trainer</h5>
                <p><a href="#">Walter White</a></p>
              </div>
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Course Fee</h5>
                <p>$165</p>
              </div>
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Available Seats</h5>
                <p>30</p>
              </div>
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Schedule</h5>
                <p>5.00 pm - 7.00 pm</p>
              </div>
  
            </div>
          </div>
  
        </div>
      </section><!-- End Cource Details Section -->
    </div>

@endsection
