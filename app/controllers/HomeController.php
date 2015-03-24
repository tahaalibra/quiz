<?php

class HomeController extends Controller
{

    public function home()
    {
      $this->doNotRenderHeader=1;
      Auth::checkLogin(true);

      $model = new $this->model;
      /*  //if count score then if
        //count where answer is 0 if less goto test else if 0 goto result
      if($model->countrows()==QUESTION_LIMIT)
          {
              header("Location:".INSTALL_FOLDER."/result");
          }


      if(isset($_POST["name"]))
          {
              $model->generate_name($_POST["name"]);
              //$model->generateAll();
              header("Location:".INSTALL_FOLDER."/test");
          }
          */
        
        
        
  
        if($model->scoreExists()){
        
        if(!$model->zeroCount())
          {
              header("Location:".INSTALL_FOLDER."/result");
              echo "r";
          }else{
              header("Location:".INSTALL_FOLDER."/test");
              echo "t";
          }
        }


      if(isset($_POST["name"])&&!empty($_POST["name"]))
          {
              setcookie("my_cookie",'3600',time()-7200);
              $model->generate_name($_POST["name"]);
              $model->generateAll();
              header("Location:".INSTALL_FOLDER."/test");
          }

    }
}
