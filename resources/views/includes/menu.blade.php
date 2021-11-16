@foreach($items as $item)
    <li {!! $item->attributes() !!}>
        {!! Func::menu_link($item, 1) !!}
        @if($item->hasChildren())
            <ul>
                @foreach($item->children() as $child)
                    @if($child->hasChildren())
                    <li>
                    @else
                    <li>
                    @endif
                        {!! Func::menu_link($child, 2) !!}
                        @if($child->hasChildren())
                            <ul class="dropdown-menu">
                                @foreach($child->children() as $child2)
                                    <li>{!! Func::menu_link($child2, 3) !!}</li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
              </ul>
        @endif
    </li>
@endforeach
@if(!auth()->check())
    <li><a href="#0" data-toggle="modal" data-target="#register">Regístrate</a></li>
    <li><a href="#0" data-toggle="modal" data-target="#login_2">Ingresar</a></li>
@else
    <li><a href="{{ url('process/mi-cuenta') }}">Mi Cuenta</a></li>
    <li><a href="{{ url('process/logout') }}">Cerrar Sesión</a></li>
@endif