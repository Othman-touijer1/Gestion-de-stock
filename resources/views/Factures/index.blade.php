<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="author" content="" />
        <title>TR STORE</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>

        
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
            color: black;
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
         /* Existing styles... */
            
            /* Centralization styles */
            .container {
                display: flex;
                flex-direction: column;
                align-items: center;
                max-width: 1200px;
                margin: 2rem auto;
                padding: 0 1rem;
                margin-right:700px;
                margin-left:300px;
                margin-top:100px;
                margin-bottom:500px;
            }

            .table-responsive {
                width: 100%;
                overflow-x: auto;
            }

            table {
                width: 100%;
                max-width: 1000px;
                margin: 0 auto;
            }

            .actions-container {
                display: flex;
                justify-content: center;
                margin-top: 1rem;
            }

        @keyframes backdropFadeIn {
            0% { opacity: 0; }
            100% { opacity: 0.5; }
        }
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            margin-top:40px;
            margin-left:100px;
            
        }

        .modal-content {
            background-color: white;
            margin: 2% auto;
            padding: 20px;
            width: 90%;
            max-width: 1200px;
            border-radius: 8px;
            max-height: 90vh;
            overflow-y: auto;
        }

        .close {
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 15px;
        }

        .form-row-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .line-items {
            margin-top: 20px;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 4px;
        }

        .line-item {
            display: grid;
            grid-template-columns: 3fr 1fr 1fr 1fr 1fr 0.5fr;
            gap: 10px;
            margin-bottom: 10px;
            align-items: center;
        }

        .line-header {
            font-weight: bold;
            background-color: #f5f5f5;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .btn {
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-primary {
            background-color: #4CAF50;
            color: white;
        }

        .btn-danger {
            background-color: #f44336;
            color: white;
        }

        .btn-add {
            margin-top: 10px;
        }

        .delete-line {
            color: red;
            cursor: pointer;
            font-weight: bold;
        }
        /* Tableau */
        #datatablesSimple {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin: 20px 0;
        background-color: #fff;
    }

    #datatablesSimple thead th {
        background-color: var(--primary-color);
        color: white;
        padding: 15px;
        text-align: left;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        border-bottom: 2px solid rgba(255, 255, 255, 0.1);
        width:700px;
    }

    #datatablesSimple tbody td {
        padding: 10px;
        border-bottom: 1px solid #f0f0f0;
        color: #333;
    }

    #datatablesSimple tbody tr:last-child td {
        border-bottom: none;
    }

    #datatablesSimple tbody tr:hover {
        background-color: rgba(79, 70, 229, 0.05);
        transition: background-color 0.3s ease;
    }

    #datatablesSimple tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    #datatablesSimple tbody tr:nth-child(even):hover {
        background-color: rgba(79, 70, 229, 0.05);
    }

    #datatablesSimple img {
        border-radius: 8px;
        transition: transform 0.3s ease;
    }

    #datatablesSimple img:hover {
        transform: scale(1.1);
    }

    #datatablesSimple .btn {
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    #datatablesSimple .btn-info {
        background-color: #17a2b8;
        border-color: #17a2b8;
        color: white;
    }

    #datatablesSimple .btn-info:hover {
        background-color: #138496;
        border-color: #117a8b;
    }

    #datatablesSimple .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
        color: white;
    }

    #datatablesSimple .btn-warning:hover {
        background-color: #e0a800;
        border-color: #d39e00;
    }

    #datatablesSimple .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
        color: white;
    }

    #datatablesSimple .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }

    #datatablesSimple td.actions {
        display: flex;
        gap: 5px;
    }

    #datatablesSimple th {
        position: sticky;
        top: 0;
        z-index: 1;
    }

    #datatablesSimple tbody tr {
        transition: all 0.3s ease;
    }

    #datatablesSimple tbody tr:hover {
        transform: translateX(5px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
            <main>
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1>Liste des factures</h1>
                </div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table" id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Numéro</th>
                            <th>Date</th>
                            <th>produit</th>
                            <th>Quantité</th>
                            <th>Client</th>
                            <th>Total HT</th>
                            <th>Total TVA</th>
                            <th>Total TTC</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                           @foreach($factures as $facture)
                        <tr>
                            <td>{{ $facture->numero_facture }}</td>
                            <td>{{ $facture->date_facture}}</td>
                            @foreach($facture->lignFactures as $lignfacture)
                            <td>{{ $lignfacture->produit->titre }}</td>
                            <td>{{ $lignfacture->quantite}}</td>
                            @endforeach
                            <td>{{ $facture->client }}</td>
                            <td>{{ number_format($facture->total_ht, 2) }} DH</td>
                            <td>{{ number_format($facture->total_tva, 2) }} DH</td>
                            <td>{{ number_format($facture->total_ttc, 2) }} DH</td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('factures.pdf', $facture->id) }}" class="btn btn-sm btn-info" target="_blank">PDF</a>
                                    <button onclick="openEditModal({{ $facture->id }})" class="btn btn-sm btn-warning mx-2">Modifier</button>
                                    <form action="{{ route('factures.destroy', $facture->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette facture ?')">
                                            Supprimer
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <button onclick="openModal()" class="btn btn-primary">Nouveau facture</button>
            </div>
            </main>
            <div id="invoiceModal" class="modal">
            <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Nouvelle Facture</h2>
            
            <form action="{{ route('factures.store') }}" method="POST" id="invoiceForm">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label>Numéro de Facture</label>
                        <input type="text" name="numero_facture" id="invoice-number" required>
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="date_facture" id="invoice-date" required>
                    </div>
                </div>
                <input type="hidden" name="total_ht" id="total-ht-input">
                <input type="hidden" name="total_tva" id="total-tva-input">
                <input type="hidden" name="total_ttc" id="total-ttc-input">
                

                <div class="form-row">
                    <div class="form-group">
                        <label>Société</label>
                        <input type="text" name="societe" id="company-name" required>
                    </div>
                    <div class="form-group">
                        <label>Adresse</label>
                        <input type="text" name="adresse" id="company-address" required>
                    </div>
                    <div class="form-group">
                        <label>Téléphone</label>
                        <input type="tel" name="telephone" id="company-phone" required>
                    </div>
                    <div class="form-group">
                        <label>Adresse du client</label>
                        <input type="text" name="adresse_client" required>
                    </div>
                    <div class="form-group">
                        <label for="client">Client</label>
                        <select name="client" id="client" class="form-control" required>
                            <option value="">Sélectionnez un client</option>
                            @foreach($clients as $client)
                                <option value="{{ $client->entreprise }}">{{ $client->entreprise }}</option>
                            @endforeach
                        </select>
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
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="invoice-items-body">
                        <tr>
                            <td>
                                <input type="text" name="lignes[0][designation]" required>
                            </td>
                            <td>
                                <select name="lignes[0][produit_id]" class="product-select form-control" required>
                                    <option value="">Sélectionnez un produit</option>
                                    @foreach($produits as $produit)
                                        <option value="{{ $produit->id }}" data-prix="{{ $produit->prix_unitaire }}">
                                            {{ $produit->titre }}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="number" name="lignes[0][prix_ht]" class="prix-ht" step="0.01" required>
                            </td>
                           <td>
                                <input type="number" name="lignes[0][quantite]" class="quantite" required>
                            </td>
                            <td>
                                <input type="number" name="lignes[0][tva]" class="tva" step="0.01" required>
                            </td>
                            <td>
                                <input type="number" name="lignes[0][remise]" class="remise" step="0.01" value="0">
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger remove-row">Supprimer</button>
                            </td>
                            <input type="hidden" name="total_ht" id="total-ht-input">
                            <input type="hidden" name="total_tva" id="total-tva-input">
                            <input type="hidden" name="total_ttc" id="total-ttc-input">

                        </tr>
                    </tbody>
                </table>

                <button type="button" id="add-row" class="btn btn-primary mt-3">
                    Ajouter une ligne
                </button>
                
                <div class="totals mt-4">
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

                <div class="actions mt-4">
                    <button type="submit" class="btn btn-primary">
                        Enregistrer
                    </button>
                    <button type="button" class="btn btn-danger" onclick="resetForm()">
                        Réinitialiser
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="editInvoiceModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeEditModal()">&times;</span>
        <h2>Modifier Facture</h2>
        
        <form action="" method="POST" id="editInvoiceForm">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group">
                    <label>Numéro de Facture</label>
                    <input type="text" name="numero_facture" id="edit-invoice-number" required>
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" name="date_facture" id="edit-invoice-date" required>
                </div>
            </div>
            <input type="hidden" name="total_ht" id="edit-total-ht-input">
            <input type="hidden" name="total_tva" id="edit-total-tva-input">
            <input type="hidden" name="total_ttc" id="edit-total-ttc-input">
            
            <div class="form-row">
                <div class="form-group">
                    <label>Société</label>
                    <input type="text" name="societe" id="edit-company-name" required>
                </div>
                <div class="form-group">
                    <label>Adresse</label>
                    <input type="text" name="adresse" id="edit-company-address" required>
                </div>
                <div class="form-group">
                    <label>Téléphone</label>
                    <input type="tel" name="telephone" id="edit-company-phone" required>
                </div>
                <div class="form-group">
                    <label>Adresse du client</label>
                    <input type="text" name="adresse_client" id="edit-client-address" required>
                </div>
                <div class="form-group">
                    <label for="client">Client</label>
                    <select name="client" id="edit-client" class="form-control" required>
                        <option value="">Sélectionnez un client</option>
                        @foreach($clients as $client)
                            <option value="{{ $client->entreprise }}">{{ $client->entreprise }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <table id="edit-invoice-items">
                <thead>
                    <tr>
                        <th>Désignation</th>
                        <th>Produit</th>
                        <th>Prix HT</th>
                        <th>Quantité</th>
                        <th>TVA (%)</th>
                        <th>Remise (%)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="edit-invoice-items-body">
                    <!-- Invoice lines will be inserted here via JavaScript -->
                </tbody>
            </table>

            <button type="button" id="edit-add-row" class="btn btn-primary mt-3">
                Ajouter une ligne
            </button>

            <div class="totals mt-4">
                <div class="total-row">
                    <span>Total HT</span>
                    <span id="edit-total-ht">0.00 €</span>
                </div>
                <div class="total-row">
                    <span>Total TVA</span>
                    <span id="edit-total-tva">0.00 €</span>
                </div>
                <div class="total-row">
                    <span>Total TTC</span>
                    <span id="edit-total-ttc">0.00 €</span>
                </div>
            </div>

            <div class="actions mt-4">
                <button type="submit" class="btn btn-primary">
                    Mettre à jour
                </button>
                <button type="button" class="btn btn-danger" onclick="closeEditModal()">
                    Annuler
                </button>
            </div>
        </form>
    </div>
</div>
    </body>
</html>
<script>
        document.addEventListener('DOMContentLoaded', function() {
            const tbody = document.getElementById('invoice-items-body');
            
            // Gestionnaire d'événements pour la sélection des produits
            document.body.addEventListener('change', function(event) {
                if (event.target.classList.contains('product-select')) {
                    const row = event.target.closest('tr');
                    const prixInput = row.querySelector('.prix-ht');
                    const selectedOption = event.target.selectedOptions[0];
                    const prix = selectedOption.dataset.prix;
                    
                    if (prix) {
                        prixInput.value = prix;
                        updateTotals();
                    }
                }
            });

            // Fonction pour mettre à jour tous les totaux
            function updateTotals() {
                let totalHt = 0;
                let totalTva = 0;
                let totalTtc = 0;

                const rows = document.querySelectorAll('#invoice-items-body tr');
                rows.forEach(row => {
                    const prixHt = parseFloat(row.querySelector('.prix-ht').value) || 0;
                    const quantite = parseFloat(row.querySelector('.quantite').value) || 0;
                    const tva = parseFloat(row.querySelector('.tva').value) || 0;
                    const remise = parseFloat(row.querySelector('.remise').value) || 0;

                    const montantHt = prixHt * quantite;
                    const montantTva = montantHt * (tva / 100);
                    const montantTtc = montantHt + montantTva - (montantHt * (remise / 100));

                    totalHt += montantHt;
                    totalTva += montantTva;
                    totalTtc += montantTtc;
                });

                // Mettre à jour les champs cachés
                document.getElementById('total-ht-input').value = totalHt.toFixed(2);
                document.getElementById('total-tva-input').value = totalTva.toFixed(2);
                document.getElementById('total-ttc-input').value = totalTtc.toFixed(2);
            }

            // Appeler updateTotals() avant la soumission du formulaire
            document.getElementById('invoiceForm').addEventListener('submit', function() {
                updateTotals();
            });
            

            // Gestion de la sélection des produits
            // tbody.addEventListener('change', function(event) {
            //     if (event.target.classList.contains('product-select')) {
            //         const row = event.target.closest('tr');
            //         const prixInput = row.querySelector('.prix-ht');
            //         const selectedOption = event.target.options[event.target.selectedIndex];
            //         const prix = selectedOption.getAttribute('data-prix');
                    
            //         if (prix) {
            //             prixInput.value = prix;
            //             updateTotals();
            //         }
            //     }
            // });

            // Mise à jour des totaux lors de la modification des inputs
            tbody.addEventListener('input', function(event) {
                if (event.target.matches('.prix-ht, .quantite, .tva, .remise')) {
                    updateTotals();
                }
            });
           // Updated form submission handling
            document.addEventListener('DOMContentLoaded', function() {
                const invoiceForm = document.getElementById('invoiceForm');
                const tbody = document.getElementById('invoice-items-body');

                // Main form submission handler
                invoiceForm.addEventListener('submit', function(e) {
                    e.preventDefault(); // Prevent default form submission
                    
                    // Update totals before submission
                    updateTotals();
                    
                    // Get all form data
                    const formData = new FormData(invoiceForm);
                    
                    // Validate required fields
                    if (!validateForm()) {
                        alert('Veuillez remplir tous les champs obligatoires');
                        return;
                    }

                    // Send AJAX request
                    fetch(invoiceForm.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Facture créée avec succès');
                            window.location.href = '/factures'; // Redirect to invoices list
                        } else {
                            alert('Erreur lors de la création de la facture: ' + data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Une erreur est survenue lors de la création de la facture');
                    });
                });

                // Form validation function
                function validateForm() {
                    // Basic required fields
                    const requiredFields = [
                        'numero_facture',
                        'date_facture',
                        'societe',
                        'adresse',
                        'telephone',
                        'adresse_client',
                        'client'
                    ];

                    for (let field of requiredFields) {
                        const input = invoiceForm.querySelector(`[name="${field}"]`);
                        if (!input.value.trim()) {
                            input.focus();
                            return false;
                        }
                    }

                    // Validate line items
                    const rows = tbody.querySelectorAll('tr');
                    for (let row of rows) {
                        const designation = row.querySelector('[name^="lignes"][name$="[designation]"]');
                        const produitId = row.querySelector('[name^="lignes"][name$="[produit_id]"]');
                        const prixHt = row.querySelector('[name^="lignes"][name$="[prix_ht]"]');
                        const quantite = row.querySelector('[name^="lignes"][name$="[quantite]"]');
                        const tva = row.querySelector('[name^="lignes"][name$="[tva]"]');

                        if (!designation.value.trim() || !produitId.value || !prixHt.value || !quantite.value || !tva.value) {
                            return false;
                        }
                    }

                    return true;
                }

                // Enhanced updateTotals function
                function updateTotals() {
                    let totalHt = 0;
                    let totalTva = 0;
                    let totalTtc = 0;

                    const rows = tbody.querySelectorAll('tr');
                    rows.forEach(row => {
                        const prixHt = parseFloat(row.querySelector('.prix-ht').value) || 0;
                        const quantite = parseFloat(row.querySelector('.quantite').value) || 0;
                        const tva = parseFloat(row.querySelector('.tva').value) || 0;
                        const remise = parseFloat(row.querySelector('.remise').value) || 0;

                        const montantHt = prixHt * quantite;
                        const montantRemise = montantHt * (remise / 100);
                        const htApresRemise = montantHt - montantRemise;
                        const montantTva = htApresRemise * (tva / 100);

                        totalHt += htApresRemise;
                        totalTva += montantTva;
                    });

                    totalTtc = totalHt + totalTva;

                    // Update display
                    document.getElementById('total-ht').textContent = totalHt.toFixed(2) + ' €';
                    document.getElementById('total-tva').textContent = totalTva.toFixed(2) + ' €';
                    document.getElementById('total-ttc').textContent = totalTtc.toFixed(2) + ' €';

                    // Update hidden inputs
                    document.getElementById('total-ht-input').value = totalHt.toFixed(2);
                    document.getElementById('total-tva-input').value = totalTva.toFixed(2);
                    document.getElementById('total-ttc-input').value = totalTtc.toFixed(2);
                }
            });
            // Ajout d'une nouvelle ligne
            document.getElementById('add-row').addEventListener('click', function() {
                const rowCount = tbody.children.length;
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td>
                        <input type="text" name="lignes[${rowCount}][designation]" class="form-control" required>
                    </td>
                    <td>
                        <select name="lignes[${rowCount}][produit_id]" class="product-select form-control" required>
                            <option value="">Sélectionnez un produit</option>
                            @foreach($produits as $produit)
                                <option value="{{ $produit->id }}" data-prix="{{ $produit->prix_unitaire }}">
                                    {{ $produit->nom }}
                                </option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input type="number" name="lignes[${rowCount}][prix_ht]" class="prix-ht form-control" step="0.01" required>
                    </td>
                    <td>
                        <input type="number" name="lignes[${rowCount}][quantite]" class="quantite form-control" required>
                    </td>
                    <td>
                        <input type="number" name="lignes[${rowCount}][tva]" class="tva form-control" step="0.01" required>
                    </td>
                    <td>
                        <input type="number" name="lignes[${rowCount}][remise]" class="remise form-control" step="0.01" value="0">
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger remove-row">Supprimer</button>
                    </td>
                `;
                tbody.appendChild(newRow);
            });
            function updateTotals() {
            let totalHt = 0;
            let totalTva = 0;
            let totalTtc = 0;

            const rows = tbody.querySelectorAll('tr');
            rows.forEach(row => {
                const prixHt = parseFloat(row.querySelector('.prix-ht').value) || 0;
                const quantite = parseFloat(row.querySelector('.quantite').value) || 0;
                const tva = parseFloat(row.querySelector('.tva').value) || 0;
                const remise = parseFloat(row.querySelector('.remise').value) || 0;

                const montantHt = prixHt * quantite;
                const montantRemise = montantHt * (remise / 100);
                const htApresRemise = montantHt - montantRemise;
                const montantTva = htApresRemise * (tva / 100);

                totalHt += htApresRemise;
                totalTva += montantTva;
            });

            totalTtc = totalHt + totalTva;

            // Mettre à jour les champs cachés
            document.getElementById('total-ht-input').value = totalHt.toFixed(2);
            document.getElementById('total-tva-input').value = totalTva.toFixed(2);
            document.getElementById('total-ttc-input').value = totalTtc.toFixed(2);

            // Mettre à jour l'affichage
            document.getElementById('total-ht').textContent = totalHt.toFixed(2) + ' €';
            document.getElementById('total-tva').textContent = totalTva.toFixed(2) + ' €';
            document.getElementById('total-ttc').textContent = totalTtc.toFixed(2) + ' €';
        }
            // Fonctions pour le modal
            window.openModal = function() {
                document.getElementById('invoiceModal').style.display = 'block';
            }

            window.closeModal = function() {
                document.getElementById('invoiceModal').style.display = 'none';
            }

            window.resetForm = function() {
                if (confirm('Êtes-vous sûr de vouloir réinitialiser le formulaire ?')) {
                    document.getElementById('invoiceForm').reset();
                    while (tbody.children.length > 1) {
                        tbody.removeChild(tbody.lastChild);
                    }
                    updateTotals();
                }
            }

            // Fermeture du modal en cliquant à l'extérieur
            window.onclick = function(event) {
                const modal = document.getElementById('invoiceModal');
                if (event.target == modal) {
                    closeModal();
                }
            }

            // Initialisation des totaux
            updateTotals();
            tbody.addEventListener('change', function(event) {
                if (event.target.classList.contains('product-select')) {
                    const row = event.target.closest('tr');
                    const prixInput = row.querySelector('.prix-ht');
                    const selectedOption = event.target.options[event.target.selectedIndex];
                    const prix = selectedOption.getAttribute('data-prix');
                    
                    if (prix) {
                        prixInput.value = prix;
                        updateTotals();
                    }
                }
            });
        });
        // Open the edit invoice modal
                function openEditModal(id) {
                    // Set form action
                    document.getElementById('editInvoiceForm').action = '/factures/' + id;
                    
                    // Fetch invoice data and populate the form
                    fetch('/factures/' + id + '/edit')
                        .then(response => response.json())
                        .then(data => {
                            // Populate basic info
                            document.getElementById('edit-invoice-number').value = data.facture.numero_facture;
                            document.getElementById('edit-invoice-date').value = data.facture.date_facture;
                            document.getElementById('edit-company-name').value = data.facture.societe;
                            document.getElementById('edit-company-address').value = data.facture.adresse;
                            document.getElementById('edit-company-phone').value = data.facture.telephone;
                            document.getElementById('edit-client-address').value = data.facture.adresse_client;
                            document.getElementById('edit-client').value = data.facture.client;
                            
                            // Clear existing rows
                            const tbody = document.getElementById('edit-invoice-items-body');
                            tbody.innerHTML = '';
                            
                            // Populate invoice lines
                            data.lignes.forEach((ligne, index) => {
                                addEditInvoiceRow(index, ligne);
                            });
                            
                            // Update totals
                            updateEditTotals();
                        });
                    
                    // Show the modal
                    document.getElementById('editInvoiceModal').style.display = 'block';
                }

                // Close the edit invoice modal
                function closeEditModal() {
                    document.getElementById('editInvoiceModal').style.display = 'none';
                }

                // Add a row to the edit invoice form
                function addEditInvoiceRow(index, ligne = null) {
                    const tbody = document.getElementById('edit-invoice-items-body');
                    const row = document.createElement('tr');
                    
                    row.innerHTML = `
                        <td>
                            <input type="text" name="lignes[${index}][designation]" value="${ligne ? ligne.designation : ''}" required>
                        </td>
                        <td>
                            <select name="lignes[${index}][produit_id]" class="product-select form-control" required>
                                <option value="">Sélectionnez un produit</option>
                                @foreach($produits as $produit)
                                    <option value="{{ $produit->id }}" data-prix="{{ $produit->prix_unitaire }}" ${ligne && ligne.produit_id == {{ $produit->id }} ? 'selected' : ''}>
                                        {{ $produit->titre }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input type="number" name="lignes[${index}][prix_ht]" value="${ligne ? ligne.prix_ht : ''}" class="prix-ht" step="0.01" required>
                        </td>
                        <td>
                            <input type="number" name="lignes[${index}][quantite]" value="${ligne ? ligne.quantite : ''}" class="quantite" required>
                        </td>
                        <td>
                            <input type="number" name="lignes[${index}][tva]" value="${ligne ? ligne.tva : ''}" class="tva" step="0.01" required>
                        </td>
                        <td>
                            <input type="number" name="lignes[${index}][remise]" value="${ligne ? ligne.remise : '0'}" class="remise" step="0.01">
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger remove-row">Supprimer</button>
                        </td>
                    `;
                    
                    tbody.appendChild(row);
                    
                    // Add event listeners for this row
                    row.querySelector('.remove-row').addEventListener('click', function() {
                        row.remove();
                        updateEditTotals();
                    });
                    
                    row.querySelectorAll('.prix-ht, .quantite, .tva, .remise').forEach(input => {
                        input.addEventListener('change', updateEditTotals);
                    });
                    
                    // Product selection handler
                    row.querySelector('.product-select').addEventListener('change', function() {
                        const selectedOption = this.options[this.selectedIndex];
                        if (selectedOption && selectedOption.dataset.prix) {
                            row.querySelector('.prix-ht').value = selectedOption.dataset.prix;
                            updateEditTotals();
                        }
                    });
                }

                // Update the totals in the edit form
                function updateEditTotals() {
                    let totalHT = 0;
                    let totalTVA = 0;
                    let totalTTC = 0;
                    
                    const rows = document.querySelectorAll('#edit-invoice-items-body tr');
                    
                    rows.forEach(row => {
                        const prixHT = parseFloat(row.querySelector('.prix-ht').value) || 0;
                        const quantite = parseInt(row.querySelector('.quantite').value) || 0;
                        const tva = parseFloat(row.querySelector('.tva').value) || 0;
                        const remise = parseFloat(row.querySelector('.remise').value) || 0;
                        
                        const ligneHT = prixHT * quantite;
                        const ligneTVA = ligneHT * (tva / 100);
                        const ligneRemise = ligneHT * (remise / 100);
                        const ligneTTC = ligneHT + ligneTVA - ligneRemise;
                        
                        totalHT += ligneHT;
                        totalTVA += ligneTVA;
                        totalTTC += ligneTTC;
                    });
                    
                    document.getElementById('edit-total-ht').textContent = totalHT.toFixed(2) + ' €';
                    document.getElementById('edit-total-tva').textContent = totalTVA.toFixed(2) + ' €';
                    document.getElementById('edit-total-ttc').textContent = totalTTC.toFixed(2) + ' €';
                    
                    document.getElementById('edit-total-ht-input').value = totalHT.toFixed(2);
                    document.getElementById('edit-total-tva-input').value = totalTVA.toFixed(2);
                    document.getElementById('edit-total-ttc-input').value = totalTTC.toFixed(2);
                }

                // Initialize edit form event listeners
                document.addEventListener('DOMContentLoaded', function() {
                    // Edit form "Add row" button
                    document.getElementById('edit-add-row').addEventListener('click', function() {
                        const rowCount = document.querySelectorAll('#edit-invoice-items-body tr').length;
                        addEditInvoiceRow(rowCount);
                    });
                });

                window.addEventListener('DOMContentLoaded', event => {
                    // Simple-DataTables
                    // https://github.com/fiduswriter/Simple-DataTables/wiki
                    const datatablesSimple = document.getElementById('datatablesSimple');
                    if (datatablesSimple) {
                        new simpleDatatables.DataTable(datatablesSimple);
                    }
                });
    </script>