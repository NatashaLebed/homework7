<?php

namespace Acme\StoreBundle\Service;

use Symfony\Component\HttpFoundation\Session\Session;

class MyService {

    private $session;

    public function setSession(Session $session)
     {
         $this->session = $session;
         $session->set('user', 'SuperUser');
     }

    public function getSession()
     {
         return $this->session;
     }
}