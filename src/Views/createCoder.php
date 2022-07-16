<?php
        require_once("Components/layout.php")
    ?>

<body>
</head>
    <?php
        require_once("Components/header.php")
    ?>
    <main>

        <form action="?action=store" method="post">
            <input type="text" name="coder" id="coder" placeholder="Coder"><br>
            <textarea name="issue" id="issue" cols="30" rows="10" require placeholder="Issue"></textarea>
            <input type="submit" value="Crear">
            <input type="reset" value="Reset">

        </form>

        <?php                  
 
        ?>

    </main>
    
    <?php
        require_once("Components/footer.php")
    ?>
    
</body>
</html>