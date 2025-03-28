<?php
/**
 * ExecuteRequestContext automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Worker;

use PSX\Schema\Attribute\Description;

#[Description('')]
class ExecuteRequestContext implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('')]
    protected ?string $type = null;
    /**
     * @var \PSX\Record\Record<string>|null
     */
    #[Description('')]
    protected ?\PSX\Record\Record $uriFragments = null;
    #[Description('')]
    protected ?string $method = null;
    #[Description('')]
    protected ?string $path = null;
    /**
     * @var \PSX\Record\Record<string>|null
     */
    #[Description('')]
    protected ?\PSX\Record\Record $queryParameters = null;
    /**
     * @var \PSX\Record\Record<string>|null
     */
    #[Description('')]
    protected ?\PSX\Record\Record $headers = null;
    public function setType(?string $type): void
    {
        $this->type = $type;
    }
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * @param \PSX\Record\Record<string>|null $uriFragments
     */
    public function setUriFragments(?\PSX\Record\Record $uriFragments): void
    {
        $this->uriFragments = $uriFragments;
    }
    /**
     * @return \PSX\Record\Record<string>|null
     */
    public function getUriFragments(): ?\PSX\Record\Record
    {
        return $this->uriFragments;
    }
    public function setMethod(?string $method): void
    {
        $this->method = $method;
    }
    public function getMethod(): ?string
    {
        return $this->method;
    }
    public function setPath(?string $path): void
    {
        $this->path = $path;
    }
    public function getPath(): ?string
    {
        return $this->path;
    }
    /**
     * @param \PSX\Record\Record<string>|null $queryParameters
     */
    public function setQueryParameters(?\PSX\Record\Record $queryParameters): void
    {
        $this->queryParameters = $queryParameters;
    }
    /**
     * @return \PSX\Record\Record<string>|null
     */
    public function getQueryParameters(): ?\PSX\Record\Record
    {
        return $this->queryParameters;
    }
    /**
     * @param \PSX\Record\Record<string>|null $headers
     */
    public function setHeaders(?\PSX\Record\Record $headers): void
    {
        $this->headers = $headers;
    }
    /**
     * @return \PSX\Record\Record<string>|null
     */
    public function getHeaders(): ?\PSX\Record\Record
    {
        return $this->headers;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('type', $this->type);
        $record->put('uriFragments', $this->uriFragments);
        $record->put('method', $this->method);
        $record->put('path', $this->path);
        $record->put('queryParameters', $this->queryParameters);
        $record->put('headers', $this->headers);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
