 <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" 
            @if (Auth::check())
                href="{{ asset('/dashboard') }}"
            @else
                href="{{ asset('/') }}"
            @endif
            ><span
				class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
				<em>LaraBid</em></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                <li><a href="{{ asset('/mybids') }}"><span
    						class="glyphicon glyphicon-tag" aria-hidden="true"></span> My
    						Bids</a>
                    </li>
		<li><a href="{{ asset('/myitems') }}"><span
    						class="glyphicon glyphicon-lock" aria-hidden="true"></span> My
    						Items</a>
                    </li>
                @endif                
                <li>
                    <form action="{{ asset('/search') }}" class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" name="query" placeholder="Search for items..." />
                                <span class="input-group-btn">
									<button type="submit" class="btn btn-warning">
										<span class="glyphicon glyphicon-search" aria-hidden="true"></span> &nbsp; Submit
                                </button>
                                </span>
                            </div>
                        </div>
                    </form>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"
						aria-hidden="true"></span>&nbsp; Hello,
						@if (Auth::check())
							<strong>{{ Auth::user()->name }}!</strong>
						@else
							<strong>guest!</strong>
						@endif
						<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @if (true)
                            <li><a href="{{ asset('/item/create') }}">Add an item for auction</a></li>
                            <li role="separator" class="divider"></li>
                            @if (Auth::check())
	                            <li><a href="{{ asset('/auth/logout') }}">Logout</a></li>
	                        @else
                            	<li><a href="{{ asset('/auth/login') }}">Sign in</a></li>
                                <li><a href="{{ asset('/auth/register') }}">Register</a></li>
                            @endif
                        @endif
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
