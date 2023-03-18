<?php

/**
 * Stripe Update Payment Intent Request.
 */

namespace Omnipay\Stripe\Message;

class UpdatePaymentIntentRequest extends AbstractRequest
{
    /**
     * Get the payment intent reference
     *
     * @return string
     */
    public function getPaymentIntentReference()
    {
        return $this->getParameter('paymentIntentReference');
    }

    /**
     * Set the payment intent reference
     *
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest|UpdatePaymentIntentRequest
     */
    public function setPaymentIntentReference($value)
    {
        return $this->setParameter('paymentIntentReference', $value);
    }

    public function getData()
    {
        $this->validate('paymentIntentReference');

        $data = [];

        if ($this->getMetadata()) {
            $data['metadata'] = $this->getMetadata();
        }

        return $data;
    }

    public function getEndpoint()
    {
        return $this->endpoint . '/payment_intents/' . $this->getPaymentIntentReference();
    }
}
