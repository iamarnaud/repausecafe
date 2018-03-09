<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 07/03/18
 * Time: 16:23
 */

namespace App\Http\Controllers;


use App\Comment;
use App\Images;
use App\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function post(Images $image, User $user, Request $request)
    {

        $commentaire = $request->input('comment_area');

        if (!isset($commentaire) || empty($commentaire)) {

            redirect('home');

        } else {

            $comment = new Comment();
            $comment->setAttribute("id_user", $user->id);
            $comment->setAttribute("id_image", $image->id);
            $comment->setAttribute("commentaire", $commentaire);

            $comment->save();


        }
        if ($request->headers->has("No-Redirect")) {
            return response()->json($comment);
        }
        session()->flash('status', 'Votre commentaire a bien été enregistré');
        return redirect('home');

    }


}