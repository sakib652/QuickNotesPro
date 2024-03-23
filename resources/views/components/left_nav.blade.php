<div class="page-container">
    <nav class="sidebar fixed-sidebar" style="background-color: #EDEADE; height:900px">
        <ul class="nav flex-column">
            <li class="nav-item" style="margin-top: 50px;">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('notes.create')}}">
                    <i class="fas fa-sticky-note"></i> Create Notes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('notes.index')}}">
                    <i class="fas fa-eye"></i> View Notes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-users"></i> Customers
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-chart-line"></i> Report
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="position: relative;" id="pagesLink">
                    <i class="fas fa-book"></i> Integration
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-plug"></i> Plugins
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-cogs"></i> Accounts
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>

        </ul>
    </nav>
</div>