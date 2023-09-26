<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/create_movement.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form action={{ route('Movement.store') }} method="POST">
        <h2>Ajouter Movement</h2>
        @csrf
        <div class="selects">
        <select name="id_produit" >
            @foreach ( $data as $item)
                <option value="{{ $item->id }}">{{ $item->libelle }}</option>
            @endforeach
        </select>

        <select name="type">
            <option value="entré">entré</option>
            <option value="sortie">sortie</option>
        </select>
        </div>
        <input type="text" placeholder="Quantité" name="quantite">

        <input type="date" placeholder="Date" name="date">

        <button type="submit">Done</button>

    </form>
</div>
</body>
</html>
