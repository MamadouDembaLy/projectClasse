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
            <li><a class="sidebar-header" href=""><i data-feather="box"></i><span>SLIDE</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('slide.create') }}"><i class="fa fa-circle"></i>Ajouter</a></li>
                    <li><a href="{{ route('slide.index') }}"><i class="fa fa-circle"></i>Lister</a></li>
                </ul>
            </li>

            <li><a class="sidebar-header" href=""><i data-feather="box"></i><span>PAGE</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('page.create') }}"><i class="fa fa-circle"></i>Ajouter</a></li>
                    <li><a href="{{ route('page.index') }}"><i class="fa fa-circle"></i>Lister</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="box"></i><span>PUB</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('pub.create') }}"><i class="fa fa-circle"></i>Ajouter</a></li>
                    <li><a href="{{ route('pub.index') }}"><i class="fa fa-circle"></i>Lister</a></li>
                </ul>
            </li>

            <li><a class="sidebar-header" href=""><i data-feather="box"></i><span>PARTENAIRE</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('partenaire.create') }}"><i class="fa fa-circle"></i>Ajouter</a></li>
                    <li><a href="{{ route('partenaire.index') }}"><i class="fa fa-circle"></i>Lister</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="box"></i><span>EQUIPE</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('equipe.create') }}"><i class="fa fa-circle"></i>Ajouter</a></li>
                    <li><a href="{{ route('equipe.index') }}"><i class="fa fa-circle"></i>Lister</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="box"></i><span>BLOG</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('blog.create') }}"><i class="fa fa-circle"></i>Ajouter</a></li>
                    <li><a href="{{ route('blog.index') }}"><i class="fa fa-circle"></i>Lister</a></li>
                </ul>
            </li>
            <li>
                <a class="sidebar-header" href=""><i data-feather="box"></i><span>EXPERTISE</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('expertise.create') }}"><i class="fa fa-circle"></i>Ajouter</a></li>
                    <li><a href="{{ route('expertise.index') }}"><i class="fa fa-circle"></i>Lister</a></li>
                </ul>
            </li>
            <li>
                <a class="sidebar-header" href=""><i data-feather="box"></i><span>OFFRES</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('offre.create') }}"><i class="fa fa-circle"></i>Ajouter</a></li>
                    <li><a href="{{ route('offre.index') }}"><i class="fa fa-circle"></i>Lister</a></li>
                </ul>
            </li>

            <li>
                <a class="sidebar-header" href=""><i data-feather="box"></i><span>FORMATION</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('formation.create') }}"><i class="fa fa-circle"></i>Ajouter</a></li>
                    <li><a href="{{ route('formation.index') }}"><i class="fa fa-circle"></i>Lister</a></li>
                </ul>
            </li>

            <li>
                <a class="sidebar-header" href=""><i data-feather="box"></i><span>TYPE EVENT</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('type_event.create') }}"><i class="fa fa-circle"></i>Ajouter</a></li>
                    <li><a href="{{ route('type_event.index') }}"><i class="fa fa-circle"></i>Lister</a></li>
                </ul>
            </li>

            <li>
                <a class="sidebar-header" href=""><i data-feather="box"></i><span>EVENEMENT</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('evenement.create') }}"><i class="fa fa-circle"></i>Ajouter</a></li>
                    <li><a href="{{ route('evenement.index') }}"><i class="fa fa-circle"></i>Lister</a></li>
                </ul>
            </li>
            <li>
                <a class="sidebar-header" href=""><i data-feather="box"></i><span>PORTFOLIO</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('portfolio.create') }}"><i class="fa fa-circle"></i>Ajouter</a></li>
                    <li><a href="{{ route('portfolio.index') }}"><i class="fa fa-circle"></i>Lister</a></li>
                </ul>
            </li>

            <li>
                <a class="sidebar-header" href=""><i data-feather="box"></i><span>COORDONNÉES</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('coordonnee.create') }}"><i class="fa fa-circle"></i>Ajouter</a></li>
                    <li><a href="{{ route('coordonnee.index') }}"><i class="fa fa-circle"></i>Lister</a></li>
                </ul>
            </li>
            <li>
                <a class="sidebar-header" href=""><i data-feather="box"></i><span>LOGO</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('logo.create') }}"><i class="fa fa-circle"></i>Ajouter</a></li>
                    <li><a href="{{ route('logo.index') }}"><i class="fa fa-circle"></i>Lister</a></li>
                </ul>
            </li>

            <li><a class="sidebar-header" href=""><i data-feather="box"></i><span>TEMOIGNAGE</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('temoignage.create') }}"><i class="fa fa-circle"></i>Ajouter</a></li>
                    <li><a href="{{ route('temoignage.index') }}"><i class="fa fa-circle"></i>Lister</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="box"></i><span>CONTACT</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('contact.index') }}"><i class="fa fa-circle"></i>Lister</a></li>
                </ul>
            </li>

        </ul>
        <ul class="sidebar-menu">

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
