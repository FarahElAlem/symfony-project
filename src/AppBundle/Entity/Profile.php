<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profile
 *
 * @ORM\Table(name="profile")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProfileRepository")
 */
class Profile
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="education", type="string", length=700)
     */
    private $education;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=255)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="educationTitle", type="string", length=255)
     */
    private $educationTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="educationDescription", type="string", length=855)
     */
    private $educationDescription;

    /**
     * @var date
     *
     * @ORM\Column(name="educationDate", type="date")
     */
    private $educationDate;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Profile
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Profile
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
     * Set education
     *
     * @param string $password
     *
     * @return Profile
     */
    public function setEducation($education)
    {
        $this->education = $education;

        return $this;
    }

    /**
     * Get education
     *
     * @return string
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Set education
     *
     * @param string $password
     *
     * @return Profile
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set education
     *
     * @param string $password
     *
     * @return User
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
     * Get educationTitle
     *
     * @return string
     */
    public function getEducationTitle()
    {
        return $this->educationTitle;
    }

    /**
     * Set educationTitle
     *
     * @param string $educationTitle
     *
     * @return Profile
     */

    public function setEducationTitle($educationTitle)
    {
        $this->educationTitle = $educationTitle;

        return $this;
    }

    /**
     * Get educationDescription
     *
     * @return string
     */
    public function getEducationDescription()
    {
        return $this->educationDescription;
    }

    /**
     * Set educationDescription
     *
     * @param string $educationDescription
     *
     * @return Profile
     */

    public function setEducationDescription($educationDescription)
    {
        $this->educationDescription = $educationDescription;

        return $this;
    }

    /**
     * Get educationDate
     *
     * @return date
     */
    public function getEducationDate()
    {
        return $this->educationDate;
    }

    /**
     * Set educationDate
     *
     * @param date $educationDate
     *
     * @return Profile
     */

    public function setEducationDate($educationDate)
    {
        $this->educationDate = $educationDate;

        return $this;
    }

}

