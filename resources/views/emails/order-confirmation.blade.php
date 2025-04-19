<!DOCTYPE html>
<html>
<head>

<style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #1e88e5;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 20px;
            background-color: #f9f9f9;
        }
        .section {
            margin-bottom: 20px;
            padding: 15px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .section-title {
            color: #1e88e5;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>

    <meta charset="utf-8">
    <title>Confirmation de commande</title>
</head>
<body>
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; font-family: Arial, sans-serif;">
        <h2 style="color: #333;">Confirmation de votre commande</h2>
        
        <p>Bonjour {{ $order->customer_name }},</p>
        
        <p>Nous vous confirmons la réception de votre commande #{{ $order->id }}.</p>
        
        <h3 style="color: #333; margin-top: 20px;">Détails de votre commande :</h3>
        <ul style="list-style: none; padding: 0;">
            <li><strong>Produit :</strong> {{ $order->product->nom }}</li>
            <li><strong>Quantité :</strong> {{ $order->quantity }}</li>
            <li><strong>Prix unitaire :</strong> {{ number_format($order->product->prix, 0, ',', ' ') }} FCFA</li>
            <li><strong>Total :</strong> {{ number_format($order->total_price, 0, ',', ' ') }} FCFA</li>
            <li><strong>Méthode de paiement :</strong> {{ ucfirst($order->payment_method) }}</li>
        </ul>

        <h3 style="color: #333; margin-top: 20px;">Informations de livraison :</h3>
        <ul style="list-style: none; padding: 0;">
            <li><strong>Nom :</strong> {{ $order->customer_name }}</li>
            <li><strong>Email :</strong> {{ $order->customer_email }}</li>
            <li><strong>Téléphone :</strong> {{ $order->customer_phone }}</li>
            <li><strong>Adresse :</strong> {{ $order->customer_address }}</li>
        </ul>

        <p style="margin-top: 20px;">Nous vous tiendrons informé de l'avancement de votre commande.</p>
        
        <p>Cordialement,<br>L'équipe NE DON ENERGY</p>
    </div>
</body>
</html> 