# comments
## Mon projet comments est créé en PHP et HTML
### Ici vous ferez un petit voyage dans la conception d'un formulaire qui vous permet d'écrire votre adresse e-mail, le sujet du commentaire et un commentaire avec un bouton d'envoi en dessous de l'espace dédié au commentaire, qui vous permet de visualiser en haut du formulaire votre commentaire envoyé et les commentaires précédents avec la date, l'heure, l'email et le contenu du commentaire. 

*Ingrédients utilisés pour le gâteau:* (similaire comme nous l'avons vu dans mon précédent Readme de mon repositorie appelé CV)

- PHPSTORM
- XAMPP: MySQL(php MyAdmin), Apache web server, ProFTPD
- Code en PHP 
- Code en HTML

>Pour créer une page, afficher une liste de commentaires et répondre à cette liste en ajoutant nos propres commentaires,
>il faut créer une table dans la base de données en mettant la liste des commentaires de manière organisée dans la base de données, c'est-à-dire dans MySQL depuis notre php MyAdmin.

<img width="955" alt="Capture d’écran MySQL  phpMyAdmin" src="https://user-images.githubusercontent.com/92331050/144262487-ce48a2b2-b0a5-4271-938d-fc6a9fd78fdf.png">

>Nous devons créer notre base de données en lui donnant un nom:
- Cliquer sur *Nouvelle base de données*
- Saisissez un nom dans l'espace dédié, puis cliquez sur *Créer* (dans mon cas, je l'ai nommé commentaires)
<img width="757" alt="Capture d’écran 2021-12-01 à 16 35 16" src="https://user-images.githubusercontent.com/92331050/144264985-1af97364-461b-4613-9d9e-25aafdad72cb.png">

>Après avoir fait cela, vous devrez créer une liste de commentaires à l'intérieur.
>Cliquez en haut de l'écran, là où il est indiqué *Base de données : commentaires*, comme le montre la capture d'écran ci-dessous.

<img width="1395" alt="Capture d’écran 2021-12-01 à 16 55 17" src="https://user-images.githubusercontent.com/92331050/144269104-d1f15ba2-3e49-4eea-8e3d-20194675121e.png">

>Ici, vous pouvez créer un tableau, ajouter un nom et le nombre de colonnes que vous souhaitez, puis cliquer sur Exécuter.

<img width="705" alt="Capture d’écran 2021-12-01 à 17 05 12" src="https://user-images.githubusercontent.com/92331050/144270261-9a8c628b-296c-4cf1-8dbb-660eb4ba3531.png">

>Une fois ici, vous verrez les 4 colonnes qui ont été ajoutées à notre base de données pour pouvoir ajouter les commentaires et les paramétrer en fonction du type, de la taille, de la valeur, de l'interclassement, Interclassement, Attributs, Null Index, A I, etc.

<img width="1418" alt="Capture d’écran 2021-12-01 à 17 12 15" src="https://user-images.githubusercontent.com/92331050/144272283-93e80a96-c1ea-4b62-a416-9b9ddf0367d3.png">

*Pour voir les principaux éléments génériques à définir et plus d'info, je vous recommande de consulter cet article intéressant*
~~~
https://cours.ebsi.umontreal.ca/sci6306/co/creation_bd.html
~~~

>Dans mon cas, j'ai procédé de la manière suivante : (J'ai rempli les éléments essentiels dont j'avais besoin)

<img width="1173" alt="Capture d’écran 2021-12-01 à 17 35 04" src="https://user-images.githubusercontent.com/92331050/144275255-65b28031-25b3-4edb-a453-a29f2325e2b6.png">

> Une fois que nous avons terminé la table dans MySQL phpMyAdmin, nous allons sur PHPSTORM, pour créer notre code dans HTLM et PHP.
> Pour faire la connexion entre notre code php + html effectué sur PHPSTORM et notre base de données nous devons placer dans notre code en PHPSTORM:
~~~
 $db = mysqli_connect("SERVEUR","UTILISATEUR","MOTDEPASSE","BDD");
~~~
*Note importante:*
N'oubliez pas de masquer les paramètres réels avant de les publier sur votre Github, les paramètres *("SERVEUR","UTILISATEUR","MOTDEPASSE","BDD")* sont sur une autre page non affichée sur le Github pour des raisons de sécurité.

*Back end*
*Résultat*

<img width="1400" alt="Capture d’écran 2021-12-03 à 01 27 17" src="https://user-images.githubusercontent.com/92331050/144524135-a16fd89d-67e4-4618-91b6-84a0e78be338.png">



- J'ai laissé quelques commentaires explicatifs et utiles dans mon code PHP et HTML dans ce repositorie comments.

*Front end*
*Résultat*

<img width="336" alt="Capture d’écran 2021-12-01 à 18 16 47" src="https://user-images.githubusercontent.com/92331050/144282668-b0a48e2b-80cc-44a7-ba93-2870c80ac2d6.png">


- Pour m'aider à réaliser ce projet en PHP, HTML et MySQL en utilisant PHPSTORM, j'ai consulté les documents suivants qui peuvent être d'une grande aide à un certain moment:
~~~
https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql
~~~

~~~
https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-accedez-aux-donnees-en-php-avec-pdo
~~~

~~~
https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php
~~~

>_Je pense que cet article pourra être modifié car j'ajouterai des informations que j'aurais pu oublier de mentionner._

>**_Merci beaucoup et à bientôt !_**
