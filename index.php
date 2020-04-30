<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certif-Mika</title>
    <link rel="stylesheet" href="asset/css/main.css">
    <script src="asset/js/script.js"></script>
</head>
<body>
    <main>
        <header>
            <a href="web gnezale.pdf" id="cv">Telechargement CV</a>
        </header>

        <section>
            <article id="présentation">
                <h1>Mikael Gnezale</h1>
            </article>
        </section>

        <section id="rub">
            <article id="rubrique">

                <div id="web">
                    <a href="un.html"><h1 id="titre">WEB</h1></a>
                </div>

                <div id="art">
                    <a href="deux.html"><h1 id="titre">ART</h1></a>
                </div> 

            </article>
        </section>

        <section id="barre">
            <div>
                <form id="recherche" action="asset/php/formulaire.php" method="POST">
                    <input type="text" id="nom" name="username" placeholder="Nom" required/>
                    <br/>
                    <input type="text" id="prenom" name="username" placeholder="Prénom" required/>
                    <br/>
                    <input type="text" id="mail" name="mail" placeholder="E-mail" required/>
                    <br/>
                    <textarea id="message"></textarea>
                    <br/>
                    <div id="b">
                        <button id="button">OK</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>