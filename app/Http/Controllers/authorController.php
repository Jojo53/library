<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class authorController extends Controller
{
    #region Récupération
    /**
     * Récupération des données
     */
    public function show()
    {
        $authors = Author::all();
    }
    #endregion
    #region Ajout
    /**
     * Ajout d'une donnée
     */
    public function create()
    {
        $title = "Ajout d'un auteur";
        $template = "createauthor";
        $array = [
            "lastName_fname" => "lastName",
            "lastName_content" => "Nom de l'auteur : ",
            "lastName_placeholder" => "Nom de l'auteur",
            "firstName_fname" => "firstName",
            "firstName_content" => "Prénom de l'auteur : ",
            "firstName_placeholder" => "Prénom de l'auteur"
        ];
        $values = (object)$array;
        return view("forms.create", ["title" => $title, "template" => $template, "values" => $values]);
    }
    /**
     * Validation de l'ajout
     */
    public function valid(Request $request)
    {
        $title = "Validation de l'ajout d'un auteur";
        $content = "L'auteur à été ajouté.";
        $author = new Author();
        $author->lastName = $request->lastName;
        $author->firstName = $request->firstName;
        $author->save();
        $values = [
            "lastName_name" => "Nom : ".$request->lastName,
            "firstName" => "Prénom : ".$request->firstName
        ];
        return view("forms.valid", ["title" => $title, "values" => $values, "content" => $content]);
    }
    #endregion
    #region Modification
    /**
     * Modification d'une donnée
     */
    public function update(int $index)
    {
        $title = "Modification d'un auteur";
        $action = "/author/updateValid";
        $template = "updateauthor";
        $author = Author::where("id", "=", $index)->first();
        $array = [
            "lastName_fname" => "lastName",
            'lastName_content' => "Nom de l'auteur : ",
            "lastName_placeholder" => "Nom de l'auteur",
            "firstName_fname" => "firstName",
            "firstName_content" => "Prénom de l'auteur : ",
            "firstName_placeholder" => "Prénom de l'auteur"
        ];
        $content = (object)$array;
        if ($author == NULL) {
            $titleError = "Modification d'un auteur";
            $contentError = "L'auteur n'existe pas à l'id ".$index;
            return view("forms.error", ["title" => $titleError, "content" => $contentError]);
        }
        return view("forms.update", ["title" => $title, "action" => $action, "template" => $template, "values" => $author, "contents" => $content]);
    }
    /**
     * Validation de la modification
     */
    public function updateValid(Request $request)
    {
        $title = "Modification d'un auteur";
        $content = "L'auteur à été modifié.";
        $author = Author::where("id", "=", $request->id)->first();
        $author->lastName = $request->lastName;
        $author->firstName = $request->firstName;
        $author->save();
        return view("forms.updateValid", ["title" => $title, "content" => $content]);
    }
    #endregion
    #region Suppression
    /**
     * Suppression d'une donnée
     */
    public function delete(int $index)
    {
        $title = "Suppression d'un auteur";
        $action = "/author/deleteValid";
        $template = "deleteauthor";
        $array = ["lastName" => "Nom de l'auteur : ",
                    "firstName" => "Prénom de l'auteur : "];
        $content = (object)$array;
        $author = Author::where("id", "=", $index)->first();
        if ($author == NULL) {
            $titleError = "Suppression d'un auteur";
            $contentError = "L'auteur n'existe pas à l'id ".$index;
            return view("forms.error", ['title' => $titleError, 'content' => $contentError]);
        }
        return view("forms.delete", ["title" => $title, "action" => $action, "template" => $template, "values" => $author, "contents" => $content]);
    }
    /**
     * Validation de la suppression
     */
    public function deleteValid(Request $request)
    {
        $title = "Suppression de l'auteur";
        $content = "L'auteur à été supprimé.";
        Author::where("id", "=", $request->id)->first()->delete();
        return view("forms.deleteValid", ["title" => $title, "content" => $content]);
    }
    #endregion
}
