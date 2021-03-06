<?php

namespace Unleash\Strategy;

use Unleash\Context;

class GradualRolloutSessionIdStrategy extends Strategy
{
    public function __construct()
    {
        parent::__construct('gradualRolloutSessionId');
    }

    public function isEnabled(array $parameters = null, Context $context = null)
    {
        if (!$context->sessionId || !isset($parameters['percentage'])) {
            return false;
        }

        $percentage = (int)$parameters['percentage'];
        $groupId = isset($parameters['groupId']) ? $parameters['groupId'] : '';
        $normalizedId = $this->normalizeValue($context->sessionId, $groupId);

        return $percentage > 0 && $normalizedId <= $percentage;
    }
}
