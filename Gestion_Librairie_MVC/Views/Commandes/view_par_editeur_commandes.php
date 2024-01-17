<div>
    <h1>Par Editeur</h1>
    <select name="" id="">
    <option value="">Sélectionner un Editeur : </option>
        <?php  
            echo "je suis dans la view";

            foreach($commandes as $c ): ?>
            
                <option value=""><?=$c->Editeur?></option>
            
        <?php endforeach; ?>

    </select>

    <button>Rechercher</button>

</div>            
              
