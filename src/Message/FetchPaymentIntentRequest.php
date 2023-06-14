<?php

/**
 * Stripe Fetch PaymentIntent Request.
 */
namespace Omnipay\Stripe\Message;

/**
 * Stripe Fetch PaymentIntent Request.
 *
 * @link https://stripe.com/docs/api/payment_intents/retrieve
 */
class FetchPaymentIntentRequest extends AbstractRequest
{
    /**
     * Get the PaymentIntent reference.
     *
     * @return string
     */
    public function getPaymentIntentReference()
    {
        return $this->getParameter('paymentIntentReference');
    }

    /**
     * Set the set PaymentIntent reference.
     *
     * @return FetchPaymentIntentRequest provides a fluent interface.
     */
    public function setPaymentIntentReference($value)
    {
        return $this->setParameter('paymentIntentReference', $value);
    }

    public function getData()
    {
        $this->validate('paymentIntentReference');
        $data = array();

        return $data;
    }

    public function getEndpoint()
    {
        return $this->endpoint.'/payment_intents/'.$this->getPaymentIntentReference();
    }

    public function getHttpMethod()
    {
        return 'GET';
    }
}
