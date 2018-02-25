<?php

#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

use Illuminate\Support\ServiceProvider;

class ${NAME} extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        #[[$END$]]#
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
