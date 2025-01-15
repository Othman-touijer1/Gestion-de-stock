<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        /* Table styles */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th, .table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        .table td {
            background-color: #f9f9f9;
        }

        .table tr:nth-child(even) td {
            background-color: #f2f2f2;
        }

        .table tr:hover {
            background-color: #e2e2e2;
        }

        /* Responsive table */
        @media screen and (max-width: 768px) {
            .table {
                font-size: 14px;
            }

            .table th, .table td {
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Historique des produits ajoutés aux dépôts</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Dépôt</th>
                    <th>Quantité</th>
                    <th>Utilisateur</th>
                    <th>Heure</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produitsDepots as $produitDepot)
                    <tr>
                        <td>{{ $produitDepot->produit ? $produitDepot->produit->name : 'Produit inconnu' }}</td>
                        <td>{{ $produitDepot->depot ? $produitDepot->depot->name : 'Dépôt inconnu' }}</td>
                        <td>{{ $produitDepot->quantite }}</td>
                        <td>{{ optional($produitDepot->user)->name ?? 'Utilisateur inconnu' }}</td>
                        <td>{{ $produitDepot->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
