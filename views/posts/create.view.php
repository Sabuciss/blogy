<?php require "views/component/header.php"; ?>
<?php require "views/component/navbar.php"; ?>

<h1>Izveidot jaunu bloga ierakstu</h1>

<div class="container">
    <form method="POST">
        <label for="category_id">Saturs:</label>
        <select name="category_id" id="category_id">
            <option value="">Izvēlies </option>
            <?php foreach ($fruits as $fruit): ?>
                <option value="<?= htmlspecialchars($fruit['id']) ?>" 
                    <?= (isset($_POST["category_id"]) && $_POST["category_id"] == $fruit['id']) ? "selected" : "" ?>>
                    <?= htmlspecialchars($fruit['cfruit_name']) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <?php if (isset($errors["category_id"])): ?>
            <p class="error"><?= $errors["category_id"] ?></p>
        <?php endif; ?>

        <label for="content">Saturs:</label>
        <input type="text" name="content" value="<?= htmlspecialchars($_POST['content'] ?? '') ?>" />

        <?php if (isset($errors["content"])): ?>
            <p class="error"><?= $errors["content"] ?></p>
        <?php endif; ?>

        <button class="button" type="submit">Izveido</button>
    </form>
</div>

<?php require "views/component/footer.php"; ?>