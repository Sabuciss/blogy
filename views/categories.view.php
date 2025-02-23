<?php require "views/component/header.php"; ?>
<?php require "views/component/navbar.php"; ?>

<h1>Veidi</h1>

<ul>
    <?php foreach ($fruits as $fruit): ?>
        <li>
            <a href="/categories/edit?id=<?= urlencode($fruit['id']) ?>">
                <?= htmlspecialchars($fruit["fruit_name"]) ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php require "views/component/footer.php"; ?>