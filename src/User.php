<?php
use Doctrine\Common\Collections\ArrayCollection;

    /**
    * @Entity @Table(name="users")
    */
    class User
    {
        /** @Id @Column (type="integer") @GeneratedValue **/
        protected $id;
        /** @Column (type="string") 
         * $var string
         */
        protected $name;
        /**
        * @OneToMany(targetEntity="Bug",mappedBy="reporter") 
        * $var Bug[]
        */
        protected $reportedBugs = null;
        /**
        * @OneToMany(targetEntity="Bug",mappedBy="engineer") 
        * $var Bug[]
        */
        protected $assignedBugs = null;

        public function __construct()
        {
            $this->reportedBugs = new ArrayCollection();
            $this->assignedBugs = new ArrayCollection();
        }

        public function getId()
        {
            return $this->id;
        }
        public function getName()
        {
            return $this->name;
        }
        public function setName($name)
        {
            $this->name = $name;
        }
        public function addReportedBugs($bug)
        {
            $this->reportedBugs[] = $bug;
        }
        public function assignedToBug($bug)
        {
            $this->assigneddBugs[] = $bug;
        }
    }