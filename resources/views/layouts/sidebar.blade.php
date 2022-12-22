<!-- Main Sidebar Container -->


<aside class="main-sidebar sidebar-dark-primary elevation-4 wrapper d-flex" id="sidebar">
    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column flex-row text-white bg-dark" id="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column align-items-center" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          @guest
          <li class="nav-item menu-open">
            <a href="/login" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Login</p>  
            </a>
          </li>
          @endguest
              <li class="nav-item">
                <a href="/about" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/education" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Education</p>
                </a>
              </li>

          </li>
          <li class="nav-item">
            <a href="/project" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Projects
              </p>
            </a>
          </li>
          <li class="nav-item">
                <a href="/posts" class="nav-link" target="_blank">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Posts</p>
                </a>
              </li>
          <li class="nav-item">
            <a href="/send-email" class="nav-link" target="_blank">
              <i class="far fa-circle nav-icon"></i>
              <p>Send Email</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/gallery" class="nav-link" target="_blank">
              <i class="far fa-circle nav-icon"></i>
              <p>Gallery</p>
              <span class="right badge badge-danger">New</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="/api/gallery" class="nav-link" target="_blank">
              <i class="far fa-circle nav-icon"></i>
              <p>Gallery 2</p>
              <span class="right badge badge-danger">New</span>
            </a>
          </li>

          <li class="nav-item">
                <a href="/baru" class="nav-link" target="_blank">
                  <i class="far fa-circle nav-icon"></i>
                  @guest
                  <p>Locked!</p>
                  @endguest
                  @auth
                  <p>Unlocked!</p>
                  @endauth
                  <span class="right badge badge-danger">New</span>
                </a>
            </li>
            </ul>
          </li>

            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="kecil">
  <div class="container-fluid"> 
    <a class="navbar-brand" href="javascript:void(0)"><img src="{{asset("assets\logoonepiece.jpg")}}" class="align-items-center" id="logo" alt="">&nbsp;Portofolio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
          <li class="nav-item menu-open">
            <a href="/" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          @guest
          <li class="nav-item menu-open">
            <a href="/login" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Login</p>  
            </a>
          </li>
          @endguest
              <li class="nav-item">
                <a href="/about" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/education" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Education</p>
                </a>
              </li>

          </li>
          <li class="nav-item">
            <a href="/project" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Projects
              </p>
            </a>
          </li>
          <li class="nav-item">
                <a href="/posts" class="nav-link" target="_blank">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Posts</p>
                </a>
              </li>
          <li class="nav-item">
            <a href="/send-email" class="nav-link" target="_blank">
              <i class="far fa-circle nav-icon"></i>
              <p>Send Email</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/gallery" class="nav-link" target="_blank">
              <i class="far fa-circle nav-icon"></i>
              <p>Gallery</p>
              <span class="right badge badge-danger">New</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="/api/gallery" class="nav-link" target="_blank">
              <i class="far fa-circle nav-icon"></i>
              <p>Gallery 2</p>
              <span class="right badge badge-danger">New</span>
            </a>
          </li>

          <li class="nav-item">
                <a href="/baru" class="nav-link" target="_blank">
                  <i class="far fa-circle nav-icon"></i>
                  @guest
                  <p>Locked!</p>
                  @endguest
                  @auth
                  <p>Unlocked!</p>
                  @endauth
                  <span class="right badge badge-danger">New</span>
                </a>
            </li>
      </ul>
    </div>
  </div>
</nav>




<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>