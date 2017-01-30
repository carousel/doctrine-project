<?php

    /**
    * @Entity @Table(name="messages")
    */
    class Message
    {
        /** @Id @Column (type="integer") @GeneratedValue **/
        protected $id;
        /** @Embedded (class="Content") **/
        protected $content;
        /** @Column (type="string") **/
        protected $name;

        public function __construct($title)
        {
            $this->content = new Content;
            $this->content_title = $title;
        }
        public function setTitle($title)
        {
            $this->name = 'miroslav';
            $this->content_title = $title;
        }
    }
