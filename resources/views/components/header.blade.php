<header class="header-section" style="background-color: #28282B; height: 70px">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3">
                <a class="navbar-brand" style="margin-top: 5px; text-decoration: none; color: #ffffff;">
                    <span style=" color:52595D; font-family: 'Times New Roman', serif; font-size: 32px; font-weight: bold; letter-spacing: 2px;">
                        QuickNotes<span style="color: #ff9800;">Pro</span>
                    </span>
                </a>
            </div>

            <div class="col-md-8 text-right">

                @auth
                <li class="nav-item" style="margin-top: -15px;">
                    <a class="nav-link text-white" href="#"><i class="fas fa-user"></i> {{ Auth::user()->name }}</a>
                </li>
                @endauth
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
</header>