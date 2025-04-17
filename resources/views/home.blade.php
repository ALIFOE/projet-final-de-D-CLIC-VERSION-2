<!-- resources/views/home.blade.php -->
<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Né Don Energy - Gestion d'installations solaires photovoltaïques</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
        
        <style>
            body {
                font-family: 'Poppins', sans-serif;
                background-image: url('{{ asset('images/image-back.png') }}');
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                background-color: #f8f9fa;
            }
            .solar-gradient {
                background: linear-gradient(135deg, #1e88e5 0%, #0d47a1 100%);
            }
            .card {
                transition: all 0.3s ease;
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            }
            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            }
            .stat-card {
                border-left: 4px solid #1e88e5;
            }
            .btn-primary {
                background-color: #1e88e5;
                color: white;
                padding: 0.5rem 1.5rem;
                border-radius: 5px;
                transition: all 0.3s ease;
            }
            .btn-primary:hover {
                background-color: #0d47a1;
            }
            .hero-section {
                min-height: 500px;
                background-image: url('/images/solar-panels.jpg');
                background-size: cover;
                background-position: center;
                position: relative;
            }
            .hero-section::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 99%;
                height: 100%;
                background-image: url('{{ asset('images/4813.jpg') }}');
                /* background: rgba(0, 0, 0, 0.5); */
            }
            .feature-icon {
                font-size: 2.5rem;
                color: #1e88e5;
            }
            .navbar-active {
                color: #1e88e5;
                border-bottom: 2px solid #1e88e5;
            }
            .content-section {
                background-color: rgba(255, 255, 255, 0.95);
                border-radius: 12px;
                padding: 2rem;
                margin: 1rem;
                
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            }
        </style>
    </head>

    <section class="hero-section relative flex items-center">
        <div class="container mx-auto px-6 z-10 text-center md:text-left">
            <div class="md:w-2/3">
                <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight">Optez pour la durabilité et meilleure performance de vos installations solaires</h1>
                <p class="mt-4 text-xl text-gray-200">Suivi en temps réel, analyses avancées et maintenance prédictive pour maximiser votre production d'énergie photovoltaïque.</p>
                <div class="mt-8 flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4 justify-center md:justify-start">
                    @auth
                        <a href="{{ route('service') }}" class="btn-primary text-center py-3 px-6 rounded-md text-lg font-medium hover:bg-blue-700">Démarrer un service</a>
                    @else
                        <a href="{{ route('register') }}" class="btn-primary text-center py-3 px-6 rounded-md text-lg font-medium hover:bg-blue-700">Démarrer un service</a>
                    @endauth
                    <a href="{{ route('about') }}" class="bg-white text-blue-600 text-center py-3 px-6 rounded-md text-lg font-medium hover:bg-gray-100">En savoir plus</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto px-6">
            <div class="content-section">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800">Pourquoi choisir Né Don Energy ?</h2>
                    <p class="mt-4 text-xl text-gray-600">Une solution complète pour optimiser vos installations photovoltaïques</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="card bg-white p-8 text-center">
                        <div class="mb-4">
                            <i class="fas fa-chart-line feature-icon"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Suivi en temps réel</h3>
                        <p class="text-gray-600">Visualisez la production de vos panneaux solaires en direct et accédez à des statistiques détaillées.</p>
                    </div>
                    
                    <div class="card bg-white p-8 text-center">
                        <div class="mb-4">
                            <i class="fas fa-tools feature-icon"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Maintenance prédictive</h3>
                        <p class="text-gray-600">Détectez les anomalies avant qu'elles n'impactent votre production et planifiez les interventions.</p>
                    </div>
                    
                    <div class="card bg-white p-8 text-center">
                        <div class="mb-4">
                            <i class="fas fa-sun feature-icon"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Prévisions météo</h3>
                        <p class="text-gray-600">Anticipez votre production grâce à l'intégration des données météorologiques locales.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fonctionnalites" class="py-16">
        <div class="container mx-auto px-6">
            <div class="content-section">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800">Fonctionnalités adaptées à chaque profil</h2>
                    <p class="mt-4 text-xl text-gray-600">Une solution polyvalente pour tous les acteurs du photovoltaïque</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="card bg-white">
                        <div class="p-6 solar-gradient">
                            <h3 class="text-2xl font-bold text-white">Client</h3>
                        </div>
                        <div class="p-6">
                            <ul class="space-y-3">
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    <span>Suivi de production en temps réel</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    <span>Comparaison avec prévisions météo</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    <span>Statistiques de rendement</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    <span>Tableau de bord personnalisé</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    <span>Alertes et notifications</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    <span>Rapports téléchargeables</span>
                                </li>
                            </ul>
                            <div class="mt-6">
                                <a href="{{ route('register') }}?role=client" class="btn-primary block text-center">Devenir client</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card bg-white">
                        <div class="p-6 solar-gradient">
                            <h3 class="text-2xl font-bold text-white">Technicien</h3>
                        </div>
                        <div class="p-6">
                            <ul class="space-y-3">
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    <span>Gestion des installations</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    <span>Suivi de performance</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    <span>Détection d'anomalies</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    <span>Calendrier des interventions</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    <span>Recommandations d'optimisation</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    <span>Historique des maintenances</span>
                                </li>
                            </ul>
                            <div class="mt-6">
                                <a href="{{ route('register') }}?role=technicien" class="btn-primary block text-center">Devenir technicien</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card bg-white">
                        <div class="p-6 solar-gradient">
                            <h3 class="text-2xl font-bold text-white">Administrateur</h3>
                        </div>
                        <div class="p-6">
                            <ul class="space-y-3">
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    <span>Tableau de bord global</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    <span>Gestion des utilisateurs</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    <span>Suivi de toutes les installations</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    <span>Statistiques avancées</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    <span>Rapports analytiques</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    <span>Configuration système</span>
                                </li>
                            </ul>
                            <div class="mt-6">
                                <a href="{{ route('contact') }}" class="btn-primary block text-center">Nous contacter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Graphiques et données en temps réel</h2>
                <p class="mt-4 text-xl text-gray-600">Aperçu des fonctionnalités de visualisation</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="card bg-white p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Production journalière</h3>
                    <div class="h-80">
                        <canvas id="dailyProductionChart"></canvas>
                    </div>
                </div>
                
                <div class="card bg-white p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Comparaison Production vs Consommation</h3>
                    <div class="h-80">
                        <canvas id="comparisonChart"></canvas>
                    </div>
                </div>
            </div>
            
            <div class="mt-8">
                <div class="card bg-white p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Performance mensuelle</h3>
                    <div class="h-80">
                        <canvas id="monthlyPerformanceChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Témoignages de nos clients</h2>
                <p class="mt-4 text-xl text-gray-600">Ce que nos utilisateurs disent de Né Don Energy</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card bg-white p-8">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Grâce à Né Don Energy, j'ai augmenté le rendement de mon installation de 15% en détectant rapidement des panneaux défectueux. L'interface est intuitive et les graphiques sont très clairs."</p>
                    <div class="mt-6 flex items-center">
                        <div class="h-12 w-12 rounded-full bg-gray-300 flex items-center justify-center text-gray-600 text-xl font-bold">JD</div>
                        <div class="ml-4">
                            <p class="font-semibold">Jean Dupont</p>
                            <p class="text-sm text-gray-500">Propriétaire résidentiel</p>
                        </div>
                    </div>
                </div>
                
                <div class="card bg-white p-8">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"En tant que technicien, cette plateforme a révolutionné ma façon de travailler. Les alertes automatiques me permettent d'intervenir avant même que le client ne remarque un problème."</p>
                    <div class="mt-6 flex items-center">
                        <div class="h-12 w-12 rounded-full bg-gray-300 flex items-center justify-center text-gray-600 text-xl font-bold">ML</div>
                        <div class="ml-4">
                            <p class="font-semibold">Marie Lefort</p>
                            <p class="text-sm text-gray-500">Technicienne solaire</p>
                        </div>
                    </div>
                </div>
                
                <div class="card bg-white p-8">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Notre entreprise gère plus de 50 installations et Né Don Energy nous a permis de centraliser toutes les données. Les rapports automatiques nous font gagner un temps précieux."</p>
                    <div class="mt-6 flex items-center">
                        <div class="h-12 w-12 rounded-full bg-gray-300 flex items-center justify-center text-gray-600 text-xl font-bold">PG</div>
                        <div class="ml-4">
                            <p class="font-semibold">Pierre Gagnon</p>
                            <p class="text-sm text-gray-500">Gestionnaire de parc solaire</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-blue-900 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">Prêt à optimiser vos installations solaires ?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Rejoignez les milliers d'utilisateurs qui font confiance à Né Don Energy pour maximiser la rentabilité de leurs panneaux photovoltaïques.</p>
            <a href="{{ route('register') }}" class="bg-white text-blue-900 py-3 px-8 rounded-md text-lg font-medium hover:bg-gray-100 transition duration-300">Créer un compte gratuitement</a>
        </div>
    </section>

    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-solar-panel text-blue-400 text-3xl mr-2"></i>
                        <span class="text-2xl font-bold">Né Don Energy</span>
                    </div>
                    <p class="text-gray-400">La solution complète pour le suivi et l'optimisation de vos installations solaires photovoltaïques.</p>
                    <div class="flex mt-4 space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Liens rapides</h3>
                    <ul class="space-y-2">
                        <li><a href="/home" class="text-gray-400 hover:text-white transition duration-300">Accueil</a></li>
                        <li><a href="/fonctionnalite" class="text-gray-400 hover:text-white transition duration-300">Fonctionnalités</a></li>
                        <li><a href="/tarifs" class="text-gray-400 hover:text-white transition duration-300">Tarifs</a></li>
                        <li><a href="/about" class="text-gray-400 hover:text-white transition duration-300">À propos</a></li>
                        <li><a href="contact" class="text-gray-400 hover:text-white transition duration-300">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="/suivi-production" class="text-gray-400 hover:text-white transition duration-300">Suivi de production</a></li>
                        <li><a href="/maintenance-predictive" class="text-gray-400 hover:text-white transition duration-300">Maintenance prédictive</a></li>
                        <li><a href="/optimisation" class="text-gray-400 hover:text-white transition duration-300">Optimisation de rendement</a></li>
                        <li><a href="/assistance" class="text-gray-400 hover:text-white transition duration-300">Assistance technique</a></li>
                        <li><a href="/formation" class="text-gray-400 hover:text-white transition duration-300">Formation</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-2 text-blue-400"></i>
                            <span class="text-gray-400">123 Rue du Soleil, 75001 Paris, France</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mt-1 mr-2 text-blue-400"></i>
                            <span class="text-gray-400">+33 1 23 45 67 89</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mt-1 mr-2 text-blue-400"></i>
                            <span class="text-gray-400">contact@Né Don Energy.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400">&copy; {{ date('Y') }} Né Don Energy. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.min.js" defer></script>
    <script>
        // Graphique de production journalière
        const dailyProductionCtx = document.getElementById('dailyProductionChart').getContext('2d');
        const dailyProductionChart = new Chart(dailyProductionCtx, {
            type: 'line',
            data: {
                labels: ['6h', '8h', '10h', '12h', '14h', '16h', '18h', '20h'],
                datasets: [{
                    label: 'Production (kW)',
                    data: [0.2, 1.5, 3.8, 5.2, 4.9, 3.5, 1.2, 0.1],
                    borderColor: '#1e88e5',
                    backgroundColor: 'rgba(30, 136, 229, 0.1)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Puissance (kW)'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Heure'
                        }
                    }
                }
            }
        });

        // Graphique de comparaison production vs consommation
        const comparisonCtx = document.getElementById('comparisonChart').getContext('2d');
        const comparisonChart = new Chart(comparisonCtx, {
            type: 'bar',
            data: {
                labels: ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
                datasets: [
                    {
                        label: 'Production (kWh)',
                        data: [28, 32, 35, 27, 30, 25, 22],
                        backgroundColor: 'rgba(30, 136, 229, 0.8)',
                    },
                    {
                        label: 'Consommation (kWh)',
                        data: [22, 24, 25, 26, 23, 30, 28],
                        backgroundColor: 'rgba(255, 152, 0, 0.8)',
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Énergie (kWh)'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Jour'
                        }
                    }
                }
            }
        });

        // Graphique de performance mensuelle
        const monthlyPerformanceCtx = document.getElementById('monthlyPerformanceChart').getContext('2d');
        const monthlyPerformanceChart = new Chart(monthlyPerformanceCtx, {
            type: 'radar',
            data: {
                labels: ['Production', 'Efficacité', 'Maintenance', 'Météo', 'Rendement'],
                datasets: [{
                    label: 'Performance',
                    data: [85, 90, 75, 80, 88],
                    backgroundColor: 'rgba(30, 136, 229, 0.2)',
                    borderColor: '#1e88e5',
                    borderWidth: 2,
                    pointBackgroundColor: '#1e88e5',
                    pointBorderColor: '#fff',
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: '#1e88e5',
                    pointHoverBorderColor: '#fff',
                    pointHitRadius: 10,
                    pointBorderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                    }
                },
                scales: {
                    r: {
                        beginAtZero: true,
                        max: 100,
                        ticks: {
                            stepSize: 20
                        }
                    }
                }
            }
        });
    </script>
</x-app-layout>