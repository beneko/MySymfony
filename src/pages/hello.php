<?php
$name = $request->query->get('name', 'World');
?>

<h1>Hello <?= htmlspecialchars($name, ENT_QUOTES) ?></h1>
