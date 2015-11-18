<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Translation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\TranslationRepository")
 */
class Translation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Translator", inversedBy="translations")
     */
    private $translator;

    /**
     * @ORM\OneToOne(targetEntity="Connection", inversedBy="translation")
     */
    private $connection;
    /**
     * @ORM\OneToOne(targetEntity="Improvement", mappedBy="translation")
     */
    private $improvement;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="score", type="integer")
     */
    private $score;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=100)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    protected $updatedAt;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Translation
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set score
     *
     * @param integer $score
     *
     * @return Translation
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Translation
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Translation
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set translator
     *
     * @param \AppBundle\Entity\Translator $translator
     *
     * @return Translation
     */
    public function setTranslator(\AppBundle\Entity\Translator $translator = null)
    {
        $this->translator = $translator;

        return $this;
    }

    /**
     * Get translator
     *
     * @return \AppBundle\Entity\Translator
     */
    public function getTranslator()
    {
        return $this->translator;
    }

    /**
     * Set connection
     *
     * @param \AppBundle\Entity\Connection $connection
     *
     * @return Translation
     */
    public function setConnection(\AppBundle\Entity\Connection $connection = null)
    {
        $this->connection = $connection;

        return $this;
    }

    /**
     * Get connection
     *
     * @return \AppBundle\Entity\Connection
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * Set improvement
     *
     * @param \AppBundle\Entity\Improvement $improvement
     *
     * @return Translation
     */
    public function setImprovement(\AppBundle\Entity\Improvement $improvement = null)
    {
        $this->improvement = $improvement;

        return $this;
    }

    /**
     * Get improvement
     *
     * @return \AppBundle\Entity\Improvement
     */
    public function getImprovement()
    {
        return $this->improvement;
    }
}
