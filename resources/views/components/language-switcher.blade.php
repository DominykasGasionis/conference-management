<div class="dropdown">
    <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        <span id="currentLanguage">
            @if(app()->getLocale() == 'lt')
                🇱🇹 LT
            @else
                🇬🇧 EN
            @endif
        </span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
        <li><a class="dropdown-item" href="{{ route('language.switch', 'lt') }}">🇱🇹 Lietuvių</a></li>
        <li><a class="dropdown-item" href="{{ route('language.switch', 'en') }}">🇬🇧 English</a></li>
    </ul>
</div>
