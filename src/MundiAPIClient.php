<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib;

use MundiAPILib\Controllers;

/**
 * MundiAPILib client class
 */
class MundiAPIClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct(
        $basicAuthUserName = null,
        $basicAuthPassword = null
    ) {
        Configuration::$basicAuthUserName = $basicAuthUserName ? $basicAuthUserName : Configuration::$basicAuthUserName;
        Configuration::$basicAuthPassword = $basicAuthPassword ? $basicAuthPassword : Configuration::$basicAuthPassword;
    }
    /**
     * Singleton access to Charges controller
     * @return Controllers\ChargesController The *Singleton* instance
     */
    public function getCharges()
    {
        return Controllers\ChargesController::getInstance();
    }
    /**
     * Singleton access to Customers controller
     * @return Controllers\CustomersController The *Singleton* instance
     */
    public function getCustomers()
    {
        return Controllers\CustomersController::getInstance();
    }
    /**
     * Singleton access to Invoices controller
     * @return Controllers\InvoicesController The *Singleton* instance
     */
    public function getInvoices()
    {
        return Controllers\InvoicesController::getInstance();
    }
    /**
     * Singleton access to Plans controller
     * @return Controllers\PlansController The *Singleton* instance
     */
    public function getPlans()
    {
        return Controllers\PlansController::getInstance();
    }
    /**
     * Singleton access to Subscriptions controller
     * @return Controllers\SubscriptionsController The *Singleton* instance
     */
    public function getSubscriptions()
    {
        return Controllers\SubscriptionsController::getInstance();
    }
    /**
     * Singleton access to Orders controller
     * @return Controllers\OrdersController The *Singleton* instance
     */
    public function getOrders()
    {
        return Controllers\OrdersController::getInstance();
    }
    /**
     * Singleton access to Tokens controller
     * @return Controllers\TokensController The *Singleton* instance
     */
    public function getTokens()
    {
        return Controllers\TokensController::getInstance();
    }
}
