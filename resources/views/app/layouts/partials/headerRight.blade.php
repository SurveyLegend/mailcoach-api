<div class="dropdown" data-dropdown>
    <button class="dropdown-trigger" data-dropdown-trigger>
        <i class="fas fa-cog | block text-2xl icon-button"></i>
    </button>
    <ul class="dropdown-list dropdown-list-left | hidden" data-dropdown-list>
        <li>
            <a href="{{ route('mailcoach-api.clients') }}">
                <span class="icon-label">
                    <i class="fas fa-bolt"></i> API Clients
                </span>
            </a>
        </li>
        <li>
            <form method="post" action="{{ route('logout') }}">
                {{ csrf_field() }}
                <button type="submit">
                    <span class="icon-label">
                        <i class="fas fa-power-off text-red-500"></i>
                        Log out
                    </span>
                </button>
            </form>
        </li>
    </ul>
</div>
