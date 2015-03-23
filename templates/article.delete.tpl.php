<?php
if ($article) {

?>
<h2>Confirmer la suppression</h2>

<form method="post" action="index.php?page=article_delete">
	<p><strong>Voulez-vous confirmer la suppression de l'article <?php echo $article->id; ?> ?<strong></p>
	<p>Titre : <?php echo $article->title; ?></p>
	<input type="hidden" name="id" value="<?php echo $article->id; ?>" />
	<input type="submit" name="confirmer" value="Confirmer" />
	<input type="submit" name="annuler" value="Annuler" />
</form>
<?php 
// sinon on affiche un message d'erreur
} else {
	echo "<h2>Aucun article avec cet identifiant.</h2>";
}