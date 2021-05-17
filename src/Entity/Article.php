<?php
namespace App\Entity;
use DateTime;
use Symfony\Component\Validator\Constraints as Assert;


class Article
{
    /**
     * @var Assert\Length(
     *     min =10,
     *     max = 80,
     *     minMessage = "Ceci est trop court",
     *     maxMessage = "Ceci est trop long",
     * )
     */
    private  $author;
    /**
     * @var Assert\NotBlank(message = "Le contenu ne peut etre vide . ")
     */
    private $content;
    /**
     * @var Assert\NotBlank(message = "Le titre est obligatoire.")
     */
    private $title;
    /**
     * @var Assert\NotBlank(message = "L'image est requise")
     */
    private $image;

    /**
     * @var
     */
    private $datePublication;

    /**
     * @return mixed
     */
    public function getDatePublication(): ?\DateTime
    {
        return $this->datePublication;
    }

    /**
     * @param mixed $datePublication
     */
    public function setDatePublication($datePublication): void
    {
        $this->datePublication = $datePublication;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }
}


