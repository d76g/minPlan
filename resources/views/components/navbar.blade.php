<div>
    <div class="flex ">
        <div x-data="{ showDropdown: false}" class="flex flex-row-reverse" id="langMenu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <button @click="showDropdown = ! showDropdown " class="mt-4 mr-4"><span class="material-icons-outlined mainColor">translate</span></button>
            <select x-show="showDropdown" x-cloak x-transition name="lang" id="langs" class="bg-gray-100 rounded-lg py-2 border-slate-500 text-sm mr-2 mt-2 changeLang">
                <option class="bg-gray-100" value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                <option class="bg-gray-100" value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>France</option>
                <option class="bg-gray-100" value="da" {{ session()->get('locale') == 'da' ? 'selected' : '' }}>Danish</option>
                <option class="bg-gray-100" value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}>Spanish</option>
                <option class="bg-gray-100" value="no" {{ session()->get('locale') == 'no' ? 'selected' : '' }}>Norwegian</option>
                <option class="bg-gray-100" value="sv" {{ session()->get('locale') == 'sv' ? 'selected' : '' }}>Swedish</option>
                <option class="bg-gray-100" value="rw" {{ session()->get('locale') == 'rw' ? 'selected' : '' }}>Kinyarwanda</option>
                <option class="bg-gray-100" value="ur" {{ session()->get('locale') == 'ur' ? 'selected' : '' }}>Urdu</option>
            </select>
        </div>
    </div>
</div>