<?php
/*
 * Copyright 2016-present MongoDB, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace MongoDB\Model;

use ArrayIterator;
use ArrayObject;
use JsonSerializable;
use MongoDB\BSON\Serializable;
use MongoDB\BSON\Unserializable;
use stdClass;

use function MongoDB\recursive_copy;

/**
 * Model class for a BSON document.
 *
 * The internal data will be cast to an object during BSON serialization to
 * ensure that it becomes a BSON document.
 *
 * @template-extends ArrayObject<string, mixed>
 */
class BSONDocument extends ArrayObject implements JsonSerializable, Serializable, Unserializable
{
    /**
     * Deep clone this BSONDocument.
     */
    public function __clone()
    {
        foreach ($this as $key => $value) {
            $this[$key] = recursive_copy($value);
        }
    }

    /**
     * This overrides the parent constructor to allow property access of entries
     * by default.
     *
     * @see https://php.net/arrayobject.construct
     * @param array<string, mixed>|stdClass $input
     * @psalm-param class-string<ArrayIterator<string,mixed>>|class-string<ArrayObject<string,mixed>> $iteratorClass
     */
    public function __construct(array|stdClass $input = [], int $flags = ArrayObject::ARRAY_AS_PROPS, string $iteratorClass = ArrayIterator::class)
    {
        parent::__construct($input, $flags, $iteratorClass);
    }

    /**
     * Factory method for var_export().
     *
     * @see https://php.net/oop5.magic#object.set-state
     * @see https://php.net/var-export
     */
    public static function __set_state(array $properties): self
    {
        $document = new self();
        $document->exchangeArray($properties);

        return $document;
    }

    /**
     * Serialize the document to BSON.
     *
     * @see https://php.net/mongodb-bson-serializable.bsonserialize
     */
    public function bsonSerialize(): stdClass
    {
        return (object) $this->getArrayCopy();
    }

    /**
     * Unserialize the document to BSON.
     *
     * @see https://php.net/mongodb-bson-unserializable.bsonunserialize
     * @param array<string, mixed> $data Array data
     */
    public function bsonUnserialize(array $data): void
    {
        parent::__construct($data, ArrayObject::ARRAY_AS_PROPS);
    }

    /**
     * Serialize the array to JSON.
     *
     * @see https://php.net/jsonserializable.jsonserialize
     */
    public function jsonSerialize(): stdClass
    {
        return (object) $this->getArrayCopy();
    }
}
