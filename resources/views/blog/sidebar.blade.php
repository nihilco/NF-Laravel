                <div class="card mt-3">
                    <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
	                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		        <a href="#" class="btn btn-primary">Go somewhere</a>
		    </div>
		</div>

		<div class="mt-3">
		  <h4>Archives</h4>
		  <ul>
		    @foreach($archives as $archive)
		      <li><a href="/posts?year={{ $archive['year'] }}&month={{ $archive['month'] }}">{{ $archive['month'] . ' ' . $archive['year'] }}</a></li>
		    @endforeach
		  </ul>
		</div>

		