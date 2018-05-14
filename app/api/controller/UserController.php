<?php


/**
 * @uri /login
 */
class UserLogin extends AppResource {
		
     /** @secure */
    public function get($request) {
        
             $response = Response::OK;
             $input = $this->getInput($request);
            	
        try{
             $db = DB::getDB();
           
            $user = UserModel::authenticateUser($input,$db);
            if($user){
                switch ($user['UserType']) {
                    case 'SUPERADMIN':
                        $_SESSION['SuperAdminLogin'] = $user;
                        break;
                     case 'USER':
                        $_SESSION['UserLogin'] = $user;
                        break;
                    
                    default:
                        $user['home'] = 'error';
                        break;
                 }
                $userRecord = jsonp_encode($user);
                
            }else{
               throw new BadRequestException('wrong details');
            }
            
            
        }catch (NotFoundException $ex){
            $response = Response::FORBIDDEN;
            
        }

        return $this->createResponse($request, $userRecord, $response);
    }
}


/**
 * @uri /logout
 */
class LogoutHandler extends AppResource {

    public function get($request) {
        $this->logout();
        return $this->createResponse($request);
    }

}
