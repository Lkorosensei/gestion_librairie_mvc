<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
<table id='table'>
    <thead>
        <th>idCommande</th>
        <th>ISBN</th>
        <th>code_fournisseur</th>
        <th>dateAchat</th>
        <th>prixAchat</th>
        <th>nbrExemplaire</th>
    </thead>
    <?php  foreach($commandes as $c ): ?>
    <tr>
        <td><?=$c->idCommande?></td>
        <td><?=$c->ISBN?></td>
        <td><?=$c->code_fournisseur?></td>
        <td><?=$c->dateAchat?></td>
        <td><?=$c->prixAchat?></td>
        <td><?=$c->nbrExemplaire?></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>            
              