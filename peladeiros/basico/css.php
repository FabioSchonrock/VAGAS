<div class="titulo">Integração CSS</div>

<h1>
<?php
echo 'Olá';
echo '<Small>';
echo ' Mundo!';
echo '</Small';
?>
</h1>
<?= "<div>Outra forma de me 'expressar'!</div>"?>

<br>
<div><button><?= "Legal" ?></button></div>

<Style>
    button {
        padding: 5px 20px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: #4286f4;
    }

    [dobro] {
        font-size: 2rem;
    }
</Style>