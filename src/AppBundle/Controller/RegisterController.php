<?php

  namespace AppBundle\Controller;

  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\HttpFoundation\Request;
  use AppBundle\Entity\userData;
  use AppBundle\Entity\authToken;


  class RegisterController extends Controller
  {
    /**
     * @Route("/register")
     */
    public function registerAction (Request $request)
    {
      $requestContent = json_decode($request->getContent());
      $formData = json_decode($requestContent->JsonData);

      // validatation
      $errorMessage = $this->validateForm($formData);

      if ($errorMessage) {
        return new Response ($errorMessage); // failed validation
      }

      // assign optional company name
      $companyName = 'unknown';

      if (property_exists($formData, 'companyName') && ($formData->companyName)) {
        $companyName = $formData->companyName;
      }

      $em = $this->getDoctrine()->getManager();
      $userData = new userData();

      // add new user to DB
      $this->createUserData($formData, $userData, $em);

      // create new api token & save to DB
      $key = $this->apiToken($userData, $em);

      return new Response(
        json_encode(
          array(
            "message" => "successfully registered",
            "key" => $key
      )));
    }


    function validateForm($formData) {
      if (!property_exists($formData, 'firstName') || (!$formData->firstName)) {
        return 'Enter first name';
      } else if (!property_exists($formData, 'lastName') || (!$formData->lastName)) {
        return 'Enter last name';
      } else if (!property_exists($formData, 'email') || (!$formData->email)) {
        return 'Enter email';
      } else if (!property_exists($formData, 'passw') || (!$formData->passw)) {
        return 'Enter password';
      }
    }

    function apiToken($userData, $em) {
      $key = md5(microtime().rand()); // generate token

      // add token to DB
      $authToken = new authToken();
      $authToken->setClient($userData->getId());
      $authToken->setAuthToken($key);
      $em->persist($authToken);
      $em->flush();

      return $key;
    }

    function createUserData($formData, $userData, $em) {
      $userData->setFirstName($formData->firstName);
      $userData->setLastName($formData->lastName);
      $userData->setEmail($formData->email);
      $userData->setCompanyName($formData->companyName);

      $encryptedPassw = password_hash($formData->passw, CRYPT_BLOWFISH);
      $userData->setPassw($encryptedPassw);

      $em->persist($userData);
      $em->flush();
    }
  }
