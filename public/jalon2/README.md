## Auteurs
- BARGE Antony
- HERSEMEULE Bruce

## Jalon 2

# Pour tester et valider notre CRUD :
   - se rendre sur le lien http://localhost:8080/catalogue/public/films (READ)
   - clicker sur le bouton CREATE qui va vous emmener sur un form pour ajouter un film (CREATE)
   - le remplir (sans espace, ni caractère spéciaux, ni chiffre) puis valider avec le bouton "add film" (exemple: nomdufilmajoute)
   - la redirection vers la page de lecture affiche alors dans la datatable le film créé
   - ensuite, il suffit de remplacer l'url par http://localhost:8080/catalogue/public/addFilm/nomdufilmajoute
   - changer le nom dans le form et valider avec le bouton "Update !" (exemple: nomdufilmajoutemodifie) (UPDATE)
   - la redirection vers la page de lecture affiche alors dans la datatable le film modifié
   - ensuite, il suffit de remplacer l'url par http://localhost:8080/catalogue/public/addFilm/nomdufilmajoutemodifie
   - appuyer sur le bouton "DELETE" (DELETE)
   - la redirection vers la page de lecture n'affiche plus le film puisqu'il n'existe plus.

# Remarques :
La façon de remplir la base de donnée (UX) sera modifié par la suite selon les besoins.
De même, il ne s'agira plus de films mais d'animes. 
Les boutons UPDATE et DELETE sont fonctionnels uniquement s'il existe un film nommé avec les noms par défaut donnés en exemple.
