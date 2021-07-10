<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class commentsController extends AbstractController
{
    /**
     * @Route("/comment/{id}/vote/{direction<up>}",methods="POST")
     */
    public function commentVote($id,$direction){

       if($direction ==="up"){
         $currentCommentVote =rand(7,100);
       }else{
           $currentCommentVote =rand(0,5);
       }
        return $this->json([
            'vote'=>$currentCommentVote
        ]);
        #return new JsonResponse(['vote'=>$currentCommentVote]);
   }
}