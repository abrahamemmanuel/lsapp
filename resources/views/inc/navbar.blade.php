<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-inverse mb-5">
  <div class="container">
   <div class="navbar-header">
     <a class="navbar-brand" href="/">{{config('app.name', 'LSAPP')}}</a>
   </div>

    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/posts">Blog</a>
        </li>
      </ul>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="/posts/create">Create Post</a></li>
    </ul>
  </div>
</nav>