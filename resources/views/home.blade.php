<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TR STORE</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

        
        <style>
            /* Variables pour les couleurs */
        :root {
        --primary-color: #4f46e5;
        --secondary-color: #818cf8;
        --success-color: #22c55e;
        --warning-color: #eab308;
        --danger-color: #ef4444;
        --dark-color: #1e293b;
        --light-color: #f8fafc;
        }

        /* Styles généraux et transitions */
        * {
        transition: all 0.3s ease-in-out;
        }

        /* Navigation supérieure */
        .sb-topnav {
        background: linear-gradient(135deg, var(--dark-color), #2d3748) !important;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
        font-weight: 600;
        letter-spacing: 0.5px;
        }

        .navbar-brand:hover {
        transform: translateY(-1px);
        }

        /* Sidebar */
        .sb-sidenav {
        background: linear-gradient(180deg, var(--dark-color), #2d3748) !important;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sb-sidenav-menu .nav-link {
        border-left: 3px solid transparent;
        margin: 2px 0;
        }

        .sb-sidenav-menu .nav-link:hover {
        border-left-color: var(--primary-color);
        background: rgba(255, 255, 255, 0.05);
        transform: translateX(5px);
        }

        /* Cards des villes */
        .card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transform: translateY(0);
        }

        .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .bg-primary {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)) !important;
        }

        .bg-warning {
        background: linear-gradient(135deg, var(--warning-color), #fbbf24) !important;
        }

        .bg-success {
        background: linear-gradient(135deg, var(--success-color), #34d399) !important;
        }

        .bg-danger {
        background: linear-gradient(135deg, var(--danger-color), #f87171) !important;
        }

        /* Tableau */
        #datatablesSimple {
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        #datatablesSimple thead th {
        background-color: var(--dark-color);
        color: white;
        padding: 15px;
        }

        #datatablesSimple tbody tr:hover {
        background-color: rgba(79, 70, 229, 0.05);
        }

        /* Animations */
        @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
        }

        .container-fluid {
        animation: fadeIn 0.5s ease-out;
        }

        /* Images dans le tableau */
        #datatablesSimple img {
        border-radius: 8px;
        transition: transform 0.3s ease;
        }

        #datatablesSimple img:hover {
        transform: scale(1.1);
        }

        /* Footer */
        footer {
        background: linear-gradient(135deg, #f8fafc, #f1f5f9) !important;
        }

        /* Boutons et liens */
        .btn, .nav-link {
        position: relative;
        overflow: hidden;
        }

        .btn::after, .nav-link::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
        }

        .btn:hover::after, .nav-link:hover::after {
        width: 200px;
        height: 200px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
        .card {
            margin-bottom: 1rem;
        }
        
        .sb-sidenav-menu .nav-link:hover {
            transform: translateX(0);
        }
        }
        /* Variables */
        :root {
          --primary: #6366f1;
          --primary-dark: #4f46e5;
          --secondary: #64748b;
          --success: #10b981;
          --warning: #f59e0b;
          --danger: #ef4444;
          --dark: #0f172a;
          --light: #f8fafc;
          --gray-100: #f1f5f9;
          --gray-200: #e2e8f0;
          --gray-800: #1e293b;
        }

        /* Reset et styles de base */
        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          transition: all 0.2s ease-in-out;
        }

        body {
          font-family: 'Inter', sans-serif;
          background-color: var(--gray-100);
        }

        /* Navigation supérieure */
        .sb-topnav {
          background: var(--dark) !important;
          border-bottom: 1px solid rgba(255, 255, 255, 0.1);
          backdrop-filter: blur(10px);
        }

        .navbar-brand {
          font-weight: 700;
          background: linear-gradient(45deg, var(--primary), #818cf8);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          padding: 0.5rem 1rem;
        }

        /* Sidebar */
        .sb-sidenav {
          background: var(--dark) !important;
          border-right: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sb-sidenav-menu .nav-link {
          color: var(--gray-200) !important;
          padding: 1rem 1.5rem;
          border-radius: 0.5rem;
          margin: 0.25rem 1rem;
        }

        .sb-sidenav-menu .nav-link:hover {
          background: rgba(255, 255, 255, 0.1);
          transform: translateX(5px);
        }

        .sb-sidenav-menu-heading {
          color: var(--primary) !important;
          font-weight: 600;
          text-transform: uppercase;
          letter-spacing: 0.05em;
        }

        /* Cards */
        .card {
          background: white;
          border-radius: 1rem;
          border: none;
          box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .card-header {
          background: white;
          border-bottom: 1px solid var(--gray-200);
          padding: 1.25rem;
          border-radius: 1rem 1rem 0 0 !important;
        }

        .card-body {
          padding: 1.5rem;
        }

        /* Cards des dépôts */
        .border-left-primary {
          border-left: 4px solid var(--primary);
          transition: transform 0.3s ease;
        }

        .border-left-primary:hover {
          transform: translateY(-5px);
          box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        /* Tableau */
        #datatablesSimple {
          border-radius: 0.5rem;
          overflow: hidden;
        }

        #datatablesSimple thead th {
          background: var(--gray-800);
          color: white;
          font-weight: 600;
          text-transform: uppercase;
          letter-spacing: 0.05em;
          padding: 1rem;
        }

        #datatablesSimple tbody tr:hover {
          background-color: var(--gray-100);
        }

        /* Images dans le tableau */
        #datatablesSimple img {
          border-radius: 0.5rem;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Dashboard header */
        .breadcrumb {
          background: transparent;
          padding: 0.75rem 0;
        }

        .breadcrumb-item.active {
          color: var(--primary);
          font-weight: 600;
        }

        /* Footer */
        footer {
          background: white !important;
          border-top: 1px solid var(--gray-200);
        }

        footer a {
          color: var(--primary);
          text-decoration: none;
        }

        footer a:hover {
          color: var(--primary-dark);
          text-decoration: underline;
        }

        /* Boutons et contrôles */
        .btn {
          padding: 0.5rem 1rem;
          border-radius: 0.5rem;
          font-weight: 500;
        }

        .btn-primary {
          background: linear-gradient(45deg, var(--primary), var(--primary-dark));
          border: none;
        }

        .form-control {
          border-radius: 0.5rem;
          padding: 0.75rem 1rem;
        }

        /* Animations */
        @keyframes slideIn {
          from {
            opacity: 0;
            transform: translateY(20px);
          }
          to {
            opacity: 1;
            transform: translateY(0);
          }
        }

        .container-fluid {
          animation: slideIn 0.5s ease-out;
        }

        /* Responsive */
        @media (max-width: 768px) {
          .sb-sidenav-menu .nav-link {
            margin: 0.25rem 0.5rem;
          }
          
          .card {
            margin-bottom: 1rem;
          }
          
          .container-fluid {
            padding: 1rem !important;
          }
        }
         :root {
        --primary: #4f46e5;
        --dark: #1e293b;
        --light: #f8fafc;
        --sidebar-width: 250px;
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

    /* Responsive */
    @media (max-width: 768px) {
        .vertical-nav {
            transform: translateX(-100%);
        }

        .vertical-nav.active {
            transform: translateX(0);
        }

        .nav-toggle {
            display: block;
            position: fixed;
            top: 1rem;
            left: 1rem;
            z-index: 1001;
        }
    }
    .modal-backdrop {
    animation: backdropFadeIn 1s ease-out;
    }

    @keyframes backdropFadeIn {
        0% { opacity: 0; }
        100% { opacity: 0.5; }
    }

        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">TR STORE</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="/">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                 Produits
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/ajouterproduit">Ajouter Produit</a>
                                    <a class="nav-link" href="/index">Gestion des produits</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                        @if (Route::has('login'))
                                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                                @auth
                                                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                                @else
                                                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a><br>

                                                    @if (Route::has('register'))
                                                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a><br>
                                                    @endif
                                                @endauth
                                            </div>
                                        @endif
                                        </nav>
                                    </div>
                                    
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="/historique">Historique</a>
                                            <a class="nav-link" href="/factures">Factures</a>
                                            <a class="nav-link" href="/indexC">Clients</a>
                                        </nav>
                                    </div>
                                    
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="/indexdepot">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Dépots
                            </a>
                            <a class="nav-link" href="/produit-depot/create">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Ajouter P-->D
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"></h1>
                        <div class="row">
                        @foreach($depot as $depot)
                            <div class="col-xl-3 col-md-6">
                                <div class="card border-left-primary shadow h-100 py-2 mb-4">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h5 mb-0 font-weight-bold text-primary text-center">
                                                    {{ $depot->nom }}
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-warehouse fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent border-0">
                                    <a href="{{ route('depot.show', $depot->id) }}" class="btn btn-info">Voir les produits  <i class="fas fa-angle-right"></i></a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                        <div class="card mb-4" style="margin-top:30px">
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th>Titre</th>
                                        <th>image</th>
                                        <th>Référent</th>
                                        <th>Description</th>
                                        <th>Catégorie</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($produits as $produit)
                                          <tr>
                                              <td>{{ $produit->titre }}</td>
                                              <td><img src="{{ asset('storage/' . $produit->image) }}" alt="{{ $produit->titre }}" width="100"></td>
                                              <td>{{ $produit->referent_id }}</td>
                                              <td>{{ $produit->description }}</td>
                                              <td>{{ $produit->categorie }}</td> 
                                              <td>  
                                              <button onclick="viewProduit({{ $produit->id }})" class="btn btn-info">
                                                  <i class="fas fa-eye"></i> Voir
                                              </button>
                                              </td>  
                                          </tr>
                                        @endforeach 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="viewModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content animate__animated animate__fadeIn">
                            <div class="modal-header">
                                <h5 class="modal-title">Détails du Produit</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center mb-3">
                                    <img id="produitImage" src="" alt="Image du produit" class="img-fluid rounded shadow animate__animated animate__fadeIn" style="max-height: 250px;">
                                </div>
                                <h5 id="produitTitre" class="text-center mb-3 animate__animated animate__fadeIn"></h5>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped animate__animated animate__fadeIn">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>Dépôt</th>
                                                <th>Quantité</th>
                                            </tr>
                                        </thead>
                                        <tbody id="depotsQuantites">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>

                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
<script>
function viewProduit(id) {
    fetch(`{{ url('view_produit') }}/${id}`)
        .then(response => response.json())
        .then(data => {
            // Mise à jour de l'image
            document.getElementById('produitImage').src = `{{ asset('storage') }}/${data.produit.image}`;
            document.getElementById('produitTitre').textContent = data.produit.titre;
            
            // Mise à jour des quantités par dépôt
            const tableBody = document.getElementById('depotsQuantites');
            tableBody.innerHTML = '';
            
            data.depots.forEach(depot => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${depot.nom}</td>
                    <td class="text-center">${depot.quantite}</td>
                `;
                tableBody.appendChild(row);
            });
            
            // Afficher le modal
            const modal = new bootstrap.Modal(document.getElementById('viewModal'));
            modal.show();
        })
        .catch(error => {
            console.error('Erreur:', error);
            alert('Une erreur est survenue lors du chargement des données');
        });
}
</script>