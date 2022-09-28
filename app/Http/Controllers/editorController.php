<?php

namespace App\Http\Controllers;

use App\Models\Editor;
use Illuminate\Http\Request;

class editorController extends Controller
{
    #region Récupération
    /**
     * Récupération des données
     */
    public function show()
    {
        $editors = Editor::all();
    }
    #endregion
    #region Ajout
    /**
     * Ajout d'une donnée
     */
    public function create()
    {
        $title = "Ajout d'un Éditeur";
        $template = "createEditor";
        $array = ["name_fname" => "name", "name_content" => "Nom de l'éditeur : ", "name_placeholder" => "Nom de l'éditeur"];
        $values = (object)$array;
        return view("forms.create", ["title" => $title, "template" => $template, "values" => $values]);
    }
    /**
     * Validation de l'ajout
     */
    public function valid(Request $request)
    {
        $title = "Validation de l'ajout d'un éditeur";
        $content = "L'éditeur à été ajouté.";
        $editor = new Editor();
        $editor->name = $request->name;
        $editor->save();
        $values = ["name" => "Nom : ".$request->name];
        return view("forms.valid", ["title" => $title, "values" => $values, "content" => $content]);
    }
    #endregion
    #region Modification
    /**
     * Modification d'une donnée
     */
    public function update(int $index)
    {
        $title = "Modification d'un éditeur";
        $action = "/editor/updateValid";
        $template = "updateeditor";
        $array = ["name_fname" => "name", "name_content" => "Nom de l'éditeur : ", "name_placeholder" => "Nom de l'éditeur"];
        $content = (object)$array;
        $editor = Editor::where("id", "=", $index)->first();
        if ($editor == NULL) {
            $titleError = "Modification d'un éditeur";
            $contentError = "L'éditeur n'existe pas à l'id".$index;
            return view("forms.error", ["title" => $titleError, "content" => $contentError]);
        }
        return view("forms.update", ["title" => $title, "action" => $action, "template" => $template, "values" => $editor, "contents" => $content]);
    }
    /**
     * Validation de la modification
     */
    public function updateValid(Request $request)
    {
        $title = "Modification de l'éditeur";
        $content = "L'éditeur à été modifié.";
        $editor = Editor::where("id", "=", $request->id)->first();
        $editor->name = $request->name;
        $editor->save();
        return view("forms.updateValid",["title" => $title, "content" => $content]);
    }
    #endregion
    #region Suppression
    /**
     * Suppression d'une donnée
     */
    public function delete(int $index)
    {
        $title = "Suppression de l'éditeur";
        $action = "/editor/deleteValid";
        $template = "deleteeditor";
        $array = ["name" => "Nom de l'éditeur : "];
        $content = (object)$array;
        $editor = Editor::where("id", "=", $index)->first();
        if ($editor == NULL) {
            $titleError = "Suppression d'un éditeur";
            $contentError = "L'éditeur n'existe pas à l'id".$index;
            return view("forms.error", ["title" => $titleError, "content" => $contentError]);
        }
        return view("forms.delete", ["title" => $title, "action" => $action, "template" => $template, "values" => $editor, "contents" => $content]);
    }
    /**
     * Validation de la suppression
     */
    public function deleteValid(Request $request)
    {
        $title = "Suppresion de l'éditeur";
        $content = "L'éditeur à été supprimé.";
        Editor::where("id", "=", $request->id)->first()->delete();
        return view("forms.deleteValid", ["title" => $title, "content" => $content]);
    }
    #endregion
}
