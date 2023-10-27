<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo"><a href="#">LOGO</a></div>
            <div class="navlinks">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Acceuil</a></li>
                    <li><a href="">A propos</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="content">
                <div class="content_left">
                    <h2>Veuillez remplir le formulaire suivant:</h2>
                    <form action="index.php" method="post">
                        <div class="content_left_item">
                            <input type="text" placeholder="NOM" id="last_Name" name="last_Name">
                        </div>
                        <div class="content_left_item">
                            <input type="text" placeholder="Prénoms" id="first_name" name="first_name">
                        </div>
                        <div class="content_left_item">
                            <input type="number" placeholder="Âge" id="old" name="old">
                        </div>
                        <div class="content_left_item">
                            <input type="text" placeholder="Adresse" id="adress" name="adress">
                        </div>
                        <div class="content_left_item">
                            <input type="email" placeholder="Email" id="email" name="email">
                        </div>
                        <div class="content_left_item">
                            <label for="description">Votre description</label>
                            <textarea name="description" cols="25" rows="5" id="description" name="description"></textarea>
                        </div>
                        <div>
                            <button type="button" name="submit" onclick="addTableau()">Soumettre</button>
                        </div>
                    </form>
                </div>
                <div class="content_right">
                    <div class="content_right_top">
                        <table>
                            <caption style="font-weight: bold;">RECUPERATION EN JS</caption>
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prénoms</th>
                                    <th>Âge</th>
                                    <th>Adresse</th>
                                    <th>Email</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody class="tableauBody">

                            </tbody>
                        </table>
                    </div>
                    <div class="content_right_bottom">
                        <?php
                        if (isset($_POST['submit'])) {
                            $last_Name = $_POST['last_Name'];
                            $first_name = $_POST['first_name'];
                            $old = $_POST['old'];
                            $adress = $_POST['adress'];
                            $email = $_POST['email'];
                            $description = $_POST['description'];

                            echo "<table>
                            <caption style='font-weight: bold;'>RECUPERATION EN PHP</caption>
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prénoms</th>
                                    <th>Âge</th>
                                    <th>Adresse</th>
                                    <th>Email</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>$last_Name</td>
                                    <td>$first_name</td>
                                    <td>$old</td>
                                    <td>$adress</td>
                                    <td>$email</td>
                                    <td>$description</td>
                                </tr>
                            </tbody>
                            </table>";
                        }
                        ?>

                    </div>

                </div>
            </div>


        </div>

    </main>

    
    <script src="./assets/javascript/index.js"></script>
</body>

</html>