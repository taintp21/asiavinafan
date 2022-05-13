<div class="float-right">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @php $link = ""; @endphp
            @for($i = 1; $i <= count(Request::segments()); $i++)
                @if($i < count(Request::segments()) & $i > 0)
                    @php $link .= "/" . Request::segment($i); @endphp
                    @if ($i == 1)
                        <li class="breadcrumb-item">
                            <a href="{{$link}}"><i class="fa-solid fa-house"></i></a>
                        </li>
                    @else
                        <li class="breadcrumb-item">
                            <a href="{{$link}}">{{ ucwords(str_replace('-',' ',Request::segment($i)))}}</a>
                        </li>
                    @endif
                @else
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ucwords(str_replace('-',' ',Request::segment($i)))}}
                    </li>
                @endif
            @endfor
        </ol>
    </nav>
</div>
