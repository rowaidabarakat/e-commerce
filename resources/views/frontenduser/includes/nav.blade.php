<header>
    <div class="navbar navbar-light bg-light">
        <div class="container-fluid justify-content-center">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    <nav class="row justify-content-between">
        <div class="logo col-3">
            <h3>Fashion</h3>
        </div>
        <div class="links-nav col-7">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#collection">About</a></li>
                <li><a href="#featured">Product</a></li>
                <li><a href="">My Account</a></li>
                <li><a href="{{url('login')}}">login</a></li>
                <li><a href="{{url('register')}}">Register</a></li>
            </ul>
        </div>
    </nav>
    </header>
