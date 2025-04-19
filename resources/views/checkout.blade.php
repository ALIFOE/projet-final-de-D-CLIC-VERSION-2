<x-app-layout>
    <head>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    </head>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold mb-6">Finaliser votre commande</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-semibold mb-4">Détails du produit</h3>
                            <div class="bg-gray-50 p-4 rounded-lg mb-4">
                                <h4 class="font-medium">{{ $product->nom }}</h4>
                                <p class="text-gray-600">Prix unitaire : {{ number_format($product->prix, 0, ',', ' ') }} FCFA</p>
                            </div>

                            <form action="{{ route('process.payment') }}" method="POST" class="space-y-4" id="payment-form">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">

                                <div>
                                    <label for="quantity" class="block text-sm font-medium text-gray-700">Quantité</label>
                                    <input type="number" name="quantity" id="quantity" min="1" value="1" 
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        onchange="updateTotal()">
                                </div>

                                <div>
                                    <label for="total_amount" class="block text-sm font-medium text-gray-700">Total</label>
                                    <input type="text" name="total_amount" id="total_amount" readonly 
                                        value="{{ $product->prix }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 bg-gray-50 shadow-sm">
                                </div>

                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">Nom complet</label>
                                    <input type="text" name="name" id="name" required 
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" name="email" id="email" required 
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                </div>

                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Téléphone</label>
                                    <input type="tel" name="phone" id="phone" required 
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                </div>

                                <div>
                                    <label for="address" class="block text-sm font-medium text-gray-700">Adresse de livraison</label>
                                    <textarea name="address" id="address" rows="3" required 
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                                </div>

                                <div>
                                    <label for="payment_method" class="block text-sm font-medium text-gray-700">Méthode de paiement</label>
                                    <select name="payment_method" id="payment_method" required 
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <option value="mobile_money">Mobile Money</option>
                                        <option value="bank_transfer">Virement bancaire</option>
                                        <option value="cash">Paiement en espèces</option>
                                    </select>
                                </div>

                                <div class="pt-4">
                                    <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700" id="submit-button">
                                        Confirmer la commande
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold mb-4">Instructions de paiement</h3>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="mb-4">
                                    <h4 class="font-medium mb-2">Mobile Money</h4>
                                    <p>1. Envoyez le montant au numéro : +228 XX XX XX XX</p>
                                    <p>2. Conservez votre numéro de transaction</p>
                                </div>

                                <div class="mb-4">
                                    <h4 class="font-medium mb-2">Virement bancaire</h4>
                                    <p>Banque : XXX</p>
                                    <p>IBAN : XX XX XX XX</p>
                                    <p>BIC : XXXXXX</p>
                                </div>

                                <div>
                                    <h4 class="font-medium mb-2">Paiement en espèces</h4>
                                    <p>Paiement à la livraison ou à notre bureau :</p>
                                    <p>Adresse : XXX</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateTotal() {
            const quantity = document.getElementById('quantity').value;
            const price = {{ $product->prix }};
            const total = quantity * price;
            document.getElementById('total_amount').value = total;
        }

        // Empêcher la soumission multiple du formulaire
        document.getElementById('payment-form').addEventListener('submit', function(e) {
            const submitButton = document.getElementById('submit-button');
            submitButton.disabled = true;
            submitButton.innerHTML = 'Traitement en cours...';
        });
    </script>
</x-app-layout> 