<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Ajouter un nouveau produit</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" rel="stylesheet" />
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
        /* Table styles */
        .table-container {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 1.5rem 0;
            overflow: hidden;
        }

        .table {
            margin-bottom: 0;
        }

        .table thead th {
            background-color: #f8fafc;
            border-bottom: 2px solid #e2e8f0;
            color: #1e293b;
            font-weight: 600;
            padding: 1rem;
            white-space: nowrap;
        }

        .table tbody td {
            padding: 1rem;
            vertical-align: middle;
            border-bottom: 1px solid #e2e8f0;
        }

        .table tbody tr:last-child td {
            border-bottom: none;
        }

        .table tbody tr:hover {
            background-color: #f8fafc;
        }

        /* Product image styles */
        .product-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 0.375rem;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        /* Card styles */
        .card {
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 0.5rem;
            margin-bottom: 2rem;
        }

        .card-header {
            background-color: #f8fafc;
            border-bottom: 1px solid #e2e8f0;
            padding: 1rem 1.5rem;
            font-weight: 600;
            color: #1e293b;
        }

        .depot-title {
            color: #1e293b;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            padding: 0 0.5rem;
        }

        /* Layout styles */
        #layoutSidenav_content {
            flex: 1;
            padding: 1.5rem;
            background-color: #f1f5f9;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .table-container {
                overflow-x: auto;
            }
            
            .table {
                min-width: 800px;
            }
        }
        /* Table styles */
.table-container {
    background-color: white;
    border-radius: 0.5rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin: 5rem 0;
    overflow: hidden;
}

.table {
    margin-bottom: 0;
    width: 100%; /* La table occupera toute la largeur disponible */
    table-layout: fixed; /* Assurez-vous que les colonnes sont bien espacées */
}

.table thead th {
    background-color: #f8fafc;
    border-bottom: 2px solid #e2e8f0;
    color: #1e293b;
    font-weight: 600;
    padding: 1rem;
    white-space: nowrap;
}

.table tbody td {
    padding: 1.5rem;
    vertical-align: middle;
    border-bottom: 1px solid #e2e8f0;
}

.table tbody tr:last-child td {
    border-bottom: none;
}

.table tbody tr:hover {
    background-color: #f8fafc;
}

/* Ajoutez un peu plus d'espace autour de la table */
.container {
    max-width: 200%; /* Pour que la table occupe tout l'espace disponible */
    padding-left: 2rem;
    padding-right: 2rem;
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
                    <div class="container">
            <h2>Dépôt: {{ $depot->nom }}</h2>
            
            <div class="card">
                <div class="card-header">
                    Produits dans ce dépôt
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Quantité</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($produits_depot as $produit)
                            <tr>
                                <td>
                                    <img src="{{ asset('storage/' . $produit->image) }}" 
                                        alt="{{ $produit->titre }}" 
                                        style="width: 50px; height: 50px; object-fit: cover;">
                                </td>
                                <td>{{ $produit->titre }}</td>
                                <td>{{ $produit->description }}</td>
                                <td>{{ $produit->quantite }}</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
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
