<nav class="navbar is-primary  has-text-white" >
    <div class="container">
        <div class="navbar-brand">
            <a href="/" class="navbar-item">
                <strong><i class="fas fa-graduation-cap"></i> HZ</strong>
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">
                <a href="{{ route('home') }}"
                   class="navbar-item {{ Request::route()->getName() === 'home' ? "is-active" : "" }}">
                    Home
                </a>
                <a href="{{ route('posts.index') }}"
                   class="navbar-item {{ Request::route()->getName() === 'posts.index' ? "is-active" : "" }}">
                    News
                </a>
                <a href="{{ route('foos.index') }}"
                   class="navbar-item {{ Request::route()->getName() === 'foos.index' ? "is-active" : "" }}">
                    Index
                </a>
                <a href="{{ route('dashboard') }}"
                   class="navbar-item {{ Request::route()->getName() === 'dashboard' ? "is-active" : "" }}">
                    Dashboard
                </a>
                <a href="{{ route('profile.edit') }}"
                   class="navbar-item {{ Request::route()->getName() === 'profile' ? "is-active" : "" }}">
                    Profile
                </a>
            </div>
        </div>
    </div>
</nav>


