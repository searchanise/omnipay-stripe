<?php

/**
 * Stripe List Invoices Request.
 */
namespace Omnipay\Stripe\Message;

/**
 * Stripe List Invoices Request.
 *
 * @see Omnipay\Stripe\Gateway
 * @link https://stripe.com/docs/api#list_invoices
 */
class ListInvoicesRequest extends AbstractRequest
{
    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->getParameter('created');
    }

    /**
     * @param string $value
     *
     * @return ListCouponsRequest
     */
    public function setCreated($value)
    {
        return $this->setParameter('created', $value);
    }

    /**
     * @return mixed
     */
    public function getLimit()
    {
        return $this->getParameter('limit');
    }

    /**
     * @param string $value
     *
     * @return ListCouponsRequest
     */
    public function setLimit($value)
    {
        return $this->setParameter('limit', $value);
    }

    /**
     * A cursor for use in pagination. `ending_before` is an object ID that defines your place in the list.
     * For instance, if you make a list request and receive 100 objects, starting with `obj_bar`, your
     * subsequent call can include `ending_before=obj_ba`r in order to fetch the previous page of the list.
     *
     * @return mixed
     */
    public function getEndingBefore()
    {
        return $this->getParameter('endingBefore');
    }

    /**
     * A cursor for use in pagination. `starting_after` is an object ID that defines your place in the list.
     * For instance, if you make a list request and receive 100 objects, ending with `obj_foo`, your
     * subsequent call can include `starting_after=obj_foo` in order to fetch the next page of the list.
     *
     * @return mixed
     */
    public function getStartingAfter()
    {
        return $this->getParameter('startingAfter');
    }

    /**
     * @param string $value
     *
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setStartingAfter($value)
    {
        return $this->setParameter('startingAfter', $value);
    }

    /**
     * @param string $value
     *
     * @return ListCouponsRequest
     */
    public function setEndingBefore($value)
    {
        return $this->setParameter('endingBefore', $value);
    }

    public function getData()
    {
        $data = array();

        if ($this->getCreated()) {
            $data['created'] = $this->getCreated();
        }
        if ($this->getLimit()) {
            $data['limit'] = $this->getLimit();
        }

        if ($this->getEndingBefore()) {
            $data['ending_before'] = $this->getEndingBefore();
        }

        if ($this->getStartingAfter()) {
            $data['starting_after'] = $this->getStartingAfter();
        }

        return $data;
    }

    public function getEndpoint()
    {
        $endpoint = $this->endpoint.'/invoices';
        if ($customerReference = $this->getCustomerReference()) {
            return $endpoint . '?customer=' . $customerReference;
        }

        return $endpoint;
    }

    public function getHttpMethod()
    {
        return 'GET';
    }
}
