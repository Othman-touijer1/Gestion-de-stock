<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Devis Professionnel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            line-height: 1.6;
        }
        .devis-header {
            display: flex;
            justify-content: space-between;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
        }
        .client-info, .entreprise-info {
            width: 45%;
        }
        .devis-details {
            margin: 20px 0;
        }
        .devis-line {
            display: grid;
            grid-template-columns: 3fr 1fr 1fr 1fr;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }
        .devis-totals {
            text-align: right;
            margin-top: 20px;
        }
        .devis-footer {
            margin-top: 30px;
            text-align: center;
            font-size: 0.8em;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="devis-header">
        <div class="entreprise-info">
            <strong>Votre Entreprise</strong><br>
            Adresse: 123 Rue de l'Entreprise<br>
            Ville: 75000 Paris<br>
            Téléphone: 01 23 45 67 89<br>
            Email: contact@entreprise.fr
        </div>
        <div class="client-info">
            <strong>Client</strong><br>
            Nom: [Nom du Client]<br>
            Adresse: [Adresse du Client]<br>
            Ville: [Code Postal, Ville]<br>
            Téléphone: [Téléphone]<br>
            Email: [Email]
        </div>
    </div>

    <div class="devis-details">
        <h2>Devis #DEV-2024-001</h2>
        <p>Date: [Date du Jour]</p>

        <div class="devis-line">
            <div>Désignation</div>
            <div>Prix Unitaire</div>
            <div>Quantité</div>
            <div>Total</div>
        </div>
        <div class="devis-line">
            <div>Prestation de Service 1</div>
            <div>500,00 €</div>
            <div>2</div>
            <div>1 000,00 €</div>
        </div>
        <div class="devis-line">
            <div>Prestation de Service 2</div>
            <div>750,00 €</div>
            <div>1</div>
            <div>750,00 €</div>
        </div>
    </div>

    <div class="devis-totals">
        Total HT: 1 750,00 €<br>
        TVA (20%): 350,00 €<br>
        <strong>Total TTC: 2 100,00 €</strong>
    </div>

    <div class="devis-footer">
        Conditions: Validité du devis 30 jours<br>
        Conditions de règlement: 30 jours fin de mois
    </div>
</body>
</html>