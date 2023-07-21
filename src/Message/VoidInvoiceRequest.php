<?php

/**
 * Stripe Payment Intents Cancel Request.
 */
namespace Omnipay\Stripe\Message;

/**
 * Stripe Void Invoice Request.
 *
 * @link https://stripe.com/docs/api/invoices/void
 */
class VoidInvoiceRequest extends AbstractRequest
{
    /**
     * Get the invoice reference.
     *
     * @return string
     */
    public function getInvoiceReference()
    {
        return $this->getParameter('invoiceReference');
    }

    /**
     * Set the set invoice reference.
     *
     * @param string $value
     *
     * @return VoidInvoiceRequest provides a fluent interface.
     */
    public function setInvoiceReference($value)
    {
        return $this->setParameter('invoiceReference', $value);
    }

    /**
     * @inheritdoc
     */
    public function getData()
    {
        $this->validate('invoiceReference');

        return [];
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return $this->endpoint . '/invoices/' . $this->getInvoiceReference() . '/void';
    }
}
