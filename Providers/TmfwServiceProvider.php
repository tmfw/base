<?php

namespace TMFW\Providers;


class TmfwServiceProvider extends ServiceProvider
{

    protected $bootstrapers = ['Support', 'Foundation'/*, 'Workflow', 'Exporter', 'Jobs', 'Template', 'Plugin\Localizer'*/];

    /*public function boot(){
        if(is_dir($layouts = __DIR__.'/../../template/src/layout')){
            $this->loadViewsFrom($layouts, 'layout');
        }
    }*/

    /**
     * Register service provider
     *
     * @return void
     */
    public function register(){
        foreach (array_unique(array_merge($this->bootstrapers, (is_array($this->config['csys.dependencies'])?
            $this->config['csys.dependencies'] : []))) as $name)
            $this->bootstraper = $name;

        $this->models->load($this->config['models']);
    }

}