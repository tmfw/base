<?php

namespace TMFW\Providers;


class TmfwServiceProvider extends ServiceProvider
{

    protected $bootstrapers = ['Support', 'Foundation', 'Template', /*, 'Workflow', 'Exporter', 'Jobs', 'Plugin\Localizer'*/];

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