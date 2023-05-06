<?php
class Course
{
    private ?int $idevent = null;
    private ?string $label = null;
    private ?int $duration = null;
    private ?int $nbPlaces = null;
    private ?DateTime $date = null;

    public function __construct($id = null, $l, $du, $nb, $d)
    {
        $this->idevent = $id;
        $this->label = $l;
        $this->duration = $du;
        $this->nbPlaces = $nb;
        $this->date = $d;
    }

    /**
     * Get the value of idCourse
     */
    public function getIdCourse()
    {
        return $this->idevent;
    }

    /**
     * Get the value of label
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set the value of label
     *
     * @return  self
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get the value of duration
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set the value of duration
     *
     * @return  self
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get the value of nbPlaces
     */
    public function getNbPlaces()
    {
        return $this->nbPlaces;
    }

    /**
     * Set the value of nbPlaces
     *
     * @return  self
     */
    public function setNbPlaces($nbPlaces)
    {
        $this->nbPlaces = $nbPlaces;

        return $this;
    }

    /**
     * Get the value of dateCourse
     */
    public function getDateCourse()
    {
        return $this->date;
    }

    /**
     * Set the value of dateCourse
     *
     * @return  self
     */
    public function setDateCourse($date)
    {
        $this->date = $date;

        return $this;
    }
}
