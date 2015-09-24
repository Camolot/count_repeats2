<?php

    class Count
    {
      function makeCount($input_title)
      {
        $input_array_of_words = explode(" ", $input_title);
        $output_count = array();
        foreach ($input_array_of_words as $word) {
          array_push($output_count, ucfirst($word));
        }
        return implode(" ", $output_count);
      }
    }
?>
