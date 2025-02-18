<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Facture {{ $facture->numero_facture }}</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #333;
            background-color: #f9f9f9;
            margin: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border-radius: 5px;
        }
        .company-info, .invoice-info {
            width: 45%;
        }
        .invoice-title {
            text-align: center;
            font-size: 28px;
            margin: 20px 0;
            color: #4CAF50;
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        .totals {
            width: 300px;
            margin-left: auto;
            margin-right: 0;
            padding: 15px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .total-row {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
            border-bottom: 1px solid #ddd;
        }
        .total-row:last-child {
            border-bottom: none;
            font-weight: bold;
            color: #4CAF50;
        }
        .footer {
            margin-top: 40px;
            font-size: 12px;
            color: #777;
            text-align: center;
            padding: 10px;
            border-top: 1px solid #ddd;
        }
        body::after {
            content: "FACTURE";
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-45deg);
            font-size: 80px;
            color: rgba(0, 0, 0, 0.1);
            z-index: -1;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="company-info">
            <img src="chemin/vers/logo.png" alt="Logo" style="width: 150px; margin-bottom: 10px;">
            <h3>{{ $facture->societe }}</h3>
            <p>{{ $facture->adresse }}</p>
            <p>Tél: {{ $facture->telephone }}</p>
        </div>
        <div class="invoice-info">
            <h3>Facturé à:</h3>
            <p>{{ $facture->client }}</p>
            <p>{{ $facture->adresse_client }}</p>
            <p>Facture #: {{ $facture->numero_facture }}</p>
            <p>Date: {{ $facture->date_facture }}</p>
        </div>
    </div>
    <div class="invoice-title">FACTURE</div>
    <table>
        <thead>
            <tr>
                <th>Description</th>
                <th>Prix unitaire</th>
                <th>Quantité</th>
                <th>TVA (%)</th>
                <th>Remise (%)</th>
                <th>Total HT</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lignes as $ligne)
            <tr>
                <td>{{ $ligne->designation }}</td>
                <td>{{ number_format($ligne->prix_ht, 2) }} DH</td>
                <td>{{ $ligne->quantite }}</td>
                <td>{{ $ligne->tva }}%</td>
                <td>{{ $ligne->remise }}%</td>
                <td>{{ number_format($ligne->total_ht, 2) }} DH</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="totals">
        <div class="total-row">
            <span>Total HT:</span>
            <span>{{ number_format($facture->total_ht, 2) }} DH</span>
        </div>
        <div class="total-row">
            <span>Total TVA:</span>
            <span>{{ number_format($facture->total_tva, 2) }} DH</span>
        </div>
        <div class="total-row" style="font-weight: bold; border-top: 1px solid #000;">
            <span>Total TTC:</span>
            <span>{{ number_format($facture->total_ttc, 2) }} DH</span>
        </div>
    </div>
    <div class="footer">
        <p>Merci pour votre confiance. Pour toute question concernant cette facture, veuillez nous contacter.</p>
        <p>Conditions de paiement: Paiement à 30 jours</p>
        <p>📞 Tél: {{ $facture->telephone }} | ✉️ Email: info@votresociete.com</p>
    </div>
</body>
</html>