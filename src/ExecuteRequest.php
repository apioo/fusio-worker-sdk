<?php
/**
 * ExecuteRequest automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Worker;

use PSX\Schema\Attribute\Description;

#[Description('')]
class ExecuteRequest implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var \PSX\Record\Record<string>|null
     */
    #[Description('')]
    protected ?\PSX\Record\Record $arguments = null;
    #[Description('')]
    protected mixed $payload = null;
    #[Description('')]
    protected ?ExecuteRequestContext $context = null;
    public function setArguments(?\PSX\Record\Record $arguments) : void
    {
        $this->arguments = $arguments;
    }
    public function getArguments() : ?\PSX\Record\Record
    {
        return $this->arguments;
    }
    public function setPayload(mixed $payload) : void
    {
        $this->payload = $payload;
    }
    public function getPayload() : mixed
    {
        return $this->payload;
    }
    public function setContext(?ExecuteRequestContext $context) : void
    {
        $this->context = $context;
    }
    public function getContext() : ?ExecuteRequestContext
    {
        return $this->context;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('arguments', $this->arguments);
        $record->put('payload', $this->payload);
        $record->put('context', $this->context);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}
