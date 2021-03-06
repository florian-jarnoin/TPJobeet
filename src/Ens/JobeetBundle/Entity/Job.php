<?php

namespace Ens\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

//permet de donner un alias au namespace
use Ens\JobeetBundle\Utils\Jobeet as Jobeet;

/**
 * Job
 */
class Job
{
    /**
     * @var integer
     */
    private $id;

    /**
	 * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $position;

    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $how_to_apply;

    /**
     * @var string
     */
    private $token;

    /**
     * @var boolean
     */
    private $is_public;

    /**
     * @var boolean
     */
    private $is_activated;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \DateTime
     */
    private $expires_at;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var \Ens\JobeetBundle\Entity\Category
     */
    private $category;
    
    /**
     * permet de stocker le fichier � uploader
     * @var File
     */
    public $file;


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
     * Set type
     *
     * @param string $type
     * @return Job
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
    
    /**
     * Get type
     * 
     * @return \Ens\JobeetBundle\Entity\string
     */
    public function getType()
    {
    	return $this->type;
    }

    /**
     * Get types
     *
     * @return string
     */
    public static function getTypes()
    {
        return array('full-time' => 'Full time', 'part-time' => 'Part time', 'freelance' => 'Freelance');
    }
    
    /**
     * retourne les valeurs des types
     * @return array
     */
    public static function getTypeValues()
    {
    	return array_keys(self::getTypes());
    }

    /**
     * Set company
     *
     * @param string $company
     * @return Job
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Job
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Job
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set position
     *
     * @param string $position
     * @return Job
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return Job
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Job
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set how_to_apply
     *
     * @param string $howToApply
     * @return Job
     */
    public function setHowToApply($howToApply)
    {
        $this->how_to_apply = $howToApply;

        return $this;
    }

    /**
     * Get how_to_apply
     *
     * @return string 
     */
    public function getHowToApply()
    {
        return $this->how_to_apply;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Job
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set is_public
     *
     * @param boolean $isPublic
     * @return Job
     */
    public function setIsPublic($isPublic)
    {
        $this->is_public = $isPublic;

        return $this;
    }

    /**
     * Get is_public
     *
     * @return boolean 
     */
    public function getIsPublic()
    {
        return $this->is_public;
    }

    /**
     * Set is_activated
     *
     * @param boolean $isActivated
     * @return Job
     */
    public function setIsActivated($isActivated)
    {
        $this->is_activated = $isActivated;

        return $this;
    }

    /**
     * Get is_activated
     *
     * @return boolean 
     */
    public function getIsActivated()
    {
        return $this->is_activated;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Job
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set expires_at
     *
     * @param \DateTime $expiresAt
     * @return Job
     */
    public function setExpiresAt($expiresAt)
    {
        $this->expires_at = $expiresAt;

        return $this;
    }

    /**
     * Get expires_at
     *
     * @return \DateTime 
     */
    public function getExpiresAt()
    {
        return $this->expires_at;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Job
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Job
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set category
     *
     * @param \Ens\JobeetBundle\Entity\Category $category
     * @return Job
     */
    public function setCategory(\Ens\JobeetBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Ens\JobeetBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
    
    /**
     * @ORM\PrePersist
	 * rend doctrine capable de modifier les valeurs created_at
     */
    public function setCreatedAtValue()
    {
        if(!$this->getCreatedAt())
		{
			$this->created_at = new \DateTime();
		}
    }

    /**
     * @ORM\PreUpdate
	 * rend doctrine capable de modifier les valeurs updated_at
     */
    public function setUpdatedAtValue()
    {
        $this->updated_at = new \DateTime();
    }
	
	/**
	 * permet de remodeler la nouvelle url générée
	 * @return le nom d'entreprise
     */
	 public function getCompanySlug()
	{
		return Jobeet::slugify($this->getCompany());
	}
	
	/**
	 * permet de remodeler la nouvelle url générée
	 * @return type de poste de l'annonce
     */
	public function getPositionSlug()
	{
		return Jobeet::slugify($this->getPosition());
	}
	
	/**
	 * permet de remodeler la nouvelle url générée
	 * @return la ville de l'annonce
     */
	public function getLocationSlug()
	{
		return Jobeet::slugify($this->getLocation());
	}

    /**
     * d�fini l'expiration d'une offre
     * @ORM\PrePersist
     */
    public function setExpiresAtValue()
    {
		if(!$this->getExpiresAt())
		{
			$now = $this->getCreatedAt() ? $this->getCreatedAt()->format('U') : time();
			$this->expires_at = new \DateTime(date('Y-m-d H:i:s', $now + 86400 * 30));
		}    
	}
	
	/**
	 * retourne l'url pour upload des offres
	 * @return string
	 */
	protected function getUploadDir()
	{
		return 'uploads/jobs';
	}
	
	/**
	 * uplaod en �tant root
	 * @return string
	 */
	protected function getUploadRootDir()
	{
		return __DIR__.'/../../../../web/'.$this->getUploadDir();
	}
	
	/**
	 * retourn l'url du site web
	 * @return <NULL | string>
	 */
	public function getWebPath()
	{
		return null === $this->logo ? null : $this->getUploadDir().'/'.$this->logo;
	}
	
	/**
	 * retourne le path en absolute
	 * @return <NULL | string>
	 */
	public function getAbsolutePath()
	{
		return null === $this->logo ? null : $this->getUploadRootDir().'/'.$this->logo;
	}
	
	/**
	 * @ORM\prePersist
	 */
	public function preUpload()
	{
		if (null !== $this->file) {
			// do whatever you want to generate a unique name
			$this->logo = uniqid().'.'.$this->file->guessExtension();
		}
	}
	
	/**
	 * @ORM\postPersist
	 */
	public function upload()
	{
		if (null === $this->file) {
			return;
		}
	
		// if there is an error when moving the file, an exception will
		// be automatically thrown by move(). This will properly prevent
		// the entity from being persisted to the database on error
		$this->file->move($this->getUploadRootDir(), $this->logo);
	
		unset($this->file);
	}
	
	/**
	 * @ORM\postRemove
	 */
	public function removeUpload()
	{
		if ($file = $this->getAbsolutePath()) {
			unlink($file);
		}
	}
	
	/**
	 * g�n�re un jeton al�atoire (avant qu'une offre soit enregistr�)
	 */
	public function setTokenValue()
	{
		if(!$this->getToken())
		{
			$this->token = sha1($this->getEmail().rand(11111, 99999));
		}
	}
	
	/**
	 * retourn si l'offre est expir�e
	 * @return boolean
	 */
	public function isExpired()
	{
		return $this->getDaysBeforeExpires() < 0;
	}
	
	/**
	 * retourn si l'offre expire bientot
	 * @return boolean
	 */
	public function expiresSoon()
	{
		return $this->getDaysBeforeExpires() < 5;
	}
	
	/**
	 * retourn le nombre de jour avant expiration
	 * @return float
	 */
	public function getDaysBeforeExpires()
	{
		return ceil(($this->getExpiresAt()->format('U') - time()) / 86400);
	}
	
	/**
	 * publie l'annonce en la notant comme activ�e
	 */
	public function publish()
	{
		$this->setIsActivated(true);
	}
	
	/**
	 * m�thode pour les tests (formulaire)
	 * @return boolean
	 */
	public function extend()
	{
		if (!$this->expiresSoon())
		{
			return false;
		}
		$this->expires_at = new \DateTime(date('Y-m-d H:i:s', time() + 86400 * 30));
		return true;
	}
}
