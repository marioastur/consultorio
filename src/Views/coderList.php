    <?php
        require_once("Components/layout.php")
    ?>

<body>
</head>
    <?php
        require_once("Components/header.php")
    ?>
    <main>
    
        <?php                  
            foreach ($data["coder"] as $coder) {
                echo '----------------<br>';
                echo ($coder->getId().' - ');
                echo ($coder->getCoder().' - ');
                echo ($coder->getIssue().' - ');
                echo ($coder->getDate_time().' - ');
                echo ("<a href='?action=delete&id={$coder->getId()}'><i class='lnr lnr-trash'></i> </a><br>");
            }
        ?>

    </main>
    
    <?php
        require_once("Components/footer.php")
    ?>
    
</body>
</html>