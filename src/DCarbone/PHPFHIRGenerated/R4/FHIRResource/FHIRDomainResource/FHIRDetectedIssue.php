<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 22nd, 2019 07:25+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueEvidence;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDetectedIssueSeverity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRObservationStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Indicates an actual or potential clinical issue with or between one or more
 * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
 * Ineffective treatment frequency, Procedure-condition conflict, etc.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRDetectedIssue
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRDetectedIssue extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE;
    const FIELD_AUTHOR = 'author';
    const FIELD_CODE = 'code';
    const FIELD_DETAIL = 'detail';
    const FIELD_DETAIL_EXT = '_detail';
    const FIELD_EVIDENCE = 'evidence';
    const FIELD_IDENTIFIED_DATE_TIME = 'identifiedDateTime';
    const FIELD_IDENTIFIED_DATE_TIME_EXT = '_identifiedDateTime';
    const FIELD_IDENTIFIED_PERIOD = 'identifiedPeriod';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IMPLICATED = 'implicated';
    const FIELD_MITIGATION = 'mitigation';
    const FIELD_PATIENT = 'patient';
    const FIELD_REFERENCE = 'reference';
    const FIELD_REFERENCE_EXT = '_reference';
    const FIELD_SEVERITY = 'severity';
    const FIELD_SEVERITY_EXT = '_severity';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual or device responsible for the issue being raised. For example, a
     * decision support application or a pharmacist conducting a medication review.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $author = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the general type of issue identified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $code = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual explanation of the detected issue.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $detail = null;

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     *
     * Supporting evidence or manifestations that provide the basis for identifying the
     * detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueEvidence[]
     */
    protected $evidence = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or period when the detected issue was initially identified. (choose any
     * one of identified*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $identifiedDateTime = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or period when the detected issue was initially identified. (choose any
     * one of identified*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected $identifiedPeriod = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier associated with the detected issue record.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the resource representing the current activity or proposed activity
     * that is potentially problematic.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $implicated = [];

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     *
     * Indicates an action that has been taken or is committed to reduce or eliminate
     * the likelihood of the risk identified by the detected issue from manifesting.
     * Can also reflect an observation of known mitigating factors that may
     * reduce/eliminate the need for any action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation[]
     */
    protected $mitigation = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient whose record the detected issue is associated with.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $patient = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The literature, knowledge-base or similar reference that describes the
     * propensity for the detected issue identified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    protected $reference = null;

    /**
     * Indicates the potential degree of impact of the identified issue on the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the degree of importance associated with the identified issue based on
     * the potential impact on the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDetectedIssueSeverity
     */
    protected $severity = null;

    /**
     * Indicates the status of the identified issue.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the status of the detected issue.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRObservationStatus
     */
    protected $status = null;

    /**
     * Validation map for fields in type DetectedIssue
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRDetectedIssue Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDetectedIssue::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AUTHOR])) {
            if ($data[self::FIELD_AUTHOR] instanceof FHIRReference) {
                $this->setAuthor($data[self::FIELD_AUTHOR]);
            } else {
                $this->setAuthor(new FHIRReference($data[self::FIELD_AUTHOR]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_DETAIL]) || isset($data[self::FIELD_DETAIL_EXT])) {
            if (isset($data[self::FIELD_DETAIL])) {
                $value = $data[self::FIELD_DETAIL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DETAIL_EXT]) && is_array($data[self::FIELD_DETAIL_EXT])) {
                $ext = $data[self::FIELD_DETAIL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDetail($value);
                } else if (is_array($value)) {
                    $this->setDetail(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDetail(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDetail(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_EVIDENCE])) {
            if (is_array($data[self::FIELD_EVIDENCE])) {
                foreach($data[self::FIELD_EVIDENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRDetectedIssueEvidence) {
                        $this->addEvidence($v);
                    } else {
                        $this->addEvidence(new FHIRDetectedIssueEvidence($v));
                    }
                }
            } else if ($data[self::FIELD_EVIDENCE] instanceof FHIRDetectedIssueEvidence) {
                $this->addEvidence($data[self::FIELD_EVIDENCE]);
            } else {
                $this->addEvidence(new FHIRDetectedIssueEvidence($data[self::FIELD_EVIDENCE]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIED_DATE_TIME]) || isset($data[self::FIELD_IDENTIFIED_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_IDENTIFIED_DATE_TIME])) {
                $value = $data[self::FIELD_IDENTIFIED_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_IDENTIFIED_DATE_TIME_EXT]) && is_array($data[self::FIELD_IDENTIFIED_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_IDENTIFIED_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setIdentifiedDateTime($value);
                } else if (is_array($value)) {
                    $this->setIdentifiedDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setIdentifiedDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setIdentifiedDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIED_PERIOD])) {
            if ($data[self::FIELD_IDENTIFIED_PERIOD] instanceof FHIRPeriod) {
                $this->setIdentifiedPeriod($data[self::FIELD_IDENTIFIED_PERIOD]);
            } else {
                $this->setIdentifiedPeriod(new FHIRPeriod($data[self::FIELD_IDENTIFIED_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_IMPLICATED])) {
            if (is_array($data[self::FIELD_IMPLICATED])) {
                foreach($data[self::FIELD_IMPLICATED] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addImplicated($v);
                    } else {
                        $this->addImplicated(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_IMPLICATED] instanceof FHIRReference) {
                $this->addImplicated($data[self::FIELD_IMPLICATED]);
            } else {
                $this->addImplicated(new FHIRReference($data[self::FIELD_IMPLICATED]));
            }
        }
        if (isset($data[self::FIELD_MITIGATION])) {
            if (is_array($data[self::FIELD_MITIGATION])) {
                foreach($data[self::FIELD_MITIGATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRDetectedIssueMitigation) {
                        $this->addMitigation($v);
                    } else {
                        $this->addMitigation(new FHIRDetectedIssueMitigation($v));
                    }
                }
            } else if ($data[self::FIELD_MITIGATION] instanceof FHIRDetectedIssueMitigation) {
                $this->addMitigation($data[self::FIELD_MITIGATION]);
            } else {
                $this->addMitigation(new FHIRDetectedIssueMitigation($data[self::FIELD_MITIGATION]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE]) || isset($data[self::FIELD_REFERENCE_EXT])) {
            if (isset($data[self::FIELD_REFERENCE])) {
                $value = $data[self::FIELD_REFERENCE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_REFERENCE_EXT]) && is_array($data[self::FIELD_REFERENCE_EXT])) {
                $ext = $data[self::FIELD_REFERENCE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setReference($value);
                } else if (is_array($value)) {
                    $this->setReference(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setReference(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setReference(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_SEVERITY]) || isset($data[self::FIELD_SEVERITY_EXT])) {
            if (isset($data[self::FIELD_SEVERITY])) {
                $value = $data[self::FIELD_SEVERITY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SEVERITY_EXT]) && is_array($data[self::FIELD_SEVERITY_EXT])) {
                $ext = $data[self::FIELD_SEVERITY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDetectedIssueSeverity) {
                    $this->setSeverity($value);
                } else if (is_array($value)) {
                    $this->setSeverity(new FHIRDetectedIssueSeverity(array_merge($ext, $value)));
                } else {
                    $this->setSeverity(new FHIRDetectedIssueSeverity([FHIRDetectedIssueSeverity::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSeverity(new FHIRDetectedIssueSeverity($ext));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            if (isset($data[self::FIELD_STATUS])) {
                $value = $data[self::FIELD_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) {
                $ext = $data[self::FIELD_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRObservationStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRObservationStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRObservationStatus([FHIRObservationStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRObservationStatus($ext));
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
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<DetectedIssue{$xmlns}></DetectedIssue>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual or device responsible for the issue being raised. For example, a
     * decision support application or a pharmacist conducting a medication review.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual or device responsible for the issue being raised. For example, a
     * decision support application or a pharmacist conducting a medication review.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $author
     * @return static
     */
    public function setAuthor(FHIRReference $author = null)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the general type of issue identified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the general type of issue identified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual explanation of the detected issue.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual explanation of the detected issue.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $detail
     * @return static
     */
    public function setDetail($detail = null)
    {
        if (null === $detail) {
            $this->detail = null;
            return $this;
        }
        if ($detail instanceof FHIRString) {
            $this->detail = $detail;
            return $this;
        }
        $this->detail = new FHIRString($detail);
        return $this;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     *
     * Supporting evidence or manifestations that provide the basis for identifying the
     * detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueEvidence[]
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     *
     * Supporting evidence or manifestations that provide the basis for identifying the
     * detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueEvidence $evidence
     * @return static
     */
    public function addEvidence(FHIRDetectedIssueEvidence $evidence = null)
    {
        $this->evidence[] = $evidence;
        return $this;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     *
     * Supporting evidence or manifestations that provide the basis for identifying the
     * detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueEvidence[] $evidence
     * @return static
     */
    public function setEvidence(array $evidence = [])
    {
        $this->evidence = [];
        if ([] === $evidence) {
            return $this;
        }
        foreach($evidence as $v) {
            if ($v instanceof FHIRDetectedIssueEvidence) {
                $this->addEvidence($v);
            } else {
                $this->addEvidence(new FHIRDetectedIssueEvidence($v));
            }
        }
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
     * The date or period when the detected issue was initially identified. (choose any
     * one of identified*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getIdentifiedDateTime()
    {
        return $this->identifiedDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or period when the detected issue was initially identified. (choose any
     * one of identified*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $identifiedDateTime
     * @return static
     */
    public function setIdentifiedDateTime($identifiedDateTime = null)
    {
        if (null === $identifiedDateTime) {
            $this->identifiedDateTime = null;
            return $this;
        }
        if ($identifiedDateTime instanceof FHIRDateTime) {
            $this->identifiedDateTime = $identifiedDateTime;
            return $this;
        }
        $this->identifiedDateTime = new FHIRDateTime($identifiedDateTime);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or period when the detected issue was initially identified. (choose any
     * one of identified*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getIdentifiedPeriod()
    {
        return $this->identifiedPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or period when the detected issue was initially identified. (choose any
     * one of identified*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $identifiedPeriod
     * @return static
     */
    public function setIdentifiedPeriod(FHIRPeriod $identifiedPeriod = null)
    {
        $this->identifiedPeriod = $identifiedPeriod;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier associated with the detected issue record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier associated with the detected issue record.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier associated with the detected issue record.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the resource representing the current activity or proposed activity
     * that is potentially problematic.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getImplicated()
    {
        return $this->implicated;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the resource representing the current activity or proposed activity
     * that is potentially problematic.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $implicated
     * @return static
     */
    public function addImplicated(FHIRReference $implicated = null)
    {
        $this->implicated[] = $implicated;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the resource representing the current activity or proposed activity
     * that is potentially problematic.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $implicated
     * @return static
     */
    public function setImplicated(array $implicated = [])
    {
        $this->implicated = [];
        if ([] === $implicated) {
            return $this;
        }
        foreach($implicated as $v) {
            if ($v instanceof FHIRReference) {
                $this->addImplicated($v);
            } else {
                $this->addImplicated(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     *
     * Indicates an action that has been taken or is committed to reduce or eliminate
     * the likelihood of the risk identified by the detected issue from manifesting.
     * Can also reflect an observation of known mitigating factors that may
     * reduce/eliminate the need for any action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation[]
     */
    public function getMitigation()
    {
        return $this->mitigation;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     *
     * Indicates an action that has been taken or is committed to reduce or eliminate
     * the likelihood of the risk identified by the detected issue from manifesting.
     * Can also reflect an observation of known mitigating factors that may
     * reduce/eliminate the need for any action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation $mitigation
     * @return static
     */
    public function addMitigation(FHIRDetectedIssueMitigation $mitigation = null)
    {
        $this->mitigation[] = $mitigation;
        return $this;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     *
     * Indicates an action that has been taken or is committed to reduce or eliminate
     * the likelihood of the risk identified by the detected issue from manifesting.
     * Can also reflect an observation of known mitigating factors that may
     * reduce/eliminate the need for any action.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation[] $mitigation
     * @return static
     */
    public function setMitigation(array $mitigation = [])
    {
        $this->mitigation = [];
        if ([] === $mitigation) {
            return $this;
        }
        foreach($mitigation as $v) {
            if ($v instanceof FHIRDetectedIssueMitigation) {
                $this->addMitigation($v);
            } else {
                $this->addMitigation(new FHIRDetectedIssueMitigation($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient whose record the detected issue is associated with.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient whose record the detected issue is associated with.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The literature, knowledge-base or similar reference that describes the
     * propensity for the detected issue identified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The literature, knowledge-base or similar reference that describes the
     * propensity for the detected issue identified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $reference
     * @return static
     */
    public function setReference($reference = null)
    {
        if (null === $reference) {
            $this->reference = null;
            return $this;
        }
        if ($reference instanceof FHIRUri) {
            $this->reference = $reference;
            return $this;
        }
        $this->reference = new FHIRUri($reference);
        return $this;
    }

    /**
     * Indicates the potential degree of impact of the identified issue on the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the degree of importance associated with the identified issue based on
     * the potential impact on the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDetectedIssueSeverity
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Indicates the potential degree of impact of the identified issue on the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the degree of importance associated with the identified issue based on
     * the potential impact on the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDetectedIssueSeverity $severity
     * @return static
     */
    public function setSeverity(FHIRDetectedIssueSeverity $severity = null)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Indicates the status of the identified issue.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the status of the detected issue.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRObservationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates the status of the identified issue.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the status of the detected issue.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRObservationStatus $status
     * @return static
     */
    public function setStatus(FHIRObservationStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getAuthor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUTHOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDetail())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAIL] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getEvidence())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EVIDENCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getIdentifiedDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIED_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIdentifiedPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIED_PERIOD] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getImplicated())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IMPLICATED, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMitigation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MITIGATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSeverity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEVERITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_AUTHOR])) {
            $v = $this->getAuthor();
            foreach($validationRules[self::FIELD_AUTHOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_AUTHOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHOR])) {
                        $errs[self::FIELD_AUTHOR] = [];
                    }
                    $errs[self::FIELD_AUTHOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL])) {
            $v = $this->getDetail();
            foreach($validationRules[self::FIELD_DETAIL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_DETAIL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL])) {
                        $errs[self::FIELD_DETAIL] = [];
                    }
                    $errs[self::FIELD_DETAIL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EVIDENCE])) {
            $v = $this->getEvidence();
            foreach($validationRules[self::FIELD_EVIDENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_EVIDENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EVIDENCE])) {
                        $errs[self::FIELD_EVIDENCE] = [];
                    }
                    $errs[self::FIELD_EVIDENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIED_DATE_TIME])) {
            $v = $this->getIdentifiedDateTime();
            foreach($validationRules[self::FIELD_IDENTIFIED_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_IDENTIFIED_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIED_DATE_TIME])) {
                        $errs[self::FIELD_IDENTIFIED_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_IDENTIFIED_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIED_PERIOD])) {
            $v = $this->getIdentifiedPeriod();
            foreach($validationRules[self::FIELD_IDENTIFIED_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_IDENTIFIED_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIED_PERIOD])) {
                        $errs[self::FIELD_IDENTIFIED_PERIOD] = [];
                    }
                    $errs[self::FIELD_IDENTIFIED_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICATED])) {
            $v = $this->getImplicated();
            foreach($validationRules[self::FIELD_IMPLICATED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_IMPLICATED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICATED])) {
                        $errs[self::FIELD_IMPLICATED] = [];
                    }
                    $errs[self::FIELD_IMPLICATED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MITIGATION])) {
            $v = $this->getMitigation();
            foreach($validationRules[self::FIELD_MITIGATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_MITIGATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MITIGATION])) {
                        $errs[self::FIELD_MITIGATION] = [];
                    }
                    $errs[self::FIELD_MITIGATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE])) {
            $v = $this->getReference();
            foreach($validationRules[self::FIELD_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE])) {
                        $errs[self::FIELD_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEVERITY])) {
            $v = $this->getSeverity();
            foreach($validationRules[self::FIELD_SEVERITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_SEVERITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEVERITY])) {
                        $errs[self::FIELD_SEVERITY] = [];
                    }
                    $errs[self::FIELD_SEVERITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
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
                throw new \DomainException(sprintf('FHIRDetectedIssue::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDetectedIssue::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRDetectedIssue;
        } elseif (!is_object($type) || !($type instanceof FHIRDetectedIssue)) {
            throw new \RuntimeException(sprintf(
                'FHIRDetectedIssue::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->author)) {
            $type->setAuthor(FHIRReference::xmlUnserialize($children->author));
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($children->detail)) {
            $type->setDetail(FHIRString::xmlUnserialize($children->detail));
        }
        if (isset($attributes->detail)) {
            $pt = $type->getDetail();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->detail);
            } else {
                $type->setDetail((string)$attributes->detail);
            }
        }
        if (isset($children->evidence)) {
            foreach($children->evidence as $child) {
                $type->addEvidence(FHIRDetectedIssueEvidence::xmlUnserialize($child));
            }
        }
        if (isset($children->identifiedDateTime)) {
            $type->setIdentifiedDateTime(FHIRDateTime::xmlUnserialize($children->identifiedDateTime));
        }
        if (isset($attributes->identifiedDateTime)) {
            $pt = $type->getIdentifiedDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->identifiedDateTime);
            } else {
                $type->setIdentifiedDateTime((string)$attributes->identifiedDateTime);
            }
        }
        if (isset($children->identifiedPeriod)) {
            $type->setIdentifiedPeriod(FHIRPeriod::xmlUnserialize($children->identifiedPeriod));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->implicated)) {
            foreach($children->implicated as $child) {
                $type->addImplicated(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->mitigation)) {
            foreach($children->mitigation as $child) {
                $type->addMitigation(FHIRDetectedIssueMitigation::xmlUnserialize($child));
            }
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->reference)) {
            $type->setReference(FHIRUri::xmlUnserialize($children->reference));
        }
        if (isset($attributes->reference)) {
            $pt = $type->getReference();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->reference);
            } else {
                $type->setReference((string)$attributes->reference);
            }
        }
        if (isset($children->severity)) {
            $type->setSeverity(FHIRDetectedIssueSeverity::xmlUnserialize($children->severity));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRObservationStatus::xmlUnserialize($children->status));
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
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getAuthor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDetail())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DETAIL, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getEvidence())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_EVIDENCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getIdentifiedDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIED_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIdentifiedPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIED_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getImplicated())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IMPLICATED, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getMitigation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MITIGATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSeverity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEVERITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAuthor())) {
            $a[self::FIELD_AUTHOR] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if (null !== ($v = $this->getDetail())) {
            $a[self::FIELD_DETAIL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DETAIL_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getEvidence())) {
            $a[self::FIELD_EVIDENCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_EVIDENCE][] = $v;
            }
        }
        if (null !== ($v = $this->getIdentifiedDateTime())) {
            $a[self::FIELD_IDENTIFIED_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_IDENTIFIED_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getIdentifiedPeriod())) {
            $a[self::FIELD_IDENTIFIED_PERIOD] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if ([] !== ($vs = $this->getImplicated())) {
            $a[self::FIELD_IMPLICATED] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IMPLICATED][] = $v;
            }
        }
        if ([] !== ($vs = $this->getMitigation())) {
            $a[self::FIELD_MITIGATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MITIGATION][] = $v;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if (null !== ($v = $this->getReference())) {
            $a[self::FIELD_REFERENCE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_REFERENCE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSeverity())) {
            $a[self::FIELD_SEVERITY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDetectedIssueSeverity::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDetectedIssueSeverity::FIELD_VALUE]);
                $a[self::FIELD_SEVERITY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRObservationStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRObservationStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}