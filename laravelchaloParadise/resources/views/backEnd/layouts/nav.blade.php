<!--sidebar-menu-->
<div id="sidebar"><a href="{{url('/admin')}}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li{{$menu_active==1? ' class=active':''}}><a href="{{url('/admin')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
        <li class="submenu {{$menu_active==2? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>les Categories</span></a>
            <ul>
                <li><a href="{{url('/admin/category/create')}}">Ajouter une Categorie</a></li>
                <li><a href="{{route('category.index')}}">Liste des Categories</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==3? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Les Produits</span></a>
            <ul>
                <li><a href="{{url('/admin/product/create')}}">Ajouter un Produit</a></li>
                <li><a href="{{route('product.index')}}">liste des Produit</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==4? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Les reductions</span></a>
            <ul>
                <li><a href="{{route('coupon.create')}}">Ajouter une réduction</a></li>
                <li><a href="{{route('coupon.index')}}">liste des réduction</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--sidebar-menu-->