<ul class="service_list_box">
    @foreach($sidebarPages as $sidebarPage)
    <li>
        <a class="{{ request()->route('slug') == $sidebarPage->slug ? 'active' : '' }}"
           href="{{ route('page.show', $sidebarPage->slug) }}">
           {{ $sidebarPage->title }}
        </a>
    </li>
    @endforeach                   
</ul>