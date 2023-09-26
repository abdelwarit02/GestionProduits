<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    <title>editer</title>
</head>
<body>
    <div class="container">
    <form action={{ route('Produit.update',$data->id) }} method="post">
        @method("patch")
        <h2>Editer Produit</h2>
        @csrf
         <input placeholder="libelle" type="text" name="libelle" value="{{ $data->libelle }}"/>
        <br/>
         <input placeholder="code bare" type="text" name="code_bare" value="{{ $data->code_bare }}"/>
        <br/>
          <input placeholder="quantité produit" type="text" name="quantite_produit" value="{{ $data->quantite_produit }}"/>
         <br/>
        <input placeholder="prix d'achat" type="text" name="prix_achat" value="{{ $data->prix_achat }}"/>
        <br/>
         <input placeholder="prix de vente" type="text" name="prix_vente" value="{{ $data->prix_vente }}"/>
        <br/>
        <button type="submit">update</button>
        <br/>









    </form>
</div>
</body>
</html>
