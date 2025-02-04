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

    <!-- Contenu Principal -->
    <main class="main-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h2 class="mb-0">Dépôt: {{ $depot->nom }}</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
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
                                             alt="{{ $produit->titre }}">
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
    </main>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle menu on mobile
        document.querySelector('.nav-toggle').addEventListener('click', function() {
            document.querySelector('.vertical-nav').classList.toggle('active');
        });
    </script>
</body>
</html>