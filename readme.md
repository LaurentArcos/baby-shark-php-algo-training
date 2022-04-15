# Requin juvénile

## Objectifs

Travailler les boucles, les méninges et ta résistance aux musiques énervantes.

## Explications

Déborah a une chanson dans la tête depuis ce matin et a très envie de la partager avec ses collègues. Elle voudrait concocter un petit projet pour afficher les paroles car elles sont assez recherchées et difficile à comprendre. Pour t'aider à bien visualiser, voici à quoi doit [ressembler la page](assets/images/screen.png).

## Réalisation

### Couplets

Comme tu peux le constater sur l'image, la chanson est divisée en plusieurs couplets. Chaque couplet étant dédié à un membre de la famille *Requin*.

Tu disposes d'un tableau réunissant tous les membres de la famille. Avec l'aide d'une **boucle**, tu dois donc afficher autant de couplets que de membres.
Pour t'aider, le code HTML d'un couplet t'est déjà fourni en exemple dans `index.php`.

<details>
    <summary>Indices</summary>

- Pour boucler sur un tableau, l'idéal serait d'utiliser [foreach](https://www.php.net/manual/fr/control-structures.foreach.php).

</details>

### Paroles

Si tu regardes bien les paroles, chaque couplet commence par trois fois le même vers. Ce serait dommage de le réécrire trois fois à la main !

Ce même vers comporte aussi six fois le mot "doo". Ce serait tout autant dommage  de le réécrire six fois à la main !

Le but ici est d'éviter de te répéter au maximum et d'utiliser des boucles pour construire ces vers.

<details>
<summary>Indices</summary>

- Chaque vers commence par le nom du membre de la famille. Tu possèdes peut-être déjà cette information dans une variable ? 
- On peut construire une chaine de caractères petit à petit en la stockant dans une variable, puis en lui **concaténant** des informations avec le signe `.`.
- Si tu dois répéter une action **un certain nombre de fois**, la boucle [for](https://www.php.net/manual/fr/control-structures.for.php) est parfaite !
- Essaie de construire uniquement le premier vers dans un premier temps. Comme les deuxièmes et troisièmes sont identiques, tu pourras les dupliquer à l'aide d'une **boucle**.
  
</details>

### Style

Chaque couplet possède un style qui lui est propre, dont la couleur dépend du membre de la famille affiché. 
Le fichier CSS possède déjà les classes nécessaires pour styler les couplets, il suffit de leur ajouter la bonne classe. 

Analyse le fichier CSS et trouve la bonne classe pour chaque couplet. Mais comme aux étapes précédentes, utilise une boucle pour générer la classe à appliquer !

<details>
    <summary>Indices</summary>

- La classe qui applique le style particulier d'un couplet commence par `member-` suivie du nom du membre de la famille. Exemple : `member-baby` pour le premier couplet.
- Tu as déjà une boucle qui parcourt tous les membres de la famille, tu peux donc l'utiliser pour générer la classe à appliquer. :wink: 

</details>