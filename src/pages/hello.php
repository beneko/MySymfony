
<h1>Hello <?= htmlspecialchars(isset($name) ? $name : 'World', ENT_QUOTES) ?>!</h1>
