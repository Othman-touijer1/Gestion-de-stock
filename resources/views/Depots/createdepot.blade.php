<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h2>Ajouter un dépôt</h2>
    <form action="{{ route('depots.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nom</label>
            <input type="text" name="nom" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Statut</label>
            <select name="statut" class="form-control" required>
                <option value="actif">Actif</option>
                <option value="inactif">Inactif</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
</body>
</html>