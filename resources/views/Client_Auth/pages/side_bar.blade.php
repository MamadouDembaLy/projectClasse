<div class="page-sidebar">
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-user text-center">
            <div><img class="img-60 rounded-circle lazyloaded blur-up"
                    src="{{ asset('assets/images/dashboard/man.png') }}" alt="#">
            </div>
            <h6 class="mt-3 f-14">{{ Auth()->user()->name }}</h6>
            <p></p>
        </div>
        <ul class="sidebar-menu">
            <li><a class="sidebar-header" href="index.html"><i data-feather="home"></i><span>Dashboard</span></a></li>
            <li><a class="sidebar-header" href=""><i data-feather="users"></i><span>CLIENT</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('client.create') }}"><i class="fa fa-circle"></i>Ajouter</a></li>
                    <li><a href="{{ route('client.index') }}"><i class="fa fa-circle"></i>Lister</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="box"></i><span>FOURNISSEUR</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('fournisseur.create') }}"><i class="fa fa-circle"></i>Ajouter</a></li>
                    <li><a href="{{ route('fournisseur.index') }}"><i class="fa fa-circle"></i>Lister</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="box"></i><span>CATEGORIES</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('categories.create') }}"><i class="fa fa-circle"></i>Ajouter</a></li>
                    <li><a href="{{ route('categories.index') }}"><i class="fa fa-circle"></i>Lister</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="box"></i><span>PRODUITS</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('produits.create') }}"><i class="fa fa-circle"></i>Ajouter</a></li>
                    <li><a href="{{ route('produits.index') }}"><i class="fa fa-circle"></i>Lister</a></li>
                </ul>
            </li>


            <li>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <a class="sidebar-header" href=""
                        onclick="event.preventDefault();this.closest('form').submit();"><i
                            data-feather="log-out"></i><span>LOGOUT</span></a>
                </form>

            </li>

        </ul>
    </div>
</div>
