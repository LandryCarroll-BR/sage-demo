<header class="banner bg-black h-20">
  <div class="flex items-center justify-between h-full">

    <div class="font-bold text-white">
      Explore
    </div>


    <a class="brand font-bold text-white" href="{{ home_url('/') }}">
      {!! $siteName !!}
    </a>

    <div>
      <div class="font-bold text-white">
        Explore
      </div>
    </div>
  </div>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
</header>
