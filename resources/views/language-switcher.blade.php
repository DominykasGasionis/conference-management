<div class="dropdown">
    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        @if(app()->getLocale() == 'lt')
            🇱🇹 LT
        @else
            🇬🇧 EN
        @endif
    </button>
    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
        <li>
            <a class="dropdown-item {{ app()->getLocale() == 'lt' ? 'active' : '' }}" href="{{ route('language.switch', 'lt') }}">
                🇱🇹 Lietuvių
            </a>
        </li>
        <li>
            <a class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}" href="{{ route('language.switch', 'en') }}">
                🇬🇧 English
            </a>
        </li>
    </ul>
</div>