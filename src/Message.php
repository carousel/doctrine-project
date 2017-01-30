<?php

    /**
    * @Entity @Table(name="messages")
    */
    class Message
    {
        /** @Id @Column (type="integer") @GeneratedValue **/
        protected $id;
        /** @Embedded (class="MessageContent") **/
        protected $message_content;

    }
