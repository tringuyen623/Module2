<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="">Task Management</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a class="nav-link {{ Request::path() === '/' ? 'active' : '' }}" href="{{'/'}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::path() === 'cities' ? 'active' : '' }}" href="{{route('cities.index')}}">Cities</a>
          </li>
        <li class="nav-item">
        <a class="nav-link {{ Request::path() === 'customers' ? 'active' : '' }}" href="{{route('customers.index')}}">Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::path() === 'tasks' ? 'active' : '' }}" href="{{route('tasks.index')}}">Tasks</a>
          </li>
      </ul>
    <form action="{{ route('customers.search') }}" class="form-inline my-2 my-lg-0" method="GET">
        <input class="form-control mr-sm-2" name="key" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>