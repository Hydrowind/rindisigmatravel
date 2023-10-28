@php 
  use App\Models\Product; 
  use Illuminate\Support\Facades\Route;
@endphp

<div class="site-mobile-menu site-navbar-target">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close">
      <span class="icofont-close js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>

<nav class="site-nav fixed-top">
  <div class="container">
    <div class="site-navigation">
      <a href="/" class="logo m-0"><img src="/images/logo.png" alt="logo" width="100px"></a>

      <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
        <li class="{{ Route::currentRouteName() == '' ? 'active' : '' }}"><a href="/">Home</a></li>
        <li class="has-children {{ Route::currentRouteName() == 'product' ? 'active' : '' }}">
          <a href="{{ route('product') }}"">Product</a>
          <ul class="dropdown">
            <li><a href="{{ route('product', ['filter' => Product::TYPE_TOUR]) }}" class="{{ Route::currentRouteName() == 'blog' ? 'active' : '' }}">Paket Tour</a></li>
            <li><a href="{{ route('product', ['filter' => Product::TYPE_EVENT]) }}">Event Organizer</a></li>
            <li><a href="{{ route('product', ['filter' => Product::TYPE_ACCOMMODATION]) }}">Akomodasi</a></li>
            <!-- <li class="has-children">
              <a href="#">Akomodasi</a>
              <ul class="dropdown">
                <li><a href="#">Sub Menu One</a></li>
                <li><a href="#">Sub Menu Two</a></li>
                <li><a href="#">Sub Menu Three</a></li>
              </ul>
            </li> -->
            <li><a href="{{ route('product', ['filter' => Product::TYPE_TRANSPORTATION]) }}">Transportasi</a></li>
          </ul>
        </li>
        <li class="{{ Route::currentRouteName() == 'blog' ? 'active' : '' }}"><a href="{{ route('blog') }}" >Blog</a></li>
        <li class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}"><a href="{{ route('about') }}" >About Us</a></li>
      </ul>

      <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
        <span></span>
      </a>

    </div>
  </div>
</nav>