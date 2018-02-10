<?php namespace PHPFHIRGenerated\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use PHPFHIRGenerated\FHIRResource\FHIRResource;

/**
 * A request for a diagnostic investigation service to be performed.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDiagnosticOrder extends FHIRResource implements \JsonSerializable
{
    /**
     * Who or what the investigation is to be performed on. This is usually a human patient, but diagnostic tests can also be requested on animals, groups of humans or animals, devices such as dialysis machines, or even locations (typically for environmental scans).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $subject = null;

    /**
     * The practitioner that holds legal responsibility for ordering the investigation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $orderer = null;

    /**
     * Identifiers assigned to this order by the order or by the receiver.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * An encounter that provides additional informaton about the healthcare context in which this request is made.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $encounter = null;

    /**
     * An explanation or justification for why this diagnostic investigation is being requested.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $clinicalNotes = null;

    /**
     * One or more specimens that the diagnostic investigation is about.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $specimen = array();

    /**
     * The status of the order.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDiagnosticOrderStatus
     */
    public $status = null;

    /**
     * The clinical priority associated with this order.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDiagnosticOrderPriority
     */
    public $priority = null;

    /**
     * A summary of the events of interest that have occurred as the request is processed. E.g. when the order was made, various processing steps (specimens received), when it was completed.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent[]
     */
    public $event = array();

    /**
     * The specific diagnostic investigations that are requested as part of this request. Sometimes, there can only be one item per request, but in most contexts, more than one investigation can be requested.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem[]
     */
    public $item = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'DiagnosticOrder';

    /**
     * Who or what the investigation is to be performed on. This is usually a human patient, but diagnostic tests can also be requested on animals, groups of humans or animals, devices such as dialysis machines, or even locations (typically for environmental scans).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Who or what the investigation is to be performed on. This is usually a human patient, but diagnostic tests can also be requested on animals, groups of humans or animals, devices such as dialysis machines, or even locations (typically for environmental scans).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The practitioner that holds legal responsibility for ordering the investigation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getOrderer()
    {
        return $this->orderer;
    }

    /**
     * The practitioner that holds legal responsibility for ordering the investigation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $orderer
     * @return $this
     */
    public function setOrderer($orderer)
    {
        $this->orderer = $orderer;
        return $this;
    }

    /**
     * Identifiers assigned to this order by the order or by the receiver.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifiers assigned to this order by the order or by the receiver.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An encounter that provides additional informaton about the healthcare context in which this request is made.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * An encounter that provides additional informaton about the healthcare context in which this request is made.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $encounter
     * @return $this
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * An explanation or justification for why this diagnostic investigation is being requested.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getClinicalNotes()
    {
        return $this->clinicalNotes;
    }

    /**
     * An explanation or justification for why this diagnostic investigation is being requested.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $clinicalNotes
     * @return $this
     */
    public function setClinicalNotes($clinicalNotes)
    {
        $this->clinicalNotes = $clinicalNotes;
        return $this;
    }

    /**
     * One or more specimens that the diagnostic investigation is about.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * One or more specimens that the diagnostic investigation is about.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $specimen
     * @return $this
     */
    public function addSpecimen($specimen)
    {
        $this->specimen[] = $specimen;
        return $this;
    }

    /**
     * The status of the order.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDiagnosticOrderStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the order.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDiagnosticOrderStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The clinical priority associated with this order.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDiagnosticOrderPriority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * The clinical priority associated with this order.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDiagnosticOrderPriority $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * A summary of the events of interest that have occurred as the request is processed. E.g. when the order was made, various processing steps (specimens received), when it was completed.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * A summary of the events of interest that have occurred as the request is processed. E.g. when the order was made, various processing steps (specimens received), when it was completed.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent $event
     * @return $this
     */
    public function addEvent($event)
    {
        $this->event[] = $event;
        return $this;
    }

    /**
     * The specific diagnostic investigations that are requested as part of this request. Sometimes, there can only be one item per request, but in most contexts, more than one investigation can be requested.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * The specific diagnostic investigations that are requested as part of this request. Sometimes, there can only be one item per request, but in most contexts, more than one investigation can be requested.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem $item
     * @return $this
     */
    public function addItem($item)
    {
        $this->item[] = $item;
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
        $json['resourceType'] = $this->_fhirElementName;
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (null !== $this->orderer) $json['orderer'] = $this->orderer;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier;
            }
        }
        if (null !== $this->encounter) $json['encounter'] = $this->encounter;
        if (null !== $this->clinicalNotes) $json['clinicalNotes'] = $this->clinicalNotes;
        if (0 < count($this->specimen)) {
            $json['specimen'] = [];
            foreach($this->specimen as $specimen) {
                $json['specimen'][] = $specimen;
            }
        }
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->priority) $json['priority'] = $this->priority;
        if (0 < count($this->event)) {
            $json['event'] = [];
            foreach($this->event as $event) {
                $json['event'][] = $event;
            }
        }
        if (0 < count($this->item)) {
            $json['item'] = [];
            foreach($this->item as $item) {
                $json['item'][] = $item;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DiagnosticOrder xmlns="http://hl7.org/fhir"></DiagnosticOrder>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->orderer) $this->orderer->xmlSerialize(true, $sxe->addChild('orderer'));
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->encounter) $this->encounter->xmlSerialize(true, $sxe->addChild('encounter'));
        if (null !== $this->clinicalNotes) $this->clinicalNotes->xmlSerialize(true, $sxe->addChild('clinicalNotes'));
        if (0 < count($this->specimen)) {
            foreach($this->specimen as $specimen) {
                $specimen->xmlSerialize(true, $sxe->addChild('specimen'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->priority) $this->priority->xmlSerialize(true, $sxe->addChild('priority'));
        if (0 < count($this->event)) {
            foreach($this->event as $event) {
                $event->xmlSerialize(true, $sxe->addChild('event'));
            }
        }
        if (0 < count($this->item)) {
            foreach($this->item as $item) {
                $item->xmlSerialize(true, $sxe->addChild('item'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}