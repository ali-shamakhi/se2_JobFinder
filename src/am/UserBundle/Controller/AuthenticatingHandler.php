<?php
/**
 * Created by PhpStorm.
 * User: mohammad zamanzadeh
 * Date: 11/8/16
 * Time: 11:51 PM
 */

namespace am\UserBundle\Controller;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;

class AuthenticatingHandler implements AuthenticationSuccessHandlerInterface, AuthenticationFailureHandlerInterface
{
    /*private $router;
    private $session;


    public function __construct(Session $session )
    {
        $this->router  = $router;
        $this->session = $session;
    }*/

    /**
     * onAuthenticationSuccess
     *
     * @author 	Mohammad ZamanZadeh(mohammad.zamanzadeh@gmail.com)
     * @param 	Request $request
     * @param 	TokenInterface $token
     * @return 	Response
     */
    public function onAuthenticationSuccess( Request $request, TokenInterface $token )
    {


            $array = array( 'success' => true , 'message'=>"تبریک! شما با موفقیت وارد شدید :)");

            return new JsonResponse($array);

        // if form login
        /* else {

            if ( $this->session->get('_security.main.target_path' ) ) {

                $url = $this->session->get( '_security.main.target_path' );

            } else {

                $url = $this->router->generate( 'home_page' );

            } // end if

            return new RedirectResponse( $url );

        }*/
    }

    /**
     * onAuthenticationFailure
     *
     * @author 	Mohammad ZamanZadeh(mohammad.zamanzadeh@gmail.com)
     * @param 	Request $request
     * @param 	AuthenticationException $exception
     * @return 	Response
     */
    public function onAuthenticationFailure( Request $request, AuthenticationException $exception )
    {

            $array = array( 'success' => false, 'message' => "اطلاعات وارد شده صحیح نمی باشد");//$exception->getMessageKey() );

            return new JsonResponse($array);

        // if form login
         /*else {

            // set authentication exception to session
            $request->getSession()->set(Security::AUTHENTICATION_ERROR, $exception);

            return new RedirectResponse( $this->router->generate( 'login_route' ) );
        }*/
    }
}
