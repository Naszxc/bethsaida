<?php

	class chat {

      function __construct($data) {
         $data = '<label style="background-color: blue;">' . $data . '</label>';
         $this->data = $data;
      }

      function get_data() {
            return '<div style="height: 10%; width: 100%; float: right;">'. $this->data . '</div>';
      }
    }

?>