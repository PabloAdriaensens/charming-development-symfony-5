<?php

namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route("/comments/{id}/vote/{direction}")
     * @throws Exception
     */
    public function commentVote($id, $direction)
    {
        // todo use id to query database

        if ($direction === 'up') {
            $currentVoteCount = random_int(7, 100);
        } else {
            $currentVoteCount = random_int(0, 5);
        }

        return $this->json(['votes' => $currentVoteCount]);
    }
}