<?php

namespace MercadoPago\Entities;

use MercadoPago\Annotation\RestMethod;
use MercadoPago\Annotation\RequestParam;
use MercadoPago\Annotation\Attribute;
use MercadoPago\Entity;

/**
 * @RestMethod(resource="/pos/:id", method="read")
 * @RestMethod(resource="/pos", method="create")
 * @RestMethod(resource="/pos/:id", method="update")
 * @RestMethod(resource="/pos/:id", method="delete")
 * @RestMethod(resource="/pos", method="search")
 * @RequestParam(param="access_token")
 */
class Pos extends Entity
{
    /**
     * @Attribute()
     */
    protected $id;

    /**
     * @Attribute()
     */
    protected $name;

    /**
     * @Attribute()
     */
    protected $fixed_amount;

    /**
     * @Attribute()
     */
    protected $category;

    /**
     * @Attribute()
     */
    protected $store_id;

    /**
     * @Attribute()
     */
    protected $external_id;

    /**
     * @Attribute()
     */
    protected $qr;

    /**
     * @Attribute()
     */
    protected $status;

    /**
     * @Attribute()
     */
    protected $date_created;

    /**
     * @Attribute()
     */
    protected $date_last_updated;

    /**
     * @Attribute()
     */
    protected $uuid;

    /**
     * @Attribute()
     */
    protected $compatible_id;

    /**
     * @Attribute()
     */
    protected $user_id;
}
