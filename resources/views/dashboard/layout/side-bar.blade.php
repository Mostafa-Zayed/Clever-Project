<div class="sidebar" data-color="purple" data-background-color="black" data-image="{{ asset('assets/img/sidebar-2.jpg')}}">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{isActive('index')}}">
            <a class="nav-link" href="{{route('dashboard.index')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{isActive('users')}}">
            <a class="nav-link" href="{{route('dashboard.users.index')}}">
              <i class="material-icons">people</i>
              <p>Users</p>
            </a>
          </li>
          <li class="nav-item {{isActive('categories')}}">
            <a class="nav-link" href="{{route('dashboard.categories.index')}}">
              <i class="material-icons">subject</i>
              <p>Categories</p>
            </a>
          </li>
          <li class="nav-item {{isActive('instructors')}}">
            <a class="nav-link" href="{{route('dashboard.instructors.index')}}">
              <i class="material-icons">subject</i>
              <p>Instructors</p>
            </a>
          </li>
          
          <li class="nav-item {{isActive('courses')}}">
            <a class="nav-link" href="{{route('dashboard.courses.index')}}">
              <i class="material-icons">subject</i>
              <p>Courses</p>
            </a>
          </li>
          <li class="nav-item {{isActive('programes')}}">
            <a class="nav-link" href="{{route('dashboard.programes.index')}}">
              <i class="material-icons">subject</i>
              <p>Programes</p>
            </a>
          </li>
          <li class="nav-item {{isActive('scholarships')}}">
            <a class="nav-link" href="{{route('dashboard.scholarships.index')}}">
              <i class="material-icons">subject</i>
              <p>ScholarShips</p>
            </a>
          </li>
          <li class="nav-item {{isActive('events')}}">
            <a class="nav-link" href="{{route('dashboard.events.index')}}">
              <i class="material-icons">subject</i>
              <p>Events</p>
            </a>
          </li>
          <li class="nav-item {{isActive('types')}}">
            <a class="nav-link" href="{{route('dashboard.types.index')}}">
              <i class="material-icons">subject</i>
              <p>Types</p>
            </a>
          </li>
          <li class="nav-item {{isActive('programtypes')}}">
            <a class="nav-link" href="{{route('dashboard.programtypes.index')}}">
              <i class="material-icons">subject</i>
              <p>Programes Type</p>
            </a>
          </li>
          <li class="nav-item {{isActive('curriculumes')}}">
            <a class="nav-link" href="{{route('dashboard.curriculumes.index')}}">
              <i class="material-icons">subject</i>
              <p>Curriculumes</p>
            </a>
          </li>
          <li class="nav-item {{isActive('faqs')}}">
            <a class="nav-link" href="{{route('dashboard.faqs.index')}}">
              <i class="material-icons">subject</i>
              <p>Faqs</p>
            </a>
          </li>
          <li class="nav-item {{isActive('certifications')}}">
            <a class="nav-link" href="{{route('dashboard.certifications.index')}}">
              <i class="material-icons">subject</i>
              <p>Certifications</p>
            </a>
          </li>
          <li class="nav-item {{isActive('skills')}}">
            <a class="nav-link" href="{{route('dashboard.skills.index')}}">
              <i class="material-icons">list_alt</i>
              <p>Skills</p>
            </a>
          </li>
          <li class="nav-item {{isActive('tages')}}">
            <a class="nav-link" href="{{route('dashboard.tages.index')}}">
              <i class="material-icons">code</i>
              <p>Tages</p>
            </a>
          </li>
          <li class="nav-item {{isActive('pages')}}">
            <a class="nav-link" href="{{route('dashboard.pages.index')}}">
              <i class="material-icons">pages</i>
              <p>Pages</p>
            </a>
          </li>
          
          <li class="nav-item {{isActive('videos')}}">
            <a class="nav-link" href="{{route('dashboard.videos.index')}}">
              <i class="material-icons">ondemand_video</i>
              <p>videos</p>
            </a>
          </li>
        </ul>
      </div>
    </div>