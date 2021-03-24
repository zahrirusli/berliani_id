
<header class="text-gray-700 px-6 border-b">
   
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
      <a href="{{ route('home') }}" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <img class="w-10 h-10 text-white" 
        src="{{ asset('images/logo.svg') }}" /> 
      <span class="ml-3 text-black-700 text-xl">Berliani.id</span>
    </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
          @foreach ($menus as $menu)
            <li class="nav-item active">
              <a href="{{ $menu->url }}" class="nav-item nav-link hover:text-gray-900">
                  {{ $menu->name }}
              </a> 
            </li>
            @endforeach
	        </ul>
	      </div>
	    </div>
	  </nav>
</header>
