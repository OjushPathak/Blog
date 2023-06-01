@include('blog.css')
@livewireStyles

<body>

  <div class="container mt-3">
    @if (Route::has('login'))
    <div class="mx-2 my-2">
      @auth
      <x-app-layout></x-app-layout>
      @else
      <a href="{{url('/login')}}" class="btn btn-primary text-decoration-none">Login</a>

      @if (Route::has('register'))
      <a href="{{url('/register')}}" class="btn btn-success text-decoration-none">Register</a>
      @endif
      @endauth
    </div>
    @endif

    <!--Main layout-->
    <livewire:filters />

    
    <livewire:showfilters />
  
@livewireScripts
@include('blog.footer')
