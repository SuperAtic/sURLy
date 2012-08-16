<?php
if( !defined('PHURL' ) ) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
ini_set('display_errors', 0);
?>
<h2>Create a short URL</h2>
<?php print_errors() ?>
<div id="create_form">
<form method="get" action="index.php">
<p><label for="url">Enter web address (URL) here:</label><br />
<img src="../assets/images/check.png" alt="drag" width="16" height="16" border="0" /> <input id="url" type="text" name="url" value="<?php echo htmlentities(@$_GET['url']) ?>" />
<input class="button" type="submit" value="Shorten" /></p>
<p><label for="alias">Custom alias (optional):</label><br />
<img src="../assets/images/link.png" alt="drag" width="16" height="16" border="0" /> <?php echo SITE_URL ?>/<input id="alias" maxlength="40" type="text" name="alias" value="<?php echo htmlentities(@$_GET['alias']) ?>" /><br />
<em>May contain letters, numbers, dashes and underscores.</em></p>
</form>
</div>
<br /><br /><script type="text/javascript">
//<![CDATA[
if (document.getElementById) {
    document.getElementById('url').focus();
}
//]]>
</script>