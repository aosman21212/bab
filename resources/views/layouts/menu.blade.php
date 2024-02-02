<li class="nav-item">
    <a href="{{ route('vendors.index') }}"
       class="nav-link {{ Request::is('vendors*') ? 'active' : '' }}">
        <p>Vendors</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('clients.index') }}"
       class="nav-link {{ Request::is('clients*') ? 'active' : '' }}">
        <p>Clients</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('babacctmanagers.index') }}"
       class="nav-link {{ Request::is('babacctmanagers*') ? 'active' : '' }}">
        <p>Babacctmanagers</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('productservices.index') }}"
       class="nav-link {{ Request::is('productservices*') ? 'active' : '' }}">
        <p>Productservices</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('vendordatas.index') }}"
       class="nav-link {{ Request::is('vendordatas*') ? 'active' : '' }}">
        <p>Vendordatas</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('clientdatas.index') }}"
       class="nav-link {{ Request::is('clientdatas*') ? 'active' : '' }}">
        <p>Clientdatas</p>
    </a>
</li>


