<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 17th, 2019 04:21+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * Optional Extensions Element - found in all resources.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRExtension
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement
 */
class FHIRExtension extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EXTENSION;
    const FIELD_URL = 'url';
    const FIELD_VALUE_ADDRESS = 'valueAddress';
    const FIELD_VALUE_ANNOTATION = 'valueAnnotation';
    const FIELD_VALUE_ATTACHMENT = 'valueAttachment';
    const FIELD_VALUE_BASE_64BINARY = 'valueBase64Binary';
    const FIELD_VALUE_BASE_64BINARY_EXT = '_valueBase64Binary';
    const FIELD_VALUE_BOOLEAN = 'valueBoolean';
    const FIELD_VALUE_BOOLEAN_EXT = '_valueBoolean';
    const FIELD_VALUE_CODE = 'valueCode';
    const FIELD_VALUE_CODE_EXT = '_valueCode';
    const FIELD_VALUE_CODEABLE_CONCEPT = 'valueCodeableConcept';
    const FIELD_VALUE_CODING = 'valueCoding';
    const FIELD_VALUE_CONTACT_POINT = 'valueContactPoint';
    const FIELD_VALUE_CONTACT_POINT_EXT = '_valueContactPoint';
    const FIELD_VALUE_DATE = 'valueDate';
    const FIELD_VALUE_DATE_EXT = '_valueDate';
    const FIELD_VALUE_DATE_TIME = 'valueDateTime';
    const FIELD_VALUE_DATE_TIME_EXT = '_valueDateTime';
    const FIELD_VALUE_DECIMAL = 'valueDecimal';
    const FIELD_VALUE_DECIMAL_EXT = '_valueDecimal';
    const FIELD_VALUE_HUMAN_NAME = 'valueHumanName';
    const FIELD_VALUE_ID = 'valueId';
    const FIELD_VALUE_ID_EXT = '_valueId';
    const FIELD_VALUE_IDENTIFIER = 'valueIdentifier';
    const FIELD_VALUE_IDENTIFIER_EXT = '_valueIdentifier';
    const FIELD_VALUE_INSTANT = 'valueInstant';
    const FIELD_VALUE_INSTANT_EXT = '_valueInstant';
    const FIELD_VALUE_INTEGER = 'valueInteger';
    const FIELD_VALUE_INTEGER_EXT = '_valueInteger';
    const FIELD_VALUE_MARKDOWN = 'valueMarkdown';
    const FIELD_VALUE_MARKDOWN_EXT = '_valueMarkdown';
    const FIELD_VALUE_META = 'valueMeta';
    const FIELD_VALUE_OID = 'valueOid';
    const FIELD_VALUE_OID_EXT = '_valueOid';
    const FIELD_VALUE_PERIOD = 'valuePeriod';
    const FIELD_VALUE_POSITIVE_INT = 'valuePositiveInt';
    const FIELD_VALUE_POSITIVE_INT_EXT = '_valuePositiveInt';
    const FIELD_VALUE_QUANTITY = 'valueQuantity';
    const FIELD_VALUE_QUANTITY_EXT = '_valueQuantity';
    const FIELD_VALUE_RANGE = 'valueRange';
    const FIELD_VALUE_RATIO = 'valueRatio';
    const FIELD_VALUE_REFERENCE = 'valueReference';
    const FIELD_VALUE_SAMPLED_DATA = 'valueSampledData';
    const FIELD_VALUE_SIGNATURE = 'valueSignature';
    const FIELD_VALUE_STRING = 'valueString';
    const FIELD_VALUE_STRING_EXT = '_valueString';
    const FIELD_VALUE_TIME = 'valueTime';
    const FIELD_VALUE_TIME_EXT = '_valueTime';
    const FIELD_VALUE_TIMING = 'valueTiming';
    const FIELD_VALUE_UNSIGNED_INT = 'valueUnsignedInt';
    const FIELD_VALUE_UNSIGNED_INT_EXT = '_valueUnsignedInt';
    const FIELD_VALUE_URI = 'valueUri';
    const FIELD_VALUE_URI_EXT = '_valueUri';
    const FIELD_VALUE_UUID = 'valueUuid';
    const FIELD_VALUE_UUID_EXT = '_valueUuid';

    /**
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRUriPrimitive
     */
    protected $url = null;

    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAddress
     */
    protected $valueAddress = null;

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation
     */
    protected $valueAnnotation = null;

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment
     */
    protected $valueAttachment = null;

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBase64Binary
     */
    protected $valueBase64Binary = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $valueBoolean = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    protected $valueCode = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $valueCodeableConcept = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    protected $valueCoding = null;

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContactPoint
     */
    protected $valueContactPoint = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate
     */
    protected $valueDate = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $valueDateTime = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    protected $valueDecimal = null;

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRHumanName
     */
    protected $valueHumanName = null;

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId
     */
    protected $valueId = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    protected $valueIdentifier = null;

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant
     */
    protected $valueInstant = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger
     */
    protected $valueInteger = null;

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMarkdown
     */
    protected $valueMarkdown = null;

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeta
     */
    protected $valueMeta = null;

    /**
     * An oid represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROid
     */
    protected $valueOid = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    protected $valuePeriod = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    protected $valuePositiveInt = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity
     */
    protected $valueQuantity = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange
     */
    protected $valueRange = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRatio
     */
    protected $valueRatio = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $valueReference = null;

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSampledData
     */
    protected $valueSampledData = null;

    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different Signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSignature
     */
    protected $valueSignature = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $valueString = null;

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTime
     */
    protected $valueTime = null;

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are expected or requested to occur. The most common usage is
     * in dosage instructions for medications. They are also used when planning care of
     * various kinds.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming
     */
    protected $valueTiming = null;

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnsignedInt
     */
    protected $valueUnsignedInt = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    protected $valueUri = null;

    /**
     * A UUID, represented as a URI
     * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUuid
     */
    protected $valueUuid = null;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * FHIRExtension Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExtension::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_URL])) {
            $this->setUrl($data[self::FIELD_URL]);
        }
        if (isset($data[self::FIELD_VALUE_ADDRESS])) {
            if ($data[self::FIELD_VALUE_ADDRESS] instanceof FHIRAddress) {
                $this->setValueAddress($data[self::FIELD_VALUE_ADDRESS]);
            } else {
                $this->setValueAddress(new FHIRAddress($data[self::FIELD_VALUE_ADDRESS]));
            }
        }
        if (isset($data[self::FIELD_VALUE_ANNOTATION])) {
            if ($data[self::FIELD_VALUE_ANNOTATION] instanceof FHIRAnnotation) {
                $this->setValueAnnotation($data[self::FIELD_VALUE_ANNOTATION]);
            } else {
                $this->setValueAnnotation(new FHIRAnnotation($data[self::FIELD_VALUE_ANNOTATION]));
            }
        }
        if (isset($data[self::FIELD_VALUE_ATTACHMENT])) {
            if ($data[self::FIELD_VALUE_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setValueAttachment($data[self::FIELD_VALUE_ATTACHMENT]);
            } else {
                $this->setValueAttachment(new FHIRAttachment($data[self::FIELD_VALUE_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_BASE_64BINARY])) {
            $ext = (isset($data[self::FIELD_VALUE_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_VALUE_BASE_64BINARY_EXT]))
                ? $data[self::FIELD_VALUE_BASE_64BINARY_EXT]
                : null;
            if ($data[self::FIELD_VALUE_BASE_64BINARY] instanceof FHIRBase64Binary) {
                $this->setValueBase64Binary($data[self::FIELD_VALUE_BASE_64BINARY]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE_BASE_64BINARY])) {
                    $this->setValueBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $data[self::FIELD_VALUE_BASE_64BINARY]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE_BASE_64BINARY])) {
                    $this->setValueBase64Binary(new FHIRBase64Binary(array_merge($ext, $data[self::FIELD_VALUE_BASE_64BINARY])));
                }
            } else {
                $this->setValueBase64Binary(new FHIRBase64Binary($data[self::FIELD_VALUE_BASE_64BINARY]));
            }
        }
        if (isset($data[self::FIELD_VALUE_BOOLEAN])) {
            $ext = (isset($data[self::FIELD_VALUE_BOOLEAN_EXT]) && is_array($data[self::FIELD_VALUE_BOOLEAN_EXT]))
                ? $data[self::FIELD_VALUE_BOOLEAN_EXT]
                : null;
            if ($data[self::FIELD_VALUE_BOOLEAN] instanceof FHIRBoolean) {
                $this->setValueBoolean($data[self::FIELD_VALUE_BOOLEAN]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE_BOOLEAN])) {
                    $this->setValueBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_VALUE_BOOLEAN]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE_BOOLEAN])) {
                    $this->setValueBoolean(new FHIRBoolean(array_merge($ext, $data[self::FIELD_VALUE_BOOLEAN])));
                }
            } else {
                $this->setValueBoolean(new FHIRBoolean($data[self::FIELD_VALUE_BOOLEAN]));
            }
        }
        if (isset($data[self::FIELD_VALUE_CODE])) {
            $ext = (isset($data[self::FIELD_VALUE_CODE_EXT]) && is_array($data[self::FIELD_VALUE_CODE_EXT]))
                ? $data[self::FIELD_VALUE_CODE_EXT]
                : null;
            if ($data[self::FIELD_VALUE_CODE] instanceof FHIRCode) {
                $this->setValueCode($data[self::FIELD_VALUE_CODE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE_CODE])) {
                    $this->setValueCode(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_VALUE_CODE]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE_CODE])) {
                    $this->setValueCode(new FHIRCode(array_merge($ext, $data[self::FIELD_VALUE_CODE])));
                }
            } else {
                $this->setValueCode(new FHIRCode($data[self::FIELD_VALUE_CODE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_VALUE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setValueCodeableConcept($data[self::FIELD_VALUE_CODEABLE_CONCEPT]);
            } else {
                $this->setValueCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_VALUE_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_CODING])) {
            if ($data[self::FIELD_VALUE_CODING] instanceof FHIRCoding) {
                $this->setValueCoding($data[self::FIELD_VALUE_CODING]);
            } else {
                $this->setValueCoding(new FHIRCoding($data[self::FIELD_VALUE_CODING]));
            }
        }
        if (isset($data[self::FIELD_VALUE_CONTACT_POINT])) {
            $ext = (isset($data[self::FIELD_VALUE_CONTACT_POINT_EXT]) && is_array($data[self::FIELD_VALUE_CONTACT_POINT_EXT]))
                ? $data[self::FIELD_VALUE_CONTACT_POINT_EXT]
                : null;
            if ($data[self::FIELD_VALUE_CONTACT_POINT] instanceof FHIRContactPoint) {
                $this->setValueContactPoint($data[self::FIELD_VALUE_CONTACT_POINT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE_CONTACT_POINT])) {
                    $this->setValueContactPoint(new FHIRContactPoint([FHIRContactPoint::FIELD_VALUE => $data[self::FIELD_VALUE_CONTACT_POINT]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE_CONTACT_POINT])) {
                    $this->setValueContactPoint(new FHIRContactPoint(array_merge($ext, $data[self::FIELD_VALUE_CONTACT_POINT])));
                }
            } else {
                $this->setValueContactPoint(new FHIRContactPoint($data[self::FIELD_VALUE_CONTACT_POINT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_DATE])) {
            $ext = (isset($data[self::FIELD_VALUE_DATE_EXT]) && is_array($data[self::FIELD_VALUE_DATE_EXT]))
                ? $data[self::FIELD_VALUE_DATE_EXT]
                : null;
            if ($data[self::FIELD_VALUE_DATE] instanceof FHIRDate) {
                $this->setValueDate($data[self::FIELD_VALUE_DATE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE_DATE])) {
                    $this->setValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_VALUE_DATE]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE_DATE])) {
                    $this->setValueDate(new FHIRDate(array_merge($ext, $data[self::FIELD_VALUE_DATE])));
                }
            } else {
                $this->setValueDate(new FHIRDate($data[self::FIELD_VALUE_DATE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_VALUE_DATE_TIME_EXT]) && is_array($data[self::FIELD_VALUE_DATE_TIME_EXT]))
                ? $data[self::FIELD_VALUE_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_VALUE_DATE_TIME] instanceof FHIRDateTime) {
                $this->setValueDateTime($data[self::FIELD_VALUE_DATE_TIME]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE_DATE_TIME])) {
                    $this->setValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_VALUE_DATE_TIME]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE_DATE_TIME])) {
                    $this->setValueDateTime(new FHIRDateTime(array_merge($ext, $data[self::FIELD_VALUE_DATE_TIME])));
                }
            } else {
                $this->setValueDateTime(new FHIRDateTime($data[self::FIELD_VALUE_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_VALUE_DECIMAL])) {
            $ext = (isset($data[self::FIELD_VALUE_DECIMAL_EXT]) && is_array($data[self::FIELD_VALUE_DECIMAL_EXT]))
                ? $data[self::FIELD_VALUE_DECIMAL_EXT]
                : null;
            if ($data[self::FIELD_VALUE_DECIMAL] instanceof FHIRDecimal) {
                $this->setValueDecimal($data[self::FIELD_VALUE_DECIMAL]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE_DECIMAL])) {
                    $this->setValueDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_VALUE_DECIMAL]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE_DECIMAL])) {
                    $this->setValueDecimal(new FHIRDecimal(array_merge($ext, $data[self::FIELD_VALUE_DECIMAL])));
                }
            } else {
                $this->setValueDecimal(new FHIRDecimal($data[self::FIELD_VALUE_DECIMAL]));
            }
        }
        if (isset($data[self::FIELD_VALUE_HUMAN_NAME])) {
            if ($data[self::FIELD_VALUE_HUMAN_NAME] instanceof FHIRHumanName) {
                $this->setValueHumanName($data[self::FIELD_VALUE_HUMAN_NAME]);
            } else {
                $this->setValueHumanName(new FHIRHumanName($data[self::FIELD_VALUE_HUMAN_NAME]));
            }
        }
        if (isset($data[self::FIELD_VALUE_ID])) {
            $ext = (isset($data[self::FIELD_VALUE_ID_EXT]) && is_array($data[self::FIELD_VALUE_ID_EXT]))
                ? $data[self::FIELD_VALUE_ID_EXT]
                : null;
            if ($data[self::FIELD_VALUE_ID] instanceof FHIRId) {
                $this->setValueId($data[self::FIELD_VALUE_ID]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE_ID])) {
                    $this->setValueId(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_VALUE_ID]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE_ID])) {
                    $this->setValueId(new FHIRId(array_merge($ext, $data[self::FIELD_VALUE_ID])));
                }
            } else {
                $this->setValueId(new FHIRId($data[self::FIELD_VALUE_ID]));
            }
        }
        if (isset($data[self::FIELD_VALUE_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_VALUE_IDENTIFIER_EXT]) && is_array($data[self::FIELD_VALUE_IDENTIFIER_EXT]))
                ? $data[self::FIELD_VALUE_IDENTIFIER_EXT]
                : null;
            if ($data[self::FIELD_VALUE_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setValueIdentifier($data[self::FIELD_VALUE_IDENTIFIER]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE_IDENTIFIER])) {
                    $this->setValueIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_VALUE_IDENTIFIER]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE_IDENTIFIER])) {
                    $this->setValueIdentifier(new FHIRIdentifier(array_merge($ext, $data[self::FIELD_VALUE_IDENTIFIER])));
                }
            } else {
                $this->setValueIdentifier(new FHIRIdentifier($data[self::FIELD_VALUE_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_VALUE_INSTANT])) {
            $ext = (isset($data[self::FIELD_VALUE_INSTANT_EXT]) && is_array($data[self::FIELD_VALUE_INSTANT_EXT]))
                ? $data[self::FIELD_VALUE_INSTANT_EXT]
                : null;
            if ($data[self::FIELD_VALUE_INSTANT] instanceof FHIRInstant) {
                $this->setValueInstant($data[self::FIELD_VALUE_INSTANT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE_INSTANT])) {
                    $this->setValueInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_VALUE_INSTANT]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE_INSTANT])) {
                    $this->setValueInstant(new FHIRInstant(array_merge($ext, $data[self::FIELD_VALUE_INSTANT])));
                }
            } else {
                $this->setValueInstant(new FHIRInstant($data[self::FIELD_VALUE_INSTANT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_INTEGER])) {
            $ext = (isset($data[self::FIELD_VALUE_INTEGER_EXT]) && is_array($data[self::FIELD_VALUE_INTEGER_EXT]))
                ? $data[self::FIELD_VALUE_INTEGER_EXT]
                : null;
            if ($data[self::FIELD_VALUE_INTEGER] instanceof FHIRInteger) {
                $this->setValueInteger($data[self::FIELD_VALUE_INTEGER]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE_INTEGER])) {
                    $this->setValueInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_VALUE_INTEGER]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE_INTEGER])) {
                    $this->setValueInteger(new FHIRInteger(array_merge($ext, $data[self::FIELD_VALUE_INTEGER])));
                }
            } else {
                $this->setValueInteger(new FHIRInteger($data[self::FIELD_VALUE_INTEGER]));
            }
        }
        if (isset($data[self::FIELD_VALUE_MARKDOWN])) {
            $ext = (isset($data[self::FIELD_VALUE_MARKDOWN_EXT]) && is_array($data[self::FIELD_VALUE_MARKDOWN_EXT]))
                ? $data[self::FIELD_VALUE_MARKDOWN_EXT]
                : null;
            if ($data[self::FIELD_VALUE_MARKDOWN] instanceof FHIRMarkdown) {
                $this->setValueMarkdown($data[self::FIELD_VALUE_MARKDOWN]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE_MARKDOWN])) {
                    $this->setValueMarkdown(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_VALUE_MARKDOWN]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE_MARKDOWN])) {
                    $this->setValueMarkdown(new FHIRMarkdown(array_merge($ext, $data[self::FIELD_VALUE_MARKDOWN])));
                }
            } else {
                $this->setValueMarkdown(new FHIRMarkdown($data[self::FIELD_VALUE_MARKDOWN]));
            }
        }
        if (isset($data[self::FIELD_VALUE_META])) {
            if ($data[self::FIELD_VALUE_META] instanceof FHIRMeta) {
                $this->setValueMeta($data[self::FIELD_VALUE_META]);
            } else {
                $this->setValueMeta(new FHIRMeta($data[self::FIELD_VALUE_META]));
            }
        }
        if (isset($data[self::FIELD_VALUE_OID])) {
            $ext = (isset($data[self::FIELD_VALUE_OID_EXT]) && is_array($data[self::FIELD_VALUE_OID_EXT]))
                ? $data[self::FIELD_VALUE_OID_EXT]
                : null;
            if ($data[self::FIELD_VALUE_OID] instanceof FHIROid) {
                $this->setValueOid($data[self::FIELD_VALUE_OID]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE_OID])) {
                    $this->setValueOid(new FHIROid([FHIROid::FIELD_VALUE => $data[self::FIELD_VALUE_OID]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE_OID])) {
                    $this->setValueOid(new FHIROid(array_merge($ext, $data[self::FIELD_VALUE_OID])));
                }
            } else {
                $this->setValueOid(new FHIROid($data[self::FIELD_VALUE_OID]));
            }
        }
        if (isset($data[self::FIELD_VALUE_PERIOD])) {
            if ($data[self::FIELD_VALUE_PERIOD] instanceof FHIRPeriod) {
                $this->setValuePeriod($data[self::FIELD_VALUE_PERIOD]);
            } else {
                $this->setValuePeriod(new FHIRPeriod($data[self::FIELD_VALUE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_VALUE_POSITIVE_INT])) {
            $ext = (isset($data[self::FIELD_VALUE_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_VALUE_POSITIVE_INT_EXT]))
                ? $data[self::FIELD_VALUE_POSITIVE_INT_EXT]
                : null;
            if ($data[self::FIELD_VALUE_POSITIVE_INT] instanceof FHIRPositiveInt) {
                $this->setValuePositiveInt($data[self::FIELD_VALUE_POSITIVE_INT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE_POSITIVE_INT])) {
                    $this->setValuePositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_VALUE_POSITIVE_INT]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE_POSITIVE_INT])) {
                    $this->setValuePositiveInt(new FHIRPositiveInt(array_merge($ext, $data[self::FIELD_VALUE_POSITIVE_INT])));
                }
            } else {
                $this->setValuePositiveInt(new FHIRPositiveInt($data[self::FIELD_VALUE_POSITIVE_INT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_QUANTITY])) {
            $ext = (isset($data[self::FIELD_VALUE_QUANTITY_EXT]) && is_array($data[self::FIELD_VALUE_QUANTITY_EXT]))
                ? $data[self::FIELD_VALUE_QUANTITY_EXT]
                : null;
            if ($data[self::FIELD_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $this->setValueQuantity($data[self::FIELD_VALUE_QUANTITY]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE_QUANTITY])) {
                    $this->setValueQuantity(new FHIRQuantity([FHIRQuantity::FIELD_VALUE => $data[self::FIELD_VALUE_QUANTITY]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE_QUANTITY])) {
                    $this->setValueQuantity(new FHIRQuantity(array_merge($ext, $data[self::FIELD_VALUE_QUANTITY])));
                }
            } else {
                $this->setValueQuantity(new FHIRQuantity($data[self::FIELD_VALUE_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_VALUE_RANGE])) {
            if ($data[self::FIELD_VALUE_RANGE] instanceof FHIRRange) {
                $this->setValueRange($data[self::FIELD_VALUE_RANGE]);
            } else {
                $this->setValueRange(new FHIRRange($data[self::FIELD_VALUE_RANGE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_RATIO])) {
            if ($data[self::FIELD_VALUE_RATIO] instanceof FHIRRatio) {
                $this->setValueRatio($data[self::FIELD_VALUE_RATIO]);
            } else {
                $this->setValueRatio(new FHIRRatio($data[self::FIELD_VALUE_RATIO]));
            }
        }
        if (isset($data[self::FIELD_VALUE_REFERENCE])) {
            if ($data[self::FIELD_VALUE_REFERENCE] instanceof FHIRReference) {
                $this->setValueReference($data[self::FIELD_VALUE_REFERENCE]);
            } else {
                $this->setValueReference(new FHIRReference($data[self::FIELD_VALUE_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_SAMPLED_DATA])) {
            if ($data[self::FIELD_VALUE_SAMPLED_DATA] instanceof FHIRSampledData) {
                $this->setValueSampledData($data[self::FIELD_VALUE_SAMPLED_DATA]);
            } else {
                $this->setValueSampledData(new FHIRSampledData($data[self::FIELD_VALUE_SAMPLED_DATA]));
            }
        }
        if (isset($data[self::FIELD_VALUE_SIGNATURE])) {
            if ($data[self::FIELD_VALUE_SIGNATURE] instanceof FHIRSignature) {
                $this->setValueSignature($data[self::FIELD_VALUE_SIGNATURE]);
            } else {
                $this->setValueSignature(new FHIRSignature($data[self::FIELD_VALUE_SIGNATURE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_STRING])) {
            $ext = (isset($data[self::FIELD_VALUE_STRING_EXT]) && is_array($data[self::FIELD_VALUE_STRING_EXT]))
                ? $data[self::FIELD_VALUE_STRING_EXT]
                : null;
            if ($data[self::FIELD_VALUE_STRING] instanceof FHIRString) {
                $this->setValueString($data[self::FIELD_VALUE_STRING]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE_STRING])) {
                    $this->setValueString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_VALUE_STRING]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE_STRING])) {
                    $this->setValueString(new FHIRString(array_merge($ext, $data[self::FIELD_VALUE_STRING])));
                }
            } else {
                $this->setValueString(new FHIRString($data[self::FIELD_VALUE_STRING]));
            }
        }
        if (isset($data[self::FIELD_VALUE_TIME])) {
            $ext = (isset($data[self::FIELD_VALUE_TIME_EXT]) && is_array($data[self::FIELD_VALUE_TIME_EXT]))
                ? $data[self::FIELD_VALUE_TIME_EXT]
                : null;
            if ($data[self::FIELD_VALUE_TIME] instanceof FHIRTime) {
                $this->setValueTime($data[self::FIELD_VALUE_TIME]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE_TIME])) {
                    $this->setValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $data[self::FIELD_VALUE_TIME]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE_TIME])) {
                    $this->setValueTime(new FHIRTime(array_merge($ext, $data[self::FIELD_VALUE_TIME])));
                }
            } else {
                $this->setValueTime(new FHIRTime($data[self::FIELD_VALUE_TIME]));
            }
        }
        if (isset($data[self::FIELD_VALUE_TIMING])) {
            if ($data[self::FIELD_VALUE_TIMING] instanceof FHIRTiming) {
                $this->setValueTiming($data[self::FIELD_VALUE_TIMING]);
            } else {
                $this->setValueTiming(new FHIRTiming($data[self::FIELD_VALUE_TIMING]));
            }
        }
        if (isset($data[self::FIELD_VALUE_UNSIGNED_INT])) {
            $ext = (isset($data[self::FIELD_VALUE_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_VALUE_UNSIGNED_INT_EXT]))
                ? $data[self::FIELD_VALUE_UNSIGNED_INT_EXT]
                : null;
            if ($data[self::FIELD_VALUE_UNSIGNED_INT] instanceof FHIRUnsignedInt) {
                $this->setValueUnsignedInt($data[self::FIELD_VALUE_UNSIGNED_INT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE_UNSIGNED_INT])) {
                    $this->setValueUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $data[self::FIELD_VALUE_UNSIGNED_INT]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE_UNSIGNED_INT])) {
                    $this->setValueUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $data[self::FIELD_VALUE_UNSIGNED_INT])));
                }
            } else {
                $this->setValueUnsignedInt(new FHIRUnsignedInt($data[self::FIELD_VALUE_UNSIGNED_INT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_URI])) {
            $ext = (isset($data[self::FIELD_VALUE_URI_EXT]) && is_array($data[self::FIELD_VALUE_URI_EXT]))
                ? $data[self::FIELD_VALUE_URI_EXT]
                : null;
            if ($data[self::FIELD_VALUE_URI] instanceof FHIRUri) {
                $this->setValueUri($data[self::FIELD_VALUE_URI]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE_URI])) {
                    $this->setValueUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_VALUE_URI]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE_URI])) {
                    $this->setValueUri(new FHIRUri(array_merge($ext, $data[self::FIELD_VALUE_URI])));
                }
            } else {
                $this->setValueUri(new FHIRUri($data[self::FIELD_VALUE_URI]));
            }
        }
        if (isset($data[self::FIELD_VALUE_UUID])) {
            $ext = (isset($data[self::FIELD_VALUE_UUID_EXT]) && is_array($data[self::FIELD_VALUE_UUID_EXT]))
                ? $data[self::FIELD_VALUE_UUID_EXT]
                : null;
            if ($data[self::FIELD_VALUE_UUID] instanceof FHIRUuid) {
                $this->setValueUuid($data[self::FIELD_VALUE_UUID]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE_UUID])) {
                    $this->setValueUuid(new FHIRUuid([FHIRUuid::FIELD_VALUE => $data[self::FIELD_VALUE_UUID]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE_UUID])) {
                    $this->setValueUuid(new FHIRUuid(array_merge($ext, $data[self::FIELD_VALUE_UUID])));
                }
            } else {
                $this->setValueUuid(new FHIRUuid($data[self::FIELD_VALUE_UUID]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<Extension{$xmlns}></Extension>";
    }


    /**
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRUriPrimitive
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRUriPrimitive $url
     * @return static
     */
    public function setUrl($url = null)
    {
        if (null === $url) {
            $this->url = null;
            return $this;
        }
        if ($url instanceof FHIRUriPrimitive) {
            $this->url = $url;
            return $this;
        }
        $this->url = new FHIRUriPrimitive($url);
        return $this;
    }

    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAddress
     */
    public function getValueAddress()
    {
        return $this->valueAddress;
    }

    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAddress $valueAddress
     * @return static
     */
    public function setValueAddress(FHIRAddress $valueAddress = null)
    {
        $this->valueAddress = $valueAddress;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation
     */
    public function getValueAnnotation()
    {
        return $this->valueAnnotation;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation $valueAnnotation
     * @return static
     */
    public function setValueAnnotation(FHIRAnnotation $valueAnnotation = null)
    {
        $this->valueAnnotation = $valueAnnotation;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment $valueAttachment
     * @return static
     */
    public function setValueAttachment(FHIRAttachment $valueAttachment = null)
    {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBase64Binary
     */
    public function getValueBase64Binary()
    {
        return $this->valueBase64Binary;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBase64Binary $valueBase64Binary
     * @return static
     */
    public function setValueBase64Binary($valueBase64Binary = null)
    {
        if (null === $valueBase64Binary) {
            $this->valueBase64Binary = null;
            return $this;
        }
        if ($valueBase64Binary instanceof FHIRBase64Binary) {
            $this->valueBase64Binary = $valueBase64Binary;
            return $this;
        }
        $this->valueBase64Binary = new FHIRBase64Binary($valueBase64Binary);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $valueBoolean
     * @return static
     */
    public function setValueBoolean($valueBoolean = null)
    {
        if (null === $valueBoolean) {
            $this->valueBoolean = null;
            return $this;
        }
        if ($valueBoolean instanceof FHIRBoolean) {
            $this->valueBoolean = $valueBoolean;
            return $this;
        }
        $this->valueBoolean = new FHIRBoolean($valueBoolean);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $valueCode
     * @return static
     */
    public function setValueCode($valueCode = null)
    {
        if (null === $valueCode) {
            $this->valueCode = null;
            return $this;
        }
        if ($valueCode instanceof FHIRCode) {
            $this->valueCode = $valueCode;
            return $this;
        }
        $this->valueCode = new FHIRCode($valueCode);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @return static
     */
    public function setValueCodeableConcept(FHIRCodeableConcept $valueCodeableConcept = null)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $valueCoding
     * @return static
     */
    public function setValueCoding(FHIRCoding $valueCoding = null)
    {
        $this->valueCoding = $valueCoding;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContactPoint
     */
    public function getValueContactPoint()
    {
        return $this->valueContactPoint;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContactPoint $valueContactPoint
     * @return static
     */
    public function setValueContactPoint(FHIRContactPoint $valueContactPoint = null)
    {
        $this->valueContactPoint = $valueContactPoint;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate
     */
    public function getValueDate()
    {
        return $this->valueDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate $valueDate
     * @return static
     */
    public function setValueDate($valueDate = null)
    {
        if (null === $valueDate) {
            $this->valueDate = null;
            return $this;
        }
        if ($valueDate instanceof FHIRDate) {
            $this->valueDate = $valueDate;
            return $this;
        }
        $this->valueDate = new FHIRDate($valueDate);
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $valueDateTime
     * @return static
     */
    public function setValueDateTime($valueDateTime = null)
    {
        if (null === $valueDateTime) {
            $this->valueDateTime = null;
            return $this;
        }
        if ($valueDateTime instanceof FHIRDateTime) {
            $this->valueDateTime = $valueDateTime;
            return $this;
        }
        $this->valueDateTime = new FHIRDateTime($valueDateTime);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $valueDecimal
     * @return static
     */
    public function setValueDecimal($valueDecimal = null)
    {
        if (null === $valueDecimal) {
            $this->valueDecimal = null;
            return $this;
        }
        if ($valueDecimal instanceof FHIRDecimal) {
            $this->valueDecimal = $valueDecimal;
            return $this;
        }
        $this->valueDecimal = new FHIRDecimal($valueDecimal);
        return $this;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRHumanName
     */
    public function getValueHumanName()
    {
        return $this->valueHumanName;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRHumanName $valueHumanName
     * @return static
     */
    public function setValueHumanName(FHIRHumanName $valueHumanName = null)
    {
        $this->valueHumanName = $valueHumanName;
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId
     */
    public function getValueId()
    {
        return $this->valueId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId $valueId
     * @return static
     */
    public function setValueId($valueId = null)
    {
        if (null === $valueId) {
            $this->valueId = null;
            return $this;
        }
        if ($valueId instanceof FHIRId) {
            $this->valueId = $valueId;
            return $this;
        }
        $this->valueId = new FHIRId($valueId);
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getValueIdentifier()
    {
        return $this->valueIdentifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $valueIdentifier
     * @return static
     */
    public function setValueIdentifier(FHIRIdentifier $valueIdentifier = null)
    {
        $this->valueIdentifier = $valueIdentifier;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant
     */
    public function getValueInstant()
    {
        return $this->valueInstant;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant $valueInstant
     * @return static
     */
    public function setValueInstant($valueInstant = null)
    {
        if (null === $valueInstant) {
            $this->valueInstant = null;
            return $this;
        }
        if ($valueInstant instanceof FHIRInstant) {
            $this->valueInstant = $valueInstant;
            return $this;
        }
        $this->valueInstant = new FHIRInstant($valueInstant);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger $valueInteger
     * @return static
     */
    public function setValueInteger($valueInteger = null)
    {
        if (null === $valueInteger) {
            $this->valueInteger = null;
            return $this;
        }
        if ($valueInteger instanceof FHIRInteger) {
            $this->valueInteger = $valueInteger;
            return $this;
        }
        $this->valueInteger = new FHIRInteger($valueInteger);
        return $this;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMarkdown
     */
    public function getValueMarkdown()
    {
        return $this->valueMarkdown;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMarkdown $valueMarkdown
     * @return static
     */
    public function setValueMarkdown($valueMarkdown = null)
    {
        if (null === $valueMarkdown) {
            $this->valueMarkdown = null;
            return $this;
        }
        if ($valueMarkdown instanceof FHIRMarkdown) {
            $this->valueMarkdown = $valueMarkdown;
            return $this;
        }
        $this->valueMarkdown = new FHIRMarkdown($valueMarkdown);
        return $this;
    }

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeta
     */
    public function getValueMeta()
    {
        return $this->valueMeta;
    }

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeta $valueMeta
     * @return static
     */
    public function setValueMeta(FHIRMeta $valueMeta = null)
    {
        $this->valueMeta = $valueMeta;
        return $this;
    }

    /**
     * An oid represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROid
     */
    public function getValueOid()
    {
        return $this->valueOid;
    }

    /**
     * An oid represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROid $valueOid
     * @return static
     */
    public function setValueOid($valueOid = null)
    {
        if (null === $valueOid) {
            $this->valueOid = null;
            return $this;
        }
        if ($valueOid instanceof FHIROid) {
            $this->valueOid = $valueOid;
            return $this;
        }
        $this->valueOid = new FHIROid($valueOid);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod $valuePeriod
     * @return static
     */
    public function setValuePeriod(FHIRPeriod $valuePeriod = null)
    {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getValuePositiveInt()
    {
        return $this->valuePositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt $valuePositiveInt
     * @return static
     */
    public function setValuePositiveInt($valuePositiveInt = null)
    {
        if (null === $valuePositiveInt) {
            $this->valuePositiveInt = null;
            return $this;
        }
        if ($valuePositiveInt instanceof FHIRPositiveInt) {
            $this->valuePositiveInt = $valuePositiveInt;
            return $this;
        }
        $this->valuePositiveInt = new FHIRPositiveInt($valuePositiveInt);
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity $valueQuantity
     * @return static
     */
    public function setValueQuantity(FHIRQuantity $valueQuantity = null)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange $valueRange
     * @return static
     */
    public function setValueRange(FHIRRange $valueRange = null)
    {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRatio
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRatio $valueRatio
     * @return static
     */
    public function setValueRatio(FHIRRatio $valueRatio = null)
    {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $valueReference
     * @return static
     */
    public function setValueReference(FHIRReference $valueReference = null)
    {
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSampledData $valueSampledData
     * @return static
     */
    public function setValueSampledData(FHIRSampledData $valueSampledData = null)
    {
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different Signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSignature
     */
    public function getValueSignature()
    {
        return $this->valueSignature;
    }

    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different Signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSignature $valueSignature
     * @return static
     */
    public function setValueSignature(FHIRSignature $valueSignature = null)
    {
        $this->valueSignature = $valueSignature;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $valueString
     * @return static
     */
    public function setValueString($valueString = null)
    {
        if (null === $valueString) {
            $this->valueString = null;
            return $this;
        }
        if ($valueString instanceof FHIRString) {
            $this->valueString = $valueString;
            return $this;
        }
        $this->valueString = new FHIRString($valueString);
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTime
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTime $valueTime
     * @return static
     */
    public function setValueTime($valueTime = null)
    {
        if (null === $valueTime) {
            $this->valueTime = null;
            return $this;
        }
        if ($valueTime instanceof FHIRTime) {
            $this->valueTime = $valueTime;
            return $this;
        }
        $this->valueTime = new FHIRTime($valueTime);
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are expected or requested to occur. The most common usage is
     * in dosage instructions for medications. They are also used when planning care of
     * various kinds.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming
     */
    public function getValueTiming()
    {
        return $this->valueTiming;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are expected or requested to occur. The most common usage is
     * in dosage instructions for medications. They are also used when planning care of
     * various kinds.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming $valueTiming
     * @return static
     */
    public function setValueTiming(FHIRTiming $valueTiming = null)
    {
        $this->valueTiming = $valueTiming;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnsignedInt
     */
    public function getValueUnsignedInt()
    {
        return $this->valueUnsignedInt;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnsignedInt $valueUnsignedInt
     * @return static
     */
    public function setValueUnsignedInt($valueUnsignedInt = null)
    {
        if (null === $valueUnsignedInt) {
            $this->valueUnsignedInt = null;
            return $this;
        }
        if ($valueUnsignedInt instanceof FHIRUnsignedInt) {
            $this->valueUnsignedInt = $valueUnsignedInt;
            return $this;
        }
        $this->valueUnsignedInt = new FHIRUnsignedInt($valueUnsignedInt);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    public function getValueUri()
    {
        return $this->valueUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri $valueUri
     * @return static
     */
    public function setValueUri($valueUri = null)
    {
        if (null === $valueUri) {
            $this->valueUri = null;
            return $this;
        }
        if ($valueUri instanceof FHIRUri) {
            $this->valueUri = $valueUri;
            return $this;
        }
        $this->valueUri = new FHIRUri($valueUri);
        return $this;
    }

    /**
     * A UUID, represented as a URI
     * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUuid
     */
    public function getValueUuid()
    {
        return $this->valueUuid;
    }

    /**
     * A UUID, represented as a URI
     * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Value of extension - may be a resource or one of a constrained set of the data
     * types (see Extensibility in the spec for list).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUuid $valueUuid
     * @return static
     */
    public function setValueUuid($valueUuid = null)
    {
        if (null === $valueUuid) {
            $this->valueUuid = null;
            return $this;
        }
        if ($valueUuid instanceof FHIRUuid) {
            $this->valueUuid = $valueUuid;
            return $this;
        }
        $this->valueUuid = new FHIRUuid($valueUuid);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRExtension $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRExtension
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRExtension::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRExtension::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRExtension;
        } elseif (!is_object($type) || !($type instanceof FHIRExtension)) {
            throw new \RuntimeException(sprintf(
                'FHIRExtension::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRExtension or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->url)) {
            $type->setUrl((string)$attributes->url);
        }
        if (isset($children->url)) {
            $type->setUrl(FHIRUriPrimitive::xmlUnserialize($children->url));
        }
        if (isset($children->valueAddress)) {
            $type->setValueAddress(FHIRAddress::xmlUnserialize($children->valueAddress));
        }
        if (isset($children->valueAnnotation)) {
            $type->setValueAnnotation(FHIRAnnotation::xmlUnserialize($children->valueAnnotation));
        }
        if (isset($children->valueAttachment)) {
            $type->setValueAttachment(FHIRAttachment::xmlUnserialize($children->valueAttachment));
        }
        if (isset($attributes->valueBase64Binary)) {
            $type->setValueBase64Binary((string)$attributes->valueBase64Binary);
        }
        if (isset($children->valueBase64Binary)) {
            $type->setValueBase64Binary(FHIRBase64Binary::xmlUnserialize($children->valueBase64Binary));
        }
        if (isset($attributes->valueBoolean)) {
            $type->setValueBoolean((string)$attributes->valueBoolean);
        }
        if (isset($children->valueBoolean)) {
            $type->setValueBoolean(FHIRBoolean::xmlUnserialize($children->valueBoolean));
        }
        if (isset($attributes->valueCode)) {
            $type->setValueCode((string)$attributes->valueCode);
        }
        if (isset($children->valueCode)) {
            $type->setValueCode(FHIRCode::xmlUnserialize($children->valueCode));
        }
        if (isset($children->valueCodeableConcept)) {
            $type->setValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->valueCodeableConcept));
        }
        if (isset($children->valueCoding)) {
            $type->setValueCoding(FHIRCoding::xmlUnserialize($children->valueCoding));
        }
        if (isset($children->valueContactPoint)) {
            $type->setValueContactPoint(FHIRContactPoint::xmlUnserialize($children->valueContactPoint));
        }
        if (isset($attributes->valueDate)) {
            $type->setValueDate((string)$attributes->valueDate);
        }
        if (isset($children->valueDate)) {
            $type->setValueDate(FHIRDate::xmlUnserialize($children->valueDate));
        }
        if (isset($attributes->valueDateTime)) {
            $type->setValueDateTime((string)$attributes->valueDateTime);
        }
        if (isset($children->valueDateTime)) {
            $type->setValueDateTime(FHIRDateTime::xmlUnserialize($children->valueDateTime));
        }
        if (isset($attributes->valueDecimal)) {
            $type->setValueDecimal((string)$attributes->valueDecimal);
        }
        if (isset($children->valueDecimal)) {
            $type->setValueDecimal(FHIRDecimal::xmlUnserialize($children->valueDecimal));
        }
        if (isset($children->valueHumanName)) {
            $type->setValueHumanName(FHIRHumanName::xmlUnserialize($children->valueHumanName));
        }
        if (isset($attributes->valueId)) {
            $type->setValueId((string)$attributes->valueId);
        }
        if (isset($children->valueId)) {
            $type->setValueId(FHIRId::xmlUnserialize($children->valueId));
        }
        if (isset($children->valueIdentifier)) {
            $type->setValueIdentifier(FHIRIdentifier::xmlUnserialize($children->valueIdentifier));
        }
        if (isset($attributes->valueInstant)) {
            $type->setValueInstant((string)$attributes->valueInstant);
        }
        if (isset($children->valueInstant)) {
            $type->setValueInstant(FHIRInstant::xmlUnserialize($children->valueInstant));
        }
        if (isset($attributes->valueInteger)) {
            $type->setValueInteger((string)$attributes->valueInteger);
        }
        if (isset($children->valueInteger)) {
            $type->setValueInteger(FHIRInteger::xmlUnserialize($children->valueInteger));
        }
        if (isset($attributes->valueMarkdown)) {
            $type->setValueMarkdown((string)$attributes->valueMarkdown);
        }
        if (isset($children->valueMarkdown)) {
            $type->setValueMarkdown(FHIRMarkdown::xmlUnserialize($children->valueMarkdown));
        }
        if (isset($children->valueMeta)) {
            $type->setValueMeta(FHIRMeta::xmlUnserialize($children->valueMeta));
        }
        if (isset($attributes->valueOid)) {
            $type->setValueOid((string)$attributes->valueOid);
        }
        if (isset($children->valueOid)) {
            $type->setValueOid(FHIROid::xmlUnserialize($children->valueOid));
        }
        if (isset($children->valuePeriod)) {
            $type->setValuePeriod(FHIRPeriod::xmlUnserialize($children->valuePeriod));
        }
        if (isset($attributes->valuePositiveInt)) {
            $type->setValuePositiveInt((string)$attributes->valuePositiveInt);
        }
        if (isset($children->valuePositiveInt)) {
            $type->setValuePositiveInt(FHIRPositiveInt::xmlUnserialize($children->valuePositiveInt));
        }
        if (isset($children->valueQuantity)) {
            $type->setValueQuantity(FHIRQuantity::xmlUnserialize($children->valueQuantity));
        }
        if (isset($children->valueRange)) {
            $type->setValueRange(FHIRRange::xmlUnserialize($children->valueRange));
        }
        if (isset($children->valueRatio)) {
            $type->setValueRatio(FHIRRatio::xmlUnserialize($children->valueRatio));
        }
        if (isset($children->valueReference)) {
            $type->setValueReference(FHIRReference::xmlUnserialize($children->valueReference));
        }
        if (isset($children->valueSampledData)) {
            $type->setValueSampledData(FHIRSampledData::xmlUnserialize($children->valueSampledData));
        }
        if (isset($children->valueSignature)) {
            $type->setValueSignature(FHIRSignature::xmlUnserialize($children->valueSignature));
        }
        if (isset($attributes->valueString)) {
            $type->setValueString((string)$attributes->valueString);
        }
        if (isset($children->valueString)) {
            $type->setValueString(FHIRString::xmlUnserialize($children->valueString));
        }
        if (isset($attributes->valueTime)) {
            $type->setValueTime((string)$attributes->valueTime);
        }
        if (isset($children->valueTime)) {
            $type->setValueTime(FHIRTime::xmlUnserialize($children->valueTime));
        }
        if (isset($children->valueTiming)) {
            $type->setValueTiming(FHIRTiming::xmlUnserialize($children->valueTiming));
        }
        if (isset($attributes->valueUnsignedInt)) {
            $type->setValueUnsignedInt((string)$attributes->valueUnsignedInt);
        }
        if (isset($children->valueUnsignedInt)) {
            $type->setValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($children->valueUnsignedInt));
        }
        if (isset($attributes->valueUri)) {
            $type->setValueUri((string)$attributes->valueUri);
        }
        if (isset($children->valueUri)) {
            $type->setValueUri(FHIRUri::xmlUnserialize($children->valueUri));
        }
        if (isset($attributes->valueUuid)) {
            $type->setValueUuid((string)$attributes->valueUuid);
        }
        if (isset($children->valueUuid)) {
            $type->setValueUuid(FHIRUuid::xmlUnserialize($children->valueUuid));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);        if (null !== ($v = $this->getUrl())) {
            $sxe->addAttribute(self::FIELD_URL, (string)$v);
        }
        if (null !== ($v = $this->getValueAddress())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_ADDRESS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueAnnotation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_ANNOTATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueAttachment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_ATTACHMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueBase64Binary())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_BASE_64BINARY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueBoolean())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_BOOLEAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueCoding())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CODING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueContactPoint())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CONTACT_POINT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueDecimal())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_DECIMAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueHumanName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_HUMAN_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueInstant())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_INSTANT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueInteger())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_INTEGER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueMarkdown())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_MARKDOWN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueMeta())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_META, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueOid())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_OID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValuePositiveInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_POSITIVE_INT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueRatio())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_RATIO, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueSampledData())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_SAMPLED_DATA, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueSignature())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_SIGNATURE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueTiming())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_TIMING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueUnsignedInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_UNSIGNED_INT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueUri())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_URI, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueUuid())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_UUID, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = $v;
        }
        if (null !== ($v = $this->getValueAddress())) {
            $a[self::FIELD_VALUE_ADDRESS] = $v;
        }
        if (null !== ($v = $this->getValueAnnotation())) {
            $a[self::FIELD_VALUE_ANNOTATION] = $v;
        }
        if (null !== ($v = $this->getValueAttachment())) {
            $a[self::FIELD_VALUE_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getValueBase64Binary())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_BASE_64BINARY] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_VALUE_BASE_64BINARY_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_VALUE_BASE_64BINARY] = $v;
            }
        }
        if (null !== ($v = $this->getValueBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_BOOLEAN] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_VALUE_BOOLEAN_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_VALUE_BOOLEAN] = $v;
            }
        }
        if (null !== ($v = $this->getValueCode())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_CODE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_VALUE_CODE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_VALUE_CODE] = $v;
            }
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            $a[self::FIELD_VALUE_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getValueCoding())) {
            $a[self::FIELD_VALUE_CODING] = $v;
        }
        if (null !== ($v = $this->getValueContactPoint())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_CONTACT_POINT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_VALUE_CONTACT_POINT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_VALUE_CONTACT_POINT] = $v;
            }
        }
        if (null !== ($v = $this->getValueDate())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_DATE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_VALUE_DATE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_VALUE_DATE] = $v;
            }
        }
        if (null !== ($v = $this->getValueDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_DATE_TIME] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_VALUE_DATE_TIME_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_VALUE_DATE_TIME] = $v;
            }
        }
        if (null !== ($v = $this->getValueDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_DECIMAL] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_VALUE_DECIMAL_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_VALUE_DECIMAL] = $v;
            }
        }
        if (null !== ($v = $this->getValueHumanName())) {
            $a[self::FIELD_VALUE_HUMAN_NAME] = $v;
        }
        if (null !== ($v = $this->getValueId())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_ID] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_VALUE_ID_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_VALUE_ID] = $v;
            }
        }
        if (null !== ($v = $this->getValueIdentifier())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_IDENTIFIER] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_VALUE_IDENTIFIER_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_VALUE_IDENTIFIER] = $v;
            }
        }
        if (null !== ($v = $this->getValueInstant())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_INSTANT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_VALUE_INSTANT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_VALUE_INSTANT] = $v;
            }
        }
        if (null !== ($v = $this->getValueInteger())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_INTEGER] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_VALUE_INTEGER_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_VALUE_INTEGER] = $v;
            }
        }
        if (null !== ($v = $this->getValueMarkdown())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_MARKDOWN] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_VALUE_MARKDOWN_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_VALUE_MARKDOWN] = $v;
            }
        }
        if (null !== ($v = $this->getValueMeta())) {
            $a[self::FIELD_VALUE_META] = $v;
        }
        if (null !== ($v = $this->getValueOid())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_OID] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_VALUE_OID_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_VALUE_OID] = $v;
            }
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $a[self::FIELD_VALUE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getValuePositiveInt())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_POSITIVE_INT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_VALUE_POSITIVE_INT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_VALUE_POSITIVE_INT] = $v;
            }
        }
        if (null !== ($v = $this->getValueQuantity())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_QUANTITY] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_VALUE_QUANTITY_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_VALUE_QUANTITY] = $v;
            }
        }
        if (null !== ($v = $this->getValueRange())) {
            $a[self::FIELD_VALUE_RANGE] = $v;
        }
        if (null !== ($v = $this->getValueRatio())) {
            $a[self::FIELD_VALUE_RATIO] = $v;
        }
        if (null !== ($v = $this->getValueReference())) {
            $a[self::FIELD_VALUE_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getValueSampledData())) {
            $a[self::FIELD_VALUE_SAMPLED_DATA] = $v;
        }
        if (null !== ($v = $this->getValueSignature())) {
            $a[self::FIELD_VALUE_SIGNATURE] = $v;
        }
        if (null !== ($v = $this->getValueString())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_STRING] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_VALUE_STRING_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_VALUE_STRING] = $v;
            }
        }
        if (null !== ($v = $this->getValueTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_TIME] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_VALUE_TIME_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_VALUE_TIME] = $v;
            }
        }
        if (null !== ($v = $this->getValueTiming())) {
            $a[self::FIELD_VALUE_TIMING] = $v;
        }
        if (null !== ($v = $this->getValueUnsignedInt())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_UNSIGNED_INT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_VALUE_UNSIGNED_INT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_VALUE_UNSIGNED_INT] = $v;
            }
        }
        if (null !== ($v = $this->getValueUri())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_URI] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_VALUE_URI_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_VALUE_URI] = $v;
            }
        }
        if (null !== ($v = $this->getValueUuid())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_UUID] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_VALUE_UUID_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_VALUE_UUID] = $v;
            }
        }
        return $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}