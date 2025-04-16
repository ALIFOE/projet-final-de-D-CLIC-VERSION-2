<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @auth
                        {{ __("Bienvenue sur votre tableau de bord, ") }} {{ Auth::user()->prenom ?? Auth::user()->name ?? 'Utilisateur' }}!
                    @else
                        {{ __("Veuillez vous connecter pour accéder au tableau de bord.") }}
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
