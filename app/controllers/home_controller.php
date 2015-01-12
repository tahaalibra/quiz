<?php

class home_controller extends controller{
    
    
    function home()
    {   
        $auth = new auth;
        if (!$auth->checklogin())
            {
                header("Location:".INSTALL_FOLDER."signin");
            }
    
        $new_model = new $this->_model;       
        
        if($new_model->countrows()==QUESTION_LIMIT)
            {
                header('Location:'.INSTALL_FOLDER.'result');
            }
    
    
        if(isset($_POST["name"]))
            {  //echo "nice";
                $new_model->generate_name($_POST["name"]);        
                header("Location:".INSTALL_FOLDER."test");
            }
        
}

}
    


