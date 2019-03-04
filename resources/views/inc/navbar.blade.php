<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">{{config('app.name', 'LSAPP')}}</a>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a href="/services" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
                <a href="/posts" class="nav-link">Blog</a>
            </li>
          </ul>
            <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                    <a href="/posts/create" class="nav-link">Create Post</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>