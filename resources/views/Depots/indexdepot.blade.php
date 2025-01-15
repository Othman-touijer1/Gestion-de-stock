<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
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
.modal-content {
    border-radius: 15px;
    border: none;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

.modal-header {
    background: linear-gradient(135deg, #4f46e5, #818cf8);
    color: white;
    border-radius: 15px 15px 0 0;
    border-bottom: none;
    padding: 1.5rem;
}

.btn-close {
    filter: brightness(0) invert(1);
}

.modal-body {
    padding: 2rem;
}

.modal-footer {
    border-top: none;
    padding: 1.5rem;
}

/* Form styles */
.form-control, .form-select {
    border-radius: 8px;
    border: 1px solid #e2e8f0;
    padding: 0.75rem;
    margin-bottom: 0.5rem;
    transition: all 0.3s ease;
}

.form-control:focus, .form-select:focus {
    border-color: #4f46e5;
    box-shadow: 0 0 0 2px rgba(79, 70, 229, 0.1);
}

label {
    font-weight: 500;
    margin-bottom: 0.5rem;
    display: block;
}

/* Button styles */
.btn-add-depot {
    background: linear-gradient(135deg, #4f46e5, #818cf8);
    color: white;
    border: none;
    padding: 0.75rem 1.5rem;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.3s ease;
    margin-bottom: 1rem;
}

.btn-add-depot:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(79, 70, 229, 0.2);
}

.modal .btn {
    padding: 0.75rem 1.5rem;
    font-weight: 500;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.modal .btn-primary {
    background: linear-gradient(135deg, #4f46e5, #818cf8);
    border: none;
}

.modal .btn-secondary {
    background: #f1f5f9;
    color: #475569;
    border: none;
}

.modal .btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
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
                                        Villes
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Casablanca</a>
                                            <a class="nav-link" href="404.html">Rabat</a>
                                            <a class="nav-link" href="500.html">Tanger</a>
                                            <a class="nav-link" href="">Marrakech</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Factures
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                        @foreach($depot as $depot)
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">{{ $depot->nom }}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="btn-group">
                                        <form action="{{ route('depots.destroy', $depot->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr?')">
                                                Supprimer
                                            </button>
                                        </form>
                                        </div>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                        <button type="button" class="btn-add-depot" data-bs-toggle="modal" data-bs-target="#addDepotModal">
                            <i class="fas fa-plus"></i> Ajouter un dépôt
                        </button>
                        <div class="modal fade" id="addDepotModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Ajouter un nouveau dépôt</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('depots.store') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group mb-3">
                                                <label for="nom">Nom du dépôt</label>
                                                <input type="text" class="form-control" id="nom" name="nom" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="statut">Statut</label>
                                                <select class="form-select" id="statut" name="statut" required>
                                                    <option value="actif">Actif</option>
                                                    <option value="inactif">Inactif</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        </div>
                                    </form>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
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
// Initialize Bootstrap modal
document.addEventListener('DOMContentLoaded', function() {
    // Reset form when modal is closed
    const modal = document.getElementById('addDepotModal');
    modal.addEventListener('hidden.bs.modal', function () {
        const form = modal.querySelector('form');
        form.reset();
    });

    // Optional: Add form validation
    const form = modal.querySelector('form');
    form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
    });
});
</script>

