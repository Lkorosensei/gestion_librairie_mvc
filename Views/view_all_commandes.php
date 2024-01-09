<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
    <h1>Toutes les commandes</h1>
<table id='table'>
    <thead>
        <th>Titre</th>
        <th>ISBN</th>
        <th>code_fournisseur</th>
        <th>dateAchat</th>
        <th>prixAchat</th>
        <th>nbrExemplaire</th>
    </thead>
    <?php  foreach($commandes as $c ): ?>
    <tr>
        <td><?=$c->Titre_livre?></td>
        <td><?=$c->Id_Livre?></td>
        <td><?=$c->Id_fournisseur?></td>
        <td><?=$c->Date_achat?></td>
        <td><?=$c->Prix_achat?></td>
        <td><?=$c->Nbr_exemplaires?></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>            
              