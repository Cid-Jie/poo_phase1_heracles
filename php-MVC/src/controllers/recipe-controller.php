<?php

require __DIR__ . '/../models/recipe-model.php';

function browseRecipes(): void
{
    $recipes = getAllRecipes();

    require __DIR__ . '/../views/index.php';
}

function showRecipe(int $id):void
{
    $recipe = getRecipeById($id);
    if (!isset($recipe['title']) || !isset($recipe['description'])) {
        header("Location: /");
        exit("Recipe not found");
    }
    require __DIR__.'/../views/show.php';
}

function addRecipe():void
{
    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        $recipe = array_map('trim', $_POST);
        
        if (empty($errors)) 
        {
            saveRecipe($recipe);
            header('Location: /');
            die();
        }
    }
    require __DIR__ . '/../views/form.php';
}

