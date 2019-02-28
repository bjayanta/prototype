<nav>
    <a href="{{ route('admin.home') }}">Dashboard</a>
    <a href="{{ route('account.index') }}">Users</a>
    <a href="{{ route('role.index') }}">Roles</a>
    <a href="{{ route('permission.index') }}">Permission</a>
    <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    |

    <a href="{{ route('account.edit', Auth::user()->id) }}">
        <strong>{{ ucfirst(Auth::user()->name) }}</strong>
    </a>

    |

    <strong>{{ Auth::user()->created_at->toFormattedDateString() }}</strong>
</nav>

<hr>
