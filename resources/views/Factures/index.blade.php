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
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --background-color: #ecf0f1;
            --success-color: #27ae60;
            --danger-color: #e74c3c;
            --text-color: #2c3e50;
            --border-color: #bdc3c7;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
            margin-top:80px;
            margin-left:70px;
        }

        .container {
            max-width: 1100px;
            padding:300px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-header h1 {
            color: var(--primary-color);
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--primary-color);
            font-weight: 500;
        }

        input, select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid var(--border-color);
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        input:focus {
            outline: none;
            border-color: var(--secondary-color);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 2rem 0;
        }

        th {
            background-color: var(--primary-color);
            color: white;
            padding: 1rem;
            text-align: left;
        }

        td {
            padding: 0.75rem;
            border-bottom: 1px solid var(--border-color);
        }

        .table-input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid var(--border-color);
            border-radius: 4px;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .btn-primary {
            background-color: var(--secondary-color);
            color: white;
        }

        .btn-danger {
            background-color: var(--danger-color);
            color: white;
        }

        .btn:hover {
            opacity: 0.9;
        }

        .totals {
            margin-top: 2rem;
            padding: 1rem;
            background-color: #f8f9fa;
            border-radius: 5px;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            padding: 0.5rem 0;
            border-bottom: 1px solid var(--border-color);
        }

        .total-row:last-child {
            border-bottom: none;
            font-weight: bold;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            margin-top: 2rem;
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
                margin: 1rem;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            table {
                display: block;
                overflow-x: auto;
            }
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
                                            <a class="nav-link" href="/indexF">Factures</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <!-- <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Casablanca</a>
                                            <a class="nav-link" href="404.html">Rabat</a>
                                            <a class="nav-link" href="500.html">Tanger</a>
                                            <a class="nav-link" href="">Marrakech</a>
                                        </nav> -->
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
            <div class="container">
        <div class="form-header">
            <h1>Nouvelle Facture</h1>
        </div>

        <form id="invoice-form">
            <div class="form-row">
                <div class="form-group">
                    <label>Numéro de Facture</label>
                    <input type="text" id="invoice-number" required>
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" id="invoice-date" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Société</label>
                    <input type="text" id="company-name" required>
                </div>
                <div class="form-group">
                    <label>Adrésse</label>
                    <input type="text" id="company-name" required>
                </div>
                <div class="form-group">
                    <label>Télé</label>
                    <input type="number" id="company-name" required>
                </div>
                <div class="form-group">
                    <label>Adrésse de client</label>
                    <input type="text" id="company-name" required>
                </div>
                <div class="form-group">
                    <label>Client</label>
                    <input type="text" id="client-name" required>
                </div>
            </div>

            <table id="invoice-items">
                <thead>
                    <tr>
                        <th>Désignation</th>
                        <th>Produit</th>
                        <th>Prix HT</th>
                        <th>Quantité</th>
                        <th>TVA (%)</th>
                        <th>Remise (%)</th>
                        <th>Total HT</th>
                        <th>Total TTC</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>

            <button type="button" id="add-row" class="btn btn-primary">
                Ajouter une ligne
            </button>
             
            <div class="totals">
                <div class="total-row">
                    <span>Total HT</span>
                    <span id="total-ht">0.00 €</span>
                </div>
                <div class="total-row">
                    <span>Total TVA</span>
                    <span id="total-tva">0.00 €</span>
                </div>
                <div class="total-row">
                    <span>Total TTC</span>
                    <span id="total-ttc">0.00 €</span>
                </div>
            </div>

            <div class="actions">
                <button type="button" class="btn btn-primary" onclick="saveInvoice()">
                    Enregistrer
                </button>
                <button type="button" class="btn btn-danger" onclick="resetForm()">
                    Réinitialiser
                </button>
            </div>
        </form>
    </div>

                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script>
        let itemRows = [];

        function createNewRow() {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td><input type="text" class="table-input designation" required></td>
                <div class="form-group mb-3" style="margin-top:15px;">
                        
                            <select name="produit_id" id="produit_id" class="form-control @error('produit_id') is-invalid @enderror" required>
                                <option value=""></option>
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
                <td><input type="number" class="table-input price" min="0" step="0.01" required></td>
                <td><input type="number" class="table-input quantity" min="1" value="1" required></td>
                <td><input type="number" class="table-input tva" min="0" max="100" value="20" required></td>
                <td><input type="number" class="table-input discount" min="0" max="100" value="0" required></td>
                <td class="total-ht">0.00</td>
                <td class="total-ttc">0.00</td>
                <td>
                    <button type="button" class="btn btn-danger" onclick="removeRow(this)">❌</button>
                </td>
            `;

            // Ajouter les écouteurs d'événements aux inputs
            const inputs = row.querySelectorAll('input');
            inputs.forEach(input => {
                input.addEventListener('input', () => calculateRowTotal(row));
            });

            return row;
        }

        function calculateRowTotal(row) {
            const price = parseFloat(row.querySelector('.price').value) || 0;
            const quantity = parseInt(row.querySelector('.quantity').value) || 0;
            const tva = parseFloat(row.querySelector('.tva').value) || 0;
            const discount = parseFloat(row.querySelector('.discount').value) || 0;

            const totalHT = price * quantity * (1 - discount / 100);
            const totalTVA = totalHT * (tva / 100);
            const totalTTC = totalHT + totalTVA;

            row.querySelector('.total-ht').textContent = totalHT.toFixed(2);
            row.querySelector('.total-ttc').textContent = totalTTC.toFixed(2);

            calculateGlobalTotals();
        }

        function calculateGlobalTotals() {
            let globalTotalHT = 0;
            let globalTotalTVA = 0;
            let globalTotalTTC = 0;

            document.querySelectorAll('#invoice-items tbody tr').forEach(row => {
                const totalHT = parseFloat(row.querySelector('.total-ht').textContent);
                const totalTTC = parseFloat(row.querySelector('.total-ttc').textContent);
                const totalTVA = totalTTC - totalHT;

                globalTotalHT += totalHT;
                globalTotalTVA += totalTVA;
                globalTotalTTC += totalTTC;
            });

            document.getElementById('total-ht').textContent = globalTotalHT.toFixed(2) + ' €';
            document.getElementById('total-tva').textContent = globalTotalTVA.toFixed(2) + ' €';
            document.getElementById('total-ttc').textContent = globalTotalTTC.toFixed(2) + ' €';
        }

        function addRow() {
            const tbody = document.querySelector('#invoice-items tbody');
            const newRow = createNewRow();
            tbody.appendChild(newRow);
            calculateGlobalTotals();
        }

        function removeRow(button) {
            const tbody = document.querySelector('#invoice-items tbody');
            if (tbody.children.length > 1) {
                button.closest('tr').remove();
                calculateGlobalTotals();
            }
        }

        function saveInvoice() {
            // Ici vous pouvez ajouter la logique pour sauvegarder la facture
            alert('Facture sauvegardée avec succès!');
        }

        function resetForm() {
            if (confirm('Êtes-vous sûr de vouloir réinitialiser le formulaire ?')) {
                document.getElementById('invoice-form').reset();
                const tbody = document.querySelector('#invoice-items tbody');
                tbody.innerHTML = '';
                addRow();
                calculateGlobalTotals();
            }
        }

        // Initialisation du formulaire
        document.getElementById('add-row').addEventListener('click', addRow);
        document.getElementById('invoice-date').valueAsDate = new Date();
        addRow(); // Ajouter la première ligne au chargement
    </script>
    </body>
</html>
