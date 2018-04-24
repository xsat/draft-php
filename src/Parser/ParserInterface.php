<?php

namespace Draft\Parser;

/**
 * Interface ParserInterface
 *
 * @package Draft\Parser
 */
interface ParserInterface
{
    /**
     * @param null|string $content
     *
     * @return \Draft\Parser\Item\ItemInterface[]
     */
    public function parse(?string $content): array;
}
