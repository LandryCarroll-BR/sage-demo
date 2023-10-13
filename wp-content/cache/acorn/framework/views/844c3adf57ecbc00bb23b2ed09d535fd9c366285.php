<header class="banner bg-black h-20">
  <div class="flex items-center justify-between h-full">

    <div class="font-bold text-white">
      Explore
    </div>


    <a class="brand font-bold text-white" href="<?php echo e(home_url('/')); ?>">
      <?php echo $siteName; ?>

    </a>

    <div>
      <div class="font-bold text-white dropdown-button cursor-pointer">
        Explore
      </div>
      <div class="dropdown-menu hidden flex text-white">
        test
      </div>
    </div>

    <script>
      const button = document.querySelector('.dropdown-button');
      const dropdownMenu = document.querySelector('.dropdown-menu');

      function handleButtonClick() {
        dropdownMenu.classList.toggle('hidden')
      }

      button.addEventListener('click', handleButtonClick)
    </script>

  </div>

  <?php if(has_nav_menu('primary_navigation')): ?>
    <nav class="nav-primary" aria-label="<?php echo e(wp_get_nav_menu_name('primary_navigation')); ?>">
      <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]); ?>

    </nav>
  <?php endif; ?>
</header>
<?php /**PATH /Users/landrycarroll/Freelance/sage/app/public/wp-content/themes/sage/resources/views/sections/header.blade.php ENDPATH**/ ?>