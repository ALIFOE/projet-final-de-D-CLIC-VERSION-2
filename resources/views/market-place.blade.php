<x-app-layout>
    <head>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <style>
            .product-card {
                transition: all 0.3s ease;
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            }
            .product-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            }
            .category-tab {
                cursor: pointer;
                transition: all 0.3s ease;
            }
            .category-tab.active {
                background-color: #1e88e5;
                color: white;
            }
            .product-image {
                height: 200px;
                object-fit: cover;
            }
            .price-tag {
                font-size: 1.5rem;
                font-weight: bold;
                color: #1e88e5;
            }
        </style>
    </head>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl font-bold mb-8 text-center section-title">Market place</h1>
                    
                    <!-- Catégories -->
                    <div class="flex flex-wrap gap-4 mb-8 justify-center">
                        <div class="category-tab active px-4 py-2 rounded-lg" data-category="all">Tous les produits</div>
                        <div class="category-tab px-4 py-2 rounded-lg" data-category="panels">Panneaux Solaires</div>
                        <div class="category-tab px-4 py-2 rounded-lg" data-category="inverters">Onduleurs</div>
                        <div class="category-tab px-4 py-2 rounded-lg" data-category="batteries">Batteries</div>
                        <div class="category-tab px-4 py-2 rounded-lg" data-category="regulators">Régulateurs</div>
                        <div class="category-tab px-4 py-2 rounded-lg" data-category="accessories">Accessoires</div>
                    </div>

                    <!-- Produits -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Panneaux Solaires -->
                        <div class="product-card" data-category="panels">
                            <img src="{{ asset('images/panneaux.jpg') }}" alt="Panneau Solaire 400W" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Panneau Solaire 400W Monocristallin</h3>
                                <p class="text-gray-600 mb-4">Haute efficacité, idéal pour les installations résidentielles et commerciales.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold">350 000 FCFA</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="product-card" data-category="panels">
                            <img src="{{ asset('images/panneau 2.jpg') }}" alt="Panneau Solaire 550W" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Panneau Solaire 550W Bifacial</h3>
                                <p class="text-gray-600 mb-4">Technologie bifaciale pour une production optimale des deux côtés.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold">450 000 FCFA</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="product-card" data-category="panels">
                            <img src="{{ asset('images/panneau-poli.jpg') }}" alt="Panneau Solaire 300W" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Panneau Solaire 300W Polycristallin</h3>
                                <p class="text-gray-600 mb-4">Solution économique pour les petites installations.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold">250 000 FCFA</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="product-card" data-category="panels">
                            <img src="{{ asset('images/paneau-mono.jpg') }}" alt="Panneau Solaire 600W" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Panneau Solaire 600W Monocristallin</h3>
                                <p class="text-gray-600 mb-4">Haute puissance pour les installations industrielles.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold">500 000 FCFA</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="product-card" data-category="panels">
                            <img src="{{ asset('images/panneau-flexible.jpg') }}" alt="Panneau Solaire Flexible" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Panneau Solaire Flexible 200W</h3>
                                <p class="text-gray-600 mb-4">Idéal pour les surfaces courbes et les applications mobiles.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold">300 000 FCFA</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Onduleurs -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="product-card" data-category="inverters">
                            <img src="{{ asset('images/onduleur1.jpg') }}" alt="Onduleur Hybride 5kW" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Onduleur Hybride 5kW</h3>
                                <p class="text-gray-600 mb-4">Compatible avec batterie et réseau, idéal pour les maisons moyennes.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold">1 200 000 FCFA</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="product-card" data-category="inverters">
                            <img src="{{ asset('images/onduleur2.jpg') }}" alt="Onduleur 3kW" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Onduleur 3kW Standard</h3>
                                <p class="text-gray-600 mb-4">Solution économique pour les petites installations.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold">800 000 FCFA</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="product-card" data-category="inverters">
                            <img src="{{ asset('images/products/onduleur-10kw.jpg') }}" alt="Onduleur 10kW" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Onduleur 10kW Industriel</h3>
                                <p class="text-gray-600 mb-4">Puissance élevée pour les applications commerciales et industrielles.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold">2 500 000 FCFA</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="product-card" data-category="inverters">
                            <img src="{{ asset('images/products/onduleur-micro.jpg') }}" alt="Micro-onduleur" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Micro-onduleur 800W</h3>
                                <p class="text-gray-600 mb-4">Optimisation individuelle pour chaque panneau.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold">400 000 FCFA</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Batteries -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="product-card" data-category="batteries">
                            <img src="{{ asset('images/products/batterie-lithium.jpg') }}" alt="Batterie Lithium" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Batterie Lithium 5kWh</h3>
                                <p class="text-gray-600 mb-4">Haute densité énergétique, longue durée de vie.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold">1 500 000 FCFA</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="product-card" data-category="batteries">
                            <img src="{{ asset('images/products/batterie-gel.jpg') }}" alt="Batterie Gel" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Batterie Gel 200Ah</h3>
                                <p class="text-gray-600 mb-4">Sans entretien, idéale pour les installations solaires.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold">600 000 FCFA</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="product-card" data-category="batteries">
                            <img src="{{ asset('images/products/batterie-agm.jpg') }}" alt="Batterie AGM" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Batterie AGM 100Ah</h3>
                                <p class="text-gray-600 mb-4">Haute performance, maintenance réduite.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold">400 000 FCFA</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="product-card" data-category="batteries">
                            <img src="{{ asset('images/products/batterie-lithium-10kwh.jpg') }}" alt="Batterie Lithium 10kWh" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Batterie Lithium 10kWh</h3>
                                <p class="text-gray-600 mb-4">Capacité élevée pour les installations importantes.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold">2 800 000 FCFA</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Régulateurs -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="product-card" data-category="regulators">
                            <img src="{{ asset('images/products/regulateur-mppt.jpg') }}" alt="Régulateur MPPT" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Régulateur MPPT 60A</h3>
                                <p class="text-gray-600 mb-4">Suivi du point de puissance maximum, haute efficacité.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold">250 000 FCFA</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="product-card" data-category="regulators">
                            <img src="{{ asset('images/products/regulateur-pwm.jpg') }}" alt="Régulateur PWM" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Régulateur PWM 30A</h3>
                                <p class="text-gray-600 mb-4">Solution économique pour les petites installations.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold">150 000 FCFA</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="product-card" data-category="regulators">
                            <img src="{{ asset('images/products/regulateur-mppt-100a.jpg') }}" alt="Régulateur MPPT 100A" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Régulateur MPPT 100A</h3>
                                <p class="text-gray-600 mb-4">Haute puissance pour les grandes installations.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold">400 000 FCFA</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="product-card" data-category="regulators">
                            <img src="{{ asset('images/products/regulateur-mppt-80a.jpg') }}" alt="Régulateur MPPT 80A" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Régulateur MPPT 80A</h3>
                                <p class="text-gray-600 mb-4">Performance intermédiaire pour les installations moyennes.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold">300 000 FCFA</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accessoires -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="product-card" data-category="accessories">
                            <img src="{{ asset('images/products/kit-montage.jpg') }}" alt="Kit de Montage" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Kit de Montage Toiture</h3>
                                <p class="text-gray-600 mb-4">Système complet pour installation sur toit incliné.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold">150 000 FCFA</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="product-card" data-category="accessories">
                            <img src="{{ asset('images/products/cables-solaires.jpg') }}" alt="Câbles Solaires" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Câbles Solaires 6mm²</h3>
                                <p class="text-gray-600 mb-4">Rouleau de 100m, résistant aux UV.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold">80 000 FCFA</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="product-card" data-category="accessories">
                            <img src="{{ asset('images/products/boite-protection.jpg') }}" alt="Boîte de Protection" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Boîte de Protection DC</h3>
                                <p class="text-gray-600 mb-4">Protection contre les surtensions et courts-circuits.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold">50 000 FCFA</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="product-card" data-category="accessories">
                            <img src="{{ asset('images/products/compteur-energie.jpg') }}" alt="Compteur d'Énergie" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Compteur d'Énergie Bidirectionnel</h3>
                                <p class="text-gray-600 mb-4">Mesure la production et la consommation d'énergie.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold">120 000 FCFA</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categoryTabs = document.querySelectorAll('.category-tab');
            const products = document.querySelectorAll('.product-card');

            categoryTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // Retirer la classe active de tous les onglets
                    categoryTabs.forEach(t => t.classList.remove('active'));
                    // Ajouter la classe active à l'onglet cliqué
                    this.classList.add('active');

                    const category = this.dataset.category;
                    
                    // Afficher/masquer les produits selon la catégorie
                    products.forEach(product => {
                        if (category === 'all' || product.dataset.category === category) {
                            product.style.display = 'block';
                        } else {
                            product.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</x-app-layout> 