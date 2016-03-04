<?php

namespace Houston\Client\Model;

class Host
{
    protected $id;
    protected $infrastructure_id;
    protected $host_account_provider_id;
    protected $name;
    protected $description;
    protected $classes;
    protected $remote_id;
    protected $provider_account_name;
    protected $provider_account_type;
    protected $state;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getInfrastructureId()
    {
        return $this->infrastructure_id;
    }

    public function setInfrastructureId($infrastructure_id)
    {
        $this->infrastructure_id = $infrastructure_id;

        return $this;
    }

    public function getHostAccountProviderId()
    {
        return $this->host_account_provider_id;
    }

    public function setHostAccountProviderId($host_account_provider_id)
    {
        $this->host_account_provider_id = $host_account_provider_id;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getClasses()
    {
        return $this->classes;
    }

    public function setClasses($classes)
    {
        $this->classes = $classes;

        return $this;
    }

    public function getRemoteId()
    {
        return $this->remote_id;
    }

    public function setRemoteId($remote_id)
    {
        $this->remote_id = $remote_id;

        return $this;
    }

    public function getProviderAccountName()
    {
        return $this->provider_account_name;
    }

    public function setProviderAccountName($provider_account_name)
    {
        $this->provider_account_name = $provider_account_name;

        return $this;
    }

    public function getProviderAccountType()
    {
        return $this->provider_account_type;
    }

    public function setProviderAccountType($provider_account_type)
    {
        $this->provider_account_type = $provider_account_type;

        return $this;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }


    public function fillData($data)
    {
        $this->setId($data['id'])
            ->setName($data['name'])
            ->setDescription($data['description'])
            ->setClasses($data['classes'])
            ->setHostAccountProviderId($data['host_account_provider_id'])
            ->setInfrastructureId($data['infrastructure_id'])
            ->setProviderAccountName($data['provider_account_name'])
            ->setProviderAccountType($data['provider_account_type'])
            ->setRemoteId($data['remote_id'])
            ->setState($data['state']);
    }
}
