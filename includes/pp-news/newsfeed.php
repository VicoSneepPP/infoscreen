<?php
                $fileContents = file_get_contents($_GET['url']);
                $fileContents = trim(str_replace('"', "'", $fileContents));

                $simpleXml = simplexml_load_string($fileContents);
                $json = json_encode($simpleXml);

                echo $json;
?>
