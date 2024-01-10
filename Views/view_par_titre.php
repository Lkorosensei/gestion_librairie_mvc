<div>
    <h1>Par Titre</h1>

        
        <select name="" id="">
            <option value="">Sélectionnez un Titre : </option>
            <?php  foreach($livres as $l ): ?>
                
                    <option value=""><?=$l->Titre_livre?></option>
                
            <?php endforeach; ?>

        </select>

        <button type="submit" name="rechercher">Rechercher</button>
    </form>
</div>            
              