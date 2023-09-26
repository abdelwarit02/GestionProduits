<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/affichage.css') }}">
    <title>affichage</title>
</head>
<body>
    @if (session('alert'))
    <div class="alert" style="color: red">
        {{ session('alert') }}
    </div>
@endif
    <div>

<table id="Produits">
<thead>
    <tr>

        <td> Libelle </td>
        <td> Code bare </td>
        <td> Stock </td>
        <td>Seuil</td>
        <td> Prix d'achat </td>
        <td> Prix de vente </td>
        <td> Actions </td>


    </tr>
</thead>
<tbody>

        @foreach ($data as $produit )
        <tr>
        <td>{{ $produit->libelle }}</td>
        <td> {{ $produit->code_bare }} </td>
        @if ($produit->quantite_produit >= $produit->seuil)
        <td style="color: green"> {{ $produit->quantite_produit  }} </td>
        @elseif ($produit->quantite_produit < $produit->seuil && $produit->quantite_produit >= $produit->seuil/2)
        <td style="color: rgb(255, 182, 25)"> {{ $produit->quantite_produit  }} </td>
        @elseif ($produit->quantite_produit < $produit->seuil/2 && $produit->quantite_produit >= 0)
        <td style="color: rgb(230, 47, 26)"> {{ $produit->quantite_produit  }} </td>
        @else
        <td style="color: rgb(230, 47, 26)"> {{ $quantite_produit=0 }} </td>
        @endif
        <td>{{ $produit->seuil }}</td>




        <td> {{ $produit->prix_achat }} MAD </td>
        <td> {{ $produit->prix_vente }} MAD </td>
        <td>
            <div class="actions">
            <a class="a_button" href="{{ route("Produit.edit",$produit->id) }}">Edit</a>
             <form action={{ route('Produit.delete',$produit->id) }} method="post">
            @csrf
            @method('delete')
            <button class="delete_button" type="submit">Delete</button>
        </form>
    </div></td>

    </tr>

    @endforeach


</tbody>




</table>
<div class="buttons"><a href="{{ route('Produit.ajouter') }}"><button class="ajouter_button">Ajouter</button></a>
<a href="{{ route('Movement.create') }}"><button class="movement_button">Movement</button></a></div>








</div>

</body>
</html>


