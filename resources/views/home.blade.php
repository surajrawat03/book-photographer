@extends('layouts.app')

@section('content')
<!-- Banner Section -->
<section class="banner-section text-left text-white">
    <div class="container-fluid px-5">
        <h1>ONLY THE BEST PHOTOGRAPHERS</h1>
        <p class="h4">Find and book professional photographers</p>
        <a href="#" class="btn btn-primary mt-3"><i class="fas fa-calendar-alt pr-2"></i>Book a Photographer</a>
    </div>
</section>

<section class="photographer-section py-5">
  <div class="">
    <div class="row col-lg-8 my-0 mx-auto">
        <h1 class="connect-photographer">Connecting you to professional photographers around the world.</h1>
        <div class="col-lg-10 my-0 mx-auto">
          <p class="mb-2">We personally hand-pick photographers whose style, experience and expertise provide an excellent match for our clients, regardless of the type of photography required.</p>
          <p class="mb-5">Do you need an event or real estate photographer? A lifestyle or fashion photographer? Maybe you’re looking to hire a photographer to capture a surprise proposal. We have trusted photographer agents in cities around the world.</p>
      </div>
    </div>
  </div>
  <div class="vh-40">
    <div class="row invisible gallery-container col-lg-8 my-0 mx-auto">
      <div class="gallery"><img class="" src="{{asset('images/gallery/galleryImage1.jpg')}}" alt=""></div>
      <div class="gallery"><img class="" src="{{asset('images/gallery/galleryImage2.jpg')}}" alt=""></div>
      <div class="gallery"><img class="" src="{{asset('images/gallery/galleryImage1.jpg')}}" alt=""></div>
      <div class="gallery"><img class="" src="{{asset('images/gallery/galleryImage2.jpg')}}" alt=""></div>
      <div class="gallery"><img class="" src="{{asset('images/gallery/galleryImage1.jpg')}}" alt=""></div>
      <div class="gallery"><img class="" src="{{asset('images/gallery/galleryImage2.jpg')}}" alt=""></div>
      <div class="gallery"><img class="" src="{{asset('images/gallery/galleryImage1.jpg')}}" alt=""></div>
      <div class="gallery"><img class="" src="{{asset('images/gallery/galleryImage2.jpg')}}" alt=""></div>
      <div class="gallery"><img class="" src="{{asset('images/gallery/galleryImage1.jpg')}}" alt=""></div>
      <div class="gallery"><img class="" src="{{asset('images/gallery/galleryImage2.jpg')}}" alt=""></div>
    </div>
  </div>

</section>

<!-- Services Section -->
<section class="services pb-5">
    <h2>Giving you personal access to an experienced photographer</h2>
    <div class="service-cards pb-4">
      <div class="card">
        {{-- <i class="fas fa-camera"></i> --}}
        <i class="fas fa-camera-retro"></i>
        <h3>Quality Assurance</h3>
        <p>Ensures superior photography by skilled professionals for stunning results.</p>
      </div>
      <div class="card">
        {{-- <i class="fas fa-home"></i>--}}
        <i class="fas fa-child"></i>
        <h3>Stress-Free Experience:</h3>
        <p>Comprehensive assistance streamlines the process from start to finish, minimizing hassle and uncertainty.</p>
      </div>
      <div class="card">
        {{-- <i class="fas fa-briefcase"></i> --}}
        <i class="fas fa-brain"></i>
        <h3>Peace of Mind</h3>
        <p>Comprehensive assistance streamlines the process from start to finish, minimizing hassle and uncertainty.</p>
      </div>
    </div>
    <div class="service-cards">
      <div class="card">
        <i class="far fa-comments"></i>
        <h3>Chat before the shoot</h3>
        <p>We put you in direct contact with your photographer so you can have a helpful conversation ahead of the shoot. Discuss ideas, define your vision, and find out how to prepare.</p>
      </div>
      <div class="card">
        {{-- <i class="fas fa-home"></i>--}}
        <i class="far fa-times-circle"></i>
        <h3>No bulk editing</h3>
        <p>On-demand sites often outsource editing and post-production. But when you book with us, your photographer works with you from concept to completion. You get photos that reflect their signature style.</p>
      </div>
      <div class="card">
        <i class="far fa-surprise"></i>
        <h3>No surprises</h3>
        <p>Know who your photographer is ahead of time. We only offer highly talented, pre-vetted, professional photographers. Don’t get caught off-guard by someone with no experience.</p>
      </div>
    </div>
  </section>


  {{-- photographers-call Section --}}
  <section id="photographers-call" class="text-center pb-5">
    <div class="container">
        <h2 class="mb-4">Are you an experienced photographer?</h2>
        <p class="lead mb-4">We are looking for photographers in many different cities worldwide. Our members get access to photography assignments, a closed Facebook group, and more.</p>
        <a href="#join-us" class="btn btn-primary btn-lg text-uppercase">Join Us Today</a>
    </div>
</section>

@endsection

@section('script')
	<script type="module">
    $(document).ready( () => {

      $('.gallery-container').on('init', function(event, slick){
          $(this).removeClass('invisible'); // Show the slider after initialization
      });

			$('.gallery-container').slick({
				slidesToShow: 4,
				slidesToScroll: 1,
				autoplay: true,
			});
		})
	</script>
@endsection
