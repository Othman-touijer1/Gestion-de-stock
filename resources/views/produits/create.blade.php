<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Static Navigation - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <style>
/* Style pour chaque champ de formulaire */
form .mb-3 {
    margin-bottom: 15px; /* Espacement entre les champs */
}

/* Style pour les champs input, textarea et select */
form .form-control {
    background-color: transparent; /* Fond transparent pour les champs */
    border: 2px solid black; /* Bordure noire pour les champs */
    padding: 12px; /* Espacement interne pour agrandir les champs */
    border-radius: 6px; /* Coins arrondis des champs */
    font-size: 1rem; /* Taille de texte plus grande */
    transition: border-color 0.3s ease; /* Effet au survol ou focus */
}

/* Augmenter la taille des champs lorsqu'ils sont focus */
form .form-control:focus {
    border-color: #007bff; /* Bordure bleue lorsqu'un champ est sélectionné */
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Légère ombre bleue autour du champ */
}

/* Style pour le bouton d'envoi */
form .btn {
    background-color: #007bff; /* Couleur de fond bleue */
    border: none; /* Enlever la bordure par défaut */
    padding: 10px 20px; /* Espacement interne du bouton */
    color: white; /* Texte du bouton en blanc */
    font-size: 1rem; /* Taille de texte du bouton */
    border-radius: 6px; /* Coins arrondis pour le bouton */
    cursor: pointer; /* Curseur en forme de main lors du survol */
    transition: background-color 0.3s ease; /* Transition de couleur de fond */
}

/* Effet au survol du bouton */
form .btn:hover {
    background-color: #0056b3; /* Couleur de fond plus foncée au survol */
}

/* Style pour les labels */
form label {
    font-weight: bold; /* Texte en gras pour les labels */
    margin-bottom: 5px; /* Espacement sous les labels */
}
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
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
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
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
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
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
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
                                Tables
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
                        <center><h1 class="mt-4">Ajouter un nouveau produit</h1></center>
                        <div class="card mb-4">
                        <div class="card-body">
                            <form action="/ajouter_produit" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="titreProduit" class="form-label">Titre du produit</label>
                                    <input type="text" class="form-control" id="titreProduit" name="titreProduit" required />
                                </div>
                                <!-- Image du produit -->
                                <div class="mb-3">
                                    <label for="imageProduit" class="form-label">Image du produit</label>
                                    <input class="form-control" type="file" id="imageProduit" name="imageProduit" required />
                                </div>
                                <!-- Nom Référent -->
                                <div class="mb-3">
                                    <label for="nomReferent" class="form-label">Référent</label>
                                    <input type="number" class="form-control" id="nomReferent" name="nomReferent" required />
                                </div>
                                <!-- Description du produit -->
                                <div class="mb-3">
                                    <label for="descriptionProduit" class="form-label">Description du produit</label>
                                    <textarea class="form-control" id="descriptionProduit" name="descriptionProduit" rows="4" required></textarea>
                                </div>
                                <!-- Catégories -->
                                <div class="mb-3">
                                    <label for="categoriesProduit" class="form-label">Catégories</label>
                                    <select class="form-control" id="categoriesProduit" name="categoriesProduit" required>
                                        <option value="" disabled selected>Sélectionnez une catégorie</option>
                                        <option value="electronique">Électronique</option>
                                        <option value="vetements">Vêtements</option>
                                        <option value="accessoires">Accessoires</option>
                                        <option value="meubles">Meubles</option>
                                    </select>
                                </div>
                                <!-- Bouton d'envoi -->
                                <button type="submit" class="btn btn-primary">Ajouter le produit</button>
                            </form>
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
    </body>
</html>


