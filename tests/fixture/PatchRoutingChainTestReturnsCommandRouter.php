<?php declare(strict_types=1);

namespace Lucille\UnitTests;

use Lucille\Command;
use Lucille\Request\PatchRequest;
use Lucille\Routing\PatchRouter;

class PatchRoutingChainTestReturnsCommandRouter extends PatchRouter {
    public function route(PatchRequest $request): Command {
        return new PatchRoutingChainTestCommand();
    }
}
