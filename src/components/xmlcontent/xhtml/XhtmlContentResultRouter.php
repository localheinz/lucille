<?php declare(strict_types=1);
/**
 * Lucille
 *
 * @author     Andreas Habel <mail@ahabel.de>
 * @copyright  Conperience GmbH, Andreas Habel and contributors
 *
 */
    
namespace Lucille\Components\Xml;

use Lucille\Response\Response;
use Lucille\Result\Result;
use Lucille\Routing\ResultRouter;

/**
 * Class XhtmlContentResultRouter
 *
 * @package Lucille\Components\Xml
 */
class XhtmlContentResultRouter extends ResultRouter {
    
    /**
     * @param Result $result Result object
     * @return Response
     * @throws \Lucille\Exceptions\RoutingChainConfigurationException
     */
    public function route(Result $result): Response {
        if (!$result instanceof XhtmlContent) {
            return $this->getNext()->route($result);
        }
        
        return new XhtmlResponse($result);
    }
    
}
