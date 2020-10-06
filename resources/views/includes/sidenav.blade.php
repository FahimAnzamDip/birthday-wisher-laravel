<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <img width="50" class="app-sidebar__user-avatar" src="https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortCurly&accessoriesType=Round&hairColor=Brown&facialHairType=BeardLight&facialHairColor=Brown&clotheType=ShirtCrewNeck&clotheColor=Heather&eyeType=Default&eyebrowType=Default&mouthType=Smile&skinColor=Pale" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
            <p class="app-sidebar__user-designation">Web Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item {{ (request()->is('/')) ? 'active' : '' }}" href="{{ url('/') }}">
                <i class="far fa-chart-network app-menu__icon"></i><span class="app-menu__label">Dashboard</span>
            </a>
        </li>

        <li>
            <a class="app-menu__item {{ (request()->is('employees*')) ? 'active' : '' }}" href="{{ route('employees.index') }}">
                <i class="far fa-briefcase app-menu__icon"></i><span class="app-menu__label">Employees</span>
            </a>
        </li>

        <li>
            <a class="app-menu__item {{ (request()->is('messages*')) ? 'active' : '' }}" href="{{ route('messages.index') }}">
                <i class="far fa-birthday-cake app-menu__icon"></i><span class="app-menu__label">Birthday Message</span>
            </a>
        </li>
    </ul>
</aside>
