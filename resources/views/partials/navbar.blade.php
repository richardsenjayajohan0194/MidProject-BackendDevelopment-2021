<nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Profile") ? 'active' : '' }}" href="/profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Course") ? 'active' : '' }}" href="/course">Course</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <?php if(session()->has('current_user')) : ?>
                <!--- <span style="color:#92e7e8"> </span><br> --->
                <span style="color:#92e7e8"> {{ session('current_user') }} </span><br>
                <a href="/logout">Logout</a>;
            <?php else : ?>
                <a class="nav-link {{ ($title === "Login") ? 'active' : '' }}" href="/login">Login</a>
            <?php endif; ?>

          </li>
          </ul>

      </div>
    </div>
  </nav>
