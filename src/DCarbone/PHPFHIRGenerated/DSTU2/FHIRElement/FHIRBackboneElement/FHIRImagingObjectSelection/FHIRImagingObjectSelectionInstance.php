<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 22nd, 2019 01:51+0000
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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROid;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A manifest of a set of DICOM Service-Object Pair Instances (SOP Instances). The
 * referenced SOP Instances (images or other content) are for a single patient, and
 * may be from one or more studies. The referenced SOP Instances have been selected
 * for a purpose, such as quality assurance, conference, or consult. Reflecting
 * that range of purposes, typical ImagingObjectSelection resources may include all
 * SOP Instances in a study (perhaps for sharing through a Health Information
 * Exchange); key images from multiple studies (for reference by a referring or
 * treating physician); a multi-frame ultrasound instance ("cine" video clip) and a
 * set of measurements taken from that instance (for inclusion in a teaching file);
 * and so on.
 *
 * Class FHIRImagingObjectSelectionInstance
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection
 */
class FHIRImagingObjectSelectionInstance extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION_DOT_INSTANCE;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_FRAMES = 'frames';
    const FIELD_SOP_CLASS = 'sopClass';
    const FIELD_SOP_CLASS_EXT = '_sopClass';
    const FIELD_UID = 'uid';
    const FIELD_UID_EXT = '_uid';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';

    /**
     * A manifest of a set of DICOM Service-Object Pair Instances (SOP Instances). The
     * referenced SOP Instances (images or other content) are for a single patient, and
     * may be from one or more studies. The referenced SOP Instances have been selected
     * for a purpose, such as quality assurance, conference, or consult. Reflecting
     * that range of purposes, typical ImagingObjectSelection resources may include all
     * SOP Instances in a study (perhaps for sharing through a Health Information
     * Exchange); key images from multiple studies (for reference by a referring or
     * treating physician); a multi-frame ultrasound instance ("cine" video clip) and a
     * set of measurements taken from that instance (for inclusion in a teaching file);
     * and so on.
     *
     * Identity and location information of the frames in the selected instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionFrames[]
     */
    private $frames = [];
    /**
     * An oid represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * SOP class UID of the selected instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROid
     */
    private $sopClass = null;
    /**
     * An oid represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * SOP Instance UID of the selected instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROid
     */
    private $uid = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * WADO-RS URL to retrieve the DICOM SOP Instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    private $url = null;

    /**
     * FHIRImagingObjectSelectionInstance Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImagingObjectSelectionInstance::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_FRAMES])) {
            if (is_array($data[self::FIELD_FRAMES])) {
                foreach($data[self::FIELD_FRAMES] as $v) {
                    if ($v instanceof FHIRImagingObjectSelectionFrames) {
                        $this->addFrames($v);
                    } else {
                        $this->addFrames(new FHIRImagingObjectSelectionFrames($v));
                    }
                }
            } else if ($data[self::FIELD_FRAMES] instanceof FHIRImagingObjectSelectionFrames) {
                $this->addFrames($data[self::FIELD_FRAMES]);
            } else {
                $this->addFrames(new FHIRImagingObjectSelectionFrames($data[self::FIELD_FRAMES]));
            }
        }
        if (isset($data[self::FIELD_SOP_CLASS])) {
            $ext = (isset($data[self::FIELD_SOP_CLASS_EXT]) && is_array($data[self::FIELD_SOP_CLASS_EXT]))
                ? $data[self::FIELD_SOP_CLASS_EXT]
                : null;
            if ($data[self::FIELD_SOP_CLASS] instanceof FHIROid) {
                $this->setSopClass($data[self::FIELD_SOP_CLASS]);
            } elseif ($ext && is_scalar($data[self::FIELD_SOP_CLASS])) {
                $this->setSopClass(new FHIROid([FHIROid::FIELD_VALUE => $data[self::FIELD_SOP_CLASS]] + $ext));
            } else {
                $this->setSopClass(new FHIROid($data[self::FIELD_SOP_CLASS]));
            }
        }
        if (isset($data[self::FIELD_UID])) {
            $ext = (isset($data[self::FIELD_UID_EXT]) && is_array($data[self::FIELD_UID_EXT]))
                ? $data[self::FIELD_UID_EXT]
                : null;
            if ($data[self::FIELD_UID] instanceof FHIROid) {
                $this->setUid($data[self::FIELD_UID]);
            } elseif ($ext && is_scalar($data[self::FIELD_UID])) {
                $this->setUid(new FHIROid([FHIROid::FIELD_VALUE => $data[self::FIELD_UID]] + $ext));
            } else {
                $this->setUid(new FHIROid($data[self::FIELD_UID]));
            }
        }
        if (isset($data[self::FIELD_URL])) {
            $ext = (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT]))
                ? $data[self::FIELD_URL_EXT]
                : null;
            if ($data[self::FIELD_URL] instanceof FHIRUri) {
                $this->setUrl($data[self::FIELD_URL]);
            } elseif ($ext && is_scalar($data[self::FIELD_URL])) {
                $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_URL]] + $ext));
            } else {
                $this->setUrl(new FHIRUri($data[self::FIELD_URL]));
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionInstance
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
        return "<ImagingObjectSelectionInstance{$xmlns}></ImagingObjectSelectionInstance>";
    }


    /**
     * A manifest of a set of DICOM Service-Object Pair Instances (SOP Instances). The
     * referenced SOP Instances (images or other content) are for a single patient, and
     * may be from one or more studies. The referenced SOP Instances have been selected
     * for a purpose, such as quality assurance, conference, or consult. Reflecting
     * that range of purposes, typical ImagingObjectSelection resources may include all
     * SOP Instances in a study (perhaps for sharing through a Health Information
     * Exchange); key images from multiple studies (for reference by a referring or
     * treating physician); a multi-frame ultrasound instance ("cine" video clip) and a
     * set of measurements taken from that instance (for inclusion in a teaching file);
     * and so on.
     *
     * Identity and location information of the frames in the selected instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionFrames[]
     */
    public function getFrames()
    {
        return $this->frames;
    }

    /**
     * A manifest of a set of DICOM Service-Object Pair Instances (SOP Instances). The
     * referenced SOP Instances (images or other content) are for a single patient, and
     * may be from one or more studies. The referenced SOP Instances have been selected
     * for a purpose, such as quality assurance, conference, or consult. Reflecting
     * that range of purposes, typical ImagingObjectSelection resources may include all
     * SOP Instances in a study (perhaps for sharing through a Health Information
     * Exchange); key images from multiple studies (for reference by a referring or
     * treating physician); a multi-frame ultrasound instance ("cine" video clip) and a
     * set of measurements taken from that instance (for inclusion in a teaching file);
     * and so on.
     *
     * Identity and location information of the frames in the selected instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionFrames $frames
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionInstance
     */
    public function addFrames(FHIRImagingObjectSelectionFrames $frames = null)
    {
        $this->frames[] = $frames;
        return $this;
    }

    /**
     * A manifest of a set of DICOM Service-Object Pair Instances (SOP Instances). The
     * referenced SOP Instances (images or other content) are for a single patient, and
     * may be from one or more studies. The referenced SOP Instances have been selected
     * for a purpose, such as quality assurance, conference, or consult. Reflecting
     * that range of purposes, typical ImagingObjectSelection resources may include all
     * SOP Instances in a study (perhaps for sharing through a Health Information
     * Exchange); key images from multiple studies (for reference by a referring or
     * treating physician); a multi-frame ultrasound instance ("cine" video clip) and a
     * set of measurements taken from that instance (for inclusion in a teaching file);
     * and so on.
     *
     * Identity and location information of the frames in the selected instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionFrames[] $frames
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionInstance
     */
    public function setFrames(array $frames = [])
    {
        $this->frames = [];
        if ([] === $frames) {
            return $this;
        }
        foreach($frames as $v) {
            if ($v instanceof FHIRImagingObjectSelectionFrames) {
                $this->addFrames($v);
            } else {
                $this->addFrames(new FHIRImagingObjectSelectionFrames($v));
            }
        }
        return $this;
    }

    /**
     * An oid represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * SOP class UID of the selected instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROid
     */
    public function getSopClass()
    {
        return $this->sopClass;
    }

    /**
     * An oid represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * SOP class UID of the selected instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROid $sopClass
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionInstance
     */
    public function setSopClass($sopClass = null)
    {
        if (null === $sopClass) {
            $this->sopClass = null;
            return $this;
        }
        if ($sopClass instanceof FHIROid) {
            $this->sopClass = $sopClass;
            return $this;
        }
        $this->sopClass = new FHIROid($sopClass);
        return $this;
    }

    /**
     * An oid represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * SOP Instance UID of the selected instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROid
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * An oid represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * SOP Instance UID of the selected instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROid $uid
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionInstance
     */
    public function setUid($uid = null)
    {
        if (null === $uid) {
            $this->uid = null;
            return $this;
        }
        if ($uid instanceof FHIROid) {
            $this->uid = $uid;
            return $this;
        }
        $this->uid = new FHIROid($uid);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * WADO-RS URL to retrieve the DICOM SOP Instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * WADO-RS URL to retrieve the DICOM SOP Instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri $url
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionInstance
     */
    public function setUrl($url = null)
    {
        if (null === $url) {
            $this->url = null;
            return $this;
        }
        if ($url instanceof FHIRUri) {
            $this->url = $url;
            return $this;
        }
        $this->url = new FHIRUri($url);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionInstance $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionInstance
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
                throw new \DomainException(sprintf('FHIRImagingObjectSelectionInstance::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImagingObjectSelectionInstance::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRImagingObjectSelectionInstance;
        } elseif (!is_object($type) || !($type instanceof FHIRImagingObjectSelectionInstance)) {
            throw new \RuntimeException(sprintf(
                'FHIRImagingObjectSelectionInstance::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionInstance or null, %s seen.',
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
        if (isset($children->frames)) {
            foreach($children->frames as $child) {
                $type->addFrames(FHIRImagingObjectSelectionFrames::xmlUnserialize($child));
            }
        }
        if (isset($attributes->sopClass)) {
            $type->setSopClass((string)$attributes->sopClass);
        }
        if (isset($children->sopClass)) {
            $type->setSopClass(FHIROid::xmlUnserialize($children->sopClass));
        }
        if (isset($attributes->uid)) {
            $type->setUid((string)$attributes->uid);
        }
        if (isset($children->uid)) {
            $type->setUid(FHIROid::xmlUnserialize($children->uid));
        }
        if (isset($attributes->url)) {
            $type->setUrl((string)$attributes->url);
        }
        if (isset($children->url)) {
            $type->setUrl(FHIRUri::xmlUnserialize($children->url));
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

        if ([] !== ($vs = $this->getFrames())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FRAMES, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSopClass())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOP_CLASS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUid())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUrl())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_URL, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getFrames())) {
            $a[self::FIELD_FRAMES] = $vs;
        }
        if (null !== ($v = $this->getSopClass())) {
            $a[self::FIELD_SOP_CLASS] = $v->getValue();
            $a[self::FIELD_SOP_CLASS_EXT] = $v;
        }
        if (null !== ($v = $this->getUid())) {
            $a[self::FIELD_UID] = $v->getValue();
            $a[self::FIELD_UID_EXT] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = $v->getValue();
            $a[self::FIELD_URL_EXT] = $v;
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