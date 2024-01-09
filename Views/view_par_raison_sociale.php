<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>

    <h1>Par Raison Sociale</h1>
    <select name="" id="">

        <?php  foreach($fournisseurs as $f ): ?>
            
                <option value=""><?=$f->Raison_sociale?></option>
            
        <?php endforeach; ?>

    </select>

</div>            
              