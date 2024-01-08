<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
<table id='table'>
    <thead>
        <th>code_fournisseur</th>
        <th>raison_sociale</th>
        <th>rue_fournisseur</th>
        <th>code_postal</th>
        <th>localite</th>
        <th>pays</th>
        <th>tel_fournisseur</th>
        <th>url_fournisseur</th>
        <th>email_fournisseur</th>
        <th>fax_fournisseur</th>
        <!-- <th>Langue</th> -->
    </thead>
    <?php  foreach($fournisseurs as $f ): ?>
    <tr>
        <td><?=$f->code_fournisseur?></td>
        <td><?=$f->raison_sociale?></td>
        <td><?=$f->rue_fournisseur?></td>
        <td><?=$f->code_postal?></td>
        <td><?=$f->localite?></td>
        <td><?=$f->pays?></td>
        <td><?=$f->tel_fournisseur?></td>
        <td><?=$f->url_fournisseur?></td>
        <td><?=$f->email_fournisseur?></td>
        <td><?=$f->fax_fournisseur?></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>            
              