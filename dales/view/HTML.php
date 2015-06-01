<?php namespace dales\view;

class HTML
{
    /**
     * @param $fileName
     */
    public static function includeJs($fileName)
    {
         echo '<script src="'.BP.'js/'.$fileName.'.js"></script>';
    }

    /**
     * @param $fileName
     */
    public static function includeCss($fileName)
    {
         echo '<link rel="stylesheet" type="text/css" href="'.BP.'css/'.$fileName.'.css">';
    }

    /**
     * @param $fileName
     * @param null $type
     */
    public static function includeFile($fileName, $type = null)
    {
        if($type=='css'){
            echo '<link rel="stylesheet" type="text/css" href="'.BP.'/'.$fileName.'.css">';
        }elseif($type=='js'){
            echo '<script src="'.BP.'/'.$fileName.'.js"></script>';
        }
    }

    /**
     * @param $filePath
     * @param null $type
     */
    public static function inlineFile($filePath, $type = null)
    {
        if($type=='css'){
            echo file_get_contents($filePath.'.css');
        }elseif($type=='js'){
            echo file_get_contents($filePath.'.js');
        }
    }

    public static function parse_variables($input, $array)
    {
        $search = preg_match_all('/\${{.*?}}/', $input, $matches);

        for ($i = 0; $i < $search; $i++) {
            $matches[0][$i] = str_replace(array('$', '{', '}'), null, $matches[0][$i]);

        }

        foreach ($matches[0] as $value) {
            if (isset($array[$value])) {
                $input = str_replace('${{' . $value . '}}', $array[$value], $input);
            } else
                $input = str_replace('${{' . $value . '}}', '', $input);
        }

        return $input;
    }

    public static function import($input){

        $search = preg_match_all("/@import(.*)/", $input, $output_array);

        for ($i = 0; $i < $search; $i++) {
            $output_array[1][$i] = str_replace(array('(', ')'), null, $output_array[1][$i]);
        }

        foreach ($output_array[1] as $value) {

            ob_start();
            require_once str_replace(".",DS,VIEW.DS.trim($value)).".php";
            //$result = ob_get_clean();
            $result = ob_get_contents();
            ob_end_clean();

            //$input = substr_replace('@import(' . $value . ')', $result , $input);
            $input = str_ireplace('@import(' . $value . ')', $result , $input);
            //preg_replace()
        }
        return $input;
    }

}
