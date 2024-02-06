
<li class="has-child open">
                            <a href="#" class="active">
                                <span data-feather="home" class="nav-icon"></span>
                                <span class="menu-text"> Client and  Vendor  
</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                            <li>
        <a href="{{ route('vendors.index') }}" class="{{ Request::is('vendors*') ? 'active' : '' }}">
            Vendors
        </a>
    </li>
    <li>
        <a href="{{ route('clients.index') }}" class="{{ Request::is('clients*') ? 'active' : '' }}">
            Clients
        </a>
    </li>
    <li>
        <a href="{{ route('babacctmanagers.index') }}" class="{{ Request::is('babacctmanagers*') ? 'active' : '' }}">
            AcctManager
        </a>
    </li>
 
    <li>
        <a href="{{ route('productservices.index') }}" class="{{ Request::is('productservices*') ? 'active' : '' }}">
            services
        </a>
    </li>
    <li>
        <a href="{{ route('vendordatas.index') }}" class="{{ Request::is('vendordatas*') ? 'active' : '' }}">
            Vendor report
        </a>
    </li>
    <li>
        <a href="{{ route('clientdatas.index') }}" class="{{ Request::is('clientdatas*') ? 'active' : '' }}">
            Client report
        </a>
    </li>
   
</ul>

                        </li>


