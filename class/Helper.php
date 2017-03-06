<?php
  class Helper
  {
      public static function shorten_string($input)
      {
        $words = explode(" ",$input);
        $output = "";
        foreach($words as $word)
        {
          $output =$output." ".$word;
          if(strlen($output)>=35)
          {
            return $output." ...";
          }
        }
        return $output." ...";
      }
  }
?>
