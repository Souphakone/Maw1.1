<?php
$headerText = "<span class='exercise-label'>Exercise: <a href='../../index.php?controller=answer&action=result'>voila</a></span>";
$headerClass = "heading results";
?>
<?php ob_start(); ?>
<h1>2021-09-01 13:30:53 UTC</h1>
<dl class="answer">
    <dt>la réponse d</dt>
    <dd>d</dd>
</dl>
<?php
$content = ob_get_clean();

require_once 'view/layout.php';

?>