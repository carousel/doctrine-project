<?php
use Doctrine\Common\Collections\ArrayCollection;

    /**
    * @Entity(repositoryClass="MessageRepository") @Table(name="messages")
    */
    class Message
    {
        /** @Id @Column (type="integer") @GeneratedValue **/
        protected $id;
        /** @Column (type="text") **/
        protected $title;
        /** @Column (type="string") **/
        protected $content;
        /**
         * @ManyToOne(targetEntity="User")
         * @JoinColumn(name="user_id",referencedColumnName="id")
         */
        protected $user;
        
        public function sendMessageToUser($title,$content,$user)
        {
            $this->title = $title;
            $this->content = $content;
            $this->user = $user;
        }
        /**
        * 
        */
        public function getTitle()
        {
            return $this->title;
        }
    }
