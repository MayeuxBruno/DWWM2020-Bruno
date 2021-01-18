<div></div>
</div>
<footer>
    <h3>&copy;DWWM 2020</h3>
</footer>
<script src="./JS/GestionSessions.js"></script>
<?php 
if (isset($page))
{
    switch ($page[1])
    {
        case "FormStagiaireInfos" : echo '<script src="./JS/VerifFormStagiaire.js"></script>';break;

    }
}
      ?>
</body>

</html>