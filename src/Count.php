<?php

    class Count
    {
      private $phrase;
      private $search;

      function __construct($phrase, $search)
      {
        $this->phrase = $phrase;
        $this->search = $search;
      }

      function setPhrase ($phrase)
      {
        $this->phrase = $phrase;
      }

      function setSearch ($search)
      {
        $this->search = $search;
      }

      function getPhrase ()
      {
        return $this->phrase;
      }

      function getSearch ()
      {
        return $this->search;
      }

      function getCount ()
      {
        return $this->count;
      }
      // function makeCount($input_title)
      // {
      //   $input_array_of_words = explode(" ", $input_title);
      //   $output_count = array();
      //   foreach ($input_array_of_words as $word) {
      //     array_push($output_count, ucfirst($word));
      //   }
      //   return implode(" ", $output_count);
      // }
    }
?>
