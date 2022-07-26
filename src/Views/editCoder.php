<?php
require_once("Components/layout.php")
?>

<body>
    </head>
    <?php
    require_once("Components/header.php")
    ?>
    <main>
        <form action="?action=update&id=<?php echo $data['coder']->getId() ?>" method="post">
            <input type="text" name="coder" id="coder" require value="<?php echo $data['coder']->getName() ?>"><br>
            <textarea name="issue" id="issue" cols="30" rows="10" require value="<?php echo $data['coder']->getIssue() ?>"></textarea>
            <input type="submit" value="Crear">
            <input type="reset" value="Reset">
        </form>

    </main>

    <?php
    require_once("Components/footer.php")
    ?>