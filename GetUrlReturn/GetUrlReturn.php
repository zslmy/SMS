private function http_get($url){ $oCurl = curl_init(); if(stripos($url,"https://")!==FALSE){ curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, FALSE); curl_setopt($oCurl, CURLOPT_SSL_VERIFYHOST, FALSE); curl_setopt($oCurl, CURLOPT_SSLVERSION, 1); //CURL_SSLVERSION_TLSv1 } curl_setopt($oCurl, CURLOPT_URL, $url); curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1 ); $sContent = curl_exec($oCurl); $aStatus = curl_getinfo($oCurl); curl_close($oCurl); if(intval($aStatus["http_code"])==200){ return $sContent; }else{ return false; } }
//���ز���
