<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img width="50" class="app-sidebar__user-avatar"
                                        src="https://i.ibb.co/ZYXnG3V/fahim-high.png"
                                        alt="User Image">
        <div>
            <p class="app-sidebar__user-name">Fahim Anzam</p>
            <p class="app-sidebar__user-designation">Web Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item {{ (request()->is('dashboard*')) ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                <i class="far fa-chart-bar app-menu__icon"></i><span class="app-menu__label">Dashboard</span>
            </a>
        </li>

        <li>
            <a class="app-menu__item {{ (request()->is('profile*')) ? 'active' : '' }}" href="{{ route('profile') }}">
                <i class="far fa-user-cog app-menu__icon"></i><span class="app-menu__label">Profile</span>
            </a>
        </li>

        <li>
            <a class="app-menu__item {{ (request()->is('categories*')) ? 'active' : '' }}" href="{{ route('categories.index') }}">
                <i class="far fa-layer-group app-menu__icon"></i><span class="app-menu__label">Categories</span>
            </a>
        </li>

        <li>
            <a class="app-menu__item {{ (request()->is('services*')) ? 'active' : '' }}" href="{{ route('services.index') }}">
                <i class="far fa-briefcase app-menu__icon"></i><span class="app-menu__label">Services</span>
            </a>
        </li>

        <li>
            <a class="app-menu__item {{ (request()->is('projects*')) ? 'active' : '' }}" href="{{ route('projects.index') }}">
                <i class="far fa-file-code app-menu__icon"></i><span class="app-menu__label">Projects</span>
            </a>
        </li>
    </ul>
</aside>
