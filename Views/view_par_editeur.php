<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>

    <h1>Par Titre</h1>
    <select name="" id="">

        <?php  foreach($livres as $l ): ?>
            
                <option value=""><?=$l->Editeur?></option>
            
        <?php endforeach; ?>

    </select>

</div>            
              