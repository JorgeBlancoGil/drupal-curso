<?php

namespace Drupal\custom_access\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\Core\EventSubscriber\HttpExceptionSubscriberBase;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Custom Access event subscriber.
 */
class CustomAccessSubscriber extends HttpExceptionSubscriberBase
{


  /**
   * {@inheritdoc}
   */
  protected function getHandledFormats()
  {
    return ['html'];
  }


  /**
   * Redirects on 403 Access Denied kernel exceptions.
   *
   * @param \Symfony\Component\HttpKernel\Event\ExceptionEvent $event
   *   The Event to process.
   */
  public function on403(ExceptionEvent $event)
  {

    $request = $event->getRequest();
    $currentPath = $request->getPathInfo();
    if (strpos($currentPath, 'admin')!== false) {
      \Drupal::logger('cmis_check')->info("Bien");
      
    }

  
  }
}
