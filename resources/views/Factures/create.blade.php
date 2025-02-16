<!DOCTYPE html>
<html>
<head>
    <title>Nouvelle Facture</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container mt-4">
        <h2>Nouvelle Facture</h2>
        <form id="factureForm" method="POST" action="{{ route('factures.store') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Numéro de facture</label>
                        <input type="text" name="numero_facture" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Date</label>
                        <input type="date" name="date_facture" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Client</label>
                        <select name="client_id" id="client_id" class="form-control select2" required>
                            <option value="">Sélectionner un client</option>
                            @foreach($clients as $client)
                                <option value="{{ $client->id }}" 
                                    data-entreprise="{{ $client->entreprise }}"
                                    data-adresse="{{ $client->adresse }}"
                                    data-telephone="{{ $client->telephone }}">
                                    {{ $client->entreprise }} - {{ $client->responsable }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Adresse client</label>
                        <input type="text">
                    </div>
                    <div class="mb-3">
                        <label>Téléphone client</label>
                        <input type="text" id="telephone_client" class="form-control" readonly>
                    </div>
                </div>
            </div>

            <h4>Lignes de facture</h4>
            <table class="table" id="lignesTable">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>TVA (%)</th>
                        <th>Remise (%)</th>
                        <th>Total HT</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

            <button type="button" class="btn btn-secondary mb-3" onclick="ajouterLigne()">Ajouter une ligne</button>

            <div class="row justify-content-end">
                <div class="col-md-4">
                    <table class="table">
                        <tr>
                            <th>Total HT</th>
                            <td id="totalHT">0.00 €</td>
                        </tr>
                        <tr>
                            <th>Total TVA</th>
                            <td id="totalTVA">0.00 €</td>
                        </tr>
                        <tr>
                            <th>Total TTC</th>
                            <td id="totalTTC">0.00 €</td>
                        </tr>
                    </table>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer la facture</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        // $(document).ready(function() {
        //     $('.select2').select2();

        //     $('#client_id').change(function() {
        //         const selectedOption = $(this).find('option:selected');
        //         $('#adresse_client').val(selectedOption.data('adresse'));
        //         $('#telephone_client').val(selectedOption.data('telephone'));
        //     });
        // });

        function ajouterLigne() {
            const newRow = `
                <tr>
                    <td>
                        <select name="lignes[][produit_id]" class="form-control select2-produit" required>
                            <option value="">Sélectionner un produit</option>
                            @foreach($produits as $produit)
                                <option value="{{ $produit->id }}" 
                                    data-titre="{{ $produit->titre }}">
                                    {{ $produit->titre }}
                                </option>
                            @endforeach
                        </select>
                    </td>
                    <td><input type="number" name="lignes[][quantite]" class="form-control quantite" required></td>
                    <td><input type="number" step="0.01" name="lignes[][prix_unitaire]" class="form-control prix" required></td>
                    <td><input type="number" step="0.01" name="lignes[][tva]" class="form-control tva" required></td>
                    <td><input type="number" step="0.01" name="lignes[][remise]" class="form-control remise" value="0"></td>
                    <td class="totalLigne">0.00 €</td>
                    <td><button type="button" class="btn btn-danger btn-sm" onclick="supprimerLigne(this)">Supprimer</button></td>
                </tr>
            `;
            $('#lignesTable tbody').append(newRow);
            $('.select2-produit').select2();
        }

        function supprimerLigne(button) {
            $(button).closest('tr').remove();
            calculerTotaux();
        }

        $(document).on('input', '.quantite, .prix, .tva, .remise', function() {
            calculerTotaux();
        });

        function calculerTotaux() {
            let totalHT = 0;
            let totalTVA = 0;

            $('#lignesTable tbody tr').each(function() {
                const quantite = parseFloat($(this).find('.quantite').val()) || 0;
                const prix = parseFloat($(this).find('.prix').val()) || 0;
                const tva = parseFloat($(this).find('.tva').val()) || 0;
                const remise = parseFloat($(this).find('.remise').val()) || 0;

                const sousTotal = quantite * prix;
                const remiseMontant = (sousTotal * remise) / 100;
                const totalHTLigne = sousTotal - remiseMontant;
                const tvaMontant = (totalHTLigne * tva) / 100;

                totalHT += totalHTLigne;
                totalTVA += tvaMontant;

                $(this).find('.totalLigne').text(totalHTLigne.toFixed(2) + ' €');
            });

            const totalTTC = totalHT + totalTVA;

            $('#totalHT').text(totalHT.toFixed(2) + ' €');
            $('#totalTVA').text(totalTVA.toFixed(2) + ' €');
            $('#totalTTC').text(totalTTC.toFixed(2) + ' €');
        }

        // Ajouter une première ligne au chargement
        ajouterLigne();
    </script>
</body>
</html>