<?php

  function getAddonView(string $file, array $params = [])
  {
    extract($params);

    ob_start();
    require(WPBAKERY_ADDONS_PATH.'/'.$file);
    return ob_get_clean();
  } // getAddonView()
