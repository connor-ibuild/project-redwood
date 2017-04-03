<?php

  namespace AppBundle\Controller;

  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\HttpFoundation\Request;


  class InvoiceController extends Controller
  {
    /**
     * @Route("/create-invoice")
     */
     public function createInvoiceAction(Request $request)
     {
       $response = new Response();
       $requestContent = json_decode($request->getContent());
       $invoiceData = json_decode($requestContent->InvoiceData);
       $errorMessage = '';
     }
  }
