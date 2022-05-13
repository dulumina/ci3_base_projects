<?php
 class Auth {
     function auth_check($params){
        $ignored = $params['ignored_class'];
        
        $this->CI =& get_instance();
        $class = $this->CI->router->fetch_class();
        $method = $this->CI->router->fetch_class()."/".$this->CI->router->fetch_method();
        
		if (!isset($_SESSION[$params['session_key']])){
          if ( in_array($class,$params['ignored_class']) or in_array($method,$params['ignored_method'])) {
            return true;
          }else{
            session_destroy();
            redirect(base_url());
          }
    	}
     }
 }
?>