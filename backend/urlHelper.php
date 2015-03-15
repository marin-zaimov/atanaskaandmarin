<?php

  
  function adjustUrlToUserLanguage($userRow)
  {
    if (!empty($userRow['email'])) {
      if ($userRow['language'] == "BG" && $_SERVER['SCRIPT_NAME'] == "/index.php") {
        switchToBG();
      }
      if ($userRow['language'] == "ENG" && $_SERVER['SCRIPT_NAME'] == "/indexBG.php") {
        switchToENG();
      }
    }
  }

  function redirectToUrl($url)
  {
    header("Location: ".$url);
    die();
  }

  function appendParamsFromCurrentUrl($newUrl)
  {
    return $newUrl . "?" . $_SERVER['QUERY_STRING'];
  }

  function switchToBG()
  {
    $BGurl = "/indexBG.php";
    redirectToUrl(appendParamsFromCurrentUrl($BGurl));
      
  }

  function switchToENG()
  {
    $ENGurl = "/index.php";
    redirectToUrl(appendParamsFromCurrentUrl($ENGurl));
  }



?>