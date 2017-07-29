<?php

/**
 * Created by IntelliJ IDEA.
 * User: Abbes
 * Date: 29/07/2017
 * Time: 12:03
 */

namespace App\Metier;


use App\Models\Hopital;
use App\Models\Service;

class ServiceRepository extends ResourceRepository
{


    public function __construct(Service $service)
    {
        $this->model = $service;
    }

    public function isExistService($serviceId)
    {
        return Service::where("id_Service", "=", $serviceId)
            ->first();
    }
}