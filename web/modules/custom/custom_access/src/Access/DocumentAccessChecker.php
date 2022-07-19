<?php

namespace Drupal\custom_access\Access;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Routing\Access\AccessInterface;
use Drupal\Core\Routing\RedirectDestinationInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Session\AccountProxyInterface;
use Psr\Container\ContainerInterface;
use Symfony\Component\Routing\Route;

/**
 * Checks if passed parameter matches the route configuration.
 *
 * @DCG
 * To make use of this access checker add '_document: Some value' entry to route
 * definition under requirements section.
 */
class DocumentAccessChecker implements AccessInterface
{

  /**
   * The redirect destination service.
   *
   * @var \Drupal\Core\Routing\RedirectDestinationInterface
   */
  protected $redirectDestination;
  public function __construct(RedirectDestinationInterface $redirect_destination)
  {
    $this->redirectDestination = $redirect_destination;
  }


  /**
   * Access callback.
   *
   * @param \Symfony\Component\Routing\Route $route
   *   The route to check against.
   * @param \ExampleInterface $parameter
   *   The parameter to test.
   *
   * @return \Drupal\Core\Access\AccessResultInterface
   *   The access result.
   */

  public function access(Route $route, AccountInterface $account)
  {
    \Drupal::logger('cmis_url_check')->notice(print_r($route));
    return AccessResult::forbidden();
  }
}
