<ul class="navbar-nav">
@foreach($items as $item)
    <?php $classes = $item->children->count() ? 'dropdown' : '' ?>
    <li class="nav-item <?= $classes ?>">
        <a target="{{ $item->target }}" href="{{ url($item->url) }}" class="nav-link">
            {{ $item->title }}
        </a>
        @if($item->children->count())
            <ul role="menu" class="dropdown-menu">
                @foreach($item->children as $subItem)
                    <li>
                        <a target="{{ $subItem->target }}" href="{{ url($subItem->url) }}">{{ $subItem->title }}</a></li>
                    @if(!$loop->last) <li class="divider"></li> @endif
                @endforeach
            </ul>
        @endif
    </li>
@endforeach
</ul>

{{--<ul class="navbar-nav">--}}
{{--    <li class="nav-item active">--}}
{{--        <a class="nav-link" href="#">Trang chủ<span class="sr-only">(current)</span></a>--}}
{{--    </li>--}}
{{--    <li class="nav-item">--}}
{{--        <a class="nav-link" href="#">Giới thiệu</a>--}}
{{--    </li>--}}
{{--    <li class="nav-item">--}}
{{--        <a class="nav-link" href="#">Các khoản vay</a>--}}
{{--    </li>--}}
{{--    <li class="nav-item">--}}
{{--        <a class="nav-link" href="#">Giải đáp</a>--}}
{{--    </li>--}}
{{--    <li class="nav-item">--}}
{{--        <a class="nav-link" href="#">Liên hệ</a>--}}
{{--    </li>--}}
{{--</ul>--}}
