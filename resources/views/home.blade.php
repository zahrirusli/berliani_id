@extends('layouts.app')

@section('breadcrumb')
<!-- <div class="bg-gray-200 p-3 rounded text-sm mb-5">
    <ol class="list-reset flex text-gray-700">
       <li> <span class="">{{ __('avored.home') }}</span></li>
    </ol>
</div> -->
@endsection

@section('content')
  <div class="overlay hero-wrap js-fullheight js-fullweight col-md-12 col-sm-12">
    <div class="overlay"></div>
    <div class="container">
    @if (session('type') === 'success')
        @include('components.success', ['message' => session('message')])
      @endif
      @if (session('type') === 'error')
        @include('components.error', ['message' => session('message')])
      @endif

      @if ($page)
        {!! $page->getContent() !!}
      @endif
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
        	<h3 class="v">Berliani - Time to get dress</h3>
        	<h3 class="vr">Since - 2021</h3>
          <div class="col-md-11 ftco-animate text-center">
            <h1 style="color:burlywood">Le Stylist</h1>
            <h2 style="color:burlywood"><span>Wear Your Dress</span></h2>
          </div>
          <div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-down"></span></div>
						</a>
					</div>
        </div>
    </div>
  </div>

  <section class="ftco-section ftco-product">
    	<div class="container">
    		<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big">Trending</h1>
            <h2 class="mb-4">Trending</h2>
          </div>
        </div>
        <div class="row">
    			<div class="col-md-12 col-sm-12 col-lg-12">
    				<div class="product-slider owl-carousel ftco-animate">
            @foreach ($products as $product)
              @include('category.card.product', ['product' => $product])
           @endforeach
            </div>
          </div>
        </div>
  </section>

  <section class="ftco-section bg-light ftco-services">
    	<div class="container">
    		<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h1 class="big">Services</h1>
            <h2>We want you to express yourself</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-002-recommended"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Refund Policy</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-001-box"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Premium Packaging</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-003-medal"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Superior Quality</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
    	</div>
    </section>
    
         

@endsection
