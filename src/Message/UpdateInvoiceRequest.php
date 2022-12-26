<?php

/**
 * Stripe Update Subscription Request.
 */

namespace Omnipay\Stripe\Message;

class UpdateInvoiceRequest extends AbstractRequest
{
    /**
     * Get the invoice reference
     *
     * @return string
     */
    public function getInvoiceReference()
    {
        return $this->getParameter('invoiceReference');
    }

    /**
     * Set the invoice reference
     *
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest|UpdateSubscriptionRequest
     */
    public function setInvoiceReference($value)
    {
        return $this->setParameter('invoiceReference', $value);
    }

    public function getData()
    {
        $this->validate('invoiceReference');

        $data = [];

        if ($this->getMetadata()) {
            $data['metadata'] = $this->getMetadata();
        }

        return $data;
    }

    public function getEndpoint()
    {
        return $this->endpoint . '/invoices/' . $this->getInvoiceReference();
    }
}
