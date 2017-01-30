<?php

    /** @Embeddable */
    class MessageContent
    {
        /** @Column (type="string") **/
        protected $subject;
        /** @Column (type="text") **/
        protected $body;
    }
