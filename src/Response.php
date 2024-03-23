<?php
/**
 * Response automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Worker;

use PSX\Schema\Attribute\Description;

#[Description('')]
class Response implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('')]
    protected ?ResponseHTTP $response = null;
    /**
     * @var array<ResponseEvent>|null
     */
    #[Description('Optional events which are triggered on invocation of this action')]
    protected ?array $events = null;
    /**
     * @var array<ResponseLog>|null
     */
    #[Description('Optional log entries which are generated on invocation of this action')]
    protected ?array $logs = null;
    public function setResponse(?ResponseHTTP $response) : void
    {
        $this->response = $response;
    }
    public function getResponse() : ?ResponseHTTP
    {
        return $this->response;
    }
    /**
     * @param array<ResponseEvent>|null $events
     */
    public function setEvents(?array $events) : void
    {
        $this->events = $events;
    }
    /**
     * @return array<ResponseEvent>|null
     */
    public function getEvents() : ?array
    {
        return $this->events;
    }
    /**
     * @param array<ResponseLog>|null $logs
     */
    public function setLogs(?array $logs) : void
    {
        $this->logs = $logs;
    }
    /**
     * @return array<ResponseLog>|null
     */
    public function getLogs() : ?array
    {
        return $this->logs;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('response', $this->response);
        $record->put('events', $this->events);
        $record->put('logs', $this->logs);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}
