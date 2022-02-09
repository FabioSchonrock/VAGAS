<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Zen+Kurenaido&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/estilo.css">
        <title>Peladeiros de plantão</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Peladeiros de Plantão</h1>
        <h2>Controle da pelada</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                <h3>Básico</h3>
                    <ul>
                    <li>
                            <a href="exercicio.php?dir=basico&file=ola">
                                Olá, PHP
                            </a>
                    </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Tipos</h3>
                    <ul>
                    <li>
                            <a href="exercicio.php?dir=tipos&file=int">
                                Tipo Inteiro
                            </a>
                        </li>
                    </ul>                        
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        TE©RO©K <?= date('Y'); ?>
    </footer>
</body>
</html>