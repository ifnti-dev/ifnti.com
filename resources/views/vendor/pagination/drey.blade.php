@if ($paginator->hasPages())
    <nav>
        <ul class="switcher-session-concours">
            {{-- Lien vers la page précédente --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true">@include('admin.composants.dash.leftArrow')</li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">@include('admin.composants.dash.leftArrow')</a></li>
            @endif

            {{-- Texte personnalisé provenant des données --}}
            <li class="custom-text"><span>{{"             "}}</span></li>

            {{-- Lien vers la page suivante --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">@include('admin.composants.dash.rightArrow')</a></li>
            @else
                <li class="disabled" aria-disabled="true"><span>@include('admin.composants.dash.rightArrow')</span></li>
            @endif
        </ul>
    </nav>
@endif
