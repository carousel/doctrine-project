<?php
use Doctrine\Common\Collections\ArrayCollection;

    /**
    * @Entity(repositoryClass="BugRepository") @Table(name="bugs")
    */
    class Bug 
    {
        const VERSION = '0.0.1';
        /** @Id @Column (type="integer") @GeneratedValue **/
        protected $id;
        /** @Column (type="string") 
         * $var string
         */
        protected $description;
        /** @Column (type="datetime") 
         * $var DateTime
         */
        protected $created;
        /** @Column (type="string") 
         * $var string
         */
        protected $status;
        /**
        * @ManyToOne(targetEntity="User",inversedBy="assignedBugs") 
        */
        protected $engineer;
        /**
        * @ManyToOne(targetEntity="User",inversedBy="reportedBugs") 
        */
        protected $reporter;
        /**
        * @ManyToMany(targetEntity="Product") 
        */
        protected $products = null;

        public function __construct()
        {
            $this->products = new ArrayCollection();
        }
        public function setReporter($reporter)
        {
            $this->reporter = $reporter;
        }

        
        public function setEngineer($engineer)
        {
            $engineer->assignedToBug($this);
            $this->engineer = $engineer;
        }
        public function setReported($reporter)
        {
            $reporter->addReportedBug($this);
            $this->reporter = $reporter;
        }
        public function getEngineer()
        {
            return $this->engineer;
        }
        public function getReporter()
        {
            return $this->reporter;
        }

        public function getId()
        {
            return $this->id;
        }
        public function getDescription()
        {
            return $this->description;
        }
        public function setDescription($description)
        {
            $this->description = $description;
        }
        public function getCreated()
        {
            return $this->created;
        }
        public function setStatus($status)
        {
            $this->status = $status;
        }
        public function setCreated($created)
        {
            $this->created = $created;
        }
        public function getStatus()
        {
            return $this->status;
        }
        public function assignToProduct($product)
        {
           $this->products[]  = $product;
        }
        public function getProducts()
        {
            return $this->products;   
        }
        public function close(){
            $this->status = "CLOSED";
        }
    }
