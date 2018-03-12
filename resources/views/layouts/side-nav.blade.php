          <nav>
	        <div class="sidebar-sticky">

	          <div id="accordion" class="list-group">
		        <a href="/dashboard" class="list-group-item list-group-item-action{{ Request::is('dashboard') ? ' active' : '' }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
		        <button type="button" id="headingContent" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapseContent" aria-expanded="false" aria-controls="collapseContent"><i class="fas fa-columns"></i> Content</button>
		        <div id="collapseContent" class="collapse{{ ( Request::is('pages*') || Request::is('posts*') || Request::is('tutorials*') || Request::is('media*') || Request::is('categories*') || Request::is('tags*') ) ? ' show' : '' }}" aria-labelledby="headingContent" data-parent="#accordion">
		          <div class="list-group">
		            <a href="/pages" class="list-group-item list-group-item-action subgroup{{ Request::is('pages*') ? ' active' : '' }}"><i class="fas fa-file-alt"></i> Pages</a>
		            <a href="/posts" class="list-group-item list-group-item-action subgroup{{ Request::is('posts*') ? ' active' : '' }}"><i class="fas fa-paper-plane"></i> Posts</a>
               <a href="/tutorials" class="list-group-item list-group-item-action subgroup{{ Request::is('tutorials*') ? ' active' : '' }}"><i class="fas fa-graduation-cap"></i> Tutorials</a>
		            <a href="/media" class="list-group-item list-group-item-action subgroup{{ Request::is('media*') ? ' active' : '' }}"><i class="fas fa-folder"></i> Media</a>
		            <a href="/categories" class="list-group-item list-group-item-action subgroup{{ Request::is('categories*') ? ' active' : '' }}"><i class="fas fa-asterisk"></i> Categories</a>
		            <a href="/tags" class="list-group-item list-group-item-action subgroup{{ Request::is('tags*') ? ' active' : '' }}"><i class="fas fa-tags"></i> Tags</a>
		          </div>
		        </div>
		        <button type="button" id="headingEcommerce" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapseEcommerce" aria-expanded="false" aria-controls="collapseEcommerce"><i class="fas fa-shopping-cart"></i> eCommerce</button>
		        <div id="collapseEcommerce" class="collapse{{ ( Request::is('customers*') || Request::is('products*') || Request::is('invoices*') || Request::is('orders*') || Request::is('subscriptions*') || Request::is('plans*') || Request::is('accounts*') || Request::is('transactions*') ) ? ' show' : '' }}" aria-labelledby="headingEcommerce" data-parent="#accordion">
		          <div class="list-group">
		            <a href="/customers" class="list-group-item list-group-item-action subgroup{{ Request::is('customers*') ? ' active' : '' }}"><i class="fas fa-users"></i> Customers</a>
		            <a href="/products" class="list-group-item list-group-item-action subgroup{{ Request::is('products*') ? ' active' : '' }}"><i class="fas fa-barcode"></i> Products</a>
		            <a href="/invoices" class="list-group-item list-group-item-action subgroup{{ Request::is('invoices*') ? ' active' : '' }}"><i class="fas fa-list-alt"></i> Invoices</a>
		            <a href="/orders" class="list-group-item list-group-item-action subgroup{{ Request::is('orders*') ? ' active' : '' }}"><i class="fas fa-truck"></i> Orders</a>
		            <a href="/subscriptions" class="list-group-item list-group-item-action subgroup{{ Request::is('subscriptions*') ? ' active' : '' }}"><i class="fas fa-check-square"></i> Subscriptions</a>
		            <a href="/plans" class="list-group-item list-group-item-action subgroup{{ Request::is('plans*') ? ' active' : '' }}"><i class="fas fa-coffee"></i> Plans</a>
		            <a href="/accounts" class="list-group-item list-group-item-action subgroup{{ Request::is('accounts*') ? ' active' : '' }}"><i class="fas fa-truck"></i> Accounts</a>
		            <a href="/transactions" class="list-group-item list-group-item-action subgroup{{ Request::is('transactions*') ? ' active' : '' }}"><i class="fas fa-calculator"></i> Transactions</a>
		          </div>
		        </div>
		        <button type="button" id="headingPersonal" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapsePersonal" aria-expanded="false" aria-controls="collapsePersonal"><i class="fas fa-briefcase"></i> Personal</button>
		        <div id="collapsePersonal" class="collapse{{ ( Request::is('emails*') || Request::is('contacts*') || Request::is('calendars*') || Request::is('tasks*') ) ? ' show' : '' }}" aria-labelledby="headingPersonal" data-parent="#accordion">
		          <div class="list-group">
		            <a href="/emails" class="list-group-item list-group-item-action subgroup{{ Request::is('emails*') ? ' active' : '' }}"><i class="fas fa-envelope-open"></i> Emails</a>
		            <a href="/contacts" class="list-group-item list-group-item-action subgroup{{ Request::is('contacts*') ? ' active' : '' }}"><i class="fas fa-address-card"></i> Contacts</a>
		            <a href="/calendars" class="list-group-item list-group-item-action subgroup{{ Request::is('calendars*') ? ' active' : '' }}"><i class="fas fa-calendar-alt"></i> Calendars</a>
		            <a href="/tasks" class="list-group-item list-group-item-action subgroup{{ Request::is('tasks*') ? ' active' : '' }}"><i class="fas fa-list"></i> Tasks</a>
		          </div>
		        </div>
		        <button type="button" id="headingSupport" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapseSupport" aria-expanded="false" aria-controls="collapseSupport"><i class="fas fa-life-ring"></i> Support</button>
		        <div id="collapseSupport" class="collapse{{ ( Request::is('issues*') || Request::is('types*') || Request::is('priorities*') || Request::is('statuses*') || Request::is('resolutions*') ) ? ' show' : '' }}" aria-labelledby="headingSupport" data-parent="#accordion">
		          <div class="list-group">
		            <a href="/issues" class="list-group-item list-group-item-action subgroup{{ Request::is('issues*') ? ' active' : '' }}"><i class="fas fa-bug"></i> Issues</a>
		            <a href="/types" class="list-group-item list-group-item-action subgroup{{ Request::is('types*') ? ' active' : '' }}"><i class="fas fa-paperclip"></i> Types</a>
		            <a href="/priorities" class="list-group-item list-group-item-action subgroup{{ Request::is('priorities*') ? ' active' : '' }}"><i class="fas fa-bomb"></i> Priorities</a>
		            <a href="/statuses" class="list-group-item list-group-item-action subgroup{{ Request::is('statuses*') ? ' active' : '' }}"><i class="fas fa-fire"></i> Statuses</a>
		            <a href="/resolutions" class="list-group-item list-group-item-action subgroup{{ Request::is('resolutions*') ? ' active' : '' }}"><i class="fas fa-road"></i> Resolutions</a>
		          </div>
		        </div>
		        <button type="button" id="headingForums" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapseForums" aria-expanded="false" aria-controls="collapseForums"><i class="fas fa-comment"></i> Forums</button>
		        <div id="collapseForums" class="collapse{{ ( Request::is('channels*') || Request::is('topics*') || Request::is('threads**') || Request::is('replies*') ) ? ' show' : '' }}" aria-labelledby="headingForums" data-parent="#accordion">
		          <div class="list-group">
		            <a href="/channels" class="list-group-item list-group-item-action subgroup{{ Request::is('channels*') ? ' active' : '' }}"><i class="fas fa-leaf"></i> Channels</a>
  		            <a href="/topics" class="list-group-item list-group-item-action subgroup{{ Request::is('topics*') ? ' active' : '' }}"><i class="fas fa-anchor"></i> Topics</a>
		            <a href="/threads" class="list-group-item list-group-item-action subgroup{{ Request::is('threads*') ? ' active' : '' }}"><i class="fas fa-binoculars"></i> Threads</a>
		            <a href="/replies" class="list-group-item list-group-item-action subgroup{{ Request::is('replies*') ? ' active' : '' }}"><i class="fas fa-comments"></i> Replies</a>
		          </div>
		        </div>
		        <button type="button" id="headingLibrary" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapseLibrary" aria-expanded="false" aria-controls="collapseLibrary"><i class="fas fa-university"></i> Library</button>
		        <div id="collapseLibrary" class="collapse{{ ( Request::is('books*') || Request::is('authors*') || Request::is('publishers*') || Request::is('series*') ) ? ' show' : '' }}" aria-labelledby="headingLibrary" data-parent="#accordion">
		          <div class="list-group">
		            <a href="/books" class="list-group-item list-group-item-action subgroup{{ Request::is('books*') ? ' active' : '' }}"><i class="fas fa-book"></i> Books</a>
		            <a href="/authors" class="list-group-item list-group-item-action subgroup{{ Request::is('authors*') ? ' active' : '' }}"><i class="fas fa-pencil-alt"></i> Authors</a>
		            <a href="/publishers" class="list-group-item list-group-item-action subgroup{{ Request::is('publishers*') ? ' active' : '' }}"><i class="fas fa-pen-square"></i> Publishers</a>
                    <a href="/series" class="list-group-item list-group-item-action subgroup{{ Request::is('series*') ? ' active' : '' }}"><i class="fas fa-puzzle-piece"></i> Series</a>
		          </div>
		        </div>
		        <button type="button" id="headingLaw" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapseLaw" aria-expanded="false" aria-controls="collapseLaw"><i class="fas fa-balance-scale"></i> Law</button>
		        <div id="collapseLaw" class="collapse{{ ( Request::is('clients*') || Request::is('cases*') || Request::is('case-notes*') ) ? ' show' : '' }}" aria-labelledby="headingLaw" data-parent="#accordion">
		          <div class="list-group">
		            <a href="/clients" class="list-group-item list-group-item-action subgroup{{ Request::is('clients*') ? ' active' : '' }}"><i class="fas fa-users"></i> Clients</a>
		            <a href="/cases" class="list-group-item list-group-item-action subgroup{{ Request::is('cases*') ? ' active' : '' }}"><i class="fas fa-briefcase"></i> Cases</a>
		            <a href="/case-notes" class="list-group-item list-group-item-action subgroup{{ Request::is('case-notes*') ? ' active' : '' }}"><i class="far fa-file-alt"></i> Case Notes</a>
		          </div>
		        </div>
		        <button type="button" id="headingSystem" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapseSystem" aria-expanded="false" aria-controls="collapseSystem"><i class="fas fa-server"></i> System</button>
		        <div id="collapseSystem" class="collapse{{ ( Request::is('users*') || Request::is('groups*') || Request::is('resources*') || Request::is('servers*') || Request::is('sessions*') || Request::is('domains*') || Request::is('websites*') || Request::is('settings*') ) ? ' show' : '' }}" aria-labelledby="headingSystem" data-parent="#accordion">
		          <div class="list-group">
		            <a href="/users" class="list-group-item list-group-item-action subgroup{{ Request::is('users*') ? ' active' : '' }}"><i class="fas fa-user"></i> Users</a>
		            <a href="/groups" class="list-group-item list-group-item-action subgroup{{ Request::is('groups*') ? ' active' : '' }}"><i class="fas fa-users"></i> Groups</a>
		            <a href="/resources" class="list-group-item list-group-item-action subgroup{{ Request::is('resources*') ? ' active' : '' }}"><i class="fas fa-cubes"></i> Resources</a>
                    <a href="/servers" class="list-group-item list-group-item-action subgroup{{ Request::is('servers*') ? ' active' : '' }}"><i class="fas fa-database"></i> Servers</a>
                    <a href="/sessions" class="list-group-item list-group-item-action subgroup{{ Request::is('sessions*') ? ' active' : '' }}"><i class="fas fa-lock"></i> Sessions</a>      
		            <a href="/domains" class="list-group-item list-group-item-action subgroup{{ Request::is('domains*') ? ' active' : '' }}"><i class="fas fa-compass"></i> Domains</a>
		            <a href="/websites" class="list-group-item list-group-item-action subgroup{{ Request::is('websites*') ? ' active' : '' }}"><i class="fas fa-laptop"></i> Websites</a>
		            <a href="/settings" class="list-group-item list-group-item-action subgroup{{ Request::is('settings*') ? ' active' : '' }}"><i class="fas fa-cogs"></i> Settings</a>
		          </div>
		        </div>
      
	          </div><!-- /#accordion -->
      
	        </div>
	      </nav>