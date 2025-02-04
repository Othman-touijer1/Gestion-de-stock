<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>TR STORE - Navigation Verticale</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
    <style>
        :root {
            --primary: #4f46e5;
            --dark: #1e293b;
            --light: #f8fafc;
            --sidebar-width: 250px;
        }

        /* Layout de base */
        body {
            min-height: 100vh;
            margin: 0;
            background-color: var(--light);
        }

        /* Navigation verticale */
        .vertical-nav {
            position: fixed;
            top: 0;
            left: 0;
            width: var(--sidebar-width);
            height: 100vh;
            background: linear-gradient(180deg, var(--dark), #2d3748);
            padding-top: 3.5rem;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        /* Logo et titre */
        .site-title {
            color: white;
            font-size: 1.5rem;
            padding: 1rem;
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 1rem;
        }

        /* Menu items */
        .nav-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nav-item {
            margin: 0.5rem 0;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 0.75rem 1.5rem;
            color: rgba(255,255,255,0.8) !important;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            background: rgba(255,255,255,0.1);
            color: white !important;
            padding-left: 2rem;
        }

        .nav-link i {
            width: 20px;
            margin-right: 10px;
        }

        /* Séparateurs de sections */
        .nav-section {
            color: var(--primary);
            font-size: 0.75rem;
            font-weight: bold;
            text-transform: uppercase;
            padding: 1.5rem 1.5rem 0.5rem;
            letter-spacing: 0.5px;
        }

        /* Contenu principal */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 2rem;
            min-height: 100vh;
        }

        /* Table styles */
        .table {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .table th {
            background-color: var(--dark);
            color: white;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.85rem;
            padding: 1rem;
        }

        .table td {
            padding: 1rem;
            vertical-align: middle;
        }

        .table img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 4px;
            transition: transform 0.2s;
        }

        .table img:hover {
            transform: scale(1.1);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .vertical-nav {
                transform: translateX(-100%);
            }

            .vertical-nav.active {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }

            .nav-toggle {
                display: block;
                position: fixed;
                top: 1rem;
                left: 1rem;
                z-index: 1001;
            }
        }
        .card {
            border: none;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            border-radius: 12px;
            margin-bottom: 2rem;
        }

        .card-header {
            background: linear-gradient(45deg, #4f46e5, #6366f1);
            color: white;
            border-radius: 12px 12px 0 0 !important;
            padding: 1rem 1.5rem;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .card-body {
            padding: 2rem;
        }

        .form-control, .form-select {
            border-radius: 8px;
            border: 1px solid #e2e8f0;
            padding: 0.75rem;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 2px rgba(79, 70, 229, 0.1);
        }

        .form-label {
            font-weight: 500;
            color: #1e293b;
            margin-bottom: 0.5rem;
        }

        .btn-primary {
            background: #4f46e5;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: #4338ca;
            transform: translateY(-1px);
        }

        .table {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
        }

        .table thead th {
            background: #1e293b;
            color: white;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.875rem;
            padding: 1rem;
            border: none;
        }

        .table tbody td {
            padding: 1rem;
            vertical-align: middle;
            border-bottom: 1px solid #e2e8f0;
        }

        .table tbody tr:hover {
            background-color: #f8fafc;
        }

        .btn-sm {
            padding: 0.5rem 1rem;
            border-radius: 6px;
            font-size: 0.875rem;
        }

        .btn-danger {
            background: #ef4444;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-danger:hover {
            background: #dc2626;
            transform: translateY(-1px);
        }

        .alert {
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1.5rem;
        }

        .alert-success {
            background-color: #ecfdf5;
            border-color: #10b981;
            color: #065f46;
        }

        .invalid-feedback {
            color: #ef4444;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        /* Modal Styling */
        .modal-content {
            border-radius: 12px;
            border: none;
            box-shadow: 0 0 30px rgba(0,0,0,0.1);
        }

        .modal-header {
            background: linear-gradient(45deg, #4f46e5, #6366f1);
            color: white;
            border-radius: 12px 12px 0 0;
            padding: 1.25rem;
        }

        .modal-title {
            font-weight: 600;
        }

        .modal-body {
            padding: 2rem;
        }

        .modal-footer {
            border-top: 1px solid #e2e8f0;
            padding: 1.25rem;
        }

        .btn-secondary {
            background: #94a3b8;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background: #64748b;
            transform: translateY(-1px);
        }
    </style>
</head>
<body>
    <!-- Navigation Toggle Button (Mobile) -->
    <button class="btn btn-dark nav-toggle d-md-none">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navigation Verticale -->
    <nav class="vertical-nav">
        <div class="site-title">
            <i class="fas fa-store me-2"></i>
            TR STORE
        </div>

        <ul class="nav-menu">
            <!-- Core -->
            <li class="nav-section">Core</li>
            <li class="nav-item">
                <a href="/" class="nav-link">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
            </li>

            <!-- Produits -->
            <li class="nav-section">Produits</li>
            <li class="nav-item">
                <a href="/ajouterproduit" class="nav-link">
                    <i class="fas fa-plus"></i>
                    Ajouter Produit
                </a>
            </li>
            <li class="nav-item">
                <a href="/index" class="nav-link">
                    <i class="fas fa-list"></i>
                    Liste des produits
                </a>
            </li>

            <!-- Dépôts -->
            <li class="nav-section">Dépôts</li>
            <li class="nav-item">
                <a href="/indexdepot" class="nav-link">
                    <i class="fas fa-warehouse"></i>
                    Gestion des dépôts
                </a>
            </li>
            <li class="nav-item">
                <a href="/produit-depot/create" class="nav-link">
                    <i class="fas fa-plus-circle"></i>
                    Associer Produit-Dépôt
                </a>
            </li>

            <!-- Administration -->
            <li class="nav-section">Administration</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-user-cog"></i>
                    Paramètres
                </a>
            </li>
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}" class="nav-link">
                    @csrf
                    <button type="submit" class="btn btn-link text-white p-0">
                        <i class="fas fa-sign-out-alt"></i>
                        Déconnexion
                    </button>
                </form>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav_content">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajouter un produit au dépôt</div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('produit-depot.store') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="produit_id">Produit</label>
                            <select name="produit_id" id="produit_id" class="form-control @error('produit_id') is-invalid @enderror" required>
                                <option value="">Sélectionnez un produit</option>
                                @foreach($produits as $produit)
                                    <option value="{{ $produit->id }}">{{ $produit->titre }}</option>
                                @endforeach
                            </select>
                            @error('produit_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="depot_id">Dépôt</label>
                            <select name="depot_id" id="depot_id" class="form-control @error('depot_id') is-invalid @enderror" required>
                                <option value="">Sélectionnez un dépôt</option>
                                @foreach($depots as $depot)
                                    <option value="{{ $depot->id }}">{{ $depot->nom }}</option>
                                @endforeach
                            </select>
                            @error('depot_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="quantite">Quantité</label>
                            <input type="number" name="quantite" id="quantite" class="form-control @error('quantite') is-invalid @enderror" required min="1">
                            @error('quantite')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="type">Type de mouvement</label>
                            <select name="type" id="type" class="form-control @error('type') is-invalid @enderror" required>
                                <option value="">Sélectionnez un type</option>
                                <option value="addition">Addition <i class='bx bx-up-arrow-alt' style='color:#18f30f'></i></option>
                                <option value="soustraction">Soustraction <i class='bx bx-down-arrow-alt' style='color:#f30f12'></i></option>
                            </select>
                            @error('type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Enregistrer
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
                <div class="mt-4">
                        <h4>Liste des produits par dépôt</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Produit</th>
                                        <th>Dépôt</th>
                                        <th>Quantité</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($produitsDepots as $produitDepot)
                                        <tr>
                                            <td>{{ $produitDepot->produit->titre }}</td>
                                            <td>{{ $produitDepot->depot->nom }}</td>
                                            <td>{{ $produitDepot->quantite }}</td>
                                            <td>{{ $produitDepot->type}}</td>
                                            <td>
                                            <!-- Ajoutez ici vos boutons d'action (modifier, supprimer, etc.) -->
                                                <button class="btn btn-sm btn-primary" onclick="editProduitDepot('{{ $produitDepot->produit_id }}', '{{ $produitDepot->depot_id }}', '{{ $produitDepot->quantite }}')">Modifier</button>
                                                <form action="/destroy_depotproduit/{{ $produitDepot->id }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                                </form>

                                            </td>
                                        </tr>
                                     @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Modifier le produit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('produit-depot.update') }}" method="POST" id="editForm">
                        @csrf
                        
                        
                        <div class="form-group mb-3">
                            <label for="edit_produit_id">Produit</label>
                            <select name="produit_id" id="edit_produit_id" class="form-control" required>
                                <option value="">Sélectionnez un produit</option>
                                @foreach($produits as $produit)
                                    <option value="{{ $produit->id }}">{{ $produit->titre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="edit_depot_id">Dépôt</label>
                            <select name="depot_id" id="edit_depot_id" class="form-control" required>
                                <option value="">Sélectionnez un dépôt</option>
                                @foreach($depots as $depot)
                                    <option value="{{ $depot->id }}">{{ $depot->nom }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="edit_quantite">Quantité</label>
                            <input type="number" name="quantite" id="edit_quantite" class="form-control" required min="1">
                        </div>
                        <div class="form-group mb-3">
                        <label for="type">Type de mouvement</label>
                            <select name="type" id="edit_type" class="form-control @error('type') is-invalid @enderror" required>séléctioner un type
                                <option value="addition">Addition <i class='bx bx-up-arrow-alt' style='color:#18f30f'></i></option>
                                <option value="soustraction">Soustraction <i class='bx bx-down-arrow-alt' style='color:#f30f12'></i></option>
                            </select>
                        </div>
                        

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenu Principal -->
    <main class="main-content">
        
    </main>
</body>
</html>
<script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to populate and show the edit modal
            window.editProduitDepot = function(produitId, depotId, quantite) {
                document.getElementById('edit_produit_id').value = produitId;
                document.getElementById('edit_depot_id').value = depotId;
                document.getElementById('edit_quantite').value = quantite;
                document.getElementById('edit_type').value = type;
                
                const editModal = new bootstrap.Modal(document.getElementById('editModal'));
                editModal.show();
            }
        });
    </script>










