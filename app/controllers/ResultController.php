<?php

class ResultController extends Controller
{

  function result()
  {
     $this->doNotRenderHeader=1;
     Auth::checkLogin(true);
     //$result = new $this->model;
     //$this->set("result",$result->generate_result());
     //$this->set("name",$result->getname());
  }

}
