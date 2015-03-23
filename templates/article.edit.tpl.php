<?php
if ($article) {
    
// on affiche l'article 
?>
<h2>Ajout/édition d'un article</h2>

<form method="post" action="index.php?page=article_edit">
	<label>Title :<input type="text" name="title" value="<?php echo ($article->id>0 ? $article->title : ""); ?>" /></label>
	<label>Content:
		<textarea name="content"><?php echo ($article->id>0 ? $article->content : ""); ?></textarea>
	</label>
	<input type="hidden" name="id" value="<?php echo $article->id; ?>" />
	<input type="submit" name="submit" value="Envoyer" />
</form>
<?php 
// sinon on affiche un message d'erreur
} else {
	echo "<h2>Aucun article avec cet identifiant.</h2>";
}