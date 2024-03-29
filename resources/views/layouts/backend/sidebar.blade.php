<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Utama</li>

        <li class="sidebar-item {{ (request()->is('v1')) ? 'active' : '' }}">
            <a href="{{ route('dashboard')}}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-title">Kelola Tiket</li>

        <li class="sidebar-item {{ (request()->is('v1/product')) ? 'active' : '' }}">
            <a href="{{ route('product.index')}}" class='sidebar-link'>
                <i class="bi bi-box2-fill"></i>
                <span>List Ticket</span>
            </a>
        </li>

        <li class="sidebar-item {{ (request()->is('v1/product/create')) ? 'active' : '' }}">
            <a href="{{ route('product.create')}}" class='sidebar-link'>
                <i class="bi bi-box-arrow-in-up"></i>
                <span>Tambah Tiket</span>
            </a>
        </li>

        

        <li class="sidebar-title">Kelola Trayek</li>

        <li class="sidebar-item {{ (request()->is('v1/backend/trayek')) ? 'active' : '' }}">
            <a href="{{ route('trayek.index')}}" class='sidebar-link'>
                <i class="bi bi-box2-fill"></i>
                <span>List Trayek</span>
            </a>
        </li>

        <li class="sidebar-item {{ (request()->is('v1/trayek/create')) ? 'active' : '' }}">
            <a href="{{ route('trayek.create')}}" class='sidebar-link'>
                <i class="bi bi-box-arrow-in-up"></i>
                <span>Tambah Trayek</span>
            </a>
        </li>

        <li class="sidebar-title">Tools Admin</li>

        <li class="sidebar-item {{ (request()->is('v1/cities')) ? 'active' : '' }}">
            <a href="" target="" class='sidebar-link'>
                <i class="bi bi-person-lines-fill"></i>
                <span>Daftar User</span>
            </a>
        </li>

        <li class="sidebar-item {{ (request()->is('v1/cities')) ? 'active' : '' }}">
            <a href="" target="" class='sidebar-link'>
                <i class="bi bi-whatsapp"></i>
                <span>Hubungi Author</span>
            </a>
        </li>

    </ul>
</div>
