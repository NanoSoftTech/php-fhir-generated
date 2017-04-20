<?php namespace PHPFHIRGenerated\FHIRResource\FHIRCapabilityStatement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 */
class FHIRCapabilityStatementMessaging extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * An endpoint (network accessible address) to which messages and/or replies are to be sent.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementEndpoint[]
     */
    public $endpoint = array();

    /**
     * Length if the receiver's reliable messaging cache in minutes (if a receiver) or how long the cache length on the receiver should be (if a sender).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $reliableCache = null;

    /**
     * Documentation about the system's messaging capabilities for this endpoint not otherwise documented by the capability statement.  For example, the process for becoming an authorized messaging exchange partner.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $documentation = null;

    /**
     * References to message definitions for messages this system can send or receive.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementSupportedMessage[]
     */
    public $supportedMessage = array();

    /**
     * A description of the solution's support for an event at this end-point.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementEvent[]
     */
    public $event = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'CapabilityStatement.Messaging';

    /**
     * An endpoint (network accessible address) to which messages and/or replies are to be sent.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementEndpoint[]
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * An endpoint (network accessible address) to which messages and/or replies are to be sent.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementEndpoint $endpoint
     * @return $this
     */
    public function addEndpoint($endpoint)
    {
        $this->endpoint[] = $endpoint;
        return $this;
    }

    /**
     * Length if the receiver's reliable messaging cache in minutes (if a receiver) or how long the cache length on the receiver should be (if a sender).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getReliableCache()
    {
        return $this->reliableCache;
    }

    /**
     * Length if the receiver's reliable messaging cache in minutes (if a receiver) or how long the cache length on the receiver should be (if a sender).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $reliableCache
     * @return $this
     */
    public function setReliableCache($reliableCache)
    {
        $this->reliableCache = $reliableCache;
        return $this;
    }

    /**
     * Documentation about the system's messaging capabilities for this endpoint not otherwise documented by the capability statement.  For example, the process for becoming an authorized messaging exchange partner.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Documentation about the system's messaging capabilities for this endpoint not otherwise documented by the capability statement.  For example, the process for becoming an authorized messaging exchange partner.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $documentation
     * @return $this
     */
    public function setDocumentation($documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * References to message definitions for messages this system can send or receive.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementSupportedMessage[]
     */
    public function getSupportedMessage()
    {
        return $this->supportedMessage;
    }

    /**
     * References to message definitions for messages this system can send or receive.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementSupportedMessage $supportedMessage
     * @return $this
     */
    public function addSupportedMessage($supportedMessage)
    {
        $this->supportedMessage[] = $supportedMessage;
        return $this;
    }

    /**
     * A description of the solution's support for an event at this end-point.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementEvent[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * A description of the solution's support for an event at this end-point.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCapabilityStatement\FHIRCapabilityStatementEvent $event
     * @return $this
     */
    public function addEvent($event)
    {
        $this->event[] = $event;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (0 < count($this->endpoint)) {
            $json['endpoint'] = [];
            foreach($this->endpoint as $endpoint) {
                $json['endpoint'][] = json_encode($endpoint);
            }
        }
        if (null !== $this->reliableCache) $json['reliableCache'] = json_encode($this->reliableCache);
        if (null !== $this->documentation) $json['documentation'] = json_encode($this->documentation);
        if (0 < count($this->supportedMessage)) {
            $json['supportedMessage'] = [];
            foreach($this->supportedMessage as $supportedMessage) {
                $json['supportedMessage'][] = json_encode($supportedMessage);
            }
        }
        if (0 < count($this->event)) {
            $json['event'] = [];
            foreach($this->event as $event) {
                $json['event'][] = json_encode($event);
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<CapabilityStatementMessaging xmlns="http://hl7.org/fhir"></CapabilityStatementMessaging>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->endpoint)) {
            foreach($this->endpoint as $endpoint) {
                $endpoint->xmlSerialize(true, $sxe->addChild('endpoint'));
            }
        }
        if (null !== $this->reliableCache) $this->reliableCache->xmlSerialize(true, $sxe->addChild('reliableCache'));
        if (null !== $this->documentation) $this->documentation->xmlSerialize(true, $sxe->addChild('documentation'));
        if (0 < count($this->supportedMessage)) {
            foreach($this->supportedMessage as $supportedMessage) {
                $supportedMessage->xmlSerialize(true, $sxe->addChild('supportedMessage'));
            }
        }
        if (0 < count($this->event)) {
            foreach($this->event as $event) {
                $event->xmlSerialize(true, $sxe->addChild('event'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}