<?php

declare(strict_types=1);

namespace AbnDevs\Subscriptions\Services\PaymentMethods;

use AbnDevs\Subscriptions\Contracts\PaymentMethodService;
use AbnDevs\Subscriptions\Traits\IsPaymentMethod;

class Free implements PaymentMethodService
{
    use IsPaymentMethod;

    /**
     * Charge desired amount
     * @return void
     */
    public function charge()
    {
        // Nothing is charged, no exception is raised
    }
}
