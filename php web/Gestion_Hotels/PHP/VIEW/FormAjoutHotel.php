<form action="index.php?codePage=actionAjoutHotel" method="POST">
    <div>
        <label for="nomHotel">Nom</label>
        <input name="nomHotel" />
    </div>
    <div>
        <label for="AdresseHotel">Adresse</label>
        <input name="AdresseHotel" />
    </div>
    <div>
        <label for="VilleHotel">Ville</label>
        <input name="VilleHotel" />
    </div>
    <div>
        <label for="CategorieHotel">Catégorie</label>
        <input name="CategorieHotel" value="1" />
    </div>
        <input name="idStation" value="1" type="hidden" />
    <div></div>
    <button type="submit">Ajouter un hotel</button>
<button><a href="index.php?codePage=listeHotel">Retour</a></button>
</form>