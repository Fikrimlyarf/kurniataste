<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <img src="{{ asset('assets/img/favicon/Logo_kurnia_taste.png') }}" alt="Kurnia Taste" class="app-brand-logo demo">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Kurnia Taste</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-store"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ url('transaksi') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-chart"></i>
                <div data-i18n="Transaksi">Transaksi</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Master Data</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div data-i18n="Menu">Menu</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="food" class="menu-link">
                        <div data-i18n="Food">Food</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="baverage" class="menu-link">
                        <div data-i18n="Baverage">Baverage</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="toping" class="menu-link">
                <i class="fa-solid fa-cookie"></i>
                <div data-i18n="topping" style="margin-left: 18px;">Topping</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ url('jenis-makanan') }}" class="menu-link">
                <i class="fa-solid fa-bowl-rice"></i>
                <div data-i18n="jenis-makanan" style="margin-left: 18px;">Jenis Makanan</div>
            </a>
        </li>

        <!-- Separatoy User -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Manajemen User</span></li>
        <!-- Tables -->
        <li class="menu-item">
            <a href="{{ url('user') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Users">User</div>
            </a>
        </li>

    </ul>
</aside>