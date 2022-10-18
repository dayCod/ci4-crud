<nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">News Portal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <?php if (empty(session()->get('email'))) : ?>
          <li class="nav-item">
            <a class="nav-link" href="/auth/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/auth/register">Register</a>
          </li>
        <?php else : ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?= session()->get('email') ?>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/auth/logout">Logout</a></li>
            </ul>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>