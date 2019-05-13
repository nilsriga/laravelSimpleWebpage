<div id="pagination">
    <ul class="pagination right-align">
        {{-- <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li> --}}
        <li class="{{{ (Request::is('articles') ? 'active waves-effect' : 'waves-effect') }}}"><a href="/articles">1</a></li>
        <li class="{{{ (Request::is('articles2') ? 'active' : 'waves-effect') }}}"><a href="/articles2">2</a></li>
        <li class="{{{ (Request::is('articles3') ? 'active' : 'waves-effect') }}}"><a href="articles3">3</a></li>
        {{-- <li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li> --}}
    </ul>
</div>
