<x-app-layout>
    <head>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    </head>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl font-bold mb-8 text-center section-title">Nos Tarifs</h1>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Offre Starter -->
                        <div class="pricing-card">
                            <div class="text-center mb-6">
                                <h2 class="text-2xl font-bold text-gray-800">Starter</h2>
                                <p class="text-gray-600 mt-2">Parfait pour les particuliers</p>
                                <div class="mt-4">
                                    <span class="price-tag">9000cfa</span>
                                    <span class="text-gray-600">/mois</span>
                                </div>
                            </div>
                            <ul class="pricing-features">
                                <li class="flex items-center">
                                    <i class="fas fa-check"></i>
                                    Suivi d'une installation
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check"></i>
                                    Données en temps réel
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check"></i>
                                    Alertes basiques
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check"></i>
                                    Rapports mensuels
                                </li>
                            </ul>
                            <div class="text-center mt-6">
                                <a href="{{ route('register') }}" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                                    Choisir cette offre
                                </a>
                            </div>
                        </div>

                        <!-- Offre Pro -->
                        <div class="pricing-card popular">
                            <div class="text-center mb-6">
                                <div class="popular-badge">Populaire</div>
                                <h2 class="text-2xl font-bold text-gray-800">Pro</h2>
                                <p class="text-gray-600 mt-2">Pour les professionnels</p>
                                <div class="mt-4">
                                    <span class="price-tag">29,99cfa</span>
                                    <span class="text-gray-600">/mois</span>
                                </div>
                            </div>
                            <ul class="pricing-features">
                                <li class="flex items-center">
                                    <i class="fas fa-check"></i>
                                    Suivi de 5 installations
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check"></i>
                                    Données avancées
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check"></i>
                                    Maintenance prédictive
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check"></i>
                                    Rapports hebdomadaires
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check"></i>
                                    Support prioritaire
                                </li>
                            </ul>
                            <div class="text-center mt-6">
                                <a href="{{ route('register') }}" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                                    Choisir cette offre
                                </a>
                            </div>
                        </div>

                        <!-- Offre Entreprise -->
                        <div class="pricing-card">
                            <div class="text-center mb-6">
                                <h2 class="text-2xl font-bold text-gray-800">Entreprise</h2>
                                <p class="text-gray-600 mt-2">Pour les grands parcs solaires</p>
                                <div class="mt-4">
                                    <span class="price-tag">99,99cfa</span>
                                    <span class="text-gray-600">/mois</span>
                                </div>
                            </div>
                            <ul class="pricing-features">
                                <li class="flex items-center">
                                    <i class="fas fa-check"></i>
                                    Installations illimitées
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check"></i>
                                    Données en temps réel
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check"></i>
                                    Maintenance prédictive avancée
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check"></i>
                                    Rapports personnalisés
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check"></i>
                                    Support 24/7
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check"></i>
                                    API personnalisée
                                </li>
                            </ul>
                            <div class="text-center mt-6">
                                <a href="{{ route('contact') }}" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                                    Nous contacter
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 text-center text-gray-600">
                        <p>Tous nos tarifs incluent la TVA. Paiement sécurisé par carte bancaire.</p>
                        <p class="mt-2">Sans engagement - Résiliable à tout moment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 