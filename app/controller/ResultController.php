<?php namespace app\controller;

use app\model\ResultModel;

class ResultController
{

  function result()
  {
      $model = new ResultModel;

      if($model->zeroCount()>0 || !$model->exists())
      {
          header("Location: ".BP."home.php");
      }

      if(isset($_POST["reset"])&&!empty($_POST['reset']))
      {
          $model->reset();
          header("Location: ".BP."signout.php");
      }

      $correct = $model->generate_result();
      $result = $model->result();
      return view('result',array('result'=>$result,"correct"=>$correct));


  }

}
