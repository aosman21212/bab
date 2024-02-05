
<li class="has-child open">
                            <a href="#" class="active">
                                <span data-feather="home" class="nav-icon"></span>
                                <span class="menu-text"> Client and  Vendor Cost Reporting
</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
 
    <li>
        <a href="{{ route('productservices.index') }}" class="{{ Request::is('productservices*') ? 'active' : '' }}">
            <p>services</p>
        </a>
    </li>
    <li>
        <a href="{{ route('vendordatas.index') }}" class="{{ Request::is('vendordatas*') ? 'active' : '' }}">
            <p>Vendordatas</p>
        </a>
    </li>
    <li>
        <a href="{{ route('clientdatas.index') }}" class="{{ Request::is('clientdatas*') ? 'active' : '' }}">
            <p>Clientdatas</p>
        </a>
    </li>
    <li>
        <a href="{{ route('vendors.index') }}" class="{{ Request::is('vendors*') ? 'active' : '' }}">
            <p>Vendors</p>
        </a>
    </li>
    <li>
        <a href="{{ route('clients.index') }}" class="{{ Request::is('clients*') ? 'active' : '' }}">
            <p>Clients</p>
        </a>
    </li>
    <li>
        <a href="{{ route('babacctmanagers.index') }}" class="{{ Request::is('babacctmanagers*') ? 'active' : '' }}">
            <p>AcctManager</p>
        </a>
    </li>
</ul>

                        </li>


