<ul class="list-inline">
  <li class="list-inline-item"><a href="/"><i class="fas fa-home"></i></a></li> 
  @for($i = 0; $i < count($breadcrumbs); $i++)
     <li class="list-inline-item">&#47;</li>
     <li class="list-inline-item">
     @if(array_key_exists('url', $breadcrumbs[$i]))
     <a href="/">
     @endif
     
     @if(array_key_exists('label', $breadcrumbs[$i]))
     {{ $breadcrumbs[$i]['label'] }} 
     @else
     {{ $breadcrumbs[$i] }}
     @endif

     @if(array_key_exists('url', $breadcrumbs[$i]))
     </a>
     @endif
     </li>
  @endfor
</ul>