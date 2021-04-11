<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <li class="nav-header">MAIN NAVIGATION</li>
        <li class="nav-item has-treeview">
            <a href="{{ route('admin.home') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                    DATA MASTER
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('adminproduk.index') }}" class="nav-link">
                        <i class="fa fa-book"></i>
                        <p>Data Produk</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../user" class="nav-link">
                        <i class="fa fa-users"></i>
                        <p>User</p>
                    </a>
                </li>

            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                    DATA TRANSAKSI
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('adminproduk.index') }}" class="nav-link">
                        <i class="fa fa-book"></i>
                        <p>Data Pesanan</p>
                    </a>
                </li>

            </ul>
        </li>



        <li class="nav-item">


            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-power-off"></i>
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>