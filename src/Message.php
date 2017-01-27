<?php

    /** @Entity @Table(name="messages") */
    class Message
    {
        /** @Id @Column (type="integer") @GeneratedValue(strategy="UUID") */
        protected $id;
    }
