<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="<?= base_url(); ?>/dashboard" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-clipboard-list nav-icon"></i>
                <p>
                    Transaksi
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/master_barang" class="nav-link">
                        <i class="fas fa-box-open nav-icon"></i>
                        <p>
                            Master Barang
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/transaksi/service" class="nav-link">
                        <i class="fas fa-wrench nav-icon"></i>
                        <p>Service</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-users nav-icon"></i>
                <p>
                    User
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/user/admin" class="nav-link">
                        <i class="fas fa-user-circle nav-icon"></i>
                        <p>Admin</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/user/supplier" class="nav-link">
                        <i class="fas fa-user-circle nav-icon"></i>
                        <p>Suplier</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/user/customer" class="nav-link">
                        <i class="fas fa-user-circle nav-icon"></i>
                        <p>Customer</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/user/mekanik" class="nav-link">
                        <i class="fas fa-user-circle nav-icon"></i>
                        <p>Mekanik</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="<?= base_url(); ?>/Auth/logout" class="nav-link">
                <i class="fas fa-sign-out-alt nav-icon"></i>
                <p>
                    Logout
                </p>
            </a>
        </li>
    </ul>
</nav>