<div>
    <h1>Tout les fournisseurs</h1>
<table id='table' style="border:2px solid red">
    <thead >
        <th style="border:2px solid red">code_fournisseur</th>
        <th style="border:2px solid red">raison_sociale</th>
        <th style="border:2px solid red">rue_fournisseur</th>
        <th style="border:2px solid red">code_postal</th>
        <th style="border:2px solid red">localite</th>
        <th style="border:2px solid red">pays</th>
        <th style="border:2px solid red">tel_fournisseur</th>
        <th style="border:2px solid red">url_fournisseur</th>
        <th style="border:2px solid red">email_fournisseur</th>
        <th style="border:2px solid red">fax_fournisseur</th>
        <!-- <th>Langue</th> -->
    </thead>
    <?php  foreach($fournisseurs as $f ): ?>
    <tr>
        <td style="border:2px solid red"><?=$f->Code_fournisseur?></td>
        <td style="border:2px solid red"><?=$f->Raison_sociale?></td>
        <td style="border:2px solid red"><?=$f->Rue_fournisseur?></td>
        <td style="border:2px solid red"><?=$f->Code_postal?></td>
        <td style="border:2px solid red"><?=$f->Localite?></td>
        <td style="border:2px solid red"><?=$f->Pays?></td>
        <td style="border:2px solid red"><?=$f->Tel_fournisseur?></td>
        <td style="border:2px solid red"><?=$f->Url_fournisseur?></td>
        <td style="border:2px solid red"><?=$f->Email_fournisseur?></td>
        <td style="border:2px solid red"><?=$f->Fax_fournisseur?></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>            
              