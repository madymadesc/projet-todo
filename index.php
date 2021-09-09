<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projet_todo</title>
        <!-- Lien css -->
        <link href="style.css" type="text/css" rel="stylesheet" />
    </head>
    <!-- fond de ma page (image) -->
    <body style="background-image: url('images/slider1.jpg')" >
        <!-- Entête de ma page -->
       <div class="tete" >
            <h1> <i>TODO</i><br> Gestionaire facile de vos tâches !!!</h1>
            <!-- Image anime insertion -->
                <div class='anim_auto'>
                    <div class="anim_pro_auto">
                        <div class="anim-image">
                            <img src="anim/anim 0.png" alt>
                            <img src="anim/anim 1.jpg" alt>
                            <img src="anim/anim 2.jpg" alt>
                            <img src="anim/anim 3.jpg" alt>
                            <img src="anim/anim 9.jpg" alt>
                            <img src="anim/anim 5.jpg" alt>
                            <img src="anim/anim 6.jpg" alt>
                            <img src="anim/anim 7.jpg" alt>
                            
                        </div>
                    </div>
                </div>
         <!-- Fin image anime insertion -->
         <!-- bloc tache -->
                <div id="tasker" class="tasker">
                    <div id="error" class="error">
                        <b>Pour ajouter une tache, 
                           <br> vous devez l'écrire dabord</b> 
                    </div>

                    <!-- Insertion tache -->
                    <div id="todo-header" class="todo-header">
                        <input type="text" 
                        id="input-task" 
                        name="title" 
                        style="border-color: #ff6666" 
                        placeholder="Ajouter une tâches">
                            <!-- button ajouter tache -->
                        <button id="add-task"type="submit">
                            <i class="fa fa-fw fa-plus">&nbsp; 
                            <span>&#43;</span> Ajouter</i>
                        </button>
                    </div>

                        <!-- liste des taches -->
                        <div class="toto">
                            <div class="todo-lists">
                            <ul id="tasks"></ul>
                            </div>
                        </div>
                </div>

    <a href="tache.php"><h1>TEST</h1></a>

            <!-- fin bloc tache -->
            <!-- Mon pied de page -->
            <footer> 
                <section class="piedpage">
                    <small>Copy right ODK 2021 &nbsp;
                        by M2C Dev <br> 
                    </small>
                </section>
            </footer>
        </div>
        <!-- lien script -->
         <script  src="todojs.js"></script>-->
    </body>
</html>