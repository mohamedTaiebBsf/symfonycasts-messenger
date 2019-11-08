<?php


namespace App\Message;
use App\Entity\ImagePost;

class DeleteImagePost
{
    private $imagePost;

    public function __construct(ImagePost $imagePost)
    {
        $this->imagePost = $imagePost;
    }

    public function getImagePost(): ImagePost
    {
        return $this->imagePost;
    }

    public function setImagePost(ImagePost $imagePost): void
    {
        $this->imagePost = $imagePost;
    }
}