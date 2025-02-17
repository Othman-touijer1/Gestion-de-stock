<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Facture {{ $facture->numero_facture }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
        }
        .company-info, .invoice-info {
            width: 45%;
        }
        .invoice-title {
            text-align: center;
            font-size: 24px;
            margin: 20px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .totals {
            width: 300px;
            margin-left: auto;
            margin-right: 0;
        }
        .total-row {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
        }
        .footer {
            margin-top: 40px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="company-info">
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
                <td>{{ number_format($ligne->prix_ht, 2) }} dh</td>
                <td>{{ $ligne->quantite }}</td>
                <td>{{ $ligne->tva }}%</td>
                <td>{{ $ligne->remise }}%</td>
                <td>{{ number_format($ligne->total_ht, 2) }} dh</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="totals">
        <div class="total-row">
            <span>Total HT:</span>
            <span>{{ number_format($facture->total_ht, 2) }} dh</span>
        </div>
        <div class="total-row">
            <span>Total TVA:</span>
            <span>{{ number_format($facture->total_tva, 2) }} dh</span>
        </div>
        <div class="total-row" style="font-weight: bold; border-top: 1px solid #000;">
            <span>Total TTC:</span>
            <span>{{ number_format($facture->total_ttc, 2) }} dh</span>
        </div>
    </div>
    <div class="footer">
        <p>Merci pour votre confiance. Pour toute question concernant cette facture, veuillez nous contacter.</p>
        <p>Conditions de paiement: Paiement à 30 jours</p>
    </div>
</body>
</html>