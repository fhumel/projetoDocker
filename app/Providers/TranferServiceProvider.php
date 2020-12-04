<?php

namespace App\Providers;

use App\Mappers\TransferMapperFactory;
use App\Mappers\TransferMapperInterface;
use App\Repositories\TransferRepositoryFactory;
use App\Repositories\TransferRepositoryInterface;
use App\Services\TransferServiceFactory;
use App\Services\TransferServiceInterface;
use Illuminate\Support\ServiceProvider;

class TranferServiceProvider extends ServiceProvider
{

    /**
    * @return void
    */
    public function register()
    {
            $this->app->bind(
                TransferServiceInterface::class,
                function () {
                    return (new TransferServiceFactory())();
                }
            );
//
            $this->app->bind(
                TransferRepositoryInterface::class,
                function () {
                    return (new TransferRepositoryFactory())();
                }
            );
//
//            $this->app->bind(
//                TransferMapperInterface::class,
//                function () {
//                    return (new TransferMapperFactory())();
//                }
//            );
    }

    /**
    * @return void
    */
    public function boot()
    {
    //
    }
}
