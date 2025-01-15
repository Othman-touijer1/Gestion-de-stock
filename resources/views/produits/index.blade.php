<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title></title>
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
                            <a class="nav-link" href="index.html">
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
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
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
                        <center><h1 class="mt-4">Listes des produits</h1></center>
                        <div class="card mb-4">
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th>Titre</th>
                                        <th>image</th>
                                        <th>Référent</th>
                                        <th>Description</th>
                                        <th>Catégorie</th>
                                        <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($produits as $produit)
                                        <tr>
                                            <td>{{ $produit->titre }}</td>
                                            <td><img src="{{ asset('storage/' . $produit->image) }}" alt="{{ $produit->titre }}" width="150"></td>
                                            <td>{{ $produit->referent_id }}</td>
                                            <td>{{ $produit->description }}</td>
                                            <td>{{ $produit->categorie }}</td>
                                            <td>
                                                <a href="/modifier_produit/{{ $produit->id }}" class="btn btn-warning">Modifier</a>
                                                <form action="/supprimer_produit/{{ $produit->id }}" method="POST" style="display:inline;">
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
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Modifier le produit</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form   action="/modifier_produit" id="editForm" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="titre" class="form-label">Titre</label>
                                        <input type="text" class="form-control" id="titre" name="titreProduit" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" class="form-control" id="image" name="imageProduit">
                                        <img id="currentImage" src="" alt="Image actuelle" class="mt-2" style="max-width: 200px;">
                                    </div>
                                    <div class="mb-3">
                                        <label for="referent" class="form-label">Référent</label>
                                        <input type="text" class="form-control" id="referent" name="nomReferent" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="description" name="descriptionProduit" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="categorie" class="form-label">Catégorie</label>
                                        <input type="text" class="form-control" id="categorie" name="categoriesProduit" required>
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
    
document.addEventListener('DOMContentLoaded', function() {
    // Modifier le code du bouton modifier dans la table
    const tableBody = document.querySelector('tbody');
    tableBody.innerHTML = tableBody.innerHTML.replace(
        /href="\/modifier_produit\/([^"]+)"/g, 
        'href="#" onclick="openEditModal($1)"'
    );

    // Fonction pour ouvrir le modal avec les données du produit
    window.openEditModal = function(productId) {
        // Récupérer les données du produit via AJAX
        fetch(`/get_produit/${productId}`)
            .then(response => response.json())
            .then(produit => {
                // Remplir le formulaire avec les données
                document.getElementById('titre').value = produit.titre;
                document.getElementById('referent').value = produit.referent_id;
                document.getElementById('description').value = produit.description;
                document.getElementById('categorie').value = produit.categorie;
                document.getElementById('currentImage').src = `/storage/${produit.image}`;
                
                // Mettre à jour l'action du formulaire
                document.getElementById('editForm').action = `/modifier_produit/${productId}`;
                
                // Ouvrir le modal
                new bootstrap.Modal(document.getElementById('editModal')).show();
            });
    };
});
</script>
