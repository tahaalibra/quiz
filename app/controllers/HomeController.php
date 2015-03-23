<?php

class HomeController extends Controller
{

    public function home()
    {
      $this->doNotRenderHeader=1;
      Auth::checkLogin(true);

      $model = new $this->model;

      if($model->countrows()==QUESTION_LIMIT)
          {
              header("Location:".INSTALL_FOLDER."/result");
          }


      if(isset($_POST["name"]))
          {
              $model->generate_name($_POST["name"]);
              header("Location:".INSTALL_FOLDER."/test");
          }

    }
}
