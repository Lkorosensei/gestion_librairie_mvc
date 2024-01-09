<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>

    <h1>Par Pays</h1>
    <select name="" id="">

        <?php  foreach($fournisseurs as $f ): ?>
            
                <option value=""><?=$f->Pays?></option>
            
        <?php endforeach; ?>

    </select>

</div>            
              