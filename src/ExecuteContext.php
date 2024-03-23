<?php
/**
 * ExecuteContext automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Worker;

use PSX\Schema\Attribute\Description;

#[Description('')]
class ExecuteContext implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('')]
    protected ?int $operationId = null;
    #[Description('')]
    protected ?string $baseUrl = null;
    #[Description('')]
    protected ?string $tenantId = null;
    #[Description('')]
    protected ?string $action = null;
    #[Description('')]
    protected ?ExecuteContextApp $app = null;
    #[Description('')]
    protected ?ExecuteContextUser $user = null;
    public function setOperationId(?int $operationId) : void
    {
        $this->operationId = $operationId;
    }
    public function getOperationId() : ?int
    {
        return $this->operationId;
    }
    public function setBaseUrl(?string $baseUrl) : void
    {
        $this->baseUrl = $baseUrl;
    }
    public function getBaseUrl() : ?string
    {
        return $this->baseUrl;
    }
    public function setTenantId(?string $tenantId) : void
    {
        $this->tenantId = $tenantId;
    }
    public function getTenantId() : ?string
    {
        return $this->tenantId;
    }
    public function setAction(?string $action) : void
    {
        $this->action = $action;
    }
    public function getAction() : ?string
    {
        return $this->action;
    }
    public function setApp(?ExecuteContextApp $app) : void
    {
        $this->app = $app;
    }
    public function getApp() : ?ExecuteContextApp
    {
        return $this->app;
    }
    public function setUser(?ExecuteContextUser $user) : void
    {
        $this->user = $user;
    }
    public function getUser() : ?ExecuteContextUser
    {
        return $this->user;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('operationId', $this->operationId);
        $record->put('baseUrl', $this->baseUrl);
        $record->put('tenantId', $this->tenantId);
        $record->put('action', $this->action);
        $record->put('app', $this->app);
        $record->put('user', $this->user);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}