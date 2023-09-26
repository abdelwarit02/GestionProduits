<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <title>ajouter</title>
</head>
<body>

    <div class="container">
    <form action={{ route('Produit.store') }} method="POST">
        <h2>Ajouter Produit</h2>
        @csrf
         <input placeholder="Libelle" type="text" name="libelle"/>
        <br/>
         <input placeholder="Code bare" type="text" name="code_bare"/>
        <br/>
        <input placeholder="Seuil" type="text" name="seuil"/>
        <br/>
        <input placeholder="Prix d'achat" type="text" name="prix_achat"/>
        <br/>
        <input placeholder="Prix de vente" type="text" name="prix_vente"/>
        <br/>
        <button type="submit">Done</button>
        <br/>
        @foreach ($errors->all() as $error)
        <span>{{ $error }}</span>
        @endforeach








    </form></div>
</body>
</html>
