<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The CoverageEligibilityRequest provides patient and insurance coverage
 * information to an insurer for them to respond, in the form of an
 * CoverageEligibilityResponse, with information regarding whether the stated
 * coverage is valid and in-force and optionally to provide the insurance details
 * of the policy.
 *
 * Class FHIRCoverageEligibilityRequestInsurance
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest
 */
class FHIRCoverageEligibilityRequestInsurance extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_REQUEST_DOT_INSURANCE;
    const FIELD_BUSINESS_ARRANGEMENT = 'businessArrangement';
    const FIELD_BUSINESS_ARRANGEMENT_EXT = '_businessArrangement';
    const FIELD_COVERAGE = 'coverage';
    const FIELD_FOCAL = 'focal';
    const FIELD_FOCAL_EXT = '_focal';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A business agreement number established between the provider and the insurer for
     * special business processing purposes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $businessArrangement = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the insurance card level information contained in the Coverage
     * resource. The coverage issuing insurer will use these details to locate the
     * patient's actual coverage within the insurer's information system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $coverage = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that this Coverage is to be used for evaluation of this
     * request when set to true.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $focal = null;

    /**
     * Validation map for fields in type CoverageEligibilityRequest.Insurance
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRCoverageEligibilityRequestInsurance Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCoverageEligibilityRequestInsurance::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_BUSINESS_ARRANGEMENT]) || isset($data[self::FIELD_BUSINESS_ARRANGEMENT_EXT])) {
            if (isset($data[self::FIELD_BUSINESS_ARRANGEMENT])) {
                $value = $data[self::FIELD_BUSINESS_ARRANGEMENT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_BUSINESS_ARRANGEMENT_EXT]) && is_array($data[self::FIELD_BUSINESS_ARRANGEMENT_EXT])) {
                $ext = $data[self::FIELD_BUSINESS_ARRANGEMENT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setBusinessArrangement($value);
                } else if (is_array($value)) {
                    $this->setBusinessArrangement(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setBusinessArrangement(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setBusinessArrangement(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_COVERAGE])) {
            if ($data[self::FIELD_COVERAGE] instanceof FHIRReference) {
                $this->setCoverage($data[self::FIELD_COVERAGE]);
            } else {
                $this->setCoverage(new FHIRReference($data[self::FIELD_COVERAGE]));
            }
        }
        if (isset($data[self::FIELD_FOCAL]) || isset($data[self::FIELD_FOCAL_EXT])) {
            if (isset($data[self::FIELD_FOCAL])) {
                $value = $data[self::FIELD_FOCAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FOCAL_EXT]) && is_array($data[self::FIELD_FOCAL_EXT])) {
                $ext = $data[self::FIELD_FOCAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setFocal($value);
                } else if (is_array($value)) {
                    $this->setFocal(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setFocal(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFocal(new FHIRBoolean($ext));
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
        return "<CoverageEligibilityRequestInsurance{$xmlns}></CoverageEligibilityRequestInsurance>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A business agreement number established between the provider and the insurer for
     * special business processing purposes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getBusinessArrangement()
    {
        return $this->businessArrangement;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A business agreement number established between the provider and the insurer for
     * special business processing purposes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $businessArrangement
     * @return static
     */
    public function setBusinessArrangement($businessArrangement = null)
    {
        if (null === $businessArrangement) {
            $this->businessArrangement = null;
            return $this;
        }
        if ($businessArrangement instanceof FHIRString) {
            $this->businessArrangement = $businessArrangement;
            return $this;
        }
        $this->businessArrangement = new FHIRString($businessArrangement);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the insurance card level information contained in the Coverage
     * resource. The coverage issuing insurer will use these details to locate the
     * patient's actual coverage within the insurer's information system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the insurance card level information contained in the Coverage
     * resource. The coverage issuing insurer will use these details to locate the
     * patient's actual coverage within the insurer's information system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $coverage
     * @return static
     */
    public function setCoverage(FHIRReference $coverage = null)
    {
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that this Coverage is to be used for evaluation of this
     * request when set to true.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getFocal()
    {
        return $this->focal;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that this Coverage is to be used for evaluation of this
     * request when set to true.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $focal
     * @return static
     */
    public function setFocal($focal = null)
    {
        if (null === $focal) {
            $this->focal = null;
            return $this;
        }
        if ($focal instanceof FHIRBoolean) {
            $this->focal = $focal;
            return $this;
        }
        $this->focal = new FHIRBoolean($focal);
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
        if (null !== ($v = $this->getBusinessArrangement())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BUSINESS_ARRANGEMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCoverage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COVERAGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFocal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FOCAL] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_BUSINESS_ARRANGEMENT])) {
            $v = $this->getBusinessArrangement();
            foreach($validationRules[self::FIELD_BUSINESS_ARRANGEMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_REQUEST_DOT_INSURANCE, self::FIELD_BUSINESS_ARRANGEMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BUSINESS_ARRANGEMENT])) {
                        $errs[self::FIELD_BUSINESS_ARRANGEMENT] = [];
                    }
                    $errs[self::FIELD_BUSINESS_ARRANGEMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COVERAGE])) {
            $v = $this->getCoverage();
            foreach($validationRules[self::FIELD_COVERAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_REQUEST_DOT_INSURANCE, self::FIELD_COVERAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COVERAGE])) {
                        $errs[self::FIELD_COVERAGE] = [];
                    }
                    $errs[self::FIELD_COVERAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FOCAL])) {
            $v = $this->getFocal();
            foreach($validationRules[self::FIELD_FOCAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_REQUEST_DOT_INSURANCE, self::FIELD_FOCAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FOCAL])) {
                        $errs[self::FIELD_FOCAL] = [];
                    }
                    $errs[self::FIELD_FOCAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestInsurance $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestInsurance
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
                throw new \DomainException(sprintf('FHIRCoverageEligibilityRequestInsurance::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCoverageEligibilityRequestInsurance::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRCoverageEligibilityRequestInsurance;
        } elseif (!is_object($type) || !($type instanceof FHIRCoverageEligibilityRequestInsurance)) {
            throw new \RuntimeException(sprintf(
                'FHIRCoverageEligibilityRequestInsurance::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestInsurance or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->businessArrangement)) {
            $type->setBusinessArrangement(FHIRString::xmlUnserialize($children->businessArrangement));
        }
        if (isset($attributes->businessArrangement)) {
            $pt = $type->getBusinessArrangement();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->businessArrangement);
            } else {
                $type->setBusinessArrangement((string)$attributes->businessArrangement);
            }
        }
        if (isset($children->coverage)) {
            $type->setCoverage(FHIRReference::xmlUnserialize($children->coverage));
        }
        if (isset($children->focal)) {
            $type->setFocal(FHIRBoolean::xmlUnserialize($children->focal));
        }
        if (isset($attributes->focal)) {
            $pt = $type->getFocal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->focal);
            } else {
                $type->setFocal((string)$attributes->focal);
            }
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
        if (null !== ($v = $this->getBusinessArrangement())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BUSINESS_ARRANGEMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCoverage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COVERAGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFocal())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FOCAL, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getBusinessArrangement())) {
            $a[self::FIELD_BUSINESS_ARRANGEMENT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_BUSINESS_ARRANGEMENT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getCoverage())) {
            $a[self::FIELD_COVERAGE] = $v;
        }
        if (null !== ($v = $this->getFocal())) {
            $a[self::FIELD_FOCAL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_FOCAL_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
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