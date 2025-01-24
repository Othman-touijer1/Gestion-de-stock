<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Ajouter un nouveau produit</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
    <style>
        /* Navigation styles */
        .sb-topnav {
            background: linear-gradient(135deg, #1e293b, #2d3748);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .sb-sidenav {
            background: linear-gradient(180deg, #1e293b, #2d3748);
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            min-height: 100vh;
            width: 250px;
        }

        .sb-sidenav-dark {
            background-color: #1e293b;
            color: rgba(255, 255, 255, 0.5);
        }

        .sb-sidenav .nav-link {
            color: rgba(255, 255, 255, 0.5);
            padding: 0.75rem 1rem;
            display: flex;
            align-items: center;
        }

        .sb-sidenav .nav-link:hover {
            color: #fff;
            background: rgba(255, 255, 255, 0.1);
        }

        .sb-sidenav-menu-heading {
            padding: 1rem;
            font-weight: bold;
            color: rgba(255, 255, 255, 0.4);
        }

        /* Form styles */
        .form-control {
            background-color: white;
            border: 2px solid #e2e8f0;
            padding: 0.75rem;
            border-radius: 0.5rem;
        }

        .form-control:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 2px rgba(79, 70, 229, 0.2);
        }

        .btn-primary {
            background-color: #4f46e5;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
        }

        .btn-primary:hover {
            background-color: #4338ca;
        }

        /* Layout styles */
        #layoutSidenav {
            display: flex;
        }

        #layoutSidenav_content {
            flex: 1;
            padding: 1.5rem;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .sb-sidenav {
                width: 200px;
            }
        }
    </style>
</head>
<body class="sb-nav-fixed">
    <!-- Top Navigation-->
    <nav class="sb-topnav navbar navbar-expand navbar-dark">
        <a class="navbar-brand ps-3" href="#">Start Bootstrap</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
            <i class="fas fa-bars"></i>
        </button>
    </nav>
    
    <div id="layoutSidenav">
        <!-- Sidebar Navigation-->
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="#">
                            <i class="fas fa-tachometer-alt me-2"></i>
                            Dashboard
                        </a>
                        
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link" href="#">
                            <i class="fas fa-columns me-2"></i>
                            Layouts
                        </a>
                        
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="#">
                            <i class="fas fa-chart-area me-2"></i>
                            Charts
                        </a>
                        <a class="nav-link" href="#">
                            <i class="fas fa-table me-2"></i>
                            Tables
                        </a>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Main Content-->
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
                        @method('PUT')
                        
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
                            <select name="type" id="edit_type" class="form-control @error('type') is-invalid @enderror" required >
                                <option value="">Sélectionnez un type</option>
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
        </div>            
            <footer class="bg-light mt-auto py-4">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#" class="text-decoration-none">Privacy Policy</a>
                            &middot;
                            <a href="#" class="text-decoration-none">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
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