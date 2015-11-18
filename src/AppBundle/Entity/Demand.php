<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demand
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\DemandRepository")
 */
class Demand
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
     * @ORM\OneToMany(targetEntity="Connection", mappedBy="demand")
     */
    private $connections;

    /**
     * @ORM\ManyToOne(targetEntity="Language", inversedBy="translatingFrom")
     * @ORM\JoinColumn(name="translated_from_id", referencedColumnName="id")
     */
    private $translatedFrom;  

    /**
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="demands")
     */
    private $client;          

    /**
     * @ORM\ManyToOne(targetEntity="Specialty", inversedBy="demands")
     */
    private $specialty;       

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=100)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_improved", type="boolean")
     */
    private $isImproved;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finished_at", type="datetime")
     */
    private $finishedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expired_at", type="datetime")
     */
    private $expiredAt;


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
     * @return Demand
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
     * Set status
     *
     * @param string $status
     *
     * @return Demand
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Demand
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set finishedAt
     *
     * @param \DateTime $finishedAt
     *
     * @return Demand
     */
    public function setFinishedAt($finishedAt)
    {
        $this->finishedAt = $finishedAt;

        return $this;
    }

    /**
     * Get finishedAt
     *
     * @return \DateTime
     */
    public function getFinishedAt()
    {
        return $this->finishedAt;
    }

    /**
     * Set expiredAt
     *
     * @param \DateTime $expiredAt
     *
     * @return Demand
     */
    public function setExpiredAt($expiredAt)
    {
        $this->expiredAt = $expiredAt;

        return $this;
    }

    /**
     * Get expiredAt
     *
     * @return \DateTime
     */
    public function getExpiredAt()
    {
        return $this->expiredAt;
    }

    /**
     * Set isRead
     *
     * @param bool $isImproved
     *
     * @return Demand
     */
    public function setIsImproved(boolean $isImproved)
    {
        $this->isImproved = $isImproved;

        return $this;
    }

    /**
     * Get isImproved
     *
     * @return bool
     */
    public function getIsImproved()
    {
        return $this->isImproved;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->connections = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add connection
     *
     * @param \AppBundle\Entity\Connection $connection
     *
     * @return Demand
     */
    public function addConnection(\AppBundle\Entity\Connection $connection)
    {
        $this->connections[] = $connection;

        return $this;
    }

    /**
     * Remove connection
     *
     * @param \AppBundle\Entity\Connection $connection
     */
    public function removeConnection(\AppBundle\Entity\Connection $connection)
    {
        $this->connections->removeElement($connection);
    }

    /**
     * Get connections
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConnections()
    {
        return $this->connections;
    }

    /**
     * Set translatedFrom
     *
     * @param \AppBundle\Entity\Language $translatedFrom
     *
     * @return Demand
     */
    public function setTranslatedFrom(\AppBundle\Entity\Language $translatedFrom = null)
    {
        $this->translatedFrom = $translatedFrom;

        return $this;
    }

    /**
     * Get translatedFrom
     *
     * @return \AppBundle\Entity\Language
     */
    public function getTranslatedFrom()
    {
        return $this->translatedFrom;
    }

    /**
     * Set client
     *
     * @param \AppBundle\Entity\Client $client
     *
     * @return Demand
     */
    public function setClient(\AppBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \AppBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set specialty
     *
     * @param \AppBundle\Entity\Specialty $specialty
     *
     * @return Demand
     */
    public function setSpecialty(\AppBundle\Entity\Specialty $specialty = null)
    {
        $this->specialty = $specialty;

        return $this;
    }

    /**
     * Get specialty
     *
     * @return \AppBundle\Entity\Specialty
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }
}
