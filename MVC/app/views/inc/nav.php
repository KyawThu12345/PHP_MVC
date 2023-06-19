<div class="container-fluid p-0 m-0">
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <div class="ps-4"><img class="rounded-circle" src="<?php echo URLROOT . "assets/imgs/logo.png" ?>" alt="" width="30" height="30"></div>
      <a class="navbar-brand text-white ps-1" href="<?php echo URLROOT . "" ?>"><span class="font-monospace">HARMONY</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex justify-content-start">
          <?php if (getUserSession()) : ?>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php echo URLROOT . 'admin/home' ?>">Admin Panel</a>
            </li>
          <?php endif; ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white pe-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php if (getUserSession() != false) : ?>
                <?php echo getUserSession()->name; ?>
              <?php else : ?>
                Member
              <?php endif; ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php if (getUserSession() != false) : ?>
                <li><a class="dropdown-item font-monospace" href="<?php echo URLROOT . "user/logout" ?>">Logout</a></li>
              <?php else : ?>
                <li><a class="dropdown-item font-monospace" href="<?php echo URLROOT . 'user/login' ?>">Login</a></li>
                <li><a class="dropdown-item font-monospace" href="<?php echo URLROOT . "user/register" ?>">Register</a></li>
              <?php endif; ?>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white pe-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Languages
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item font-monospace" href="#">HTML</a></li>
              <li><a class="dropdown-item font-monospace" href="#">CSS</a></li>
              <li><a class="dropdown-item font-monospace" href="#">JS</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>